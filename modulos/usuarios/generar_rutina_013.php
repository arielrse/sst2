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
    "A1" =>  "Departamento",
    "B1" =>  "Provincia",
    "C1" =>  "Localidad",
    "D1" =>  "Municipio",
    "E1" =>  "ID Sitio",
    "F1" =>  "Property_id",
    "G1" =>  "CM/SCM",
    "H1" =>  "Latitud",
    "I1" =>  "Longitud",
    "J1" =>  "Trayecto",
    "K1" =>  "Dist Km",
    "L1" =>  "T. Viaje Hrs",
    "M1" =>  "Estado del camino",
    "N1" =>  "Traking de Ruta",
    "O1" =>  "Fecha de Mtto",
    "P1" =>  "Nombre Contacto",
    "Q1" =>  "Tipo Contacto",
    "R1" =>  "Tel. Celular",
    "S1" =>  "Tel. Fijo",
    "T1" =>  "Nombre Contacto",
    "U1" =>  "Tipo Contacto",
    "V1" =>  "Tel. Celular",
    "W1" =>  "Tel. Fijo",
    "X1" =>  "Tipo de  sitio",
    "Y1" =>  "Predio",
    "Z1" =>  "Cerramiento perimetral",
    "AA1" =>  "Dimension predio",
    "AB1" =>  "Loza de equipos",
    "AC1" =>  "Loza o caseta grupo",
    "AD1" =>  "Espacio en Loza equipos",
    "AE1" =>  "Tipo estructura 1",
    "AF1" =>  "Altura (m)",
    "AG1" =>  "Tipo estructura 2",
    "AH1" =>  "Altura (m)",
];

$sheet->setTitle("Datos Rutinas");
$sheet->getStyle('A1:AH1')->applyFromArray($tableHead);
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
        $departamento = $row["nombreDepto"];
        $provincia = $row["provincia"];
        $localidad = $row["localidad"];
        $municipio = $row["municipio"];
        $latitud    = $row["latitud"];
        $longitud   = $row["longitud"];
        $sitioId    = $row["sitioId"];
        $propertyId = $row["propertyId"];
        $cm = $row["cm"];
        $c_fechaRealizacion = $obj->c_fechaRealizacion;

        $b_acceso = $obj->b_acceso;
        $trayecto       = $b_acceso->b_01_01;
        $distancia      = $b_acceso->b_02_01;
        $tiempo_viaje   = $b_acceso->b_02_02;
        $estado_camino  = $b_acceso->b_03_01;
        $tracking_si    = $b_acceso->b_04_01;
        $tracking_no    = $b_acceso->b_04_02;

        $tracking = "";
        if ($tracking_si) {
            $tracking = "SI";
        }
        if ($tracking_no) {
            $tracking .= "NO";
        }


        $f_predio = $obj->f_predio;
        $f_01_01 = $f_predio->f_01_01; $f_01_02 = $f_predio->f_01_02; $f_01_03 = $f_predio->f_01_03;
        $f_02_01 = $f_predio->f_02_01; $f_02_02 = $f_predio->f_02_02;
        $f_03_01 = $f_predio->f_03_01; $f_03_02 = $f_predio->f_03_02;

        $g_estructura = $obj->g_estructura;
        $g_01_01 = $g_estructura->g_01_01; $g_01_02 = $g_estructura->g_01_02;
        $g_02_01 = $g_estructura->g_02_01; $g_02_02 = $g_estructura->g_02_02;

        $e_contacto = $obj->e_contacto;
        $e_01_01 = $e_contacto->e_01_01;
        $e_01_02 = $e_contacto->e_01_02;
        $e_02_01 = $e_contacto->e_02_01;
        $e_02_02 = $e_contacto->e_02_02;
        $e_03_01 = $e_contacto->e_03_01;
        $e_03_02 = $e_contacto->e_03_02;
        $e_04_01 = $e_contacto->e_04_01;
        $e_04_02 = $e_contacto->e_04_02;


        $sheet->setCellValue('A'.$fila, $departamento);
        $sheet->setCellValue('B'.$fila, $provincia);
        $sheet->setCellValue('C'.$fila, $localidad);
        $sheet->setCellValue('D'.$fila, $municipio);
        $sheet->setCellValue('E'.$fila, $sitioId);
        $sheet->setCellValue('F'.$fila, $propertyId);
        $sheet->setCellValue('G'.$fila, $cm);
        $sheet->setCellValue('H'.$fila, $latitud);
        $sheet->setCellValue('I'.$fila, $longitud);
        $sheet->setCellValue('J'.$fila, $trayecto);
        $sheet->setCellValue('K'.$fila, $distancia);
        $sheet->setCellValue('L'.$fila, $tiempo_viaje);
        $sheet->setCellValue('M'.$fila, $estado_camino);
        $sheet->setCellValue('N'.$fila, $tracking);
        $sheet->setCellValue('O'.$fila, $c_fechaRealizacion);
        $sheet->setCellValue('P'.$fila, $e_01_01);
        $sheet->setCellValue('Q'.$fila, $e_01_02);
        $sheet->setCellValue('R'.$fila, $e_02_01);
        $sheet->setCellValue('S'.$fila, $e_02_02);
        $sheet->setCellValue('T'.$fila, $e_03_01);
        $sheet->setCellValue('U'.$fila, $e_03_02);
        $sheet->setCellValue('V'.$fila, $e_04_01);
        $sheet->setCellValue('W'.$fila, $e_04_02);
        $sheet->setCellValue('X'.$fila, $f_01_01);
        $sheet->setCellValue('Y'.$fila, $f_01_02);
        $sheet->setCellValue('Z'.$fila, $f_01_03);
        $sheet->setCellValue('AA'.$fila, $f_02_01);
        $sheet->setCellValue('AB'.$fila, $f_02_02);
        $sheet->setCellValue('AC'.$fila, $f_03_01);
        $sheet->setCellValue('AD'.$fila, $f_03_02);
        $sheet->setCellValue('AE'.$fila, $g_01_01);
        $sheet->setCellValue('AF'.$fila, $g_01_02);
        $sheet->setCellValue('AG'.$fila, $g_02_01);
        $sheet->setCellValue('AH'.$fila, $g_02_02);
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