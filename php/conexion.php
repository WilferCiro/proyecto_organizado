<?php

	$conexion=mysqli_connect("localhost","root","") OR die(mysqli_error($conexion));
	mysqli_select_db($conexion,"localhost") OR die(mysqli_error($conexion));
	mysqli_set_charset($conexion,"utf-8");

	if(!isset($informes)){
		mysqli_query($conexion,"SET NAMES 'utf8'");
	}
	header("Content-Type: text/html;charset=utf-8");
	
	
?>
