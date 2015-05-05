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
use Illuminate\Support\Facades\Request;

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
    $nombre = Input::get('nombre');
    $productos = Producto::where('nombre', 'like', '%'.$nombre.'%')->get();
    //$productos = Producto::all();
    return response()->json($productos);
});

Route::post('send',function(Request $request){
    if($request!= null)
    {
        return response()->json(Input::all());
    }
});
