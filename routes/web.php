<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BrandController::class, 'index']);

Route::get('/over', function () {
    return view('over');
});

Route::get('/contact', function () {
    return view('contact');
});
