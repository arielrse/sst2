<?php
require("../../funciones/motor.php");

//if(isset($_POST['idnodo'])){
	$letters = $_POST['idestacionentel'];
	$codes = $_POST['codes'];
	//$letters = preg_replace("/[^a-z0-9 ]/si","",$letters);
	//$res = mysqli_query($conexion, "SELECT nombreestacion,tecnologia FROM estacionentel WHERE idestacionentel= ".$letters."and tecnologia='RED 2G GSM' and idsitio='".$codes."'" );
	$res = mysqli_query($conexion, "SELECT nombreestacion,tecnologia FROM estacionentel WHERE idestacionentel= ".$letters ." and idsitio='".$codes."' and tecnologia='RED 4G HSPA'");
	//." and idsitio='".$codes."'"

	//SELECT nombreestacion,tecnologia FROM estacionentel WHERE idsitio='CB0361'
	
	
	
	while ($ver=mysqli_fetch_array($res)) {
		//$cadena="<script> document.getElementById('estacion').value =" .utf8_encode($ver['nombre']).' </script>;';

		$cadena=" <script> $('#nombreestacionentel4g').val('".utf8_encode($ver['nombreestacion'])."'); $('#tecnologia4g').val('".utf8_encode($ver['tecnologia'])."');</script>";

		//echo $inf["id"]."###".htmlentities ($inf["razon_social"])."|";
	}		

	echo  $cadena;

	mysqli_free_result($res);
	mysqli_close($conexion);
?>