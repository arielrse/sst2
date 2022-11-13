<?php
require("../../funciones/motor.php");
require_once('../../vendor/autoload.php');
require_once('../../modulos/seguimiento_tecnico/plantillaCorrectivo.php');

$idcorrectivo = $_POST['idcorrectivo'];

$css = file_get_contents('../../assets/css/report.css');

$plantilla = getPlantilla($conexion, $idcorrectivo);

$mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
$mpdf->AddPage('P', '', '', '', '', '3', '3', '1.5', '1.5');

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->output("Correctivo.pdf", "I");

generate($css, $plantilla);
echo 'ok';
?>