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

if ($codForm == '001'){
    include 'generar_rutina_001.php';
    exit();
}

if ($codForm == '002'){
    include 'generar_rutina_002.php';
    exit();
}

if ($codForm == '003'){
    include 'generar_rutina_003.php';
    exit();
}

if ($codForm == '004'){
    include 'generar_rutina_004.php';
    exit();
}

if ($codForm == '005'){
    include 'generar_rutina_005.php';
    exit();
}

if ($codForm == '006'){
    include 'generar_rutina_006.php';
    exit();
}

if ($codForm == '007'){
    include 'generar_rutina_007.php';
    exit();
}

if ($codForm == '008'){
    include 'generar_rutina_008.php';
    exit();
}

if ($codForm == '009'){
    include 'generar_rutina_009.php';
    exit();
}

if ($codForm == '010'){
    include 'generar_rutina_010.php';
    exit();
}

if ($codForm == '011'){
    include 'generar_rutina_011.php';
    exit();
}


if ($codForm == '013'){
    include 'generar_rutina_013.php';
    exit();
}

if ($codForm == '014'){
    include 'generar_rutina_014.php';
    exit();
}


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

$rutina001_titulos = [
    "A1" =>  "Fecha de Mtto",
    "B1" =>  "CM/SCM",
    "C1" =>  "ID Sitio",
    "D1" =>  "Property_id",
    "E1" =>  "Voltaje en carga BB VDC",
    "F1" =>  "Voltaje en flotacion BB VDC",
    "G1" =>  "Corriente de Carga configurado",
    "H1" =>  "Corriente de Carga nominal",
    "I1" =>  "Temperatura ambiente °C",
    "J1" =>  "Temperatura punto medio BB °C",
    "K1" =>  "Cantidad de Cadenas:",
    "L1" =>  "Cantidad de Baterias/Cadena",
    "M1" =>  "Cantidad Total de Baterias",
    "N1" =>  "Capacida total del BB A-Hr",
    "O1" =>  "Corriente de descarga ADC",
    "P1" =>  "Tiempo Noninal de descarga min",
    "Q1" =>  "Corriente de descarga ADC",
    "R1" =>  "Tiempo Noninal de descarga min",
    "S1" =>  "Valor aproximado mΩ",
];

$rutina012_titulos = [
    "A1" =>  "Fecha de Mtto",
    "B1" =>  "CM/SCM",
    "C1" =>  "ID Sitio",
    "D1" =>  "Property_id",
    "E1" =>  "Medida Potencial entre el sistema de tierra y Neutro Termico Pilastra",
    "F1" =>  "Medida Potencial entre el neutro y masa Termico Pilastra",
    "G1" =>  "Medida Potencial entre el sistema de tierra y Neutro Termico Tablero Principal",
    "H1" =>  "Medida Potencial entre el neutro y masa Termico Tablero Pricipal",
    "I1" =>  "Medida a tierra barra colectora  Pilastra",
    "J1" =>  "Medida a tierra barra colectora caseta equipos",
    "K1" =>  "Medida a tierra barra colectora bajante Torre",
    "L1" =>  "Medida a tierra camara de inspeccion",
    "M1" =>  "Medida a tierra base torre",
    "N1" =>  "Medida a tierra barra colectora tablero electrico",
    "O1" =>  "Medida a tierra rriostra torre",
    "P1" =>  "Medida a tierra barra colectora grupo electrogeno",
    "Q1" =>  "",
    "R1" =>  "",
    "S1" =>  "",
];

/*$rutina014_titulos = [
    "A1" =>  "Departamento",
    "B1" =>  "Provincia",
    "C1" =>  "Localidad",
    "D1" =>  "Latitud",
    "E1" =>  "Longitud",
    "F1" =>  "CM/SCM",
    "G1" =>  "ID Sitio",
    "H1" =>  "Property_id",
    "I1" =>  "Fecha de Mtto",
    "J1" =>  "Radio Bases",
    "K1" =>  "Tipo de Transporte",
    "L1" =>  "Salto Anterior",
    "M1" =>  "Energía principal",
    "N1" =>  "Vendor",
    "O1" =>  "Equipo de transmisión",
    "P1" =>  "Interface",
    "Q1" =>  "Energía Respaldo",
    "R1" =>  "Puerta Abierta",
    "S1" =>  "Baterías en descarga",
    "T1" =>  "Corte de energía comercial",
    "U1" =>  "Inundación",
    "V1" =>  "Falla de protección de transcientes",
    "W1" =>  "Alarma de rectificador",
    "X1" =>  "Humo",
    "Y1" =>  "Falla de baliza",
    "Z1" =>  "GG. Warning",
    "AA1" => "GG. Apagado",
    "AB1" => "Bajo nivel de combustible",
    "AC1" => "GG. Encendido",
    "AD1" => "Tecnologia",
    "AE1" => "Nombre de la BTS",
    "AF1" => "ID Estacion",
    "AG1" => "Configuracion",
    "AH1" => "Sector",
    "AI1" => "LOCAL CELL ID",
    "AJ1" => "Banda MHz",
    "AK1" => "Modelo RBS",
    "AL1" => "Tipo de Antena",
    "AM1" => "Marca antena",
    "AN1" => "Modelo antena",
    "AO1" => "Azimut",
    "AP1" => "Tilt Mecánico",
    "AQ1" => "Tilt Eléctrico",
    "AR1" => "Ángulo de apertura",
    "AS1" => "Altura de antena (m)",
    "AT1" => "Tiene RET",
    "AU1" => "Modelo RRU",
];*/


$sheet->setTitle("Datos Rutinas");

/*if ($codForm == '001'){
    $sheet->getStyle('A1:S1')->applyFromArray($tableHead);
    foreach ($rutina001_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}*/
if ($codForm == '012'){
    $sheet->getStyle('A1:P1')->applyFromArray($tableHead);
    foreach ($rutina012_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}

if ($codForm == '014'){
    $sheet->getStyle('A1:AU1')->applyFromArray($tableHead);
    foreach ($rutina014_titulos as $columna => $valor){
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

        if ($codForm == '012'){
            $cm         = $row["cm"];
            $propertyId = $row["propertyId"];
            $sitioId    = $row["sitioId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $g_desarrollo = $obj->{'g_desarrollo'};

            $g5_01_01 = $g_desarrollo->g5_01_01;
            $g5_02_01 = $g_desarrollo->g5_02_01;
            $g5_03_01 = $g_desarrollo->g5_03_01;
            $g5_04_01 = $g_desarrollo->g5_04_01;
            $g5_05_01 = $g_desarrollo->g5_05_01;
            $g5_05_02 = $g_desarrollo->g5_05_02;
            $g5_06_01 = $g_desarrollo->g5_06_01;
            $g5_06_02 = $g_desarrollo->g5_06_02;
            $g5_07_01 = $g_desarrollo->g5_07_01;
            $g5_07_02 = $g_desarrollo->g5_07_02;
            $g5_08_01 = $g_desarrollo->g5_08_01;
            $g5_08_02 = $g_desarrollo->g5_08_02;


            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila, $g5_01_01);
            $sheet->setCellValue('F'.$fila, $g5_02_01);
            $sheet->setCellValue('G'.$fila, $g5_03_01);
            $sheet->setCellValue('H'.$fila, $g5_04_01);
            $sheet->setCellValue('I'.$fila, $g5_05_01);
            $sheet->setCellValue('J'.$fila, $g5_05_02);
            $sheet->setCellValue('K'.$fila, $g5_06_01);
            $sheet->setCellValue('L'.$fila, $g5_06_02);
            $sheet->setCellValue('M'.$fila, $g5_07_01);
            $sheet->setCellValue('N'.$fila, $g5_07_02);
            $sheet->setCellValue('O'.$fila, $g5_08_01);
            $sheet->setCellValue('P'.$fila, $g5_08_02);

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

?>