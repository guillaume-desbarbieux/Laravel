<?php

use Illuminate\Support\Facades\Route;

/*/
Route::get('/', function () {
    return view('welcome');
});
/*/


Route::get('/', function () {
    return view('HelloWorld');
});


Route::get('/', function () {
    $laravel = app()->version();
    $php = phpversion();
    return "HelloWorld from Laravel v$laravel (PHP v$php)";
});


Route::get('/product', function () {
     return "Liste des produits";
});

Route::get('/product/{id}', function (string $id) {
    return "Fiche du produit ".$id;
});

Route::get('/cart', function () {
    return "Panier";
});
