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
    "E1" =>  "Temperatura del ambiente con instrumento [°C]",
    "F1" =>  "Temperatura de retorno con instrumento [°C]",
    "G1" =>  "Temperatura de inyección con instrumento [°C]",
    "H1" =>  "Temperatura de retorno registrado por el equipo [°C]",
    "I1" =>  "Temperatura de inyección registrado por el equipo [°C]",
    "J1" =>  "Setting de temperatura en el equipo [°C]",
    "K1" =>  "Setting de humedad relativa [%HR]",
    "L1" =>  "Medición de humedad relativa registrado por el equipo [%HR]",
    "M1" =>  "Medición de alta presión con instrumento [PSI]",
    "N1" =>  "Medición de baja presión con instrumento [PSI]",
    "O1" =>  "L1-N",
    "P1" =>  "L2-N",
    "Q1" =>  "L3-N",
    "R1" =>  "L1-L2",
    "S1" =>  "L1-L3",
    "T1" =>  "L2-L2",
    "U1" =>  "L1",
    "V1" =>  "L2",
    "W1" =>  "L3",
    "X1" =>  "N",
    "Y1" =>  "PE",
    "Z1" =>  "L1",
    "AA1" => "L2",
    "AB1" => "L3",
    "AC1" => "N",
    "AD1" => "PE",
    "AE1" => "L1",
    "AF1" => "L2",
    "AG1" => "L3",
    "AH1" => "Tension en Transformador (V) entrada",
    "AI1" => "Tension en Transformador (V) salida",
    "AJ1" => "MV1 [A]",
    "AK1" => "MV1 [V]",
    "AL1" => "MV2 [A]",
    "AM1" => "MV2 [V]",
    "AN1" => "MV3 [A]",
    "AO1" => "MV3 [V]",
    "AP1" => "Capacitor MV1",
    "AQ1" => "Capacitor MV2",
    "AR1" => "Capacitor MV3",
    "AS1" => "Voltaje Nominal",
    "AT1" => "Capacitor compresor",
    "AU1" => "Voltaje Nominal",
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


            $cm         = $row["cm"];
            $propertyId = $row["propertyId"];
            $sitioId    = $row["sitioId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};

            $g3_01_01 = $g_desarrollo_g3->g3_01_01;
            $g3_02_01 = $g_desarrollo_g3->g3_02_01;
            $g3_03_01 = $g_desarrollo_g3->g3_03_01;
            $g3_04_01 = $g_desarrollo_g3->g3_04_01;
            $g3_05_01 = $g_desarrollo_g3->g3_05_01;
            $g3_06_01 = $g_desarrollo_g3->g3_06_01;
            $g3_07_01 = $g_desarrollo_g3->g3_07_01;
            $g3_08_01 = $g_desarrollo_g3->g3_08_01;
            $g3_09_01 = $g_desarrollo_g3->g3_09_01;
            $g3_10_01 = $g_desarrollo_g3->g3_10_01;
            $g3_11_01 = $g_desarrollo_g3->g3_11_01;
            $g3_11_02 = $g_desarrollo_g3->g3_11_02;
            $g3_11_03 = $g_desarrollo_g3->g3_11_03;
            $g3_11_04 = $g_desarrollo_g3->g3_11_04;
            $g3_11_05 = $g_desarrollo_g3->g3_11_05;
            $g3_11_06 = $g_desarrollo_g3->g3_11_06;
            $g3_12_01 = $g_desarrollo_g3->g3_12_01;
            $g3_12_02 = $g_desarrollo_g3->g3_12_02;
            $g3_12_03 = $g_desarrollo_g3->g3_12_03;
            $g3_12_04 = $g_desarrollo_g3->g3_12_04;
            $g3_12_05 = $g_desarrollo_g3->g3_12_05;
            $g3_13_01 = $g_desarrollo_g3->g3_13_01;
            $g3_13_02 = $g_desarrollo_g3->g3_13_02;
            $g3_13_03 = $g_desarrollo_g3->g3_13_03;
            $g3_13_04 = $g_desarrollo_g3->g3_13_04;
            $g3_13_05 = $g_desarrollo_g3->g3_13_05;
            $g3_14_01 = $g_desarrollo_g3->g3_14_01;
            $g3_14_02 = $g_desarrollo_g3->g3_14_02;
            $g3_14_03 = $g_desarrollo_g3->g3_14_03;
            $g3_15_01 = $g_desarrollo_g3->g3_15_01;
            $g3_15_02 = $g_desarrollo_g3->g3_15_02;
            $g3_16_01 = $g_desarrollo_g3->g3_16_01;
            $g3_16_02 = $g_desarrollo_g3->g3_16_02;
            $g3_17_01 = $g_desarrollo_g3->g3_17_01;
            $g3_17_02 = $g_desarrollo_g3->g3_17_02;
            $g3_18_01 = $g_desarrollo_g3->g3_18_01;
            $g3_18_02 = $g_desarrollo_g3->g3_18_02;
            $g3_19_01 = $g_desarrollo_g3->g3_19_01;
            $g3_19_02 = $g_desarrollo_g3->g3_19_02;
            $g3_19_03 = $g_desarrollo_g3->g3_19_03;
            $g3_19_04 = $g_desarrollo_g3->g3_19_04;
            $g3_20_01 = $g_desarrollo_g3->g3_20_01;
            $g3_20_02 = $g_desarrollo_g3->g3_20_02;

            //,"g3_20_03": false

            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila,  $g3_01_01);
            $sheet->setCellValue('F'.$fila,  $g3_02_01);
            $sheet->setCellValue('G'.$fila,  $g3_03_01);
            $sheet->setCellValue('H'.$fila,  $g3_04_01);
            $sheet->setCellValue('I'.$fila,  $g3_05_01);
            $sheet->setCellValue('J'.$fila,  $g3_06_01);
            $sheet->setCellValue('K'.$fila,  $g3_07_01);
            $sheet->setCellValue('L'.$fila,  $g3_08_01);
            $sheet->setCellValue('M'.$fila,  $g3_09_01);
            $sheet->setCellValue('N'.$fila,  $g3_10_01);
            $sheet->setCellValue('O'.$fila,  $g3_11_01);
            $sheet->setCellValue('P'.$fila,  $g3_11_02);
            $sheet->setCellValue('Q'.$fila,  $g3_11_03);
            $sheet->setCellValue('R'.$fila,  $g3_11_04);
            $sheet->setCellValue('S'.$fila,  $g3_11_05);
            $sheet->setCellValue('T'.$fila,  $g3_11_06);
            $sheet->setCellValue('U'.$fila,  $g3_12_01);
            $sheet->setCellValue('V'.$fila,  $g3_12_02);
            $sheet->setCellValue('W'.$fila,  $g3_12_03);
            $sheet->setCellValue('X'.$fila,  $g3_12_04);
            $sheet->setCellValue('Y'.$fila,  $g3_12_05);
            $sheet->setCellValue('Z'.$fila,  $g3_13_01);
            $sheet->setCellValue('AA'.$fila, $g3_13_02);
            $sheet->setCellValue('AB'.$fila, $g3_13_03);
            $sheet->setCellValue('AC'.$fila, $g3_13_04);
            $sheet->setCellValue('AD'.$fila, $g3_13_05);
            $sheet->setCellValue('AE'.$fila, $g3_14_01);
            $sheet->setCellValue('AF'.$fila, $g3_14_02);
            $sheet->setCellValue('AG'.$fila, $g3_14_03);
            $sheet->setCellValue('AH'.$fila, $g3_15_01);
            $sheet->setCellValue('AI'.$fila, $g3_15_02);
            $sheet->setCellValue('AJ'.$fila, $g3_16_01);
            $sheet->setCellValue('AK'.$fila, $g3_16_02);
            $sheet->setCellValue('AL'.$fila, $g3_17_01);
            $sheet->setCellValue('AM'.$fila, $g3_17_02);
            $sheet->setCellValue('AN'.$fila, $g3_18_01);
            $sheet->setCellValue('AO'.$fila, $g3_18_02);
            $sheet->setCellValue('AP'.$fila, $g3_19_01);
            $sheet->setCellValue('AQ'.$fila, $g3_19_02);
            $sheet->setCellValue('AR'.$fila, $g3_19_03);
            $sheet->setCellValue('AS'.$fila, $g3_19_04);
            $sheet->setCellValue('AT'.$fila, $g3_20_01);
            $sheet->setCellValue('AU'.$fila, $g3_20_02);

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