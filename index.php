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
else if(isset($_GET["calificacion"])){
	$id_trabajo=$_GET["tgrado_id"];	
	// Calificación rúbrica
	function calcula_valor_rubrica($tgrado_id, $concepto_id){
		global $evaluador_id,$conexion;
		$nota_valor=$conexion->retorna_campo_individual("tgrado__notas","where concepto_id = '$concepto_id' AND evaluador_id='$evaluador_id' AND tgrado_id='$tgrado_id' ","valor_nota");
		if($nota_valor == ""){
			$conexion->agregar("INSERT into tgrado__notas (concepto_id,tgrado_id,valor_nota,evaluador_id) VALUES('$concepto_id','$tgrado_id','0','$evaluador_id')");
			$valor=0;
		}
		else{
			$valor=$nota_valor;
		}
		return $valor;
	}	
	$smarty->assign("trabajo_id",$id_trabajo);
	$datos_proyecto = $conexion->retorna_consulta("select tg.director,tg.titulo,tg.modalidad_id,mo.nombre as modalidad from tgrado tg,modalidades mo where tg.modalidad_id=mo.modalidad_id AND tg.tgrado_id='$id_trabajo' LIMIT 1");
	$smarty->assign("datos_proyecto",$datos_proyecto);	
	$smarty->assign("conceptos",$conexion->retorna_tabla("select * from tgrado__modalidad__conceptos mc, tgrado__puntos__calificar con WHERE mc.concepto_id=con.concepto_id AND mc.modalidad_id='$datos_proyecto[modalidad_id]'"));
	
	// Observaciones
	$observaciones = $conexion->retorna_consulta("select * from tgrado__conceptos WHERE usuario_id='$evaluador_id' AND tgrado_id='$id_trabajo' ORDER BY fecha_modificado DESC LIMIT 1");
	$smarty->assign("observaciones",$observaciones);
	$smarty->assign("cantidad_conceptos", $conexion->realiza_consulta("select observacion_id from tgrado__conceptos WHERE usuario_id='$evaluador_id' AND tgrado_id='$id_trabajo' AND observacion_id!='$observaciones[observacion_id]'"));
	
	// Calificación sustentaciones
	$graduandos = $conexion->retorna_tabla("select * from tgrado__involucrados inv,usuarios us where us.usuario_id=inv.estudiante_id AND inv.tgrado_id='$id_trabajo'");
	$smarty->assign("graduandos",$graduandos);
	$smarty->assign("conceptos_sustentacion",$conexion->retorna_tabla("select * from tgrado__sustentacion__concepto mc, tgrado__puntos__calificar con WHERE mc.concepto_id=con.concepto_id"));
	
	function calcula_valor_sustentacion($estudiante_id,$id_trabajo,$sustentacion_id){
		global $evaluador_id,$conexion;
		$nota = $conexion->retorna_campo_individual("tgrado__notas__sustentacion","where estudiante_id='$estudiante_id' AND sustentacion_id = '$sustentacion_id' AND evaluador_id='$evaluador_id' AND tgrado_id='$id_trabajo' ","valor_nota");
		if($nota==""){
			$conexion->agregar("INSERT into tgrado__notas__sustentacion (estudiante_id,tgrado_id,valor_nota,sustentacion_id,evaluador_id) VALUES('$estudiante_id','$id_trabajo','0','$sustentacion_id','$evaluador_id')");
			$valor=0;
		}
		else{
			$valor=$nota;
		}
		return $valor;
	}
	
	$smarty->display('includes/docs_smarty/calificacion.tpl');
}
else{
	$smarty->display('includes/docs_smarty/error.tpl');
}
