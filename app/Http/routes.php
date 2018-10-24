<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/usuarios', 'UsuariosController@index');


   
Route::get('/',  'HomeController@index');

Route::auth();

Route::get('/home', 'Homecontroller@index');

Route::get('clientes',   'Clientecontroller@index');
Route::get('clientes/novo',  'Clientecontroller@novo');
Route::get('clientes/{cliente}/editar', 'Clientecontroller@editar');

Route::post('clientes/salvar', 'Clientecontroller@salvar');

Route::patch('clientes/{cliente}',  'Clientecontroller@atualizar');
	
Route::delete('clientes/{cliente}',  'Clientecontroller@deletar');




  




