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

// Route::get('', 'CampeonatoController@index');
Route::get('/datarodada',['as' => 'data_rodada', 'uses'=>'CampeonatoController@rodadaData']);
Route::get('{id?}', ['as' => 'time', 'uses' => 'CampeonatoController@index']);


Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('/dataclassificacao',['as' => 'data_classificacao', 'uses'=>'CampeonatoController@classificacaoData']);
