<?php
require("../../funciones/funciones.php");
$nombre = $_POST["nombre"];
$ap_pat = $_POST["ap_pat"];
$ap_mat = $_POST["ap_mat"];
$cuenta = $_POST["cuenta"];
$contrasena = $_POST["contrasena"];
$cargo = $_POST["cargo"];
$mail = $_POST["mail"];
$nivel = $_POST["nivel"];
$iddepartamento = $_POST["iddepartamento"];
$cel = $_POST['cel'];

$consulta="INSERT INTO usuarios SET 
nombre='".$nombre."',
ap_pat='".$ap_pat."',
ap_mat='".$ap_mat."',
cuenta='".$cuenta."',
contrasena=md5('".$contrasena."'),
cargo='".$cargo."',
mail='".$mail."',
nivel='".$nivel."',
iddepartamento='".$iddepartamento."',
cel='".$cel."',
id_usuario='".$id_user."',
nro_ing=0,
fecha_modificacion=NOW()
";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=ver_usuarios.php");
	}
	else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error($conexion)."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

