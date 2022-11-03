<?php
require("../../funciones/motor.php");
require("../../funciones/ImageUtils.php");

    $idrutinacorrectivo = $_POST['idrutinacorrectivo'];
    $titulo = $_POST['titulodoc'];
    $iddepartamento = $_POST['iddepartamento'];

    $uid = uniqid();

    $ruta_carpeta = "../../fotos/correctivo/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "FILE_".$uid."_".$iddepartamento."_".$idrutinacorrectivo."_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)) {
        $query = "INSERT INTO rutina_correctivo_img(nombre, titulo, idrutinacorrectivo) values('$nombre_archivo','$titulo', '$idrutinacorrectivo')";
        $resultado = mysqli_query($conexion, $query);

        adjustPhotoOrientation($ruta_guardar_archivo);

        echo "imagen-ok";

    } else {
        echo "no se puede cargar";
    }


?>