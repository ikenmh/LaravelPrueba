<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navegacion extends Controller
{
	public function pantallaPrincipal(){

		$usuario=array(
			"id_usuario"=>"123",
			"nombre"=>"<script type='text/javascript'>alert('hola');</script>");

		$datos=array("usuario" => $usuario);

    	return View("Principal",$datos);
	}
}
