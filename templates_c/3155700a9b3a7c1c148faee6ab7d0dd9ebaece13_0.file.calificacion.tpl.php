<?php
/* Smarty version 3.1.30, created on 2018-02-03 23:26:39
  from "/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/calificacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76371f3c9468_76130918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3155700a9b3a7c1c148faee6ab7d0dd9ebaece13' => 
    array (
      0 => '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/includes/docs_smarty/calificacion.tpl',
      1 => 1517696582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/docs_smarty/cabecera.tpl' => 1,
    'file:includes/docs_smarty/piedepagina.tpl' => 1,
  ),
),false)) {
function content_5a76371f3c9468_76130918 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) require_once '/opt/lampp/htdocs/www/grado_ordenado/proyecto_organizado/libs/plugins/function.math.php';
$_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type='text/javascript' src='js/Calificacion.js'><?php echo '</script'; ?>
>
<h2>Calificación</h2>


<div class="modal fade" id="modal_cargando" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				Procesando información, sea paciente...
			</div>
		</div>
	</div>
</div>
<?php if (count($_smarty_tpl->tpl_vars['datos_proyecto']->value) > 0) {?>
	<?php echo $_smarty_tpl->tpl_vars['datos_proyecto']->value['modalidad'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos_proyecto']->value['titulo'];?>
 su director es <?php echo $_smarty_tpl->tpl_vars['datos_proyecto']->value['director'];?>

	<hr />
	<form method='post' id='formulario_envio_notas'>
		<ul class='nav nav-tabs mb-3' role='tablist'>
			<li class='active'><a data-toggle='tab' href='#tabs-2'>Concepto</a></li>
			<li><a data-toggle='tab' href='#tabs-1'>Calificación del informe</a></li>
			<li><a data-toggle='tab' href='#tabs-3'>Sustentación</a></li>
		</ul>
		
		
		<div class='tab-content'>
			<div id='tabs-1' class='tab-pane fade in' role='tabpanel'>
				<div class='alert alert-primary' role='alert'>
					<ul>
						<li><b>1.0 - 1.9:</b> No cumple</li>
						<li><b>2.0 - 2.9:</b> Cumple insatisfactoriamente</li>
						<li><b>3.0 - 3.9:</b> Cumple aceptablemente</li>
						<li><b>4.0 - 4.4:</b> Cumple en alto grado</li>
						<li><b>4.5 - 5.0:</b> Cumple plenamente</li>
					</ul>
				</div>
				<h2><center>Rúbrica</center></h2>
				<table class='table table-responsive table-striped table-hover'>
					<thead>
						<tr>
							<th width='500px'>Aspecto</th>
							<th>Peso</th>
							<th>valor</th>
							<th>Total</th>						
						</tr>
					</thead>
					<tbody>
						<?php $_smarty_tpl->_assignInScope('totales', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conceptos']->value, 'con');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['con']->value['aspecto'];?>
 </td>
								<td class='num'><?php echo $_smarty_tpl->tpl_vars['con']->value['peso'];?>
 %</td>
								<td><input title='Presione TAB para cambiar de casilla' data-toggle='tooltip' data-placement='top' peso='<?php echo $_smarty_tpl->tpl_vars['con']->value['peso'];?>
' id='valor_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
' name='valor_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
' value='<?php echo calcula_valor_rubrica($_smarty_tpl->tpl_vars['trabajo_id']->value,$_smarty_tpl->tpl_vars['con']->value['concepto_id']);?>
' class='campo_agregar1 input_numeros input_tabla1' autocomplete='off'></td>
								<td class='numerico' id='total_valor_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
'>0</td>								
							</tr>
							<?php $_smarty_tpl->_assignInScope('totales', $_smarty_tpl->tpl_vars['totales']->value+$_smarty_tpl->tpl_vars['con']->value['peso']);
?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tbody>
					<tfoot>
						<tr class='table-inverse'>
							<td>Total</td>
							<td class='num'><?php echo $_smarty_tpl->tpl_vars['totales']->value;?>
%</td>
							<td class='num'> - </td>
							<td class='num' id='totalisimo1'> 0 </td>
						</tr>
					</tfoot>
				</table><br />
				
			</div>
			
			
			<div id='tabs-2' class='tab-pane fade in active'>
				<fieldset>
					<?php if ($_smarty_tpl->tpl_vars['cantidad_conceptos']->value > 0) {?>
						<a id='ver_anteriores_conceptos'>Existen <?php echo $_smarty_tpl->tpl_vars['cantidad_conceptos']->value;?>
 anteriores conceptos, presione aquí para ver los anteriores</a><br /><br />
					<?php }?>			
					
					<div class='form-group row'>
						<label for='inputEmail3' class='col-sm-2 col-form-label'>Última modificación:</label>
						<div class='col-sm-10'>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['observaciones']->value['fecha_modificado'],"%A, %B %e, %Y");?>

						</div>
					</div>
					<div class='form-group row'>
						<label for='inputEmail3' class='col-sm-2 col-form-label'>Observaciones:</label>
						<div class='col-sm-10'>
							<textarea id='observaciones' name='observa' style='width:800px;height:40px;' ><?php echo $_smarty_tpl->tpl_vars['observaciones']->value['observacion'];?>
</textarea>
						</div>
					</div>
					<input type='hidden' name='observacion_id' value='<?php echo $_smarty_tpl->tpl_vars['observaciones']->value['observacion_id'];?>
' readonly>

					<input type='hidden' name='observaciones' id='nuevasObservaciones' value=''>
					<br />
					<label class='custom-control custom-radio'>
						<input value='reprobado' <?php if ($_smarty_tpl->tpl_vars['observaciones']->value['concepto'] == "reprobado") {?> checked <?php }?> id='radio1' name='concepto' type='radio' class='custom-control-input' required>
						<span class='custom-control-indicator'></span>
						<span class='custom-control-description'>Reprobado</span>
					</label>
					<label class='custom-control custom-radio'>
						<input value='aplazado' <?php if ($_smarty_tpl->tpl_vars['observaciones']->value['concepto'] == "aplazado") {?> checked <?php }?> id='radio2' name='concepto' type='radio' class='custom-control-input' required>
						<span class='custom-control-indicator'></span>
						<span class='custom-control-description'>Aplazado</span>
					</label>
					<label class='custom-control custom-radio'>
						<input value='listo_sustentar' <?php if ($_smarty_tpl->tpl_vars['observaciones']->value['concepto'] == "listo_sustentar") {?> checked <?php }?> id='radio3' name='concepto' type='radio' class='custom-control-input' required>
						<span class='custom-control-indicator'></span>
						<span class='custom-control-description'>Listo para sustentar</span>
					</label>
				</fieldset>				
			</div>
			
			
			<div id='tabs-3' class='tab-pane fade in'>
				<div class='alert alert-primary' role='alert'>
					<ul>
						<li><b>1.0 - 1.9:</b> No cumple</li>
						<li><b>2.0 - 2.9:</b> Cumple insatisfactoriamente</li>
						<li><b>3.0 - 3.9:</b> Cumple aceptablemente</li>
						<li><b>4.0 - 4.4:</b> Cumple en alto grado</li>
						<li><b>4.5 - 5.0:</b> Cumple plenamente</li>
					</ul>
				</div>
									
									
				<h2><center>Sustentación</center></h2>
					<table class='table table-responsive table-striped table-hover'>
						<thead>
							<tr>
								<th rowspan=2 width='500px'>Aspecto</th>
								<th rowspan=2>Peso</th>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graduandos']->value, 'grad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grad']->value) {
?>
									<th colspan=2><?php echo $_smarty_tpl->tpl_vars['grad']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['grad']->value['apellidos'];?>
</th>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? count($_smarty_tpl->tpl_vars['graduandos']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['graduandos']->value))+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
									<th>Valor</th>
									<th>Total</th>
								<?php }
}
?>

							</tr>
						</thead>
						<tbody>
							<?php $_smarty_tpl->_assignInScope('valores', array());
?>
							<?php $_smarty_tpl->_assignInScope('totales_conceptos', 0);
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conceptos_sustentacion']->value, 'con');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['con']->value['aspecto'];?>
</td>
									<td class='num'><?php echo $_smarty_tpl->tpl_vars['con']->value['peso'];?>
 %</td>
									<?php $_smarty_tpl->_assignInScope('nro', 0);
?>									
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graduandos']->value, 'gr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
?>
										<?php if (!isset($_smarty_tpl->tpl_vars['valores']->value[$_smarty_tpl->tpl_vars['nro']->value])) {?>
											<?php echo array_push($_smarty_tpl->tpl_vars['valores']->value,0);?>

										<?php }?>
										<?php $_smarty_tpl->_assignInScope('nota', calcula_valor_sustentacion($_smarty_tpl->tpl_vars['gr']->value['estudiante_id'],$_smarty_tpl->tpl_vars['trabajo_id']->value,$_smarty_tpl->tpl_vars['con']->value['sustentacion_id']));
?>
										<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['valores']) ? $_smarty_tpl->tpl_vars['valores']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['nro']->value] = $_smarty_tpl->tpl_vars['valores']->value[$_smarty_tpl->tpl_vars['nro']->value]+($_smarty_tpl->tpl_vars['nota']->value*$_smarty_tpl->tpl_vars['con']->value['peso']/100);
$_smarty_tpl->_assignInScope('valores', $_tmp_array);
?>
										<td><input title='Presione TAB para cambiar de casilla' data-toggle='tooltip' peso='<?php echo $_smarty_tpl->tpl_vars['con']->value['peso'];?>
' estudiante_id='<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
' id='sustentacion_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
' name='sustentacion_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['nota']->value;?>
' class='campo_agregar_sustentacion campo_agregar_sustentacion_estudiante_<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
 input_numeros input_tabla1' autocomplete='off'></td>
										<td class='num' id='valor_sustentacion_<?php echo $_smarty_tpl->tpl_vars['con']->value['concepto_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
'><?php echo smarty_function_math(array('equation'=>"nota / peso",'nota'=>$_smarty_tpl->tpl_vars['nota']->value,'peso'=>$_smarty_tpl->tpl_vars['con']->value['peso'],'format'=>"%.2f"),$_smarty_tpl);?>
</td>
										<?php $_smarty_tpl->_assignInScope('nro', $_smarty_tpl->tpl_vars['nro']->value+1);
?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
									
								</tr>
								<?php $_smarty_tpl->_assignInScope('totales_conceptos', $_smarty_tpl->tpl_vars['totales_conceptos']->value+$_smarty_tpl->tpl_vars['con']->value['peso']);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</tbody>
						<tfoot>
							<tr class='table-inverse'>
								<td>Total</td>
								<td class='num'><?php echo $_smarty_tpl->tpl_vars['totales_conceptos']->value;?>
%</td>
								<?php $_smarty_tpl->_assignInScope('nro', 0);
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['graduandos']->value, 'gr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
?>	
									<td class='num'> - </td>
									<td class='num' id='totalisimo_sustentacion_<?php echo $_smarty_tpl->tpl_vars['gr']->value['estudiante_id'];?>
'> <?php echo smarty_function_math(array('equation'=>"nota",'nota'=>$_smarty_tpl->tpl_vars['valores']->value[$_smarty_tpl->tpl_vars['nro']->value],'format'=>"%.2f"),$_smarty_tpl);?>
</td>
									<?php $_smarty_tpl->_assignInScope('nro', $_smarty_tpl->tpl_vars['nro']->value+1);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
						</tfoot>
					</table><br />

			</div>
			
		</div>
		<hr />
		
		<fieldset class='foot'>
			<input autocomplete='off' type='hidden' name='guardar_notas' value='YES' readonly>
			<input name='tipo_envio_notas' id='tipo_envio_notas' type='hidden' readonly>
			<input autocomplete='off' type='hidden' name='id_trabajo' value='<?php echo $_smarty_tpl->tpl_vars['trabajo_id']->value;?>
' readonly>
			<button type='submit' tipo='guarda_rubrica' class='btn btn-primary boton_envio envia_form'>
				<span class='glyphicon glyphicon-save' aria-hidden='true'></span>
				Guardar datos ingresados
			</button>
			<button type='submit' tipo='imprime_rubrica' class='btn btn-primary boton_envio envia_form btn-success'>
				<span class='glyphicon glyphicon-print' aria-hidden='true'></span>
				Guardar e imprimir rúbrica
			</button>
		</fieldset><br />
	</form>

	<div id='carga_ajax2'></div>
	
	
	
	
	
	
	
<?php }?>




<?php $_smarty_tpl->_subTemplateRender("file:includes/docs_smarty/piedepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
