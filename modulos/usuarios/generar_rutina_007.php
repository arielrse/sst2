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
    "A2" =>  "Fecha de Mtto",
    "B2" =>  "CM/SCM",
    "C2" =>  "ID Sitio",
    "D2" =>  "Property_id",
    "E2" =>  "L1-N",
    "F2" =>  "L2-N",
    "G2" =>  "L3-N",
    "H2" =>  "L1-L2",
    "I2" =>  "L1-L3",
    "J2" =>  "L2-L2",
    "K2" =>  "L1",
    "L2" =>  "L2",
    "M2" =>  "L3",
    "N2" =>  "N",
    "O2" =>  "PE",
    "P2" =>  "Medida independiente  puesta a tierra solo Varillas en  Punto  de Transformador",
    "Q2" =>  "Obs.",
    "R2" =>  "Medida sistema completo puesta a tierra en Punto de Transformador",
    "S2" =>  "Obs.",
    "T2" =>  "Medida independiente  puesta a tierra solo Varillas en  Punto  de Arranque",
    "U2" =>  "Obs.",
    "V2" =>  "Medida sistema completo puesta a tierra en Punto de Arranque",
    "W2" =>  "Obs.",
];


$sheet->mergeCells('E1:J1');
$sheet->mergeCells('K1:O1');
$sheet->getStyle('E1:J1')->applyFromArray($tableHead);
$sheet->getStyle('K1:O1')->applyFromArray($tableHead);

$sheet->setCellValue('E1', 'Medición de tensión  salida del transformador (V)');
$sheet->setCellValue('K1', 'Medición de corriente de operación salida transformador (A)');

$sheet->setTitle("Datos Rutinas");

$sheet->getStyle('A2:W2')->applyFromArray($tableHead);
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
$fila = 3;

while($row = mysqli_fetch_array($resultado)){

    $jsonData = $row["data"];
    $obj = json_decode($jsonData);
    $json_OK =	json_last_error() == JSON_ERROR_NONE;

    if ($json_OK){


            $cm         = $row["cm"];
            $propertyId = $row["propertyId"];
            $sitioId    = $row["sitioId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $g_desarrollo = $obj->{'g_desarrollo'};
            $g1_20_01 = $g_desarrollo->g1_20_01;
            $g1_20_02 = $g_desarrollo->g1_20_02;
            $g1_20_03 = $g_desarrollo->g1_20_03;
            $g1_20_04 = $g_desarrollo->g1_20_04;
            $g1_20_05 = $g_desarrollo->g1_20_05;
            $g1_20_06 = $g_desarrollo->g1_20_06;
            $g1_21_01 = $g_desarrollo->g1_21_01;
            $g1_21_02 = $g_desarrollo->g1_21_02;
            $g1_21_03 = $g_desarrollo->g1_21_03;
            $g1_21_04 = $g_desarrollo->g1_21_04;
            $g1_21_05 = $g_desarrollo->g1_21_05;


            $g_desarrollo3 = $obj->{'g_desarrollo3'};
            $g3_01_01 = $g_desarrollo3->g3_01_01;
            $g3_01_02 = $g_desarrollo3->g3_01_02;
            $g3_02_01 = $g_desarrollo3->g3_02_01;
            $g3_02_02 = $g_desarrollo3->g3_02_02;
            $g3_03_01 = $g_desarrollo3->g3_03_01;
            $g3_03_02 = $g_desarrollo3->g3_03_02;
            $g3_04_01 = $g_desarrollo3->g3_04_01;
            $g3_04_02 = $g_desarrollo3->g3_04_02;


            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g1_20_01);
            $sheet->setCellValue('F'.$fila,  $g1_20_02);
            $sheet->setCellValue('G'.$fila,  $g1_20_03);
            $sheet->setCellValue('H'.$fila,  $g1_20_04);
            $sheet->setCellValue('I'.$fila,  $g1_20_05);
            $sheet->setCellValue('J'.$fila,  $g1_20_06);
            $sheet->setCellValue('K'.$fila,  $g1_21_01);
            $sheet->setCellValue('L'.$fila,  $g1_21_02);
            $sheet->setCellValue('M'.$fila,  $g1_21_03);
            $sheet->setCellValue('N'.$fila,  $g1_21_04);
            $sheet->setCellValue('O'.$fila,  $g1_21_05);
            $sheet->setCellValue('P'.$fila,  $g3_01_01);
            $sheet->setCellValue('Q'.$fila,  $g3_01_02);
            $sheet->setCellValue('R'.$fila,  $g3_02_01);
            $sheet->setCellValue('S'.$fila,  $g3_02_02);
            $sheet->setCellValue('T'.$fila,  $g3_03_01);
            $sheet->setCellValue('U'.$fila,  $g3_03_02);
            $sheet->setCellValue('V'.$fila,  $g3_04_01);
            $sheet->setCellValue('W'.$fila,  $g3_04_02);

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