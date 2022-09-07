<?php
require("../../../funciones/motor.php");
require_once('../../../vendor/autoload.php');
require_once('plantilla.php');

$idrutinax = $_POST['idrutinax'];
$cform = $_POST['cform'];
$idgrupo = $_POST['idgrupo'];
$iddepartamento = $_POST['iddepartamento'];

$css = file_get_contents('../../../assets/css/report.css');

$res3 = mysqli_query($conexion, "SELECT r.id, r.cabecera FROM rutina$cform r WHERE r.id = ".$idrutinax);
$data3 = mysqli_fetch_array($res3);
$jsonData = $data3['cabecera'];
$plantilla = getPlantilla($conexion, $jsonData, $idgrupo);


$mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
$mpdf->AddPage('P', '', '', '', '', '3', '3', '1.5', '1.5');

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
//$mpdf->writeHtml($css2, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->output("Report$cform.pdf", "I");

generate($css, $plantilla);

?>