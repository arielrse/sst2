

<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];
	$orden = $_POST['orden'];	
	$alarma = $_POST['alarma'];		
	//$alarma =str_replace("'","",$alarma];	
	$causa = $_POST['causa'];		
	$solucion = $_POST['solucion'];	
	//$solucion =str_replace("'","",$solucion];			
	$observaciones = $_POST['observaciones'];	
	//$observaciones =str_replace("'","",$observaciones];						
			
	

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "INSERT INTO p013_alarmas VALUES('$idevento','$orden','$alarma','$causa','$solucion','$observaciones')");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 

