<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT c.nombre, count(e.idevento) AS cantidad
            FROM evento e
            LEFT JOIN centro c 	 ON e.idcentro = c.idcentro
            WHERE e.inicio BETWEEN '$fechainicio' AND '$fechafin' AND c.iddepartamento = $iddepartamento
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
