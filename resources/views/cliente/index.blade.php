@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-body">
            <ol class="breadcrumb panel-heading">
            <li class="breadcrumb-item active" aria-current="page">Lista de Cliente</li>
            </ol>
        
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Clientes</div>

                <div class="panel-body">
                   <p> <a href="{{route('cliente.adicionar')}}" class="btn btn-primary">Adicionar</a></p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                          <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->endereco}}</td>
                            
                            <td>
                                
                                <a href="{{route('cliente.detalhe',$cliente->id)}}" class="btn btn-success">Detalhe</a>
                                <a href="{{route('cliente.editar',$cliente->id)}}" class="btn btn-warning">Editar</a>
                                <a href="javascript: if(confirm('Deseja deletar esse registro?')){
                                    window.location.href = '{{route('cliente.deletar', $cliente->id)}}'}"
                                    class="btn red btn-danger">Deletar</a>
                            </td>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row" align="center">
                        <!--para trazer com html deve retornar com o !-->
                        {!! $clientes->links() !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
