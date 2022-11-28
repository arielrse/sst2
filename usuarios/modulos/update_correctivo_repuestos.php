<?php
require("../../funciones/motor.php");

$idcorrectivo = $_POST['idcorrectivo'];
$dataJsonStr  = $_POST['dataJsonStr'];

$query = "update rutina_correctivo set repuestos = '$dataJsonStr' where id = ".$idcorrectivo;

$res = mysqli_query($conexion, $query);

if( mysqli_affected_rows($conexion) > 0 ){
    echo "Guardado Repuestos correctamente...";
}else{
    echo "Sin cambios repuestos" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
