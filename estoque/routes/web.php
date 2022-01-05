<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Listagem de produtos';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
