<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/home', ['as'=>'home','uses'=>'HomeController@index']);
Route::get('/lancamentos', ['as'=>'lancamentos','uses'=>'LancamentoController@index']);
Route::get('/entrada-saida', ['as'=>'entrada_saida','uses'=>'EntradaSaidaController@index']);
Route::get('/baixa-alunos', ['as'=>'baixa','uses'=>'BaixaAlunoController@index']);
Route::get('/unidades', ['as'=>'unidades','uses'=>'UnidadeController@index']);

Route::get('/usuarios', ['as'=>'usuarios','uses'=>'UsuarioController@index']);
Route::get('/usuarios/inserir', ['as'=>'usuariosInserir','uses'=>'UsuarioController@create']);
Route::post('/usuarios', 'UsuarioController@store');
Route::get('/usuarios/editar/{id}', ['as'=>'usuariosEditar','uses'=>'UsuarioController@edit']);
Route::post('/usuarios/{id}', ['as'=>'usuariosAtualizar','uses'=>'UsuarioController@update']);
Route::get('/usuarios/apagar/{id}', ['as'=>'usuariosApagar','uses'=>'UsuarioController@delete']);

Route::get('/empresas', ['as'=>'empresas','uses'=>'EmpresaController@index']);
Route::get('/kits', ['as'=>'kits','uses'=>'KitController@index']);
Route::get('/cursos', ['as'=>'curso','uses'=>'CursoController@index']);

Route::post('/inserir_lancamentos',['as'=>'inserir_lancamentos','uses'=>'LancamentoController@store']);

Route::post('/inserir_kit',['as'=>'inserir_kit','uses'=>'KitController@store']);

Route::get('/lista_kit',['as'=>'lista_kit','uses'=>'KitController@lista_kits']);

Route::get('editar_kit/{id}/edit', 'KitController@edit')->name('editar_kit');
Route::post('kits/update', 'KitController@update')->name('kits.update');