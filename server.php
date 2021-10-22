<?php 
	require_once "lib/nusoap.php";
	function obtenerPelicula($dato){
		if($dato == "Peliculas")
		{
			return join(",", array(
				"Viuda Negra",
				"La Liga de la Justicia de Zack Snyd",
				"El otro guardaespaldas 2",
				"Justicia implacable"
			));
		}
		else
		{
			return "En la base de datos no se encuentra lo que buscaba";
		}
	}
	$server = new soap_server();
	$server->register("obtenerPelicula");
	if(!isset($http_post_data)) $http_raw_post_data = file_get_contents('php://input');
	$server->service($http_raw_post_data);
 ?>