
<?php
require("../../funciones/motor.php");

    date_default_timezone_set('America/La_Paz');

	$idrutina = $_POST['idrutina'];
	$codForm  = $_POST['codForm'];

	//$codForm = sprintf("%'.03d\n", $codForm);

    mysqli_query($conexion, "delete from rutina where idrutina = $idrutina");
    mysqli_query($conexion, "delete from rutina".$codForm." where idrutina = $idrutina");

    mysqli_close($conexion);

    echo "Delete-OK";

?>