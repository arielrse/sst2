<?

require("../../funciones/motor.php");

if(isset($_GET['getCountriesByLetters']) && isset($_GET['letters'])){
	$letters = $_GET['letters'];
	$letters = preg_replace("/[^a-z0-9 ]/si","",$letters);
	$res = mysqli_query($conexion, "SELECT id_oc_exterior_proveedor,empresa FROM oc_exterior_proveedor WHERE empresa LIKE '".$letters."%'") or die(mysqli_error());
	while($inf = mysqli_fetch_array($res)){
		echo $inf["id_oc_exterior_proveedor"]."###".htmlentities ($inf["empresa"])."|";
	}	
}
?>
