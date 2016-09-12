@extends('layouts.app')

@section('content')
 

    <!--Lista de Fila-->
<div class="row">  

<div class="col-md-1">
    </div>
    <div class="col-md-10">
<div class="table-responsive">

<table class="table">
<a href="#!" class="collection-header"><h4>Cadastro Fila de Chamado</h4></a>

            <form>
              <div class="form-group">
                <label >Descrição</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Descrição">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Departamento</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Departamento">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Nivel</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nivel">
              </div>
              <a href="#" ><button type="submit" class="btn btn-primary">Salvar</button></a>
            </form>


</table>
</div>
</div>
</div>

@endsection