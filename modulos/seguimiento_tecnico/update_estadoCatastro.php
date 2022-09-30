<?php
require("../../funciones/motor.php");

	$idcatastro  = $_POST['idcatastro'];
	$estado      = $_POST['estado'];

    $resultado = mysqli_query($conexion,
            "update catastro set
                   estado = '$estado'		
                   where idcatastro = $idcatastro");

    if($resultado)
        echo "1";
    else
        echo "-1";

?>