<?php
require("../../funciones/motor.php");

$iddepartamento = $_GET['id'];

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());

$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$res = mysqli_query($conexion,
    "SELECT c.nombre, count(e.idevento) AS cantidad
            FROM evento e
            LEFT JOIN centro c 	 ON e.idcentro = c.idcentro
            WHERE e.inicio BETWEEN '$start_date' AND '$end_date' AND c.iddepartamento = $iddepartamento
            GROUP BY c.nombre");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    $datos[]     = $data['cantidad'];
    $etiquetas[] = $data['nombre'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);
