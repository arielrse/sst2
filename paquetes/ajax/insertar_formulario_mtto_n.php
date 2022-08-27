<?php

require("../../funciones/motor.php");
require("../../funciones/funciones.php");

	$id = incrementar_id("p013_formulario", "id");

	

	$idevento = $_POST['idevento'];

	//(19,$id,'P013n','Formulario Mtto. Preventivo Radio Bases Nuevo','Formulario Mtto. Preventivo Radio Bases Nuevo',$idevento    )

	//$Hoy = date("Y-m-d H:i:s");
	$res = mysqli_query($conexion, "INSERT INTO formulario_mtto_n VALUES(19,$id,'P013n','Formulario Mtto. Preventivo Radio Bases Nuevo','Formulario Mtto. Preventivo Radio Bases Nuevo',$idevento)");
	if(mysqli_affected_rows()>0){
		echo "1";
	}
	else{
		echo ("2");
	}
	//mysqli_free_result();
	mysqli_close($conexion);
?>