<?php
require("../../../funciones/motor.php");
require("../DataMtoUtils.php");
require_once('../../../vendor/autoload.php');
require_once('plantilla.php');

$idcatastrox = $_POST['idcatastrox'];
$cform = $_POST['cform'];
$idgrupo = $_POST['idgrupo'];
$iddepartamento = $_POST['iddepartamento'];

$css = file_get_contents('../../../assets/css/report.css');

$datosArr     = getJsonData_catastroArr($conexion, $idcatastrox, $cform);
$idformulario = $datosArr[0];
$jsonData     = $datosArr[1];
//$titulosArr   = getTitulosRutinas($conexion, $idformulario);
$titulosArr   = [];
$plantilla    = getPlantilla($conexion, $jsonData, $idgrupo, $idcatastrox, $titulosArr);
$nombreFile   = getNombreArchivoReporte($jsonData, $titulosArr[0]);

$mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
$mpdf->AddPage('P', '', '', '', '', '3', '3', '1.5', '1.5');

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
//$mpdf->writeHtml($css2, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->output($nombreFile.".pdf", "I");

generate($css, $plantilla);

?>