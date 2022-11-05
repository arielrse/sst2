
<?php
require("../../funciones/motor.php");

	$idrutinacorrectivo = $_POST['idrutinacorrectivo'];
    $ruta_carpeta = "../../fotos/correctivo/";

    /** Para eliminar archivos de la rutina **/
    $result  = mysqli_query($conexion, "SELECT id, nombre FROM rutina_correctivo_img r WHERE r.`idrutinacorrectivo` = " . $idrutinacorrectivo);
    while( $row = mysqli_fetch_array($result) ){
        $ruta_imagen = $ruta_carpeta . $row['nombre'];
        unlink($ruta_imagen);
    }
    mysqli_query($conexion, "DELETE FROM rutina_correctivo_img WHERE idrutinacorrectivo = " . $idrutinacorrectivo);

	mysqli_query($conexion, "delete from rutina_correctivo where id = " . $idrutinacorrectivo);

    mysqli_close($conexion);

    echo "Delete-OK";

?>