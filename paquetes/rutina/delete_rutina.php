
<?php
require("../../funciones/motor.php");

	$idrutina = $_POST['idrutina'];
	$codForm  = $_POST['codForm'];

    mysqli_query($conexion, "delete from rutina".$codForm." where idrutina = " . $idrutina);
	mysqli_query($conexion, "delete from rutina where idrutina = " . $idrutina);

    mysqli_close($conexion);

    echo "Delete-OK";

?>