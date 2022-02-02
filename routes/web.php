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

Route::get('/', function () {
    $nome = "matheus";
    $idade = 20;
    $altura = 1.7;

    return view(
        'welcome', 
        [
            'nome'  => $nome,
            'idade' => $idade,
            'altura'=> $altura
        ]
    );
});

Route::get('/produtos', function() {
    return view('products');
});
