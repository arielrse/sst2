<?php
require("../funciones/motor.php");
//$nro = base64_decode($_GET["nro"]);

$iddepartamento = isset($_POST['iddepartamento']) ? $_POST['iddepartamento'] : '';
$idcentro       = isset($_POST['idcentro']) ? $_POST['idcentro'] : '';;
$fechainicio    = isset($_POST['fechainicio']) ? $_POST['fechainicio'] : '';;
$fechafin       = isset($_POST['fechafin']) ? $_POST['fechafin'] : '';;

$strSql = '';


/*if ($iddepartamento != '')
    $strSql .= ' and centro.iddepartamento = ' . $iddepartamento;*/

if ($idcentro != '')
    $strSql .= ' and centro.idcentro = ' . $idcentro;

$strSql .= " and fecha_inicio_rif  BETWEEN '" . $fechainicio . "' AND '". $fechafin . "'";

/*if ($fechainicio != '')
    $strSql .= " and fecha_inicio_rif >= '" . $fechainicio . "'";
if ($fechainicio != '')
    $strSql .= " and fechafin <= '" . $fechafin . "'";*/

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=st_listado_ticketreporte".date("Y-m-d").".xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<table border="1">
<tr>
<th width="2%">N&deg;</th>
<th width="7%">CM/SCM</th>
<th width="7%">NRO TICKET GFM</th>
<th width="7%">ID ESTACION</th>
<th width="7%">ESTACION</th>
<th width="7%">NP/NS</th>
<th width="7%">TECNOLOGIA</th>
<th width="5%">AREA </th>
<th width="7%">ATENCION</th>
<th width="5%">AFECTACION AL SERVICIO</th>
<th width="7%">SISTEMA EN FALLA</th>
<th width="7%">EQUIPO EN FALLA</th>
<th width="7%">TIPO DE FALLA</th>
<th width="7%">SOLUCION</th>
<th width="7%">DESCRIPCION FALLA</th>
<th width="7%">Fecha y Hora Inicio de alarma RIF</th>
<th width="7%">Fecha y Hora Notificacion a contratista</th>
<th width="7%">Fecha y Hora inicio intervencion en sitio</th>
<th width="7%">Fecha y Hora restablecimiento del servicio RIF</th>
<th width="7%">Tiempo de interrupcion (hh:mm)</th>
<th width="7%">Tiempo empleado contratista (hh:mm)</th>
<th width="7%">Observaciones</th>
</tr>
<?php

	$consulta = "SELECT *,
	CONCAT( 
    	TIMESTAMPDIFF(HOUR, fecha_inicio, fecha_fin), ':', 
    	MOD(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin), 60), '' 
		 )AS tiempo_interrupcion,
	CONCAT( 
    	TIMESTAMPDIFF(HOUR, fecha_notificacion, fecha_fin), ':', 
    	MOD(TIMESTAMPDIFF(MINUTE, fecha_notificacion, fecha_fin), 60), '' 
		 )AS tiempo_empleado    	
 FROM(
	SELECT 
	centro.nombre as centro_nombre,
	st_ticketn.ticket,
	st_ticketn.idnodo,
	estacionentel.nombreestacion,
	estacionentel.tiponodo,	
	tecnologia.nombretecnologia,
	estacionentel.AREA,
	ticket_atencion.nombreatencion,
	ticket_afectacionservicio.nombreafectacionservicio,
	ticket_sistemafalla.nombresistemafalla,
	ticket_equipofalla.nombreequipofalla,
	ticket_tipofalla.nombretipofalla,
	ticket_solucion.nombresolucion,
	st_ticketn.descripcionfalla,
	timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
	timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
	timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
	timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
	st_ticketn.observaciones
	FROM 
	st_ticketn,
	estacionentel,
	tecnologia,
	centro,
	ticket_atencion,
	ticket_afectacionservicio,
	ticket_sistemafalla,
	ticket_equipofalla,
	ticket_tipofalla,
	ticket_solucion
	WHERE st_ticketn.idnodo=estacionentel.idestacionentel
	and estacionentel.idcentro=centro.idcentro
	and st_ticketn.idatencion=ticket_atencion.idatencion
	AND st_ticketn.idtecnologia=tecnologia.idtecnologia
	AND st_ticketn.idafectacionservicio=ticket_afectacionservicio.idafectacionservicio
	AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
	AND st_ticketn.idequipofalla=ticket_equipofalla.idequipofalla
	AND st_ticketn.idtipofalla=ticket_tipofalla.idtipofalla
	AND st_ticketn.idsolucion=ticket_solucion.idsolucion
	AND centro.iddepartamento = ".$iddepartamento."
	". $strSql ."
)cn1 order by fecha_inicio desc"; 


$resultado = mysqli_query($conexion, $consulta);
$filas	   = mysqli_num_rows($resultado);

if($filas!=0) {
    $i=0;

    while($dato=mysqli_fetch_array($resultado)) {
        $i++;
	 
	echo " 
	<tr>
	<td>".$i."</td>
	<td><center>".$dato['centro_nombre']."</center></td>
	<td><center>".$dato['ticket']."</center></td>
	<td><center>".$dato['idnodo']."</center></td>
	<td><center>".$dato['nombreestacion']."</center></td>
	<td><center>".$dato['tiponodo']."</center></td>
	<td><center>".$dato['nombretecnologia']."</center></td>
	<td><center>".$dato['AREA']."</center></td>
	<td><center>".$dato['nombreatencion']."</center></td>
	<td><center>".$dato['nombreafectacionservicio']."</center></td>
	<td><center>".$dato['nombresistemafalla']."</center></td>
	<td><center>".$dato['nombreequipofalla']."</center></td>
	<td><center>".$dato['nombretipofalla']."</center></td>
	<td><center>".$dato['nombresolucion']."</center></td>
	<td><center>".$dato['descripcionfalla']."</center></td>
	<td><center>".$dato['fecha_inicio']."</center></td>
	<td><center>".$dato['fecha_notificacion']."</center></td>
	<td><center>".$dato['fecha_sitio']."</center></td>
	<td><center>".$dato['fecha_fin']."</center></td>
	<td><center>".$dato['tiempo_interrupcion']."</center></td>
	<td><center>".$dato['tiempo_empleado']."</center></td>
	<td><center>".$dato['observaciones']."</center></td>

	</tr>";
	
	}
}
?>
</table>		  