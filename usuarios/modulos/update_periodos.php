<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$sem_inicio = $_POST['sem_inicio'];
$sem_fin = $_POST['sem_fin'];
$sem_cant = $_POST['sem_cant'];

$query = "update departamento set sem_inicio = '$sem_inicio',
                                   sem_fin    = '$sem_fin',
                                   sem_cant   = ".$sem_cant."
           where iddepartamento = ".$iddepartamento;
$res  = mysqli_query($conexion, $query);

echo 'Actualizado.';

mysqli_close($conexion);

?>
