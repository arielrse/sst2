<?php
require("../../funciones/motor.php");

$idrutina    = $_POST['idrutina'];
$dataJsonStr = $_POST['dataJsonStr'];
$nombreTabla = $_POST['nombreTabla'];

$resultado = mysqli_query($conexion,
        "update rutina016 set
                " .$nombreTabla. " = '$dataJsonStr'		
                where idrutina = $idrutina");

if($resultado)
    echo 'Se actualizo con exito';
else
    echo 'No se pudo actualizar';

?>