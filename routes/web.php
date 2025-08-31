<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
