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
    "N2" =>  "Medición de Voltaje Neutro-Tierra (V)",
    "O2" =>  "Medida puesta a tierra Pilastra",
];


$sheet->mergeCells('E1:J1');
$sheet->mergeCells('K1:M1');
$sheet->getStyle('E1:J1')->applyFromArray($tableHead);
$sheet->getStyle('K1:M1')->applyFromArray($tableHead);

$sheet->setCellValue('E1', 'Medición de tensión en operación  ingreso medidor (V)');
$sheet->setCellValue('K1', 'Medición de corriente en operación medidor(A)');

$sheet->setTitle("Datos Rutinas");

$sheet->getStyle('A2:O2')->applyFromArray($tableHead);
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
            $g3_02_01 = $g_desarrollo_g3->g3_02_01;
            $g3_02_02 = $g_desarrollo_g3->g3_02_02;
            $g3_02_03 = $g_desarrollo_g3->g3_02_03;
            $g3_03_01 = $g_desarrollo_g3->g3_03_01;
            $g3_06_01 = $g_desarrollo_g3->g3_06_01;

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
            $sheet->setCellValue('K'.$fila,  $g3_02_01);
            $sheet->setCellValue('L'.$fila,  $g3_02_02);
            $sheet->setCellValue('M'.$fila,  $g3_02_03);
            $sheet->setCellValue('N'.$fila,  $g3_03_01);
            $sheet->setCellValue('O'.$fila,  $g3_06_01);

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