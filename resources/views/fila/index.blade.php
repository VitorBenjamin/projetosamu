@extends('layouts.app')

@section('content')
    <!--Lista de Fila-->
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">

    <a href="{{ url('fila/create') }}"><button type="button" class="btn btn-primary">Cadastrar</button></a>
        <div class="list-group">

            <a href="#!" class="collection-header"><h4>FILA - Ordem De Atendimento</h4></a>

            <ul class="list-group-item active">
                <div class="row">
                    <div class="col-md-1">Código</div>
                    <div class="col-md-2">Descrição</div>
                    <div class="col-md-2">Departamento</div>
                    <div class="col-md-2">Nivel</div>
                </div>
            </ul>
            
            @forelse($chamados as $chamado)
            
                <a href="fila/show/{{$chamado->id}}" class="list-group-item">
                    <div class="row">
                        <div class="col-md-1">{{$chamado->id}}</div>
                        
                        @forelse($filachamados as $filachamado)
                            @if($chamado->fk_idFila == $filachamado->id)
                                <div class="col-md-2">{{$filachamado->descricao}}/{{$filachamado->departamento}}</div>
                            @endif
                        @empty
                            <div class="col-md-2">Sem Fila</div>
                        @endforelse
                        
                        <div class="col-md-2">{{$filachamado -> descricao}}</div>
                        <div class="col-md-2">{{$filachamado -> departamento}}</div>
                        <div class="col-md-1">{{$filachamado -> nivel}}</div>
              
                    </div>
                </a>
            @empty
                <a href="#!" class="collection-item">Lista Vazia!</a>
            @endforelse
            
        </div>


    </div>
    <div class="col-md-1">
    </div>

</div>
    

@endsection

