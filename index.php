<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'libs/Smarty.class.php';
require 'includes/classes/conexion.inc';
$evaluador_id=637;

$smarty = new Smarty;
$conexion = new base_datos;


//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;


$smarty->assign("operacion",isset($_GET["operacion"])?$_GET["operacion"]:"error");
$smarty->assign("lista_actas",$conexion->retorna_tabla("select * from actas__reuniones ORDER BY fecha DESC"));

$smarty->assign("nombre_evaluador", $conexion->retorna_campo_individual("usuarios","where usuario_id='$evaluador_id'","CONCAT(nombres, ' ',apellidos)"), true);


$smarty->display('includes/docs_smarty/actas_reuniones.tpl');
