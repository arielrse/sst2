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
    "A1" =>  "Fecha de Mtto",
    "B1" =>  "CM/SCM",
    "C1" =>  "ID Sitio",
    "D1" =>  "Property_id",
    "E1" =>  "L1-N",
    "F1" =>  "L2-N",
    "G1" =>  "L3-N",
    "H1" =>  "L1-L2",
    "I1" =>  "L1-L3",
    "J1" =>  "L2-L2",
    "K1" =>  "L1",
    "L1" =>  "L2",
    "M1" =>  "L3",
    "N1" =>  "N",
    "O1" =>  "PE",
    "P1" =>  "L1",
    "Q1" =>  "L2",
    "R1" =>  "L3",
    "S1" =>  "N",
    "T1" =>  "PE",
    "U1" =>  "L1",
    "V1" =>  "L2",
    "W1" =>  "L3",
    "X1" =>  "Capacitor MV1",
    "Y1" =>  "Voltaje Nominal",

];

$sheet->setTitle("Datos Rutinas");

$sheet->getStyle('A1:Y1')->applyFromArray($tableHead);
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
            $g3_02_04 = $g_desarrollo_g3->g3_02_04;
            $g3_02_05 = $g_desarrollo_g3->g3_02_05;
            $g3_03_01 = $g_desarrollo_g3->g3_03_01;
            $g3_03_02 = $g_desarrollo_g3->g3_03_02;
            $g3_03_03 = $g_desarrollo_g3->g3_03_03;
            $g3_03_04 = $g_desarrollo_g3->g3_03_04;
            $g3_03_05 = $g_desarrollo_g3->g3_03_05;
            $g3_04_01 = $g_desarrollo_g3->g3_04_01;
            $g3_04_02 = $g_desarrollo_g3->g3_04_02;
            $g3_04_03 = $g_desarrollo_g3->g3_04_03;
            $g3_05_01 = $g_desarrollo_g3->g3_05_01;
            $g3_05_02 = $g_desarrollo_g3->g3_05_02;



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
            $sheet->setCellValue('N'.$fila,  $g3_02_04);
            $sheet->setCellValue('O'.$fila,  $g3_02_05);
            $sheet->setCellValue('P'.$fila,  $g3_03_01);
            $sheet->setCellValue('Q'.$fila,  $g3_03_02);
            $sheet->setCellValue('R'.$fila,  $g3_03_03);
            $sheet->setCellValue('S'.$fila,  $g3_03_04);
            $sheet->setCellValue('T'.$fila,  $g3_03_05);
            $sheet->setCellValue('U'.$fila,  $g3_04_01);
            $sheet->setCellValue('V'.$fila,  $g3_04_02);
            $sheet->setCellValue('W'.$fila,  $g3_04_03);
            $sheet->setCellValue('X'.$fila,  $g3_05_01);
            $sheet->setCellValue('Y'.$fila,  $g3_05_02);

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