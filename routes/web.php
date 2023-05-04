<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('products', ProductController::class);

Route::get('/{any}', [FrontController::class, 'index'])->where('any', '.*');
