<?php
require("../../funciones/motor.php");

$idrutina = $_POST['idrutina'];
$jsonStr  = $_POST['jsonStr'];

$resultado = mysqli_query($conexion,
        "update rutina015 set
                table_e1 = '$jsonStr'		
                where idrutina = $idrutina");

if($resultado)
    echo 'Se actualizo con exito';
else
    echo 'No se pudo actualizar';

?>