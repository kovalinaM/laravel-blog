<?php


use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);
    Route::prefix('categories')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('categories.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('categories.create');
    });
});

Auth::routes();

