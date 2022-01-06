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

    public function novo()
    {
        return view('produtos/form-novo');
    }

    public function cadastro()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        DB::insert('INSERT INTO estoque.produto(nome, valor, descricao, quantidade) VALUES (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

        return redirect('/produtos')->withInput();
        //return view('produtos/cadastrar')->with('nome', $nome);
    }

}
