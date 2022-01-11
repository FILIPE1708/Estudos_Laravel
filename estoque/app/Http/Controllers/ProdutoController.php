<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

Class ProdutoController extends Controller{

    public function lista()
    {
        $produtos = Produto::all();
        return view('produtos/listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        return view('produtos/detalhes')->with('p', $produto);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('produtos/form-novo');
    }

    public function cadastra(ProdutoRequest $request)
    {
        //$params = Request::all();
        //$produto = new Produto($params);
        //$produto->save();
        Produto::create($request->all());

        return redirect('/produtos')->withInput();
        //return view('produtos/cadastrar')->with('nome', $nome);
    }

}
