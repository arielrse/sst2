<?php
require("../../funciones/motor.php");

    $idevento  = $_POST['idevento'];
    $titulodoc = $_POST['titulodoc'];

    $uid = uniqid();

    $ruta_carpeta = "../../docs/";
    $doc = $_FILES['filedoc']['name'];

    $extension = pathinfo($doc, PATHINFO_EXTENSION);
    $nombre_archivo = "DOC_".$uid."_".$idevento."_".date("dHis") . "." . $extension;
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['filedoc']['tmp_name'], $ruta_guardar_archivo)){
        $query = "INSERT INTO rutina_docs(nombre, titulo, extension, idevento) values ('$nombre_archivo','$titulodoc', '$extension', '$idevento')";
        $resultado = mysqli_query($conexion, $query);
        echo "archivo cargado";
    } else {
        echo "no se puede cargar";
    }

?>