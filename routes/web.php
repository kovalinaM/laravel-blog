<?php


use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class);
});

Auth::routes();

