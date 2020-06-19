<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//El controlador preparado para escribir las funciones dentro de él
class UserController extends Controller
{
    //Creamos una función dentro del controlador que hemos creado
    public function show ($id) {
    	return "UserID " . $id;
    }

//Las funciones aquí entre los corchetes {}

    public function saluda(){

    	// return view('users', ['name'=> 'José']);
		return view('users')->with('name', 'Ignacio');
    }


}
