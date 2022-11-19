<?php
require("../../funciones/motor.php");

$idcentro = $_POST['idcentro'];
$razon = $_POST['razon'];
$iddepartamento = $_POST['iddepartamento'];
$usr_resp = $_POST['usr_resp'];
$idestacione = $_POST['idestacione'];
$tipo_solucion = $_POST['tipo_solucion'];
$fecha_eje = $_POST['fecha_eje'];

$fecha_corte = $_POST['fecha_corte'];
$fecha_aviso = $_POST['fecha_aviso'];
$fecha_llegada = $_POST['fecha_llegada'];
$fecha_salida = $_POST['fecha_salida'];
$fecha_superada = $_POST['fecha_superada'];
$fecha_fin = $_POST['fecha_fin'];

$param = "";
$paramValues = "";
if ($fecha_corte != ''){
    $param .= "fecha_corte,";
    $paramValues .= "'".$fecha_corte."',";
}
if ($fecha_aviso != ''){
    $param .= "fecha_aviso,";
    $paramValues .= "'".$fecha_aviso."',";
}
if ($fecha_llegada != ''){
    $param .= "fecha_llegada,";
    $paramValues .= "'".$fecha_llegada."',";
}
if ($fecha_salida != ''){
    $param .= "fecha_salida,";
    $paramValues .= "'".$fecha_salida."',";
}
if ($fecha_superada != ''){
    $param .= "fecha_superada,";
    $paramValues .= "'".$fecha_superada."',";
}
if ($fecha_fin != ''){
    $param .= "fecha_fin,";
    $paramValues .= "'".$fecha_fin."',";
}

$usr_coord = $_POST['usr_coord'];
$ticket_principal = $_POST['ticket_principal'];
$atencion = $_POST['atencion'];
$ticket_relacion = $_POST['ticket_relacion'];
$servicio_afecta = $_POST['servicio_afecta'];
$en_plazo = $_POST['en_plazo'];
$estado_ticket = $_POST['estado_ticket'];
$sistemafalla = $_POST['sistemafalla'];
$tipofalla = $_POST['tipofalla'];
$equipofalla = $_POST['equipofalla'];
$solucion = $_POST['solucion'];
$medidas_restituir = $_POST['medidas_restituir'];
$descripcion_falla = $_POST['descripcion_falla'];
$estado_final = $_POST['estado_final'];
$partes_afectadas = $_POST['partes_afectadas'];
$causas = $_POST['causas'];
$estaciones_afectadas = $_POST['estaciones_afectadas'];
$descripcion_solucion = $_POST['descripcion_solucion'];
$desc_solucion = $_POST['desc_solucion'];
$aclarativos = $_POST['aclarativos'];
$observaciones_fueraplazo = $_POST['observaciones_fueraplazo'];
$acciones_preventivas = $_POST['acciones_preventivas'];
$observaciones = $_POST['observaciones'];
$pendiente_2 = $_POST['pendiente_2'];
$pendiente_1 = $_POST['pendiente_1'];
$pendiente_3 = $_POST['pendiente_3'];
$pendiente_5 = $_POST['pendiente_5'];
$pendiente_4 = $_POST['pendiente_4'];
$idgrupo = $_POST['idgrupo'];
$notas = $_POST['notas'];

$query = "insert into rutina_correctivo (
estado,
razon,
idcentro,
iddepartamento,
idestacione,
usr_resp,
fecha_eje,
tipo_solucion,
".$param."
usr_coord,
ticket_principal,
ticket_relacion,
atencion,
servicio_afecta,
estado_ticket,
en_plazo,
sistemafalla,
equipofalla,
tipofalla,
solucion,
descripcion_falla,
medidas_restituir,
estado_final,
causas,
partes_afectadas,
estaciones_afectadas,
desc_solucion,
descripcion_solucion,
aclarativos,
acciones_preventivas,
observaciones_fueraplazo,
observaciones,
pendiente_1,
pendiente_2,
pendiente_3,
pendiente_4,
pendiente_5,
idgrupo,
notas
) values (
'PEN',
'$razon',
'$idcentro',
'$iddepartamento',
'$idestacione',
'$usr_resp',
'$fecha_eje',
'$tipo_solucion',

".$paramValues."

'$usr_coord',
'$ticket_principal',
'$ticket_relacion',
'$atencion',
'$servicio_afecta',
'$estado_ticket',
'$en_plazo',
'$sistemafalla',
'$equipofalla',
'$tipofalla',
'$solucion',
'$descripcion_falla',
'$medidas_restituir',
'$estado_final',
'$causas',
'$partes_afectadas',
'$estaciones_afectadas',
'$desc_solucion',
'$descripcion_solucion',
'$aclarativos',
'$acciones_preventivas',
'$observaciones_fueraplazo',
'$observaciones',
'$pendiente_1',
'$pendiente_2',
'$pendiente_3',
'$pendiente_4',
'$pendiente_5',
'$idgrupo',
'$notas'
)";

$res = mysqli_query($conexion, $query);

if( mysqli_affected_rows($conexion) > 0 ){
    echo "Guardado correctamente.";
}else{
    //echo "Error: " . mysqli_error($conexion);
    echo "Error: " . $query;
}

mysqli_close($conexion);

?>
