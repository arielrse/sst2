<?php
require("../../funciones/DateUtils.php");
require("../../funciones/ImageUtils.php");

function getPlantilla($conexion, $idcorrectivo){

    $data = getDatos($conexion, $idcorrectivo);
    $fecha = $data['fecha_eje'];
    $fecha = date("m/Y", strtotime($fecha) );

    $tiempoTrans    = timeDiff($data['fecha_corte'], $data['fecha_superada']);

    $tickets_arr = explode (",", $data['ticket_relacion']);
    $tickets_rel = '';
    foreach ($tickets_arr as $value){
        $tickets_rel .= '<p>'.$value.'</p>';
    }

    $reporteMateriales = getReporteMateriales($conexion, $idcorrectivo);

    $reporteFotos = getReporteFotografico($conexion, $idcorrectivo);

    $plantilla =
'<body>
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                   <main>             
                    <table>
                        <tr>
                            <th width="15%">
                                <div><img src="../../img/logo-entel.png" width="90" alt="" /></div>
                            </th>
                            <th width="73%" class="text-center">
                                <h4>FORMULARIO ATENCIÓN DE EMERGENCIAS - ENTEL</h4>
                                <h4>REPORTE DE TRABAJOS  (FCE – 004)</h4>
                            </th>
                            <th width="12%" class="company-details">
                                <div>
                                    <div>Mes: '.$fecha. '</div>
                                </div>
                            </th>
                        </tr>
                    </table>
                    </main>
                    
                    <main>
                    <table width="100%">
                        <tr>
                            <td width="45%">
                                <table class="tborder">
                                    <tr><td class="bg-col1" width="40%">RAZÓN DE LA VISITA </td><td width="60%">' .$data['razon'].'</td></tr>
                                    <tr><td class="bg-col1">CENTRO MANTENIMIENTO:</td><td>'.$data['nomCentro'].'</td></tr>
                                    <tr><td class="bg-col1">REGIONAL:</td><td>'.$data['nomDepartamento'].'</td></tr>
                                    <tr><td class="bg-col1">NOMBRE ESTACIÓN:</td><td>'.$data['nombreestacion'].'</td></tr>
                                    <tr><td class="bg-col1">RESPONSABLE EXSMECON:</td><td>'.$data['nomResponsable'].'</td></tr>
                                    <tr><td class="bg-col1">FECHA DE EJECUCIÓN:</td><td>'.date("d/m/Y", strtotime($data['fecha_eje']) ).'</td></tr>
                                    <tr><td class="bg-col1">TIPO DE SOLUCIÓN:</td><td>'.$data['tipo_solucion'].'</td></tr>
                                </table>
                            </td>
                            <td width="30%">
                                <table class="tborder">
                                    <tr><td class="bg-col1"></td><td class="bg-col1" align="center">FECHA</td></tr>
                                    <tr><td class="bg-col1">CORTE SERVICIO TICKET:</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_corte']) ).'</td></tr>
                                    <tr><td class="bg-col1">AVISADO POR ENTEL:</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_aviso']) ).'</td></tr>
                                    <tr><td class="bg-col1">SALIDA DE CM / SCM :</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_salida']) ).'</td></tr>
                                    <tr><td class="bg-col1">LLEGADA A ESTACIÓN :</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_llegada']) ).'</td></tr>
                                    <tr><td class="bg-col1">FALLA SUPERADA :</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_superada']) ).'</td></tr>
                                    <tr><td class="bg-col1">FIN DE TRABAJO :</td><td>'.date("d/m/Y h:i:s", strtotime($data['fecha_fin']) ).'</td></tr>
                                </table>
                            </td>
                            <td width="25%">
                                <table class="tborder">
                                    <tr><td class="bg-col1" colspan="2">PERSONAL DE COORDINACIÓN ENTEL:</td></tr>
                                    <tr><td colspan="2">'.$data['nomCoord'].'</td></tr>
                                    <tr><td class="bg-col1">Ticket GFM principal:</td><td>'.$data['ticket_principal'].'</td></tr>
                                    <tr><td class="bg-col1">Tickets relacionados:</td><td>'.$tickets_rel.'</td></tr>
                                
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>DURACION DE LA FALLA: ' . $tiempoTrans .'</td>
                            <td></td>
                        </tr>
                    </table>
                    </main>
                    
                    <main>
                    <div align="center">
                        <table>
                            <tr>
                                <td align="center">
                                    <table class="tborder" style="margin: 0 20px 0 20px;">
                                        <tr>
                                            <td class="bg-col1">ATENCION</td>
                                            <td>'.$data['atencion'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-col1">AFECTACION AL SERVICIO</td>
                                            <td>'.$data['servicio_afecta'].'</td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center">
                                    <table class="tborder" style="margin: 0 20px 0 20px;">
                                        <tr>
                                            <td class="bg-col1">ESTADO DE TICKET</td>
                                            <td>'.$data['estado_ticket'].'</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-col1">EN PLAZO</td>
                                            <td>'.$data['en_plazo'].'</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>            
                        </table>
                    </div>
                    </main>

                    <main>
                        <table>
                            <tr>
                                <td>
                                    <table class="tborder">
                                        <tr><td width="30%" class="bg-col1">' .$data['nombresistemafalla'].'</td><td></td></tr>
                                        <tr><td width="30%" class="bg-col1">Sistema/Equipo en falla</td><td>' .$data['nombreequipofalla'].'</td></tr>
                                        <tr><td width="30%" class="bg-col1">Tipo De Falla</td><td>' .$data['nombretipofalla'].'</td></tr>
                                        <tr><td width="30%" class="bg-col1">Solucion</td><td>' .$data['nombresolucion'].'</td></tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td width="30%" class="bg-col1">Descripcion de la Falla del servicio</td><td>' .$data['descripcion_falla'].'</td></tr>
                            <tr><td width="30%" class="bg-col1">Medida de Restitucion</td><td>' .$data['medidas_restituir'].'</td></tr>
                            <tr><td width="30%" class="bg-col1">Estado Final de la estacion</td><td>' .$data['estado_final'].'</td></tr>
                            
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">CAUSAS QUE MOTIVARON LA FALLA ( análisis y diagnóstico)</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['causas']) .'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">DAÑOS Y PARTES AFECTADAS EN LA ESTACIÓN </td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['partes_afectadas']) .'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">ESTACIONES AFECTADAS</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['estaciones_afectadas']) .'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">SOLUCIÓN (50 CARACTERES)</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['desc_solucion']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">DESCRIPCIÓN DE LA SOLUCIÓN</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['descripcion_solucion']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">ACLARATIVOS</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['aclarativos']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">ACCIONES PREVENTIVAS SUGERIDAS</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['acciones_preventivas']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">OBSERVACIONES DE JUSTIFICACION FUERA DE PLAZO</td></tr>
                            <tr><td>' .str_replace("\n", "<br />", $data['observaciones_fueraplazo']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr><td class="bg-col1">OBSERVACIONES</td></tr>
                            <tr><td>'.str_replace("\n", "<br />", $data['observaciones']).'</td></tr>
                        </table>
                    </main>
                    
                    <main>
                        <table class="tborder">
                            <tr>
                                <td class="bg-col1" width="3%"></td>
                                <td class="bg-col1" width="40%">PENDIENTES DE LA ESTACIÓN</td>
                                <td class="bg-col1" width="22%">PERSONAL TÉCNICO EXSMECON</td>
                                <td class="bg-col1" width="35%">NOTAS</td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>'.$data['pendiente_1'].'</td>
                                <td>'.$data['tecnico1'].'</td>
                                <td rowspan="5">'.$data['notas'].'</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>'.$data['pendiente_2'].'</td>
                                <td>'.$data['tecnico2'].'</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>'.$data['pendiente_3'].'</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>'.$data['pendiente_4'].'</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>'.$data['pendiente_5'].'</td>
                                <td></td>
                            </tr>
                        </table>
                    </main>
        
                   '.$reporteMateriales.'
        
                    '.$reporteFotos.'
                    
                </div>
            </div>
            
        </div>
	</div>
</body>
';

    return $plantilla;
}

function getDatos($conexion, $idcorrectivo){
    $res = mysqli_query($conexion, "
            SELECT
            r.id, r.razon, c.nombre AS nomCentro , d.nombre AS  nomDepartamento, es.nombreestacion, concat(u.nombre, ' ', u.ap_pat, ' ', u.ap_mat) AS nomResponsable, r.fecha_eje, r.tipo_solucion,
            r.fecha_corte, r.fecha_aviso, r.fecha_salida, r.fecha_llegada, r.fecha_superada, r.fecha_fin, concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nomCoord,
            r.ticket_principal, r.ticket_relacion, r.atencion, r.servicio_afecta, r.estado_ticket, r.en_plazo,
            s.nombresistemafalla, e.nombreequipofalla, t.nombretipofalla, so.nombresolucion, r.descripcion_falla, r.medidas_restituir, r.estado_final,
            r.causas, r.partes_afectadas, r.estaciones_afectadas, r.desc_solucion, r.descripcion_solucion, r.aclarativos, r.acciones_preventivas, 
            r.observaciones_fueraplazo, r.observaciones, r.pendiente_1, r.pendiente_2, r.pendiente_3, r.pendiente_4, r.pendiente_5, r.idgrupo, r.notas
            FROM rutina_correctivo r
            LEFT JOIN centro c ON r.idcentro = c.idcentro
            LEFT JOIN departamento d ON r.iddepartamento = d.iddepartamento
            left join estacionentel es on r.idestacione = es.idestacionentel
            LEFT JOIN usuarios u  ON r.usr_resp  = u.id
            LEFT JOIN usuarios u2 ON r.usr_coord = u2.id
            LEFT JOIN ticket_sistemafalla s ON r.sistemafalla COLLATE utf8_general_ci = s.idsistemafalla COLLATE utf8_general_ci
            LEFT JOIN ticket_equipofalla e  ON r.equipofalla COLLATE utf8_general_ci = e.idequipofalla COLLATE utf8_general_ci
            left join ticket_tipofalla t    on r.tipofalla COLLATE utf8_general_ci = t.idtipofalla COLLATE utf8_general_ci
            left join ticket_solucion so    on r.solucion COLLATE utf8_general_ci = so.idsolucion COLLATE utf8_general_ci
            WHERE r.id = $idcorrectivo");

    $data = mysqli_fetch_array($res);

    $res2 = mysqli_query(
        $conexion, "SELECT g.user1, g.user2, 
                                concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre2, u1.cargo AS cargo2, u1.cel as cel2,
                                concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre3, u2.cargo AS cargo3,  u2.cel as cel3 
                            FROM grupo g
                            JOIN usuarios u1 ON g.user1 = u1.id
                            JOIN usuarios u2 ON g.user2 = u2.id
                            AND g.idgrupo = " . $data['idgrupo']);

    $data2 = mysqli_fetch_array($res2);

    $data["tecnico1"] = $data2['nombre2'];
    $data["tecnico2"] = $data2['nombre3'];

    return $data;
}

function getReporteFotografico($conexion, $idcorrectivo){

    $res = mysqli_query($conexion,
        "SELECT r.nombre, r.titulo FROM rutina_correctivo_img r WHERE r.idrutinacorrectivo = " . $idcorrectivo);

    $result = '<br />
    <main>
        <div class="notices" align="center">
            <div class="notice"><strong>REPORTE FOTOGRAFICO</strong></div>
        </div>
    </main>
    <div class="tborde-foto"><table><tr>';
    $num = 1;
    while( $data = mysqli_fetch_array($res) ){
        if (isset($data['nombre'])) {
            $file_image = "../../fotos/correctivo/" . $data['nombre'];
            if ( exif_imagetype($file_image) == IMAGETYPE_JPEG || exif_imagetype($file_image) == IMAGETYPE_PNG ) {

                adjustPhotoOrientation($file_image);
                $result .= '
                <td width="300px" height="300px" align="center">
                    <div>
                        <img src="' . $file_image . '" style="width: auto; height: auto; display: block;" />
                    </div>                                       
                    <p style="font-size: 14px;">'.$data['titulo'].'</p>
                </td>';

                if (($num % 3) == 0) {
                    $result .= '</tr><tr style="margin-top: 10px;">';
                }
                $num++;
            }
        }
    }
    $result .= '</tr></table></div>';

    return $result;
}

function getReporteMateriales($conexion, $idcorrectivo){
    $res  = mysqli_query($conexion,"SELECT r.insumos, r.repuestos FROM rutina_correctivo r WHERE r.id = " . $idcorrectivo);
    $dato = mysqli_fetch_array($res);
    $insumosDatos   = $dato['insumos'];
    $repuestosDatos = $dato['repuestos'];

    $tabla_insumos   = json_decode($insumosDatos, true);
    $tabla_repuestos = json_decode($repuestosDatos, true);
    $result = '
        <main>
            <table class="tborder">
                <tr>
                    <td class="bg-col1" colspan="3" align="center">LISTA DE REPUESTOS UTILIZADOS</td>
                </tr>
                <tr>
                    <td class="bg-col1" width="34%">DESCRIPCIÓN DE REPUESTOS </td>
                    <td class="bg-col1" width="33%">PROVISTOS POR ENTEL (No DE SERIE)</td>
                    <td class="bg-col1" width="33%">REPUESTOS DAÑADOS (No DE SERIE)</td>
                </tr>
    ';

    if ($tabla_repuestos)
        foreach ($tabla_repuestos as $objVal) {
            $result .= '
            <tr>
                <td>'.$objVal['repuesto'].'</td>
                <td>'.$objVal['provisto'].'</td>
                <td>'.$objVal['danado'].'</td>
            </tr>
            ';
        }
    $result .= '</table></main>';

    $result .= '
        <main>
            <table class="tborder">
                <thead>
                <tr>
                    <td class="bg-col1" colspan="7" align="center">LISTA DE INSUMOS UTILIZADOS</td>
                </tr>
                <tr>
                    <td class="bg-col1" width="7%">Cod</td>
                    <td class="bg-col1" width="30%">Material</td>
                    <td class="bg-col1" width="8%">Unidad</td>
                    <td class="bg-col1" width="10%">Precio</td>
                    <td class="bg-col1" width="10%">Cantidad</td>
                    <td class="bg-col1" width="13%">Total</td>
                    <td class="bg-col1" width="20%">Observaciones</td>
                </tr>
                </thead>
    ';
    if ($tabla_insumos)
        $totalMonto = 0;
        foreach ($tabla_insumos as $objVal) {
            $totalMonto += $objVal['total'];
            $result .= '
            <tr>
                <td>'.$objVal['codigo'].'</td>
                <td>'.$objVal['nombre'].'</td>
                <td>'.$objVal['unidad'].'</td>
                <td align="right">'.$objVal['precio'].'</td>
                <td align="center">'.$objVal['cantidad'].'</td>
                <td align="right">'.number_format($objVal['total'], 2, '.', ',').'</td>
                <td>'.$objVal['observacion'].'</td>
            </tr>
            ';
        }
    $result .= '
        <tr>
            <td colspan="4"></td>
            <td align="right">TOTAL:</td>
            <td align="right">'.number_format($totalMonto, 2, '.', ',').'</td>
            <td></td>
        </tr>
    ';
    $result .= '</table></main>';

    return $result;
}

?>