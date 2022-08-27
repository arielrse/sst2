<?
require("../../funciones/motor.php");
$cliente = $_GET['cliente'];
$res = mysqli_query($conexion, "select id from clientes where razon_social='".$cliente."'") or die(mysqli_error());
$filas=mysqli_num_rows($res);
$error="";
if($filas!=0)
{  
$inf = mysqli_fetch_array($res);
$error=$inf["id"];
}
echo $error;
?>
