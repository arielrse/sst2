


<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');
	/*
	idevento:idevento,
	responsable:responsable,
	fechamantenimiento:fechamantenimiento,				
	observaciones:observaciones
	*/

	$idevento = $_POST['idevento'];	
	$numero = $_POST['numero'];	
	$tecnologia = $_POST['tecnologia'];	
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$tipoacceso = $_POST['tipoacceso'];		
	
	$res =mysqli_query($conexion, "insert into p019_relevamientoserviciomovil values (
	$idevento,
	$numero,
	'$tecnologia',
	'$fabricante',
	'$modelo',
	'$tipoacceso',
	0)");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>

