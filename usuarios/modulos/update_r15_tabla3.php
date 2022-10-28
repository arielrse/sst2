<?php
require("../../funciones/motor.php");

$idrutina  = $_POST['idrutina'];
$jsonStrT3 = $_POST['jsonStrT3'];

$resultado = mysqli_query($conexion,
        "update rutina015 set
                table_e3 = '$jsonStrT3'		
                where idrutina = $idrutina");

if($resultado)
    echo 'Se actualizo con exito...';
else
    echo 'No se pudo actualizar...';

?>