<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);

Route::get('/dashboard', function () {
    return view('admin.main.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);

        Route::prefix('posts')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\Post\IndexController::class)->name('post.index');
            Route::get('/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('post.create');
            Route::post('/', \App\Http\Controllers\Admin\Post\StoreController::class)->name('post.store');
            Route::get('/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('post.show');
            Route::get('/{post}/edit', \App\Http\Controllers\Admin\Post\EditController::class)->name('post.edit');
            Route::patch('/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('post.update');
            Route::delete('/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('post.delete');
        });

        Route::prefix('categories')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('categories.index');
            Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('categories.create');
            Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('categories.store');
            Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('categories.show');
            Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('categories.edit');
            Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('categories.update');
            Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('categories.delete');
        });

        Route::prefix('tags')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\Tag\IndexController::class)->name('tag.index');
            Route::get('/create', \App\Http\Controllers\Admin\Tag\CreateController::class)->name('tag.create');
            Route::post('/', \App\Http\Controllers\Admin\Tag\StoreController::class)->name('tag.store');
            Route::get('/{tag}', \App\Http\Controllers\Admin\Tag\ShowController::class)->name('tag.show');
            Route::get('/{tag}/edit', \App\Http\Controllers\Admin\Tag\EditController::class)->name('tag.edit');
            Route::patch('/{tag}', \App\Http\Controllers\Admin\Tag\UpdateController::class)->name('tag.update');
            Route::delete('/{tag}', \App\Http\Controllers\Admin\Tag\DeleteController::class)->name('tag.delete');
        });

        Route::prefix('users')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\User\IndexController::class)->name('user.index');
            Route::get('/create', \App\Http\Controllers\Admin\User\CreateController::class)->name('user.create');
            Route::post('/', \App\Http\Controllers\Admin\User\StoreController::class)->name('user.store');
            Route::get('/{user}', \App\Http\Controllers\Admin\User\ShowController::class)->name('user.show');
            Route::get('/{user}/edit', \App\Http\Controllers\Admin\User\EditController::class)->name('user.edit');
            Route::patch('/{user}', \App\Http\Controllers\Admin\User\UpdateController::class)->name('user.update');
            Route::delete('/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('user.delete');
        });
    });
});



require __DIR__.'/auth.php';
