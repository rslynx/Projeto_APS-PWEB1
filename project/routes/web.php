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
    return redirect(route('pessoa.index'));;
});


Route::resource('alumni', 'AlumniController');
//Route::resource('animal', 'AnimalController');
Route::resource('pessoa.animal', 'AnimalController');
Route::resource('pessoa.consulta', 'ConsultaController');
Route::resource('pessoa', 'PessoaController');

