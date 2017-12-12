<?php
	$consolida=htmlspecialchars($_GET['consolidar']);
	$fichero="../$consolida.pdf";
	/*$len = filesize($fichero);
	header("Cache-Control: no-store, no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-type: application/pdf");
	header("Content-Length: $len");/*
	header("Content-Disposition: inline; filename=informe_academico.pdf");
	readfile($fichero);*/
	echo "<script type='text/javascript'>
		self.location='$fichero';
	</script>";
	//unlink($fichero);
?>


