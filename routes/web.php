<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Ruta con vista por defecto página principal
Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});






//Añadido por Efejota Curso Laravel!!!!!
//Rutas, vistas y controladores.


//Ruta con una cadena de texto string:
/*Route::get('/usuarios', function() {
	return 'Usuarios';
});*/

//Ruta por id
/*Route::get('user/{id}', function ($id) {
  	return "Bienvenido user: " . $id;
  });
*/

 //Ruta con nombre opcional name? 
 /*Route::get('user/{name?}', function ($name = null) {
 	return "¡Bienvenido! " . $name;
  });*/

//Controladores: 
//Ruta con un controladoR:
// Route::get('user/{id}', 'UserController@show');
// Por consola: php artisan make:controller UserController


//Pasando datos desde Routes sin usar un controlador:
// Las dos formas son válidas: pasando una cadena o usando ()->with()
// Route::get('/', function() {
// 	return view('users', ['name'=> 'José']);
// 	return view('users')->with('name', 'Ignacio');
// });

//Pasando datos desde Routes usando un controlador:
/*Route::get('/', 'UserController@saluda');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
