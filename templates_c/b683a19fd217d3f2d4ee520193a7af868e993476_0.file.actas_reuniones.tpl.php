<?php
/* Smarty version 3.1.30, created on 2017-12-12 06:18:15
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f6697e57b54_04968903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b683a19fd217d3f2d4ee520193a7af868e993476' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl',
      1 => 1513030921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_5a2f6697e57b54_04968903 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/opt/lampp/htdocs/www/grado_ordenado/libs/plugins/function.html_select_date.php';
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
		<div class="col-sm-2"><?php echo smarty_function_html_select_date(array('class'=>'form-control campo_inactivo','prefix'=>'StartDate','time'=>$_smarty_tpl->tpl_vars['anio']->value,'start_year'=>'-5','end_year'=>'+1','display_days'=>false,'display_months'=>false),$_smarty_tpl);?>
</div>
		<div class="col-sm-2"><?php echo smarty_function_html_select_date(array('class'=>'form-control campo_inactivo','prefix'=>'StartDate','display_years'=>false,'display_days'=>false),$_smarty_tpl);?>
</div>
		<div class="col-sm-2"><?php echo smarty_function_html_select_date(array('class'=>'form-control campo_inactivo','prefix'=>'StartDate','display_years'=>false,'display_months'=>false),$_smarty_tpl);?>
</div>
		<label class="col-sm-6 text-danger"></label>
	</div>

	
	<button type="submit" name="ReporteReunion" class="btn btn-primary">Extraer Reporte</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
