<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT ticket_sistemafalla.nombresistemafalla as sistema, ticket_equipofalla.nombreequipofalla as equipo, count(st_ticketn.ticket) as cantidad
    FROM st_ticketn, estacionentel, tecnologia, centro, ticket_sistemafalla, ticket_equipofalla
    WHERE st_ticketn.idestacion     = estacionentel.idestacionentel
      AND estacionentel.idcentro    = centro.idcentro
      AND st_ticketn.idtecnologia   = tecnologia.idtecnologia
      AND st_ticketn.idsistemafalla = ticket_sistemafalla.idsistemafalla
      AND st_ticketn.idequipofalla  = ticket_equipofalla.idequipofalla
      AND centro.iddepartamento  = $iddepartamento
      AND fecha_inicio_rif BETWEEN '$fechainicio' AND '$fechafin'
    group by ticket_sistemafalla.nombresistemafalla, ticket_equipofalla.nombreequipofalla
    order by ticket_sistemafalla.nombresistemafalla, cantidad desc");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){
    $etiquetas[] = $data['equipo'] . ' - ' . $data['sistema'];
    $datos[]     = $data['cantidad'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);