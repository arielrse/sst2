<?php
require("../../funciones/motor.php");

$idImg = $_POST['idDoc'];
$nombreDoc = $_POST['nombreDoc'];
$ruta_carpeta = "../../docs/";

/*$res  = mysqli_query($conexion, "SELECT r.id, r.imagen FROM rutina_imagen r WHERE r.id = " . $idImg);
$data = mysqli_fetch_array($res);*/

$ruta_doc = $ruta_carpeta . $nombreDoc;

mysqli_query($conexion, "delete from rutina_docs where id = " . $idImg);
mysqli_close($conexion);

if ( unlink($ruta_doc) ) {
    echo "Documento eliminada correctamente";
} else {
    echo "No se pudo eliminar el Documento";
}

?>