<?php

require("../../funciones/funciones.php");

$idsitio = $_POST["sitio"];
$idcentro = $_POST["idcentro"];
$idgrupo = $_POST["idgrupo"];
$fechainicio = $_POST["fechainicio"];
$fechafin = $_POST["fechafin"];

$consulta="INSERT INTO evento SET 
idgrupo='".$idgrupo."',        
titulo='MTTO PREVENTIVO',
inicio='".$fechainicio."',
fin='".$fechafin."',
rep=0,
estado='PEN',
idcentro='".$idcentro."',
idsitio='".$idsitio."'";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=cronograma.php");
}
else
    echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notifique de este error al administrador del Sistema: ".mysqli_error($conexion).
         "<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

?>

