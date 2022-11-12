<?php
//require("../../funciones/funciones.php");

$idestacionentel = $_POST["idestacionentel"];
$idcentro = $_POST["idcentro"];
$idsitio = $_POST["idsitio"];
$tecnologia = $_POST["tecnologia"];
$nombreestacion = $_POST["nombreestacion"];
$estacionId = $_POST["estacionId"];
$tipotransporte = $_POST["tipotransporte"];
$tiponodo = $_POST['tiponodo'];
$tipo = $_POST['tipo'];
$provincia = $_POST["provincia"];
$municipio = $_POST["municipio"];
$localidad = $_POST["localidad"];
$area = $_POST["area"];

$consulta="UPDATE estacionentel SET 
idcentro='".$idcentro."',
idsitio='".$idsitio."',
tecnologia='".$tecnologia."',
nombreestacion='".$nombreestacion."',
id='".$estacionId."',
tipotransporte='".$tipotransporte."',
tiponodo='".$tiponodo."',
tipo='".$tipo."',
provincia='".$provincia."',
municipio='".$municipio."',
localidad='".$localidad."',
area='".$area."' WHERE idestacionentel=".$idestacionentel;

$resultado=mysqli_query($conexion, $consulta);

if($resultado)
	header("Location: ".$link_modulo."?path=ver_estaciones.php");
else
	echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

