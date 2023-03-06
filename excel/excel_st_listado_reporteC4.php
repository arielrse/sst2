<?php
require("../funciones/motor.php");

$iddepartamento = isset($_POST['iddepartamento']) ? $_POST['iddepartamento'] : '';
$idcentro       = isset($_POST['idcentro']) ? $_POST['idcentro'] : '';;
$fechainicio    = isset($_POST['fechainicio']) ? $_POST['fechainicio'] : '';;
$fechafin       = isset($_POST['fechafin']) ? $_POST['fechafin'] : '';;

$strSql = '';
if ($idcentro != '') $strSql .= ' and centro.idcentro = ' . $idcentro;

$strSql .= " and fecha_inicio_rif  BETWEEN '" . $fechainicio . "' AND '". $fechafin . "'";


header("Content-Type: application/vnd.ms-excel charset=UTF-8");
header("Content-Disposition: attachment; filename=st_listado_ticketreporte".date("Y-m-d").".xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8 " />
<table border="1">
    <tr>
        <th style="background-color: #538DD5; color: white;" width="2%">N&deg;</th>
        <th style="background-color: #538DD5; color: white;" width="7%">CM/SCM</th>
        <th style="background-color: #538DD5; color: white;" width="7%">N. Ticket OSS</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Id Sitio / Estación</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Nombre Sitio / Estacion</th>
        <th style="background-color: #538DD5; color: white;" width="5%">Area (Urbano, Rural)</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Tipo de Atencion En Sitio/Remoto</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Sistema en falla</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Causa de la falla</th><!--TIPO DE FALLA-->
        <th style="background-color: #538DD5; color: white;" width="7%">Solucion</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Descripcion de la falla y solucion</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Fecha y Hora Inicio de corte de servicio</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Fecha y Hora de restitucion del servicio</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Duracion del corte de servicio</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Repuestos o Materiales Utilizados</th>
        <th style="background-color: #538DD5; color: white;" width="5%">Con corte / Sin corte</th>
        <th style="background-color: #538DD5; color: white;" width="5%">4. Multa por  incumplimiento de tiempos de restablecimiento (SLA)</th>
        <th style="background-color: #538DD5; color: white;" width="5%">11. Multa por  incumplimiento especificaciones tecnicas mant. Correctivo</th>
        <th style="background-color: #538DD5; color: white;" width="7%">Observaciones</th>
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
            concat(c.coddep, t.idnodo) AS idnodo,
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

            $query  = "SELECT r.fecha_corte, r.repuestos, r.insumos FROM rutina_correctivo r WHERE r.ticket_principal = '".$dato['ticket']."'";
            $result = mysqli_query($conexion, $query);

            $res_repuestos = mysqli_num_rows($result);
            $data = mysqli_fetch_array($result);

            $res_materiales = "";
            $count = 1;
            if ( isset($data['repuestos']) ){
                $tabla_repuestos = json_decode($data['repuestos'], true);
                foreach ($tabla_repuestos as $objVal) {
                    $res_materiales .= $count++ . ".-" . $objVal['repuesto'] ." ";
                }
            }

            if ( isset($data['insumos']) ){
                $tabla_insumos = json_decode($data['insumos'], true);
                foreach ($tabla_insumos as $objVal) {
                    $res_materiales .= $count++ . ".-" . $objVal['nombre'] . " ";
                }
            }

            $res_materiales = strlen($res_materiales) > 0 ? $res_materiales : "Ninguno";

            $observaciones = "Ninguno";
            if ( strlen($dato['observaciones']) > 0 )
                $observaciones = utf8_decode($dato['observaciones']);


            echo " 
        <tr>
            <td>".$i."</td>
            <td><center>".$dato['centro_nombre']."</center></td>
            <td><center>".$dato['ticket']."</center></td>
            <td><center>".$dato['idnodo']."</center></td>
            <td><center>".$dato['nombreestacion']."</center></td>
            <td><center>".$dato['area']."</center></td>
            <td><center>".$dato['nombreatencion']."</center></td>
            <td><center>".$dato['nombresistemafalla']."</center></td>
            <td><center>".$dato['nombretipofalla']."</center></td>
            <td><center>".$dato['nombresolucion']."</center></td>
            <td><center>".utf8_decode($dato['descripcionfalla'])."</center></td>
            <td><center>".$dato['fecha_inicio']."</center></td>
            <td><center>".$dato['fecha_fin']."</center></td>
            <td><center>".$dato['tiempo_interrupcion']."</center></td>
            <td><center>".$res_materiales."</center></td>
            <td><center>".$dato['nombreafectacionservicio']."</center></td>
            <td><center>N/A</center></td>
            <td><center>N/A</center></td>
            <td><center>".$observaciones."</center></td>
        </tr>";

        }
    }
    ?>
</table>