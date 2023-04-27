<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

/*$res = mysqli_query($conexion,
    "select t.cumplimiento as nombre, count(t.id_st_ticket) as cantidad
            from st_ticketn t
            left join estacionentel e    on t.idestacion = e.idestacionentel
            left join centro c           on e.idcentro = c.idcentro
            left join ticket_atencion ta on t.idatencion = ta.idatencion
            where t.fecha_inicio_rif BETWEEN '$fechainicio' AND '$fechafin' AND c.iddepartamento = $iddepartamento
            and ta.nombreatencion = 'EN SITIO'
            group by t.cumplimiento order by cantidad desc ");*/

$res = mysqli_query($conexion,
    "SELECT if(r.en_plazo='SI', 'EN_PLAZO', if(r.en_plazo='NO', 'NO_PLAZO', '')) as nombre, count(r.id) as cantidad
            FROM rutina_correctivo r
            LEFT JOIN estacionentel e    ON r.idestacione = e.idestacionentel
            LEFT JOIN centro c           ON e.idcentro = c.idcentro
            WHERE r.`fecha_eje` BETWEEN '$fechainicio' AND '$fechafin'
            AND c.`iddepartamento` = $iddepartamento
            AND r.atencion = 'En Sitio'
            group by r.en_plazo order by r.en_plazo desc ");


$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){

    $etiqueta = '';

    if ( $data['nombre'] == 'EN_PLAZO' )  $etiqueta = 'En Plazo';
    if ( $data['nombre'] == 'NO_PLAZO'  ) $etiqueta = 'Fuera de Plazo';
    if ( $data['nombre'] == 'JUSTIFICA' ) $etiqueta = 'Fuera de Plazo Justificado';
    if ( $data['nombre'] == '' ) $etiqueta = '';

    $datos[]     = $data['cantidad'];
    $etiquetas[] = $etiqueta;
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);