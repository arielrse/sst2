<?php
require("../../funciones/motor.php");

$id_cliente = base64_decode($_GET["id_cliente"]);
mysqli_query($conexion, "DELETE FROM st_personal_veedor WHERE id_cliente='".$id_cliente."';");

header("Location: ../../modulos/seguimiento_tecnico/veedor_ver.php");
?>

