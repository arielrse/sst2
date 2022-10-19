<?php
require("../../funciones/motor.php");
require("../../funciones/DateUtils.php");

$iddepartamento = $_GET['id'];

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());

$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$res = mysqli_query($conexion,
    "SELECT s.`iddepartamento`, s.area , count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN sitio s ON e.`idsitio` = s.idsitio
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND s.`iddepartamento` = $iddepartamento
            GROUP BY s.`iddepartamento`, s.area");



$etiquetas = array();
$datos = array();
$periodo = array();

$mesLiteral = currentMonthLiteral();

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
