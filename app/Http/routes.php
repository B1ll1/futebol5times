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

Route::group(['prefix' => 'tempo-real/'], function() {
    Route::get('dashboard', ['as' => 'real_time.dashboard', 'uses' => 'RealTimeController@dashboard']);
    Route::get('partida/{sumula_id}', ['as' => 'real_time.getJogo', 'uses' => 'RealTimeController@getJogo']);
    Route::get('partida/{sumula_id}/ao-vivo', ['as' => 'real_time.live', 'uses' => 'RealTimeController@live']);
    Route::get('partida/{sumula_id}/encerrar', ['as' => 'real_time.finishGame', 'uses' => 'RealTimeController@finishGame']);
    Route::post('partida/{sumula_id}/gol', ['as' => 'real_time.postGol', 'uses' => 'RealTimeController@postGol']);
    Route::post('partida/{sumula_id}/cartao', ['as' => 'real_time.postCartao', 'uses' => 'RealTimeController@postCartao']);
    Route::post('partida/{sumula_id}/escalacao', ['as' => 'real_time.postEscalacao', 'uses' => 'RealTimeController@postEscalacao']);
    Route::post('partida/{sumula_id}/substituicao', ['as' => 'real_time.postSubstituicao', 'uses' => 'RealTimeController@postSubstituicao']);
});