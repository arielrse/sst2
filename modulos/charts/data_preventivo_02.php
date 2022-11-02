<?php
require("../../funciones/motor.php");
require("../../funciones/DateUtils.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT s.`iddepartamento`, s.area , count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN sitio s ON e.`idsitio` = s.idsitio
            WHERE e.`inicio` BETWEEN '$fechainicio' AND '$fechafin' AND s.`iddepartamento` = $iddepartamento
            GROUP BY s.`iddepartamento`, s.area");

$etiquetas = array();
$datos = array();
$periodo = array();

$mesLiteral = monthLiteral(strtotime($fechainicio));

while( $data = mysqli_fetch_array($res) ){

    $etiquetas[] = $data['area'];
    $datos[]     = $data['cantidad'];
}

$periodo[] = $mesLiteral;

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
    "periodo" => $periodo,
];
echo json_encode($respuesta);
