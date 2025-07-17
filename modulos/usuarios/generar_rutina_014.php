<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$iddepartamento = $_POST['iddepartamento'];
$codeidform     = $_POST['codeidform'];
$fechainicio    = $_POST['fechainicio'];
$fechafin       = $_POST['fechafin'];

$arr = explode('|', $codeidform);
$codForm = $arr[0];
$idformulario = $arr[1];

$tableHead = [
    'font' => ['color' => ['rgb'=>'000000'], ],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'EEECE1']],
    'borders' => ['allBorders' => ['borderStyle' => Border::BORDER_THIN,'color' => ['rgb' => '000000']]],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER,'vertical' => Alignment::VERTICAL_CENTER]
];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial Narrow');
$spreadsheet->getDefaultStyle()->getFont()->setSize(10);

$rutina000_titulos = [
    "A1" =>  "Departamento",
    "B1" =>  "Provincia",
    "C1" =>  "Localidad",
    "D1" =>  "Latitud",
    "E1" =>  "Longitud",
    "F1" =>  "CM/SCM",
    "G1" =>  "ID Sitio",
    "H1" =>  "Property_id",
    "I1" =>  "Fecha de Mtto",
    "J1" =>  "Radio Bases",
    "K1" =>  "Tipo de Transporte",
    "L1" =>  "Salto Anterior",
    "M1" =>  "Energía principal",
    "N1" =>  "Vendor",
    "O1" =>  "Equipo de transmisión",
    "P1" =>  "Interface",
    "Q1" =>  "Energía Respaldo",
    "R1" =>  "Puerta Abierta",
    "S1" =>  "Baterías en descarga",
    "T1" =>  "Corte de energía comercial",
    "U1" =>  "Inundación",
    "V1" =>  "Falla de protección de transcientes",
    "W1" =>  "Alarma de rectificador",
    "X1" =>  "Humo",
    "Y1" =>  "Falla de baliza",
    "Z1" =>  "GG. Warning",
    "AA1" => "GG. Apagado",
    "AB1" => "Bajo nivel de combustible",
    "AC1" => "GG. Encendido",
    "AD1" => "Tecnologia",
    "AE1" => "Nombre de la BTS",
    "AF1" => "ID Estacion",
    "AG1" => "Configuracion",
    "AH1" => "Sector",
    "AI1" => "LOCAL CELL ID",
    "AJ1" => "Banda MHz",
    "AK1" => "Modelo RBS",
    "AL1" => "Tipo de Antena",
    "AM1" => "Marca antena",
    "AN1" => "Modelo antena",
    "AO1" => "Azimut",
    "AP1" => "Tilt Mecánico",
    "AQ1" => "Tilt Eléctrico",
    "AR1" => "Ángulo de apertura",
    "AS1" => "Altura de antena (m)",
    "AT1" => "Tiene RET",
    "AU1" => "Modelo RRU",
];

$sheet->setTitle("Datos Rutinas");
$sheet->getStyle('A1:AU1')->applyFromArray($tableHead);
foreach ($rutina000_titulos as $columna => $valor){
    $sheet->setCellValue($columna, $valor);
}

$sql11 = "";
// Recuperando catastros de la bd
$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idrutina, cc.cabecera as data, "." 
                    s.idsitio, s.codsitio as sitioId, s.nombre as propertyId, s.localidad, s.municipio, s.provincia, s.latitud, s.longitud, d.nombre as nombreDepto, c.nombre as cm
            FROM rutina".$codForm." cc
            LEFT JOIN evento e ON cc.idevento = e.idevento
            LEFT JOIN sitio s  ON e.idsitio = s.idsitio
            LEFT JOIN departamento d ON s.iddepartamento = d.iddepartamento 
            LEFT JOIN centro c ON e.idcentro = c.idcentro
            WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."' 
            AND s.iddepartamento = " . $iddepartamento;

$resultado = mysqli_query($conexion, $consulta);
$fila = 2;

while($row = mysqli_fetch_array($resultado)){

    $jsonData = $row["data"];
    $obj = json_decode($jsonData);
    $json_OK =	json_last_error() == JSON_ERROR_NONE;

    if ($json_OK){

            $departamento = $row["nombreDepto"];
            $provincia  = $row["provincia"];
            $localidad  = $row["localidad"];
            $municipio  = $row["municipio"];
            $latitud    = $row["latitud"];
            $longitud   = $row["longitud"];
            $cm         = $row["cm"];
            $sitioId    = $row["sitioId"];
            $propertyId = $row["propertyId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $d_relevamiento = $obj->d_relevamiento;
            $d_01_01 = $d_relevamiento->d_01_01;    $d_01_02 = $d_relevamiento->d_01_02;
            $d_02_01 = $d_relevamiento->d_02_01;    $d_02_02 = $d_relevamiento->d_02_02;
            $d_03_01 = $d_relevamiento->d_03_01;    $d_03_02 = $d_relevamiento->d_03_02;
            $d_04_01 = $d_relevamiento->d_04_01;    $d_04_02 = $d_relevamiento->d_04_02;

            $e_desarrollo = $obj->e_desarrollo;
            $e3_01_01 = $e_desarrollo->e3_01_01;
            $e3_02_01 = $e_desarrollo->e3_02_01;
            $e3_03_01 = $e_desarrollo->e3_03_01;
            $e3_04_01 = $e_desarrollo->e3_04_01;
            $e3_05_01 = $e_desarrollo->e3_05_01;
            $e3_06_01 = $e_desarrollo->e3_06_01;
            $e3_07_01 = $e_desarrollo->e3_07_01;
            $e3_08_01 = $e_desarrollo->e3_08_01;
            $e3_09_01 = $e_desarrollo->e3_09_01;
            $e3_10_01 = $e_desarrollo->e3_10_01;
            $e3_11_01 = $e_desarrollo->e3_11_01;
            $e3_12_01 = $e_desarrollo->e3_12_01;

            $d_sectores = $obj->d_sectores;
            $bts_01_01 = $d_sectores->bts_01_01;
            $bts_02_01 = $d_sectores->bts_02_01;
            $bts_03_01 = $d_sectores->bts_03_01;
            $bts_04_01 = $d_sectores->bts_04_01;

            $d1_01_01=$d_sectores->d1_01_01;  $d1_01_02=$d_sectores->d1_01_02;    $d1_01_03=$d_sectores->d1_01_03;    $d1_01_04=$d_sectores->d1_01_04;    $d1_01_05=$d_sectores->d1_01_05;    $d1_01_06=$d_sectores->d1_01_06;    $d1_01_07=$d_sectores->d1_01_07;    $d1_01_08=$d_sectores->d1_01_08;    $d1_01_09=$d_sectores->d1_01_09;    $d1_01_10=$d_sectores->d1_01_10;    $d1_01_11=$d_sectores->d1_01_11;    $d1_01_12=$d_sectores->d1_01_12;    $d1_01_13=$d_sectores->d1_01_13;
            $d1_02_01=$d_sectores->d1_02_01;  $d1_02_02=$d_sectores->d1_02_02;    $d1_02_03=$d_sectores->d1_02_03;    $d1_02_04=$d_sectores->d1_02_04;    $d1_02_05=$d_sectores->d1_02_05;    $d1_02_06=$d_sectores->d1_02_06;    $d1_02_07=$d_sectores->d1_02_07;    $d1_02_08=$d_sectores->d1_02_08;    $d1_02_09=$d_sectores->d1_02_09;    $d1_02_10=$d_sectores->d1_02_10;    $d1_02_11=$d_sectores->d1_02_11;    $d1_02_12=$d_sectores->d1_02_12;    $d1_02_13=$d_sectores->d1_02_13;
            $d1_03_01=$d_sectores->d1_03_01;  $d1_03_02=$d_sectores->d1_03_02;    $d1_03_03=$d_sectores->d1_03_03;    $d1_03_04=$d_sectores->d1_03_04;    $d1_03_05=$d_sectores->d1_03_05;    $d1_03_06=$d_sectores->d1_03_06;    $d1_03_07=$d_sectores->d1_03_07;    $d1_03_08=$d_sectores->d1_03_08;    $d1_03_09=$d_sectores->d1_03_09;    $d1_03_10=$d_sectores->d1_03_10;    $d1_03_11=$d_sectores->d1_03_11;    $d1_03_12=$d_sectores->d1_03_12;    $d1_03_13=$d_sectores->d1_03_13;
            $d1_04_01=$d_sectores->d1_04_01;  $d1_04_02=$d_sectores->d1_04_02;    $d1_04_03=$d_sectores->d1_04_03;    $d1_04_04=$d_sectores->d1_04_04;    $d1_04_05=$d_sectores->d1_04_05;    $d1_04_06=$d_sectores->d1_04_06;    $d1_04_07=$d_sectores->d1_04_07;    $d1_04_08=$d_sectores->d1_04_08;    $d1_04_09=$d_sectores->d1_04_09;    $d1_04_10=$d_sectores->d1_04_10;    $d1_04_11=$d_sectores->d1_04_11;    $d1_04_12=$d_sectores->d1_04_12;    $d1_04_13=$d_sectores->d1_04_13;
            $d1_05_01=$d_sectores->d1_05_01;  $d1_05_02=$d_sectores->d1_05_02;    $d1_05_03=$d_sectores->d1_05_03;    $d1_05_04=$d_sectores->d1_05_04;    $d1_05_05=$d_sectores->d1_05_05;    $d1_05_06=$d_sectores->d1_05_06;    $d1_05_07=$d_sectores->d1_05_07;    $d1_05_08=$d_sectores->d1_05_08;    $d1_05_09=$d_sectores->d1_05_09;    $d1_05_10=$d_sectores->d1_05_10;    $d1_05_11=$d_sectores->d1_05_11;    $d1_05_12=$d_sectores->d1_05_12;    $d1_05_13=$d_sectores->d1_05_13;
            $d1_06_01=$d_sectores->d1_06_01;  $d1_06_02=$d_sectores->d1_06_02;    $d1_06_03=$d_sectores->d1_06_03;    $d1_06_04=$d_sectores->d1_06_04;    $d1_06_05=$d_sectores->d1_06_05;    $d1_06_06=$d_sectores->d1_06_06;    $d1_06_07=$d_sectores->d1_06_07;    $d1_06_08=$d_sectores->d1_06_08;    $d1_06_09=$d_sectores->d1_06_09;    $d1_06_10=$d_sectores->d1_06_10;    $d1_06_11=$d_sectores->d1_06_11;    $d1_06_12=$d_sectores->d1_06_12;    $d1_06_13=$d_sectores->d1_06_13;

            $nodoB_01_01 = $d_sectores->nodoB_01_01;
            $nodoB_02_01 = $d_sectores->nodoB_02_01;
            $nodoB_03_01 = $d_sectores->nodoB_03_01;
            $nodoB_04_01 = $d_sectores->nodoB_04_01;

            $d2_01_01=$d_sectores->d2_01_01; $d2_01_02=$d_sectores->d2_01_02; $d2_01_03=$d_sectores->d2_01_03; $d2_01_04=$d_sectores->d2_01_04; $d2_01_05=$d_sectores->d2_01_05; $d2_01_06=$d_sectores->d2_01_06; $d2_01_07=$d_sectores->d2_01_07; $d2_01_08=$d_sectores->d2_01_08; $d2_01_09=$d_sectores->d2_01_09; $d2_01_10=$d_sectores->d2_01_10; $d2_01_11=$d_sectores->d2_01_11; $d2_01_12=$d_sectores->d2_01_12; $d2_01_13=$d_sectores->d2_01_13;
            $d2_02_01=$d_sectores->d2_02_01; $d2_02_02=$d_sectores->d2_02_02; $d2_02_03=$d_sectores->d2_02_03; $d2_02_04=$d_sectores->d2_02_04; $d2_02_05=$d_sectores->d2_02_05; $d2_02_06=$d_sectores->d2_02_06; $d2_02_07=$d_sectores->d2_02_07; $d2_02_08=$d_sectores->d2_02_08; $d2_02_09=$d_sectores->d2_02_09; $d2_02_10=$d_sectores->d2_02_10; $d2_02_11=$d_sectores->d2_02_11; $d2_02_12=$d_sectores->d2_02_12; $d2_02_13=$d_sectores->d2_02_13;
            $d2_03_01=$d_sectores->d2_03_01; $d2_03_02=$d_sectores->d2_03_02; $d2_03_03=$d_sectores->d2_03_03; $d2_03_04=$d_sectores->d2_03_04; $d2_03_05=$d_sectores->d2_03_05; $d2_03_06=$d_sectores->d2_03_06; $d2_03_07=$d_sectores->d2_03_07; $d2_03_08=$d_sectores->d2_03_08; $d2_03_09=$d_sectores->d2_03_09; $d2_03_10=$d_sectores->d2_03_10; $d2_03_11=$d_sectores->d2_03_11; $d2_03_12=$d_sectores->d2_03_12; $d2_03_13=$d_sectores->d2_03_13;
            $d2_04_01=$d_sectores->d2_04_01; $d2_04_02=$d_sectores->d2_04_02; $d2_04_03=$d_sectores->d2_04_03; $d2_04_04=$d_sectores->d2_04_04; $d2_04_05=$d_sectores->d2_04_05; $d2_04_06=$d_sectores->d2_04_06; $d2_04_07=$d_sectores->d2_04_07; $d2_04_08=$d_sectores->d2_04_08; $d2_04_09=$d_sectores->d2_04_09; $d2_04_10=$d_sectores->d2_04_10; $d2_04_11=$d_sectores->d2_04_11; $d2_04_12=$d_sectores->d2_04_12; $d2_04_13=$d_sectores->d2_04_13;
            $d2_05_01=$d_sectores->d2_05_01; $d2_05_02=$d_sectores->d2_05_02; $d2_05_03=$d_sectores->d2_05_03; $d2_05_04=$d_sectores->d2_05_04; $d2_05_05=$d_sectores->d2_05_05; $d2_05_06=$d_sectores->d2_05_06; $d2_05_07=$d_sectores->d2_05_07; $d2_05_08=$d_sectores->d2_05_08; $d2_05_09=$d_sectores->d2_05_09; $d2_05_10=$d_sectores->d2_05_10; $d2_05_11=$d_sectores->d2_05_11; $d2_05_12=$d_sectores->d2_05_12; $d2_05_13=$d_sectores->d2_05_13;
            $d2_06_01=$d_sectores->d2_06_01; $d2_06_02=$d_sectores->d2_06_02; $d2_06_03=$d_sectores->d2_06_03; $d2_06_04=$d_sectores->d2_06_04; $d2_06_05=$d_sectores->d2_06_05; $d2_06_06=$d_sectores->d2_06_06; $d2_06_07=$d_sectores->d2_06_07; $d2_06_08=$d_sectores->d2_06_08; $d2_06_09=$d_sectores->d2_06_09; $d2_06_10=$d_sectores->d2_06_10; $d2_06_11=$d_sectores->d2_06_11; $d2_06_12=$d_sectores->d2_06_12; $d2_06_13=$d_sectores->d2_06_13;
            $d2_07_01=$d_sectores->d2_07_01; $d2_07_02=$d_sectores->d2_07_02; $d2_07_03=$d_sectores->d2_07_03; $d2_07_04=$d_sectores->d2_07_04; $d2_07_05=$d_sectores->d2_07_05; $d2_07_06=$d_sectores->d2_07_06; $d2_07_07=$d_sectores->d2_07_07; $d2_07_08=$d_sectores->d2_07_08; $d2_07_09=$d_sectores->d2_07_09; $d2_07_10=$d_sectores->d2_07_10; $d2_07_11=$d_sectores->d2_07_11; $d2_07_12=$d_sectores->d2_07_12; $d2_07_13=$d_sectores->d2_07_13;
            $d2_08_01=$d_sectores->d2_08_01; $d2_08_02=$d_sectores->d2_08_02; $d2_08_03=$d_sectores->d2_08_03; $d2_08_04=$d_sectores->d2_08_04; $d2_08_05=$d_sectores->d2_08_05; $d2_08_06=$d_sectores->d2_08_06; $d2_08_07=$d_sectores->d2_08_07; $d2_08_08=$d_sectores->d2_08_08; $d2_08_09=$d_sectores->d2_08_09; $d2_08_10=$d_sectores->d2_08_10; $d2_08_11=$d_sectores->d2_08_11; $d2_08_12=$d_sectores->d2_08_12; $d2_08_13=$d_sectores->d2_08_13;
            $d2_09_01=$d_sectores->d2_09_01; $d2_09_02=$d_sectores->d2_09_02; $d2_09_03=$d_sectores->d2_09_03; $d2_09_04=$d_sectores->d2_09_04; $d2_09_05=$d_sectores->d2_09_05; $d2_09_06=$d_sectores->d2_09_06; $d2_09_07=$d_sectores->d2_09_07; $d2_09_08=$d_sectores->d2_09_08; $d2_09_09=$d_sectores->d2_09_09; $d2_09_10=$d_sectores->d2_09_10; $d2_09_11=$d_sectores->d2_09_11; $d2_09_12=$d_sectores->d2_09_12; $d2_09_13=$d_sectores->d2_09_13;
            $d2_10_01=$d_sectores->d2_10_01; $d2_10_02=$d_sectores->d2_10_02; $d2_10_03=$d_sectores->d2_10_03; $d2_10_04=$d_sectores->d2_10_04; $d2_10_05=$d_sectores->d2_10_05; $d2_10_06=$d_sectores->d2_10_06; $d2_10_07=$d_sectores->d2_10_07; $d2_10_08=$d_sectores->d2_10_08; $d2_10_09=$d_sectores->d2_10_09; $d2_10_10=$d_sectores->d2_10_10; $d2_10_11=$d_sectores->d2_10_11; $d2_10_12=$d_sectores->d2_10_12; $d2_10_13=$d_sectores->d2_10_13;
            $d2_11_01=$d_sectores->d2_11_01; $d2_11_02=$d_sectores->d2_11_02; $d2_11_03=$d_sectores->d2_11_03; $d2_11_04=$d_sectores->d2_11_04; $d2_11_05=$d_sectores->d2_11_05; $d2_11_06=$d_sectores->d2_11_06; $d2_11_07=$d_sectores->d2_11_07; $d2_11_08=$d_sectores->d2_11_08; $d2_11_09=$d_sectores->d2_11_09; $d2_11_10=$d_sectores->d2_11_10; $d2_11_11=$d_sectores->d2_11_11; $d2_11_12=$d_sectores->d2_11_12; $d2_11_13=$d_sectores->d2_11_13;
            $d2_12_01=$d_sectores->d2_12_01; $d2_12_02=$d_sectores->d2_12_02; $d2_12_03=$d_sectores->d2_12_03; $d2_12_04=$d_sectores->d2_12_04; $d2_12_05=$d_sectores->d2_12_05; $d2_12_06=$d_sectores->d2_12_06; $d2_12_07=$d_sectores->d2_12_07; $d2_12_08=$d_sectores->d2_12_08; $d2_12_09=$d_sectores->d2_12_09; $d2_12_10=$d_sectores->d2_12_10; $d2_12_11=$d_sectores->d2_12_11; $d2_12_12=$d_sectores->d2_12_12; $d2_12_13=$d_sectores->d2_12_13;

            $enodoB_01_01 = $d_sectores->enodoB_01_01;
            $enodoB_02_01 = $d_sectores->enodoB_02_01;
            $enodoB_03_01 = $d_sectores->enodoB_03_01;
            $enodoB_04_01 = $d_sectores->enodoB_04_01;
            $d3_01_01=$d_sectores->d3_01_01; $d3_01_02=$d_sectores->d3_01_02; $d3_01_03=$d_sectores->d3_01_03; $d3_01_04=$d_sectores->d3_01_04; $d3_01_05=$d_sectores->d3_01_05; $d3_01_06=$d_sectores->d3_01_06; $d3_01_07=$d_sectores->d3_01_07; $d3_01_08=$d_sectores->d3_01_08; $d3_01_09=$d_sectores->d3_01_09; $d3_01_10=$d_sectores->d3_01_10; $d3_01_11=$d_sectores->d3_01_11; $d3_01_12=$d_sectores->d3_01_12; $d3_01_13=$d_sectores->d3_01_13;
            $d3_02_01=$d_sectores->d3_02_01; $d3_02_02=$d_sectores->d3_02_02; $d3_02_03=$d_sectores->d3_02_03; $d3_02_04=$d_sectores->d3_02_04; $d3_02_05=$d_sectores->d3_02_05; $d3_02_06=$d_sectores->d3_02_06; $d3_02_07=$d_sectores->d3_02_07; $d3_02_08=$d_sectores->d3_02_08; $d3_02_09=$d_sectores->d3_02_09; $d3_02_10=$d_sectores->d3_02_10; $d3_02_11=$d_sectores->d3_02_11; $d3_02_12=$d_sectores->d3_02_12; $d3_02_13=$d_sectores->d3_02_13;
            $d3_03_01=$d_sectores->d3_03_01; $d3_03_02=$d_sectores->d3_03_02; $d3_03_03=$d_sectores->d3_03_03; $d3_03_04=$d_sectores->d3_03_04; $d3_03_05=$d_sectores->d3_03_05; $d3_03_06=$d_sectores->d3_03_06; $d3_03_07=$d_sectores->d3_03_07; $d3_03_08=$d_sectores->d3_03_08; $d3_03_09=$d_sectores->d3_03_09; $d3_03_10=$d_sectores->d3_03_10; $d3_03_11=$d_sectores->d3_03_11; $d3_03_12=$d_sectores->d3_03_12; $d3_03_13=$d_sectores->d3_03_13;
            $d3_04_01=$d_sectores->d3_04_01; $d3_04_02=$d_sectores->d3_04_02; $d3_04_03=$d_sectores->d3_04_03; $d3_04_04=$d_sectores->d3_04_04; $d3_04_05=$d_sectores->d3_04_05; $d3_04_06=$d_sectores->d3_04_06; $d3_04_07=$d_sectores->d3_04_07; $d3_04_08=$d_sectores->d3_04_08; $d3_04_09=$d_sectores->d3_04_09; $d3_04_10=$d_sectores->d3_04_10; $d3_04_11=$d_sectores->d3_04_11; $d3_04_12=$d_sectores->d3_04_12; $d3_04_13=$d_sectores->d3_04_13;
            $d3_05_01=$d_sectores->d3_05_01; $d3_05_02=$d_sectores->d3_05_02; $d3_05_03=$d_sectores->d3_05_03; $d3_05_04=$d_sectores->d3_05_04; $d3_05_05=$d_sectores->d3_05_05; $d3_05_06=$d_sectores->d3_05_06; $d3_05_07=$d_sectores->d3_05_07; $d3_05_08=$d_sectores->d3_05_08; $d3_05_09=$d_sectores->d3_05_09; $d3_05_10=$d_sectores->d3_05_10; $d3_05_11=$d_sectores->d3_05_11; $d3_05_12=$d_sectores->d3_05_12; $d3_05_13=$d_sectores->d3_05_13;
            $d3_06_01=$d_sectores->d3_06_01; $d3_06_02=$d_sectores->d3_06_02; $d3_06_03=$d_sectores->d3_06_03; $d3_06_04=$d_sectores->d3_06_04; $d3_06_05=$d_sectores->d3_06_05; $d3_06_06=$d_sectores->d3_06_06; $d3_06_07=$d_sectores->d3_06_07; $d3_06_08=$d_sectores->d3_06_08; $d3_06_09=$d_sectores->d3_06_09; $d3_06_10=$d_sectores->d3_06_10; $d3_06_11=$d_sectores->d3_06_11; $d3_06_12=$d_sectores->d3_06_12; $d3_06_13=$d_sectores->d3_06_13;
            $d3_07_01=$d_sectores->d3_07_01; $d3_07_02=$d_sectores->d3_07_02; $d3_07_03=$d_sectores->d3_07_03; $d3_07_04=$d_sectores->d3_07_04; $d3_07_05=$d_sectores->d3_07_05; $d3_07_06=$d_sectores->d3_07_06; $d3_07_07=$d_sectores->d3_07_07; $d3_07_08=$d_sectores->d3_07_08; $d3_07_09=$d_sectores->d3_07_09; $d3_07_10=$d_sectores->d3_07_10; $d3_07_11=$d_sectores->d3_07_11; $d3_07_12=$d_sectores->d3_07_12; $d3_07_13=$d_sectores->d3_07_13;
            $d3_08_01=$d_sectores->d3_08_01; $d3_08_02=$d_sectores->d3_08_02; $d3_08_03=$d_sectores->d3_08_03; $d3_08_04=$d_sectores->d3_08_04; $d3_08_05=$d_sectores->d3_08_05; $d3_08_06=$d_sectores->d3_08_06; $d3_08_07=$d_sectores->d3_08_07; $d3_08_08=$d_sectores->d3_08_08; $d3_08_09=$d_sectores->d3_08_09; $d3_08_10=$d_sectores->d3_08_10; $d3_08_11=$d_sectores->d3_08_11; $d3_08_12=$d_sectores->d3_08_12; $d3_08_13=$d_sectores->d3_08_13;
            $d3_09_01=$d_sectores->d3_09_01; $d3_09_02=$d_sectores->d3_09_02; $d3_09_03=$d_sectores->d3_09_03; $d3_09_04=$d_sectores->d3_09_04; $d3_09_05=$d_sectores->d3_09_05; $d3_09_06=$d_sectores->d3_09_06; $d3_09_07=$d_sectores->d3_09_07; $d3_09_08=$d_sectores->d3_09_08; $d3_09_09=$d_sectores->d3_09_09; $d3_09_10=$d_sectores->d3_09_10; $d3_09_11=$d_sectores->d3_09_11; $d3_09_12=$d_sectores->d3_09_12; $d3_09_13=$d_sectores->d3_09_13;

            $num = 0;
            // BTS - 2G
            if ( $d1_01_01 != "" ) {

                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_01_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_01_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_01_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_01_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_01_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_01_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_01_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_01_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_01_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_01_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_01_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_01_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_01_13);
            }

            if ( $d1_02_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_02_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_02_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_02_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_02_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_02_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_02_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_02_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_02_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_02_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_02_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_02_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_02_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_02_13);
            }

            if ( $d1_03_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_03_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_03_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_03_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_03_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_03_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_03_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_03_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_03_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_03_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_03_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_03_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_03_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_03_13);
            }

            if ( $d1_04_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_04_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_04_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_04_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_04_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_04_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_04_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_04_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_04_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_04_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_04_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_04_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_04_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_04_13);
            }

            if ( $d1_05_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_05_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_05_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_05_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_05_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_05_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_05_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_05_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_05_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_05_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_05_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_05_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_05_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_05_13);
            }

            if ( $d1_06_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $bts_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $bts_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $bts_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $bts_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d1_06_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d1_06_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d1_06_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d1_06_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d1_06_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d1_06_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d1_06_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d1_06_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d1_06_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d1_06_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d1_06_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d1_06_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d1_06_13);
            }

            // NODO B - 4G
            if ( $d2_01_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_01_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_01_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_01_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_01_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_01_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_01_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_01_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_01_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_01_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_01_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_01_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_01_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_01_13);
            }

            if ( $d2_02_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_02_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_02_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_02_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_02_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_02_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_02_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_02_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_02_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_02_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_02_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_02_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_02_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_02_13);
            }

            if ( $d2_03_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_03_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_03_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_03_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_03_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_03_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_03_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_03_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_03_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_03_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_03_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_03_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_03_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_03_13);
            }

            if ( $d2_04_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_04_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_04_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_04_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_04_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_04_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_04_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_04_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_04_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_04_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_04_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_04_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_04_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_04_13);
            }

            if ( $d2_05_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_05_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_05_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_05_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_05_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_05_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_05_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_05_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_05_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_05_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_05_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_05_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_05_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_05_13);
            }

            if ( $d2_06_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_06_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_06_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_06_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_06_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_06_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_06_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_06_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_06_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_06_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_06_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_06_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_06_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_06_13);
            }

            if ( $d2_07_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_07_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_07_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_07_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_07_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_07_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_07_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_07_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_07_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_07_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_07_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_07_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_07_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_07_13);
            }

            if ( $d2_08_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_08_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_08_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_08_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_08_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_08_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_08_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_08_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_08_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_08_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_08_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_08_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_08_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_08_13);
            }

            if ( $d2_09_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_09_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_09_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_09_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_09_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_09_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_09_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_09_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_09_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_09_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_09_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_09_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_09_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_09_13);
            }

            if ( $d2_10_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_10_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_10_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_10_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_10_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_10_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_10_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_10_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_10_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_10_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_10_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_10_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_10_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_10_13);
            }

            if ( $d2_11_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_11_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_11_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_11_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_11_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_11_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_11_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_11_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_11_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_11_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_11_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_11_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_11_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_11_13);
            }

            if ( $d2_12_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $nodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $nodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $nodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $nodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d2_12_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d2_12_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d2_12_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d2_12_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d2_12_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d2_12_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d2_12_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d2_12_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d2_12_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d2_12_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d2_12_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d2_12_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d2_12_13);
            }

            // eNODO B - LTE
            if ( $d3_01_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_01_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_01_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_01_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_01_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_01_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_01_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_01_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_01_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_01_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_01_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_01_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_01_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_01_13);
            }

            if ( $d3_02_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_02_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_02_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_02_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_02_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_02_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_02_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_02_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_02_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_02_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_02_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_02_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_02_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_02_13);
            }

            if ( $d3_03_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_03_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_03_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_03_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_03_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_03_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_03_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_03_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_03_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_03_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_03_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_03_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_03_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_03_13);
            }

            if ( $d3_04_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_04_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_04_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_04_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_04_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_04_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_04_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_04_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_04_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_04_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_04_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_04_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_04_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_04_13);
            }

            if ( $d3_05_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_05_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_05_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_05_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_05_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_05_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_05_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_05_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_05_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_05_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_05_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_05_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_05_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_05_13);
            }

            if ( $d3_06_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_06_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_06_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_06_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_06_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_06_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_06_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_06_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_06_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_06_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_06_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_06_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_06_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_06_13);
            }

            if ( $d3_07_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '1');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_07_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_07_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_07_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_07_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_07_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_07_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_07_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_07_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_07_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_07_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_07_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_07_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_07_13);
            }

            if ( $d3_08_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' . ($fila + $num), $departamento);
                $sheet->setCellValue('B' . ($fila + $num), $provincia);
                $sheet->setCellValue('C' . ($fila + $num), $localidad);
                $sheet->setCellValue('D' . ($fila + $num), $latitud);
                $sheet->setCellValue('E' . ($fila + $num), $longitud);
                $sheet->setCellValue('F' . ($fila + $num), $cm);
                $sheet->setCellValue('G' . ($fila + $num), $sitioId);
                $sheet->setCellValue('H' . ($fila + $num), $propertyId);
                $sheet->setCellValue('I' . ($fila + $num), $c_fechaRealizacion);
                $sheet->setCellValue('J' . ($fila + $num), $d_01_01);
                $sheet->setCellValue('K' . ($fila + $num), $d_02_01);
                $sheet->setCellValue('L' . ($fila + $num), $d_03_01);
                $sheet->setCellValue('M' . ($fila + $num), $d_04_01);
                $sheet->setCellValue('N' . ($fila + $num), $d_01_02);
                $sheet->setCellValue('O' . ($fila + $num), $d_02_02);
                $sheet->setCellValue('P' . ($fila + $num), $d_03_02);
                $sheet->setCellValue('Q' . ($fila + $num), $d_04_02);
                $sheet->setCellValue('R' . ($fila + $num), $e3_01_01);
                $sheet->setCellValue('S' . ($fila + $num), $e3_02_01);
                $sheet->setCellValue('T' . ($fila + $num), $e3_03_01);
                $sheet->setCellValue('U' . ($fila + $num), $e3_04_01);
                $sheet->setCellValue('V' . ($fila + $num), $e3_05_01);
                $sheet->setCellValue('W' . ($fila + $num), $e3_06_01);
                $sheet->setCellValue('X' . ($fila + $num), $e3_07_01);
                $sheet->setCellValue('Y' . ($fila + $num), $e3_08_01);
                $sheet->setCellValue('Z' . ($fila + $num), $e3_09_01);
                $sheet->setCellValue('AA' . ($fila + $num), $e3_10_01);
                $sheet->setCellValue('AB' . ($fila + $num), $e3_11_01);
                $sheet->setCellValue('AC' . ($fila + $num), $e3_12_01);
                $sheet->setCellValue('AD' . ($fila + $num), $enodoB_01_01);
                $sheet->setCellValue('AE' . ($fila + $num), $enodoB_02_01);
                $sheet->setCellValue('AF' . ($fila + $num), $enodoB_03_01);
                $sheet->setCellValue('AG' . ($fila + $num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '2');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_08_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_08_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_08_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_08_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_08_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_08_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_08_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_08_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_08_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_08_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_08_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_08_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_08_13);
            }

            if ( $d3_09_01 != "" ) {
                $num++;
                $sheet->setCellValue('A' .($fila+$num), $departamento);
                $sheet->setCellValue('B' .($fila+$num), $provincia);
                $sheet->setCellValue('C' .($fila+$num), $localidad);
                $sheet->setCellValue('D' .($fila+$num), $latitud);
                $sheet->setCellValue('E' .($fila+$num), $longitud);
                $sheet->setCellValue('F' .($fila+$num), $cm);
                $sheet->setCellValue('G' .($fila+$num), $sitioId);
                $sheet->setCellValue('H' .($fila+$num), $propertyId);
                $sheet->setCellValue('I' .($fila+$num), $c_fechaRealizacion);
                $sheet->setCellValue('J' .($fila+$num), $d_01_01);
                $sheet->setCellValue('K' .($fila+$num), $d_02_01);
                $sheet->setCellValue('L' .($fila+$num), $d_03_01);
                $sheet->setCellValue('M' .($fila+$num), $d_04_01);
                $sheet->setCellValue('N' .($fila+$num), $d_01_02);
                $sheet->setCellValue('O' .($fila+$num), $d_02_02);
                $sheet->setCellValue('P' .($fila+$num), $d_03_02);
                $sheet->setCellValue('Q' .($fila+$num), $d_04_02);
                $sheet->setCellValue('R' .($fila+$num), $e3_01_01);
                $sheet->setCellValue('S' .($fila+$num), $e3_02_01);
                $sheet->setCellValue('T' .($fila+$num), $e3_03_01);
                $sheet->setCellValue('U' .($fila+$num), $e3_04_01);
                $sheet->setCellValue('V' .($fila+$num), $e3_05_01);
                $sheet->setCellValue('W' .($fila+$num), $e3_06_01);
                $sheet->setCellValue('X' .($fila+$num), $e3_07_01);
                $sheet->setCellValue('Y' .($fila+$num), $e3_08_01);
                $sheet->setCellValue('Z' .($fila+$num), $e3_09_01);
                $sheet->setCellValue('AA'.($fila+$num), $e3_10_01);
                $sheet->setCellValue('AB'.($fila+$num), $e3_11_01);
                $sheet->setCellValue('AC'.($fila+$num), $e3_12_01);
                $sheet->setCellValue('AD'.($fila+$num), $enodoB_01_01);
                $sheet->setCellValue('AE'.($fila+$num), $enodoB_02_01);
                $sheet->setCellValue('AF'.($fila+$num), $enodoB_03_01);
                $sheet->setCellValue('AG'.($fila+$num), $enodoB_04_01);
                $sheet->setCellValue('AH' . ($fila + $num), '3');
                $sheet->setCellValue('AI' . ($fila + $num), $d3_09_01);
                $sheet->setCellValue('AJ' . ($fila + $num), $d3_09_02);
                $sheet->setCellValue('AK' . ($fila + $num), $d3_09_03);
                $sheet->setCellValue('AL' . ($fila + $num), $d3_09_04);
                $sheet->setCellValue('AM' . ($fila + $num), $d3_09_05);
                $sheet->setCellValue('AN' . ($fila + $num), $d3_09_06);
                $sheet->setCellValue('AO' . ($fila + $num), $d3_09_07);
                $sheet->setCellValue('AP' . ($fila + $num), $d3_09_08);
                $sheet->setCellValue('AQ' . ($fila + $num), $d3_09_09);
                $sheet->setCellValue('AR' . ($fila + $num), $d3_09_10);
                $sheet->setCellValue('AS' . ($fila + $num), $d3_09_11);
                $sheet->setCellValue('AT' . ($fila + $num), $d3_09_12);
                $sheet->setCellValue('AU' . ($fila + $num), $d3_09_13);
            }

            $fila = $fila + $num;

    }
    else {
        $sheet->setCellValue('A'.$fila, 'ERROR');
        $sheet->setCellValue('B'.$fila, $row['inicio']);
        $sheet->setCellValue('C'.$fila, $row['nombre']);
    }

    $fila++;
}

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="rutina_datas.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*$writer = new Xlsx($spreadsheet);
$writer->save('hello-world.xlsx');*/



//header("Location: ".$link_modulo."?path=ver_usuarios.php");

?>