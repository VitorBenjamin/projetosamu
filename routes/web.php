<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@index');
/*Rotas para Chamados*/
Route::get('chamado', 'ChamadosController@index');
Route::get('chamado/create', 'ChamadoController@create');
Route::post('chamado/store', 'ChamadoController@store');
Route::get('chamado/show/{idCham}', 'ChamadosController@show');

//Rotas para aterar
Route::get('chamado/updateTwo/{fila}/{id}', 'ChamadosController@updateTwo');
Route::get('chamado/updateTree/{resolvedor}/{id}', 'ChamadosController@updateTree');
Route::get('chamado/updateFour/{statuscham}/{id}', 'ChamadosController@updateFour');

/*ROTAS PARA FILAS*/
Route::get('fila', 'FilachamadosController@index');
Route::get('fila/create', 'FilaChamadosController@create');
Route::get('fila/edit', 'FilaChamadosController@edit');
Route::get('fila/show/{id}', 'FilaChamadosController@show');

/*ROTAS PARA Usuarios*/
Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/create','UsuariosController@create');
Route::get('usuarios/edit','UsuariosController@edit');

/*Rotas para Autenticação*/
Auth::routes();

Route::get('/home', 'HomeController@index');
