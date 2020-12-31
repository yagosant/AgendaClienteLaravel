@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-body">
            <ol class="breadcrumb panel-heading">
                <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Lista de Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Adicionar Cliente</li>
            </ol>

        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Clientes</div>

                <div class="container-fluid">
                    
                <form method="post" action="{{route('cliente.salvar')}}">
                    {{csrf_field()}}
                  
                    <div class="form-group">

                    @include('layouts._include._form')
                    
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
                </div>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
