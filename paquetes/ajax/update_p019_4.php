
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
	$mediotransporte = $_POST['mediotransporte'];
	$existe = $_POST['existe'];
	$estadoequipo = $_POST['estadoequipo'];
	$cantidadpuertosrbs = $_POST['cantidadpuertosrbs'];
	$hilotx = $_POST['hilotx'];
	$hilorx = $_POST['hilorx'];
	$observaciones = $_POST['observaciones'];
	
	
	$res =mysqli_query($conexion, "update p019_transportefibra set	
	mediotransporte='$mediotransporte',
	existe='$existe',
	estadoequipo='$estadoequipo',
	cantidadpuertosrbs='$cantidadpuertosrbs',
	hilotx='$hilotx',
	hilorx='$hilorx',
	observaciones='$observaciones'
	where idevento=$idevento and numero=$numero
	");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 

