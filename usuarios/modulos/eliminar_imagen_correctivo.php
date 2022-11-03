<?php
require("../../funciones/motor.php");

$idImg = $_POST['idImg'];
$ruta_carpeta = "../../fotos/correctivo/";

$res  = mysqli_query($conexion, "SELECT r.id, r.nombre FROM rutina_correctivo_img r WHERE r.id = " . $idImg);
$data = mysqli_fetch_array($res);

$ruta_imagen = $ruta_carpeta . $data['nombre'];

mysqli_query($conexion, "delete from rutina_correctivo_img where id = $idImg");
mysqli_close($conexion);

if ( unlink($ruta_imagen) ) {
    echo "Imagen eliminada correctamente";
} else {
    echo "No se pudo eliminar la imagen";
}

?>