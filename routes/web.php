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

    $pasta_lunga = array_filter($pasta, function($k) {
        return $k['tipo'] == 'lunga';
    });

    $pasta_corta = array_filter($pasta, function($k) {
        return $k['tipo'] == 'corta';
    });

    $pasta_cortissima = array_filter($pasta, function($k) {
        return $k['tipo'] == 'cortissima';
    });

    $data = [
        'contents' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('products', $data);

})->name('products-page');

// PRODUCT
Route::get('/product/{id}', function ($id) {

    $pasta = config('pasta');

    if(is_numeric($id) && $id >= 0 && $id < count($pasta)){

        $product = $pasta[$id];

        $data = [
            'product' => $product
        ];

        return view('product', $data);

    } else {
        abort('404');
    }

    // return 'Prodotto n°= ' .$id;

})->name('product-page');


// NEWS
Route::get('/news', function () {

    return view('news');

})->name('news-page');