<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tasks','UsuariosController@getAll');
Route::post('tasks','UsuariosController@add');
Route::get('tasks/{id}','UsuariosController@getOne');
Route::get('tasks/cedula/{cedula}','UsuariosController@getOneCed');
Route::get('tasks/email/{email}','UsuariosController@getOneEmail');
Route::get('tasks/validar/{cedula}/{email}','UsuariosController@ValidarCedOrEmail');
Route::put('tasks/{id}','UsuariosController@update');
Route::delete('tasks/{id}','UsuariosController@delete');
