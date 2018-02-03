<?php
/* Smarty version 3.1.30, created on 2018-02-02 17:54:52
  from "/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/cabecera.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7497dc04fde0_70155528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152b11d88f369dd5b9babbed87c22f3521096978' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/cabecera.tpl',
      1 => 1517543845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7497dc04fde0_70155528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ensayo Formulario</title>		
		<link rel='stylesheet' href='css/estilo.css' type='text/css' ></link>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel='stylesheet' href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css'></link>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type='text/css' >

		<?php echo '<script'; ?>
 src="js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js" type='text/javascript'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type='text/javascipt'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type='text/javascipt'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='js/nicEdit.js' type='text/javascript'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='js/funciones.js' type='text/javascript'><?php echo '</script'; ?>
>
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
				
<?php }
}
