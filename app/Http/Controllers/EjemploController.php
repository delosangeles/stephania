<?php

namespace App\Http\Controllers;

class EjemploController extends Controller { 

	public function inicio($id) {
		return "Estas en el inicio del sitio y el valor pasado por parametro es: " . $id;
	}
}