@extends('principal')
@section('conteudo')

    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-center" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach

    <div class="card border-success mt-5">
        <div class="card-header bg-success text-center text-white">
            <div class="card-title">
                <h4><strong>Editar produto</strong></h4>
            </div>
        </div>

        <div class="card-body">

            <form action="/produtos/alterar" method="get">

                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nome"><strong>Nome:</strong></label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{$produto->nome}}">
                        </div>

                        <div class="col-md-6">
                            <label for="valor"><strong>Valor:</strong></label>
                            <input type="text" id="valor" name="valor" class="form-control" value="{{$produto->valor}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="descricao"><strong>Descrição:</strong></label>
                            <textarea name="descricao" id="descricao" rows="4" class="form-control">{{$produto->descricao}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="quantidade"><strong>Quantidade:</strong></label>
                            <input type="text" id="quantidade" name="quantidade" class="form-control" value="{{$produto->quantidade}}">
                        </div>

                        <div class="col-md-6 mt-2">
                            <label for="tamanho"><strong>Tamanho:</strong></label>
                            <input type="text" id="tamanho" name="tamanho" class="form-control" value="{{$produto->tamanho}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="categoria_id"><strong>Categoria:</strong></label>
                            <select id="categoria_id" name="categoria_id" class="form-control">
                                @foreach($categorias as $c)
                                    <option  value="{{$c->id}}">{{$c->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-1 mt-3 ">
                            <button type="submit" class="btn btn-success">Alterar</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
