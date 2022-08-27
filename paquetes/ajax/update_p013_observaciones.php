

<?php
require("../../funciones/motor.php");

	

	$idevento = $_POST['idevento'];
	$observacion = $_POST['observacion'];	
	//$observacion =str_replace("'","",$observacion];	
	$orden = $_POST['orden'];		
	
			
	

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "update p013_observaciones set
	observacion = '$observacion'		
	where idevento=$idevento and orden=$orden");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	mysqli_free_result();
	mysqli_close($conexion);
?>




 

