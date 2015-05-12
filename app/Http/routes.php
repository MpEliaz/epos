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

use Epos\Models\Producto;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

Route::get('welcome', 'WelcomeController@index');

Route::get('/', 'HomeController@index');
Route::post('productos/activar', 'ProductosController@activar');
Route::post('productos/desactivar', 'ProductosController@desactivar');
Route::resource('productos', 'ProductosController');
Route::resource('descuentos', 'DescuentosController');

Route::resource('ventas', 'VentasController');

Route::post('desc_','DescuentosController@get_desc');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hola',function(){
    $nombre = Input::get('nombre');
    $productos = Producto::where('nombre', 'like', '%'.$nombre.'%')->where('estado','=',true)->get();
    //$productos = Producto::all();
    return response()->json($productos);
});

Route::get('search_code', function(){
    $codigo = Input::get('codigo');
    $p = Producto::where('codigo','=',$codigo)->get();

    return response()->json($p);

});

