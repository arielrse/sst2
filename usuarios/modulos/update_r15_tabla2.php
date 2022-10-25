<?php
require("../../funciones/motor.php");

$idrutina  = $_POST['idrutina'];
$jsonStrT2 = $_POST['jsonStrT2'];

$resultado = mysqli_query($conexion,
        "update rutina015 set
                table_e2 = '$jsonStrT2'		
                where idrutina = $idrutina");

if($resultado)
    echo 'Se actualizo con exito...';
else
    echo 'No se pudo actualizar...';

?>