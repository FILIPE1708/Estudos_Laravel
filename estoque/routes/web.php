<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/cadastra', 'ProdutoController@cadastra');
Route::get('/logon', 'LoginController@form');
Route::post('/logon', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
