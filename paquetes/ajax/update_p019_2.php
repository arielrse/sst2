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
	

	$res = mysqli_query($conexion, "update p019_relevamientoinfraestructura set		
	idsitio='$idsitio',
	nombreestacion='$nombreestacion',
	tipoestacion='$tipoestacion',
	latitud='$latitud',
	longitud='$longitud',
	altura='$altura',
	torres='$torres',
	tipotorre='$tipotorre',
	alturatorre='$alturatorre',
	gabinetes='$gabinetes',
	tipogabinetes='$tipogabinetes'
	where idevento=$idevento and numero=$numero");

	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2" );
	}
	//mysqli_free_result();
	mysqli_close($conexion);
	
?>

