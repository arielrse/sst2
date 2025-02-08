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
    //Registrar voltaje  AC de entrada
    "E2" =>  "L1-N",
    "F2" =>  "L2-N",
    "G2" =>  "L3-N",
    //Registrar de la corriente AC de entrada
    "H2" =>  "L1",
    "I2" =>  "L2",
    "J2" =>  "L3",

    "K2" =>  "Frecuencia de entrada AC [Hz]",
    "L2" =>  "Registro del voltaje DC del banco de baterías",
    "M2" =>  "Registro del voltaje  AC a la salida",
    "N2" =>  "Registro de la corriente DC de salida",
    "O2" =>  "Registro de la corriente AC a la salida",
    //Verificar y controlar la distribución de AC  UPS en tableros de la estación.
    "P2" =>  "Equilibrado",
    "Q2" =>  "Desequilibrado",
    //Revisión de sobrecalentamiento del cableado en AC y DC.
    "R2" =>  "Normal",
    "S2" =>  "Caliente",

    "T2" =>  "% de carga Pu/Pn",

    "U2" =>  "Si",
    "V2" =>  "No",
    "W2" =>  "Si",
    "X2" =>  "No",
    "Y2" =>  "Si",
    "Z2" =>  "No",
    "AA2" => "Si",
    "AB2" => "No",
    "AC2" => "Si",
    "AD2" => "No",
    "AE2" => "Si",
    "AF2" => "No",
];

$sheet->mergeCells('U1:V1');
$sheet->mergeCells('W1:X1');
$sheet->mergeCells('Y1:Z1');
$sheet->mergeCells('AA1:AB1');
$sheet->mergeCells('AC1:AD1');
$sheet->mergeCells('AE1:AF1');
$sheet->setCellValue('U1', 'Corte AC [ Local ]');
$sheet->setCellValue('W1', 'Corte AC [ Remoto ]');
$sheet->setCellValue('Y1', 'Baterias en Descarga [ Local ]');
$sheet->setCellValue('AA1', 'Baterias en Descarga [ Remoto ]');
$sheet->setCellValue('AC1', 'Falla Modulo [ Local ]');
$sheet->setCellValue('AE1', 'Falla Modulo [ Remoto ]');
$sheet->getStyle('U1:V1')->applyFromArray($tableHead);
$sheet->getStyle('W1:X1')->applyFromArray($tableHead);
$sheet->getStyle('Y1:Z1')->applyFromArray($tableHead);
$sheet->getStyle('AA1:AB1')->applyFromArray($tableHead);
$sheet->getStyle('AC1:AD1')->applyFromArray($tableHead);
$sheet->getStyle('AE1:AF1')->applyFromArray($tableHead);

$sheet->setTitle("Datos Rutinas");

$sheet->getStyle('A2:AF2')->applyFromArray($tableHead);
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
            $g1_13_01 = $g_desarrollo->g1_13_01;
            $g1_13_02 = $g_desarrollo->g1_13_02;
            $g1_13_03 = $g_desarrollo->g1_13_03;
            $g1_14_01 = $g_desarrollo->g1_14_01;
            $g1_14_02 = $g_desarrollo->g1_14_02;
            $g1_14_03 = $g_desarrollo->g1_14_03;
            $g1_15_01 = $g_desarrollo->g1_15_01;
            $g1_16_01 = $g_desarrollo->g1_16_01;
            $g1_16_02 = $g_desarrollo->g1_16_02;
            $g1_17_01 = $g_desarrollo->g1_17_01;
            $g1_17_02 = $g_desarrollo->g1_17_02;
            $g1_18_01 = $g_desarrollo->g1_18_01;
            $g1_18_02 = $g_desarrollo->g1_18_02;
            $g1_19_01 = $g_desarrollo->g1_19_01;
            $g1_19_02 = $g_desarrollo->g1_19_02;
            $g1_20_01 = $g_desarrollo->g1_20_01;
            $g1_21_01 = $g_desarrollo->g1_21_01;
            $g1_21_02 = $g_desarrollo->g1_21_02;
            $g1_21_03 = $g_desarrollo->g1_21_03;
            $g1_21_04 = $g_desarrollo->g1_21_04;
            $g1_22_01 = $g_desarrollo->g1_22_01;
            $g1_22_02 = $g_desarrollo->g1_22_02;
            $g1_22_03 = $g_desarrollo->g1_22_03;
            $g1_22_04 = $g_desarrollo->g1_22_04;
            $g1_23_01 = $g_desarrollo->g1_23_01;
            $g1_23_02 = $g_desarrollo->g1_23_02;
            $g1_23_03 = $g_desarrollo->g1_23_03;
            $g1_23_04 = $g_desarrollo->g1_23_04;



            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g1_13_01);
            $sheet->setCellValue('F'.$fila,  $g1_13_02);
            $sheet->setCellValue('G'.$fila,  $g1_13_03);
            $sheet->setCellValue('H'.$fila,  $g1_14_01);
            $sheet->setCellValue('I'.$fila,  $g1_14_02);
            $sheet->setCellValue('J'.$fila,  $g1_14_03);
            $sheet->setCellValue('K'.$fila,  $g1_15_01);
            $sheet->setCellValue('L'.$fila,  $g1_16_01);
            $sheet->setCellValue('M'.$fila,  $g1_16_02);
            $sheet->setCellValue('N'.$fila,  $g1_17_01);
            $sheet->setCellValue('O'.$fila,  $g1_17_02);
            $sheet->setCellValue('P'.$fila,  $g1_18_01);
            $sheet->setCellValue('Q'.$fila,  $g1_18_02);
            $sheet->setCellValue('R'.$fila,  $g1_19_01);
            $sheet->setCellValue('S'.$fila,  $g1_19_02);
            $sheet->setCellValue('T'.$fila,  $g1_20_01);
            $sheet->setCellValue('U'.$fila,  $g1_21_01);
            $sheet->setCellValue('V'.$fila,  $g1_21_02);
            $sheet->setCellValue('W'.$fila,  $g1_21_03);
            $sheet->setCellValue('X'.$fila,  $g1_21_04);
            $sheet->setCellValue('Y'.$fila,  $g1_22_01);
            $sheet->setCellValue('Z'.$fila,  $g1_22_02);
            $sheet->setCellValue('AA'.$fila, $g1_22_03);
            $sheet->setCellValue('AB'.$fila, $g1_22_04);
            $sheet->setCellValue('AC'.$fila, $g1_23_01);
            $sheet->setCellValue('AD'.$fila, $g1_23_02);
            $sheet->setCellValue('AE'.$fila, $g1_23_03);
            $sheet->setCellValue('AF'.$fila, $g1_23_04);

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