

<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');
	

	$idevento  = $_POST['idevento'];
	$idverificaralarmaexterna = $_POST['idverificaralarmaexterna'];
	$estado  = $_POST['estado'];
	$observaciones = $_POST['observaciones'];
			
	

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "INSERT INTO p013_verificacionalarmasexternas VALUES('$idevento','$idverificaralarmaexterna','$estado','$observaciones')");


	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 

