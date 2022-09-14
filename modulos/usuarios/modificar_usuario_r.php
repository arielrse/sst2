<?php
require("../../funciones/funciones.php");
$id = $_POST["id"];
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
$activo = $_POST['activo'];

$consulta="UPDATE usuarios SET 
nombre='".$nombre."',
ap_pat='".$ap_pat."',
ap_mat='".$ap_mat."',
cuenta='".$cuenta."',";

if($contrasena!="") $consulta.="contrasena=md5('".$contrasena."'),";

$consulta.="
cargo='".$cargo."',
mail='".$mail."',
nivel='".$nivel."',
iddepartamento='".$iddepartamento."',
cel='".$cel."',
activo='".$activo."',
id_usuario='".$id_user."',
fecha_modificacion=NOW()
WHERE id='".$id."'
";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=ver_usuarios.php");
	}
	else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>

