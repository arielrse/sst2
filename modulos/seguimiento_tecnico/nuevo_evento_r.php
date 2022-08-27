<?php

require("../../funciones/funciones.php");

//$estacion = $_POST["estacion"];
$idsitio = $_POST["sitio"];
$idcentro = $_POST["idcentro"];
$idgrupo = $_POST["idgrupo"];

$fechainicio = $_POST["fechainicio"];
$fechafin = $_POST["fechafin"];
//$fechainicio = convertfecha($_POST["fechainicio"],"/");
//$fechafin = convertfecha($_POST["fechafin"],"/");

/*$resultado=mysqli_query($conexion, "SELECT idestacion "
                     . "FROM estacion "
                     . "WHERE nombre='$estacion' ");*/
/*$filas=mysqli_num_rows($resultado);
if($filas!=0){
    $dato = mysqli_fetch_array($resultado);
    $idestacion = $dato['idestacion'];
}*/

//$id = incrementar_id("evento", "idevento");

$consulta="INSERT INTO evento SET 
idgrupo='".$idgrupo."',        
titulo='MTTO PREVENTIVO',
inicio='".$fechainicio."',
fin='".$fechafin."',
estado='PEN',
idcentro='".$idcentro."',
idsitio='".$idsitio."'";

$resultado=mysqli_query($conexion, $consulta);

if($resultado) {
	header("Location: ".$link_modulo."?path=mantenimientos.php");
}
else
    echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notifique de este error al administrador del Sistema: ".mysqli_error($conexion).
         "<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

?>

