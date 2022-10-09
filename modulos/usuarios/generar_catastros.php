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
$sheet->setCellValue('A1', 'IDEVENTO');
$sheet->setCellValue('B1', 'IDCATASTRO');
$sheet->setCellValue('C1', 'FECHA_INICIO');
$sheet->setCellValue('D1', 'DATA');


$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idcatastro, cc.data
            FROM catastro".$codForm." cc
            LEFT JOIN evento e ON cc.idevento = e.idevento
            WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."'";

$resultado = mysqli_query($conexion, $consulta);

$fila = 2;


while($row = mysqli_fetch_array($resultado)){
    $sheet->setCellValue('A'.$fila, $row['idevento']);
    $sheet->setCellValue('B'.$fila, $row['idcatastro']);
    $sheet->setCellValue('C'.$fila, $row['inicio']);
    $sheet->setCellValue('D'.$fila, $row['data']);
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