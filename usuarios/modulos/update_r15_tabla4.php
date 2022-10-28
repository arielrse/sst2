<?php
require("../../funciones/motor.php");

$idrutina  = $_POST['idrutina'];
$jsonStrT4 = $_POST['jsonStrT4'];

$resultado = mysqli_query($conexion,
        "update rutina015 set
                table_e4 = '$jsonStrT4'		
                where idrutina = $idrutina");

if($resultado)
    echo 'Se actualizo con exito...';
else
    echo 'No se pudo actualizar...';

?>