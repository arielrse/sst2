<?php
require("../../../funciones/motor.php");
require("../DataMtoUtils.php");
require_once('../../../vendor/autoload.php');
require_once('plantilla.php');

$idrutinax = $_POST['idrutinax'];
$cform = $_POST['cform'];
$idgrupo = $_POST['idgrupo'];
$iddepartamento = $_POST['iddepartamento'];
$idevento = $_POST['idevento'];

$css = file_get_contents('../../../assets/css/report.css');

$datosArr     = getJsonData_rutinaArr($conexion, $idrutinax, $cform);
$idformulario = $datosArr[0];
$jsonData     = $datosArr[1];
$titulosArr   = getTitulosRutinas($conexion, $idformulario);
$plantilla    = getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idrutinax, $titulosArr);
$nombreFile   = getNombreArchivoReporte($jsonData, $titulosArr[0]);
$nombreFile   = $nombreFile.".pdf";

$mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
$mpdf->AddPage('P', '', '', '', '', '3', '3', '1.5', '1.5');

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$pdfContent = $mpdf->output($nombreFile, \Mpdf\Output\Destination::STRING_RETURN);

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $nombreFile . '"');
header('Content-Length: ' . strlen($pdfContent));

echo $pdfContent;

?>