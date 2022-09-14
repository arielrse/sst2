<?php
require("../../funciones/funciones.php");

$idgrupo = $_POST["idgrupo"];
$idcentro = $_POST["idcentro"];
$iduser1 = $_POST["iduser1"];
$iduser2 = $_POST["iduser2"];
$nombreGrupo = $_POST["nombreGrupo"];

$consulta="UPDATE grupo SET 
 idcentro='".$idcentro."',
 user1='".$iduser1."',
 user2='".$iduser2."',
 nombre='".$nombreGrupo."' ".
"WHERE idgrupo='".$idgrupo."'";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=ver_grupos.php");
	}
	else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

