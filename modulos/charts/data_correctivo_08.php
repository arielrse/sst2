<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT
    tecnologia.nombretecnologia as nombre,
    count(st_ticketn.ticket) as cantidad
FROM 
    st_ticketn,
    estacionentel,
    tecnologia,
    centro
WHERE st_ticketn.idestacion   = estacionentel.idestacionentel
  AND estacionentel.idcentro  = centro.idcentro
  AND st_ticketn.idtecnologia = tecnologia.idtecnologia
  AND centro.iddepartamento  = $iddepartamento
  AND fecha_inicio_rif  BETWEEN '$fechainicio' AND '$fechafin'
group by tecnologia.nombretecnologia");


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