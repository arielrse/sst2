<?php
require("../../funciones/motor.php");

$idImg    = $_POST['idImg'];
$title    = $_POST['title'];
$posicion = $_POST['posicion'];


$res  = mysqli_query($conexion, "update rutina_correctivo_img r set r.titulo = '".$title."' , r.posicion = ".$posicion." WHERE r.id = " . $idImg);

if( mysqli_affected_rows($conexion) > 0 ){
    echo "Guardado correctamente...";
}else{
    echo "Guardado sin cambios " . mysqli_error($conexion);
}

?>