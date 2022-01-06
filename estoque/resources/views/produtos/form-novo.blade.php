@extends('principal')
@section('conteudo')

    <div class="card border-success">
        <div class="card-header bg-success text-center text-white">
            <div class="card-title">
                <h4><strong>Novo Produto</strong></h4>
            </div>
        </div>

        <div class="card-body">

            <form action="/produtos/cadastra" method="post">

                @csrf

                <div class="form-group">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="nome"><strong>Nome:</strong></label>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="valor"><strong>Valor:</strong></label>
                            <input type="text" id="valor" name="valor" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="descricao"><strong>Descrição:</strong></label>
                            <textarea name="descricao" id="descricao" rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="quantidade"><strong>Quantidade:</strong></label>
                            <input type="text" id="quantidade" name="quantidade" class="form-control">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-2 mt-3 ">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
