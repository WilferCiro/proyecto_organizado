<?php

class base_datos{
	static private $conexion=NULL;
	public function __construct(){
		$this->conexion = new mysqli("localhost","root","","localhost");

		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
		}
		$this->conexion->query("set charset 'UTF8'");
	}
	
	
	public function realiza_consulta($sql){
		$operacion=$this->conexion->query($sql) or die ($this->conexion->error);
		return $operacion->num_rows;
	}
	
	public function agregar($sql){
		$operacion=$this->conexion->query($sql) or die ($this->conexion->error);
		return true;
	}
	
	public function retorna_tabla($sql){
		$operacion=$this->conexion->query($sql); 
		$rows = array();
		while($row = $operacion->fetch_array(MYSQLI_ASSOC)) {
		    $rows[] = $row;
		}
		return $rows;		
	}
	
	public function retorna_campo_individual($tabla,$adicional,$campo){
		$operacion=$this->conexion->query("select $campo from $tabla $adicional LIMIT 1");
		
		if ($row = $operacion->fetch_assoc()) {
			return $row[$campo];
		}
		else{
			return "";
		}
	}
	
	
	
}

?>
