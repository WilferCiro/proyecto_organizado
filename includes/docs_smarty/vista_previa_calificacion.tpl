<br />
<div class='alert alert-primary' role='alert'>
	Datos guardados con éxito
</div>
{if $tipo_envio_notas=="imprime_rubrica"}
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
						<div class='contenedorDialogoMediano' id='contenido_impresion'>
							{$modalidad=$datos_tgrado.modalidad}
							<b>Título pasantía: </b> {$datos_tgrado.titulo}<br />
							<b>Fecha sustentación: </b> {$datos_tgrado.fecha_sustentacion|date_format:"%A, %B %e, %Y"}<br />
							<b>Nombre evaluador: </b> - <br />					
							<b>Nombre(s) estudiante(s): </b>
							<ul>
								{foreach from=$graduandos item=gr}
									<li>{$gr.nombres} {$gr.apellidos}</li>
								{/foreach}
							</ul>
							<br /><br />
							<h3>Aspectos académicos</h3>
							<table class='table table-responsive table-striped table-hover'>
								<thead>
									<th>Aspecto</th>
									<th width='25%'>Valor cuantitativo</th>
								</thead>
								<tbody>
								{$total=0}
								{$porcentaje1=0}
								{foreach from=$conceptos item=cp}
									{$valor_nota = devuelve_nota_rubrica($cp.concepto_id,$trabajo_id)}
									<tr>
										<td>{$cp.aspecto}</td>
										<td class='num'>{$valor_nota*$cp.peso/100}</td>
									</tr>
									{$total= $total + ($valor_nota*$cp.peso/100)}
									{$porcentaje1= $porcentaje1 + $cp.peso}
								{/foreach}
								</tbody>
								<tfoot>
									<tr class='table-inverse'>
										<th>Total</th>
										<th class='num'>
											{$total}
										</th>
									</tr>
								</tfoot>
							</table><br />
			
							<h3>Sustentación</h3>
							{foreach from=$graduandos item=gr}
								<h4>{$gr.nombres} {$gr.apellidos}</h4>
								<table class='table table-responsive table-striped table-hover'>
									<thead>
										<th>Aspecto</th>
										<th width='25%'>Valor cuantitativo</th>
									</thead>
									<tbody>
									{$total2=0}
									{$porcentaje2=0}
									{foreach from=$conceptos_sustentacion item=cp}
										{$valor_nota = devuelve_nota_sustentacion($cp.sustentacion_id,$trabajo_id,$gr.estudiante_id)}
										<tr>
											<td>{$cp.aspecto}</td>
											<td class='num'>{$valor_nota*$cp.peso/100}</td>
										</tr>
										{$total2 = $total2 + ($valor_nota*$cp.peso/100)}
										{$porcentaje2 = $porcentaje2+$cp.peso}
									{/foreach}
									</tbody>
									<tfoot>
										<tr class='table-inverse'>
											<th>Total</th>
											<th class='num'>
												{$total2}
											</th>
										</tr>
									</tfoot>
								</table><br />
								
								<b>Resultado de la evaluación</b><br />
								<table class='table table-responsive table-striped table-hover'>
									<thead>
										<tr>
											<th>{$modalidad}</th>
											<th width='25%'>Valor cuantitativo</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Aspectos académicos y de forma ({$porcentaje1} %)</td>
											<td class='num'>{$total}</td>
										</tr>
										<tr>
											<td>Sustentacion ({$porcentaje2} %)</td>
											<td class='num'>{$total2}</td>
										</tr>
										<tr class='table-inverse'>
											<th>Total</th>
											<th class='num'>{$total2+$total}</th>
										</tr>
									</tbody>
								</table>
								<hr />
							{/foreach}
							<br /><br />
							<b>Firma del evaluador: ___________________________________________________</b>
						</div>
					</fieldset>

				<div class='modal-footer'>					
					<button type='button' class='btn btn-primary' id='imprime_datos'>
						<span class='glyphicon glyphicon-print' aria-hidden='true'></span>
						Imprimir
					</button>					
					<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript'>
		$('#exampleModal').modal();
		$('#imprime_datos').click(function(){
			var printContents = document.getElementById("contenido_impresion").innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body>";
			window.print();
			location.reload();
		});
	</script>	
{/if}



