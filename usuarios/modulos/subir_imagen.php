<?php
require("../../funciones/motor.php");
require("../../funciones/ImageUtils.php");

    $idrutina = $_POST['idrutina'];
    $titulo = $_POST['titulo'];

    $ruta_carpeta = "../../fotos/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "IMG_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)) {
        $query = "INSERT INTO rutina_imagen(imagen, nombre, idrutina) values('$nombre_archivo','$titulo', '$idrutina')";
        $resultado = mysqli_query($conexion, $query);

        adjustPhotoOrientation($ruta_guardar_archivo);

        echo "imagen-ok";

    } else {
        echo "no se puede cargar";
    }


?>