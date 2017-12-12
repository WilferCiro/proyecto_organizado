<?php


require 'includes/classes/conexion.inc';
$evaluador_id=637;
$conexion = new base_datos;

if(isset($_POST["guardar_acta_reunion"])){
	$mes=$_POST["Date_Month"];
	$dia=$_POST["Date_Day"];
	$anio=$_POST["Date_Year"];
	$fecha= date("U", mktime(0, 0, 0, $mes, $dia, $anio));


	$size=$_FILES['archivo']['size'];
	$nombre="Acta".date("U");
	if($size>=2090000){
		echo "<script language=javascript>
			alert ('El archivo no puede sobrepasar los 2 MegaBytes')
			window.history.go(-1);</script>";
		die;
	}
	$file=$_FILES['archivo']['name'];
	$ext = pathinfo($file,PATHINFO_EXTENSION);	
	$file2=$direccion.basename($file);
	$direccion="documentos/actas_reuniones";
	move_uploaded_file($_FILES['archivo']['tmp_name'],$file2);
	rename ($direccion.$file,$direccion.$nombre.".".$ext);

	$observaciones=$_POST["observaciones"];
	$op=$conexion->agregar("insert into actas__reuniones(fecha,observaciones,usuario_id,documento) values('$fecha','$observaciones','$evaluador_id','$nombre.$ext')");
	if($op==true){
		header("location:index.php?operacion=ver_acta_reunion&ingresados");
	}
	else{
		header("location:index.php?operacion=agregar_acta_reunion&error");
	}
}

?>
