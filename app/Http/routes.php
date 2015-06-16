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

use App\User;

//$tablausuarios = 'usuarios';

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Dashboard para Friends
Route::controller('dash', 'DashboardController');

/* get Profile */
Route::get('profile', 'ProfileController@getProfile');
Route::get('profile/editar', 'ProfileController@editProfile');

/* Get Perfil de 1 Usuario */
Route::get('user/{usuario}', function($usuario) {
    $usuario = DB::table('usuarios')->where('username', $usuario)->first();
    return view('users.profile')
        ->with('user',$usuario);
});

Route::get('users', function() {
    $usuarios = DB::table('usuarios')->orderBy('username', 'asc')->get();
    return view('users.users')->with('usuarios', $usuarios);
});

/* Auth API*/
Route::post('api/auth/{username}/{password}', function($username, $password){
    $response = array("valid"=>User::isValidUser($username, $password));
    return response()->json($response);
});

/* Auth */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
