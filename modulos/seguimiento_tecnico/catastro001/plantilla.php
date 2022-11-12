<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera1($conexion, $jsonData, $idgrupo, $idevento);

    //$reporteFotog    = getReporteFotog($conexion, $idrutinax, '001');

   // $cabecera        = '<h6>Hola</h6>';
    //$footerPlantilla = '<h6>Hola</h6>';
    //$reporteFotog    = '<h6>Hola</h6>';

    //$footerPlantilla .= $reporteFotog;

    /** desarrollo_d **/
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

    $observaciones = $obj->{'observaciones'};
    $plantilla =
'<body>
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                
                '. $cabecera .'
                <main>
                    <table class="tborder">
                        <tbody>
                           <tr>
                                <td class="col-50p">Funcionalidad (en servicio/fuera de servicio)</td>
                                <td class="col-25p" colspan="2">'.$d01_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Estado (obsoleto/falta de capacidad/con falla)</td>
                                <td class="col-25p" colspan="2">'.$d02_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Derivación de Media tensión  (MT), Tensión en primario - KV</td>
                                <td class="col-25p" colspan="2">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Propiedad (Empresa distribuidora/ENTEL S.A.)</td>
                                <td class="col-25p" colspan="2">'.$d04_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Empresa distribuidora de energía</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Longitud de línea (MT) - Km</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Funcionalidad (en servicio/fuera de servicio)</td>
                                <td class="col-25p">'.$d07_01.'</td>
                                <td class="col-25p">'.$d07_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Largo total del poste - m</td>
                                <td class="col-25p" colspan="2">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Seccionador fusible MT en Partida (Si/No) / Capacidad - KV</td>
                                <td class="col-25p">'.$d09_01.'</td>
                                <td class="col-25p">'.$d09_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Seccionador fusible MT en transformador (Si/No) / Capacidad - KV</td>
                                <td class="col-25p">'.$d10_01.'</td>
                                <td class="col-25p">'.$d10_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Pararrayo de línea MT en partida (Si/No) / Capacidad - KV</td>
                                <td class="col-25p">'.$d11_01.'</td>
                                <td class="col-25p">'.$d11_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Pararrayo de línea MT en transformador (Si/No) / Capacidad - KV</td>
                                <td class="col-25p">'.$d12_01.'</td>
                                <td class="col-25p">'.$d12_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Sistema de puesta a tierra en puesto de transformación / medida - ohm (*)</td>
                                <td class="col-25p">'.$d13_01.'</td>
                                <td class="col-25p">'.$d13_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Sistema de puesta a tierra de paso / cantidad</td>
                                <td class="col-25p">'.$d14_01.'</td>
                                <td class="col-25p">'.$d14_02.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Sistema en baja tensión (BT) / Tensión - V</td>
                                <td class="col-25p">'.$d15_01.'</td>
                                <td class="col-25p">'.$d15_02.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Capacidad del transformador - KVA / Frecuencia - Hz</td>
                                <td class="col-25p">'.$d16_01.'</td>
                                <td class="col-25p">'.$d16_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Largo total del poste - m</td>
                                <td class="col-25p" colspan="2">'.$d17_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Modelo de transformador / Fecha de verificación (dd/mm/aaaa)</td>
                                <td class="col-25p">'.$d18_01.'</td>
                                <td class="col-25p">'.$d18_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">N° Serie de transformador / Fecha de verificación (dd/mm/aaaa)</td>
                                <td class="col-25p">'.$d19_01.'</td>
                                <td class="col-25p">'.$d19_02.'</td>
                           </tr>
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-100p">Observaciones</td>
                            </tr>
                            <tr>
                               <td>'.$observaciones.'</td>
                           </tr>
                        </tbody>
                    </table>
                </main>
                </div>
            </div>
        </div>
	</div>
</body>
';

    return $plantilla;
}

?>