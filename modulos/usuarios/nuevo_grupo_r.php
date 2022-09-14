<?php
require("../../funciones/funciones.php");
$idcentro = $_POST["idcentro"];
$iduser1 = $_POST["iduser1"];
$iduser2 = $_POST["iduser2"];
$nombreGrupo = $_POST["nombreGrupo"];


$consulta="INSERT INTO grupo SET 
nombre='".$nombreGrupo."',
user1='".$iduser1."',
user2='".$iduser2."',
idcentro='".$idcentro."'";

$resultado = mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=ver_grupos.php");
}
	else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: <br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

