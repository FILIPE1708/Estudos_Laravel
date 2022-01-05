<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

Class ProdutoController extends Controller{

    public function lista(){

        $produtos = DB::select('SELECT * FROM estoque.produto');
        return view('produtos/listagem')->with('produtos', $produtos);
    }

    public function mostra(){
        $id = Request::route('id');
        $produto = DB::select('SELECT * FROM estoque.produto WHERE id = ?', [$id]);
        return view('produtos/detalhes')->with('p', $produto[0]);
    }

}