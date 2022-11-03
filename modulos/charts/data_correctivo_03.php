<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];


$res = mysqli_query($conexion,
    "select e.area as nombre, count(t.id_st_ticket) as cantidad
            from st_ticketn t
            left join estacionentel e on t.idestacion = e.idestacionentel
            left join centro c on e.idcentro = c.idcentro
            where t.fecha_inicio_rif BETWEEN '$fechainicio' AND '$fechafin' AND c.iddepartamento = $iddepartamento
            group by e.area");



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
