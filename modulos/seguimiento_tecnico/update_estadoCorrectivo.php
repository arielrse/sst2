<?php
require("../../funciones/motor.php");

	$idrutinacorrectivo    = $_POST['idrutinacorrectivo'];
	$estado      = $_POST['estado'];

    $resultado = mysqli_query($conexion,
            "update rutina_correctivo set
                   estado = '$estado'		
                   where id = $idrutinacorrectivo");

    if($resultado)
        echo "Actualizado!!!";
    else
        echo "Error";

?>