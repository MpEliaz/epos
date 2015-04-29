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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::post('productos/activar', 'ProductosController@activar');
Route::post('productos/desactivar', 'ProductosController@desactivar');
Route::resource('productos', 'ProductosController');

Route::resource('ventas', 'VentasController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hola',function(){

   return "HOLA";
});
