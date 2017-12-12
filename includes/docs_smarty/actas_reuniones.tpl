{include file="includes/docs_smarty/cabecera.tpl"}


<h2>Actas de reuniones</h2>
<hr />

<form name="reporte_reunion" method="post" target='_blank' id="form_tgrado" action='informes.php' enctype="multipart/form-data" role="form" class="form-horizontal">

	<div class="form-group"></div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fecha_aprobado">Acta Nro.</label>
		<div class="col-sm-2">
			<input name="acta_nro" value="" class="form-control campo_inactivo" required="true" type="text">
		</div>
		<label class="col-sm-6 text-danger"></label>
	</div>


	<div class="form-group"></div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fecha_aprobado">Fecha del reporte (Desde)</label>
		<div class="col-sm-2">{html_select_date class='form-control campo_inactivo' prefix='StartDate' time=$anio start_year='-5' end_year='+1' display_days=false display_months=false}</div>
		<div class="col-sm-2">{html_select_date class='form-control campo_inactivo' prefix='StartDate' display_years=false display_days=false}</div>
		<div class="col-sm-2">{html_select_date class='form-control campo_inactivo' prefix='StartDate' display_years=false display_months=false}</div>
		<label class="col-sm-6 text-danger"></label>
	</div>

	
	<button type="submit" name="ReporteReunion" class="btn btn-primary">Extraer Reporte</button>
</form>


{include file="includes/docs_smarty/piedepagina.tpl"}
