
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
	$responsable = $_POST['responsable'];		
	$fechamantenimiento = $_POST['fechamantenimiento'];			
	$observaciones = $_POST['observaciones'];	

	
	$res =mysqli_query($conexion, "update p019_formulario
		set responsable='$responsable',
		fechamantenimiento='$fechamantenimiento',
		observaciones='$observaciones'
		where idevento=$idevento");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>