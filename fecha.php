<html> 
<head> 
</head> 
<body> 
<?
/*
require("funciones/motor.php");
$datetime=mysqli_fetch_array(mysqli_query($conexion, "select ADDTIME(now(),ajuste) FROM ajuste_hora_server LIMIT 1"));
$fecha=$datetime[0];
*/
	 echo "Fecha del sistema: ".date("Y-m-d H:i:s");
//	 echo "<hr>";
//	 echo "Fecha con el ajuste de hora: ".$fecha;
?>
</body> 
</html>  
