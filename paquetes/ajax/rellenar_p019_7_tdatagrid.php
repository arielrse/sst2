

					<?php
require("../../funciones/motor.php");


$res_form = mysqli_query($conexion, "SELECT * FROM p019_tdisptarjetasequipos order by orden ");
//$data_f = mysqli_fetch_array($res_form);

	// `iddisptarjetasequipos` INT(11) NULL DEFAULT NULL,
	// `nombredistarjetaequipos` VARCHAR(50) NULL DEFAULT NULL,
	// `cantidad` VARCHAR(10) NULL DEFAULT NULL,
	// `puertosservicio` VARCHAR(10) NULL DEFAULT NULL,
	// `puertoslibres` VARCHAR(10) NULL DEFAULT NULL,
	// `orden` INT(11) NULL DEFAULT NULL

$v = array();
				
	
	while($row = mysqli_fetch_array($res_form))
	{ 
		$orden=$row['orden'];
		$nombredistarjetasequipos=$row['nombredistarjetasequipos'];		 
		$cantidad=$row['cantidad'];
		$puertosservicio=$row['puertosservicio'];
		$puertoslibres=$row['puertoslibres'];		
		$iddisptarjetasequipos=$row['iddisptarjetasequipos'];

		$v[]=array('orden' => $orden,
			'nombredistarjetasequipos'=>$nombredistarjetasequipos,			
			'cantidad'=>$cantidad,
			'puertosservicio'=>$puertosservicio,
			'puertoslibres'=>$puertoslibres,			
			'iddisptarjetasequipos'=>$iddisptarjetasequipos);
	
	}
	

//$file = 'clientes.json';
	//file_put_contents($file, $json_string);

	$json_string = json_encode($v);
	echo $json_string;

// mysqli_free_result();
// 	mysqli_close($conexion);
	
	
	
?>