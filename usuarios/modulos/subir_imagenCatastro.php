<?php
require("../../funciones/motor.php");
require("../../funciones/ImageUtils.php");

    $idcatastro = $_POST['idcatastro'];
    $titulo = $_POST['tituloimagen'];

    $uid = uniqid();

    $ruta_carpeta = "../../fotos/catastro/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "IMG_".$uid."_".$idcatastro."_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)) {
        $query = "INSERT INTO catastroimg(nombre, titulo, idcatastro) values('$nombre_archivo','$titulo', '$idcatastro')";
        $resultado = mysqli_query($conexion, $query);

        adjustPhotoOrientation($ruta_guardar_archivo);

        echo "imagen-ok";

    } else {
        echo "no se puede cargar";
    }


?>