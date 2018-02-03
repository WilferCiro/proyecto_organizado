<?php

class estadisticas{
	static private $conexion;
	public function __construct(){
		$this->conexion = new base_datos;
	}	
	
	public function get_categorias_trabajos_grado(){
		$data_grafica="";
		$estados=$this->conexion->retorna_tabla("select estado_id,detalle from estado_tgrado");
		foreach($estados as $es){
			$cantidad=$this->conexion->realiza_consulta("select tgrado_id from tgrado where estado_id='$es[estado_id]'");
			$data_grafica.="{
						'categoria':'$es[detalle]',
						'cantidad':$cantidad,
						'expenses': 25
						},";
		}
		$n=strlen($data_grafica);
		$data_grafica=substr($data_grafica,0,$n-1);
		return $data_grafica;
	}
	
	public function get_modalidades(){
		$data_grafica="";
		$estados=$this->conexion->retorna_tabla("select modalidad_id,detalle from modalidades");
		foreach($estados as $es){
			$cantidad=$this->conexion->realiza_consulta("select tgrado_id from tgrado where modalidad_id='$es[modalidad_id]'");
			$data_grafica.="{
						'categoria':'$es[detalle]',
						'cantidad':$cantidad,
						'expenses': 25
						},";
		}
		$n=strlen($data_grafica);
		$data_grafica=substr($data_grafica,0,$n-1);
		return $data_grafica;
	}
	
	
	public function get_cantidad_informes_anteproyectos(){
		$data_grafica="";
		$cantidad1=$this->conexion->realiza_consulta("select anteproyecto_id from anteproyectos");
		$cantidad2=$this->conexion->realiza_consulta("select informe_id from informes");
		$data_grafica.="{
					'categoria':'Anteproyectos',
					'cantidad':$cantidad1,
					'expenses': 25
					},{
					'categoria':'Informes',
					'cantidad':$cantidad2,
					'expenses': 25
					}";
	
	
		return $data_grafica;
	}
}

?>
