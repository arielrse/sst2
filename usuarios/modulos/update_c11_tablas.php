<?php
require("../../funciones/motor.php");

$idcatastro  = $_POST['idcatastro'];
$dataJsonStr = $_POST['dataJsonStr'];
$nombreTabla = $_POST['nombreTabla'];

$resultado = mysqli_query($conexion,
        "update catastro011 set
                " .$nombreTabla. " = '$dataJsonStr'		
                where idcatastro = $idcatastro");

if($resultado)
    echo 'Se actualizo con exito';
else
    echo 'No se pudo actualizar';

?>