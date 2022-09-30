
<?php
require("../../funciones/motor.php");

	$idrutina     = $_POST['idrutina'];

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