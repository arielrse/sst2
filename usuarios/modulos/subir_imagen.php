<?php
require("../../funciones/motor.php");

    $idrutina = $_POST['idrutina'];
    $titulo = $_POST['titulo'];

    $ruta_carpeta = "../../fotos/";
    $imagen = $_FILES['imagen']['name'];

    $nombre_archivo = "IMG_".date("dHis") . "." . pathinfo($imagen, PATHINFO_EXTENSION);
    $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;


    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)){
        $query = "INSERT INTO rutina_imagen(imagen, nombre, idrutina) values('$nombre_archivo','$titulo', '$idrutina')";
        $resultado = mysqli_query($conexion, $query);
        echo "imagen cargada";
    } else {
        echo "no se puede cargar";
    }



    /*
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos png jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          //$url = $link_modulo."?path=prev_estacion.php$params";
          //header("Location: ".$url);

       }else{
         $query = "INSERT INTO rutina_imagen(imagen,nombre, idrutina) values('$imagen','$nombre', '$idrutina')";
         $resultado = mysqli_query($conexion, $query);
         if($resultado){
              move_uploaded_file($temp,'../../fotos/'.$imagen);
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             //header('location:' . $urlAddImage);
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }*/


?>