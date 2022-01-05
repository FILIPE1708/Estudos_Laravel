@extends('principal')
@section('conteudo')
<h1>Listagem de produtos<h1>
<table class="table table-bordered table-hover">
    <thead  class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
    </thead>
    @foreach($produtos as $p)
    <tbody>
        <tr class="{{$p->quantidade <= 1 ? 'bg-danger' : 'bg-secondary'}}" >
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a class="btn btn-success btn-lg " href="/produtos/mostra/{{$p->id}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endSection
