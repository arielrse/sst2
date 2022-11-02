<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT c.nombre, g.`nombre` as nombreGrupo, g.`codigo`, count(e.`idevento`) AS cantidad
            FROM evento e
            LEFT JOIN grupo g  ON e.`idgrupo` = g.`idgrupo`
            LEFT JOIN centro c ON e.idcentro   = c.idcentro
            WHERE e.inicio BETWEEN '$fechainicio' AND '$fechafin' AND c.iddepartamento = $iddepartamento
            GROUP BY c.nombre, g.`nombre`, g.`codigo`");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    $datos[]     = $data['cantidad'];
    $etiquetas[] = $data['nombre'] .' - G'.$data['codigo'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);