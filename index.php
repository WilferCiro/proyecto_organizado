<?php

require 'libs/Smarty.class.php';
require 'includes/classes/conexion.inc'; // Clase para las conexiones y operaciones a la base de datos
require 'includes/classes/estadisticas.inc';
$evaluador_id=637; // id usuario temporal

$smarty = new Smarty; // Crea nuevo objeto de la clase Smarty
$conexion = new base_datos; // Crea nuevo Objeto de la clase base_datos


$smarty->debugging = false; // evita el modo debug
$smarty->caching = false; // evital el cahé en smarty


$smarty->assign("anio",date("Y")); // Variable que contiene el año actual
$smarty->assign("fecha",date("d")."/".date("m")."/".date("Y")); // Variable que contiene la fecha actual con formato dia/mes/año

// Nombre del evaluador temporal
$smarty->assign("nombre_evaluador", $conexion->retorna_campo_individual("usuarios","where usuario_id='$evaluador_id'","CONCAT(nombres, ' ',apellidos)"), true); 


if(isset($_GET["actas_reuniones"])){
	$smarty->display('includes/docs_smarty/actas_reuniones.tpl'); // incluir la página tpl donde se muestran las opciones de las actas de las reuniones
}
else if(isset($_GET["estadisticas"])){
	$estadisticas=new estadisticas;
	$smarty->assign("datos_categorias",$estadisticas->get_categorias_trabajos_grado());
	$smarty->assign("datos_cantidad",$estadisticas->get_cantidad_informes_anteproyectos());
	$smarty->assign("datos_modalidad",$estadisticas->get_modalidades());
	
	$smarty->display('includes/docs_smarty/estadisticas.tpl');// Incluir página con el html correspondiente a las estadísticas
}
else{
	$smarty->display('includes/docs_smarty/error.tpl');
}
