<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\FrontendSection;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category/{category:term}', [HomeController::class, 'categoryShow'])->name('category.show');
Route::get('/{category:scheme}/{post:slug}', [HomeController::class, 'show'])->name('home.show');
// about-us
Route::get('/about-us', function () {
    return view('about');
})->name('about');
// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/json', [HomeController::class, 'getHomeFeedSection'])->name('home.feed.section');

Route::get('/get', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();

    return view('index', compact('topCategories'));
});

Route::get('/feed', [HomeController::class, 'feed'])->name('feed');
