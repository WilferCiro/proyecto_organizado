$(document).ready(function(){
	$('#tabla_paginacion').DataTable();
	new nicEditor({buttonList : ['fontSize','ol','ul','removeformat','left','center','right','indent','outdent','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('nicEdit');
});

