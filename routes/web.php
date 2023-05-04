<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('{any}', function () {
    return view('layout.app');
})->where('any', '.*');
Route::resource('products', ProductController::class);
