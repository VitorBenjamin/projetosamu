@extends('layouts.app')

@section('content')
    
    <!--Lista de chamados-->
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <div class="list-group">
            <a href="#!" class="collection-header"><h4>Chamados</h4></a>

            <ul class="list-group-item active">
                <div class="row">
                    <div class="col-md-1">Código</div>
                    <div class="col-md-2">Proprietário</div>
                    <div class="col-md-3">Fila</div>
                    <div class="col-md-2">Descricao</div>
                    <div class="col-md-1">Prioridade</div>
                    <div class="col-md-1">Status</div>
                    <div class="col-md-2">Data</div>
                </div>
            </ul>
            
            @forelse($chamados as $chamado)
            
                @if($chamado->statusCham == 'Resolvido')
                    <a href="chamado/show/{{$chamado->id}}" class="list-group-item list-group-item-success">
                @else
                    <a href="chamado/show/{{$chamado->id}}" class="list-group-item">
                @endif
                    
                    <div class="row">
                        <div class="col-md-1">{{$chamado->id}}</div>
                        @if($chamado->fk_idResolvedor == null)
                            <div class="col-md-2">Sem Solucionador</div>
                        @endif
                        
                        @forelse($usuarios as $usuario)
                            @if($chamado->fk_idResolvedor == $usuario->id)
                                <div class="col-md-2">{{$usuario->nome}} {{$usuario->sobrenome}}</div>  
                            @endif
                        @empty
                            
                        @endforelse
                        
                        @forelse($filachamados as $filachamado)
                            @if($chamado->fk_idFila == $filachamado->id)
                                <div class="col-md-3">{{$filachamado->descricao}}/{{$filachamado->departamento}}</div>
                            @endif
                        @empty
                            <div class="col-md-2">Sem Fila</div>
                        @endforelse
                        
                        <div class="col-md-2">{{$chamado -> descricao}}</div>
                        <div class="col-md-1">{{$chamado -> prioridade}}</div>
                        <div class="col-md-1">{{$chamado -> statusCham}}</div>
                        <div class="col-md-2">{{date('d/m/Y H:i:s', strtotime($chamado -> dataIni))}}</div>
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

