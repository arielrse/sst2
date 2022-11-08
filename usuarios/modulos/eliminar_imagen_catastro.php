<?php
require("../../funciones/motor.php");

$idImg = $_POST['idImg'];
$ruta_carpeta = "../../fotos/catastro/";

$res  = mysqli_query($conexion, "SELECT r.idcatastroimg, r.nombre FROM catastroimg r WHERE r.idcatastroimg = " . $idImg);
$data = mysqli_fetch_array($res);

$ruta_imagen = $ruta_carpeta . $data['nombre'];

mysqli_query($conexion, "delete from catastroimg where idcatastroimg = $idImg");
mysqli_close($conexion);

if ( unlink($ruta_imagen) ) {
    echo "Imagen eliminada correctamente";
} else {
    echo "No se pudo eliminar la imagen";
}

?>