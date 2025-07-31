<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{

    public function getHomeFeedSection(Request $request)
    {
        HomeController::generateHomeFeed();
        if ($request->get('blah') === 'show') {
            $type = $request->get('type') ?? 'default';

            $category = Category::where('scheme', $type)->first();

            if ($category) {
                $posts = $category->posts()->latest()->take(4)->get();
            } else {
                $posts = Post::latest()->take(4)->get();
            }

            // return or use $posts as needed
        } else {
            $type = $request->get('type');
            $feed = Cache::get('homepage_sections', []);

            if (!$type || !isset($feed[$type])) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid or missing section type.',
                ], 404);
            }

            $postIds = $feed[$type];
            $posts = Post::with(['author', 'category']) // eager load
                ->whereIn('id', $postIds)
                ->get()
                ->sortBy(function ($post) use ($postIds) {
                    return array_search($post->id, $postIds);
                })->values();
        }

        return response()->json([
            'type' => $type,
            'version' => '1.0',
            'encoding' => 'UTF-8',
            'feed' => [
                'xmlns' => 'http://www.w3.org/2005/Atom',
                'xmlns$openSearch' => 'http://a9.com/-/spec/opensearchrss/1.0/',
                'xmlns$gd' => 'http://schemas.google.com/g/2005',
                'id' => ['$t' => 'tag:blogger.com,1999:blog-YOUR_BLOG_ID'],
                'updated' => ['$t' => now()->toIso8601String()],
                'title' => ['type' => 'text', '$t' => 'Your Blog Title'],
                'subtitle' => ['type' => 'text', '$t' => 'Your Blog Description'],
                'link' => [
                    ['rel' => 'alternate', 'type' => 'text/html', 'href' => url('/')],
                    ['rel' => 'self', 'type' => 'application/atom+xml', 'href' => url('/feed')]
                ],
                'author' => [
                    [
                        'name' => ['$t' => 'Admin'],
                        'email' => ['$t' => 'admin@example.com'],
                        'gd$image' => [
                            'rel' => 'thumbnail',
                            'width' => '32',
                            'height' => '32',
                            'src' => asset('logocolor.png')
                        ]
                    ]
                ],
                'generator' => ['version' => '7.00', 'uri' => 'http://www.blogger.com', '$t' => 'Blogger'],
                'openSearch$totalResults' => ['$t' => $posts->count()],
                'openSearch$startIndex' => ['$t' => 1],
                'openSearch$itemsPerPage' => ['$t' => 25],
                'entry' => $posts->map(function ($post) {
                    return [
                        'id' => ['$t' => $post->id],
                        'published' => ['$t' => $post->published_at?->toIso8601String() ?? now()->toIso8601String()],
                        'updated' => ['$t' => $post->updated_at?->toIso8601String() ?? now()->toIso8601String()],
                        'title' => ['type' => 'text', '$t' => $post->title],
                        'content' => [
                            'type' => 'html',
                            '$t' => "<a href='{$post->thumbnail_url}' imageanchor=\"1\" style=\"margin-left: 1em; margin-right: 1em;\">
                            <img border=\"0\" data-original-height=\"1000\" data-original-width=\"1500\" height=\"426\" src='{$post->thumbnail_url}' width=\"640\" />
                        </a>"
                        ],
                        'link' => array_merge(
                            $post->linkss ?? [],
                            [
                                [
                                    'rel' => 'alternate',
                                    'type' => 'text/html',
                                    'href' => route('home.show', [
                                        'category' => $post->category->scheme ?? 'uncategorized',
                                        'post' => $post->slug ?? $post->id
                                    ]),
                                    'title' => $post->title
                                ]
                            ]
                        ),
                        'author' => [
                            [
                                'name' => ['$t' => $post->author->name ?? 'Unknown'],
                                'email' => ['$t' => $post->author->email ?? 'noemail@example.com'],
                                'gd$image' => $post->author->image_url ? [
                                    'rel' => 'thumbnail',
                                    'width' => '32',
                                    'height' => '32',
                                    'src' => $post->author->image_url
                                ] : null
                            ]
                        ],
                        'media$thumbnail' => $post->media_thumbnail ?? null,
                        // 'category' => $post->category
                        //     ? [[
                        //         'scheme' => $post->category->scheme ?? '',
                        //         'term' => $post->category->slug ?? '',
                        //         'label' => $post->category->name ?? ''
                        //     ]]
                        //     : [],
                        'category' => $post->category
                            ? [$post->category->only(['scheme', 'term', 'label'])]
                            : [],
                        'gd$image' => $post->author->image_url ? [
                            'rel' => 'thumbnail',
                            'width' => '32',
                            'height' => '32',
                            'src' => $post->author->image_url
                        ] : null
                    ];
                })->toArray()
            ]
        ], 200, [
            'Content-Type' => 'application/atom+xml; charset=UTF-8'
        ]);
    }

    public function index(Request $request)
    {
        $type = $request['type'] ?? 'default';
        $count = $request['max-results'] ?? 6;

        $query = Post::with(['author', 'category']);

        if ($type === 'slide') {
            $query->where('slide', true);
            $query->orderBy('published_at', 'desc');
        } elseif ($type === 'featured') {
            $query->orderBy('views', 'desc'); // Only by views
        } elseif ($type !== 'default') {
            $query->whereHas('category', fn($q) => $q->where('term', $type));
            $query->orderBy('published_at', 'desc');
        } else {
            $query->orderBy('published_at', 'desc');
        }

        $posts = $query->paginate($count);

        return response()->json([
            'type' => $type,
            'version' => '1.0',
            'encoding' => 'UTF-8',
            'feed' => [
                'xmlns' => 'http://www.w3.org/2005/Atom',
                'xmlns$openSearch' => 'http://a9.com/-/spec/opensearchrss/1.0/',
                'xmlns$gd' => 'http://schemas.google.com/g/2005',
                'id' => ['$t' => 'tag:blogger.com,1999:blog-YOUR_BLOG_ID'],
                'updated' => ['$t' => now()->toIso8601String()],
                'title' => ['type' => 'text', '$t' => 'Your Blog Title'],
                'subtitle' => ['type' => 'text', '$t' => 'Your Blog Description'],
                'link' => [
                    ['rel' => 'alternate', 'type' => 'text/html', 'href' => url('/')],
                    ['rel' => 'self', 'type' => 'application/atom+xml', 'href' => url('/feed')]
                ],
                'author' => [
                    [
                        'name' => ['$t' => 'Admin'],
                        'email' => ['$t' => 'admin@example.com'],
                        'gd$image' => ['rel' => 'thumbnail', 'width' => '32', 'height' => '32', 'src' => asset('logocolor.png')]
                    ]
                ],
                'generator' => ['version' => '7.00', 'uri' => 'http://www.blogger.com', '$t' => 'Blogger'],
                'openSearch$totalResults' => ['$t' => $posts->count()],
                'openSearch$startIndex' => ['$t' => 1],
                'openSearch$itemsPerPage' => ['$t' => 25],
                'entry' => $posts->map(function ($post) {
                    return [
                        'id' => ['$t' => $post->id],
                        'published' => ['$t' => $post->published_at->toIso8601String()],
                        'updated' => ['$t' => $post->updated_at->toIso8601String()],
                        'title' => ['type' => 'text', '$t' => $post->title],
                        'content' => ['type' => 'html', '$t' => "<a href='$post->thumbnail_url' imageanchor=\"1\" style=\"margin-left: 1em; margin-right: 1em;\"><img border=\"0\" data-original-height=\"1000\" data-original-width=\"1500\" height=\"426\" src='$post->thumbnail_url' width=\"640\" /></a>"],
                        'link' => array_merge(
                            $post->linkss ?? [],
                            [
                                [
                                    'rel' => 'alternate',
                                    'type' => 'text/html',
                                    'href' =>  $post->id,
                                    // 'href' => route('posts.show', $post->id),
                                    'title' => $post->title
                                ]
                            ]
                        ),
                        'author' => [
                            [
                                'name' => ['$t' => $post->author->name],
                                'email' => ['$t' => $post->author->email],
                                'gd$image' => $post->author->image_url ? [
                                    'rel' => 'thumbnail',
                                    'width' => '32',
                                    'height' => '32',
                                    'src' => $post->author->image_url
                                ] : null
                            ]
                        ],
                        'media$thumbnail' => $post->media_thumbnail,
                        'category' => $post->category
                            ? [$post->category->only(['scheme', 'term', 'label'])]
                            : [],
                        'gd$image' => $post->author->image_url ? [
                            'rel' => 'thumbnail',
                            'width' => '32',
                            'height' => '32',
                            'src' => $post->author->image_url
                        ] : null


                    ];
                })->toArray()
            ]
        ], 200, [
            'Content-Type' => 'application/atom+xml; charset=UTF-8'
        ]);
    }

    public function feed(Request $request)
    {
        $type = $request['type'] ?? 'default';
        $count = $request['max-results'] ?? 6;
        $globalKey = 'homepage_used_post_ids';
        $usedPostIds = collect(Cache::get($globalKey, []));

        if ($type === 'slide') {
            $slide = Post::where('slide', true)
                ->whereNotIn('id', $usedPostIds)
                ->take($count)
                ->get();
            $usedPostIds = $usedPostIds->merge($slide->pluck('id'));

            if ($slide->count() < $count) {
                $remaining = $count - $slide->count();
                $extra = Post::where('slide', false)
                    ->whereNotIn('id', $usedPostIds)
                    ->take($remaining)
                    ->get();
                $slide = $slide->merge($extra);
                $usedPostIds = $usedPostIds->merge($extra->pluck('id'));
            }

            Cache::put($globalKey, $usedPostIds->unique()->values()->toArray(), now()->addMinutes(30));

            return response()->json([
                'type' => 'slide',
                'posts' => $slide,
            ]);
        }

        if ($type === 'default') {
            $latest = Post::whereNotIn('id', $usedPostIds)
                ->latest()
                ->take($count)
                ->get();

            $usedPostIds = $usedPostIds->merge($latest->pluck('id'));
            Cache::put($globalKey, $usedPostIds->unique()->values()->toArray(), now()->addMinutes(30));

            return response()->json([
                'type' => 'latest',
                'posts' => $latest,
            ]);
        }

        if ($type === 'category1') {
            $topCategoryIds = Category::withCount('posts')
                ->orderByDesc('posts_count')
                ->take(2)
                ->pluck('id');

            $otherCategory = Category::withCount('posts')
                ->whereNotIn('id', $topCategoryIds)
                ->having('posts_count', '>', 0)
                ->orderByDesc('posts_count')
                ->skip(0)->take(1)
                ->first();

            if ($otherCategory) {
                $posts = Post::where('category_id', $otherCategory->id)
                    ->whereNotIn('id', $usedPostIds)
                    ->latest()
                    ->take(3)
                    ->get();

                $usedPostIds = $usedPostIds->merge($posts->pluck('id'));
                Cache::put($globalKey, $usedPostIds->unique()->values()->toArray(), now()->addMinutes(30));

                return response()->json([
                    'type' => 'category1',
                    'category' => $otherCategory,
                    'posts' => $posts,
                ]);
            }

            return response()->json([
                'type' => 'category1',
                'posts' => [],
                'message' => 'No available category',
            ]);
        }

        return response()->json([
            'message' => 'Invalid or missing type',
        ]);
    }

    public function generateHomeFeed()
    {
        $usedIds = collect();
        $result = [];

        // Slide
        $slide = Post::where('slide', true)->take(6)->get();
        $slideIds = $slide->pluck('id');
        $usedIds = $usedIds->merge($slideIds);

        if ($slide->count() < 6) {
            $extra = Post::where('slide', false)
                ->whereNotIn('id', $usedIds)
                ->take(6 - $slide->count())
                ->get();
            $slide = $slide->merge($extra);
            $slideIds = $slide->pluck('id');
            $usedIds = $usedIds->merge($extra->pluck('id'));
        }
        $result['slide'] = $slideIds->toArray();

        // Latest
        $latest = Post::whereNotIn('id', $usedIds)
            ->latest()
            ->take(5)
            ->get();
        $result['latest'] = $latest->pluck('id')->toArray();
        $usedIds = $usedIds->merge($latest->pluck('id'));

        // Wow (Top 1 Category)
        $wowCategory = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->first();

        if ($wowCategory) {
            $wowPosts = Post::where('category_id', $wowCategory->id)
                ->whereNotIn('id', $usedIds)
                ->latest()
                ->take(3)
                ->get();
            $result['wow'] = $wowPosts->pluck('id')->toArray();
            $usedIds = $usedIds->merge($wowPosts->pluck('id'));
        }

        // Wo2 (next 1–2 categories)
        $wo2Categories = Category::withCount('posts')
            ->where('id', '!=', optional($wowCategory)->id)
            ->orderByDesc('posts_count')
            ->take(2)
            ->get();

        $wo2Posts = collect();
        foreach ($wo2Categories as $index => $cat) {
            if ($index == 0) {
                $posts = Post::where('category_id', $cat->id)
                    ->whereNotIn('id', $usedIds)
                    ->latest()
                    ->take(1)
                    ->get();

                $wo2Posts = $wo2Posts->merge($posts);
                $usedIds = $usedIds->merge($posts->pluck('id'));
            } else {
                $posts = Post::where('category_id', $cat->id)
                    ->whereNotIn('id', $usedIds)
                    ->latest()
                    ->take(2)
                    ->get();

                $wo2Posts = $wo2Posts->merge($posts);
                $usedIds = $usedIds->merge($posts->pluck('id'));
            }
        }
        $result['wo2'] = $wo2Posts->pluck('id')->toArray();

        $latestDetailed = Post::whereNotIn('id', $usedIds)
            ->latest()
            ->take(4)
            ->get();
        $result['latest_detailed'] = $latestDetailed->pluck('id')->toArray();
        $usedIds = $usedIds->merge($latestDetailed->pluck('id'));

        // Slide Inpage (optional fallback)
        $slideInPage = Post::whereNotIn('id', $usedIds)
            ->orderByDesc('views')
            ->take(4)
            ->get();
        $result['slide_inpage'] = $slideInPage->pluck('id')->toArray();
        $usedIds = $usedIds->merge($slideInPage->pluck('id'));

        // Side (two categories)
        $sidePosts = Post::latest()
            ->whereNotIn('id', $usedIds)
            ->take(3)
            ->get();
        $usedIds = $usedIds->merge($sidePosts->pluck('id'));


        $sidePosts2 = Post::latest()
            ->whereNotIn('id', $usedIds)
            ->take(3)
            ->get();
        $result['side'] = $sidePosts->pluck('id')->toArray();
        $result['side2'] = $sidePosts2->pluck('id')->toArray();

        Cache::put('homepage_sections', $result, now()->addMinutes(30));
    }

    public function show(Category $category, Post $post)
    {
        // Optional: Ensure post belongs to the given category
        // if ($post->category_id !== $category->id) {
        //     abort(404);
        // }
        $topCategories = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(3)
            ->get();

        return view('show', compact('category', 'post', 'topCategories'));
    }

    public function categoryShow(Category $category)
    {
        $posts = $category->posts()->latest()->paginate(10);
        $topCategories = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(3)
            ->get();

        return view('category', compact('category', 'posts', 'topCategories'));
    }
}
