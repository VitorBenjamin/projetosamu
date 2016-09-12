<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Models\Chamado;
use App\Usuario;
use App\Filachamado;

class ChamadosController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //busca de banco
        $chamados = Chamado::get();
        $usuarios = Usuario::get();
        $filachamados = Filachamado::get();
        
        return view('chamado.index', compact('chamados', 'usuarios', 'filachamados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chamados = DB::select('select * from chamados where id = :id', ['id' => $id]);
        $filas = Filachamado::get();
        $usuarios = Usuario::get();

        return view('chamado.show', compact('chamados', 'usuarios', 'filas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    //Alterar a fila dos chamados
    public function updateTwo($fila, $id)
    {
        //altera no banco de dados
        DB::update('update chamados set fk_idFila = ? where id = ?', [$fila, $id]);
        
        return redirect('chamado');
    }
    
    //Alterar o Resolvedor dos chamados
    public function updateTree($resolvedor, $id)
    {
        //altera no banco de dados
        DB::update('update chamados set fk_idResolvedor = ? where id = ?', [$resolvedor, $id]);
        
        
        
        return redirect('chamado');
    }
    
    //Alterar o Status do Chamado
    public function updateFour($statuscham, $id)
    {
        
        //altera no banco de dados
        DB::update('update chamados set statusCham = ? where id = ?', [$statuscham, $id]);
        
        return redirect('chamado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
