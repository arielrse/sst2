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
$idformulario = $arr[1];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$catastro001_titulos = [
    "A1" => "CM/SCM:",
    "B1" => "ID Sitio:",
    "C1" => "Nombre sitio",
    "D1" => "Funcionalidad (en servicio/fuera de servicio)",
    "E1" => "Estado (obsoleto/con falla, bueno)",
    "F1" => "Derivación de Media tensión  (MT), Tensión en primario - KV",
    "G1" => "Trifasico / Monofasico",
    "H1" => "Propiedad (Empresa distribuidora/ENTEL S.A.)",
    "I1" => "Empresa distribuidora de energía",
    "J1" => "Longitud de línea (MT) - Km",
    "K1" => "Tipo de Poste",
    "L1" => "cantidad total de postes",
    "M1" => "Largo total del poste - m",
    "N1" => "Seccionador fusible MT en Partida (Si/No)",
    "O1" => "Capacidad - KV",
    "P1" => "Seccionador fusible MT en transformador (Si/No)",
    "Q1" => "Pararrayo de línea MT en partida (Si/No)",
    "R1" => "Capacidad - KA",
    "S1" => "Pararrayo fin de línea MT en transformador (Si/No)",
    "T1" => "Capacidad - KA",
    "U1" => "Sistema de bajante a tierra de la LMT (SI/NO)",
    "V1" => "Cantidad (m)",
    "W1" => "Sistema de puesta a tierra en puesto de transformación (SI/NO)",
    "X1" => "medida - ohm (*)",
    "Y1" => "Capacidad del transformador - KVA ",
    "Z1" => "Frecuencia - Hz",
    "AA1" => "Marca de transformador",
    "AB1" => "Modelo de transformador",
    "AC1" => "Fecha de verificación (dd/mm/aaaa)",
    "AD1" => "N° Serie de transformador ",
    "AE1" => "Sistema en baja tensión (BT)",
    "AF1" => "Tensión - V (baja)",
    "AG1" => "Fecha de verificación (dd/mm/aaaa)",
    "AH1" => "OBS.",

];

$catastro002_titulos = [
    "A1" => "CM/SCM:",
    "B1" => "ID Sitio:",
    "C1" => "Nombre sitio",
    "D1" => "Empresa distribuidora de energía",
    "E1" => "Sistema en baja tensión (BT)   (SI/NO)",
    "F1" => "Tensión - V",
    "G1" => "Longitud de acometida - m",
    "H1" => "N° de medidor",
    "I1" => "N° de Cliente",
    "J1" => "Reja de seguridad con candado (SI/NO)",
    "K1" => "Protector de transcientes de primer nivel (SI/NO)",
    "L1" => "Fusible de protección (SI/NO)",
    "M1" => "Termomagnético principal de protección (SI/NO)",
    "N1" => "Capacidad - A",
    "O1" => "Tipo del elemento de protección principal",
    "P1" => "Barra de distribución (SI/NO)",
    "Q1" => "Barra de tierra (SI/NO)",
    "R1" => "Cámara de tierra de pilastra (SI/NO)",
    "S1" => "Fecha de inicio de consumo de energía",
    "T1" => "Proyecto",
    "U1" => "Fecha vencimiento de garantía",
    "V1" => "OBS.",

];
$catastro003_titulos = [
    "A1" => "CM/SCM:",
    "B1" => "ID Sitio:",
    "C1" => "Nombre sitio",
    "D1" => "Funcionalidad (en servicio/fuera de servicio)",
    "E1" => "Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)",
    "F1" => "Tipo de Tablero (REFERENCIA CÓDIGO TABLEROS)",
    "G1" => "Marca",
    "H1" => "N° SERIE",
    "I1" => "Tipo de uso (Indoor/Outdoor)",
    "J1" => "Tipo de montaje (Pared/Piso/Soporte)",
    "K1" => "Sistema en baja tensión BT (Monofásico/Trifásico/Bifásico/Continua)",
    "L1" => "Capacidad - A ",
    "M1" => "Tipo del elemento de protección principal",
    "N1" => "Protector de segundo nivel",
    "O1" => "Tipo de Distribución (Por Chicotillo/Por Peineta)",
    "P1" => "Fecha de inicio de operación",
    "Q1" => "",
    "R1" => "",
    "S1" => "",
    "T1" => "",
    "U1" => "",
    "V1" => "",

];
$catastro004_titulos = [
    "A1" => "CM/SCM:",
    "B1" => "ID Sitio:",
    "C1" => "Nombre sitio",
    "D1" => "",
    "E1" => "",
    "F1" => "",
    "G1" => "",
    "H1" => "",
    "I1" => "",
    "J1" => "",
    "K1" => "",
    "L1" => "",
    "M1" => "",
    "N1" => "",
    "O1" => "",
    "P1" => "",
    "Q1" => "",
    "R1" => "",
    "S1" => "",
    "T1" => "",
    "U1" => "",
    "V1" => "",

];
$catastro005_titulos = [
    "A1" => "CM/SCM:",
    "B1" => "ID Sitio:",
    "C1" => "Nombre sitio",
    "D1" => "",
    "E1" => "",
    "F1" => "",
    "G1" => "",
    "H1" => "",
    "I1" => "",
    "J1" => "",
    "K1" => "",
    "L1" => "",
    "M1" => "",
    "N1" => "",
    "O1" => "",
    "P1" => "",
    "Q1" => "",
    "R1" => "",
    "S1" => "",
    "T1" => "",
    "U1" => "",
    "V1" => "",

];
$sheet->setTitle("Datos Catastro");

if ($codForm == '001'){
    foreach ($catastro001_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}

if ($codForm == '002'){
    foreach ($catastro002_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '003'){
    foreach ($catastro003_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '004'){
    foreach ($catastro004_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '005'){
    foreach ($catastro005_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}

$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idcatastro, cc.data
            FROM catastro".$codForm." cc
            LEFT JOIN evento e ON cc.idevento = e.idevento
            WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."'";

$resultado = mysqli_query($conexion, $consulta);
$fila = 2;

/*while($row = mysqli_fetch_array($resultado)){
    $sheet->setCellValue('A'.$fila, $row['idevento']);
    $sheet->setCellValue('B'.$fila, $row['idcatastro']);
    $sheet->setCellValue('C'.$fila, $row['inicio']);
    $sheet->setCellValue('D'.$fila, $row['data']);
    $fila++;
}*/

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