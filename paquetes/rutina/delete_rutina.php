
<?php
require("../../funciones/motor.php");

	$idrutina = $_POST['idrutina'];
	$codForm  = $_POST['codForm'];
    $ruta_carpeta = "../../fotos/";

    /** Para eliminar archivos de la rutina **/
    $result  = mysqli_query($conexion, "SELECT id, imagen, nombre FROM rutina_imagen r WHERE r.`idrutina` = " . $idrutina);
    while( $row = mysqli_fetch_array($result) ){
        $ruta_imagen = $ruta_carpeta . $row['imagen'];
        unlink($ruta_imagen);
    }
    mysqli_query($conexion, "DELETE FROM rutina_imagen WHERE idrutina = " . $idrutina);

    mysqli_query($conexion, "delete from rutina".$codForm." where idrutina = " . $idrutina);
	mysqli_query($conexion, "delete from rutina where idrutina = " . $idrutina);

    mysqli_close($conexion);

    echo "Delete-OK";

?>