<?php
require("../../funciones/motor.php");

//$iddepartamento = $_POST['iddepartamento'];
$iddepartamento = $_GET['id'];

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());

$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$res = mysqli_query($conexion,
    "SELECT c.`iddepartamento`, e.`estado`, count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN centro c 	 ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND c.`iddepartamento` = $iddepartamento
            GROUP BY c.`iddepartamento`, e.`estado`");



$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    if ($data['estado'] == 'PEN') $etiquetas[] = 'Pendientes';
    if ($data['estado'] == 'REP') $etiquetas[] = 'Reprogramados';
    if ($data['estado'] == 'EJE') $etiquetas[] = 'En Cronograma';

    $datos[]     = $data['cantidad'];
}


// Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor
//$etiquetas = ["Enero", "Feb", "Mar", "Abr"];
//$datosVentas = [5000, 1500, 8000, 5102];
// Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);
