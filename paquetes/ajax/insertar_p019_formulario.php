
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

	$Hoy = date("Y-m-d H:i:s");
	$res =mysqli_query($conexion, "INSERT INTO p019_formulario VALUES('$idevento','$responsable','$fechamantenimiento','$observaciones','$Hoy')");
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 