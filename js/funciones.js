$(document).ready(function(){
	$('#tabla_paginacion').DataTable();
	new nicEditor({buttonList : ['fontSize','ol','ul','removeformat','left','center','right','indent','outdent','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('nicEdit');
});



function grafica_pie(lugar1,datos_nuevos){
	var chart1;	
	chart1 = AmCharts.makeChart(lugar1, {
		type: 'pie', 
		pathToImages:'js/amcharts/images/',       
		dataProvider: datos_nuevos,
		startDuration: 1,
		depth3D : 20,
		angle : 20,
		labelRadius : 30,
		topRadius : 1,
		handDrawn : true,
		handDrawnScatter : 6,
		chartCursor: {
			cursorAlpha: 0,
			zoomable: true,
			categoryBalloonEnabled: false
		},
		chartCursor: {
			zoomable: true,
			categoryBalloonEnabled: true,
			cursorAlpha : 0.5,
			valueLineEnabled : true,
			valueLineBalloonEnabled : true,
			valueLineAlpha : 0.6
		},
		amExport: {
			top: 21,
			right: 21,
			buttonColor: '#EFEFEF',
			buttonRollOverColor:'#DDDDDD'
		},
		title: 'leyenda',
		titleField: 'categoria',
		valueField: 'cantidad',
		balloonText: '[[title]]<br><b>[[value]]</b> ([[percents]]%)',
		lineAlpha: 1,
		fillAlphas: 0.5,
		legend: {
			align: 'center'
		}
	});
}
