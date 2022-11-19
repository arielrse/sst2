<?php
require("../../funciones/motor.php");
require("../../funciones/funciones.php");

$idextrawork = $_POST["idextrawork"];
$informe_ant = $_POST["informe_ant"];

$ruta_carpeta = "../../docs/extrawork/";

if ($informe_ant != '')
    unlink($ruta_carpeta.$informe_ant);

$consulta  = "delete from rutina_extrawork where id = " . $idextrawork;
$resultado = mysqli_query($conexion, $consulta);

if($resultado)
    echo 'Eliminación correcta';
else
    echo 'Error al eliminar';

?>

