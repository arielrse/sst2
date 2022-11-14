<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera003($conexion, $jsonData, $idgrupo, $idevento);


    /** desarrollo_d **/
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

    $observaciones = str_replace("&#10;", "<br>", $obj->{'observaciones'});
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
                                <td class="col-50p">Altura de operación - msnm</td>
                                <td class="col-25p" colspan="2">'.$d01_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Funcionalidad (en servicio/fuera de servicio)</td>
                                <td class="col-25p" colspan="2">'.$d02_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Estado (obsoleto/falta de capacidad/con falla)</td>
                                <td class="col-25p" colspan="2">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Marca</td>
                                <td class="col-25p" colspan="2">'.$d04_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Modelo</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">N° Serie</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tipo de uso (Indoor/Outdoor)</td>
                                <td class="col-25p" colspan="2">'.$d07_01.'</td>
                                
                           </tr>
                            <tr>
                                <td class="col-50p">Cabina de insonorización</td>
                                <td class="col-25p" colspan="2">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Sistema en baja tensión BT (Monofásico/trifásico)</td>
                                <td class="col-25p" colspan="2">'.$d09_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Voltaje - V</td>
                                <td class="col-25p" colspan="2">'.$d10_01.'</td>
                           </tr>
                           <tr>
                                    <td class="col-50p">Frecuencia - Hz</td>
                                <td class="col-25p" colspan="2">'.$d11_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Capacidad nominal - KVA</td>
                                <td class="col-25p" colspan="2">'.$d12_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Capacidad efectiva - KVA</td>
                                <td class="col-25p" colspan="2">'.$d13_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tablero de transferencia ATS (Integrado/Externo)</td>
                                <td class="col-25p" colspan="2">'.$d14_01.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Capacidad del tanque  integrado - Lt</td>
                                <td class="col-25p" colspan="2">'.$d15_01.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Capacidad del tanque externo - Lt</td>
                                <td class="col-25p" colspan="2">'.$d16_01.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">bomba de trasiego / Automático - Manual</td>
                                <td class="col-25p">'.$d17_01.'</td>
                                <td class="col-25p">'.$d17_02.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Precalentador / Potencia, capacidad térmica - KW</td>
                                <td class="col-25p">'.$d18_01.'</td>
                                <td class="col-25p">'.$d18_02.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Fecha de inicio de operación</td>
                                <td class="col-25p" colspan="2">'.$d19_01.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p" colspan="2">'.$d20_01.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Fecha de vencimiento de garantía</td>
                                <td class="col-25p" colspan="2">'.$d21_01.'</td>
                          </tr>
                         </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                 <td class="col-100p no"><strong>Observaciones</strong></td>
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