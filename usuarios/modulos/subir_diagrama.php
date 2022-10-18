<?php
require("../../funciones/motor.php");

    $idrutina   = $_POST['idrutina'];
    $cform      = $_POST['cform'];
    $imagenAnt  = $_POST['imagenAnt'];

    $ruta_carpeta = "../../fotos/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "IMG_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)){
        $query = "update rutina$cform set imagen = '$nombre_archivo' where idrutina = $idrutina";
        $resultado = mysqli_query($conexion, $query);

        if ($imagenAnt != ''){
            unlink($ruta_carpeta . $imagenAnt);
        }

        echo "Imagen cargada ";
    } else {
        echo "No se puede cargar";
    }

?>