<?php
require("../../funciones/funciones.php");

$idevento = $_POST["idevento"];
$idsitio  = $_POST["sitio"];
$idcentro = $_POST["idcentro"];
$idgrupo  = $_POST["idgrupo"];

$fechainicio = $_POST["fechainicio"];
$fechafin    = $_POST["fechafin"];
$repro       = $_POST["repro"];
$motivo      = $_POST["motivo"];
$checkReprog = $_POST["checkReprog"];

//if ($checkReprog){}

$consulta="UPDATE evento SET 
idcentro='".$idcentro."',
idsitio='".$idsitio."',
idgrupo='".$idgrupo."',
inicio='".$fechainicio."',
fin='".$fechafin."',
rep=".$checkReprog.",
repro='".$repro."',
motivo='".$motivo."'
where idevento = " . $idevento;

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
    header("Location: ".$link_modulo."?path=cronograma.php");
}
else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

