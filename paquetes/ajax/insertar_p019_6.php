

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
	$idmantenimientopreventivo = $_POST['idmantenimientopreventivo'];
	$estadoinicial = $_POST['estadoinicial'];
	$revisado = $_POST['revisado'];
	
	
	$res =mysqli_query($conexion, "insert into p019_mantenimientopreventivo values (
	$idevento,	
	$idmantenimientopreventivo,
	'$estadoinicial',
	'$revisado')");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 




