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

$tablausuarios = 'usuarios';

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

/* get Profile */
Route::get('profile', 'ProfileController@getProfile');
Route::get('profile/editar', 'ProfileController@editProfile');

/* Controlador de Prueba */
Route::get('prueba', 'PruebaController@index');

/* Get Perfiles de Usuarios */
Route::get('user/{usuario}', function($usuario) {
    $usuario = DB::table('usuarios')->where('username', $usuario)->first();
    return view('users.profile')->with('user',$usuario);
});

Route::get('users', function() {
    DB::table('usuarios');
});

/* Auth */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);