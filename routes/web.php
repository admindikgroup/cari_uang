<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\Admin\BlogVideoController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BlogArticleController;
use App\Http\Controllers\Admin\BroadcastTelegramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::resource('blog-video', BlogVideoController::class);
    Route::resource('blog-article', BlogArticleController::class);
    Route::resource('manage-page', PageController::class);
    Route::resource('broadcast-telegram', BroadcastTelegramController::class);
});

Route::controller(FrontPageController::class)->group(function () {
    Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');
    Route::get('/blog/{blog_article}', [FrontPageController::class, 'detail'])->name('blog.detail');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
