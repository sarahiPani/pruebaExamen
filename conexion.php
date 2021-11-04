<?php
	
	$mysqli = new mysqli('localhost', 'sarahi', 'pani', 'prueba');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>