
<?php
require("../../funciones/motor.php");

	$idcatastro = $_POST['idcatastro'];
	$codForm    = $_POST['codForm'];

    mysqli_query($conexion, "delete from catastro".$codForm." where idcatastro = " . $idcatastro);
    mysqli_query($conexion, "delete from catastro where idcatastro = " . $idcatastro);

    mysqli_close($conexion);

    echo "Delete-OK";

?>