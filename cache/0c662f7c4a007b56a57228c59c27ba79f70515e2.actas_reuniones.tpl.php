<?php
/* Smarty version 3.1.30, created on 2017-11-05 20:29:58
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff66b65eb532_21827838',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b683a19fd217d3f2d4ee520193a7af868e993476' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl',
      1 => 1509908958,
      2 => 'file',
    ),
    '0f0261219342cc2ee3b46da5b9c02cc28c1d81d2' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/cabecera.tpl',
      1 => 1509905971,
      2 => 'file',
    ),
    '3d36af835b1f338a9413746bcb18d8b93071a152' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/piedepagina.tpl',
      1 => 1509851226,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 10,
),true)) {
function content_59ff66b65eb532_21827838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ensayo Formulario</title>		
		<link rel='stylesheet' href='css/estilo.css' type='text/css' ></link>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel='stylesheet' href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css'></link>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type='text/css' >

		<script src="js/jquery-2.1.1.min.js"></script>
		
		<script src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js" type='text/javascript'></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type='text/javascipt'></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type='text/javascipt'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='js/nicEdit.js' type='text/javascript'></script>
		<script src='js/funciones.js' type='text/javascript'></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		  <string style='color:white'><?php echo $_smarty_tpl->tpl_vars['nombre_evaluador']->value;?>
</string>
		</nav>
		<div id='contenedor_body' class='container-fluid'>
			<div class='row'>
				<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
					<ul class="nav nav-pills flex-column">
						<li class="nav-item">
						  <a class="nav-link active" href="#">Actual <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link" href="index.php">Salir</a>
						</li>
					  </ul>
				</nav>
				<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role='main'>
				

agregar_acta_reunion

	<h2>Agregar acta de reunión</h2>
	<hr />
	<form action='guarda_notificaciones.php' method='post' id='configuracion'>
		
		<div class='form-group'>
			<label for='fecha_reunion'>Fecha Reunión</label>
			<select name="Date_Month">
<option value="01">enero</option>
<option value="02">febrero</option>
<option value="03">marzo</option>
<option value="04">abril</option>
<option value="05">mayo</option>
<option value="06">junio</option>
<option value="07">julio</option>
<option value="08">agosto</option>
<option value="09">septiembre</option>
<option value="10">octubre</option>
<option value="11" selected="selected">noviembre</option>
<option value="12">diciembre</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5" selected="selected">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="2017" selected="selected">2017</option>
</select>
		</div>
		
		<div class='form-group'>
			<label for='observaciones'>Observaciones</label>		
			<textarea id='nicEdit' name='cuerpo_mensaje' style='width:1000px;height:80px;'></textarea>
		</div>
		<input type='hidden' name='configuracion_id' value='$nt[configuracion_id]'>
		<button type='submit' name='guardar_acta_reunion' class='btn btn-primary'>Guardar datos</button>
		<a  class='btn btn-danger' href='index.php?operacion=ver_acta_reunion'>Cancelar</a>
	</form>


<?php }
}
