
<?php
require("../../funciones/motor.php");

date_default_timezone_set('America/La_Paz');

	$idcatastro     = $_POST['idcatastro'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

    $jsonObj = json_decode($jsonData);

    $observaciones   = filter_var($jsonObj->{'observaciones'},FILTER_SANITIZE_SPECIAL_CHARS);

    $jsonObj->{'observaciones'}     = $observaciones;

    $datos = json_encode($jsonObj);

	//$datos = $jsonData;

    $res = mysqli_query($conexion,
    "update catastro$codigoForm set
            data = '$datos'
            where idcatastro = $idcatastro");

    mysqli_free_result();
    mysqli_close($conexion);

?>