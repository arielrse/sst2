<?php
require("../../funciones/motor.php");

$idrutina = $_POST['idrutina'];

$query = "select * from rutina_imagen where idrutina='$idrutina' order by id desc ";
$resultado = mysqli_query($conexion, $query);

foreach($resultado as $row) {
    $idImg = $row['id'];
    $ruta_img = "../../fotos/" . $row['imagen'];
    $extension = pathinfo($ruta_img, PATHINFO_EXTENSION);

    $ruta_img_tmp = "../../fotos/tmp/" . $row['imagen'];
    $calidad = 20; // Valor entre 0 y 100. Mayor calidad, mayor peso


    $imgInfo = getimagesize($ruta_img);
    $mime = $imgInfo['mime'];
    switch($mime){
        case 'image/jpeg':
            $image = imagecreatefromjpeg($ruta_img);
            break;
        case 'image/png':
            $image = imagecreatefrompng($ruta_img);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($ruta_img);
            break;
        default:
            $image = imagecreatefromjpeg($ruta_img);
    }

    copy($ruta_img, $ruta_img_tmp);

    if ($image != false)
        imagejpeg($image, $ruta_img, $calidad);

}

echo "Completado!!!";

?>