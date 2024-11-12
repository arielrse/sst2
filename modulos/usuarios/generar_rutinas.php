<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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

$rutina013_titulos = [
    "A1" =>  "Departamento",
    "B1" =>  "Provincia",
    "C1" =>  "Localidad",
    "D1" =>  "Municipio",
    "E1" =>  "ID Sitio",
    "F1" =>  "Property_id",
    "G1" =>  "CM/SCM",
    "H1" =>  "Estado del camino",
    "I1" =>  "Fecha de Mtto",
    "J1" =>  "Tipo de  sitio",
    "K1" =>  "Predio",
    "L1" =>  "Cerramiento perimetral",
    "M1" =>  "Dimension predio",
    "N1" =>  "Loza de equipos",
    "O1" =>  "Loza o caseta grupo",
    "P1" =>  "Espacio en Loza equipos",
    "Q1" =>  "Tipo estructura 1",
    "R1" =>  "Altura (m)",
    "S1" =>  "Tipo estructura 2",
    "T1" =>  "Altura (m)",
];
$rutina014_titulos = [
    "A1" =>  "Departamento",
    "B1" =>  "Provincia",
    "C1" =>  "Localidad",
    "D1" =>  "CM/SCM",
    "E1" =>  "ID Sitio",
    "F1" =>  "Property_id",
    "G1" =>  "Fecha de Mtto",

    "H1" =>  "Radio Bases",
    "I1" =>  "Tipo de Transporte",
    "J1" =>  "Salto Anterior",
    "K1" =>  "Energía principal",

    "L1" =>  "Vendor",
    "M1" =>  "Equipo de transmisión",
    "N1" =>  "Interface",
    "O1" =>  "Energía Respaldo",

    "P1" =>  "Puerta Abierta",
    "Q1" =>  "Baterías en descarga",
    "R1" =>  "Corte de energía comercial",
    "S1" =>  "Inundación",
    "T1" =>  "Falla de protección de transcientes",
    "U1" =>  "Alarma de rectificador",
    "V1" =>  "Humo",
    "W1" =>  "Falla de baliza",
    "X1" =>  "GG. Warning",
    "Y1" =>  "GG. Apagado",
    "Z1" =>  "Bajo nivel de combustible",
    "AA1" => "GG. Encendido",
    "AB1" => "Tecnologia", /** D. BTS **/
    "AC1" => "Nombre de la BTS",
    "AD1" => "ID Estacion",
    "AE1" => "Configuracion",
    "AF1" => "Sector", /* 1 */
    "AG1" => "LOCAL CELL ID",
    "AH1" => "Banda MHz",
    "AI1" => "Modelo RBS",
    "AJ1" => "Tipo de Antena",
    "AK1" => "Marca antena",
    "AL1" => "Modelo antena",
    "AM1" => "Azimut",
    "AN1" => "Tilt Mecánico",
    "AO1" => "Tilt Eléctrico",
    "AP1" => "Ángulo de apertura",
    "AQ1" => "Altura de antena (m)",
    "AR1" => "Tiene RET",
    "AS1" => "Modelo RRU",
    "AT1" => "Sector", /* 2 */
    "AU1" => "LOCAL CELL ID",
    "AV1" => "Banda MHz",
    "AW1" => "Modelo RBS",
    "AX1" => "Tipo de Antena",
    "AY1" => "Marca antena",
    "AZ1" => "Modelo antena",
    "BA1" => "Azimut",
    "BB1" => "Tilt Mecánico",
    "BC1" => "Tilt Eléctrico",
    "BD1" => "Ángulo de apertura",
    "BE1" => "Altura de antena (m)",
    "BF1" => "Tiene RET",
    "BG1" => "Modelo RRU",
    "BH1" => "Sector", /* 3 */
    "BI1" => "LOCAL CELL ID",
    "BJ1" => "Banda MHz",
    "BK1" => "Modelo RBS",
    "BL1" => "Tipo de Antena",
    "BM1" => "Marca antena",
    "BN1" => "Modelo antena",
    "BO1" => "Azimut",
    "BP1" => "Tilt Mecánico",
    "BQ1" => "Tilt Eléctrico",
    "BR1" => "Ángulo de apertura",
    "BS1" => "Altura de antena (m)",
    "BT1" => "Tiene RET",
    "BU1" => "Modelo RRU",
    "BV1" => "Sector", /* 4 */
    "BW1" => "LOCAL CELL ID",
    "BX1" => "Banda MHz",
    "BY1" => "Modelo RBS",
    "BZ1" => "Tipo de Antena",
    "CA1" => "Marca antena",
    "CB1" => "Modelo antena",
    "CC1" => "Azimut",
    "CD1" => "Tilt Mecánico",
    "CE1" => "Tilt Eléctrico",
    "CF1" => "Ángulo de apertura",
    "CG1" => "Altura de antena (m)",
    "CH1" => "Tiene RET",
    "CI1" => "Modelo RRU",
    "CJ1" => "Sector", /* 5 */
    "CK1" => "LOCAL CELL ID",
    "CL1" => "Banda MHz",
    "CM1" => "Modelo RBS",
    "CN1" => "Tipo de Antena",
    "CO1" => "Marca antena",
    "CP1" => "Modelo antena",
    "CQ1" => "Azimut",
    "CR1" => "Tilt Mecánico",
    "CS1" => "Tilt Eléctrico",
    "CT1" => "Ángulo de apertura",
    "CU1" => "Altura de antena (m)",
    "CV1" => "Tiene RET",
    "CW1" => "Modelo RRU",
    "CX1" => "Sector", /* 6 */
    "CY1" => "LOCAL CELL ID",
    "CZ1" => "Banda MHz",
    "DA1" => "Modelo RBS",
    "DB1" => "Tipo de Antena",
    "DC1" => "Marca antena",
    "DD1" => "Modelo antena",
    "DE1" => "Azimut",
    "DF1" => "Tilt Mecánico",
    "DG1" => "Tilt Eléctrico",
    "DH1" => "Ángulo de apertura",
    "DI1" => "Altura de antena (m)",
    "DJ1" => "Tiene RET",
    "DK1" => "Modelo RRU",
    "DL1" => "",
    "DM1" => "",
    "DN1" => "",
    "DO1" => "",
    "DP1" => "",
    "DQ1" => "",
    "DR1" => "",
    "DS1" => "",
    "DT1" => "",
    "DU1" => "",
    "DV1" => "",
    "DW1" => "",
    "DX1" => "",
    "DY1" => "",
    "DZ1" => "",

];


$sheet->setTitle("Datos Rutinas");

if ($codForm == '013'){
    $sheet->getStyle('A1:T1')->applyFromArray($tableHead);
    foreach ($rutina013_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '014'){
    $sheet->getStyle('A1:DK1')->applyFromArray($tableHead);
    foreach ($rutina014_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}

$sql11 = "";
// Recuperando catastros de la bd
$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idrutina, cc.cabecera as data, "." 
                    s.idsitio, s.codsitio as sitioId, s.nombre as propertyId, s.localidad, s.municipio, s.provincia, d.nombre as nombreDepto, c.nombre as cm
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

        if ($codForm == '013'){
            $departamento = $row["nombreDepto"];
            $provincia = $row["provincia"];
            $localidad = $row["localidad"];
            $municipio = $row["municipio"];
            $sitioId    = $row["sitioId"];
            $propertyId = $row["propertyId"];
            //$sitioId   = $obj->sitioId;
            //$propertyId = $obj->propertyId;
            $cm = $obj->cm;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $b_acceso = $obj->b_acceso;
            $estado_camino  = $b_acceso->b_03_01;


            $f_predio = $obj->f_predio;
            $f_01_01 = $f_predio->f_01_01; $f_01_02 = $f_predio->f_01_02; $f_01_03 = $f_predio->f_01_03;
            $f_02_01 = $f_predio->f_02_01; $f_02_02 = $f_predio->f_02_02;
            $f_03_01 = $f_predio->f_03_01; $f_03_02 = $f_predio->f_03_02;

            $g_estructura = $obj->g_estructura;
            $g_01_01 = $g_estructura->g_01_01; $g_01_02 = $g_estructura->g_01_02;
            $g_02_01 = $g_estructura->g_02_01; $g_02_02 = $g_estructura->g_02_02;

            $sheet->setCellValue('A'.$fila, $departamento);
            $sheet->setCellValue('B'.$fila, $provincia);
            $sheet->setCellValue('C'.$fila, $localidad);
            $sheet->setCellValue('D'.$fila, $municipio);
            $sheet->setCellValue('E'.$fila, $sitioId);
            $sheet->setCellValue('F'.$fila, $propertyId);
            $sheet->setCellValue('G'.$fila, $cm);
            $sheet->setCellValue('H'.$fila, $estado_camino);
            $sheet->setCellValue('I'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('J'.$fila, $f_01_01);
            $sheet->setCellValue('K'.$fila, $f_01_02);
            $sheet->setCellValue('L'.$fila, $f_01_03);
            $sheet->setCellValue('M'.$fila, $f_02_01);
            $sheet->setCellValue('N'.$fila, $f_02_02);
            $sheet->setCellValue('O'.$fila, $f_03_01);
            $sheet->setCellValue('P'.$fila, $f_03_02);
            $sheet->setCellValue('Q'.$fila, $g_01_01);
            $sheet->setCellValue('R'.$fila, $g_01_02);
            $sheet->setCellValue('S'.$fila, $g_02_01);
            $sheet->setCellValue('T'.$fila, $g_02_02);
        }

        if ($codForm == '014'){
            $departamento = $row["nombreDepto"];
            $provincia  = $row["provincia"];
            $localidad  = $row["localidad"];
            $municipio  = $row["municipio"];
            //$cm         = $obj->cm;
            $cm         = $row["cm"];
            $sitioId    = $row["sitioId"];
            $propertyId = $row["propertyId"];
            //$sitioId    = $obj->sitioId;
            //$propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $d_relevamiento = $obj->d_relevamiento;
            $d_01_01 = $d_relevamiento->d_01_01;    $d_01_02 = $d_relevamiento->d_01_02;
            $d_02_01 = $d_relevamiento->d_02_01;    $d_02_02 = $d_relevamiento->d_02_02;
            $d_03_01 = $d_relevamiento->d_03_01;    $d_03_02 = $d_relevamiento->d_03_02;
            $d_04_01 = $d_relevamiento->d_04_01;    $d_04_02 = $d_relevamiento->d_04_02;

            $e_desarrollo = $obj->e_desarrollo;
            $e3_01_01 = $e_desarrollo->e3_01_01;
            $e3_02_01 = $e_desarrollo->e3_02_01;
            $e3_03_01 = $e_desarrollo->e3_03_01;
            $e3_04_01 = $e_desarrollo->e3_04_01;
            $e3_05_01 = $e_desarrollo->e3_05_01;
            $e3_06_01 = $e_desarrollo->e3_06_01;
            $e3_07_01 = $e_desarrollo->e3_07_01;
            $e3_08_01 = $e_desarrollo->e3_08_01;
            $e3_09_01 = $e_desarrollo->e3_09_01;
            $e3_10_01 = $e_desarrollo->e3_10_01;
            $e3_11_01 = $e_desarrollo->e3_11_01;
            $e3_12_01 = $e_desarrollo->e3_12_01;

            $d_sectores = $obj->d_sectores;
            $bts_01_01 = $d_sectores->bts_01_01;
            $bts_02_01 = $d_sectores->bts_02_01;
            $bts_03_01 = $d_sectores->bts_03_01;
            $bts_04_01 = $d_sectores->bts_04_01;

            $d1_01_01=$d_sectores->d1_01_01;  $d1_01_02=$d_sectores->d1_01_02;    $d1_01_03=$d_sectores->d1_01_03;    $d1_01_04=$d_sectores->d1_01_04;    $d1_01_05=$d_sectores->d1_01_05;    $d1_01_06=$d_sectores->d1_01_06;    $d1_01_07=$d_sectores->d1_01_07;    $d1_01_08=$d_sectores->d1_01_08;    $d1_01_09=$d_sectores->d1_01_09;    $d1_01_10=$d_sectores->d1_01_10;    $d1_01_11=$d_sectores->d1_01_11;    $d1_01_12=$d_sectores->d1_01_12;    $d1_01_13=$d_sectores->d1_01_13;
            $d1_02_01=$d_sectores->d1_02_01;  $d1_02_02=$d_sectores->d1_02_02;    $d1_02_03=$d_sectores->d1_02_03;    $d1_02_04=$d_sectores->d1_02_04;    $d1_02_05=$d_sectores->d1_02_05;    $d1_02_06=$d_sectores->d1_02_06;    $d1_02_07=$d_sectores->d1_02_07;    $d1_02_08=$d_sectores->d1_02_08;    $d1_02_09=$d_sectores->d1_02_09;    $d1_02_10=$d_sectores->d1_02_10;    $d1_02_11=$d_sectores->d1_02_11;    $d1_02_12=$d_sectores->d1_02_12;    $d1_02_13=$d_sectores->d1_02_13;
            $d1_03_01=$d_sectores->d1_03_01;  $d1_03_02=$d_sectores->d1_03_02;    $d1_03_03=$d_sectores->d1_03_03;    $d1_03_04=$d_sectores->d1_03_04;    $d1_03_05=$d_sectores->d1_03_05;    $d1_03_06=$d_sectores->d1_03_06;    $d1_03_07=$d_sectores->d1_03_07;    $d1_03_08=$d_sectores->d1_03_08;    $d1_03_09=$d_sectores->d1_03_09;    $d1_03_10=$d_sectores->d1_03_10;    $d1_03_11=$d_sectores->d1_03_11;    $d1_03_12=$d_sectores->d1_03_12;    $d1_03_13=$d_sectores->d1_03_13;
            $d1_04_01=$d_sectores->d1_04_01;  $d1_04_02=$d_sectores->d1_04_02;    $d1_04_03=$d_sectores->d1_04_03;    $d1_04_04=$d_sectores->d1_04_04;    $d1_04_05=$d_sectores->d1_04_05;    $d1_04_06=$d_sectores->d1_04_06;    $d1_04_07=$d_sectores->d1_04_07;    $d1_04_08=$d_sectores->d1_04_08;    $d1_04_09=$d_sectores->d1_04_09;    $d1_04_10=$d_sectores->d1_04_10;    $d1_04_11=$d_sectores->d1_04_11;    $d1_04_12=$d_sectores->d1_04_12;    $d1_04_13=$d_sectores->d1_04_13;
            $d1_05_01=$d_sectores->d1_05_01;  $d1_05_02=$d_sectores->d1_05_02;    $d1_05_03=$d_sectores->d1_05_03;    $d1_05_04=$d_sectores->d1_05_04;    $d1_05_05=$d_sectores->d1_05_05;    $d1_05_06=$d_sectores->d1_05_06;    $d1_05_07=$d_sectores->d1_05_07;    $d1_05_08=$d_sectores->d1_05_08;    $d1_05_09=$d_sectores->d1_05_09;    $d1_05_10=$d_sectores->d1_05_10;    $d1_05_11=$d_sectores->d1_05_11;    $d1_05_12=$d_sectores->d1_05_12;    $d1_05_13=$d_sectores->d1_05_13;
            $d1_06_01=$d_sectores->d1_06_01;  $d1_06_02=$d_sectores->d1_06_02;    $d1_06_03=$d_sectores->d1_06_03;    $d1_06_04=$d_sectores->d1_06_04;    $d1_06_05=$d_sectores->d1_06_05;    $d1_06_06=$d_sectores->d1_06_06;    $d1_06_07=$d_sectores->d1_06_07;    $d1_06_08=$d_sectores->d1_06_08;    $d1_06_09=$d_sectores->d1_06_09;    $d1_06_10=$d_sectores->d1_06_10;    $d1_06_11=$d_sectores->d1_06_11;    $d1_06_12=$d_sectores->d1_06_12;    $d1_06_13=$d_sectores->d1_06_13;

            $nodoB_01_01 = $d_sectores->nodoB_01_01;
            $nodoB_02_01 = $d_sectores->nodoB_02_01;

            $d2_01_01=$d_sectores->d2_01_01; $d2_01_02=$d_sectores->d2_01_02; $d2_01_03=$d_sectores->d2_01_03; $d2_01_04=$d_sectores->d2_01_04; $d2_01_05=$d_sectores->d2_01_05; $d2_01_06=$d_sectores->d2_01_06; $d2_01_07=$d_sectores->d2_01_07; $d2_01_08=$d_sectores->d2_01_08; $d2_01_09=$d_sectores->d2_01_09; $d2_01_10=$d_sectores->d2_01_10; $d2_01_11=$d_sectores->d2_01_11; $d2_01_12=$d_sectores->d2_01_12; $d2_01_13=$d_sectores->d2_01_13;
            $d2_02_01=$d_sectores->d2_02_01; $d2_02_02=$d_sectores->d2_02_02; $d2_02_03=$d_sectores->d2_02_03; $d2_02_04=$d_sectores->d2_02_04; $d2_02_05=$d_sectores->d2_02_05; $d2_02_06=$d_sectores->d2_02_06; $d2_02_07=$d_sectores->d2_02_07; $d2_02_08=$d_sectores->d2_02_08; $d2_02_09=$d_sectores->d2_02_09; $d2_02_10=$d_sectores->d2_02_10; $d2_02_11=$d_sectores->d2_02_11; $d2_02_12=$d_sectores->d2_02_12; $d2_02_13=$d_sectores->d2_02_13;
            $d2_03_01=$d_sectores->d2_03_01; $d2_03_02=$d_sectores->d2_03_02; $d2_03_03=$d_sectores->d2_03_03; $d2_03_04=$d_sectores->d2_03_04; $d2_03_05=$d_sectores->d2_03_05; $d2_03_06=$d_sectores->d2_03_06; $d2_03_07=$d_sectores->d2_03_07; $d2_03_08=$d_sectores->d2_03_08; $d2_03_09=$d_sectores->d2_03_09; $d2_03_10=$d_sectores->d2_03_10; $d2_03_11=$d_sectores->d2_03_11; $d2_03_12=$d_sectores->d2_03_12; $d2_03_13=$d_sectores->d2_03_13;
            $d2_04_01=$d_sectores->d2_04_01; $d2_04_02=$d_sectores->d2_04_02; $d2_04_03=$d_sectores->d2_04_03; $d2_04_04=$d_sectores->d2_04_04; $d2_04_05=$d_sectores->d2_04_05; $d2_04_06=$d_sectores->d2_04_06; $d2_04_07=$d_sectores->d2_04_07; $d2_04_08=$d_sectores->d2_04_08; $d2_04_09=$d_sectores->d2_04_09; $d2_04_10=$d_sectores->d2_04_10; $d2_04_11=$d_sectores->d2_04_11; $d2_04_12=$d_sectores->d2_04_12; $d2_04_13=$d_sectores->d2_04_13;
            $d2_05_01=$d_sectores->d2_05_01; $d2_05_02=$d_sectores->d2_05_02; $d2_05_03=$d_sectores->d2_05_03; $d2_05_04=$d_sectores->d2_05_04; $d2_05_05=$d_sectores->d2_05_05; $d2_05_06=$d_sectores->d2_05_06; $d2_05_07=$d_sectores->d2_05_07; $d2_05_08=$d_sectores->d2_05_08; $d2_05_09=$d_sectores->d2_05_09; $d2_05_10=$d_sectores->d2_05_10; $d2_05_11=$d_sectores->d2_05_11; $d2_05_12=$d_sectores->d2_05_12; $d2_05_13=$d_sectores->d2_05_13;
            $d2_06_01=$d_sectores->d2_06_01; $d2_06_02=$d_sectores->d2_06_02; $d2_06_03=$d_sectores->d2_06_03; $d2_06_04=$d_sectores->d2_06_04; $d2_06_05=$d_sectores->d2_06_05; $d2_06_06=$d_sectores->d2_06_06; $d2_06_07=$d_sectores->d2_06_07; $d2_06_08=$d_sectores->d2_06_08; $d2_06_09=$d_sectores->d2_06_09; $d2_06_10=$d_sectores->d2_06_10; $d2_06_11=$d_sectores->d2_06_11; $d2_06_12=$d_sectores->d2_06_12; $d2_06_13=$d_sectores->d2_06_13;
            $d2_07_01=$d_sectores->d2_07_01; $d2_07_02=$d_sectores->d2_07_02; $d2_07_03=$d_sectores->d2_07_03; $d2_07_04=$d_sectores->d2_07_04; $d2_07_05=$d_sectores->d2_07_05; $d2_07_06=$d_sectores->d2_07_06; $d2_07_07=$d_sectores->d2_07_07; $d2_07_08=$d_sectores->d2_07_08; $d2_07_09=$d_sectores->d2_07_09; $d2_07_10=$d_sectores->d2_07_10; $d2_07_11=$d_sectores->d2_07_11; $d2_07_12=$d_sectores->d2_07_12; $d2_07_13=$d_sectores->d2_07_13;
            $d2_08_01=$d_sectores->d2_08_01; $d2_08_02=$d_sectores->d2_08_02; $d2_08_03=$d_sectores->d2_08_03; $d2_08_04=$d_sectores->d2_08_04; $d2_08_05=$d_sectores->d2_08_05; $d2_08_06=$d_sectores->d2_08_06; $d2_08_07=$d_sectores->d2_08_07; $d2_08_08=$d_sectores->d2_08_08; $d2_08_09=$d_sectores->d2_08_09; $d2_08_10=$d_sectores->d2_08_10; $d2_08_11=$d_sectores->d2_08_11; $d2_08_12=$d_sectores->d2_08_12; $d2_08_13=$d_sectores->d2_08_13;
            $d2_09_01=$d_sectores->d2_09_01; $d2_09_02=$d_sectores->d2_09_02; $d2_09_03=$d_sectores->d2_09_03; $d2_09_04=$d_sectores->d2_09_04; $d2_09_05=$d_sectores->d2_09_05; $d2_09_06=$d_sectores->d2_09_06; $d2_09_07=$d_sectores->d2_09_07; $d2_09_08=$d_sectores->d2_09_08; $d2_09_09=$d_sectores->d2_09_09; $d2_09_10=$d_sectores->d2_09_10; $d2_09_11=$d_sectores->d2_09_11; $d2_09_12=$d_sectores->d2_09_12; $d2_09_13=$d_sectores->d2_09_13;
            $d2_10_01=$d_sectores->d2_10_01; $d2_10_02=$d_sectores->d2_10_02; $d2_10_03=$d_sectores->d2_10_03; $d2_10_04=$d_sectores->d2_10_04; $d2_10_05=$d_sectores->d2_10_05; $d2_10_06=$d_sectores->d2_10_06; $d2_10_07=$d_sectores->d2_10_07; $d2_10_08=$d_sectores->d2_10_08; $d2_10_09=$d_sectores->d2_10_09; $d2_10_10=$d_sectores->d2_10_10; $d2_10_11=$d_sectores->d2_10_11; $d2_10_12=$d_sectores->d2_10_12; $d2_10_13=$d_sectores->d2_10_13;
            $d2_11_01=$d_sectores->d2_11_01; $d2_11_02=$d_sectores->d2_11_02; $d2_11_03=$d_sectores->d2_11_03; $d2_11_04=$d_sectores->d2_11_04; $d2_11_05=$d_sectores->d2_11_05; $d2_11_06=$d_sectores->d2_11_06; $d2_11_07=$d_sectores->d2_11_07; $d2_11_08=$d_sectores->d2_11_08; $d2_11_09=$d_sectores->d2_11_09; $d2_11_10=$d_sectores->d2_11_10; $d2_11_11=$d_sectores->d2_11_11; $d2_11_12=$d_sectores->d2_11_12; $d2_11_13=$d_sectores->d2_11_13;
            $d2_12_01=$d_sectores->d2_12_01; $d2_12_02=$d_sectores->d2_12_02; $d2_12_03=$d_sectores->d2_12_03; $d2_12_04=$d_sectores->d2_12_04; $d2_12_05=$d_sectores->d2_12_05; $d2_12_06=$d_sectores->d2_12_06; $d2_12_07=$d_sectores->d2_12_07; $d2_12_08=$d_sectores->d2_12_08; $d2_12_09=$d_sectores->d2_12_09; $d2_12_10=$d_sectores->d2_12_10; $d2_12_11=$d_sectores->d2_12_11; $d2_12_12=$d_sectores->d2_12_12; $d2_12_13=$d_sectores->d2_12_13;

            $sheet->setCellValue('A'.$fila, $departamento);
            $sheet->setCellValue('B'.$fila, $provincia);
            $sheet->setCellValue('C'.$fila, $localidad);
            $sheet->setCellValue('D'.$fila, $cm);
            $sheet->setCellValue('E'.$fila, $sitioId);
            $sheet->setCellValue('F'.$fila, $propertyId);
            $sheet->setCellValue('G'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('H'.$fila, $d_01_01);
            $sheet->setCellValue('I'.$fila, $d_02_01);
            $sheet->setCellValue('J'.$fila, $d_03_01);
            $sheet->setCellValue('K'.$fila, $d_04_01);
            $sheet->setCellValue('L'.$fila, $d_01_02);
            $sheet->setCellValue('M'.$fila, $d_02_02);
            $sheet->setCellValue('N'.$fila, $d_03_02);
            $sheet->setCellValue('O'.$fila, $d_04_02);
            $sheet->setCellValue('P'.$fila, $e3_01_01);
            $sheet->setCellValue('Q'.$fila, $e3_02_01);
            $sheet->setCellValue('R'.$fila, $e3_03_01);
            $sheet->setCellValue('S'.$fila, $e3_04_01);
            $sheet->setCellValue('T'.$fila, $e3_05_01);
            $sheet->setCellValue('U'.$fila, $e3_06_01);
            $sheet->setCellValue('V'.$fila, $e3_07_01);
            $sheet->setCellValue('W'.$fila, $e3_08_01);
            $sheet->setCellValue('X'.$fila, $e3_09_01);
            $sheet->setCellValue('Y'.$fila, $e3_10_01);
            $sheet->setCellValue('Z'.$fila, $e3_11_01);
            $sheet->setCellValue('AA'.$fila,$e3_12_01);
            $sheet->setCellValue('AB'.$fila,$bts_01_01);
            $sheet->setCellValue('AC'.$fila,$bts_02_01);
            $sheet->setCellValue('AD'.$fila,$bts_03_01);
            $sheet->setCellValue('AE'.$fila,$bts_04_01);

            //1
            $sheet->setCellValue('AF'.($fila), '1º');
            $sheet->setCellValue('AG'.($fila), $d1_01_01);
            $sheet->setCellValue('AH'.($fila), $d1_01_02);
            $sheet->setCellValue('AI'.($fila), $d1_01_03);
            $sheet->setCellValue('AJ'.($fila), $d1_01_04);
            $sheet->setCellValue('AK'.($fila), $d1_01_05);
            $sheet->setCellValue('AL'.($fila), $d1_01_06);
            $sheet->setCellValue('AM'.($fila), $d1_01_07);
            $sheet->setCellValue('AN'.($fila), $d1_01_08);
            $sheet->setCellValue('AO'.($fila), $d1_01_09);
            $sheet->setCellValue('AP'.($fila), $d1_01_10);
            $sheet->setCellValue('AQ'.($fila), $d1_01_11);
            $sheet->setCellValue('AR'.($fila), $d1_01_12);
            $sheet->setCellValue('AS'.($fila), $d1_01_13);
            $sheet->setCellValue('AT'.($fila), '2º');
            $sheet->setCellValue('AU'.($fila), $d1_02_01);
            $sheet->setCellValue('AV'.($fila), $d1_02_02);
            $sheet->setCellValue('AW'.($fila), $d1_02_03);
            $sheet->setCellValue('AX'.($fila), $d1_02_04);
            $sheet->setCellValue('AY'.($fila), $d1_02_05);
            $sheet->setCellValue('AZ'.($fila), $d1_02_06);
            $sheet->setCellValue('BA'.($fila), $d1_02_07);
            $sheet->setCellValue('BB'.($fila), $d1_02_08);
            $sheet->setCellValue('BC'.($fila), $d1_02_09);
            $sheet->setCellValue('BD'.($fila), $d1_02_10);
            $sheet->setCellValue('BE'.($fila), $d1_02_11);
            $sheet->setCellValue('BF'.($fila), $d1_02_12);
            $sheet->setCellValue('BG'.($fila), $d1_02_13);
            $sheet->setCellValue('BH'.($fila), '3º');
            $sheet->setCellValue('BI'.($fila), $d1_03_01);
            $sheet->setCellValue('BJ'.($fila), $d1_03_02);
            $sheet->setCellValue('BK'.($fila), $d1_03_03);
            $sheet->setCellValue('BL'.($fila), $d1_03_04);
            $sheet->setCellValue('BM'.($fila), $d1_03_05);
            $sheet->setCellValue('BN'.($fila), $d1_03_06);
            $sheet->setCellValue('BO'.($fila), $d1_03_07);
            $sheet->setCellValue('BP'.($fila), $d1_03_08);
            $sheet->setCellValue('BQ'.($fila), $d1_03_09);
            $sheet->setCellValue('BR'.($fila), $d1_03_10);
            $sheet->setCellValue('BS'.($fila), $d1_03_11);
            $sheet->setCellValue('BT'.($fila), $d1_03_12);
            $sheet->setCellValue('BU'.($fila), $d1_03_13);
            $sheet->setCellValue('BV'.($fila), '1º');
            $sheet->setCellValue('BW'.($fila), $d1_04_01);
            $sheet->setCellValue('BX'.($fila), $d1_04_02);
            $sheet->setCellValue('BY'.($fila), $d1_04_03);
            $sheet->setCellValue('BZ'.($fila), $d1_04_04);
            $sheet->setCellValue('CA'.($fila), $d1_04_05);
            $sheet->setCellValue('CB'.($fila), $d1_04_06);
            $sheet->setCellValue('CC'.($fila), $d1_04_07);
            $sheet->setCellValue('CD'.($fila), $d1_04_08);
            $sheet->setCellValue('CE'.($fila), $d1_04_09);
            $sheet->setCellValue('CF'.($fila), $d1_04_10);
            $sheet->setCellValue('CG'.($fila), $d1_04_11);
            $sheet->setCellValue('CH'.($fila), $d1_04_12);
            $sheet->setCellValue('CI'.($fila), $d1_04_13);
            $sheet->setCellValue('CJ'.($fila), '2º');
            $sheet->setCellValue('CK'.($fila), $d1_05_01);
            $sheet->setCellValue('CL'.($fila), $d1_05_02);
            $sheet->setCellValue('CM'.($fila), $d1_05_03);
            $sheet->setCellValue('CN'.($fila), $d1_05_04);
            $sheet->setCellValue('CO'.($fila), $d1_05_05);
            $sheet->setCellValue('CP'.($fila), $d1_05_06);
            $sheet->setCellValue('CQ'.($fila), $d1_05_07);
            $sheet->setCellValue('CR'.($fila), $d1_05_08);
            $sheet->setCellValue('CS'.($fila), $d1_05_09);
            $sheet->setCellValue('CT'.($fila), $d1_05_10);
            $sheet->setCellValue('CU'.($fila), $d1_05_11);
            $sheet->setCellValue('CV'.($fila), $d1_05_12);
            $sheet->setCellValue('CW'.($fila), $d1_05_13);
            $sheet->setCellValue('CX'.($fila), '3º');
            $sheet->setCellValue('CY'.($fila), $d1_06_01);
            $sheet->setCellValue('CZ'.($fila), $d1_06_02);
            $sheet->setCellValue('DA'.($fila), $d1_06_03);
            $sheet->setCellValue('DB'.($fila), $d1_06_04);
            $sheet->setCellValue('DC'.($fila), $d1_06_05);
            $sheet->setCellValue('DD'.($fila), $d1_06_06);
            $sheet->setCellValue('DE'.($fila), $d1_06_07);
            $sheet->setCellValue('DF'.($fila), $d1_06_08);
            $sheet->setCellValue('DG'.($fila), $d1_06_09);
            $sheet->setCellValue('DH'.($fila), $d1_06_10);
            $sheet->setCellValue('DI'.($fila), $d1_06_11);
            $sheet->setCellValue('DJ'.($fila), $d1_06_12);
            $sheet->setCellValue('DK'.($fila), $d1_06_13);


            /*
            $sheet->setCellValue('AV'.($fila+$inc), '1º');
            $sheet->setCellValue('AW'.($fila+$inc), $d2_01_01);
            $sheet->setCellValue('AX'.($fila+$inc), $d2_01_02);
            $sheet->setCellValue('AY'.($fila+$inc), $d2_01_03);
            $sheet->setCellValue('AZ'.($fila+$inc), $d2_01_04);
            $sheet->setCellValue('BA'.($fila+$inc), $d2_01_05);
            $sheet->setCellValue('BB'.($fila+$inc), $d2_01_06);
            $sheet->setCellValue('BC'.($fila+$inc), $d2_01_07);
            $sheet->setCellValue('BD'.($fila+$inc), $d2_01_08);
            $sheet->setCellValue('BE'.($fila+$inc), $d2_01_09);
            $sheet->setCellValue('BF'.($fila+$inc), $d2_01_10);
            $sheet->setCellValue('BG'.($fila+$inc), $d2_01_11);
            $sheet->setCellValue('BH'.($fila+$inc), $d2_01_12);
            $sheet->setCellValue('BI'.($fila+$inc), $d2_01_13);

            $d2_02_01=$d_sectores->d2_02_01; $d2_02_02=$d_sectores->d2_02_02; $d2_02_03=$d_sectores->d2_02_03; $d2_02_04=$d_sectores->d2_02_04; $d2_02_05=$d_sectores->d2_02_05; $d2_02_06=$d_sectores->d2_02_06; $d2_02_07=$d_sectores->d2_02_07; $d2_02_08=$d_sectores->d2_02_08; $d2_02_09=$d_sectores->d2_02_09; $d2_02_10=$d_sectores->d2_02_10; $d2_02_11=$d_sectores->d2_02_11; $d2_02_12=$d_sectores->d2_02_12; $d2_02_13=$d_sectores->d2_02_13;

            $d2_03_01=$d_sectores->d2_03_01; $d2_03_02=$d_sectores->d2_03_02; $d2_03_03=$d_sectores->d2_03_03; $d2_03_04=$d_sectores->d2_03_04; $d2_03_05=$d_sectores->d2_03_05; $d2_03_06=$d_sectores->d2_03_06; $d2_03_07=$d_sectores->d2_03_07; $d2_03_08=$d_sectores->d2_03_08; $d2_03_09=$d_sectores->d2_03_09; $d2_03_10=$d_sectores->d2_03_10; $d2_03_11=$d_sectores->d2_03_11; $d2_03_12=$d_sectores->d2_03_12; $d2_03_13=$d_sectores->d2_03_13;
            $d2_04_01=$d_sectores->d2_04_01; $d2_04_02=$d_sectores->d2_04_02; $d2_04_03=$d_sectores->d2_04_03; $d2_04_04=$d_sectores->d2_04_04; $d2_04_05=$d_sectores->d2_04_05; $d2_04_06=$d_sectores->d2_04_06; $d2_04_07=$d_sectores->d2_04_07; $d2_04_08=$d_sectores->d2_04_08; $d2_04_09=$d_sectores->d2_04_09; $d2_04_10=$d_sectores->d2_04_10; $d2_04_11=$d_sectores->d2_04_11; $d2_04_12=$d_sectores->d2_04_12; $d2_04_13=$d_sectores->d2_04_13;
            $d2_05_01=$d_sectores->d2_05_01; $d2_05_02=$d_sectores->d2_05_02; $d2_05_03=$d_sectores->d2_05_03; $d2_05_04=$d_sectores->d2_05_04; $d2_05_05=$d_sectores->d2_05_05; $d2_05_06=$d_sectores->d2_05_06; $d2_05_07=$d_sectores->d2_05_07; $d2_05_08=$d_sectores->d2_05_08; $d2_05_09=$d_sectores->d2_05_09; $d2_05_10=$d_sectores->d2_05_10; $d2_05_11=$d_sectores->d2_05_11; $d2_05_12=$d_sectores->d2_05_12; $d2_05_13=$d_sectores->d2_05_13;
            $d2_06_01=$d_sectores->d2_06_01; $d2_06_02=$d_sectores->d2_06_02; $d2_06_03=$d_sectores->d2_06_03; $d2_06_04=$d_sectores->d2_06_04; $d2_06_05=$d_sectores->d2_06_05; $d2_06_06=$d_sectores->d2_06_06; $d2_06_07=$d_sectores->d2_06_07; $d2_06_08=$d_sectores->d2_06_08; $d2_06_09=$d_sectores->d2_06_09; $d2_06_10=$d_sectores->d2_06_10; $d2_06_11=$d_sectores->d2_06_11; $d2_06_12=$d_sectores->d2_06_12; $d2_06_13=$d_sectores->d2_06_13;
            $d2_07_01=$d_sectores->d2_07_01; $d2_07_02=$d_sectores->d2_07_02; $d2_07_03=$d_sectores->d2_07_03; $d2_07_04=$d_sectores->d2_07_04; $d2_07_05=$d_sectores->d2_07_05; $d2_07_06=$d_sectores->d2_07_06; $d2_07_07=$d_sectores->d2_07_07; $d2_07_08=$d_sectores->d2_07_08; $d2_07_09=$d_sectores->d2_07_09; $d2_07_10=$d_sectores->d2_07_10; $d2_07_11=$d_sectores->d2_07_11; $d2_07_12=$d_sectores->d2_07_12; $d2_07_13=$d_sectores->d2_07_13;
            $d2_08_01=$d_sectores->d2_08_01; $d2_08_02=$d_sectores->d2_08_02; $d2_08_03=$d_sectores->d2_08_03; $d2_08_04=$d_sectores->d2_08_04; $d2_08_05=$d_sectores->d2_08_05; $d2_08_06=$d_sectores->d2_08_06; $d2_08_07=$d_sectores->d2_08_07; $d2_08_08=$d_sectores->d2_08_08; $d2_08_09=$d_sectores->d2_08_09; $d2_08_10=$d_sectores->d2_08_10; $d2_08_11=$d_sectores->d2_08_11; $d2_08_12=$d_sectores->d2_08_12; $d2_08_13=$d_sectores->d2_08_13;
            $d2_09_01=$d_sectores->d2_09_01; $d2_09_02=$d_sectores->d2_09_02; $d2_09_03=$d_sectores->d2_09_03; $d2_09_04=$d_sectores->d2_09_04; $d2_09_05=$d_sectores->d2_09_05; $d2_09_06=$d_sectores->d2_09_06; $d2_09_07=$d_sectores->d2_09_07; $d2_09_08=$d_sectores->d2_09_08; $d2_09_09=$d_sectores->d2_09_09; $d2_09_10=$d_sectores->d2_09_10; $d2_09_11=$d_sectores->d2_09_11; $d2_09_12=$d_sectores->d2_09_12; $d2_09_13=$d_sectores->d2_09_13;
            $d2_10_01=$d_sectores->d2_10_01; $d2_10_02=$d_sectores->d2_10_02; $d2_10_03=$d_sectores->d2_10_03; $d2_10_04=$d_sectores->d2_10_04; $d2_10_05=$d_sectores->d2_10_05; $d2_10_06=$d_sectores->d2_10_06; $d2_10_07=$d_sectores->d2_10_07; $d2_10_08=$d_sectores->d2_10_08; $d2_10_09=$d_sectores->d2_10_09; $d2_10_10=$d_sectores->d2_10_10; $d2_10_11=$d_sectores->d2_10_11; $d2_10_12=$d_sectores->d2_10_12; $d2_10_13=$d_sectores->d2_10_13;
            $d2_11_01=$d_sectores->d2_11_01; $d2_11_02=$d_sectores->d2_11_02; $d2_11_03=$d_sectores->d2_11_03; $d2_11_04=$d_sectores->d2_11_04; $d2_11_05=$d_sectores->d2_11_05; $d2_11_06=$d_sectores->d2_11_06; $d2_11_07=$d_sectores->d2_11_07; $d2_11_08=$d_sectores->d2_11_08; $d2_11_09=$d_sectores->d2_11_09; $d2_11_10=$d_sectores->d2_11_10; $d2_11_11=$d_sectores->d2_11_11; $d2_11_12=$d_sectores->d2_11_12; $d2_11_13=$d_sectores->d2_11_13;
            $d2_12_01=$d_sectores->d2_12_01; $d2_12_02=$d_sectores->d2_12_02; $d2_12_03=$d_sectores->d2_12_03; $d2_12_04=$d_sectores->d2_12_04; $d2_12_05=$d_sectores->d2_12_05; $d2_12_06=$d_sectores->d2_12_06; $d2_12_07=$d_sectores->d2_12_07; $d2_12_08=$d_sectores->d2_12_08; $d2_12_09=$d_sectores->d2_12_09; $d2_12_10=$d_sectores->d2_12_10; $d2_12_11=$d_sectores->d2_12_11; $d2_12_12=$d_sectores->d2_12_12; $d2_12_13=$d_sectores->d2_12_13;
            */

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