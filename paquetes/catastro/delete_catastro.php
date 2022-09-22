
<?php
require("../../funciones/motor.php");

    date_default_timezone_set('America/La_Paz');

	$idcatastro = $_POST['idcatastro'];
	$codForm    = $_POST['codForm'];

	//$codForm = sprintf("%'.03d\n", $codForm);

    mysqli_query($conexion, "delete from catastro where idcatastro = $idcatastro");
    mysqli_query($conexion, "delete from catastro".$codForm." where idcatastro = $idcatastro");

    mysqli_close($conexion);

    echo "Delete-OK";

?>