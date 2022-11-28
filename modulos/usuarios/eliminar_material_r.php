<?php
require("../../funciones/motor.php");

$idmaterial = $_POST["idmaterial"];

$consulta  = "delete from material where idmaterial = " . $idmaterial;
$resultado = mysqli_query($conexion, $consulta);

if($resultado)
    echo 'Eliminación correcta';
else
    echo 'Error al eliminar';

?>

