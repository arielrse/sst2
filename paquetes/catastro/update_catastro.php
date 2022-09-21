
<?php
require("../../funciones/motor.php");

date_default_timezone_set('America/La_Paz');

	$idcatastro     = $_POST['idcatastro'];
	$codigoForm   = $_POST['codigoForm'];
	$jsonData     = $_POST['jsonData'];

	$datos = $jsonData;

    $res = mysqli_query($conexion,
    "update catastro$codigoForm set
            data = '$datos'
            where idcatastro = $idcatastro");


    mysqli_free_result();
    mysqli_close($conexion);

?>