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

$sheet->setTitle("Datos Rutinas");

if ($codForm == '001'){
    $sheet->getStyle('A1:S1')->applyFromArray($tableHead);
    foreach ($rutina001_titulos as $columna => $valor){
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

        if ($codForm == '001'){
            $cm         = $row["cm"];
            $propertyId = $row["propertyId"];
            $sitioId    = $row["sitioId"];
            $c_fechaRealizacion = $obj->c_fechaRealizacion;

            $g_desarrollo = $obj->{'g_desarrollo'};
            $g09_1 = $g_desarrollo[8]->g09_1;
            $g10_1 = $g_desarrollo[9]->g10_1;
            $g11_1 = $g_desarrollo[10]->g11_1;
            $g12_1 = $g_desarrollo[11]->g12_1;
            $g13_1 = $g_desarrollo[12]->g13_1;
            $g14_1 = $g_desarrollo[13]->g14_1;
            $g15_1 = $g_desarrollo[14]->g15_1;
            $g16_1 = $g_desarrollo[15]->g16_1;
            $g17_1 = $g_desarrollo[16]->g17_1;
            $g18_1 = $g_desarrollo[17]->g18_1;

            $g_descarga = $obj->{'g_descarga'};
            $g20_1_1 = $g_descarga->g20_1_1;
            $g20_1_2 = $g_descarga->g20_1_2;
            $g20_2_1 = $g_descarga->g20_2_1;
            $g20_2_2 = $g_descarga->g20_2_2;

            $g_resistencia_bb = $obj->{'g_resistencia_bb'};
            $g21_1 = $g_resistencia_bb->g21_1;


            $sheet->setCellValue('A'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('B'.$fila, $cm);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $sitioId);
            $sheet->setCellValue('E'.$fila, $g09_1);
            $sheet->setCellValue('F'.$fila, $g10_1);
            $sheet->setCellValue('G'.$fila, $g11_1);
            $sheet->setCellValue('H'.$fila, $g12_1);
            $sheet->setCellValue('I'.$fila, $g13_1);
            $sheet->setCellValue('J'.$fila, $g14_1);
            $sheet->setCellValue('K'.$fila, $g15_1);
            $sheet->setCellValue('L'.$fila, $g16_1);
            $sheet->setCellValue('M'.$fila, $g17_1);
            $sheet->setCellValue('N'.$fila, $g18_1);
            $sheet->setCellValue('O'.$fila, $g20_1_1);
            $sheet->setCellValue('P'.$fila, $g20_1_2);
            $sheet->setCellValue('Q'.$fila, $g20_2_1);
            $sheet->setCellValue('R'.$fila, $g20_2_2);
            $sheet->setCellValue('S'.$fila, $g21_1);
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