<?php
/* Smarty version 3.1.30, created on 2017-11-05 23:53:13
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ff9659bffee6_22490380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b683a19fd217d3f2d4ee520193a7af868e993476' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/actas_reuniones.tpl',
      1 => 1509922391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_59ff9659bffee6_22490380 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once '/opt/lampp/htdocs/www/grado_ordenado/libs/plugins/function.html_select_date.php';
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['operacion']->value == 'ver_acta_reunion') {?>
	<h2>Actas de reuniones</h2>
	<hr />
	<a href='index.php?operacion=agregar_acta_reunion' class='btn btn-success agregar_nueva'>
		<span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
		 Agregar Nuevo
	</a>
	<hr />
	<?php if (isset($_GET['ingresados'])) {?>
		<div class='alert alert-primary' role='alert'>
			Se ha ingresado correctamente
		</div>
	<?php }?>
	<table class='table table-responsive table-striped table-hover' id='tabla_paginacion'>
		<thead>
			<tr>
				<th>Acta Nro.</th>
				<th>Fecha reunión</th>
				<th>Observaciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_actas']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['acta_id'];?>
</td>
					<td><?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['row']->value['fecha']);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['observaciones'];?>
</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['operacion']->value == 'agregar_acta_reunion') {?>
	<h2>Agregar acta de reunión</h2>
	<hr />
	<form action='operaciones.php' method='post' id='configuracion'>
		
		<div class='form-group'>
			<label for='fecha_reunion'>Fecha Reunión</label>
			<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>

		</div>
		
		<div class='form-group'>
			<label for='observaciones'>Observaciones</label>		
			<textarea id='nicEdit' name='observaciones' style='width:1000px;height:80px;'></textarea>
		</div>
		<input type='hidden' name='configuracion_id' value='$nt[configuracion_id]'>
		<button type='submit' name='guardar_acta_reunion' class='btn btn-primary'>Guardar datos</button>
		<a  class='btn btn-danger' href='index.php?operacion=ver_acta_reunion'>Cancelar</a>
	</form>
<?php } elseif ($_smarty_tpl->tpl_vars['operacion']->value == 'error') {?>
	Error
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
