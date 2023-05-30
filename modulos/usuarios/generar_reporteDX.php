<?php
require("../../funciones/motor.php");
require '../../vendor/autoload.php';
require("../../funciones/DateUtils.php");

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

$sheet->setTitle("Reporte Sistema de Datos");

$consulta = "SELECT e.idevento, e.estado, e.inicio, e.rep, e.repro, cc.idrutina, cc.cabecera, cc.tabla_1, cc.tabla_2, s.nombre, s.provincia, s.localidad, d.nombre as departamento
            FROM rutina016 cc
            LEFT JOIN evento e ON cc.idevento = e.idevento
            LEFT JOIN sitio s  ON e.idsitio = s.idsitio
            LEFT JOIN departamento d on s.iddepartamento = d.iddepartamento
            WHERE e.inicio BETWEEN '".$fechainicio."' AND '".$fechafin."'
            AND s.iddepartamento = " . $iddepartamento . " ORDER BY e.inicio";
            //AND s.iddepartamento = " . $iddepartamento . " ORDER BY s.idcentro, e.inicio";

$resultado = mysqli_query($conexion, $consulta);

$titulos = [
    "A1" => "N.",
    "B1" => "Departamento",
    "C1" => "CM/SCM",
    "D1" => "Provincia",
    "E1" => "Localidad",
    "F1" => "ID Sitio",
    "G1" => "Property_id",
    "H1" => "Fecha de mantenimiento",
    "I1" => "Hora inicio",
    "J1" => "Hora Fin",
    "K1" => "Tiempo Transcurrido",
    "L1" => "Ubicación equipo datos",
    "M1" => "Modelo de Gabinete",
    "N1" => "Ubicación rack",
    "O1" => "Tipo de Infraestructura",
    "P1" => "id",
    "Q1" => "Equipo",
    "R1" => "Existe",
    "S1" => "Estado",
    "T1" => "Energia",
    "U1" => "Cantidad de Puertos",
    "V1" => "Descripción Etiqueta Puerto UPLINK",
];

$sheet->getStyle('A1:V1')->applyFromArray($tableHead);
foreach ( $titulos as $columna => $valor ){
    $sheet->setCellValue($columna, $valor);
}

$fila = 2;
$filaTab1 = 2;
$cont = 1;
while($row = mysqli_fetch_array($resultado)){

    $jsonData = $row["cabecera"];
    $fechaMtto = date("d/m/Y", strtotime($row['inicio']) );

    $tabla_1     = $row['tabla_1'];
    $tabla_1_arr = json_decode($tabla_1, true);

    if (isset($tabla_1_arr)) {
        foreach ($tabla_1_arr as $objVal) {
            $sheet->setCellValue('P'.$filaTab1, $objVal['id']);
            $sheet->setCellValue('Q'.$filaTab1, $objVal['equipo']);
            $sheet->setCellValue('R'.$filaTab1, $objVal['existe']);
            $sheet->setCellValue('S'.$filaTab1, $objVal['estado']);
            $sheet->setCellValue('T'.$filaTab1, $objVal['energia']);
            $sheet->setCellValue('U'.$filaTab1, $objVal['prtos']);
            $sheet->setCellValue('V'.$filaTab1, $objVal['desc']);
            $filaTab1++;
        }
    }

    $obj = json_decode($jsonData);
    $json_OK =	json_last_error() == JSON_ERROR_NONE;

    if ($json_OK){

        if ( is_array($tabla_1_arr)) {
            for ($i = 0; $i < sizeof($tabla_1_arr); $i++) {
                $nro = $cont++;
                //$nro          = sizeof($tabla_1_arr);
                $departamento = $row["departamento"];
                $cm = $obj->cm;
                $provincia = $row["provincia"];
                $localidad = $row["localidad"];
                $sitioId = $obj->sitioId;
                $propertyId = $obj->propertyId;
                $fechaMtto = $obj->c_fechaRealizacion;
                $horaInicio = $obj->d_horainicio;
                $horaFin = $obj->d_horafin;
                $tiempoTrans = timeDiff($horaInicio, $horaFin);

                //  d_relevamiento
                $d_relevamiento_d1 = $obj->{'d_relevamiento_d1'};
                $ubicacion_equipo = $d_relevamiento_d1->d1_01_01;
                $modelo_gabinete = "";
                $ubicacion_rack = $d_relevamiento_d1->d1_02_01;
                $tipo_infra = $d_relevamiento_d1->d1_03_01;

                $sheet->setCellValue('A' . $fila, $nro);
                $sheet->setCellValue('B' . $fila, $departamento);
                $sheet->setCellValue('C' . $fila, $cm);
                $sheet->setCellValue('D' . $fila, $provincia);
                $sheet->setCellValue('E' . $fila, $localidad);
                $sheet->setCellValue('F' . $fila, $sitioId);
                $sheet->setCellValue('G' . $fila, $propertyId);
                $sheet->setCellValue('H' . $fila, $fechaMtto);
                $sheet->setCellValue('I' . $fila, $horaInicio);
                $sheet->setCellValue('J' . $fila, $horaFin);
                $sheet->setCellValue('K' . $fila, $tiempoTrans);
                $sheet->setCellValue('L' . $fila, $ubicacion_equipo);
                $sheet->setCellValue('M' . $fila, $modelo_gabinete);
                $sheet->setCellValue('N' . $fila, $ubicacion_rack);
                $sheet->setCellValue('O' . $fila, $tipo_infra);
                $fila++;
            }
        }

    } else {
        $sheet->setCellValue('A'.$fila, 'ERROR');
        $sheet->setCellValue('B'.$fila, $row['inicio']);
        $sheet->setCellValue('C'.$fila, $row['nombre']);
    }

    //$fila = $filaTab1;
    //$fila++;
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