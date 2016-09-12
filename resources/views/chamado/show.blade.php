@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-1">
    </div>
    
    <div class="col-md-10">
        <div class="panel panel-primary">
            
            @forelse($chamados as $chamado)
            
            <div class="panel-heading">Chamado Nº {{$chamado->id}}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    
                    <div class="col-md-2">
                        @if($chamado->statusCham != 'Resolvido' and $chamado->fk_idResolvedor != null)
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria haspopup="true" aria-expanded="false">
                            Direcionar para Fila <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            @forelse($filas as $fila)
                            <li><a href="../updateTwo/{{$fila->id}}/{{$chamado->id}}">{{$fila->descricao}}</a></li>
                            @empty
                            
                            @endforelse
                          </ul>
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-md-2">
                        @if($chamado->fk_idResolvedor == null)
                        <a href="../updateTree/{{Auth::user()->id}}/{{$chamado->id}}">
                            <button type="button" class="btn btn-success" aria-label="Right Align">
                                Assumir
                            </button>
                        </a>
                        @endif
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        <h4><b>Descrição:</b> {{$chamado->descricao}}</h4>
                    </div>  
                    <div class="col-md-7">
                        <h4><b>Data:</b> {{date('d/m/Y H:i:s', strtotime($chamado -> dataIni))}}</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        @if($chamado->fk_idResolvedor == null)
                            <h4><b>Solucionador:</b> Sem Solucionador</h4>
                        @else
                            @forelse($usuarios as $usuario)
                                @if($usuario->id == $chamado->fk_idResolvedor)
                                    <h4><b>Solucionador:</b> {{$usuario->nome}} {{$usuario->sobrenome}}</h4>
                                @endif
                            @empty
                            @endforelse
                        @endif
                    </div>  
                    <div class="col-md-7">
                        @forelse($filas as $filas)
                            @if($filas->id == $chamado->fk_idFila)
                                <h4><b>Fila:</b> {{$filas->descricao}}</h4>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        <h4><b>Prioridade:</b> {{$chamado->prioridade}}</h4>
                    </div>  
                    <div class="col-md-7">
                        <h4><b>Status:</b> {{$chamado->statusCham}}</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Endereço:</b> Rua São João, 500 - Pequi - Eunápolis/BA - CEP:45820-000</h4>
                    </div>  
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                    </div>
        
                    <div class="col-md-2">
                        @if($chamado->fk_idResolvedor != null and $chamado->statusCham != 'Resolvido')
                            <a href="../updateFour/Resolvido/{{$chamado->id}}">
                                <button type="button" class="btn btn-primary" aria-label="Right Align">
                                    Resolver Chamado
                                </button>
                            </a>
                        @endif
                    </div>
                    
                    <div class="col-md-2">
                        <a href="../../chamado">
                            <button type="button" class="btn btn-primary" aria-label="Right Align">
                                Voltar
                            </button>
                        </a>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="col-md-1">
    </div>
</div>

@empty
    Vazia
@endforelse

@endsection