<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('HelloWorld');
//});

//Route::get('/', function () {
//    $laravel = app()->version();
//    $php = phpversion();
//    return "HelloWorld from Laravel v$laravel (PHP v$php)";
//});

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

use App\Http\Controllers\CartController;
Route::get('/cart', [CartController::class, 'index']);
