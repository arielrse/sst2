
<?php
require("../../funciones/motor.php");

date_default_timezone_set('America/La_Paz');

	$idrutina     = $_POST['idrutina'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

    $jsonObj = json_decode($jsonData);

    $pendientes      = filter_var($jsonObj->{'pendientes'},FILTER_SANITIZE_SPECIAL_CHARS);
    $recomendaciones = filter_var($jsonObj->{'recomendaciones'},FILTER_SANITIZE_SPECIAL_CHARS);
    $observaciones   = filter_var($jsonObj->{'observaciones'},FILTER_SANITIZE_SPECIAL_CHARS);

    $jsonObj->{'pendientes'}        = $pendientes;
    $jsonObj->{'recomendaciones'}   = $recomendaciones;
    $jsonObj->{'observaciones'}     = $observaciones;

    $datos = json_encode($jsonObj);

    $res = mysqli_query($conexion,
    "update rutina$codigoForm set
            cabecera = '$datos'		
            where idrutina = $idrutina");

    /*$res = mysqli_query($conexion,
    "update rutina$codigoForm set
            cabecera = '$datos', observacion = '$obs_data'		
            where idrutina = $idrutina");*/




    mysqli_free_result();
    mysqli_close($conexion);

?>