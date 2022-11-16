<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $jsonTabla_1, $jsonTabla_2, $jsonTabla_3, $idgrupo, $idevento, $idcatastrox, $cform){

    $obj = json_decode($jsonData);
    $tabla_1_arr = json_decode($jsonTabla_1, true);
    $tabla_2_arr = json_decode($jsonTabla_2, true);
    $tabla_3_arr = json_decode($jsonTabla_3, true);

    $observaciones1 = convertSpecialChars($obj->observaciones1);
    $observaciones2 = convertSpecialChars($obj->observaciones2);
    $observaciones3 = convertSpecialChars($obj->observaciones3);
    $observaciones = convertSpecialChars($obj->observaciones);
    $pendientes = convertSpecialChars($obj->pendientes);

    $cabecera        = getCabecera011($conexion, $jsonData, $idgrupo, $idevento);

    $reporteFoto = getReporteFotoCatastro($conexion, $idcatastrox, $cform);

    /** Tabla 1 **/
    $tabla1Html = '
    <main>
        <table style="margin-top: 5px;">
            <tr><td class="col-100p no"><strong>II. EQUIPOS INSTALADOS</strong></td></tr>
        </table>
    </main>
    <table class="tborder">
        <tr>
            <td width="10%" class="bg-col1" align="center">Tipo de equipo</td>
            <td width="10%" class="bg-col1" align="center">Modelo</td>
            <td width="10%" class="bg-col1" align="center">Marca</td>
            <td width="5%"  class="bg-col1" align="center">Estado</td>
            <td width="10%" class="bg-col1" align="center">Puertos Uplink</td>
            <td width="10%" class="bg-col1" align="center">Patch Cord</td>
            <td width="20%" class="bg-col1" align="center" colspan="2">Destino Uplink</td>
            <td width="10%" class="bg-col1" align="center">Tipo de Puerto</td>
            <td width="10%" class="bg-col1" align="center">Temp. Ambiente</td>
        </tr>
    ';
    if ($tabla_1_arr)
        foreach ($tabla_1_arr as $objVal) {
            $tabla1Html .=
                "<tr>
                <td>".$objVal['equipo']."</td>
                <td>".$objVal['modelo']."</td>
                <td>".$objVal['marca']."</td>
                <td>".$objVal['estado']."</td>
                <td>".$objVal['puertos']."</td>
                <td>".$objVal['patch']."</td>
                <td>".$objVal['destino1']."</td>
                <td>".$objVal['destino2']."</td>
                <td>".$objVal['tipo']."</td>
                <td>".$objVal['temp']."</td>
                </tr>";
        }
    $tabla1Html .= '</table>';

    $tabla1Html .= '
        <main>
            <table>
                <tr><td class="col-100p"><strong>Observaciones:</strong></td></tr>
                <tr><td>'.$observaciones1.'</td></tr>
            </table>
        </main>
        ';

    /** Tabla 2 **/
    $tabla2Html = '
    <main>
        <table style="margin-top: 5px;">
            <tr><td class="col-100p no"><strong>DATOS DE ENERGIA</strong></td></tr>
        </table>
    </main>
    <table class="tborder">
        <tr>
            <td width="6%"  class="bg-col1" align="center">Cant Fuentes</td>
            <td width="7%"  class="bg-col1" align="center">Enegia ac/dc</td>
            <td width="8%"  class="bg-col1" align="center">Voltaje</td>
            <td width="8%"  class="bg-col1" align="center">Estado</td>
            <td width="27%" class="bg-col1" align="center" colspan="2">Origen Fuente A</td>
            <td width="27%" class="bg-col1" align="center" colspan="2">Origen Fuente B</td>
            <td width="9%"  class="bg-col1" align="center">Voltaje Fuente A</td>
            <td width="9%"  class="bg-col1" align="center">Voltaje Fuente B</td>
        </tr>
    ';
    if ($tabla_2_arr)
        foreach ($tabla_2_arr as $objVal) {
            $tabla2Html .=
                "<tr>
                <td>".$objVal['cant']."</td>
                <td>".$objVal['energia']."</td>
                <td>".$objVal['voltaje']."</td>
                <td>".$objVal['estado']."</td>
                <td>".$objVal['origena1']."</td>
                <td>".$objVal['origena2']."</td>
                <td>".$objVal['origenb1']."</td>
                <td>".$objVal['origenb2']."</td>
                <td>".$objVal['fuentea']."</td>
                <td>".$objVal['fuenteb']."</td>
                </tr>";
        }
    $tabla2Html .= '</table>';

    $tabla2Html .= '
        <main>
            <table>
                <tr><td class="col-100p"><strong>Observaciones:</strong></td></tr>
                <tr><td>'.$observaciones2.'</td></tr>
            </table>
        </main>
        ';

    /** Tabla 3 **/
    $tabla3Html = '
    <main>
        <table style="margin-top: 5px;">
            <tr><td class="col-100p no"><strong>TOPOLOGIA DE RED</strong></td></tr>
        </table>
    </main>
    <table class="tborder">
        <tr>
            <td width="18%" class="bg-col1" align="center">Nombre de equipo</td>
            <td width="18%" class="bg-col1" align="center">Capa de red</td>
            <td width="18%" class="bg-col1" align="center">Topologia</td>
            <td width="18%" class="bg-col1" align="center">Equipo vecino a</td>
            <td width="18%" class="bg-col1" align="center">Equipo vecino b</td>
            <td width="7%"  class="bg-col1" align="center">Proteccion</td>
        </tr>
    ';
    if ($tabla_3_arr)
        foreach ($tabla_3_arr as $objVal) {
            $tabla3Html .=
                "<tr>
                <td>".$objVal['nombre']."</td>
                <td>".$objVal['capa']."</td>
                <td>".$objVal['topologia']."</td>
                <td>".$objVal['equipoa']."</td>
                <td>".$objVal['equipob']."</td>
                <td>".$objVal['proteccion']."</td>
                </tr>";
        }
    $tabla3Html .= '</table>';

    $tabla3Html .= '
        <main>
            <table>
                <tr><td class="col-100p"><strong>Observaciones:</strong></td></tr>
                <tr><td>'.$observaciones3.'</td></tr>
            </table>
        </main>
        ';


    $plantilla =
'<body>
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '. $cabecera .'
                
                <main>
                    '. $tabla1Html .'
                </main>
                <main>
                    '. $tabla2Html .'
                </main>
                <main>
                    '. $tabla3Html .'
                </main>
                
                <main>
                    <table class="tborder">
                        <tr><td class="col-100p no"><strong>OBSERVACIONES:</strong></td></tr>
                        <tr><td>'.$observaciones.'</td></tr>
                    </table>
                </main>
                
                '.$reporteFoto.'
                
                </div>
            </div>
        </div>
	</div>
</body>
';

    return $plantilla;
}

?>