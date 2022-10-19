<?php
require("../../funciones/motor.php");

$iddepartamento = $_GET['id'];

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());

$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$res = mysqli_query($conexion,
    "SELECT s.`iddepartamento`, s.tiponodo , count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN sitio s ON e.`idsitio` = s.idsitio
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND s.`iddepartamento` = $iddepartamento
            GROUP BY s.`iddepartamento`, s.tiponodo");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    if ($data['tiponodo'] == 'NP') $etiquetas[] = 'Nodo Principal';
    if ($data['tiponodo'] == 'NS') $etiquetas[] = 'Nodo Secundario';

    $datos[]     = $data['cantidad'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);
