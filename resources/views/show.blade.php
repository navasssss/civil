<!DOCTYPE html>
<html class='ltr' dir='ltr' lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b'
    xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes'
        name='viewport' />
    <title>{{ $post->title }}</title>
    <link href='//fonts.gstatic.com' rel='dns-prefetch' />
    <link href='//dnjs.cloudflare.com' rel='dns-prefetch' />

    <link href='{{ asset('favicon.ico') }}' rel='icon' type='image/x-icon' />
    <link href='{{ url()->current() }}' rel='canonical' />
    <meta content='{{ Str::limit(strip_tags($post->description), 160) }}' name='description' />

    <!-- Metadata for Open Graph protocol. See http://ogp.me/. -->
    <meta content='en' property='og:locale' />
    <meta content='article' property='og:type' />
    <meta content='{{ $post->title }}' property='og:title' />
    <meta content='{{ url()->current() }}' rel='canonical' property='og:url' />
    <meta content='{{ Str::limit(strip_tags($post->description), 160) }}' property='og:description' />
    <meta content='Atlas - home 2' property='og:site_name' />
    <meta content='{{ asset($post->thumbnail_url) }}' property='og:image' />
    <meta content='{{ asset($post->thumbnail_url) }}' name='twitter:image' />
    <meta content='summary_large_image' name='twitter:card' />
    <meta content='{{ $post->title }}' name='twitter:title' />
    <meta content='{{ url()->current() }}' name='twitter:domain' />
    <meta content='{{ Str::limit(strip_tags($post->description), 160) }}' name='twitter:description' />

    <!-- Google Font Poppins -->
    <link as='style' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap'
        rel='stylesheet' />
    <!-- Google Font Tajwal RTL -->


    <link rel="stylesheet" href="{{ asset('style1.css') }}">


</head>

<body class='single post hasIE hasTE hasLE'>
    <div class='settings section' id='settings' name='Settings'>
        <div class='widget ContactForm' data-version='2' id='ContactForm1'>
            <div class='widget-content contact-form-widget'>
                <div class='form'>
                    <form name='contact-form'>
                        <input class='contact-form-name' id='ContactForm1_contact-form-name' name='name'
                            placeholder='Name' size='30' type='text' value='' />
                        <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
                            placeholder='Email*' size='30' type='text' value='' />
                        <textarea class='contact-form-email-message' cols='25'
                            id='ContactForm1_contact-form-email-message' name='email-message' placeholder='Message*'
                            rows='5'></textarea>
                        <input class='contact-form-button contact-form-button-submit'
                            id='ContactForm1_contact-form-submit' type='button' value='Send' />
                        <p class='contact-form-error-message' id='ContactForm1_contact-form-error-message'>
                        </p>
                        <p class='contact-form-success-message' id='ContactForm1_contact-form-success-message'></p>
                    </form>
                </div>
            </div>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList200'>
            <style>
                [data-cat] a {
                    color: white;
                    /* optional, to ensure contrast */
                    padding: 5px;
                    display: inline-block;
                    border-radius: 4px;
                }
            </style>
            <style type='text/css'>
                [data-cat=Gadget] a {
                    background-color: red
                }

                [data-cat=Gadget] a {
                    color: red
                }

                [data-type="iconList"] .list.hasIcons .linkedin a {
                    background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                }

                [data-type="iconList"] .cloud.hasIcons .linkedin a:before {
                    background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                }

                [data-type="iconList"] .cloud.hasIcons .linkedin .icon-meta {
                    color: #218fb9
                }
            </style>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList201'>
            <style type='text/css'>
                .tiktok a:before {
                    content: "\e07b"
                }

                .pinterest a:before {
                    content: "\f231"
                }

                .twitch a:before {
                    content: "\f1e8"
                }

                .github a:before {
                    content: "\f09b"
                }
            </style>
        </div>
        <div class='widget LinkList' data-version='2' id='LinkList202'>
            <script type='text/javascript'>
                var propData = {

                    darkLogo: "{{ asset('logodark1.png') }}",

                }
            </script>
        </div>
    </div>
    <div class='offCanvas wrapper'>
        <div class='offCanvas-inner'>
            <div class='canvas-1 section' id='canvas-1' name='offCanvas [mobile]'>

                {{-- <div class='widget HTML' data-version='2' id='HTML10'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Latest
                        </h3>
                    </div>
                    <div class='widget-content' data-fetch='sided-1[default]6'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div> --}}

                <div class='widget LinkList' data-version='2' id='LinkList5'>
                    <ul class='list' role='navigation'>
                        @foreach ($topCategories as $categ)
                            <li>
                                <a href='{{ route('category.show', $categ->term) }}'>{{ ucfirst(trim($categ->term)) }}</a>

                            </li>
                        @endforeach
                        <li><a href='{{ route('about') }}'>ABOUT US</a></li>
                        <li><a href='{{ route('contact') }}'>CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class='canvas-2 sidebar section' id='canvas-2' name='offCanvas [global]'>
                {{-- <div class='widget HTML' data-version='2' id='HTML10'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Latest
                        </h3>
                    </div>
                    <div class='widget-content' data-fetch='sided-1[default]6'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div> --}}

                <div class='widget Image' data-version='2' id='Image1'>
                    <div class='widget-content hasLogo'>
                        <a class='logo' href='{{ url('/') }}'>
                            <img alt='The Evident' height='84' id='Image1_img' src='{{ asset('logocolor1.png') }}'
                                width='132' />
                        </a>
                        <ul data-option='{"phone": "+34 000 0000", "location": "Hong Kong 122, Pak Road"}'>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='searchForm wrapper'>
        <span data-icon='close' role='button'></span>
        <div class='searchForm-inner'>
            <form action='/search' method='get'>
                <input autocomplete='off' name='q' placeholder='Enter keyword...' type='text' value='' />
                <input type='submit' value='Search' />
            </form>
            <div class='searchForm-results'></div>
        </div>
    </div>
    <header class='header wrapper'>
        <div class='header-inner'>
            <div class='header-mainbar-overlay'>
                <div class='header-mainbar section' id='header-mainbar' name='Header Main Bar'>
                    <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList2'>
                        <ul class='cloud' role='navigation'>
                            <li class='hasIcon grid'>
                                <a href='#' target='_blank'>
                                    <svg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7' x='1'
                                            y='1'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7' x='1'
                                            y='11'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7'
                                            x='11' y='1'></rect>
                                        <rect fill='currentColor' height='7' rx='3' ry='3' stroke='none' width='7'
                                            x='11' y='11'></rect>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class='widget Header' data-version='2' id='Header1'>
                        <a class='logo' href='{{ url('/') }}'>
                            <img alt='The Evident' height='84' src='{{ asset('logocolor1.png') }}' title='The Evident'
                                width='132' />
                        </a>
                    </div>
                    <div class='widget LinkList' data-version='2' id='LinkList1'>
                        <ul class='cloud' role='navigation'>
                            @foreach ($topCategories as $category)
                                <li>
                                    <a href='{{ route('category.show', $category->term) }}'>{{ ucfirst(trim($category->term)) }}
                                    </a>

                                </li>
                            @endforeach
                            <li><a href='{{ route('about') }}'>ABOUT US</a></li>
                            <li><a href='{{ route('contact') }}'>CONTACT</a></li>
                            {{-- <li class='hasMega'>
                                <a href='/search/label/Topics'>Topics</a>
                                <ul class='widget-content' data-fetch='mega-1[Living,Food]4'></ul>
                            </li>
                            <li class='hasMega'>
                                <a href='/search/label/Picked'>Picked</a>
                                <ul class='widget-content' data-fetch='mega-2[Gadget,Style]'></ul>
                            </li>
                            <li class='hasMega'>
                                <a href='/search/label/Style'>Style</a>
                                <ul class='widget-content' data-fetch='mega-2[Style]4'></ul>
                            </li>
                            <li>
                                <a href='#'>Explore</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_LIVING</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Education</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Style</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Parenting</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_ARTS</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Theatre</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Movies</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Music</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_SPORTS</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Football</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Tennis</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Basketball</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>_CITIES</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Hong Kong</a>
                            </li>
                            <li class='subItem'>
                                <a href='#'>__Istanbul</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList7'>
                        <ul class='cloud' role='navigation'>
                            <li class='hasIcon twitter'>
                                <a href='#' target='_blank'>
                                    <span class='icon-meta'>30k</span>
                                </a>
                            </li>
                            <li class='hasIcon linkedin'>
                                <a href='#' target='_blank'>
                                    <span class='icon-meta'>30k</span>
                                </a>
                            </li>
                            <li class='hasIcon search'>
                                <a href='#' target='_blank'>
                                    <svg fill='none' stroke='currentColor' stroke-width='3px' viewBox='0 0 24 24'>
                                        <g transform='translate(2.000000, 2.000000)'>
                                            <circle cx='9.76659044' cy='9.76659044' r='8.9885584'>
                                            </circle>
                                            <line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'>
                                            </line>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='header-childbar no-items section' id='header-childbar' name='Header Child Bar'></div>
        </div>
    </header>
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-2'>
                <main class='main wrapper'>
                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                            <div class='widget-content'>
                                <div class='posts'>
                                    <article class='post'>
                                        <div class='post-header'>
                                            <div class='headerDetails'>
                                                <nav class='breadcrumb'>
                                                    <span class='backHome'><a
                                                            href='https://atlas-home2.blogspot.com/'>Home</a></span>
                                                    <span class='postCat' data-cat='{{ $category->term }}'><a
                                                            href='{{ route('category.show', $category->scheme) }}'>{{ $category->term}}</a></span>
                                                </nav>
                                                <script type="application/ld+json">
                                                        {
                                                        "@context": "http://schema.org",
                                                        "@type": "BreadcrumbList",
                                                        "itemListElement": [
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 1,
                                                            "name": "Home",
                                                            "item": "{{ url('/') }}"
                                                            },
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 2,
                                                            "name": "{{ $category->name }}",
                                                            "item": "{{ route('category.show', $category->scheme) }}"
                                                            },
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 3,
                                                            "name": "{{ $post->title }}",
                                                            "item": "{{ route('home.show', [$category->scheme, $post->slug]) }}"
                                                            }
                                                                            ]
                                                            }
                                                        </script>

                                                <h1 class='postTitle'>{{ $post->title }}
                                                </h1>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage'
                                                                data-style='{{ asset($post->author->image_url) }}'></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                {{ $post->author->name }}
                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime='{{ $post->published_at->toIso8601String() }}'></time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ url()->current() }}"
  },
  "headline": "{{ $post->title }}",
  "description": "{{ Str::limit(strip_tags($post->description), 160) }}",
  "datePublished": "{{ $post->published_at?->toIso8601String() ?? $post->created_at->toIso8601String() }}",
  "dateModified": "{{ $post->updated_at->toIso8601String() }}",
  "image": {
    "@type": "ImageObject",
    "url": "{{ $post->thumbnail_url }}",
    "height": 675,
    "width": 1200
  },
  "author": {
    "@type": "Person",
    "name": "{{ $post->author->name ?? 'Unknown Author' }}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "The Evident",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('logocolor.png') }}",
      "width": 206,
      "height": 60
    }
  }
}
</script>

                                        </div>
                                        <div class='post-inner col-2'>
                                            <div class='postArticle'>
                                                <div class='articleBody' id='articleBody'>
                                                    <div class="separator" style="clear: both; text-align: center;"><a
                                                            href="{{ asset($post->thumbnail_url) }}"
                                                            style="margin-left: 1em; margin-right: 1em;"><img border="0"
                                                                data-original-height="1600" data-original-width="1600"
                                                                height="640" src="{{ asset($post->thumbnail_url) }}"
                                                                width="640" /></a></div>
                                                    <div class="separator" style="clear: both; text-align: center;">
                                                        <br />
                                                    </div>
                                                    <div dir="ltr" style="text-align: left;">
                                                        {!! str($post->content)->markdown()->sanitizeHtml() !!}
                                                    </div>


                                                </div>
                                                <div class='postLabels'>
                                                    <a class='labelName' data-cat='{{ $category->term }}'
                                                        href='https://atlas-home2.blogspot.com/search/label/{{ $category->scheme }}'
                                                        rel='tag'>{{ $category->term }}</a>
                                                </div>
                                            </div>
                                            <div class='postShare sticky'>
                                                <ul>
                                                    {{-- <li class='hasIcon facebook-f visible'>
                                                        <a href='http://www.facebook.com/sharer.php?u=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&title=Will Humans be able to live in Mars in the future?'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Facebook'>
                                                            <span>Facebook</span>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon twitter visible'>
                                                        <a href='http://twitter.com/share?url=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&title=Will Humans be able to live in Mars in the future?'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Twitter'>
                                                            <span>Twitter</span>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon pinterest-p visible'>
                                                        <a href='http://pinterest.com/pin/create/button/?url=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&media=&description='
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Pinterest'>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon linkedin visible'>
                                                        <a href='http://www.linkedin.com/shareArticle?url=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&title=Will Humans be able to live in Mars in the future?'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Linkedin'>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon telegram visible'>
                                                        <a data-height='520' data-width='860'
                                                            href='https://telegram.me/share/url?url=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&text=Will Humans be able to live in Mars in the future?'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Telegram'>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon reddit'>
                                                        <a data-height='520' data-width='860'
                                                            href='https://reddit.com/submit?url=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html&title=Will Humans be able to live in Mars in the future?'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' target='_blank' title='Share to Reddit'>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon whatsapp'>
                                                        <a data-height='520' data-width='860'
                                                            href='https://api.whatsapp.com/send?text=Will Humans be able to live in Mars in the future? | https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                                            onclick='window.open(this.href, &#39;windowName&#39;, &#39;width=600, height=400, left=24, top=24, scrollbars, resizable&#39;); return false;'
                                                            rel='nofollow' title='Share to WhatsApp'>
                                                        </a>
                                                    </li>
                                                    <li class='hasIcon email'>
                                                        <a data-height='500' data-width='520'
                                                            href='mailto:?subject=Will Humans be able to live in Mars in the future?&body=https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                                            rel='nofollow' title='Email'>
                                                        </a>
                                                    </li>
                                                    <li class='showMore visible'>
                                                        <a data-icon='plus' href='#showmore' role='button'></a>
                                                    </li> --}}


                                                    @php
                                                        $url = urlencode(request()->fullUrl());
                                                        $title = urlencode($post->title ?? ''); // Fallback in case title is missing
                                                    @endphp

                                                    <li class='hasIcon facebook-f visible'>
                                                        <a href="https://www.facebook.com/sharer.php?u={{ $url }}&title={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Facebook">
                                                            <span>Facebook</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon twitter visible'>
                                                        <a href="https://twitter.com/share?url={{ $url }}&title={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Twitter">
                                                            <span>Twitter</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon pinterest-p visible'>
                                                        <a href="https://pinterest.com/pin/create/button/?url={{ $url }}&media=&description={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Pinterest">
                                                            <span>Pinterest</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon linkedin visible'>
                                                        <a href="https://www.linkedin.com/shareArticle?url={{ $url }}&title={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to LinkedIn">
                                                            <span>LinkedIn</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon telegram visible'>
                                                        <a href="https://telegram.me/share/url?url={{ $url }}&text={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Telegram">
                                                            <span>Telegram</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon reddit'>
                                                        <a href="https://reddit.com/submit?url={{ $url }}&title={{ $title }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Reddit">
                                                            <span>Reddit</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon whatsapp'>
                                                        <a href="https://api.whatsapp.com/send?text={{ $title }} | {{ $url }}"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to WhatsApp">
                                                            <span>WhatsApp</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon email'>
                                                        <a href="mailto:?subject={{ $title }}&body={{ $url }}"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Email">
                                                            <span>Email</span>
                                                        </a>
                                                    </li>

                                                    <li class='showMore visible'>
                                                        <a data-icon="plus" href="#showmore"
                                                            role="button"><span>More</span></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <footer class='postFooter'>
                                            <div class='widget authorProfile'>
                                                <div class='authorHead'>
                                                    <div class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                    </div>
                                                    <span class='authorName'>Posted
                                                        by<strong>{{ $post->author->name }}</strong></span>
                                                </div>
                                                <div class='authorDesc'>
                                                    <p class='authorAbout'>{{ $post->author->about }}
                                                        <a data="email" href="mailto:{{ $post->author->email }}"></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class='widget related-posts'>
                                                <div class='widget-heading'>
                                                    <h3 class='title'>Related Posts</h3>
                                                </div>
                                                <div class='widget-content' data-fetch='grid-8[Living]3'>
                                                </div>
                                            </div>
                                        </footer>
                                    </article>
                                    {{-- <div class='postComments'>
                                        <a name='comments'></a>
                                        <div class='widget-heading'>
                                            <h3 class='title'>1
                                                Comments</h3>
                                        </div>
                                        <section class='comments threaded hasComments' data-embed='true'
                                            data-num-comments='1' id='comments'>
                                            <div class='comments-content'>
                                                <div id='comment-holder'>
                                                    <div class="comment-thread toplevel-thread">
                                                        <ol id="top-ra">
                                                            <li class="comment" id="c4750756605508414592">
                                                                <div class="avatar-image-container"><img
                                                                        src="//2.bp.blogspot.com/-79vpFWtwqcA/ZTA5t_ts0yI/AAAAAAAABfQ/W50V1IrHpH8c-CNesISwSksBpgxu8lV_QCK4BGAYYCw/s35/DALL%2525C2%2525B7E%2525202023-10-19%25252003.01.02%252520-%252520Vector%252520of%252520a%252520stylish%2525203D%252520logo%252520with%252520%2527HiuBlog%2527%252520standing%252520out%252520in%252520a%252520bold%252520and%252520voluminous%252520design%252520against%252520a%252520complementary%252520backdrop%252C%252520ensuring%252520that%252520the%252520text%252520%2527HiuB.png"
                                                                        alt="" /></div>
                                                                <div class="comment-block">
                                                                    <div class="comment-header"><cite class="user"><a
                                                                                href="https://www.blogger.com/profile/16536681073134316302"
                                                                                rel="nofollow">Nguyễn Mạnh
                                                                                Hiếu</a></cite><span
                                                                            class="icon user "></span><span
                                                                            class="datetime secondary-text"><a
                                                                                rel="nofollow"
                                                                                href="https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html?showComment=1697510200652#c4750756605508414592">October
                                                                                16, 2023 at 7:36&#8239;PM</a></span>
                                                                    </div>
                                                                    <p class="comment-content">test</p><span
                                                                        class="comment-actions secondary-text"><a
                                                                            class="comment-reply" target="_self"
                                                                            data-comment-id="4750756605508414592">Reply</a><span
                                                                            class="item-control blog-admin blog-admin pid-1426677651"><a
                                                                                target="_self"
                                                                                href="https://www.blogger.com/comment/delete/6110379639549342881/4750756605508414592">Delete</a></span></span>
                                                                </div>
                                                                <div class="comment-replies">
                                                                    <div id="c4750756605508414592-rt"
                                                                        class="comment-thread inline-thread hidden">
                                                                        <span
                                                                            class="thread-toggle thread-expanded"><span
                                                                                class="thread-arrow"></span><span
                                                                                class="thread-count"><a
                                                                                    target="_self">Replies</a></span></span>
                                                                        <ol id="c4750756605508414592-ra"
                                                                            class="thread-chrome thread-expanded">
                                                                            <div></div>
                                                                            <div id="c4750756605508414592-continue"
                                                                                class="continue"><a
                                                                                    class="comment-reply" target="_self"
                                                                                    data-comment-id="4750756605508414592">Reply</a>
                                                                            </div>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-replybox-single"
                                                                    id="c4750756605508414592-ce"></div>
                                                            </li>
                                                        </ol>
                                                        <div id="top-continue" class="continue"><a class="comment-reply"
                                                                target="_self">Add comment</a></div>
                                                        <div class="comment-replybox-thread" id="top-ce"></div>
                                                        <div class="loadmore hidden" data-post-id="1013237735166602475">
                                                            <a target="_self">Load more...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='comment-form'>
                                                <a name='comment-form'></a>
                                                <a href='https://www.blogger.com/comment/frame/6110379639549342881?po=1013237735166602475&hl=en&saa=85391&origin=https://atlas-home2.blogspot.com&skin=soho'
                                                    id='comment-editor-src' rel='noopener noreferrer'
                                                    title='Comment Form Link'></a>
                                                <iframe allowtransparency='allowtransparency'
                                                    class='blogger-iframe-colorize blogger-comment-from-post'
                                                    frameborder='0' height='90px' id='comment-editor'
                                                    name='comment-editor' src='' width='100%'></iframe>
                                                <script
                                                    src='https://www.blogger.com/static/v1/jsbin/1167892209-comment_from_post_iframe.js'
                                                    type='text/javascript'></script>
                                                <script type='text/javascript'>
                                                    BLOG_CMT_createIframe('https://www.blogger.com/rpc_relay.html');
                                                </script>
                                            </div>
                                        </section>
                                    </div> --}}
                                </div>
                                <script type='text/javascript'>
                                    var postMeta = { date: !0, author: !0 }
                                </script>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class='aside wrapper'>
                    <div class='sidebar-1 sidebar section' id='sidebar-1' name='Sidebar [Post]'>
                        <div class='widget HTML' data-version='2' id='HTML5'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    {{ $category->term }}
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='sided-1[{{ $category->scheme }}]4'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'></div>
                </aside>
            </div>
        </div>
    </div>
    <footer class='footer wrapper'>
        <div class='footer-inner'>
            <div class='footer-columns section' id='footer-columns' name='Footer Columns'>
                <div class='widget PopularPosts' data-version='2' id='PopularPosts2'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Daily
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <div class='posts'>
                            <div class='post item-0'>
                                <span class='postCat' data-cat='Style'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                        title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w72-h72-p-k-no-nu/fashion-n.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                            title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                            Winter Dressing Tips When It&#39;s Really Cold Out
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:48:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                            <div class='post item-1'>
                                <span class='postCat' data-cat='Living'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                        title='Will Humans be able to live in Mars in the future?'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w72-h72-p-k-no-nu/Highcompressed_2057696496.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                            title='Will Humans be able to live in Mars in the future?'>
                                            Will Humans be able to live in Mars in the future?
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:51:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget PopularPosts' data-version='2' id='PopularPosts1'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Weekly
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <div class='posts'>
                            <div class='post item-0'>
                                <span class='postCat' data-cat='Style'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Style'>Style</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                        title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w72-h72-p-k-no-nu/fashion-n.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/winter-dressing-tips-when-it-really.html'
                                            title='Winter Dressing Tips When It&#39;s Really Cold Out'>
                                            Winter Dressing Tips When It&#39;s Really Cold Out
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:48:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                            <div class='post item-1'>
                                <span class='postCat' data-cat='Living'>
                                    <a href='https://atlas-home2.blogspot.com/search/label/Living'>Living</a>
                                </span>
                                <div class='postImage'>
                                    <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                        title='Will Humans be able to live in Mars in the future?'>
                                        <span class='hasImage'
                                            data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w72-h72-p-k-no-nu/Highcompressed_2057696496.jpg'></span>
                                    </a>
                                </div>
                                <div class='postDetails'>
                                    <h3 class='postTitle'>
                                        <a href='https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html'
                                            title='Will Humans be able to live in Mars in the future?'>
                                            Will Humans be able to live in Mars in the future?
                                        </a>
                                    </h3>
                                    <div class='postMeta'>
                                        <span class='postDate'><time class='published'
                                                datetime='2022-09-07T02:51:00-07:00'></time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget PageList' data-version='2' id='PageList1'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Pages
                        </h3>
                    </div>
                    <div class='widget-content'>
                        <ul class='list'>
                            <li>
                                <a href='http://atlas-he2.blogspot.com/'>Home</a>
                            </li>
                            <li>
                                <a href='#'>Typography</a>
                            </li>
                            <li>
                                <a href='#'>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='footer-bottombar section' id='footer-bottombar' name='Footer Bottom Bar'>
                <div class='widget Text' data-version='2' id='Text1'>
                    All Rights Reserved by Atlas &#169; 2022
                </div>
                <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList4'>
                    <ul class='cloud'>
                        <li class='hasIcon facebook'>
                            <a href='#' target='_blank'>
                            </a>
                        </li>
                        <li class='hasIcon github'>
                            <a href='#' target='_blank'>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class='content-ads'>
        <div class='contentAd-1 no-items section' id='contentAd-1' name='Content Ad [Start]'></div>
        <div class='contentAd-3 no-items section' id='contentAd-3' name='Content Ad [End]'></div>
    </div>
    <div class='sticky-bar'>
        <div class='sticky-list section' id='sticky-list' name='Sticky Bar'>
            <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList6'>
                <ul class='cloud'>
                    <li class='hasIcon dark'>
                        <a href='#' target='_blank'>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <span class='hasIcon totop'>
            <a href='#toTop'></a>
        </span>
    </div>
    <!-- Libraries -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' type='text/javascript'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' type='text/javascript'></script>
    <!-- Custom data -->
    <script type='text/javascript'>
        var customData = {
            stickyHead: !0,
            stickyCols: !0,
            viewAll: "View all",
            noResults: "No results found",
            noTitle: "No title",
            readMore: "Keep reading",
            lnDir: !1,
            lang: "en"
        }
    </script>
    <!-- Main Script -->


    <script src="{{ asset('timeago.js') }}"></script>
    <script src="{{ asset('locals.js') }}"></script>
    <script src="{{ asset('sticky.js') }}"></script>
    <script src="{{ asset('lazyload.js') }}"></script>
    <script src="{{ asset('submenu.js') }}"></script>
    <script src="{{ asset('ticker.js') }}"></script>
    <script src="{{ asset('currdate.js') }}"></script>


    <script type="text/javascript" src="{{ asset('show.js') }}"></script>
    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3000588928-widgets.js"></script>
    <script type='text/javascript'>
        window['__wavt'] = 'AOuZoY4DwPMKwTUmKCwz6_fSuunLLVZ21A:1753788383655'; _WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6110379639549342881', '//atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html', '6110379639549342881');
        _WidgetManager._SetDataContext([{ 'name': 'blog', 'data': { 'blogId': '6110379639549342881', 'title': 'Atlas - home 2', 'url': 'https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html', 'canonicalUrl': 'https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html', 'homepageUrl': 'https://atlas-home2.blogspot.com/', 'searchUrl': 'https://atlas-home2.blogspot.com/search', 'canonicalHomepageUrl': 'https://atlas-home2.blogspot.com/', 'blogspotFaviconUrl': 'https://atlas-home2.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Atlas - home 2 - RSS\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/6110379639549342881/posts/default\x22 /\x3e\n\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/1013237735166602475/comments/default\x22 /\x3e\n', 'meTag': '', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/3f6b3721b20e96c4', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'interstitialAccepted': false, 'sharing': { 'platforms': [{ 'name': 'Get link', 'key': 'link', 'shareMessage': 'Get link', 'target': '' }, { 'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Share to Facebook', 'target': 'facebook' }, { 'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog' }, { 'name': 'X', 'key': 'twitter', 'shareMessage': 'Share to X', 'target': 'twitter' }, { 'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Share to Pinterest', 'target': 'pinterest' }, { 'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email' }], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en\x27};\x3c/script\x3e' }, 'hasCustomJumpLinkMessage': true, 'jumpLinkMessage': 'Latest', 'pageType': 'item', 'postId': '1013237735166602475', 'postImageThumbnailUrl': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/s72-w640-c-h640/Highcompressed_2057696496.jpg', 'postImageUrl': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w640-h640/Highcompressed_2057696496.jpg', 'pageName': 'Will Humans be able to live in Mars in the future?', 'pageTitle': 'Atlas - home 2: Will Humans be able to live in Mars in the future?' } }, { 'name': 'features', 'data': {} }, { 'name': 'messages', 'data': { 'edit': 'Edit', 'linkCopiedToClipboard': 'Link copied to clipboard!', 'ok': 'Ok', 'postLink': 'Post Link' } }, { 'name': 'template', 'data': { 'name': 'custom', 'localizedName': 'Custom', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true } }, { 'name': 'view', 'data': { 'classic': { 'name': 'classic', 'url': '?view\x3dclassic' }, 'flipcard': { 'name': 'flipcard', 'url': '?view\x3dflipcard' }, 'magazine': { 'name': 'magazine', 'url': '?view\x3dmagazine' }, 'mosaic': { 'name': 'mosaic', 'url': '?view\x3dmosaic' }, 'sidebar': { 'name': 'sidebar', 'url': '?view\x3dsidebar' }, 'snapshot': { 'name': 'snapshot', 'url': '?view\x3dsnapshot' }, 'timeslide': { 'name': 'timeslide', 'url': '?view\x3dtimeslide' }, 'isMobile': false, 'title': 'Will Humans be able to live in Mars in the future?', 'description': 'Lorem ipsum , or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed ...', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w640-h640/Highcompressed_2057696496.jpg', 'url': 'https://atlas-home2.blogspot.com/2022/09/will-humans-be-able-to-live-in-mars-in.html', 'type': 'item', 'isSingleItem': true, 'isMultipleItems': false, 'isError': false, 'isPage': false, 'isPost': true, 'isHomepage': false, 'isArchive': false, 'isLabelSearch': false, 'postId': 1013237735166602475 } }, { 'name': 'widgets', 'data': [{ 'title': 'Contact Form', 'type': 'ContactForm', 'sectionId': 'settings', 'id': 'ContactForm1' }, { 'title': 'Color filter', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList200' }, { 'title': 'Web Icons', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList201' }, { 'title': 'Custom Data', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList202' }, { 'title': '', 'type': 'Image', 'sectionId': 'canvas-1', 'id': 'Image1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'canvas-1', 'id': 'LinkList5' }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'canvas-2', 'id': 'HTML10' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList2' }, { 'title': 'Atlas - home 2 (Header)', 'type': 'Header', 'sectionId': 'header-mainbar', 'id': 'Header1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList7' }, { 'title': '', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML2' }, { 'title': 'Food', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML1' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML4' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML3' }, { 'title': 'Blog Posts', 'type': 'Blog', 'sectionId': 'layout-3', 'id': 'Blog1', 'posts': [{ 'id': '1013237735166602475', 'title': 'Will Humans be able to live in Mars in the future?', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKFip38ZV-s79_Wjt0TGI-O3KcLz7egeGgWp5IA5PVALZcnEFNuH9WZ3o9VFwdArjtYB4qSwZh39huEOgnMQDLU6ShNWpZn1napljB8Ev1KcnW0Qsb_3GptNlQAbbMmnut7B6-7nCoJPztBg_gyZY0vdllSCyE_0J7qB5z8aE5NTsD7hywcQ8I-uIJ_w/w640-h640/Highcompressed_2057696496.jpg', 'showInlineAds': false }], 'headerByline': { 'regionName': 'header1', 'items': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }] }, 'footerBylines': [{ 'regionName': 'footer1', 'items': [{ 'name': 'comments', 'label': 'IWstudio' }] }, { 'regionName': 'footer2', 'items': [{ 'name': 'labels', 'label': '' }] }], 'allBylineItems': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }, { 'name': 'comments', 'label': 'IWstudio' }, { 'name': 'labels', 'label': '' }] }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'layout-4', 'id': 'HTML6' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-1', 'id': 'HTML5' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML7' }, { 'title': 'Join us', 'type': 'LinkList', 'sectionId': 'sidebar-2', 'id': 'LinkList3' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML8' }, { 'title': 'LIVING', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML9' }, { 'title': 'Daily', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts2', 'posts': [{ 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }, { 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }] }, { 'title': 'Weekly', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts1', 'posts': [{ 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }, { 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }] }, { 'title': 'Pages', 'type': 'PageList', 'sectionId': 'footer-columns', 'id': 'PageList1' }, { 'title': '', 'type': 'Text', 'sectionId': 'footer-bottombar', 'id': 'Text1' }, { 'title': 'Quotes', 'type': 'LinkList', 'sectionId': 'footer-bottombar', 'id': 'LinkList4' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'sticky-list', 'id': 'LinkList6' }] }]);
        _WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'settings', document.getElementById('ContactForm1'), { 'contactFormMessageSendingMsg': 'Sending...', 'contactFormMessageSentMsg': 'Your message has been sent.', 'contactFormMessageNotSentMsg': 'Message could not be sent. Please try again later.', 'contactFormInvalidEmailMsg': 'A valid email address is required.', 'contactFormEmptyMessageMsg': 'Message field cannot be empty.', 'title': 'Contact Form', 'blogId': '6110379639549342881', 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'contactFormToken': 'AOuZoY7vaMFFMKrHwa3LGIL3x2krQHYC_w:1753788383656', 'submitUrl': 'https://www.blogger.com/contact-form.do' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList200', 'settings', document.getElementById('LinkList200'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList201', 'settings', document.getElementById('LinkList201'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList202', 'settings', document.getElementById('LinkList202'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_ImageView', new _WidgetInfo('Image1', 'canvas-1', document.getElementById('Image1'), { 'resize': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList5', 'canvas-1', document.getElementById('LinkList5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML10', 'canvas-2', document.getElementById('HTML10'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'header-mainbar', document.getElementById('LinkList2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header-mainbar', document.getElementById('Header1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList1', 'header-mainbar', document.getElementById('LinkList1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList7', 'header-mainbar', document.getElementById('LinkList7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'layout-1', document.getElementById('HTML2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'layout-1', document.getElementById('HTML1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML4', 'layout-2', document.getElementById('HTML4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'layout-2', document.getElementById('HTML3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'layout-3', document.getElementById('Blog1'), { 'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/249874-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/123180807-lightbox_bundle.css' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML6', 'layout-4', document.getElementById('HTML6'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML5', 'sidebar-1', document.getElementById('HTML5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML7', 'sidebar-2', document.getElementById('HTML7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList3', 'sidebar-2', document.getElementById('LinkList3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML8', 'sidebar-2', document.getElementById('HTML8'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML9', 'sidebar-2', document.getElementById('HTML9'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts2', 'footer-columns', document.getElementById('PopularPosts2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'footer-columns', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList1', 'footer-columns', document.getElementById('PageList1'), { 'title': 'Pages', 'links': [{ 'isCurrentPage': false, 'href': 'http://atlas-he2.blogspot.com/', 'title': 'Home' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Typography' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Contact us' }], 'mobile': false, 'showPlaceholder': true, 'hasCurrentPage': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_TextView', new _WidgetInfo('Text1', 'footer-bottombar', document.getElementById('Text1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList4', 'footer-bottombar', document.getElementById('LinkList4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList6', 'sticky-list', document.getElementById('LinkList6'), {}, 'displayModeFull'));
    </script>
</body>

</html>