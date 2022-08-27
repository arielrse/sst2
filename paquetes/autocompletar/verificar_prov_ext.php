<?
require("../../funciones/motor.php");
$prov = $_GET['prov'];
$res = mysqli_query($conexion, "SELECT id_oc_exterior_proveedor FROM oc_exterior_proveedor WHERE empresa='".$prov."'") or die(mysqli_error());
$filas=mysqli_num_rows($res);
$error="";
if($filas!=0)
{  
$inf = mysqli_fetch_array($res);
$error=$inf["id_oc_exterior_proveedor"];
}
echo $error;
?>
