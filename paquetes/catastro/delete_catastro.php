
<?php
require("../../funciones/motor.php");

	$idcatastro = $_POST['idcatastro'];
	$codForm    = $_POST['codForm'];
    $ruta_carpeta = "../../fotos/catastro/";

    $query = "SELECT * FROM catastroimg WHERE idcatastro = " . $idcatastro;
    $result = mysqli_query($conexion, $query);

    while( $data = mysqli_fetch_array($result) ){
        $ruta_imagen = $ruta_carpeta . $data['nombre'];
        unlink($ruta_imagen);
        mysqli_query($conexion, "delete from catastroimg where idcatastro = " . $idcatastro);

    }

    mysqli_query($conexion, "delete from catastro".$codForm." where idcatastro = " . $idcatastro);
    mysqli_query($conexion, "delete from catastro where idcatastro = " . $idcatastro);

    mysqli_close($conexion);

    echo "Delete-OK";

?>