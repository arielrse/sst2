<?php

require("../../funciones/funciones.php");

$idcentro = $_POST["idcentro"];
$idsitio = $_POST["idsitio"];
$fecha = $_POST["fecha"];
$titulo = $_POST["titulo"];

$consulta="INSERT INTO rutina_extrawork SET 
fecha='".$fecha."',
titulo='".$titulo."',
idcentro='".$idcentro."',
idsitio='".$idsitio."'";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=extraworks.php");
}
else
    echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notifique de este error al administrador del Sistema: ".mysqli_error($conexion).
         "<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

?>

