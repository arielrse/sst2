<?php
//require("../../funciones/funciones.php");

$idsitio = $_POST["idsitio"];
$iddepartamento = $_POST["iddepartamento"];
$idcentro = $_POST["idcentro"];
$nombre = $_POST["nombre"];
$codsitio = $_POST["codsitio"];
$provincia = $_POST["provincia"];
$municipio = $_POST["municipio"];
$localidad = $_POST["localidad"];
$area = $_POST["area"];
$transporte = $_POST["transporte"];
$tiponodo = $_POST['tiponodo'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

$consulta="UPDATE sitio SET 
iddepartamento='".$iddepartamento."',
idcentro='".$idcentro."',
nombre='".$nombre."',
codsitio='".$codsitio."',
provincia='".$provincia."',
municipio='".$municipio."',
localidad='".$localidad."',
area='".$area."',
transporte='".$transporte."',
tiponodo='".$tiponodo."',
latitud='".$latitud."',
longitud='".$longitud."' WHERE idsitio=".$idsitio;

$resultado=mysqli_query($conexion, $consulta);

if($resultado)
	header("Location: ".$link_modulo."?path=ver_sitios.php");
else
	echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

