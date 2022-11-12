<?php
//require("../../funciones/funciones.php");

$iddepartamento = $_POST["iddepartamento"];
$idcentro = $_POST["idcentro"];
$idsitio = $_POST["idsitio"];
$tecnologia = $_POST["tecnologia"];
$nombreEstacion = $_POST["nombreEstacion"];
$estacionId = $_POST["estacionId"];
$tipotransporte = $_POST["tipotransporte"];
$tiponodo = $_POST['tiponodo'];
$tipo = $_POST['tipo'];
$provincia = $_POST["provincia"];
$municipio = $_POST["municipio"];
$localidad = $_POST["localidad"];
$area = $_POST["area"];

$consulta="INSERT INTO estacionentel SET 
id='".$estacionId."',
nombreEstacion='".$nombreEstacion."',
tecnologia='".$tecnologia."',
area='".$area."',
idsitio='".$idsitio."',
tipotransporte='".$tipotransporte."',
tiponodo='".$tiponodo."',
tipo='".$tipo."',
idcentro='".$idcentro."',
provincia='".$provincia."',
localidad='".$localidad."',
municipio='".$municipio."'
";

$resultado=mysqli_query($conexion, $consulta);

if($resultado)
	header("Location: ".$link_modulo."?path=ver_estaciones.php");
else
	echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

