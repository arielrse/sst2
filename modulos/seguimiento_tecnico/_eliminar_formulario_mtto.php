<?php

$idform = base64_decode($_GET['idform']);
$codigo = strtolower($_GET['codigo']);
$params = base64_decode($_GET['params']);
$idevento= ($_GET['idevento']);

//echo ($idevento);
//echo ($codigo);
//echo ($params);

$resultado = mysqli_query($conexion, "SELECT * FROM formulario_p013n WHERE idevento = '$idevento' ");
$totalFilas    =    mysqli_num_rows($resultado);

if ($totalFilas!=0){
	
	mysqli_query($conexion, "DELETE FROM formulario_p013n WHERE idevento = " . $idevento);
	mysqli_query($conexion, "DELETE FROM formulario_mtto_n WHERE codigo='P013n' and idevento = " . $idevento);
}else{
	mysqli_query($conexion, "DELETE FROM formulario_".$codigo." WHERE id = " . $idform);

}


$url_volver = $link_modulo."?path=prev_estacion.php$params";

header("Location: ".$url_volver);

?>

