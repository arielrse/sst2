<?
require("../../funciones/motor.php");
//isset($_GET['getCountriesByLetters']) && 
if(isset($_GET['letters'])){
	$letters = $_GET['letters'];
	$letters = preg_replace("/[^a-z0-9 ]/si","",$letters);
	$res = mysqli_query($conexion, "SELECT id_item FROM inventario WHERE id_item LIKE '".$letters."%'") or die(mysqli_error());
	while($inf = mysqli_fetch_array($res)){
		echo $inf["id_item"]."###".htmlentities ($inf["id_item"])."|";
	}	
}
?>
