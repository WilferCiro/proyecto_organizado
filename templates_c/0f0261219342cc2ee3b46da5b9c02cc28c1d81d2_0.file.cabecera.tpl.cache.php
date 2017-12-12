<?php
/* Smarty version 3.1.30, created on 2017-11-05 19:19:44
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/cabecera.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff56408360c7_38355063',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '0f0261219342cc2ee3b46da5b9c02cc28c1d81d2' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/cabecera.tpl',
      1 => 1509905971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ff56408360c7_38355063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '103475597359ff56407bca26_54321661';
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
		  <string style='color:white'><?php echo '/*%%SmartyNocache:103475597359ff56407bca26_54321661%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombre_evaluador\']->value;?>
/*/%%SmartyNocache:103475597359ff56407bca26_54321661%%*/';?>
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
