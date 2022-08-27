


<?php
require("../../funciones/motor.php");



	$idevento = $_POST['idevento'];
	$idverificacionfisica = $_POST['idverificacionfisica'];		
	$revisado = $_POST['revisado'];				
	$observacionesverificacion = $_POST['observacionesverificacion'];				
	$res = mysqli_query($conexion, "INSERT INTO p013_verificacionfisica VALUES('$idevento','$idverificacionfisica','$revisado','$observacionesverificacion')");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2" );
	}
	//mysqli_free_result();
	mysqli_close($conexion);
	
?>




 
 