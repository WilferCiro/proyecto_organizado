<?php


require 'includes/classes/conexion.inc';
$evaluador_id=637;
$conexion = new base_datos;

if(isset($_POST["guardar_acta_reunion"])){
	$mes=$_POST["Date_Month"];
	$dia=$_POST["Date_Day"];
	$anio=$_POST["Date_Year"];
	$fecha= date("U", mktime(0, 0, 0, $mes, $dia, $anio));
	$observaciones=$_POST["observaciones"];
	$op=$conexion->agregar("insert into actas__reuniones(fecha,observaciones,usuario_id) values('$fecha','$observaciones','$evaluador_id')");
	if($op==true){
		header("location:index.php?operacion=ver_acta_reunion&ingresados");
	}
	else{
		header("location:index.php?operacion=agregar_acta_reunion&error");
	}
}

?>
