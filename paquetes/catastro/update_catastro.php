
<?php
require("../../funciones/motor.php");

date_default_timezone_set('America/La_Paz');

	$idcatastro     = $_POST['idcatastro'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

    $jsonObj = json_decode($jsonData);

    $observaciones1   = filter_var($jsonObj->{'observaciones1'},FILTER_SANITIZE_SPECIAL_CHARS);
    $observaciones2   = filter_var($jsonObj->{'observaciones2'},FILTER_SANITIZE_SPECIAL_CHARS);
    $observaciones3   = filter_var($jsonObj->{'observaciones3'},FILTER_SANITIZE_SPECIAL_CHARS);

    $observaciones = filter_var($jsonObj->{'observaciones'},FILTER_SANITIZE_SPECIAL_CHARS);
    $pendientes    = filter_var($jsonObj->{'pendientes'},FILTER_SANITIZE_SPECIAL_CHARS);

    $jsonObj->{'observaciones1'} = $observaciones1;
    $jsonObj->{'observaciones2'} = $observaciones2;
    $jsonObj->{'observaciones3'} = $observaciones3;

    $jsonObj->{'observaciones'} = $observaciones;
    $jsonObj->{'pendientes'}    = $pendientes;

    $datos = json_encode($jsonObj);

	//$datos = $jsonData;

    $res = mysqli_query($conexion,
    "update catastro$codigoForm set
            data = '$datos'
            where idcatastro = $idcatastro");

    mysqli_free_result();
    mysqli_close($conexion);

?>