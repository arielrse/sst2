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
// Establecer tipo y tamaño de letra para toda la hoja
//$sheet->getStyle('A1:AZ10000')->getFont()->setName('Arial Narrow');
//$sheet->getStyle('A1:AZ10000')->getFont()->setSize(10);
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial Narrow');
$spreadsheet->getDefaultStyle()->getFont()->setSize(10);

$rutina000_titulos = [
    "A1" =>  "Fecha de Mtto",
    "B1" =>  "CM/SCM",
    "C1" =>  "ID Sitio",
    "D1" =>  "Property_id",
    "E1" =>  "Setting de corriente de carga a un banco de baterías",
    "F1" =>  "Setting de cantidad de bancos de batería",
    "G1" =>  "L1-N",
    "H1" =>  "L2-N",
    "I1" =>  "L3-N",
    "J1" =>  "L1-L2",
    "K1" =>  "L1-L3",
    "L1" =>  "L2-L2",
    "M1" =>  "L1",
    "N1" =>  "L2",
    "O1" =>  "L3",
    "P1" =>  "N",
    "Q1" =>  "PE",
    "R1" =>  "Voltaje de salida en el equipo DC",
    "S1" =>  "Corriente total de salida en el equipo DC",
    "T1" =>  "A Banco 1",
    "U1" =>  "A Banco 2",
    "V1" =>  "A Banco 3",
    "W1" =>  "A Banco 4",
    "X1" =>  "V DC Banco 1",
    "Y1" =>  "V DC Banco 2",
    "Z1" =>  "V DC Banco 3",
    "AA1" =>  "V DC Banco 4",
];

$sheet->setTitle("Datos Rutinas");

if ($codForm == '002'){
    $sheet->getStyle('A1:AA1')->applyFromArray($tableHead);
    foreach ($rutina000_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
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

        if ($codForm == '002'){
            $cm         = $row["cm"];
            $propertyId = $row["propertyId"];
            $sitioId    = $row["sitioId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
            $g3_01_01 = $g_desarrollo_g3->g3_01_01;
            $g3_02_01 = $g_desarrollo_g3->g3_02_01;

            $g3_04_01 = $g_desarrollo_g3->g3_04_01;
            $g3_04_02 = $g_desarrollo_g3->g3_04_02;
            $g3_04_03 = $g_desarrollo_g3->g3_04_03;
            $g3_04_04 = $g_desarrollo_g3->g3_04_04;
            $g3_04_05 = $g_desarrollo_g3->g3_04_05;
            $g3_04_06 = $g_desarrollo_g3->g3_04_06;

            $g3_05_01 = $g_desarrollo_g3->g3_05_01;
            $g3_05_02 = $g_desarrollo_g3->g3_05_02;
            $g3_05_03 = $g_desarrollo_g3->g3_05_03;
            $g3_05_04 = $g_desarrollo_g3->g3_05_04;
            $g3_05_05 = $g_desarrollo_g3->g3_05_05;

            $g3_06_01 = $g_desarrollo_g3->g3_06_01;
            $g3_07_01 = $g_desarrollo_g3->g3_07_01;

            $g3_08_01 = $g_desarrollo_g3->g3_08_01;
            $g3_08_02 = $g_desarrollo_g3->g3_08_02;
            $g3_08_03 = $g_desarrollo_g3->g3_08_03;
            $g3_08_04 = $g_desarrollo_g3->g3_08_04;
            $g3_09_01 = $g_desarrollo_g3->g3_09_01;
            $g3_09_02 = $g_desarrollo_g3->g3_09_02;
            $g3_09_03 = $g_desarrollo_g3->g3_09_03;
            $g3_09_04 = $g_desarrollo_g3->g3_09_04;


            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila, $g3_01_01);
            $sheet->setCellValue('F'.$fila, $g3_02_01);
            $sheet->setCellValue('G'.$fila, $g3_04_01);
            $sheet->setCellValue('H'.$fila, $g3_04_02);
            $sheet->setCellValue('I'.$fila, $g3_04_03);
            $sheet->setCellValue('J'.$fila, $g3_04_04);
            $sheet->setCellValue('K'.$fila, $g3_04_05);
            $sheet->setCellValue('L'.$fila, $g3_04_06);
            $sheet->setCellValue('M'.$fila, $g3_05_01);
            $sheet->setCellValue('N'.$fila, $g3_05_02);
            $sheet->setCellValue('O'.$fila, $g3_05_03);
            $sheet->setCellValue('P'.$fila, $g3_05_04);
            $sheet->setCellValue('Q'.$fila, $g3_05_05);
            $sheet->setCellValue('R'.$fila, $g3_06_01);
            $sheet->setCellValue('S'.$fila, $g3_07_01);
            $sheet->setCellValue('T'.$fila, $g3_08_01);
            $sheet->setCellValue('U'.$fila, $g3_08_02);
            $sheet->setCellValue('V'.$fila, $g3_08_03);
            $sheet->setCellValue('W'.$fila, $g3_08_04);
            $sheet->setCellValue('X'.$fila, $g3_09_01);
            $sheet->setCellValue('Y'.$fila, $g3_09_02);
            $sheet->setCellValue('Z'.$fila, $g3_09_03);
            $sheet->setCellValue('AA'.$fila, $g3_09_04);
        }

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