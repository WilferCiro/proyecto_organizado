{include file="includes/docs_smarty/cabecera.tpl"}
<script type='text/javascript' src='js/Calificacion.js'></script>
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
{if count($datos_proyecto)>0}
	{$datos_proyecto['modalidad']} {$datos_proyecto['titulo']} su director es {$datos_proyecto['director']}
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
						{$totales = 0}
						{foreach from=$conceptos item=con}
							<tr>
								<td>{$con.aspecto} </td>
								<td class='num'>{$con.peso} %</td>
								<td><input title='Presione TAB para cambiar de casilla' data-toggle='tooltip' data-placement='top' peso='{$con.peso}' id='valor_{$con.concepto_id}' name='valor_{$con.concepto_id}' value='{calcula_valor_rubrica($trabajo_id,$con.concepto_id)}' class='campo_agregar1 input_numeros input_tabla1' autocomplete='off'></td>
								<td class='numerico' id='total_valor_{$con.concepto_id}'>0</td>								
							</tr>
							{$totales=$totales+$con.peso}
						{/foreach}
					</tbody>
					<tfoot>
						<tr class='table-inverse'>
							<td>Total</td>
							<td class='num'>{$totales}%</td>
							<td class='num'> - </td>
							<td class='num' id='totalisimo1'> 0 </td>
						</tr>
					</tfoot>
				</table><br />
				
			</div>
			
			
			<div id='tabs-2' class='tab-pane fade in active'>
				<fieldset>
					{if $cantidad_conceptos>0}
						<a id='ver_anteriores_conceptos'>Existen {$cantidad_conceptos} anteriores conceptos, presione aquí para ver los anteriores</a><br /><br />
					{/if}			
					
					<div class='form-group row'>
						<label for='inputEmail3' class='col-sm-2 col-form-label'>Última modificación:</label>
						<div class='col-sm-10'>
							{$observaciones.fecha_modificado|date_format:"%A, %B %e, %Y"}
						</div>
					</div>
					<div class='form-group row'>
						<label for='inputEmail3' class='col-sm-2 col-form-label'>Observaciones:</label>
						<div class='col-sm-10'>
							<textarea id='observaciones' name='observa' style='width:800px;height:40px;' >{$observaciones.observacion}</textarea>
						</div>
					</div>
					<input type='hidden' name='observacion_id' value='{$observaciones.observacion_id}' readonly>

					<input type='hidden' name='observaciones' id='nuevasObservaciones' value=''>
					<br />
					<label class='custom-control custom-radio'>
						<input value='reprobado' {if $observaciones.concepto == "reprobado"} checked {/if} id='radio1' name='concepto' type='radio' class='custom-control-input' required>
						<span class='custom-control-indicator'></span>
						<span class='custom-control-description'>Reprobado</span>
					</label>
					<label class='custom-control custom-radio'>
						<input value='aplazado' {if $observaciones.concepto == "aplazado"} checked {/if} id='radio2' name='concepto' type='radio' class='custom-control-input' required>
						<span class='custom-control-indicator'></span>
						<span class='custom-control-description'>Aplazado</span>
					</label>
					<label class='custom-control custom-radio'>
						<input value='listo_sustentar' {if $observaciones.concepto == "listo_sustentar"} checked {/if} id='radio3' name='concepto' type='radio' class='custom-control-input' required>
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
								{foreach from=$graduandos item=grad}
									<th colspan=2>{$grad.nombres} {$grad.apellidos}</th>
								{/foreach}
							</tr>
							<tr>
								{for $var=1 to count($graduandos)}
									<th>Valor</th>
									<th>Total</th>
								{/for}
							</tr>
						</thead>
						<tbody>
							{$valores=array()}
							{$totales_conceptos = 0}
							{foreach from=$conceptos_sustentacion item=con}
								<tr>
									<td>{$con.aspecto}</td>
									<td class='num'>{$con.peso} %</td>
									{$nro=0}									
									{foreach from=$graduandos item=gr}
										{if !isset($valores[$nro])}
											{array_push($valores,0)}
										{/if}
										{$nota = calcula_valor_sustentacion($gr.estudiante_id,$trabajo_id,$con.sustentacion_id)}
										{$valores[$nro] = $valores[$nro]+($nota*$con.peso/100)}
										<td><input title='Presione TAB para cambiar de casilla' data-toggle='tooltip' peso='{$con.peso}' estudiante_id='{$gr.estudiante_id}' id='sustentacion_{$con.concepto_id}_{$gr.estudiante_id}' name='sustentacion_{$con.concepto_id}_{$gr.estudiante_id}' value='{$nota}' class='campo_agregar_sustentacion campo_agregar_sustentacion_estudiante_{$gr.estudiante_id} input_numeros input_tabla1' autocomplete='off'></td>
										<td class='num' id='valor_sustentacion_{$con.concepto_id}_{$gr.estudiante_id}'>{math equation="nota / peso" nota=$nota peso=$con.peso format="%.2f"}</td>
										{$nro = $nro+1}
									{/foreach}									
								</tr>
								{$totales_conceptos = $totales_conceptos+$con.peso}
							{/foreach}
						</tbody>
						<tfoot>
							<tr class='table-inverse'>
								<td>Total</td>
								<td class='num'>{$totales_conceptos}%</td>
								{$nro=0}
								{foreach from=$graduandos item=gr}	
									<td class='num'> - </td>
									<td class='num' id='totalisimo_sustentacion_{$gr.estudiante_id}'> {math equation="nota" nota=$valores[$nro] format="%.2f"}</td>
									{$nro = $nro+1}
								{/foreach}
							</tr>
						</tfoot>
					</table><br />

			</div>
			
		</div>
		<hr />
		
		<fieldset class='foot'>
			<input autocomplete='off' type='hidden' name='guardar_notas' value='YES' readonly>
			<input name='tipo_envio_notas' id='tipo_envio_notas' type='hidden' readonly>
			<input autocomplete='off' type='hidden' name='id_trabajo' value='{$trabajo_id}' readonly>
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
	
	
	
	
	
	
	
{/if}




{include file="includes/docs_smarty/piedepagina.tpl"}
