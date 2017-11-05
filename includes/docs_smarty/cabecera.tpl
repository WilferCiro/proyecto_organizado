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
		  <string style='color:white'>{$nombre_evaluador}</string>
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
				
