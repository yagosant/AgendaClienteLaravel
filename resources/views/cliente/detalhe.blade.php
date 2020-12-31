@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-body">
            <ol class="breadcrumb panel-heading">
            <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Lista de Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalhe do Cliente</li>
            </ol>
        
        <div class="col-md-12 ">
            <div class="panel panel-default">
{{--                 <div class="panel-heading">Detalhes {{$cliente->nome}}</div>--}}
                <div class="panel-body">
                    <center>
                   <h3> <p><b>Cliente: {{$cliente->nome}}</b></p></h3>
                    <p><b> E-mail:</b> {{$cliente->email}}</p>
                    <p><b> Endereço: </b>{{$cliente->endereco}}</p>
                </center>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Número Telefone</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->telefones as $telefone)
                          <tr>
                            <th scope="row">{{$telefone->id}}</th>
                            <td>{{$telefone->titulo}}</td>
                            <td>{{$telefone->telefone}}</td>

                            
                            <td>
                                <a href="{{route('telefone.editar',$telefone->id)}}" class="btn btn-warning">Editar</a>
                                <a href="javascript: if(confirm('Deseja deletar esse registro?')){
                                    window.location.href = '{{route('telefone.deletar', $telefone->id)}}'}"
                                    class="btn red btn-danger">Deletar</a>
                            </td>
                            @endforeach
                        </tbody>
                    </table>

                    <p> <a href="{{route('telefone.adicionar',$cliente->id)}}" class="btn btn-primary">Adicionar</a></p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
