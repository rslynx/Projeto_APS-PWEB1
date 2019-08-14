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


Auth::routes();

Route::get('/', function () {
    return redirect(route('home'));;
});


Route::resource('pessoa.animal', 'AnimalController');
Route::resource('pessoa.consulta', 'ConsultaController');
Route::resource('pessoa', 'PessoaController');



Route::get('/home', 'HomeController@index')->name('home');
