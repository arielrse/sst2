<?php
require("../../funciones/motor.php");

$idImg = $_POST['idImg'];
$ruta_carpeta = "../../fotos/";

$res  = mysqli_query($conexion, "SELECT r.id, r.imagen FROM rutina_imagen r WHERE r.id = " . $idImg);
$data = mysqli_fetch_array($res);

$ruta_imagen = $ruta_carpeta . $data['imagen'];

mysqli_query($conexion, "delete from rutina_imagen where id = $idImg");
mysqli_close($conexion);

if ( unlink($ruta_imagen) ) {
    echo "Imagen eliminada correctamente";
} else {
    echo "No se pudo eliminar la imagen";
}

?>