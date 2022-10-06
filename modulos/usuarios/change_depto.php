<?php
require("../../funciones/motor.php");

	$codigoDepto = $_POST['codigoDepto'];
	$id_user = $_POST['id_user'];

    $res  = mysqli_query($conexion, "select iddepartamento from departamento where codigo = '" . $codigoDepto . "'");
    $data = mysqli_fetch_array($res);
    $iddepartamento = $data['iddepartamento'];

    $resultado = mysqli_query($conexion,
            "update usuarios set iddepartamento = $iddepartamento		
                   where id = $id_user");

    if($resultado)
        echo "1";
    else
        echo "-1";

?>