<?php
require("../../funciones/motor.php");

$idevento = $_REQUEST['idevento'];


$res_form = mysqli_query($conexion, "SELECT * FROM p013_observaciones WHERE idevento=$idevento order by orden");
//$data_f = mysqli_fetch_array($res_form);

$v = array();

					/*{field:'idevento',title:'idevento',width:100,editor:'text',hidden:true},
					{field:'alarma',title:'Listar Alarmas de RBS por LMT, OMT',width:350,editor:'text'},
					{field:'causa',title:'Causa',width:200,editor:'text'},
					{field:'solucion',title:'Solucion',width:450,editor:'text'},
					{field:'observaciones',title:'Observaciones',width:450,editor:'text'},
					{field:'orden',tit
					*/

	
	while($row = mysqli_fetch_array($res_form))
	{ 
		$idevento=$row['idevento'];
		$observacion=$row['observacion'];		
		$orden=$row['orden'];

		$v[]=array('idevento' => $idevento,'observacion'=>$observacion,'orden'=>$orden);
	
	}
	

//$file = 'clientes.json';
	//file_put_contents($file, $json_string);

	$json_string = json_encode($v);
	echo $json_string;

	// mysqli_free_result();
	// mysqli_close($conexion);
	
	
?>