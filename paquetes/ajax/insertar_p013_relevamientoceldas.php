
<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];
	$idestacionentel = $_POST['idestacionentel'];		
	$orden = $_POST['orden'];		
	$sector = $_POST['sector'];		
	$localcellid = $_POST['localcellid'];		
	$bandamhz = $_POST['bandamhz'];		
	$modelorbs = $_POST['modelorbs'];		
	$tipoantena = $_POST['tipoantena'];		
	$marcaantena = $_POST['marcaantena'];		
	$modeloantena=$_POST['modeloantena'];
	$azimuth = $_POST['azimuth'];		
	$tiltmecanico = $_POST['tiltmecanico'];		
	$tiltelectrico = $_POST['tiltelectrico'];
	$anguloapertura = $_POST['anguloapertura'];
	$alturaantena = $_POST['alturaantena'];
	$tieneret = $_POST['tieneret'];
	$modelorru = $_POST['modelorru'];
	

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "INSERT INTO p013_relevamientosceldas VALUES('$idevento','$idestacionentel','$orden','$sector','$localcellid','$bandamhz','$modelorbs',
		'$tipoantena','$marcaantena','$modeloantena','$azimuth','$tiltmecanico','$tiltelectrico','$anguloapertura','$alturaantena','$tieneret','$modelorru')");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 