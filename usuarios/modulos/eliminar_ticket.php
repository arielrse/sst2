<?php
require("../../funciones/motor.php");

$id_st_ticket = $_POST['id_st_ticket'];

mysqli_query($conexion, "delete from st_ticketn where id_st_ticket = $id_st_ticket");
mysqli_close($conexion);
echo 'Elminación correcta';

?>