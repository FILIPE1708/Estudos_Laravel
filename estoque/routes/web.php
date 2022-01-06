<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Listagem de produtos';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/cadastra', 'ProdutoController@cadastro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
