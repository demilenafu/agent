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

Route::get('/', function () {
    return view('agent');
});

Route::post('obtenerLatLon/{zip}', 'agentController@obtenerLatLon');
Route::post('agents', 'agentController@agents');

//Route::get('form_cargar_datos_usuarios', 'agentController@form_cargar_datos_usuarios');
//Route::post('load_contact', 'agentController@load_contact');