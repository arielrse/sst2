<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT  area,
                   count(ticket) as count,
                   sum(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)) as diff_min,
                   round(avg(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)), 0) as promedio_min,
                   SEC_TO_TIME(round(avg(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)), 0) * 60) as tiempo
            FROM(
                    SELECT
                        st_ticketn.ticket,
                        estacionentel.area,
                        timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
                        timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin
                    FROM st_ticketn, estacionentel, tecnologia, centro
                    WHERE st_ticketn.idnodo=estacionentel.idestacionentel
                      and estacionentel.idcentro=centro.idcentro
                      AND st_ticketn.idtecnologia=tecnologia.idtecnologia
                      AND centro.iddepartamento  = $iddepartamento
                      and fecha_inicio_rif  BETWEEN '$fechainicio' AND '$fechafin'
                ) cn1
            group by area");


$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){
    $prom_min = round($data['promedio_min'], 0);

    $etiquetas[] = $data['area'] . ' - ' . $data['tiempo'];
    $datos[]     = $prom_min;
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);