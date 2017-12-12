<center style='border:solid 2px gray;padding:10px 20px;border-radius:10px;box-shadow:0 0 10px gray;margin-top:200px;'>
	<i>Por favor espere mientras se genera el informe<br /></i>
	<img src='imagenes/gifs/cargando.gif'>
</center>

<?php

$nombre_consolidado_ya="archivosPDF/Consolidado".date("U");
require('PDF3/html2fpdf2.php');
include "includes/classes/conexion.inc";
$conexion = new base_datos;
error_reporting(0);
$meses=array("Jan"=>"Enero","Feb"=>"Febrero","Mar"=>"Marzo","Apr"=>"Abril","May"=>"Mayo","Jun"=>"Junio","Jul"=>"Julio","Aug"=>"Agosto","Sep"=>"Septiembre","Oct"=>"Octubre","Nov"=>"Noviembre","Dec"=>"Diciembre");
$meses_n=array("01"=>"Enero","02"=>"Febrero","03"=>"Marzo","04"=>"Abril","05"=>"Mayo","06"=>"Junio","07"=>"Julio","08"=>"Agosto","09"=>"Septiembre","10"=>"Octubre","11"=>"Noviembre","12"=>"Diciembre");
$dias=array("Mon"=>"Lunes","Tue"=>"Martes","Wed"=>"Mi&eacute;rcoles","Thu"=>"Jueves","Fri"=>"Viernes","Sat"=>"S&aacute;bado","Sun"=>"Domingo");
$MiPDF=new HTML2FPDF($orientation='P',$unit='mm',$format='Legal');
$html="";
$MiPDF->SetFont('sans','',10);
$MiPDF->SetMargins(12,12,12,12);
$MiPDF->setAuthor('Uniquind&iacute;o');
$MiPDF->setCreator('clase FPDF programado');
$MiPDF->SetTitle('Informes');
$MiPDF->SetKeywords('Comité de trabajo de grado ');
$MiPDF->SetDisplayMode('real');


if(isset($_POST["ReporteReunion"])){
	$dia=$_POST["StartDateDay"];
	$anio=$_POST["StartDateYear"];
	$mes=$_POST["StartDateMonth"];
	$acta_nro=$_POST["acta_nro"];
	$html.="<center>
		<table border='1' border=0 width='50%'>
			<tr>
				<td width='15%' rowspan='4'>
					<img width='100px' height='100px' src='imagenes/escudo/escudo.jpeg'>
				</td>
				<td width='55%' rowspan='4'>
					<center>
						<em>
							<b>UNIVERSIDAD DEL QUIND&Iacute;O</b><br />
							ARMENIA - QUIND&Iacute;O,<br />
							Facultad de ingenier&iacute;a <br />
							Ingenier&iacute;a electr&oacute;nica<br />
							Acta No. $acta_nro de $anio
						</em>
					</center>
				</td>";

			$html.="</tr>
		</table>
	</center><br /><br /><br />
	
	En reuni&oacute;n celebrada el d&iacute;a $dia de ".$meses_n[$mes]." de $anio a las 8:00 am, el Comit&eacute; de Trabajos de Grado relaciona los siguientes acontecimientos:<br /> <br />
	Se relacionan los siguientes documentos de acuerdo con los anteproyectos, conceptos para los trabajos de grado.
	
	<center><h2>ANTEPROYECTOS</h2></center>
	
	
	<b>Pendientes del acta anterior</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Recibidos</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Rad</th>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>EA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<b>Devoluciones	</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Rad</th>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Observaci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<b>Asignados</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Evaluadores</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<b>Conceptos</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Concepto</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Anteproyecto aprobado</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<center><h2>INFORMES FINALES</h2></center>
	
	
	<b>Pendientes de asignaci&oacute;n de acta anterior</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Recibidos</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Rad</th>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>EA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<b>Devoluciones	</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Rad</th>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Observaci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Conceptos de informes finales</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Concepto</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Asignaci&oacute;n de informes finales</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>conceptos</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<b>Asignaci&oacute;n de evaluadores</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Evaluadores</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	
	<b>Programaci&oacute;n de sustentaciones</b>	
	<table border='1' width='100%'>
		<thead>
			<tr>
				<th>Hora</th>
				<th>Modalidad</th>
				<th>T&iacute;tulo</th>
				<th>Integrantes</th>
				<th>Director</th>
				<th>Evaluadores</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
	<center><h2>Correspondencia f&iacute;sica</h2></center>
	
	
	<center><h2>Correspondencia Electr&oacute;nica</h2></center>
	
	
	
	____________________________<br />
	Ing. Julio Ernesto Cardenas L.<br />
	Profesor auxiliar<br /> <br />
	____________________________<br />
	Ing. Wilmer Diego Jim&eacute;nez T.<br />
	Profesor auxiliar<br /> <br />
	____________________________<br />
	Ing. Jaiber Evelio Cardona.<br />
	Profesor auxiliar<br /> <br />";
	
	
	
	
	
}

if(ini_get('magic_quotes_gpc')=='1'){
	$html=stripslashes($html);
}
$MiPDF->AddPage();
$MiPDF->WriteHTML($html);
$MiPDF->Output("$nombre_consolidado_ya.pdf");


echo '<meta HTTP-EQUIV="REFRESH" content="0; url=php/abrir_pdf.php?consolidar='.$nombre_consolidado_ya.'" target="blank">';
exit;

?>
