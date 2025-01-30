<?php


use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);
    Route::prefix('categories')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('categories.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('categories.create');
        Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('categories.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('categories.show');
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('categories.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('categories.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('categories.delete');
    });
});

Auth::routes();

