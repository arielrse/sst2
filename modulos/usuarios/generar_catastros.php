<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$iddepartamento = $_POST['iddepartamento'];
$codeidform     = $_POST['codeidform'];
$fechainicio    = $_POST['fechainicio'];
$fechafin       = $_POST['fechafin'];

$arr = explode('|', $codeidform);
$codForm = $arr[0];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Datos Catastro");
$sheet->setCellValue('A1', 'A1');
$sheet->setCellValue('B1', 'B1');
$sheet->setCellValue('C1', 'C1');
$sheet->setCellValue('D1', 'D1');


$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idcatastro, cc.data, s.nombre
            FROM catastro".$codForm." cc
            LEFT JOIN evento e ON cc.idevento = e.idevento
            LEFT JOIN sitio s  ON e.idsitio = s.idsitio
            WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."'";

$resultado = mysqli_query($conexion, $consulta);

$fila = 2;

while($row = mysqli_fetch_array($resultado)){

    $jsonData = $row["data"];
    $obj = json_decode($jsonData);
    $json_OK =	json_last_error() == JSON_ERROR_NONE;

    if ($json_OK){
        $sheet->setCellValue('A'.$fila, $obj->cm);
        $sheet->setCellValue('B'.$fila, $obj->sitioId);
        $sheet->setCellValue('C'.$fila, $obj->propertyId);
        $sheet->setCellValue('D'.$fila, $json_OK);
    } else {
        $sheet->setCellValue('A'.$fila, 'ERROR');
        $sheet->setCellValue('B'.$fila, $row['inicio']);
        $sheet->setCellValue('C'.$fila, $row['nombre']);
    }

    $fila++;
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