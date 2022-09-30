<?php
require("../../funciones/motor.php");

	$idrutina    = $_POST['idrutina'];
	$estado      = $_POST['estado'];

    $resultado = mysqli_query($conexion,
            "update rutina set
                   estado = '$estado'		
                   where idrutina = $idrutina");

    if($resultado)
        echo "1";
    else
        echo "-1";

?>