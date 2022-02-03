@extends('principal')
@section('conteudo')

    <div class="card border-success mt-3 mb-3">
        <div class="card-header bg-success text-white text-center border-success">
            <div class="card-title ">
                <h4><strong>Listagem de produtos</strong></h4>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mt-5 d-flex justify-content-center">
                    @if(old('nome'))
                        <div class="alert alert-success text-center" role="alert">
                            Produto {{old('nome')}} cadastrado com sucesso!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="/produtos/novo" class="btn btn-success btn-lg mb-2" data-toggle="tooltip" data-placement="bottom" title="Adicionar produto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/></svg></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead  class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Descrição</th>
                                <th>Quantidade</th>
                                <th>Tamanho</th>
                                <th>Categoria</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $p)
                            <tr class="{{$p->quantidade <= 1 ? 'bg-warning text-white' : 'bg-white'}}" >
                                <td>{{$p->nome}}</td>
                                <td>{{$p->valor}}</td>
                                <td>{{$p->descricao}}</td>
                                <td>{{$p->quantidade}}</td>
                                <td>{{$p->tamanho}}</td>
                                <td>{{$p->categoria->nome}}</td>
                                <td>
                                    <a href="/produtos/mostra/{{$p->id}}" class="btn btn-success btn-sm"  data-toggle="tooltip" data-placement="bottom" title="Visualizar detalhes"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></a>
                                    <a href="/produtos/editar/{{$p->id}}" class="btn btn-info text-white btn-sm ml-lg-1"  data-toggle="tooltip" data-placement="bottom" title="Editar produto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>
                                    <a href="/produtos/remove/{{$p->id}}" class="btn btn-danger btn-sm ml-lg-1"  data-toggle="tooltip" data-placement="bottom" title="Deletar produto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endSection
