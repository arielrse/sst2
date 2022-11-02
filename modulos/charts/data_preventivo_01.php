<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT c.`iddepartamento`, e.`estado`, count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN centro c 	 ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$fechainicio' AND '$fechafin' AND c.`iddepartamento` = $iddepartamento
            GROUP BY c.`iddepartamento`, e.`estado`");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    if ($data['estado'] == 'PEN') $etiquetas[] = 'Pendientes';
    if ($data['estado'] == 'REP') $etiquetas[] = 'Reprogramados';
    if ($data['estado'] == 'EJE') $etiquetas[] = 'En Cronograma';

    $datos[]     = $data['cantidad'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);
