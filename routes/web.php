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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/professores/{id}', 'ProfessorController@show');
    Route::get('/instituicoes/{Sigla}', 'InstituicaoController@show');
    Route::get('/alunos/{matricula}', 'AlunoController@show');
    Route::get('/orientacoes', function () {
        return view('orientacoes.listagem');
    })->name('orientacoes.listagem');
    Route::get('/orientacoes/{id}', 'OrientacaoController@show');

});