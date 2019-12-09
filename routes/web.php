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
Route::get('/qual-empresa', ['as'=>'qual-empresa','uses'=>'EmpresaController@escolher']);
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
Route::post('/inserir_usuario',['as'=>'inserir_usuario','uses'=>'UsuarioController@store']);

Route::post('/inserir_kit',['as'=>'inserir_kit','uses'=>'KitController@store']);
Route::post('/inserir_lancamento',['as'=>'inserir_lancamento','uses'=>'LancamentoController@store']);
Route::post('/inserir_empresa',['as'=>'inserir_empresa','uses'=>'EmpresaController@store']);
Route::post('/inserir_curso',['as'=>'inserir_curso','uses'=>'CursoController@store']);
Route::post('/inserir_unidade_imugi',['as'=>'inserir_unidade_imugi','uses'=>'UnidadeController@store']);

Route::get('/lista_kit',['as'=>'lista_kit','uses'=>'KitController@lista_kits']);
Route::get('/lista_entradas',['as'=>'lista_entradas','uses'=>'EntradaSaidaController@lista_entradas']);
Route::get('/lista_empresa',['as'=>'lista_empresa','uses'=>'EmpresaController@lista_empresas']);
Route::get('/lista_usuarios',['as'=>'lista_usuarios','uses'=>'UsuarioController@lista_usuarios']);
Route::get('/lista_unidades_imugi',['as'=>'lista_unidades_imugi','uses'=>'UnidadeController@lista_imugi']);
Route::get('/lista_cursos',['as'=>'lista_cursos','uses'=>'CursoController@lista_cursos']);
Route::get('/alunos_imugi',['as'=>'alunos_imugi','uses'=>'BaixaAlunoController@alunosImugi']);
Route::get('/alunos_gracom',['as'=>'alunos_gracom','uses'=>'BaixaAlunoGracomController@alunosGracom']);
Route::get('/lista_lancamentos',['as'=>'lista_lancamentos','uses'=>'lancamentoController@lista_lancamentos']);
Route::get('/alunos_ativos_imugi',['as'=>'alunos_ativos_imugi','uses'=>'HomeController@alunos_ativos_imugi']);
Route::get('/alunos_ativos_gracom',['as'=>'alunos_ativos_gracom','uses'=>'HomeController@alunos_ativos_gracom']);
Route::get('/alunos_ativos_imugi_franquia',['as'=>'alunos_ativos_imugi_franquia','uses'=>'HomeController@alunos_ativos_imugi_franquia']);
Route::get('/alunos_ativos_gracom_franquia',['as'=>'alunos_ativos_gracom_franquia','uses'=>'HomeController@alunos_ativos_gracom_franquia']);
Route::get('editar_imugi/{id}/edit', 'BaixaAlunoController@edit_imugi')->name('editar_imugi');
Route::get('editar_kit/{id}/edit', 'KitController@edit')->name('editar_kit');
Route::get('editar_empresa/{id}/edit', 'EmpresaController@edit')->name('editar_empresa');
Route::get('editar_usuario/{id}/edit', 'UsuarioController@edit')->name('editar_usuario');
Route::get('editar_curso/{id}/edit', 'CursoController@edit')->name('editar_curso');
Route::get('editar_unidade_imugi/{id}/edit', 'UnidadeController@edit')->name('editar_unidade_imugi');
Route::post('kits/update', 'KitController@update')->name('kits.update');
Route::post('unidade_imugi/update', 'UnidadeController@update')->name('unidade_imugi.update');
Route::post('alunosimugi/update', 'BaixaAlunoController@update')->name('alunos_imugi.update');
Route::post('cursos/update', 'CursoController@update')->name('cursos.update');
Route::post('empresa/update', 'EmpresaController@update')->name('empresa.update');
Route::post('usuario/update', 'UsuarioController@update')->name('usuario.update');
Route::get('kits/destroy/{id}', 'KitController@destroy');
Route::get('empresa/destroy/{id}', 'EmpresaController@destroy');
Route::get('usuario/destroy/{id}', 'UsuarioController@destroy');
Route::get('curso/destroy/{id}', 'CursoController@destroy');
Route::get('logar_empresa/{id}/', 'EmpresaController@LogarUnidade');
Route::get('logar_unidade_imugi/', 'UnidadeController@LogarImugi');