@extends('principal')
@section('conteudo')

    <div class="card mt-5">
        <div class="card-header bg-success text-center text-white">
            <div class="card-title">
                <h4><strong>Detalhes do produto {{$p->nome}}</strong></h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-group">
                        <li class="list-group-item border-0">
                            <strong>Valor:</strong> {{$p->valor}}
                        </li>

                        <li class="list-group-item border-0">
                            <strong>Descrição:</strong> {{$p->descricao}}
                        </li>

                        <li class="list-group-item border-0">
                            <strong>Quantidade em estoque:</strong> {{$p->quantidade}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




@endsection
