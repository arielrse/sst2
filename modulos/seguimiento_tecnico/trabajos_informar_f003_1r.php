<?php
//
$id_st_cronograma_informes = $_POST["id_st_cronograma_informes"];
$id_item = $_POST["id_item"];
$pro_key="f003";

$ubicacion = $_POST["ubicacion"];

mysqli_query($conexion, "UPDATE st_trabajos SET ubicacion='".$ubicacion."' WHERE id_item='".$id_item."'");

$detalles = $_POST["detalles"];
$time1 = $_POST["time1"];
$time2 = $_POST["time2"];
$obs = $_POST["obs"];

$conta = $_POST["conta"];

$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$funcionario=explode ("\n", $p3);
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];
$p6 = $_POST["p6"]; if($p6=="OTROS") {$p6.=": ".$_POST["p6_otros"];}
$p7 = $_POST["p7"];

	$consulta="UPDATE st_cronograma_informes_".$pro_key." SET 
	detalles = '".$detalles."',
	hora_llegada = '".$time1."',
	hora_salida = '".$time2."',
	funcionario = '".$funcionario[0]."',
	obs = '".$obs."',
	conta = '".$conta."',
	p1 = '".$p1."',
 	p2 = '".$p2."',
	p3 = '".$p3."',
	p4 = '".$p4."',
	p5 = '".$p5."',
	p6 = '".$p6."',
	p7 = '".$p7."',
	fecha_registro=NOW(),
	pasos = '1' 
	WHERE id_st_cronograma_informes_".$pro_key."='".$id_st_cronograma_informes."'";
	$resultado=mysqli_query($conexion, $consulta);
	if($resultado) {
	header("location: ".$link_modulo."?path=trabajos_informar_".$pro_key."_2.php&id_st_cronograma_informes=".$id_st_cronograma_informes);	
	}
	else echo"ocurrio un error <hr>$consulta";
?>