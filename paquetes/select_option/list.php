<?
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
$search = $_GET['search'];
$put = $_GET['put'];
require("../../funciones/motor.php");
$resultado=mysqli_query($conexion, "SELECT sub_grupo FROM parametrica WHERE grupo='".$search."'");
while($dato=mysqli_fetch_array($resultado))
 {
 $texto=htmlentities ($dato['sub_grupo']);
		echo $texto."\n";
 }
?>
