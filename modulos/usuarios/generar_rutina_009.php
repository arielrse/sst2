<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;

$iddepartamento = $_POST['iddepartamento'];
$codeidform     = $_POST['codeidform'];
$fechainicio    = $_POST['fechainicio'];
$fechafin       = $_POST['fechafin'];

$arr = explode('|', $codeidform);
$codForm = $arr[0];
$idformulario = $arr[1];

$tableHead = [
    'font' => ['color' => ['rgb'=>'FFFFFF'], ],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '1F618D']],
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
    "E2" =>  "Registrar valor del Voltímetro",
    "F2" =>  "Registrar valor de Frecuencia",
    "G2" =>  "Registrar valor del Amperímetro",
    "H2" =>  "Tiempo de arranque automático y transferencia a carga (Segundos) T arranque",
    "I2" =>  "T transfieren",
    "J2" =>  "Tiempo de Re transferencia automática  y parada (Segundos) T retransfer",
    "K2" =>  "T parada",

    "L2" =>  "Si",
    "M2" =>  "No",
    "N2" =>  "Si",
    "O2" =>  "No",

    "P2" =>  "Si",
    "Q2" =>  "No",
    "R2" =>  "Si",
    "S2" =>  "No",

    "T2" =>  "Si",
    "U2" =>  "No",
    "V2" =>  "Si",
    "W2" =>  "No",

    "X2" =>  "Si",
    "Y2" =>  "No",
    "Z2" =>  "Si",
    "AA2" => "No",
];


$sheet->mergeCells('L1:M1');
$sheet->getStyle('L1:M1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('L1', 'Corte AC [ Local ]');
$sheet->mergeCells('N1:O1');
$sheet->getStyle('N1:O1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('N1', 'Corte AC [ Remoto ]');

$sheet->mergeCells('P1:Q1');
$sheet->getStyle('P1:Q1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('P1', 'Grupo Electrógeno Encendido [ Local ]');
$sheet->mergeCells('R1:S1');
$sheet->getStyle('R1:S1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('R1', 'Grupo Electrógeno Encendido [ Remoto ]');

$sheet->mergeCells('T1:U1');
$sheet->getStyle('T1:U1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('T1', 'Bajo Nivel de Combustible [ Local ]');
$sheet->mergeCells('V1:W1');
$sheet->getStyle('V1:W1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('V1', 'Bajo Nivel de Combustible [ Remoto ]');

$sheet->mergeCells('X1:Y1');
$sheet->getStyle('X1:Y1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('X1', 'Falla General [ Local ]');
$sheet->mergeCells('Z1:AA1');
$sheet->getStyle('Z1:AA1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
$sheet->setCellValue('Z1', 'Falla General [ Remoto ]');

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

            $g_desarrollo = $obj->{'g_desarrollo'};

            $g1_12_01 = $g_desarrollo->g1_12_01;
            $g1_12_02 = $g_desarrollo->g1_12_02;
            $g1_13_01 = $g_desarrollo->g1_13_01;
            $g1_14_01 = $g_desarrollo->g1_14_01;
            $g1_14_02 = $g_desarrollo->g1_14_02;
            $g1_15_01 = $g_desarrollo->g1_15_01;
            $g1_15_02 = $g_desarrollo->g1_15_02;

            $g1_16_01 = $g_desarrollo->g1_16_01;
            $g1_16_02 = $g_desarrollo->g1_16_02;
            $g1_16_03 = $g_desarrollo->g1_16_03;
            $g1_16_04 = $g_desarrollo->g1_16_04;
            $g1_17_01 = $g_desarrollo->g1_17_01;
            $g1_17_02 = $g_desarrollo->g1_17_02;
            $g1_17_03 = $g_desarrollo->g1_17_03;
            $g1_17_04 = $g_desarrollo->g1_17_04;
            $g1_18_01 = $g_desarrollo->g1_18_01;
            $g1_18_02 = $g_desarrollo->g1_18_02;
            $g1_18_03 = $g_desarrollo->g1_18_03;
            $g1_18_04 = $g_desarrollo->g1_18_04;
            $g1_19_01 = $g_desarrollo->g1_19_01;
            $g1_19_02 = $g_desarrollo->g1_19_02;
            $g1_19_03 = $g_desarrollo->g1_19_03;
            $g1_19_04 = $g_desarrollo->g1_19_04;



            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g1_12_01);
            $sheet->setCellValue('F'.$fila,  $g1_12_02);
            $sheet->setCellValue('G'.$fila,  $g1_13_01);
            $sheet->setCellValue('H'.$fila,  $g1_14_01);
            $sheet->setCellValue('I'.$fila,  $g1_14_02);
            $sheet->setCellValue('J'.$fila,  $g1_15_01);
            $sheet->setCellValue('K'.$fila,  $g1_15_02);
            $sheet->setCellValue('L'.$fila,  $g1_16_01);
            $sheet->setCellValue('M'.$fila,  $g1_16_02);
            $sheet->setCellValue('N'.$fila,  $g1_16_03);
            $sheet->setCellValue('O'.$fila,  $g1_16_04);
            $sheet->setCellValue('P'.$fila,  $g1_17_01);
            $sheet->setCellValue('Q'.$fila,  $g1_17_02);
            $sheet->setCellValue('R'.$fila,  $g1_17_03);
            $sheet->setCellValue('S'.$fila,  $g1_17_04);
            $sheet->setCellValue('T'.$fila,  $g1_18_01);
            $sheet->setCellValue('U'.$fila,  $g1_18_02);
            $sheet->setCellValue('V'.$fila,  $g1_18_03);
            $sheet->setCellValue('W'.$fila,  $g1_18_04);
            $sheet->setCellValue('X'.$fila,  $g1_19_01);
            $sheet->setCellValue('Y'.$fila,  $g1_19_02);
            $sheet->setCellValue('Z'.$fila,  $g1_19_03);
            $sheet->setCellValue('AA'.$fila, $g1_19_04);

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