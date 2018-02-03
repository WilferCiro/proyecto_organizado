<?php
/* Smarty version 3.1.30, created on 2018-02-03 22:52:58
  from "/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/vista_previa_calificacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a762f3a8481c9_49806534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a298684e134dcb65a17c4816b5ea1adf73e9b4' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/vista_previa_calificacion.tpl',
      1 => 1517694697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a762f3a8481c9_49806534 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/libs/plugins/modifier.date_format.php';
?>
<br />
<div class='alert alert-primary' role='alert'>
	Datos guardados con éxito
</div>
<?php if ($_smarty_tpl->tpl_vars['tipo_envio_notas']->value == "imprime_rubrica") {?>
	<div class='modal fade bd-example-modal-lg' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog modal-lg' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title'>Vista previa de impresión</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>
		
					<fieldset>
						<div class='contenedorDialogoMediano'>
								<?php $_smarty_tpl->_assignInScope('modalidad', $_smarty_tpl->tpl_vars['datos_tgrado']->value['modalidad']);
?>
								<b>Título pasantía: </b> <?php echo $_smarty_tpl->tpl_vars['datos_tgrado']->value['titulo'];?>
<br />
								<b>Fecha sustentación: </b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos_tgrado']->value['fecha_sustentacion'],"%A, %B %e, %Y");?>
<br />
								<b>Nombre evaluador: </b> - <br />					
								<b>Nombre(s) estudiante(s): </b>
								<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graduandos']->value, 'gr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
?>
										<li><?php echo $_smarty_tpl->tpl_vars['gr']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['gr']->value['apellidos'];?>
</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</ul>
								<br /><br />
								<h3>Aspectos académicos</h3>
								<table class='table table-responsive table-striped table-hover'>
									<thead>
										<th>Aspecto</th>
										<th width='25%'>Valor cuantitativo</th>
									</thead>
									<tbody>
									<?php $_smarty_tpl->_assignInScope('total', 0);
?>
									<?php $_smarty_tpl->_assignInScope('porcentaje1', 0);
?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conceptos']->value, 'cp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('valor_nota', devuelve_nota_rubrica($_smarty_tpl->tpl_vars['cp']->value['concepto_id'],$_smarty_tpl->tpl_vars['trabajo_id']->value));
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['cp']->value['aspecto'];?>
</td>
											<td class='num'><?php echo $_smarty_tpl->tpl_vars['valor_nota']->value*$_smarty_tpl->tpl_vars['cp']->value['peso']/100;?>
</td>
										</tr>
										<?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['valor_nota']->value*$_smarty_tpl->tpl_vars['cp']->value['peso']/100));
?>
										<?php $_smarty_tpl->_assignInScope('porcentaje1', $_smarty_tpl->tpl_vars['porcentaje1']->value+$_smarty_tpl->tpl_vars['cp']->value['peso']);
?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</tbody>
									<tfoot>
										<tr class='table-inverse'>
											<th>Total</th>
											<th class='num'>
												<?php echo $_smarty_tpl->tpl_vars['total']->value;?>

											</th>
										</tr>
									</tfoot>
								</table><br />
				
								<h3>Sustentación</h3>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graduandos']->value, 'gr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
?>
									<h4><?php echo $_smarty_tpl->tpl_vars['gr']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['gr']->value['apellidos'];?>
</h4>
									<table class='table table-responsive table-striped table-hover'>
										<thead>
											<th>Aspecto</th>
											<th width='25%'>Valor cuantitativo</th>
										</thead>
										<tbody>
										<?php $_smarty_tpl->_assignInScope('total2', 0);
?>
										<?php $_smarty_tpl->_assignInScope('porcentaje2', 0);
?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conceptos_sustentacion']->value, 'cp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->value) {
?>
											<?php $_smarty_tpl->_assignInScope('valor_nota', devuelve_nota_sustentacion($_smarty_tpl->tpl_vars['cp']->value['sustentacion_id'],$_smarty_tpl->tpl_vars['trabajo_id']->value,$_smarty_tpl->tpl_vars['gr']->value['estudiante_id']));
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['cp']->value['aspecto'];?>
</td>
												<td class='num'><?php echo $_smarty_tpl->tpl_vars['valor_nota']->value*$_smarty_tpl->tpl_vars['cp']->value['peso']/100;?>
</td>
											</tr>
											<?php $_smarty_tpl->_assignInScope('total2', $_smarty_tpl->tpl_vars['total2']->value+($_smarty_tpl->tpl_vars['valor_nota']->value*$_smarty_tpl->tpl_vars['cp']->value['peso']/100));
?>
											<?php $_smarty_tpl->_assignInScope('porcentaje2', $_smarty_tpl->tpl_vars['porcentaje2']->value+$_smarty_tpl->tpl_vars['cp']->value['peso']);
?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</tbody>
										<tfoot>
											<tr class='table-inverse'>
												<th>Total</th>
												<th class='num'>
													<?php echo $_smarty_tpl->tpl_vars['total2']->value;?>

												</th>
											</tr>
										</tfoot>
									</table><br />
									
									<b>Resultado de la evaluación</b><br />
									<table class='table table-responsive table-striped table-hover'>
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['modalidad']->value;?>
</th>
												<th width='25%'>Valor cuantitativo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Aspectos académicos y de forma (<?php echo $_smarty_tpl->tpl_vars['porcentaje1']->value;?>
 %)</td>
												<td class='num'><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
											</tr>
											<tr>
												<td>Sustentacion (<?php echo $_smarty_tpl->tpl_vars['porcentaje2']->value;?>
 %)</td>
												<td class='num'><?php echo $_smarty_tpl->tpl_vars['total2']->value;?>
</td>
											</tr>
											<tr class='table-inverse'>
												<th>Total</th>
												<th class='num'><?php echo $_smarty_tpl->tpl_vars['total2']->value+$_smarty_tpl->tpl_vars['total']->value;?>
</th>
											</tr>
										</tbody>
									</table>
									<hr />
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								<br /><br />
								<b>Firma del evaluador: ___________________________________________________</b>
						</div>
					</fieldset>

				<div class='modal-footer'>
					<a href='informes.php?imprimir_trabajo&id_trabajo=$id_trabajo' target='_blank'>
						<button type='button' class='btn btn-primary'>
							<span class='glyphicon glyphicon-print' aria-hidden='true'></span>
							Imprimir
						</button>
					</a>
					<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type='text/javascript'>
		$('#exampleModal').modal();
	<?php echo '</script'; ?>
>	
<?php }?>



<?php }
}
