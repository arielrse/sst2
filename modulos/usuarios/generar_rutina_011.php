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

    //Voltaje de salida del grupo sin carga [VAC]
    "E2" =>  "Fase 1-N",
    "F2" =>  "Fase 2-N",
    "G2" =>  "Fase 3-N",
    "H2" =>  "Neutro-PE",
    //Frecuencia sin carga [Hz]
    "I2" =>  "Fase 1-N",
    "J2" =>  "Fase 2-N",
    "K2" =>  "Fase 3-N",
    "L2" =>  "Neutro-PE",
    //Voltaje de salida del grupo con carga [VAC]
    "M2" =>  "Fase 1-N",
    "N2" =>  "Fase 2-N",
    "O2" =>  "Fase 3-N",
    "P2" =>  "Neutro-PE",
    //Corriente de salida del grupo en servicio [A]
    "Q2" =>  "Fase 1-N",
    "R2" =>  "Fase 2-N",
    "S2" =>  "Fase 3-N",
    "T2" =>  "Neutro-PE",
    //Frecuencia con carga [Hz]
    "U2" =>  "Fase 1-N",
    "V2" =>  "Fase 2-N",
    "W2" =>  "Fase 3-N",
    "X2" =>  "Neutro-PE",
    //Verificación de operativa de transferencia Manual
    "Y2" =>  "Operativo",
    "Z2" =>  "Falla",
    "AA2" => "Obs.",
];

$sheet->mergeCells('E1:H1');
$sheet->mergeCells('I1:L1');
$sheet->mergeCells('M1:P1');
$sheet->mergeCells('Q1:T1');
$sheet->mergeCells('U1:X1');
$sheet->mergeCells('Y1:AA1');
$sheet->getStyle('E1:H1')->applyFromArray($tableHead);
$sheet->getStyle('I1:L1')->applyFromArray($tableHead);
$sheet->getStyle('M1:P1')->applyFromArray($tableHead);
$sheet->getStyle('Q1:T1')->applyFromArray($tableHead);
$sheet->getStyle('U1:X1')->applyFromArray($tableHead);
$sheet->getStyle('Y1:AA1')->applyFromArray($tableHead);
$sheet->setCellValue('E1', 'Voltaje de salida del grupo sin carga [VAC]');
$sheet->setCellValue('I1', 'Frecuencia sin carga [Hz]');
$sheet->setCellValue('M1', 'Voltaje de salida del grupo con carga [VAC]');
$sheet->setCellValue('Q1', 'Corriente de salida del grupo en servicio [A]');
$sheet->setCellValue('U1', 'Frecuencia con carga [Hz]');
$sheet->setCellValue('Y1', 'Verificación de operativa de transferencia Manual');

$sheet->setTitle("Datos Rutinas");
$sheet->getStyle('A2:AA2')->applyFromArray($tableHead);
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

            $g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
            $g1_01_01_01 = $g_desarrollo_g1->g1_01_01_01;
            $g1_01_01_02 = $g_desarrollo_g1->g1_01_01_02;
            $g1_01_01_03 = $g_desarrollo_g1->g1_01_01_03;
            $g1_01_01_04 = $g_desarrollo_g1->g1_01_01_04;
            $g1_01_02_01 = $g_desarrollo_g1->g1_01_02_01;
            $g1_01_02_02 = $g_desarrollo_g1->g1_01_02_02;
            $g1_01_02_03 = $g_desarrollo_g1->g1_01_02_03;
            $g1_01_02_04 = $g_desarrollo_g1->g1_01_02_04;
            $g1_02_01_01 = $g_desarrollo_g1->g1_02_01_01;
            $g1_02_01_02 = $g_desarrollo_g1->g1_02_01_02;
            $g1_02_01_03 = $g_desarrollo_g1->g1_02_01_03;
            $g1_02_01_04 = $g_desarrollo_g1->g1_02_01_04;
            $g1_02_02_01 = $g_desarrollo_g1->g1_02_02_01;
            $g1_02_02_02 = $g_desarrollo_g1->g1_02_02_02;
            $g1_02_02_03 = $g_desarrollo_g1->g1_02_02_03;
            $g1_02_02_04 = $g_desarrollo_g1->g1_02_02_04;
            $g1_02_03_01 = $g_desarrollo_g1->g1_02_03_01;
            $g1_02_03_02 = $g_desarrollo_g1->g1_02_03_02;
            $g1_02_03_03 = $g_desarrollo_g1->g1_02_03_03;
            $g1_02_03_04 = $g_desarrollo_g1->g1_02_03_04;

            $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
            $g3_02_01_01 = $g_desarrollo_g3->g3_02_01_01;
            $g3_02_01_02 = $g_desarrollo_g3->g3_02_01_02;
            $g3_02_01_03 = $g_desarrollo_g3->g3_02_01_03;


            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g1_01_01_01);
            $sheet->setCellValue('F'.$fila,  $g1_01_01_02);
            $sheet->setCellValue('G'.$fila,  $g1_01_01_03);
            $sheet->setCellValue('H'.$fila,  $g1_01_01_04);
            $sheet->setCellValue('I'.$fila,  $g1_01_02_01);
            $sheet->setCellValue('J'.$fila,  $g1_01_02_02);
            $sheet->setCellValue('K'.$fila,  $g1_01_02_03);
            $sheet->setCellValue('L'.$fila,  $g1_01_02_04);
            $sheet->setCellValue('M'.$fila,  $g1_02_01_01);
            $sheet->setCellValue('N'.$fila,  $g1_02_01_02);
            $sheet->setCellValue('O'.$fila,  $g1_02_01_03);
            $sheet->setCellValue('P'.$fila,  $g1_02_01_04);
            $sheet->setCellValue('Q'.$fila,  $g1_02_02_01);
            $sheet->setCellValue('R'.$fila,  $g1_02_02_02);
            $sheet->setCellValue('S'.$fila,  $g1_02_02_03);
            $sheet->setCellValue('T'.$fila,  $g1_02_02_04);
            $sheet->setCellValue('U'.$fila,  $g1_02_03_01);
            $sheet->setCellValue('V'.$fila,  $g1_02_03_02);
            $sheet->setCellValue('W'.$fila,  $g1_02_03_03);
            $sheet->setCellValue('X'.$fila,  $g1_02_03_04);
            $sheet->setCellValue('Y'.$fila,  $g3_02_01_01);
            $sheet->setCellValue('Z'.$fila,  $g3_02_01_02);
            $sheet->setCellValue('AA'.$fila, $g3_02_01_03);

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