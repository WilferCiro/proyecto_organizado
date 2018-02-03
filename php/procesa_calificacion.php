<?php

require '../libs/Smarty.class.php';
require '../includes/classes/conexion.inc'; // Clase para las conexiones y operaciones a la base de datos
$evaluador_id=637; // id usuario temporal

$smarty = new Smarty; // Crea nuevo objeto de la clase Smarty
$conexion = new base_datos; // Crea nuevo Objeto de la clase base_datos

$smarty->debugging = false; // evita el modo debug
$smarty->caching = false; // evital el cahé en smarty

if(isset($_POST["guardar_notas"])){
	$tipo_envio_notas=$_POST["tipo_envio_notas"];
	$id_trabajo=$_POST["id_trabajo"];
	$observacion_id=$_POST["observacion_id"];
	$observaciones=$_POST["observaciones"];
	$concepto=isset($_POST["concepto"])?$_POST["concepto"]:'';

	$modalidad = $conexion->retorna_campo_individual("tgrado"," where tgrado_id='$id_trabajo' ","modalidad_id");
	if($modalidad!=""){
		$conceptos=$conexion->retorna_tabla("select * from tgrado__modalidad__conceptos mc, tgrado__puntos__calificar con WHERE mc.concepto_id=con.concepto_id AND mc.modalidad_id='$modalidad'");
		foreach($conceptos as $cp){
			if(isset($_POST["valor_".$cp['concepto_id']])){
				$nota=($_POST["valor_".$cp['concepto_id']]>5)?5:($_POST["valor_".$cp['concepto_id']]<0)?0:$_POST["valor_".$cp['concepto_id']];
				$conexion->agregar("UPDATE tgrado__notas set fecha_ingreso='".date("U")."',valor_nota='$nota' WHERE concepto_id='$cp[concepto_id]' AND tgrado_id='$id_trabajo' AND evaluador_id='$evaluador_id'");
			}
		}				
		$conceptos_sustentacion=$conexion->retorna_tabla("select * from tgrado__sustentacion__concepto mc, tgrado__puntos__calificar con WHERE mc.concepto_id=con.concepto_id");
		foreach($conceptos_sustentacion as $cp){
			$graduandos=$conexion->retorna_tabla("select * from tgrado__involucrados inv,usuarios us where us.usuario_id=inv.estudiante_id AND inv.tgrado_id='$id_trabajo'") OR die(mysqli_error($conexion));
			foreach($graduandos as $gr){
				if(isset($_POST["sustentacion_".$cp['concepto_id'].'_'.$gr["estudiante_id"]])){
					$nota=($_POST["sustentacion_".$cp['concepto_id'].'_'.$gr["estudiante_id"]]>5)?5:($_POST["sustentacion_".$cp['concepto_id'].'_'.$gr["estudiante_id"]]<0)?0:$_POST["sustentacion_".$cp['concepto_id'].'_'.$gr["estudiante_id"]];
					$conexion->agregar("UPDATE tgrado__notas__sustentacion set fecha_ingreso='".date("U")."',valor_nota='$nota' WHERE estudiante_id='$gr[estudiante_id]' AND sustentacion_id='$cp[sustentacion_id]' AND tgrado_id='$id_trabajo' AND evaluador_id='$evaluador_id'");
				}
			}
		}	
		if($observacion_id==""){
			$conexion->agregar("insert into tgrado__conceptos (fecha_modificado,observacion,tgrado_id,fecha,usuario_id,concepto) VALUES('".date('U')."','$observaciones','$id_trabajo','".date('U')."','$evaluador_id','$concepto')");
		}
		else{
			$conexion->agregar("UPDATE tgrado__conceptos set fecha_modificado='".date('U')."',observacion='$observaciones',concepto='$concepto',usuario_id='$evaluador_id' WHERE observacion_id='$observacion_id'");
		}
		
		// Vista previa
		$smarty->assign("trabajo_id",$id_trabajo);
		$smarty->assign("tipo_envio_notas",$tipo_envio_notas);
		$smarty->assign("datos_tgrado",$conexion->retorna_consulta("select tg.fecha_sustentacion,tg.titulo,tg.modalidad_id,mo.nombre as modalidad from tgrado tg,modalidades mo where tg.modalidad_id=mo.modalidad_id AND tg.tgrado_id='$id_trabajo' LIMIT 1"));
		$graduandos = $conexion->retorna_tabla("select * from tgrado__involucrados inv,usuarios us where us.usuario_id=inv.estudiante_id AND inv.tgrado_id='$id_trabajo'");
		$smarty->assign("graduandos",$graduandos);
		$smarty->assign("conceptos", $conceptos);
		function devuelve_nota_rubrica($concepto_id,$id_trabajo){
			global $conexion,$evaluador_id;
			$nota = $conexion->retorna_campo_individual("tgrado__notas","where concepto_id = '$concepto_id' AND evaluador_id='$evaluador_id' AND tgrado_id='$id_trabajo' ","valor_nota");
			return $nota;
		}
		function devuelve_nota_sustentacion($sustentacion_id,$id_trabajo,$estudiante_id){
			global $conexion,$evaluador_id;
			$nota = $conexion->retorna_campo_individual("tgrado__notas__sustentacion","where estudiante_id='$estudiante_id' AND sustentacion_id = '$sustentacion_id' AND evaluador_id='$evaluador_id' AND tgrado_id='$id_trabajo' ","valor_nota");
			return $nota;
		}
		$smarty->assign("conceptos_sustentacion",$conceptos_sustentacion);		
		$smarty->assign("modalidad",$modalidad);
		$smarty->display('../includes/docs_smarty/vista_previa_calificacion.tpl');
	}
}
else{
	$smarty->display('../includes/docs_smarty/error.tpl');
}
/*



	
*/


?>
