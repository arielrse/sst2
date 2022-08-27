

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
	
	
	$res =mysqli_query($conexion, "update p019v_mantenimientopreventivo set	
	estadoinicial='$estadoinicial',
	revisado='$revisado'
	where idevento=$idevento and idmantenimientopreventivo=$idmantenimientopreventivo	");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 




