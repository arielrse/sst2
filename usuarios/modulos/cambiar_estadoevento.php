<?php
require("../../funciones/motor.php");

$idevento = $_POST["idevento"];
$estado  = $_POST["estado"];

$consulta="UPDATE evento SET 
estado='".$estado."'
where idevento = " . $idevento;

$resultado=mysqli_query($conexion, $consulta);

if($resultado)
    echo 'Se actualizo con exito';
else
    echo 'No se pudo actualizar';
?>


