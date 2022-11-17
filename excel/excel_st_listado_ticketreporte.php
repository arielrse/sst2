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
;
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("Content-Disposition: attachment; filename=st_listado_ticketreporte".date("Y-m-d").".xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1 " />
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
<th width="7%">CUMPLIMIENTO</th>
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

$consulta = "
SELECT *,
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
            c.nombre AS centro_nombre,
            t.ticket,
            t.idnodo,
            es.nombreestacion,
            es.tiponodo,
            tec.nombretecnologia,
            es.area,
            ta.nombreatencion,
            t.cumplimiento,
            tas.nombreafectacionservicio,
            tsf.nombresistemafalla,
            te.nombreequipofalla,
            tf.nombretipofalla,
            ts.nombresolucion,
            t.descripcionfalla,
            timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
            timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
            timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
            timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
            t.observaciones
        FROM st_ticketn t
        left join estacionentel es   on t.`idestacion` 	= es.idestacionentel
        left join ticket_atencion ta on t.idatencion	= ta.idatencion
        left join tecnologia tec     on t.idtecnologia	= tec.idtecnologia
        left join ticket_afectacionservicio tas on t.idafectacionservicio = tas.idafectacionservicio
        left join ticket_sistemafalla tsf       on t.idsistemafalla       = tsf.idsistemafalla
        left join ticket_equipofalla te         on t.idequipofalla        = te.idequipofalla
        left join ticket_tipofalla tf           on t.idtipofalla	      = tf.idtipofalla
        left join ticket_solucion ts            on t.idsolucion	          = ts.idsolucion
        left join centro c          on es.idcentro	= c.idcentro
        where c.iddepartamento = ".$iddepartamento."
	    ". $strSql ."
    
    )cn1 ORDER BY fecha_inicio DESC;
";


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
	<td><center>".$dato['area']."</center></td>
	<td><center>".$dato['nombreatencion']."</center></td>
	<td><center>".$dato['cumplimiento']."</center></td>
	<td><center>".$dato['nombreafectacionservicio']."</center></td>
	<td><center>".$dato['nombresistemafalla']."</center></td>
	<td><center>".$dato['nombreequipofalla']."</center></td>
	<td><center>".$dato['nombretipofalla']."</center></td>
	<td><center>".$dato['nombresolucion']."</center></td>
	<td><center>".utf8_decode($dato['descripcionfalla'])."</center></td>
	<td><center>".$dato['fecha_inicio']."</center></td>
	<td><center>".$dato['fecha_notificacion']."</center></td>
	<td><center>".$dato['fecha_sitio']."</center></td>
	<td><center>".$dato['fecha_fin']."</center></td>
	<td><center>".$dato['tiempo_interrupcion']."</center></td>
	<td><center>".$dato['tiempo_empleado']."</center></td>
	<td><center>".utf8_decode($dato['observaciones'])."</center></td>

	</tr>";
	
	}
}
?>
</table>		  