<?php
require("../../funciones/motor.php");

$output = '';
session_start();

if( !isset($_SESSION['estaciones'])){
    $_SESSION['estaciones'] = array();
}


if (isset($_GET["estacionId"]) && isset($_GET["id_f001"])){

    $estacionId = $_GET["estacionId"];
    $id_f001 = $_GET["id_f001"];

    if ($estacionId > 0){
        $_SESSION['estaciones'][] = $estacionId;
        $res = mysqli_query($conexion, "insert into estacionafectada (idestacion, id_f001) values (".$estacionId.",".$id_f001.")");
    }else{
        $_SESSION['estaciones'] = array();
        $res = mysqli_query($conexion, "delete from estacionafectada where id_f001 = ".$id_f001);
    }

}

for($i=0;$i<count($_SESSION['estaciones']);$i++){
    $id = $_SESSION['estaciones'][$i];
    $result = mysqli_query($conexion, "select codigo, nombre, provicia FROM estacion where idestacion = " . $id);
    $row    = mysqli_fetch_array($result);
    $output .= '<p>'.$row['codigo'].' - '.$row['nombre'].' - '.$row['provicia'] . '</p>';
}


echo $output;

?>