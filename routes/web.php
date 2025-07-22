<?php

use Illuminate\Support\Facades\Route;

/*/
Route::get('/', function () {
    return view('welcome');
});
/*/



Route::get('/', function () {
$laravel = app()->version();
$php = phpversion();
    return ("HelloWorld from Laravel v$laravel (PHP v$php)");
});