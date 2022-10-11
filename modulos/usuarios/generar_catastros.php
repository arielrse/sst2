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
$catastro006_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "cod_complemento",
    "I1" => "upsa1",
    "J1" => "upsa2",
    "K1" => "upsb1",
    "L1" => "upsb2",
    "M1" => "UPSA",
    "N1" => "UPSB",
    "O1" => "Funcionalidad (en servicio/fuera de servicio)",
    "P1" => "Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)",
    "Q1" => "Tipo de Tablero (REFERENCIA CÓDIGO TABLEROS)",
    "R1" => "Marca",
    "S1" => "Modelo",
    "T1" => "N° Serie",
    "U1" => "ByPass (Interno/Externo)",
    "V1" => "Tipo de uso (Indoor/Outdoor)",
    "W1" => "Voltaje de entrada - VAC",
    "X1" => "Voltaje de salida - VAC",
    "Y1" => "Capacidad - KVA",
    "Z1" => " Corriente total - A",
    "AA1"=> "Numero de Serie",
    "AB1"=> "Modelo de módulos de Control",
    "AC1"=> "Cantidad de módulos en uso ",
    "AD1"=> "Cantidad espacio libre para módulos",
    "AE1"=> "Capacidad de cada módulo - KVA",
    "AF1"=> "Corriente - A",
    "AG1"=> "Numero de Serie 1",
    "AH1"=> "Modelo de módulos de Potencia 1",
    "AI1"=> "Numero de Serie 2",
    "AJ1"=> "Modelo de módulos de Potencia 2",
    "AK1"=> "Numero de Serie 3",
    "AL1"=> "Modelo de módulos de Potencia 3",
    "AM1"=> "Numero de Serie 4",
    "AN1"=> "Modelo de módulos de Potencia 4",
    "AO1"=> "Numero de Serie 5",
    "AP1"=> "Modelo de módulos de Potencia 5",
    "AQ1"=> "Numero de Serie 6",
    "AR1"=> "Modelo de módulos de Potencia 6",
    "AS1"=> "Numero de Serie 7",
    "AT1"=> "Modelo de módulos de Potencia 7",
    "AU1"=> "Numero de Serie 8",
    "AV1"=> "Modelo de módulos de Potencia 8",
    "AW1"=> "Fecha de inicio de operación",
    "AX1"=> "Proyecto",
    "AY1"=> "Fecha de vencimiento de garantía",
    "AZ1"=> "OBS.",

];
$catastro007_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "cod_complemento",
    "I1" => "reca1",
    "J1" => "reca2",
    "K1" => "recb1",
    "L1" => "recb2",
    "M1" => "RECA",
    "N1" => "RECB",
    "O1" => "Funcionalidad (en servicio/fuera de servicio)",
    "P1" => "Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)",
    "Q1" => "Sistema en baja tensión BT (Monofásico/Trifásico)",
    "R1" => "Marca",
    "S1" => "Modelo",
    "T1" => "N° Serie",
    "U1" => "Tipo de uso (Indoor/Outdoor)",
    "V1" => "Voltaje de entrada - VAC",
    "W1" => "Voltaje de salida - VAC",
    "X1" => "Capacidad - KVA",
    "Y1" => "Corriente total - A",
    "Z1" => "Numero de Serie",
    "AA1"=> "Modelo de módulos de Control",
    "AB1"=> "Cantidad de módulos en uso ",
    "AC1"=> "Cantidad espacio libre para módulos",
    "AD1"=> "Capacidad de cada módulo - KVA",
    "AE1"=> "Corriente - A",
    "AF1"=> "Numero de Serie 1",
    "AG1"=> "Modelo de módulos de Potencia 1",
    "AH1"=> "Numero de Serie 2",
    "AI1"=> "Modelo de módulos de Potencia 2",
    "AJ1"=> "Numero de Serie 3",
    "AK1"=> "Modelo de módulos de Potencia 3",
    "AL1"=> "Numero de Serie 4",
    "AM1"=> "Modelo de módulos de Potencia 4",
    "AN1"=> "Numero de Serie 5",
    "AO1"=> "Modelo de módulos de Potencia 5",
    "AP1"=> "Numero de Serie 6",
    "AQ1"=> "Modelo de módulos de Potencia 6",
    "AR1"=> "Numero de Serie 7",
    "AS1"=> "Modelo de módulos de Potencia 7",
    "AT1"=> "Numero de Serie 8",
    "AU1"=> "Modelo de módulos de Potencia 8",
    "AV1"=> "Fecha de inicio de operación",
    "AW1"=> "Proyecto",
    "AX1"=> "Fecha de vencimiento de garantía",
    "AY1"=> "OBS.",

];
$catastro008_titulos = [
    "A1" => "CM/SCM",
    "B1" => "ID Sitio",
    "C1" => "Nombre sitio",
    "D1" => "Fecha de catastro",
    "E1" => "Indoor/Outdoor",
    "F1" => "Cod_fijo",
    "G1" => "cod_activo",
    "H1" => "cod_complemento",
    "I1" => "upsa1",
    "J1" => "upsa2",
    "K1" => "upsb1",
    "L1" => "upsb2",
    "M1" => "reca1",
    "N1" => "reca2",
    "O1" => "recb1",
    "P1" => "recb2",
    "Q1" => "RECA",
    "R1" => "RECB",
    "S1" => "UPSA",
    "T1" => "UPSB",
    "U1" => "Funcionalidad (en servicio/fuera de servicio)",
    "V1" => "Estado (degradado/dañado)",
    "W1" => "Tipo de Batería (AGM/VRLA/LITIO)",
    "X1" => "Cantidad de bancos de baterías",
    "Y1" => "Total de baterías",
    "Z1" => "Marca",
    "AA1"=> "Modelo",
    "AB1"=> "Autonomía total del banco de baterías - Ah",
    "AC1"=> "Horas - Minutos",
    "AD1"=> "Contenedor Gabinete (Outdoor)/Rack/Estructura (Indoor)",
    "AE1"=> "Dimensiones de bateria (Profundidad mm)",
    "AF1"=> "Dimensiones de bateria (Alto mm)",
    "AG1"=> "Dimensiones de bateria (Ancho mm)",
    "AH1"=> "Voltaje de banco - VDC",
    "AI1"=> "Voltaje de batería - VDC",
    "AJ1"=> "Fecha de fabricación",
    "AK1"=> "Fecha de inicio de operación",
    "AL1"=> "Proyecto",
    "AM1"=> "Fecha de vencimiento de garantía",
    "AN1"=> "OBS.",

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
if ($codForm == '006'){
    foreach ($catastro006_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '007'){
    foreach ($catastro007_titulos as $columna => $valor){
        $sheet->setCellValue($columna, $valor);
    }
}
if ($codForm == '008'){
    foreach ($catastro008_titulos as $columna => $valor){
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
    if ($json_OK){

        if ($codForm == '006'){
            $cm         = $obj->cm;
            $sitioId    = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor     = $obj->indoor_outdoor;
            $cod_fijo        = $obj->cod_fijo;
            $cod_activo      = $obj->cod_activo;
            $cod_complemento = $obj->cod_complemento;
            $upsa1           =$obj->upsa1;
            $upsa2           =$obj->upsa2;
            $upsb1           =$obj->upsb1;
            $upsb2           =$obj->upsb2;
            $fuente_a        =$obj->fuente_a;
            $fuente_b        =$obj->fuente_b;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d->d04_02;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01;
            $d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
            $d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
            $d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
            $d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
            $d14_01_01 = $desarrollo_d->d14_01_01; $d14_01_02 = $desarrollo_d->d14_01_02;
            $d14_02_01 = $desarrollo_d->d14_02_01; $d14_02_02 = $desarrollo_d->d14_02_02;
            $d14_03_01 = $desarrollo_d->d14_03_01; $d14_03_02 = $desarrollo_d->d14_03_02;
            $d14_04_01 = $desarrollo_d->d14_04_01; $d14_04_02 = $desarrollo_d->d14_04_02;
            $d14_05_01 = $desarrollo_d->d14_05_01; $d14_05_02 = $desarrollo_d->d14_05_02;
            $d14_06_01 = $desarrollo_d->d14_06_01; $d14_06_02 = $desarrollo_d->d14_06_02;
            $d14_07_01 = $desarrollo_d->d14_07_01; $d14_07_02 = $desarrollo_d->d14_07_02;
            $d14_08_01 = $desarrollo_d->d14_08_01; $d14_08_02 = $desarrollo_d->d14_08_02;
            $d15_01 = $desarrollo_d->d15_01;
            $d16_01 = $desarrollo_d->d16_01;
            $d17_01 = $desarrollo_d->d17_01;
            $observaciones = $obj->observaciones;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila, $cod_activo);
            $sheet->setCellValue('H'.$fila, $cod_complemento);
            $sheet->setCellValue('I'.$fila, $upsa1);
            $sheet->setCellValue('J'.$fila, $upsa2);
            $sheet->setCellValue('K'.$fila, $upsb1);
            $sheet->setCellValue('L'.$fila, $upsb2);
            $sheet->setCellValue('M'.$fila, $fuente_a);
            $sheet->setCellValue('N'.$fila, $fuente_b);
            $sheet->setCellValue('O'.$fila, $d01_01);
            $sheet->setCellValue('P'.$fila, $d02_01);
            $sheet->setCellValue('Q'.$fila, $d03_01);
            $sheet->setCellValue('R'.$fila, $d04_01);
            $sheet->setCellValue('S'.$fila, $d04_02);
            $sheet->setCellValue('T'.$fila, $d05_01);
            $sheet->setCellValue('U'.$fila, $d06_01);
            $sheet->setCellValue('V'.$fila, $d07_01);
            $sheet->setCellValue('W'.$fila, $d08_01);
            $sheet->setCellValue('X'.$fila, $d09_01);
            $sheet->setCellValue('Y'.$fila, $d10_01);
            $sheet->setCellValue('Z'.$fila, $d10_02);
            $sheet->setCellValue('AA'.$fila,$d11_01);
            $sheet->setCellValue('AB'.$fila,$d11_02);
            $sheet->setCellValue('AC'.$fila,$d12_01);
            $sheet->setCellValue('AD'.$fila,$d12_02);
            $sheet->setCellValue('AE'.$fila,$d13_01);
            $sheet->setCellValue('AF'.$fila,$d13_02);
            $sheet->setCellValue('AG'.$fila,$d14_01_01);
            $sheet->setCellValue('AH'.$fila,$d14_01_02);
            $sheet->setCellValue('AI'.$fila,$d14_02_01);
            $sheet->setCellValue('AJ'.$fila,$d14_02_02);
            $sheet->setCellValue('AK'.$fila,$d14_03_01);
            $sheet->setCellValue('AL'.$fila,$d14_03_02);
            $sheet->setCellValue('AM'.$fila,$d14_04_01);
            $sheet->setCellValue('AN'.$fila,$d14_04_02);
            $sheet->setCellValue('AO'.$fila,$d14_05_01);
            $sheet->setCellValue('AP'.$fila,$d14_05_02);
            $sheet->setCellValue('AQ'.$fila,$d14_06_01);
            $sheet->setCellValue('AR'.$fila,$d14_06_02);
            $sheet->setCellValue('AS'.$fila,$d14_07_01);
            $sheet->setCellValue('AT'.$fila,$d14_07_02);
            $sheet->setCellValue('AU'.$fila,$d14_08_01);
            $sheet->setCellValue('AV'.$fila,$d14_08_02);
            $sheet->setCellValue('AW'.$fila,$d15_01);
            $sheet->setCellValue('AX'.$fila,$d16_01);
            $sheet->setCellValue('AY'.$fila,$d17_01);
            $sheet->setCellValue('AZ'.$fila,$observaciones);

        }


    }
    if ($json_OK){

        if ($codForm == '007'){
            $cm         = $obj->cm;
            $sitioId    = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor     = $obj->indoor_outdoor;
            $cod_fijo        = $obj->cod_fijo;
            $cod_activo      = $obj->cod_activo;
            $cod_complemento = $obj->cod_complemento;
            $reca1           =$obj->reca1;
            $reca2           =$obj->reca2;
            $recb1           =$obj->recb1;
            $recb2           =$obj->recb2;
            $fuente_a        =$obj->fuente_a;
            $fuente_b        =$obj->fuente_b;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d->d04_02;
            $d05_01 = $desarrollo_d->d05_01;
            $d06_01 = $desarrollo_d->d06_01;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01;
            $d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
            $d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
            $d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
            $d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
            $d13_01_01 = $desarrollo_d->d13_01_01; $d13_01_02 = $desarrollo_d->d13_01_02;
            $d13_02_01 = $desarrollo_d->d13_02_01; $d13_02_02 = $desarrollo_d->d13_02_02;
            $d13_03_01 = $desarrollo_d->d13_03_01; $d13_03_02 = $desarrollo_d->d13_03_02;
            $d13_04_01 = $desarrollo_d->d13_04_01; $d13_04_02 = $desarrollo_d->d13_04_02;
            $d13_05_01 = $desarrollo_d->d13_05_01; $d13_05_02 = $desarrollo_d->d13_05_02;
            $d13_06_01 = $desarrollo_d->d13_06_01; $d13_06_02 = $desarrollo_d->d13_06_02;
            $d13_07_01 = $desarrollo_d->d13_07_01; $d13_07_02 = $desarrollo_d->d13_07_02;
            $d13_08_01 = $desarrollo_d->d13_08_01; $d13_08_02 = $desarrollo_d->d13_08_02;
            $d14_01 = $desarrollo_d->d14_01;
            $d15_01 = $desarrollo_d->d15_01;
            $d16_01 = $desarrollo_d->d16_01;
            $observaciones = $obj->observaciones;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila, $cod_activo);
            $sheet->setCellValue('H'.$fila, $cod_complemento);
            $sheet->setCellValue('I'.$fila, $reca1);
            $sheet->setCellValue('J'.$fila, $reca2);
            $sheet->setCellValue('K'.$fila, $recb1);
            $sheet->setCellValue('L'.$fila, $recb2);
            $sheet->setCellValue('M'.$fila, $fuente_a);
            $sheet->setCellValue('N'.$fila, $fuente_b);
            $sheet->setCellValue('O'.$fila, $d01_01);
            $sheet->setCellValue('P'.$fila, $d02_01);
            $sheet->setCellValue('Q'.$fila, $d03_01);
            $sheet->setCellValue('R'.$fila, $d04_01);
            $sheet->setCellValue('S'.$fila, $d04_02);
            $sheet->setCellValue('T'.$fila, $d05_01);
            $sheet->setCellValue('U'.$fila, $d06_01);
            $sheet->setCellValue('V'.$fila, $d07_01);
            $sheet->setCellValue('W'.$fila, $d08_01);
            $sheet->setCellValue('X'.$fila, $d09_01);
            $sheet->setCellValue('Y'.$fila, $d09_02);
            $sheet->setCellValue('Z'.$fila, $d10_01);
            $sheet->setCellValue('AA'.$fila,$d10_02);
            $sheet->setCellValue('AB'.$fila,$d11_01);
            $sheet->setCellValue('AC'.$fila,$d11_02);
            $sheet->setCellValue('AD'.$fila,$d12_01);
            $sheet->setCellValue('AE'.$fila,$d12_02);
            $sheet->setCellValue('AF'.$fila,$d13_01_01);
            $sheet->setCellValue('AG'.$fila,$d13_01_02);
            $sheet->setCellValue('AH'.$fila,$d13_02_01);
            $sheet->setCellValue('AI'.$fila,$d13_02_02);
            $sheet->setCellValue('AJ'.$fila,$d13_03_01);
            $sheet->setCellValue('AK'.$fila,$d13_03_02);
            $sheet->setCellValue('AL'.$fila,$d13_04_01);
            $sheet->setCellValue('AM'.$fila,$d13_04_02);
            $sheet->setCellValue('AN'.$fila,$d13_05_01);
            $sheet->setCellValue('AO'.$fila,$d13_05_02);
            $sheet->setCellValue('AP'.$fila,$d13_06_01);
            $sheet->setCellValue('AQ'.$fila,$d13_06_02);
            $sheet->setCellValue('AR'.$fila,$d13_07_01);
            $sheet->setCellValue('AS'.$fila,$d13_07_02);
            $sheet->setCellValue('AT'.$fila,$d13_08_01);
            $sheet->setCellValue('AU'.$fila,$d13_08_02);
            $sheet->setCellValue('AV'.$fila,$d14_01);
            $sheet->setCellValue('AW'.$fila,$d15_01);
            $sheet->setCellValue('AX'.$fila,$d16_01);
            $sheet->setCellValue('AY'.$fila,$observaciones);

        }
    }
    if ($json_OK){

        if ($codForm == '008'){
            $cm         = $obj->cm;
            $sitioId    = $obj->sitioId;
            $propertyId = $obj->propertyId;
            $c_fechaRealizacion = $obj->c_fechaRealizacion;
            $indoor_outdoor     = $obj->indoor_outdoor;
            $cod_fijo        = $obj->cod_fijo;
            $cod_activo      = $obj->cod_activo;
            $cod_complemento = $obj->cod_complemento;
            $upsa1           =$obj->upsa1;
            $upsa2           =$obj->upsa2;
            $upsb1           =$obj->upsb1;
            $upsb2           =$obj->upsb2;
            $reca1           =$obj->reca1;
            $reca2           =$obj->reca2;
            $recb1           =$obj->recb1;
            $recb2           =$obj->recb2;
            $rec_fuente_a    =$obj->rec_fuente_a;
            $rec_fuente_b    =$obj->rec_fuente_b;
            $ups_fuente_a    =$obj->ups_fuente_a;
            $ups_fuente_b    =$obj->ups_fuente_b;

            $desarrollo_d = $obj->{'desarrollo_d'};
            $d01_01 = $desarrollo_d->d01_01;
            $d02_01 = $desarrollo_d->d02_01;
            $d03_01 = $desarrollo_d->d03_01;
            $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d-> d04_02;
            $d05_01 = $desarrollo_d->d05_01; $d05_02 = $desarrollo_d-> d05_02;
            $d06_01 = $desarrollo_d->d06_01; $d06_02 = $desarrollo_d-> d06_02;
            $d07_01 = $desarrollo_d->d07_01;
            $d08_01 = $desarrollo_d->d08_01; $d08_02 = $desarrollo_d-> d08_02; $d08_03 = $desarrollo_d-> d08_03;
            $d09_01 = $desarrollo_d->d09_01;
            $d10_01 = $desarrollo_d->d10_01;
            $d11_01 = $desarrollo_d->d11_01;
            $d12_01 = $desarrollo_d->d12_01;
            $d13_01 = $desarrollo_d->d13_01;
            $d14_01 = $desarrollo_d->d14_01;
            $observaciones = $obj->observaciones;

            $sheet->setCellValue('A'.$fila, $cm);
            $sheet->setCellValue('B'.$fila, $sitioId);
            $sheet->setCellValue('C'.$fila, $propertyId);
            $sheet->setCellValue('D'.$fila, $c_fechaRealizacion);
            $sheet->setCellValue('E'.$fila, $indoor_outdoor);
            $sheet->setCellValue('F'.$fila, $cod_fijo);
            $sheet->setCellValue('G'.$fila, $cod_activo);
            $sheet->setCellValue('H'.$fila, $cod_complemento);
            $sheet->setCellValue('I'.$fila, $upsa1);
            $sheet->setCellValue('J'.$fila, $upsa2);
            $sheet->setCellValue('K'.$fila, $upsb1);
            $sheet->setCellValue('L'.$fila, $upsb2);
            $sheet->setCellValue('M'.$fila, $reca1);
            $sheet->setCellValue('N'.$fila, $reca2);
            $sheet->setCellValue('O'.$fila, $recb1);
            $sheet->setCellValue('P'.$fila, $recb2);
            $sheet->setCellValue('Q'.$fila, $rec_fuente_a);
            $sheet->setCellValue('R'.$fila, $rec_fuente_b);
            $sheet->setCellValue('S'.$fila, $ups_fuente_a);
            $sheet->setCellValue('T'.$fila, $ups_fuente_b);
            $sheet->setCellValue('U'.$fila, $d01_01);
            $sheet->setCellValue('V'.$fila, $d02_01);
            $sheet->setCellValue('W'.$fila, $d03_01);
            $sheet->setCellValue('X'.$fila, $d04_01);
            $sheet->setCellValue('Y'.$fila, $d04_02);
            $sheet->setCellValue('Z'.$fila, $d05_01);
            $sheet->setCellValue('AA'.$fila,$d05_02);
            $sheet->setCellValue('AB'.$fila,$d06_01);
            $sheet->setCellValue('AC'.$fila,$d06_02);
            $sheet->setCellValue('AD'.$fila,$d07_01);
            $sheet->setCellValue('AE'.$fila,$d08_01);
            $sheet->setCellValue('AF'.$fila,$d08_02);
            $sheet->setCellValue('AG'.$fila,$d08_03);
            $sheet->setCellValue('AH'.$fila,$d09_01);
            $sheet->setCellValue('AI'.$fila,$d10_01);
            $sheet->setCellValue('AJ'.$fila,$d11_01);
            $sheet->setCellValue('AK'.$fila,$d12_01);
            $sheet->setCellValue('AL'.$fila,$d13_01);
            $sheet->setCellValue('AM'.$fila,$d14_01);
            $sheet->setCellValue('AN'.$fila,$observaciones);

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