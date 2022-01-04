<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class ProdutoController extends Controller{

    public function lista(){

        $html = '<h1>Listagem de produtos<h1>';
        $produtos = DB::select('SELECT * FROM estoque.produto');
        foreach($produtos as $p){
            $html .= "<br> Produto: " . $p->nome;
        }

        return $html;

    }

}