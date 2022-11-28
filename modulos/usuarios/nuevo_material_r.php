<?php

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$unidad = $_POST["unidad"];
$precio = $_POST["precio"];
$idcategoria = $_POST["idcategoria"];
$idtipo = $_POST["idtipo"];
$descripcion = $_POST["descripcion"];

$consulta="INSERT INTO material SET 
codigo='".$codigo."',
nombre='".$nombre."',
unidad='".$unidad."',
precio='".$precio."',
idcategoria='".$idcategoria."',
idtipo='".$idtipo."',
descripcion='".$descripcion."'
";

$resultado=mysqli_query($conexion, $consulta);

if($resultado)
	header("Location: ".$link_modulo."?path=ver_materiales.php");
else
	echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

