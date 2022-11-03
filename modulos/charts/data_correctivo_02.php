<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "select ta.idatencion, ta.nombreatencion as nombre, count(t.id_st_ticket) as cantidad
            from st_ticketn t
            left join estacionentel e on t.idestacion = e.idestacionentel
            left join centro c on e.idcentro = c.idcentro
            join ticket_atencion ta on t.idatencion = ta.idatencion
            where t.fecha_inicio_rif BETWEEN '$fechainicio' AND '$fechafin' AND c.iddepartamento = $iddepartamento
            group by ta.idatencion, ta.nombreatencion");

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
