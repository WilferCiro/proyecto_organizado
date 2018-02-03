{include file="includes/docs_smarty/cabecera.tpl"}


<script src='js/amcharts/amcharts.js' type='text/javascript'></script>
<script src='js/amcharts/serial.js' type='text/javascript'></script>
<script src='js/amcharts/pie.js' type='text/javascript'></script>
<script src='js/amcharts/exporting/amexport.js' type='text/javascript'></script>
<script src='js/amcharts/exporting/rgbcolor.js' type='text/javascript'></script>
<script src='js/amcharts/exporting/canvg.js' type='text/javascript'></script>
<script src='js/amcharts/exporting/filesaver.js' type='text/javascript'></script>

<h2>Graficos estadísticos</h2>
<hr />



<script type='text/javascript'>
	grafica_pie('chartdiv',[{$datos_categorias}]);
	grafica_pie('chartdiv2',[{$datos_cantidad}]);
	grafica_pie('chartdiv3',[{$datos_modalidad}]);
</script>

<div id='chartdiv' class='col-sm-6' style='height:350px;background:white;'></div>
<div id='chartdiv2' class='col-sm-6' style='height:350px;background:white;'></div>
<div id='chartdiv3' class='col-sm-6' style='height:350px;background:white;'></div>
{include file="includes/docs_smarty/piedepagina.tpl"}
