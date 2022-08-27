
<?php
require("../../funciones/motor.php");

//idevento
//idpruebaservicio
//numeroa
//numerob
//pruebaexitosa
//fechahora
//fecha
//hora
//observaciones

	date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];
	$idpruebaservicio = $_POST['idpruebaservicio'];	
	$numeroa = $_POST['numeroa'];		
	$numerob = $_POST['numerob'];		
	$pruebaexitosa = $_POST['pruebaexitosa'];			
	$fecha=$_POST["fecha"];
	
	//$fecha = DateTime::createFromFormat("d-m-Y", $_POST["fecha"]);	
	//	$fecha= $fecha->format('Y-m-d');

	$hora = $_POST['hora'].':00';			
	$observaciones = $_POST['observaciones'];
	$newDate = date("Y-m-d", strtotime($_POST['fecha']));
	$fechahora = $newDate." ".$hora;	
	
	//echo($fechahora);
	//$newDate = 

	//$Hoy = date("Y-m-d H:i:s");				
	

	//$Hoy = date("Y-m-d H:i:s");
	
	$res = mysqli_query($conexion, "INSERT INTO p013_pruebasservicios VALUES('$idevento','$idpruebaservicio','$numeroa','$numerob','$pruebaexitosa','$fechahora','$newDate','$hora','$observaciones')");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 

