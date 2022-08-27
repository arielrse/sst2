
<?php
require("../../funciones/motor.php");

date_default_timezone_set('America/La_Paz');

	$idrutina     = $_POST['idrutina'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

	$datos = $jsonData;

    $res = mysqli_query($conexion,
    "update rutina$codigoForm set
            cabecera = '$datos'		
            where idrutina = $idrutina");


    mysqli_free_result();
    mysqli_close($conexion);

?>