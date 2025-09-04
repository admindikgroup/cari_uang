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
    Route::get('manage-blog-video', [BlogVideoController::class, 'index'])->name('blog-video.index');
    Route::get('manage-page', [PageController::class, 'index'])->name('page.index');
    Route::get('manage-blog-article', [BlogArticleController::class, 'index'])->name('blog-article.index');
    Route::get('broadcast-telegram', [BroadcastTelegramController::class, 'index'])->name('broadcast-telegram.index');
});

Route::controller(FrontPageController::class)->group(function () {
    Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');
    Route::get('/blog/details', [FrontPageController::class, 'detail'])->name('blog.detail');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
