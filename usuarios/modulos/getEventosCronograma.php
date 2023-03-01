<?php
require("../../funciones/motor.php");

$idsitio = $_POST['idsitio'];

$resultado=mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, e.`idcentro`, e.`idsitio` 
                                          FROM evento e WHERE e.`idsitio` = $idsitio order by e.inicio desc ");

$result = array();

while($dato=mysqli_fetch_array($resultado)){
    $result [] =  [ "id" => $dato['idevento'], "fecha" => $dato['inicio'] ];
    //$result [] =  [ $dato['idevento'] => $dato['inicio'] ];
    //$result[ $dato['idevento'] ] = $dato['inicio'];
}

echo json_encode($result);

?>
