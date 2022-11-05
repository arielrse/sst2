<?php
require("../../funciones/motor.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "select c.nombre as centro, r.idgrupo, g.nombre as grupo, g.codigo, count(r.id) as cantidad
from rutina_correctivo r
left join centro c on r.idcentro = c.idcentro
left join grupo g  on r.idgrupo = g.idgrupo
where r.fecha_eje BETWEEN '$fechainicio' AND '$fechafin'
AND c.iddepartamento  = $iddepartamento
group by c.nombre, r.idgrupo, g.nombre, g.codigo
order by cantidad desc");

$etiquetas = array();
$datos = array();

while( $data = mysqli_fetch_array($res) ){
    $etiquetas[] = $data['centro'] . ' - ' . 'G'.$data['codigo'];
    $datos[]     = $data['cantidad'];
}

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datos,
];
echo json_encode($respuesta);