<?php
require("../../funciones/motor.php");



	$idevento = $_POST['idevento'];		
	$numero=$_POST['numero'];
	$idsitio=$_POST['idsitio'];
	$nombreestacion=$_POST['nombreestacion'];
	$tipoestacion=$_POST['tipoestacion'];
	$latitud=$_POST['latitud'];
	$longitud=$_POST['longitud'];
	$altura=$_POST['altura'];
	$torres=$_POST['torres'];
	$tipotorre=$_POST['tipotorre'];
	$alturatorre=$_POST['alturatorre'];
	$gabinetes=$_POST['gabinetes'];
	$tipogabinetes=$_POST['tipogabinetes'];
	

	$res = mysqli_query($conexion, "insert into p019_relevamientoinfraestructura values (
	$idevento,
	$numero,
	'$idsitio',
	'$nombreestacion',
	'$tipoestacion',
	'$latitud',
	'$longitud',
	'$altura',
	'$torres',
	'$tipotorre',
	'$alturatorre',
	'$gabinetes',
	'$tipogabinetes',
	0)");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2" );
	}
	//mysqli_free_result();
	mysqli_close($conexion);
	
?>

