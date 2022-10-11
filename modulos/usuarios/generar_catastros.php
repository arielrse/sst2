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

$catastro001_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Código activo de energía",
    "G1" =>  "Funcionalidad (en servicio/fuera de servicio)",
    "H1" =>  "Estado (obsoleto/con falla, bueno)",
    "I1" =>  "Derivación de Media tensión  (MT), Tensión en primario - KV",
    "J1" =>  "Propiedad (Empresa distribuidora/ENTEL S.A.)",
    "K1" =>  "Empresa distribuidora de energía",
    "L1" =>  "Longitud de línea (MT) - Km",
    "M1" =>  "Tipo de Poste",
    "N1" =>  "cantidad total de postes",
    "O1" =>  "Largo total del poste - m",
    "P1" =>  "Seccionador fusible MT en Partida (Si/No)",
    "Q1" =>  "Capacidad - KV",
    "R1" =>  "Seccionador fusible MT en transformador (Si/No)",
    "S1" =>  "Capacidad - KV",
    "T1" =>  "Pararrayo de línea MT en partida (Si/No)",
    "U1" =>  "Capacidad - KV",
    "V1" =>  "Pararrayo fin de línea MT en transformador (Si/No)",
    "W1" =>  "Capacidad - KV",
    "X1" =>  "Sistema de puesta a tierra en puesto de transformación (SI/NO)",
    "Y1" =>  "medida - ohm (*)",
    "Z1" =>  "Sistema de puesta a tierra de paso",
    "AA1" => "Cantidad (m)",
    "AB1" => "Sistema en baja tensión (BT)",
    "AC1" => "Tensión - V (baja)",
    "AD1" => "Capacidad del transformador - KVA ",
    "AE1" => "Frecuencia - Hz",
    "AF1" => "Marca de transformador",
    "AG1" => "Modelo de transformador",
    "AH1" => "Fecha de verificación (dd/mm/aaaa)",
    "AI1" => "N° Serie de transformador ",
    "AJ1" => "Fecha de verificación (dd/mm/aaaa)",
    "AK1" => "OBS.",

];

$catastro002_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Código activo de energía",
    "G1" => "Empresa distribuidora de energía",
    "H1" => "Sistema en baja tensión (BT)   (SI/NO)",
    "I1" => "Tensión - V",
    "J1" => "Longitud de acometida - m",
    "K1" => "N° de medidor",
    "L1" => "N° de Cliente",
    "M1" => "Reja de seguridad con candado (SI/NO)",
    "N1" => "Protector de transcientes de primer nivel (SI/NO)",
    "O1" => "Fusible de protección (SI/NO)",
    "P1" => "Termomagnético principal de protección (SI/NO)",
    "Q1" => "Capacidad - A",
    "R1" => "Tipo del elemento de protección principal",
    "S1" => "Barra de distribución (SI/NO)",
    "T1" => "Barra de tierra (SI/NO)",
    "U1" => "Cámara de tierra de pilastra (SI/NO)",
    "w1" => "Fecha de inicio de consumo de energía",
    "x1" => "Proyecto",
    "y1" => "Fecha vencimiento de garantía",
    "z1" => "OBS.",

];
$catastro003_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "Altura de operación - msnm",
    "I1" => "Funcionalidad (en servicio/fuera de servicio)",
    "J1" => "Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)",
    "K1" => "Marca",
    "L1" => "Modelo",
    "M1" => "N° SERIE",
    "N1" => "Tipo de uso (Indoor/Outdoor)",
    "O1" => "Cabina de insonorización",
    "P1" => "Sistema en baja tensión BT (Monofásico/Trifásico/Bifásico)",
    "Q1" => "Voltaje - V ",
    "R1" => "Frecuencia - Hz",
    "S1" => "Capacidad nominal - KVA",
    "T1" => "Capacidad efectiva - KVA",
    "U1" => "Tablero de transferencia ATS (Integrado/Externo)",
    "V1" => "Capacidad del tanque  integrado - Lt",
    "W1" => "Capacidad del tanque externo - Lt",
    "X1" => "bomba de trasiego",
    "Y1" => "Automático - Manual",
    "Z1" => "Precalentador",
    "AA1" => "Potencia, capacidad térmica - KW",
    "AB1" => "Fecha de inicio de operación",
    "AC1" => "Proyecto",
    "AD1" => "Fecha de vencimiento de garantía",
    "AE1" => "OBS.",
];
$catastro004_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "cod_complemento",
    "I1" => "Equipo de pertenencia (Grupo Electrógeno/UPS)",
    "J1" => "Funcionalidad (en servicio/fuera de servicio)",
    "K1" => "Estado (obsoleto/falta de capacidad/con falla)",
    "L1" => "Tablero de transferencia ATS (Integrado/Externo)",
    "M1" => "Marca",
    "N1" => "Modelo",
    "O1" => "N° Serie",
    "P1" => "Sistema en baja tensión BT (Monofásico/Bifásico/trifásico)",
    "Q1" => "Voltaje - V",
    "R1" => "Capacidad - KVA",
    "S1" => "Protector de segundo nivel",
    "T1" => "Tipo de uso (Indoor / Outdoor)",
    "U1" => "Año de inicio de operación",
    "V1" => "Fecha de inicio de operación",
    "W1" => "Proyecto",
    "X1" => "Fecha de vencimiento de garantía",
    "Y1" => "OBS.",

];
$catastro005_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "TDP",
    "I1" => "TR1",
    "J1" => "TDS",
    "K1" => "TR2",
    "L1" => "TU1",
    "M1" => "TCL",
    "N1" => "TU2",
    "O1" => "TSG",
    "P1" => "Funcionalidad (en servicio/fuera de servicio)",
    "Q1" => "Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)",
    "R1" => "Tipo de Tablero (REFERENCIA CÓDIGO TABLEROS)",
    "S1" => "Marca",
    "T1" => "N° SERIE",
    "U1" => "Tipo de uso (Indoor/Outdoor)",
    "V1" => "Tipo de montaje (Pared/Piso/Soporte)",
    "W1" => "Sistema en baja tensión BT (Monofásico/Trifásico/Bifásico/Continua)",
    "X1" => "Capacidad - A",
    "Y1" => "Tipo del elemento de protección principal",
    "Z1" => "Protector de segundo nivel",
    "AA1"=> "Tipo de Distribución (Por Chicotillo/Por Peineta)",
    "AB1"=> "Fecha de inicio de operación",
    "AC1"=> "Proyecto",
    "AD1"=> "Fecha de vencimiento de garantía",
    "AE1"=> "OBS.",

];
$sheet->setTitle("Datos Catastro");

$sheet->getStyle('A1:AK1')->applyFromArray($tableHead);

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
// Recuperando catastros de la bd
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

        if ($codForm == '001'){
            $cm = $obj->cm;
            $sitioId = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor = $obj->indoor_outdoor;
            $cod_activo = $obj->cod_activo;
            $observaciones = $obj->observaciones;
            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01; $d07_02 = $desarrollo_d->d07_02;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
            $d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
            $d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
            $d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
            $d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
            $d14_01 = $desarrollo_d->d14_01; $d14_02 = $desarrollo_d->d14_02;
            $d15_01 = $desarrollo_d->d15_01; $d15_02 = $desarrollo_d->d15_02;
            $d16_01 = $desarrollo_d->d16_01; $d16_02 = $desarrollo_d->d16_02;
            $d17_01 = $desarrollo_d->d17_01;
            $d18_01 = $desarrollo_d->d18_01; $d18_02 = $desarrollo_d->d18_02;
            $d19_01 = $desarrollo_d->d19_01; $d19_02 = $desarrollo_d->d19_02;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_activo);
            $sheet->setCellValue('G'.$fila, $d01_01);
            $sheet->setCellValue('H'.$fila, $d02_01);
            $sheet->setCellValue('I'.$fila, $d03_01);
            $sheet->setCellValue('J'.$fila, $d04_01);
            $sheet->setCellValue('K'.$fila, $d05_01);
            $sheet->setCellValue('L'.$fila, $d06_01);
            $sheet->setCellValue('M'.$fila, $d07_01);
            $sheet->setCellValue('N'.$fila, $d07_02);
            $sheet->setCellValue('O'.$fila, $d08_01);
            $sheet->setCellValue('P'.$fila, $d09_01);
            $sheet->setCellValue('Q'.$fila, $d09_02);
            $sheet->setCellValue('R'.$fila, $d10_01);
            $sheet->setCellValue('S'.$fila, $d10_02);
            $sheet->setCellValue('T'.$fila, $d11_01);
            $sheet->setCellValue('U'.$fila, $d11_02);
            $sheet->setCellValue('V'.$fila, $d12_01);
            $sheet->setCellValue('W'.$fila, $d12_02);
            $sheet->setCellValue('X'.$fila, $d13_01);
            $sheet->setCellValue('Y'.$fila, $d13_02);
            $sheet->setCellValue('Z'.$fila, $d14_01);
            $sheet->setCellValue('AA'.$fila, $d14_02);
            $sheet->setCellValue('AB'.$fila, $d15_01);
            $sheet->setCellValue('AC'.$fila, $d15_02);
            $sheet->setCellValue('AD'.$fila, $d16_01);
            $sheet->setCellValue('AE'.$fila, $d16_02);
            $sheet->setCellValue('AF'.$fila, $d17_01);
            $sheet->setCellValue('AG'.$fila, $d18_01);
            $sheet->setCellValue('AH'.$fila, $d18_02);
            $sheet->setCellValue('AI'.$fila, $d19_01);
            $sheet->setCellValue('AJ'.$fila, $d19_02);
            $sheet->setCellValue('AK'.$fila, $observaciones);
        }


    }
    if ($json_OK){

        if ($codForm == '002'){
            $cm = $obj->cm;
            $sitioId = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor = $obj->indoor_outdoor;
            $cod_activo = $obj->cod_activo;
            $observaciones = $obj->observaciones;
            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01; $d02_02 = $desarrollo_d->d02_02;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
            $d10_01 = $desarrollo_d->d10_01;
            $d11_01 = $desarrollo_d->d11_01;
            $d12_01 = $desarrollo_d->d12_01;
            $d13_01 = $desarrollo_d->d13_01;
            $d14_01 = $desarrollo_d->d14_01;
            $d15_01 = $desarrollo_d->d15_01;
            $d16_01 = $desarrollo_d->d16_01;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_activo);
            $sheet->setCellValue('G'.$fila, $d01_01);
            $sheet->setCellValue('H'.$fila, $d02_01);
            $sheet->setCellValue('I'.$fila, $d02_02);
            $sheet->setCellValue('J'.$fila, $d03_01);
            $sheet->setCellValue('K'.$fila, $d04_01);
            $sheet->setCellValue('L'.$fila, $d05_01);
            $sheet->setCellValue('M'.$fila, $d06_01);
            $sheet->setCellValue('N'.$fila, $d07_01);
            $sheet->setCellValue('O'.$fila, $d08_01);
            $sheet->setCellValue('P'.$fila, $d09_01);
            $sheet->setCellValue('Q'.$fila, $d09_02);
            $sheet->setCellValue('R'.$fila, $d10_01);
            $sheet->setCellValue('T'.$fila, $d11_01);
            $sheet->setCellValue('U'.$fila, $d12_01);
            $sheet->setCellValue('V'.$fila, $d13_01);
            $sheet->setCellValue('W'.$fila, $d14_01);
            $sheet->setCellValue('X'.$fila, $d15_01);
            $sheet->setCellValue('Y'.$fila, $d16_01);
            $sheet->setCellValue('Z'.$fila, $observaciones);
        }


    }
    if ($json_OK){

        if ($codForm == '003'){
            $cm = $obj->cm;
            $sitioId = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor = $obj->indoor_outdoor;
            $cod_fijo   = $obj->cod_fijo;
            $cod_activo = $obj->cod_activo;
            $observaciones = $obj->observaciones;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01;
            $d10_01 = $desarrollo_d->d10_01;
            $d11_01 = $desarrollo_d->d11_01;
            $d12_01 = $desarrollo_d->d12_01;
            $d13_01 = $desarrollo_d->d13_01;
            $d14_01 = $desarrollo_d->d14_01;
            $d15_01 = $desarrollo_d->d15_01;
            $d16_01 = $desarrollo_d->d16_01;
            $d17_01 = $desarrollo_d->d17_01; $d17_02 = $desarrollo_d->d17_02;
            $d18_01 = $desarrollo_d->d18_01; $d18_02 = $desarrollo_d->d18_02;
            $d19_01 = $desarrollo_d->d19_01;
            $d20_01 = $desarrollo_d->d20_01;
            $d21_01 = $desarrollo_d->d21_01;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila,$cod_activo);
            $sheet->setCellValue('H'.$fila,$d01_01);
            $sheet->setCellValue('I'.$fila,$d02_01);
            $sheet->setCellValue('J'.$fila,$d03_01);
            $sheet->setCellValue('K'.$fila,$d04_01);
            $sheet->setCellValue('L'.$fila,$d05_01);
            $sheet->setCellValue('M'.$fila,$d06_01);
            $sheet->setCellValue('N'.$fila,$d07_01);

            $sheet->setCellValue('O'.$fila,$d08_01);
            $sheet->setCellValue('P'.$fila,$d09_01);
            $sheet->setCellValue('Q'.$fila,$d10_01);
            $sheet->setCellValue('R'.$fila,$d11_01);
            $sheet->setCellValue('S'.$fila,$d12_01);
            $sheet->setCellValue('T'.$fila,$d13_01);
            $sheet->setCellValue('U'.$fila,$d14_01);
            $sheet->setCellValue('V'.$fila,$d15_01);
            $sheet->setCellValue('W'.$fila,$d16_01);
            $sheet->setCellValue('X'.$fila,$d17_01);
            $sheet->setCellValue('Y'.$fila,$d17_02);
            $sheet->setCellValue('Z'.$fila,$d18_01);
            $sheet->setCellValue('AA'.$fila,$d18_02);
            $sheet->setCellValue('AB'.$fila,$d19_01);
            $sheet->setCellValue('AC'.$fila,$d20_01);
            $sheet->setCellValue('AD'.$fila,$d21_01);
            $sheet->setCellValue('AE'.$fila, $observaciones);
        }


    }
    if ($json_OK){

        if ($codForm == '004'){
            $cm = $obj->cm;
            $sitioId = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor = $obj->indoor_outdoor;
            $cod_fijo   = $obj->cod_fijo;
            $cod_activo = $obj->cod_activo;
            $cod_complemento = $obj->cod_complemento;
            $observaciones = $obj->observaciones;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01;
            $d10_01 = $desarrollo_d->d10_01;
            $d11_01 = $desarrollo_d->d11_01;
            $d12_01 = $desarrollo_d->d12_01;
            $d13_01 = $desarrollo_d->d13_01;
            $d14_01 = $desarrollo_d->d14_01;
            $d15_01 = $desarrollo_d->d15_01;
            $d16_01 = $desarrollo_d->d16_01;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila,$cod_activo);
            $sheet->setCellValue('H'.$fila,$cod_complemento);
            $sheet->setCellValue('I'.$fila,$d01_01);
            $sheet->setCellValue('J'.$fila,$d02_01);
            $sheet->setCellValue('K'.$fila,$d03_01);
            $sheet->setCellValue('L'.$fila,$d04_01);
            $sheet->setCellValue('M'.$fila,$d05_01);
            $sheet->setCellValue('N'.$fila,$d06_01);
            $sheet->setCellValue('O'.$fila,$d07_01);
            $sheet->setCellValue('P'.$fila,$d08_01);
            $sheet->setCellValue('Q'.$fila,$d09_01);
            $sheet->setCellValue('R'.$fila,$d10_01);
            $sheet->setCellValue('S'.$fila,$d11_01);
            $sheet->setCellValue('T'.$fila,$d12_01);
            $sheet->setCellValue('U'.$fila,$d13_01);
            $sheet->setCellValue('V'.$fila,$d14_01);
            $sheet->setCellValue('W'.$fila,$d15_01);
            $sheet->setCellValue('X'.$fila,$d16_01);
            $sheet->setCellValue('y'.$fila, $observaciones);
        }


    }
    if ($json_OK){

        if ($codForm == '005'){
            $cm = $obj->cm;
            $sitioId = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor = $obj->indoor_outdoor;
            $cod_fijo   = $obj->cod_fijo;
            $cod_activo = $obj->cod_activo;
            $tdp        = $obj->tdp;
            $tr1        = $obj->tr1;
            $tds        = $obj->tds;
            $tr2        = $obj->tr2;
            $tu1        = $obj->tu1;
            $tcl        = $obj->tcl;
            $tu2        = $obj->tu2;
            $tsg        = $obj->tsg;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01;
            $d10_01 = $desarrollo_d->d10_01;
            $d11_01 = $desarrollo_d->d11_01;
            $d12_01 = $desarrollo_d->d12_01;
            $d13_01 = $desarrollo_d->d13_01;
            $d14_01 = $desarrollo_d->d14_01;
            $d15_01 = $desarrollo_d->d15_01;
            $observaciones = $obj->observaciones;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila,$cod_activo);
            $sheet->setCellValue('H'.$fila,$tdp);
            $sheet->setCellValue('I'.$fila,$tr1);
            $sheet->setCellValue('J'.$fila,$tds);
            $sheet->setCellValue('K'.$fila,$tr2);
            $sheet->setCellValue('L'.$fila,$tu1);
            $sheet->setCellValue('M'.$fila,$tcl);
            $sheet->setCellValue('N'.$fila,$tu2);
            $sheet->setCellValue('O'.$fila,$tsg);
            $sheet->setCellValue('P'.$fila,$d01_01);
            $sheet->setCellValue('Q'.$fila,$d02_01);
            $sheet->setCellValue('R'.$fila,$d03_01);
            $sheet->setCellValue('S'.$fila,$d04_01);
            $sheet->setCellValue('T'.$fila,$d05_01);
            $sheet->setCellValue('U'.$fila,$d06_01);
            $sheet->setCellValue('V'.$fila,$d07_01);
            $sheet->setCellValue('W'.$fila,$d08_01);
            $sheet->setCellValue('X'.$fila,$d09_01);
            $sheet->setCellValue('Y'.$fila,$d10_01);
            $sheet->setCellValue('Z'.$fila,$d11_01);
            $sheet->setCellValue('AA'.$fila,$d12_01);
            $sheet->setCellValue('AB'.$fila,$d13_01);
            $sheet->setCellValue('AC'.$fila,$d14_01);
            $sheet->setCellValue('AD'.$fila,$d15_01);
            $sheet->setCellValue('AE'.$fila, $observaciones);
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
header('Content-Disposition: attachment;filename="myfile.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*$writer = new Xlsx($spreadsheet);
$writer->save('hello-world.xlsx');*/



//header("Location: ".$link_modulo."?path=ver_usuarios.php");

?>