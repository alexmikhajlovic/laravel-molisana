<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {

    return view('home');

})->name('home-page');


// PRODUCTS
Route::get('/products', function () {

    $pasta = config('pasta');

    $data = ['contents' => $pasta];

    return view('products', $data);

})->name('products-page');

// TODO: PRODUCT
Route::get('/product/{id}', function ($id) {

    $pasta = config('pasta');

    $product = $pasta[$id];

    $data = [
        'product' => $product
    ];

    return view('product', $data);

    // return 'Prodotto n°= ' .$id;

})->name('product-page');


// NEWS
Route::get('/news', function () {

    return view('news');

})->name('news-page');