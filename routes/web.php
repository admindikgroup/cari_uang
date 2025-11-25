<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\Admin\BlogVideoController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BlogArticleController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\BroadcastTelegramController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\CmsButtonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramWebhookController;

Route::get('/', [FrontPageController::class, 'index'])->name('home');

Route::post('/subscribe', [FrontPageController::class, 'subscribe'])->name('subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/telegram/webhook', [TelegramWebhookController::class, 'handle']);
Route::patch('/admin/manage-page/{id}/activate', [PageController::class, 'activate'])->name('admin.manage-page.activate');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('blog-video', BlogVideoController::class);
    Route::resource('blog-article', BlogArticleController::class);
    Route::resource('manage-page', PageController::class);
    Route::resource('broadcast-telegram', BroadcastTelegramController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('contact', ContactController::class)->except(['destroy']);
    Route::resource('subscriber', SubscriberController::class)->except(['destroy']);
    Route::resource('cms-button', CmsButtonController::class);
});

Route::controller(FrontPageController::class)->group(function () {
    Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');
    Route::get('/blog/{blog_article:slug}', [FrontPageController::class, 'detail'])->name('blog.detail');

    Route::get('/testimoni', [FrontPageController::class, 'testimoni'])->name('testimoni');
    Route::get('/testimoni/{blog_testimoni:slug}', [FrontPageController::class, 'testimoniDetail'])->name('testimoni.detail');


    Route::get('/blog-video', [FrontPageController::class, 'blogVideo'])->name('blog-video');
    Route::get('/blog-video/{blog_video:slug}', [FrontPageController::class, 'blogVideodetail'])->name('blog-video.detail');

    Route::get('/contact-us', [FrontPageController::class, 'contact'])->name('contact-us');
    Route::post('/contact-us', [FrontPageController::class, 'contactSubmit'])->name('contact.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';