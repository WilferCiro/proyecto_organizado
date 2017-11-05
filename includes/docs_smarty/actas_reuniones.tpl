{include file="includes/docs_smarty/cabecera.tpl"}

{if $operacion==ver_acta_reunion}
	<h2>Actas de reuniones</h2>
	<hr />
	<a href='index.php?operacion=agregar_acta_reunion' class='btn btn-success agregar_nueva'>
		<span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
		 Agregar Nuevo
	</a>
	<hr />
	{if isset($smarty.get.ingresados)}
		<div class='alert alert-primary' role='alert'>
			Se ha ingresado correctamente
		</div>
	{/if}
	<table class='table table-responsive table-striped table-hover' id='tabla_paginacion'>
		<thead>
			<tr>
				<th>Acta Nro.</th>
				<th>Fecha reunión</th>
				<th>Observaciones</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$lista_actas item=row}
				<tr>
					<td>{$row.acta_id}</td>
					<td>{date("Y-m-d",$row.fecha)}</td>
					<td>{$row.observaciones}</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{elseif $operacion==agregar_acta_reunion}
	<h2>Agregar acta de reunión</h2>
	<hr />
	<form action='operaciones.php' method='post' id='configuracion'>
		
		<div class='form-group'>
			<label for='fecha_reunion'>Fecha Reunión</label>
			{html_select_date}
		</div>
		
		<div class='form-group'>
			<label for='observaciones'>Observaciones</label>		
			<textarea id='nicEdit' name='observaciones' style='width:1000px;height:80px;'></textarea>
		</div>
		<input type='hidden' name='configuracion_id' value='$nt[configuracion_id]'>
		<button type='submit' name='guardar_acta_reunion' class='btn btn-primary'>Guardar datos</button>
		<a  class='btn btn-danger' href='index.php?operacion=ver_acta_reunion'>Cancelar</a>
	</form>
{elseif $operacion==error}
	Error
{/if}

{include file="includes/docs_smarty/piedepagina.tpl"}
