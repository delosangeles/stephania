<?php

namespace App\Http\Controllers;

class Ejemplo3Controller extends Controller
{
	public function index()
	{
		return "Estas en la pagina de inicio del sitio";
	}
	public function create()
	{
		return "Estas en el create";
	}
	public function store(Request $request)
	{

	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		return "Estas accediendo al metodo edit con el parametro: " . $id;
	}
}