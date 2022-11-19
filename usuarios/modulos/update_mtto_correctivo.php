<?php
require("../../funciones/motor.php");

$idc = $_POST['idc'];

$idcentro = $_POST['idcentro'];
$razon = $_POST['razon'];
$iddepartamento = $_POST['iddepartamento'];
$usr_resp = $_POST['usr_resp'];
$idestacione = $_POST['idestacione'];
$fecha_eje = $_POST['fecha_eje'];
$tipo_solucion = $_POST['tipo_solucion'];

$fecha_corte = $_POST['fecha_corte'];
$fecha_aviso = $_POST['fecha_aviso'];
$fecha_llegada = $_POST['fecha_llegada'];
$fecha_salida = $_POST['fecha_salida'];
$fecha_superada = $_POST['fecha_superada'];
$fecha_fin = $_POST['fecha_fin'];

//fecha_corte = '$fecha_corte',

$paramValues = "";
if ($fecha_corte != ''){
    $paramValues .= "fecha_corte = '".$fecha_corte."',";
}
if ($fecha_aviso != ''){
    $paramValues .= "fecha_aviso = '".$fecha_aviso."',";
}
if ($fecha_llegada != ''){
    $paramValues .= "fecha_llegada = '".$fecha_llegada."',";
}
if ($fecha_salida != ''){
    $paramValues .= "fecha_salida = '".$fecha_salida."',";
}
if ($fecha_superada != ''){
    $paramValues .= "fecha_superada = '".$fecha_superada."',";
}
if ($fecha_fin != ''){
    $paramValues .= "fecha_fin = '".$fecha_fin."',";
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
$pendiente_1 = $_POST['pendiente_1'];
$pendiente_2 = $_POST['pendiente_2'];
$pendiente_3 = $_POST['pendiente_3'];
$pendiente_4 = $_POST['pendiente_4'];
$pendiente_5 = $_POST['pendiente_5'];
$idgrupo = $_POST['idgrupo'];
$notas = $_POST['notas'];

$query = "update rutina_correctivo set 
razon = '$razon',
idcentro = '$idcentro',
iddepartamento = '$iddepartamento',
idestacione = '$idestacione',
usr_resp = '$usr_resp',
fecha_eje = '$fecha_eje',
tipo_solucion = '$tipo_solucion',
".$paramValues."
usr_coord = '$usr_coord',
ticket_principal = '$ticket_principal',
ticket_relacion = '$ticket_relacion',
atencion = '$atencion',
servicio_afecta = '$servicio_afecta',
estado_ticket = '$estado_ticket',
en_plazo = '$en_plazo',
sistemafalla = '$sistemafalla',
equipofalla = '$equipofalla',
tipofalla = '$tipofalla',
solucion = '$solucion',
descripcion_falla = '$descripcion_falla',
medidas_restituir = '$medidas_restituir',
estado_final = '$estado_final',
causas = '$causas',
partes_afectadas = '$partes_afectadas',
estaciones_afectadas = '$estaciones_afectadas',
desc_solucion = '$desc_solucion',
descripcion_solucion = '$descripcion_solucion',
aclarativos = '$aclarativos',
acciones_preventivas = '$acciones_preventivas',
observaciones_fueraplazo = '$observaciones_fueraplazo',
observaciones = '$observaciones',
pendiente_1 = '$pendiente_1',
pendiente_2 = '$pendiente_2',
pendiente_3 = '$pendiente_3',
pendiente_4 = '$pendiente_4',
pendiente_5 = '$pendiente_5',
idgrupo = '$idgrupo',
notas = '$notas'
where id = ".$idc;

$res = mysqli_query($conexion, $query);

if( mysqli_affected_rows($conexion) > 0 ){
    echo "Guardado correctamente...";
}else{
    echo "Guardado sin cambios " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
