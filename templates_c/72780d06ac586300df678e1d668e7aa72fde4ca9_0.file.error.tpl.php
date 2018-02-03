<?php
/* Smarty version 3.1.30, created on 2018-02-03 23:33:44
  from "/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7638c81f6122_29306543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72780d06ac586300df678e1d668e7aa72fde4ca9' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/error.tpl',
      1 => 1517697027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_5a7638c81f6122_29306543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Error, esta página no existe, por favor redireccione</h2>
<hr />
<a href='index.php?calificacion&tgrado_id=14'>Calificar el trabajo de grado con índice 14</a><br />
<a href='index.php?estadisticas'>Estadísticas</a><br />

<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
