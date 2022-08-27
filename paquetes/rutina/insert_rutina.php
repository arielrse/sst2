
<?php
require("../../funciones/motor.php");

	date_default_timezone_set('America/La_Paz');

	$idformulario = $_POST['idformulario'];
	$idevento     = $_POST['idevento'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

    $query = "insert into rutina(idformulario, idevento) values ($idformulario, $idevento)";
    $res = mysqli_query($conexion, $query);
    $resId = mysqli_insert_id($conexion);

    $queryInsert = "insert into rutina$codigoForm(idevento, idrutina, cabecera) values ($idevento, $resId, '".$jsonData."')";
    $result = mysqli_query($conexion, $queryInsert);

	if( mysqli_affected_rows($conexion)>0 ){
		echo "1";
	}else{
		echo ("-1");
	}

	mysqli_close($conexion);

?>