<?php
require("../../funciones/motor.php");

$idevento = $_REQUEST['idevento'];


$res_form = mysqli_query($conexion, "SELECT idverificacionfisica,nombreverificacionfisica,revisado,observaciones,orden FROM p013_verificacionfisica,p013_tverificacionfisica
WHERE p013_verificacionfisica.idverificacionfisica=p013_tverificacionfisica.idverficacionfisica and idevento=$idevento order by orden");
//$data_f = mysqli_fetch_array($res_form);

$verificacionfisica = array();

	
	while($row = mysqli_fetch_array($res_form))
	{ 
		$idverificacionfisica=$row['idverificacionfisica'];
		$nombreverificacionfisica=$row['nombreverificacionfisica'];
		$revisado=$row['revisado'];
		$observaciones=$row['observaciones'];
		$orden=$row['orden'];

		$verificacionfisica[]=array('idverificacionfisica' => $idverificacionfisica,'nombreverificacionfisica'=>$nombreverificacionfisica,'revisado'=> $revisado,'observaciones'=>$observaciones,'orden'=>$orden);
	
	}
	

//$file = 'clientes.json';
	//file_put_contents($file, $json_string);

	$json_string = json_encode($verificacionfisica);
	echo $json_string;

	
	// mysqli_free_result();
	// mysqli_close($conexion);
	
?>