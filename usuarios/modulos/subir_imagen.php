<?php
require("../../funciones/motor.php");
require("../../funciones/ImageUtils.php");

    $idrutina = $_POST['idrutina'];
    $titulo = $_POST['titulo'];
    $coddep = $_POST['coddep'];

    /** ----- Ultima posicion de fotos ---- **/
    $ultima_pos = 1;
    $result_last = mysqli_query($conexion, "SELECT max(r.posicion) AS ultimo FROM rutina_imagen r WHERE r.idrutina = " . $idrutina);
    $data_res = mysqli_fetch_array($result_last);
    $ultima_pos = isset($data_res['ultimo']) ? $data_res['ultimo']+1 : 1;
    /** ----------------------------------- **/

    $uid = uniqid();

    $ruta_carpeta = "../../fotos/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "IMG_".$uid."_".$coddep."_".$idrutina."_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)) {
        $query = "INSERT INTO rutina_imagen(posicion, imagen, nombre, idrutina) values($ultima_pos, '$nombre_archivo','$titulo', '$idrutina')";
        $resultado = mysqli_query($conexion, $query);

        adjustPhotoOrientation($ruta_guardar_archivo);

        echo "imagen-ok";

    } else {
        echo "no se puede cargar";
    }


?>