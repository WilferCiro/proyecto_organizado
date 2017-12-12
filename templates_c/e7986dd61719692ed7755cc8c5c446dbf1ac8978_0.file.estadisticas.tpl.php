<?php
/* Smarty version 3.1.30, created on 2017-12-12 17:28:35
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/estadisticas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3003b3c3e494_12554865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7986dd61719692ed7755cc8c5c446dbf1ac8978' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/estadisticas.tpl',
      1 => 1513096114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_5a3003b3c3e494_12554865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 src='js/amcharts/amcharts.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/serial.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/pie.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/exporting/amexport.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/exporting/rgbcolor.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/exporting/canvg.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/amcharts/exporting/filesaver.js' type='text/javascript'><?php echo '</script'; ?>
>

<h2>Graficos estadísticos</h2>
<hr />



<?php echo '<script'; ?>
 type='text/javascript'>
	grafica_pie('chartdiv',[<?php echo $_smarty_tpl->tpl_vars['datos_categorias']->value;?>
]);
	grafica_pie('chartdiv2',[<?php echo $_smarty_tpl->tpl_vars['datos_cantidad']->value;?>
]);
	grafica_pie('chartdiv3',[<?php echo $_smarty_tpl->tpl_vars['datos_modalidad']->value;?>
]);
<?php echo '</script'; ?>
>

<div id='chartdiv' class='col-sm-6' style='height:350px;background:white;'></div>
<div id='chartdiv2' class='col-sm-6' style='height:350px;background:white;'></div>
<div id='chartdiv3' class='col-sm-6' style='height:350px;background:white;'></div>
<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
