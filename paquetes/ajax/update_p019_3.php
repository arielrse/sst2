
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
	$neorigen = $_POST['neorigen'];
	$nedestino = $_POST['nedestino'];
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$fretxorigen = $_POST['fretxorigen'];
	$fretxdestino = $_POST['fretxdestino'];
	$topologia = $_POST['topologia'];
	$azimut = $_POST['azimut'];
	$diametro = $_POST['diametro'];
	$estado = $_POST['estado'];	
	
	$res =mysqli_query($conexion, "update p019_transportemicroondas set	
	neorigen='$neorigen',
	nedestino='$nedestino',
	fabricante='$fabricante',
	modelo='$modelo',
	fretxorigen='$fretxorigen',
	fretxdestino='$fretxdestino',
	topologia='$topologia',
	azimut='$azimut',
	diametro='$diametro',
	estado='$estado'
	where idevento=$idevento and numero= $numero ");		
	
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>




 
 