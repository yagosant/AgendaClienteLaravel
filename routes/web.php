<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/home',['as' => 'cliente.index','uses'=>'ClienteController@index']);
Route::get('/cliente/adicionar',['as' => 'cliente.adicionar','uses'=>'ClienteController@adicionar']);
Route::post('/cliente/salvar',['as' => 'cliente.salvar','uses'=>'ClienteController@salvar']);
Route::get('/cliente/adicionar',['as' => 'cliente.adicionar','uses'=>'ClienteController@adicionar']);
Route::get('/cliente/editar/{id}',['as' => 'cliente.editar','uses'=>'ClienteController@editar']);
Route::put('/cliente/atualizar/{id}',['as' => 'cliente.atualizar','uses'=>'ClienteController@atualizar']);
Route::get('/cliente/deletar/{id}',['as' => 'cliente.deletar','uses'=>'ClienteController@deletar']);
Route::get('/cliente/detalhe/{id}',['as' => 'cliente.detalhe','uses'=>'ClienteController@detalhe']);

//rota do telefone
Route::get('/telefone/adicionar/{id}',['as' => 'telefone.adicionar','uses'=>'TelefoneController@adicionar']);
Route::post('/telefone/salvar/{id}',['as' => 'telefone.salvar','uses'=>'TelefoneController@salvar']);
Route::get('/telefone/editar/{id}',['as' => 'telefone.editar','uses'=>'TelefoneController@editar']);
Route::put('/telefone/atualizar/{id}',['as' => 'telefone.atualizar','uses'=>'TelefoneController@atualizar']);
Route::get('/telefone/deletar/{id}',['as' => 'telefone.deletar','uses'=>'TelefoneController@deletar']);

