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
    "E2" =>  "V Vdc",
    "F2" =>  "I A",
    "G2" =>  "V Vdc",
    "H2" =>  "I A",
    "I2" =>  "V Vdc",
    "J2" =>  "I A",
    "K2" =>  "V Vdc",
    "L2" =>  "I A",
    "M2" =>  "V Vdc",
    "N2" =>  "I A",
    "O2" =>  "V Vdc",
    "P2" =>  "I A",
    "Q2" =>  "V Vdc",
    "R2" =>  "I A",
    "S2" =>  "V Vdc",
    "T2" =>  "I A",
    "U2" =>  "V Vdc",
    "V2" =>  "I A",
    "W2" =>  "V Vdc",
    "X2" =>  "I A",
    "Y2" =>  "V Vdc",
    "Z2" =>  "I A",
    "AA2" => "V Vdc",
    "AB2" => "I A",
    "AC2" => "Medida de Corriente (DC) PVDU",
    "AD2" => "Medida  de voltaje DC. entrada PVDU",
    "AE2" => "Medida Pico de  corriente DC. Recarga",
    "AF2" => "Corriente DC salida  display ESS500",
    "AG2" => "Voltaje DC salida Display  ESS500",
    "AH2" => "Capacidad de baterías  display ESS500",
    "AI2" => "Coeficiente de Carga Baterías display ESS500",
];

$sheet->mergeCells('E1:F1');
$sheet->mergeCells('G1:H1');
$sheet->mergeCells('I1:J1');
$sheet->mergeCells('K1:L1');
$sheet->mergeCells('M1:N1');
$sheet->mergeCells('O1:P1');
$sheet->mergeCells('Q1:R1');
$sheet->mergeCells('S1:T1');
$sheet->mergeCells('U1:V1');
$sheet->mergeCells('W1:X1');
$sheet->mergeCells('Y1:Z1');
$sheet->mergeCells('AA1:AB1');
$sheet->getStyle('E1:F1')->applyFromArray($tableHead);
$sheet->getStyle('G1:H1')->applyFromArray($tableHead);
$sheet->getStyle('I1:J1')->applyFromArray($tableHead);
$sheet->getStyle('K1:L1')->applyFromArray($tableHead);
$sheet->getStyle('M1:N1')->applyFromArray($tableHead);
$sheet->getStyle('O1:P1')->applyFromArray($tableHead);
$sheet->getStyle('Q1:R1')->applyFromArray($tableHead);
$sheet->getStyle('S1:T1')->applyFromArray($tableHead);
$sheet->getStyle('U1:V1')->applyFromArray($tableHead);
$sheet->getStyle('W1:X1')->applyFromArray($tableHead);
$sheet->getStyle('Y1:Z1')->applyFromArray($tableHead);
$sheet->getStyle('AA1:AB1')->applyFromArray($tableHead);
$sheet->setCellValue('E1', 'Cadena 1');
$sheet->setCellValue('G1', 'Array 2');
$sheet->setCellValue('I1', 'Array 3');
$sheet->setCellValue('K1', 'Array 4');
$sheet->setCellValue('M1', 'Array 1');
$sheet->setCellValue('O1', 'Array 2');
$sheet->setCellValue('Q1', 'Array 3');
$sheet->setCellValue('S1', 'Array 4');
$sheet->setCellValue('U1', 'Array 1');
$sheet->setCellValue('W1', 'Array 2');
$sheet->setCellValue('Y1', 'Array 3');
$sheet->setCellValue('AA1', 'Array 4');

$sheet->setTitle("Datos Rutinas");
$sheet->getStyle('A2:AI2')->applyFromArray($tableHead);
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

            $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
            $g3_01_01 = $g_desarrollo_g3->g3_01_01;
            $g3_01_02 = $g_desarrollo_g3->g3_01_02;
            $g3_01_03 = $g_desarrollo_g3->g3_01_03;
            $g3_01_04 = $g_desarrollo_g3->g3_01_04;
            $g3_01_05 = $g_desarrollo_g3->g3_01_05;
            $g3_01_06 = $g_desarrollo_g3->g3_01_06;
            $g3_01_07 = $g_desarrollo_g3->g3_01_07;
            $g3_01_08 = $g_desarrollo_g3->g3_01_08;
            $g3_01_09 = $g_desarrollo_g3->g3_01_09;
            $g3_01_10 = $g_desarrollo_g3->g3_01_10;
            $g3_01_11 = $g_desarrollo_g3->g3_01_11;
            $g3_01_12 = $g_desarrollo_g3->g3_01_12;
            $g3_01_13 = $g_desarrollo_g3->g3_01_13;
            $g3_01_14 = $g_desarrollo_g3->g3_01_14;
            $g3_01_15 = $g_desarrollo_g3->g3_01_15;
            $g3_01_16 = $g_desarrollo_g3->g3_01_16;
            $g3_01_17 = $g_desarrollo_g3->g3_01_17;
            $g3_01_18 = $g_desarrollo_g3->g3_01_18;
            $g3_01_19 = $g_desarrollo_g3->g3_01_19;
            $g3_01_20 = $g_desarrollo_g3->g3_01_20;
            $g3_01_21 = $g_desarrollo_g3->g3_01_21;
            $g3_01_22 = $g_desarrollo_g3->g3_01_22;
            $g3_01_23 = $g_desarrollo_g3->g3_01_23;
            $g3_01_24 = $g_desarrollo_g3->g3_01_24;
            $g3_02_01 = $g_desarrollo_g3->g3_02_01;
            $g3_02_02 = $g_desarrollo_g3->g3_02_02;
            $g3_03_01 = $g_desarrollo_g3->g3_03_01;
            $g3_03_02 = $g_desarrollo_g3->g3_03_02;
            $g3_04_01 = $g_desarrollo_g3->g3_04_01;
            $g3_04_02 = $g_desarrollo_g3->g3_04_02;
            $g3_05_01 = $g_desarrollo_g3->g3_05_01;



            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g3_01_01);
            $sheet->setCellValue('F'.$fila,  $g3_01_02);
            $sheet->setCellValue('G'.$fila,  $g3_01_03);
            $sheet->setCellValue('H'.$fila,  $g3_01_04);
            $sheet->setCellValue('I'.$fila,  $g3_01_05);
            $sheet->setCellValue('J'.$fila,  $g3_01_06);
            $sheet->setCellValue('K'.$fila,  $g3_01_07);
            $sheet->setCellValue('L'.$fila,  $g3_01_08);
            $sheet->setCellValue('M'.$fila,  $g3_01_09);
            $sheet->setCellValue('N'.$fila,  $g3_01_10);
            $sheet->setCellValue('O'.$fila,  $g3_01_11);
            $sheet->setCellValue('P'.$fila,  $g3_01_12);
            $sheet->setCellValue('Q'.$fila,  $g3_01_13);
            $sheet->setCellValue('R'.$fila,  $g3_01_14);
            $sheet->setCellValue('S'.$fila,  $g3_01_15);
            $sheet->setCellValue('T'.$fila,  $g3_01_16);
            $sheet->setCellValue('U'.$fila,  $g3_01_17);
            $sheet->setCellValue('V'.$fila,  $g3_01_18);
            $sheet->setCellValue('W'.$fila,  $g3_01_19);
            $sheet->setCellValue('X'.$fila,  $g3_01_20);
            $sheet->setCellValue('Y'.$fila,  $g3_01_21);
            $sheet->setCellValue('Z'.$fila,  $g3_01_22);
            $sheet->setCellValue('AA'.$fila, $g3_01_23);
            $sheet->setCellValue('AB'.$fila, $g3_01_24);
            $sheet->setCellValue('AC'.$fila, $g3_02_01);
            $sheet->setCellValue('AD'.$fila, $g3_02_02);
            $sheet->setCellValue('AE'.$fila, $g3_03_01);
            $sheet->setCellValue('AF'.$fila, $g3_03_02);
            $sheet->setCellValue('AG'.$fila, $g3_04_01);
            $sheet->setCellValue('AH'.$fila, $g3_04_02);
            $sheet->setCellValue('AI'.$fila, $g3_05_01);

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