<?php
require("../../funciones/motor.php");
require("../../funciones/DateUtils.php");

$iddepartamento = $_POST['iddepartamento'];
$fechainicio = $_POST['fechainicio'];
$fechafin = $_POST['fechafin'];

$res = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$fechainicio' AND '$fechafin' AND c.`iddepartamento` = " . $iddepartamento);
$data = mysqli_fetch_array($res);

$cantMttos = isset($data['cantidad']) ? $data['cantidad'] : 0;

$res1 = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$fechainicio' AND '$fechafin' AND c.`iddepartamento` = " . $iddepartamento ."
            AND e.`estado` <> 'PEN'");
$data1 = mysqli_fetch_array($res1);

$cantMttosEje = isset($data1['cantidad']) ? $data1['cantidad'] : 0;

$porcentajeEje = 0;
$porcentajeEje = ($cantMttos > 0) ? round(($cantMttosEje/$cantMttos)*100, 1) : 0;

$periodo = monthLiteral(strtotime($fechainicio));

$respuesta = [
    "periodo"     => $periodo,
    "total_mttos" => $cantMttos,
    "total_eje"   => $cantMttosEje,
    "porcentaje"  => $porcentajeEje
];

echo json_encode($respuesta);
