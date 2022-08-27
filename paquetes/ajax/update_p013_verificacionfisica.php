
<?php
require("../../funciones/motor.php");


		/*idevento : idevento,
		idverificacionfisica : rowsverificacion[i].idverificacionfisica,							                                           
		revisado : rowsverificacion[i].revisado,		
		observacionesverificacion : rowsverificacion[i].observaciones*/

	//date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];
	$idverificacionfisica = $_POST['idverificacionfisica'];		
	$revisado = $_POST['revisado'];		
	$observaciones = $_POST['observacionesverificacion'];		
	
	
	
	$res = mysqli_query($conexion, "UPDATE p013_verificacionfisica set
revisado='$revisado',
observaciones='$observaciones'
WHERE idevento=$idevento and idverificacionfisica=$idverificacionfisica");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	mysqli_free_result();
	mysqli_close($conexion);
?>




 
 