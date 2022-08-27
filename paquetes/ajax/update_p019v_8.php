


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
	
	$res =mysqli_query($conexion, "update p019v_relevamientoserviciomovil set	
	tecnologia='$tecnologia',
	fabricante='$fabricante',
	modelo='$modelo',
	tipoacceso='$tipoacceso'
	where idevento=$idevento and numero=$numero");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>

