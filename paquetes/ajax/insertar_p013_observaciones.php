

<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];
	$observacion =$_POST['observacion'];	
	//$observacion =str_replace("'","",$observacion];	
	//$text = str_replace("'", '\'', $text);	
	$orden = $_POST['orden'];						

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "INSERT INTO p013_observaciones VALUES('$idevento','$observacion','$orden')");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 

