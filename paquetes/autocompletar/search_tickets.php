<?
require("../../funciones/motor.php");

if(isset($_GET['letters'])){
	$letters = $_GET['letters'];
	$letters = preg_replace("/[^a-z0-9 ]/si","",$letters);
	$res = mysqli_query($conexion, "select id_st_ticket, ticket from st_ticket where ticket like '%".$letters."%'") or die(mysqli_error());
	while($inf = mysqli_fetch_array($res)){
		echo $inf["id_st_ticket"]."###".htmlentities($inf["ticket"])."|";
	}	
}
?>
