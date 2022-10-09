<?php
require("../../funciones/motor.php");

$urlAddImage = $_POST['urlAddImage'];
$idrutina = $_POST['idrutina'];

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos png jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          //header('location:../index.php');
          $url = $link_modulo."?path=prev_estacion.php$params";
          header("Location: ".$url);

       }else{
         //$query = "INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')";
         $query = "INSERT INTO rutina_imagen(imagen,nombre, idrutina) values('$imagen','$nombre', '$idrutina')";
         $resultado = mysqli_query($conexion, $query);
         if($resultado){
              move_uploaded_file($temp,'../../fotos/'.$imagen);
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:' . $urlAddImage);
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>