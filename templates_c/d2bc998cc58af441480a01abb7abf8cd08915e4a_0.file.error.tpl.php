<?php
/* Smarty version 3.1.30, created on 2017-12-11 23:09:32
  from "/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f021c8aa2d9_71949286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2bc998cc58af441480a01abb7abf8cd08915e4a' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/includes/docs_smarty/error.tpl',
      1 => 1513030171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_5a2f021c8aa2d9_71949286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Error, esta página no existe, por favor redireccionese al inicio</h2>
<hr />



<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
