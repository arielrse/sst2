

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
	$numero = $_POST['numero'];
	$fabricante = $_POST['fabricante'];
	$existe = $_POST['existe'];
	$estado = $_POST['estado'];
	$modeloequipo = $_POST['modeloequipo'];
	$diametro = $_POST['diametro'];
	$potencia = $_POST['potencia'];
	$nivelrx = $_POST['nivelrx'];
	$observaciones = $_POST['observaciones'];			
	
	$res =mysqli_query($conexion, "insert into p019_transportesatelital values (
	$idevento,
	$numero,
	'$fabricante',
	'$existe',
	'$estado',
	'$modeloequipo',
	'$diametro',
	'$potencia',
	'$nivelrx',
	'$observaciones',
	0)");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 




