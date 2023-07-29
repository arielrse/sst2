<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;

$iddepartamento = $_POST['iddepartamento'];
//$codeidform     = $_POST['codeidform'];
$fechainicio    = $_POST['fechainicio'];
$fechafin       = $_POST['fechafin'];

//$arr = explode('|', $codeidform);
//$codForm = $arr[0];
//$idformulario = $arr[1];

$tableHead = [
    'font' => ['color' => ['rgb'=>'FFFFFF'], ],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '1F618D']],
];

$styleBold = [ 'font' => ['bold' => true,] ];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("Datos Sistema de Transmisión");

// Recuperando catastros de la bd

$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idrutina, cc.cabecera, s.nombre 
             FROM rutina015 cc
             LEFT JOIN evento e ON cc.idevento = e.idevento
             LEFT JOIN sitio s  ON e.idsitio = s.idsitio
             WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."' 
             AND s.iddepartamento = " . $iddepartamento . " ORDER BY s.idcentro, e.inicio";

$resultado = mysqli_query($conexion, $consulta);

$filaIDU  = 1;
$filaOdu1 = 1;
$filaOdu2 = 1;
$filaSat1 = 1;
$filaSat2 = 1;

while($row = mysqli_fetch_array($resultado)){

    $jsonData = $row["cabecera"];
    $fechaMtto = date("d/m/Y", strtotime($row['inicio']) );
    $obj = json_decode($jsonData);
    $json_OK =	json_last_error() == JSON_ERROR_NONE;

    if ($json_OK){

        $cm = $obj->cm;
        $sitioId = $obj->sitioId;
        $propertyId = $obj->propertyId;
        $c_fechaRealizacion = $obj->c_fechaRealizacion;

        /** ------------------------------------------------------------------------------- **/
        $d_micro_1 = $obj->{'d_micro_1'};
        $d1_01_01 = $d_micro_1->d1_01_01; $d1_01_02 = $d_micro_1->d1_01_02; $d1_01_03 = $d_micro_1->d1_01_03; $d1_01_04 = $d_micro_1->d1_01_04; $d1_01_05 = $d_micro_1->d1_01_05; $d1_01_06 = $d_micro_1->d1_01_06;
        $d1_02_01 = $d_micro_1->d1_02_01; $d1_02_02 = $d_micro_1->d1_02_02; $d1_02_03 = $d_micro_1->d1_02_03; $d1_02_04 = $d_micro_1->d1_02_04; $d1_02_05 = $d_micro_1->d1_02_05; $d1_02_06 = $d_micro_1->d1_02_06;
        $d1_03_01 = $d_micro_1->d1_03_01; $d1_03_02 = $d_micro_1->d1_03_02; $d1_03_03 = $d_micro_1->d1_03_03; $d1_03_04 = $d_micro_1->d1_03_04; $d1_03_05 = $d_micro_1->d1_03_05; $d1_03_06 = $d_micro_1->d1_03_06;
        $d1_04_01 = $d_micro_1->d1_04_01; $d1_04_02 = $d_micro_1->d1_04_02; $d1_04_03 = $d_micro_1->d1_04_03; $d1_04_04 = $d_micro_1->d1_04_04; $d1_04_05 = $d_micro_1->d1_04_05; $d1_04_06 = $d_micro_1->d1_04_06;
        $d1_05_01 = $d_micro_1->d1_05_01; $d1_05_02 = $d_micro_1->d1_05_02; $d1_05_03 = $d_micro_1->d1_05_03; $d1_05_04 = $d_micro_1->d1_05_04; $d1_05_05 = $d_micro_1->d1_05_05; $d1_05_06 = $d_micro_1->d1_05_06;
        $d1_06_01 = $d_micro_1->d1_06_01; $d1_06_02 = $d_micro_1->d1_06_02; $d1_06_03 = $d_micro_1->d1_06_03; $d1_06_04 = $d_micro_1->d1_06_04; $d1_06_05 = $d_micro_1->d1_06_05; $d1_06_06 = $d_micro_1->d1_06_06;
        $d1_07_01 = $d_micro_1->d1_07_01; $d1_07_02 = $d_micro_1->d1_07_02; $d1_07_03 = $d_micro_1->d1_07_03; $d1_07_04 = $d_micro_1->d1_07_04; $d1_07_05 = $d_micro_1->d1_07_05; $d1_07_06 = $d_micro_1->d1_07_06;
        $d1_08_01 = $d_micro_1->d1_08_01; $d1_08_02 = $d_micro_1->d1_08_02; $d1_08_03 = $d_micro_1->d1_08_03; $d1_08_04 = $d_micro_1->d1_08_04; $d1_08_05 = $d_micro_1->d1_08_05; $d1_08_06 = $d_micro_1->d1_08_06;
        $d1_09_01 = $d_micro_1->d1_09_01; $d1_09_02 = $d_micro_1->d1_09_02; $d1_09_03 = $d_micro_1->d1_09_03; $d1_09_04 = $d_micro_1->d1_09_04; $d1_09_05 = $d_micro_1->d1_09_05; $d1_09_06 = $d_micro_1->d1_09_06;
        $d1_10_01 = $d_micro_1->d1_10_01; $d1_10_02 = $d_micro_1->d1_10_02; $d1_10_03 = $d_micro_1->d1_10_03; $d1_10_04 = $d_micro_1->d1_10_04; $d1_10_05 = $d_micro_1->d1_10_05; $d1_10_06 = $d_micro_1->d1_10_06;
        $d1_11_01 = $d_micro_1->d1_11_01; $d1_11_02 = $d_micro_1->d1_11_02; $d1_11_03 = $d_micro_1->d1_11_03; $d1_11_04 = $d_micro_1->d1_11_04; $d1_11_05 = $d_micro_1->d1_11_05; $d1_11_06 = $d_micro_1->d1_11_06;
        $d1_12_01 = $d_micro_1->d1_12_01; $d1_12_02 = $d_micro_1->d1_12_02; $d1_12_03 = $d_micro_1->d1_12_03; $d1_12_04 = $d_micro_1->d1_12_04; $d1_12_05 = $d_micro_1->d1_12_05; $d1_12_06 = $d_micro_1->d1_12_06;
        $d1_13_01 = $d_micro_1->d1_13_01; $d1_13_02 = $d_micro_1->d1_13_02; $d1_13_03 = $d_micro_1->d1_13_03; $d1_13_04 = $d_micro_1->d1_13_04; $d1_13_05 = $d_micro_1->d1_13_05; $d1_13_06 = $d_micro_1->d1_13_06;
        $d1_14_01 = $d_micro_1->d1_14_01; $d1_14_02 = $d_micro_1->d1_14_02; $d1_14_03 = $d_micro_1->d1_14_03; $d1_14_04 = $d_micro_1->d1_14_04; $d1_14_05 = $d_micro_1->d1_14_05; $d1_14_06 = $d_micro_1->d1_14_06;
        $d1_15_01 = $d_micro_1->d1_15_01; $d1_15_02 = $d_micro_1->d1_15_02; $d1_15_03 = $d_micro_1->d1_15_03; $d1_15_04 = $d_micro_1->d1_15_04; $d1_15_05 = $d_micro_1->d1_15_05; $d1_15_06 = $d_micro_1->d1_15_06;

        $matrizIdu = array (
            array("IDU", "NE_Origen", "NE_Destino", "Fabricante", "Modelo", "Alarmas", "Estado ML_MW"),
            array("1", $d1_01_01, $d1_01_02, $d1_01_03, $d1_01_04, $d1_01_05, $d1_01_06),
            array("2", $d1_02_01, $d1_02_02, $d1_02_03, $d1_02_04, $d1_02_05, $d1_02_06),
            array("3", $d1_03_01, $d1_03_02, $d1_03_03, $d1_03_04, $d1_03_05, $d1_03_06),
            array("4", $d1_04_01, $d1_04_02, $d1_04_03, $d1_04_04, $d1_04_05, $d1_04_06),
            array("5", $d1_05_01, $d1_05_02, $d1_05_03, $d1_05_04, $d1_05_05, $d1_05_06),
            array("6", $d1_06_01, $d1_06_02, $d1_06_03, $d1_06_04, $d1_06_05, $d1_06_06),
            array("7", $d1_07_01, $d1_07_02, $d1_07_03, $d1_07_04, $d1_07_05, $d1_07_06),
            array("8", $d1_08_01, $d1_08_02, $d1_08_03, $d1_08_04, $d1_08_05, $d1_08_06),
            array("9", $d1_09_01, $d1_09_02, $d1_09_03, $d1_09_04, $d1_09_05, $d1_09_06),
            array("10", $d1_10_01, $d1_10_02, $d1_10_03, $d1_10_04, $d1_10_05, $d1_10_06),
            array("11", $d1_11_01, $d1_11_02, $d1_11_03, $d1_11_04, $d1_11_05, $d1_11_06),
            array("12", $d1_12_01, $d1_12_02, $d1_12_03, $d1_12_04, $d1_12_05, $d1_12_06),
            array("13", $d1_13_01, $d1_13_02, $d1_13_03, $d1_13_04, $d1_13_05, $d1_13_06),
            array("14", $d1_14_01, $d1_14_02, $d1_14_03, $d1_14_04, $d1_14_05, $d1_14_06),
            array("15", $d1_15_01, $d1_15_02, $d1_15_03, $d1_15_04, $d1_15_05, $d1_15_06)
        );

        $sheet->setCellValue('A'.$filaIDU, $fechaMtto . " - " . $cm . " - " . $sitioId . " - " . $propertyId);
        $spreadsheet->getActiveSheet()->getStyle('A'.$filaIDU)->applyFromArray($styleBold);
        $filaIDU++;
        $sheet->setCellValue('A'.$filaIDU, "Sistema de Transporte Microondas MW");
        $spreadsheet->getActiveSheet()->getStyle('A'.$filaIDU)->applyFromArray($styleBold);
        $filaIDU++;
        for ($row = 0; $row < 16; $row++) {
            if ( $row == 0) $sheet->getStyle("A".$filaIDU.":G".$filaIDU)->applyFromArray($tableHead);
            for ($col = 0; $col <= 6; $col++) {
                switch ($col) {
                    case 0: $sheet->setCellValue('A'.$filaIDU, $matrizIdu[$row][$col]);
                    case 1: $sheet->setCellValue('B'.$filaIDU, $matrizIdu[$row][$col]);
                    case 2: $sheet->setCellValue('C'.$filaIDU, $matrizIdu[$row][$col]);
                    case 3: $sheet->setCellValue('D'.$filaIDU, $matrizIdu[$row][$col]);
                    case 4: $sheet->setCellValue('E'.$filaIDU, $matrizIdu[$row][$col]);
                    case 5: $sheet->setCellValue('F'.$filaIDU, $matrizIdu[$row][$col]);
                    case 6: $sheet->setCellValue('G'.$filaIDU, $matrizIdu[$row][$col]);
                }
            }
            $filaIDU++;
        }

        /** ------------------------------------------------------------------------------- **/
        $d_micro_2 = $obj->{'d_micro_2'};
        $d2_01_01 = $d_micro_2->d2_01_01; $d2_01_02 = $d_micro_2->d2_01_02; $d2_01_03 = $d_micro_2->d2_01_03; $d2_01_04 = $d_micro_2->d2_01_04; $d2_01_05 = $d_micro_2->d2_01_05; $d2_01_06 = $d_micro_2->d2_01_06;
        $d2_02_01 = $d_micro_2->d2_02_01; $d2_02_02 = $d_micro_2->d2_02_02; $d2_02_03 = $d_micro_2->d2_02_03; $d2_02_04 = $d_micro_2->d2_02_04; $d2_02_05 = $d_micro_2->d2_02_05; $d2_02_06 = $d_micro_2->d2_02_06;
        $d2_03_01 = $d_micro_2->d2_03_01; $d2_03_02 = $d_micro_2->d2_03_02; $d2_03_03 = $d_micro_2->d2_03_03; $d2_03_04 = $d_micro_2->d2_03_04; $d2_03_05 = $d_micro_2->d2_03_05; $d2_03_06 = $d_micro_2->d2_03_06;
        $d2_04_01 = $d_micro_2->d2_04_01; $d2_04_02 = $d_micro_2->d2_04_02; $d2_04_03 = $d_micro_2->d2_04_03; $d2_04_04 = $d_micro_2->d2_04_04; $d2_04_05 = $d_micro_2->d2_04_05; $d2_04_06 = $d_micro_2->d2_04_06;
        $d2_05_01 = $d_micro_2->d2_05_01; $d2_05_02 = $d_micro_2->d2_05_02; $d2_05_03 = $d_micro_2->d2_05_03; $d2_05_04 = $d_micro_2->d2_05_04; $d2_05_05 = $d_micro_2->d2_05_05; $d2_05_06 = $d_micro_2->d2_05_06;
        $d2_06_01 = $d_micro_2->d2_06_01; $d2_06_02 = $d_micro_2->d2_06_02; $d2_06_03 = $d_micro_2->d2_06_03; $d2_06_04 = $d_micro_2->d2_06_04; $d2_06_05 = $d_micro_2->d2_06_05; $d2_06_06 = $d_micro_2->d2_06_06;
        $d2_07_01 = $d_micro_2->d2_07_01; $d2_07_02 = $d_micro_2->d2_07_02; $d2_07_03 = $d_micro_2->d2_07_03; $d2_07_04 = $d_micro_2->d2_07_04; $d2_07_05 = $d_micro_2->d2_07_05; $d2_07_06 = $d_micro_2->d2_07_06;
        $d2_08_01 = $d_micro_2->d2_08_01; $d2_08_02 = $d_micro_2->d2_08_02; $d2_08_03 = $d_micro_2->d2_08_03; $d2_08_04 = $d_micro_2->d2_08_04; $d2_08_05 = $d_micro_2->d2_08_05; $d2_08_06 = $d_micro_2->d2_08_06;
        $d2_09_01 = $d_micro_2->d2_09_01; $d2_09_02 = $d_micro_2->d2_09_02; $d2_09_03 = $d_micro_2->d2_09_03; $d2_09_04 = $d_micro_2->d2_09_04; $d2_09_05 = $d_micro_2->d2_09_05; $d2_09_06 = $d_micro_2->d2_09_06;
        $d2_10_01 = $d_micro_2->d2_10_01; $d2_10_02 = $d_micro_2->d2_10_02; $d2_10_03 = $d_micro_2->d2_10_03; $d2_10_04 = $d_micro_2->d2_10_04; $d2_10_05 = $d_micro_2->d2_10_05; $d2_10_06 = $d_micro_2->d2_10_06;
        $d2_11_01 = $d_micro_2->d2_11_01; $d2_11_02 = $d_micro_2->d2_11_02; $d2_11_03 = $d_micro_2->d2_11_03; $d2_11_04 = $d_micro_2->d2_11_04; $d2_11_05 = $d_micro_2->d2_11_05; $d2_11_06 = $d_micro_2->d2_11_06;
        $d2_12_01 = $d_micro_2->d2_12_01; $d2_12_02 = $d_micro_2->d2_12_02; $d2_12_03 = $d_micro_2->d2_12_03; $d2_12_04 = $d_micro_2->d2_12_04; $d2_12_05 = $d_micro_2->d2_12_05; $d2_12_06 = $d_micro_2->d2_12_06;
        $d2_13_01 = $d_micro_2->d2_13_01; $d2_13_02 = $d_micro_2->d2_13_02; $d2_13_03 = $d_micro_2->d2_13_03; $d2_13_04 = $d_micro_2->d2_13_04; $d2_13_05 = $d_micro_2->d2_13_05; $d2_13_06 = $d_micro_2->d2_13_06;
        $d2_14_01 = $d_micro_2->d2_14_01; $d2_14_02 = $d_micro_2->d2_14_02; $d2_14_03 = $d_micro_2->d2_14_03; $d2_14_04 = $d_micro_2->d2_14_04; $d2_14_05 = $d_micro_2->d2_14_05; $d2_14_06 = $d_micro_2->d2_14_06;
        $d2_15_01 = $d_micro_2->d2_15_01; $d2_15_02 = $d_micro_2->d2_15_02; $d2_15_03 = $d_micro_2->d2_15_03; $d2_15_04 = $d_micro_2->d2_15_04; $d2_15_05 = $d_micro_2->d2_15_05; $d2_15_06 = $d_micro_2->d2_15_06;

        $matrizOdu1 = array (
            array("ODU", "NE_Origen", "NE_Destino", "Fabricante", "Modelo", "Frecuencia Tx-Origen (Mhz)", "Frecuencia Tx-Destino (Mhz)"),
            array(" 1", $d2_01_01, $d2_01_02, $d2_01_03, $d2_01_04, $d2_01_05, $d2_01_06),
            array(" 2", $d2_02_01, $d2_02_02, $d2_02_03, $d2_02_04, $d2_02_05, $d2_02_06),
            array(" 3", $d2_03_01, $d2_03_02, $d2_03_03, $d2_03_04, $d2_03_05, $d2_03_06),
            array(" 4", $d2_04_01, $d2_04_02, $d2_04_03, $d2_04_04, $d2_04_05, $d2_04_06),
            array(" 5", $d2_05_01, $d2_05_02, $d2_05_03, $d2_05_04, $d2_05_05, $d2_05_06),
            array(" 6", $d2_06_01, $d2_06_02, $d2_06_03, $d2_06_04, $d2_06_05, $d2_06_06),
            array(" 7", $d2_07_01, $d2_07_02, $d2_07_03, $d2_07_04, $d2_07_05, $d2_07_06),
            array(" 8", $d2_08_01, $d2_08_02, $d2_08_03, $d2_08_04, $d2_08_05, $d2_08_06),
            array(" 9", $d2_09_01, $d2_09_02, $d2_09_03, $d2_09_04, $d2_09_05, $d2_09_06),
            array("10", $d2_10_01, $d2_10_02, $d2_10_03, $d2_10_04, $d2_10_05, $d2_10_06),
            array("11", $d2_11_01, $d2_11_02, $d2_11_03, $d2_11_04, $d2_11_05, $d2_11_06),
            array("12", $d2_12_01, $d2_12_02, $d2_12_03, $d2_12_04, $d2_12_05, $d2_12_06),
            array("13", $d2_13_01, $d2_13_02, $d2_13_03, $d2_13_04, $d2_13_05, $d2_13_06),
            array("14", $d2_14_01, $d2_14_02, $d2_14_03, $d2_14_04, $d2_14_05, $d2_14_06),
            array("15", $d2_15_01, $d2_15_02, $d2_15_03, $d2_15_04, $d2_15_05, $d2_15_06)
        );

        //$sheet->setCellValue('I'.$filaOdu1, $cm . " - " . $sitioId . " - " . $propertyId);
        $filaOdu1++;
        $sheet->setCellValue('I'.$filaOdu1, "Sistema de Transporte Microondas MW");
        $spreadsheet->getActiveSheet()->getStyle('I'.$filaOdu1)->applyFromArray($styleBold);
        $filaOdu1++;
        for ($row = 0; $row < 16; $row++) {
            if ( $row == 0) $sheet->getStyle("I".$filaOdu1.":O".$filaOdu1)->applyFromArray($tableHead);
            for ($col = 0; $col <= 6; $col++) {
                switch ($col) {
                    case 0: $sheet->setCellValue('I'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 1: $sheet->setCellValue('J'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 2: $sheet->setCellValue('K'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 3: $sheet->setCellValue('L'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 4: $sheet->setCellValue('M'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 5: $sheet->setCellValue('N'.$filaOdu1, $matrizOdu1[$row][$col]);
                    case 6: $sheet->setCellValue('O'.$filaOdu1, $matrizOdu1[$row][$col]);
                }
            }
            $filaOdu1++;
        }

        /** ------------------------------------------------------------------------------- **/
        /** ------------------------------------------------------------------------------- **/
        $d_micro_3 = $obj->{'d_micro_3'};
        $d3_01_01 = $d_micro_3->d3_01_01; $d3_01_02 = $d_micro_3->d3_01_02; $d3_01_03 = $d_micro_3->d3_01_03; $d3_01_04 = $d_micro_3->d3_01_04; $d3_01_05 = $d_micro_3->d3_01_05; $d3_01_06 = $d_micro_3->d3_01_06; $d3_01_07 = $d_micro_3->d3_01_07;
        $d3_02_01 = $d_micro_3->d3_02_01; $d3_02_02 = $d_micro_3->d3_02_02; $d3_02_03 = $d_micro_3->d3_02_03; $d3_02_04 = $d_micro_3->d3_02_04; $d3_02_05 = $d_micro_3->d3_02_05; $d3_02_06 = $d_micro_3->d3_02_06; $d3_02_07 = $d_micro_3->d3_02_07;
        $d3_03_01 = $d_micro_3->d3_03_01; $d3_03_02 = $d_micro_3->d3_03_02; $d3_03_03 = $d_micro_3->d3_03_03; $d3_03_04 = $d_micro_3->d3_03_04; $d3_03_05 = $d_micro_3->d3_03_05; $d3_03_06 = $d_micro_3->d3_03_06; $d3_03_07 = $d_micro_3->d3_03_07;
        $d3_04_01 = $d_micro_3->d3_04_01; $d3_04_02 = $d_micro_3->d3_04_02; $d3_04_03 = $d_micro_3->d3_04_03; $d3_04_04 = $d_micro_3->d3_04_04; $d3_04_05 = $d_micro_3->d3_04_05; $d3_04_06 = $d_micro_3->d3_04_06; $d3_04_07 = $d_micro_3->d3_04_07;
        $d3_05_01 = $d_micro_3->d3_05_01; $d3_05_02 = $d_micro_3->d3_05_02; $d3_05_03 = $d_micro_3->d3_05_03; $d3_05_04 = $d_micro_3->d3_05_04; $d3_05_05 = $d_micro_3->d3_05_05; $d3_05_06 = $d_micro_3->d3_05_06; $d3_05_07 = $d_micro_3->d3_05_07;
        $d3_06_01 = $d_micro_3->d3_06_01; $d3_06_02 = $d_micro_3->d3_06_02; $d3_06_03 = $d_micro_3->d3_06_03; $d3_06_04 = $d_micro_3->d3_06_04; $d3_06_05 = $d_micro_3->d3_06_05; $d3_06_06 = $d_micro_3->d3_06_06; $d3_06_07 = $d_micro_3->d3_06_07;
        $d3_07_01 = $d_micro_3->d3_07_01; $d3_07_02 = $d_micro_3->d3_07_02; $d3_07_03 = $d_micro_3->d3_07_03; $d3_07_04 = $d_micro_3->d3_07_04; $d3_07_05 = $d_micro_3->d3_07_05; $d3_07_06 = $d_micro_3->d3_07_06; $d3_07_07 = $d_micro_3->d3_07_07;
        $d3_08_01 = $d_micro_3->d3_08_01; $d3_08_02 = $d_micro_3->d3_08_02; $d3_08_03 = $d_micro_3->d3_08_03; $d3_08_04 = $d_micro_3->d3_08_04; $d3_08_05 = $d_micro_3->d3_08_05; $d3_08_06 = $d_micro_3->d3_08_06; $d3_08_07 = $d_micro_3->d3_08_07;
        $d3_09_01 = $d_micro_3->d3_09_01; $d3_09_02 = $d_micro_3->d3_09_02; $d3_09_03 = $d_micro_3->d3_09_03; $d3_09_04 = $d_micro_3->d3_09_04; $d3_09_05 = $d_micro_3->d3_09_05; $d3_09_06 = $d_micro_3->d3_09_06; $d3_09_07 = $d_micro_3->d3_09_07;
        $d3_10_01 = $d_micro_3->d3_10_01; $d3_10_02 = $d_micro_3->d3_10_02; $d3_10_03 = $d_micro_3->d3_10_03; $d3_10_04 = $d_micro_3->d3_10_04; $d3_10_05 = $d_micro_3->d3_10_05; $d3_10_06 = $d_micro_3->d3_10_06; $d3_10_07 = $d_micro_3->d3_10_07;
        $d3_11_01 = $d_micro_3->d3_11_01; $d3_11_02 = $d_micro_3->d3_11_02; $d3_11_03 = $d_micro_3->d3_11_03; $d3_11_04 = $d_micro_3->d3_11_04; $d3_11_05 = $d_micro_3->d3_11_05; $d3_11_06 = $d_micro_3->d3_11_06; $d3_11_07 = $d_micro_3->d3_11_07;
        $d3_12_01 = $d_micro_3->d3_12_01; $d3_12_02 = $d_micro_3->d3_12_02; $d3_12_03 = $d_micro_3->d3_12_03; $d3_12_04 = $d_micro_3->d3_12_04; $d3_12_05 = $d_micro_3->d3_12_05; $d3_12_06 = $d_micro_3->d3_12_06; $d3_12_07 = $d_micro_3->d3_12_07;
        $d3_13_01 = $d_micro_3->d3_13_01; $d3_13_02 = $d_micro_3->d3_13_02; $d3_13_03 = $d_micro_3->d3_13_03; $d3_13_04 = $d_micro_3->d3_13_04; $d3_13_05 = $d_micro_3->d3_13_05; $d3_13_06 = $d_micro_3->d3_13_06; $d3_13_07 = $d_micro_3->d3_13_07;
        $d3_14_01 = $d_micro_3->d3_14_01; $d3_14_02 = $d_micro_3->d3_14_02; $d3_14_03 = $d_micro_3->d3_14_03; $d3_14_04 = $d_micro_3->d3_14_04; $d3_14_05 = $d_micro_3->d3_14_05; $d3_14_06 = $d_micro_3->d3_14_06; $d3_14_07 = $d_micro_3->d3_14_07;
        $d3_15_01 = $d_micro_3->d3_15_01; $d3_15_02 = $d_micro_3->d3_15_02; $d3_15_03 = $d_micro_3->d3_15_03; $d3_15_04 = $d_micro_3->d3_15_04; $d3_15_05 = $d_micro_3->d3_15_05; $d3_15_06 = $d_micro_3->d3_15_06; $d3_15_07 = $d_micro_3->d3_15_07;

        $matrizOdu2 = array (
            array("ODU", "Tipo de Radio MW", "Azimuth/Tilt", "Niveles de Potencia TX/RX", "Valor XPI (20-35)dB", "Valor SNIR (>40dB)", "Diámetro Antena [m]", "Altura de Antena [m]"),
            array(" 1", $d3_01_01, $d3_01_02, $d3_01_03, $d3_01_04, $d3_01_05, $d3_01_06, $d3_01_07),
            array(" 2", $d3_02_01, $d3_02_02, $d3_02_03, $d3_02_04, $d3_02_05, $d3_02_06, $d3_02_07),
            array(" 3", $d3_03_01, $d3_03_02, $d3_03_03, $d3_03_04, $d3_03_05, $d3_03_06, $d3_03_07),
            array(" 4", $d3_04_01, $d3_04_02, $d3_04_03, $d3_04_04, $d3_04_05, $d3_04_06, $d3_04_07),
            array(" 5", $d3_05_01, $d3_05_02, $d3_05_03, $d3_05_04, $d3_05_05, $d3_05_06, $d3_05_07),
            array(" 6", $d3_06_01, $d3_06_02, $d3_06_03, $d3_06_04, $d3_06_05, $d3_06_06, $d3_06_07),
            array(" 7", $d3_07_01, $d3_07_02, $d3_07_03, $d3_07_04, $d3_07_05, $d3_07_06, $d3_07_07),
            array(" 8", $d3_08_01, $d3_08_02, $d3_08_03, $d3_08_04, $d3_08_05, $d3_08_06, $d3_08_07),
            array(" 9", $d3_09_01, $d3_09_02, $d3_09_03, $d3_09_04, $d3_09_05, $d3_09_06, $d3_09_07),
            array("10", $d3_10_01, $d3_10_02, $d3_10_03, $d3_10_04, $d3_10_05, $d3_10_06, $d3_10_07),
            array("11", $d3_11_01, $d3_11_02, $d3_11_03, $d3_11_04, $d3_11_05, $d3_11_06, $d3_11_07),
            array("12", $d3_12_01, $d3_12_02, $d3_12_03, $d3_12_04, $d3_12_05, $d3_12_06, $d3_12_07),
            array("13", $d3_13_01, $d3_13_02, $d3_13_03, $d3_13_04, $d3_13_05, $d3_13_06, $d3_13_07),
            array("14", $d3_14_01, $d3_14_02, $d3_14_03, $d3_14_04, $d3_14_05, $d3_14_06, $d3_14_07),
            array("15", $d3_15_01, $d3_15_02, $d3_15_03, $d3_15_04, $d3_15_05, $d3_15_06, $d3_15_07)
        );

        //$sheet->setCellValue('Q'.$filaOdu2, $cm . " - " . $sitioId . " - " . $propertyId);
        $filaOdu2++;
        $sheet->setCellValue('Q'.$filaOdu2, "Sistema de Transporte Microondas MW");
        $spreadsheet->getActiveSheet()->getStyle('Q'.$filaOdu2)->applyFromArray($styleBold);
        $filaOdu2++;
        for ($row = 0; $row < 16; $row++) {
            if ( $row == 0) $sheet->getStyle("Q".$filaOdu2.":X".$filaOdu2)->applyFromArray($tableHead);
            for ($col = 0; $col <= 7; $col++) {
                switch ($col) {
                    case 0: $sheet->setCellValue('Q'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 1: $sheet->setCellValue('R'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 2: $sheet->setCellValue('S'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 3: $sheet->setCellValue('T'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 4: $sheet->setCellValue('U'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 5: $sheet->setCellValue('V'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 6: $sheet->setCellValue('W'.$filaOdu2, $matrizOdu2[$row][$col]);
                    case 7: $sheet->setCellValue('X'.$filaOdu2, $matrizOdu2[$row][$col]);
                }
            }
            $filaOdu2++;
        }

        /** ------------------------------------------------------------------------------- **/
        $f_satelital_f2 = $obj->{'f_satelital_f2'};
        $f2_01_01 = $f_satelital_f2->f2_01_01; $f2_01_02 = $f_satelital_f2->f2_01_02;
        $f2_02_01 = $f_satelital_f2->f2_02_01; $f2_02_02 = $f_satelital_f2->f2_02_02;
        $f2_03_01 = $f_satelital_f2->f2_03_01; $f2_03_02 = $f_satelital_f2->f2_03_02;
        $f2_04_01 = $f_satelital_f2->f2_04_01; $f2_04_02 = $f_satelital_f2->f2_04_02;
        $f2_05_01 = $f_satelital_f2->f2_05_01; $f2_05_02 = $f_satelital_f2->f2_05_02;
        $f2_06_01 = $f_satelital_f2->f2_06_01; $f2_06_02 = $f_satelital_f2->f2_06_02;
        $f2_07_01 = $f_satelital_f2->f2_07_01; $f2_07_02 = $f_satelital_f2->f2_07_02;
        $f2_08_01 = $f_satelital_f2->f2_08_01; $f2_08_02 = $f_satelital_f2->f2_08_02;

        $matrizSat1 = array (
            array("Item", "Marca", "Estado"),
            array("Modem", $f2_01_01, $f2_01_02),
            array("Fuente de alimentación modem", $f2_02_01, $f2_02_02),
            array("BUC", $f2_03_01, $f2_03_02),
            array("LNB", $f2_04_01, $f2_04_02),
            array("Antena Parabólica", $f2_05_01, $f2_05_02),
            array("Inversor de -48 v a 220 v", $f2_06_01, $f2_06_02),
            array("Cable coaxial TX/RX", $f2_07_01, $f2_07_02),
            array("Conectores F", $f2_08_01, $f2_08_02),

        );

        //$sheet->setCellValue('Z'.$filaSat1, $cm . " - " . $sitioId . " - " . $propertyId);
        //$filaSat1 = $filaSat1+2;
        $filaSat1++;
        $sheet->setCellValue('Z'.$filaSat1, "Sistema SATELITAL");
        $spreadsheet->getActiveSheet()->getStyle('Z'.$filaSat1)->applyFromArray($styleBold);
        $filaSat1++;
        for ($row = 0; $row < 9; $row++) {
            if ( $row == 0) $sheet->getStyle("Z".$filaSat1.":AB".$filaSat1)->applyFromArray($tableHead);
            for ($col = 0; $col < 3; $col++) {
                switch ($col) {
                    case 0: $sheet->setCellValue('Z'.$filaSat1, $matrizSat1[$row][$col]);
                    case 1: $sheet->setCellValue('AA'.$filaSat1, $matrizSat1[$row][$col]);
                    case 2: $sheet->setCellValue('AB'.$filaSat1, $matrizSat1[$row][$col]);
                }
            }
            $filaSat1++;
        }
        $filaSat1 = $filaSat1+7;
        /** ------------------------------------------------------------------------------- **/
        $f2_09_01 = $f_satelital_f2->f2_09_01;
        $f2_10_01 = $f_satelital_f2->f2_10_01;
        $f2_11_01 = $f_satelital_f2->f2_11_01;
        $f2_12_01 = $f_satelital_f2->f2_12_01;
        $f2_13_01 = $f_satelital_f2->f2_13_01;
        $f2_14_01 = $f_satelital_f2->f2_14_01;
        $f2_15_01 = $f_satelital_f2->f2_15_01;
        $f2_16_01 = $f_satelital_f2->f2_16_01;

        $matrizSat2 = array (
            array("Datos Técnicos de Funcionamiento", "Lectura"),
            array("Potencia de transmisión", $f2_09_01),
            array("Nivel de apuntamiento/enlace", $f2_10_01),
            array("Nivel croospol", $f2_11_01),
            array("Up (kbps)", $f2_12_01),
            array("Down (kbps)", $f2_13_01),
            array("Configuración", $f2_14_01),
            array("Azimut", $f2_15_01),
            array("Elevación", $f2_16_01),

        );

        //$sheet->setCellValue('Q'.$filaOdu2, $cm . " - " . $sitioId . " - " . $propertyId);
        //$filaSat2 = $filaSat2+2;
        $filaSat2++;
        $sheet->setCellValue('AD'.$filaSat2, "Sistema SATELITAL");
        $spreadsheet->getActiveSheet()->getStyle('AD'.$filaSat2)->applyFromArray($styleBold);
        $filaSat2++;
        for ($row = 0; $row < 9; $row++) {
            if ( $row == 0) $sheet->getStyle("AD".$filaSat2.":AE".$filaSat2)->applyFromArray($tableHead);
            for ($col = 0; $col < 2; $col++) {
                switch ($col) {
                    case 0: $sheet->setCellValue('AD'.$filaSat2, $matrizSat2[$row][$col]);
                    case 1: $sheet->setCellValue('AE'.$filaSat2, $matrizSat2[$row][$col]);
                }
            }
            $filaSat2++;
        }
        $filaSat2 = $filaSat2+7;
        /** ------------------------------------------------------------------------------- **/



    } else {
        $sheet->setCellValue('A'.$filaIDU, 'ERROR');
        $sheet->setCellValue('B'.$filaIDU, $row['inicio']);
        $sheet->setCellValue('C'.$filaIDU, $row['nombre']);
    }

    $filaIDU++;
    $filaOdu1++;
    $filaOdu2++;
    $filaSat1++;
    $filaSat2++;
}

// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="myfile.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*$writer = new Xlsx($spreadsheet);
$writer->save('hello-world.xlsx');*/



//header("Location: ".$link_modulo."?path=ver_usuarios.php");

?>