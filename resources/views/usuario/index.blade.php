@extends('layouts.app')

@section('content')
    <!--Lista de Fila-->
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
    <a href="{{ url('usuarios/create') }}"><button type="button" class="btn btn-primary">Cadastrar</button></a>
        <div class="list-group">

            <a href="#!" class="collection-header"><h4>Lista de Colaboradores</h4></a>

            <ul class="list-group-item active">
                <div class="row">
                    <div class="col-md-1">Código</div>
                    <div class="col-md-2">Nome Completo</div>
                    <div class="col-md-2">Departamento</div>
                    <div class="col-md-2">Cargo</div>
                </div>
            </ul>
                    <div class="row">
                        
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-1"></div>
                        </div>
                    </div>
                </a>
           
                <a href="#!" class="collection-item">Lista Vazia!</a>
            
            
        </div>


    </div>
    <div class="col-md-1">
    </div>

</div>
    

@endsection

