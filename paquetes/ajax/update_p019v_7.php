

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
	$iddisptarjetasequipos=$_POST['iddisptarjetasequipos'];
	$cantidad=$_POST['cantidad'];		
	$puertosservicio=$_POST['puertosservicio'];
	$puertoslibres=$_POST['puertoslibres'];			
	
	$res =mysqli_query($conexion, "update p019v_disptarjetasequipos set		                           	
	cantidad='$cantidad',
	puertosservicio='$puertosservicio',
	puertoslibres='$puertoslibres'
	where idevento=$idevento and iddisptarjetasequipos =$iddisptarjetasequipos  
	");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 




