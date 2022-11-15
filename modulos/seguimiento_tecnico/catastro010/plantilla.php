<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera010($conexion, $jsonData, $idgrupo, $idevento);


    /** desarrollo_d **/
    $desarrollo_d = $obj->{'desarrollo_d'};
    $d01_01 = $desarrollo_d->d01_01;
    $d02_01 = $desarrollo_d->d02_01;
    $d03_01 = $desarrollo_d->d03_01; $d03_02 = $desarrollo_d->d03_02;
    $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d->d04_02;
    $d05_01 = $desarrollo_d->d05_01;
    $d06_01 = $desarrollo_d->d06_01;
    $d07_01 = $desarrollo_d->d07_01; $d07_02 = $desarrollo_d->d07_02;
    $d08_01 = $desarrollo_d->d08_01;
    $d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
    $d10_01 = $desarrollo_d->d10_01;
    $d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
    $d12_01 = $desarrollo_d->d12_01;
    $d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
    $d14_01 = $desarrollo_d->d14_01;
    $d15_01 = $desarrollo_d->d15_01; $d15_02 = $desarrollo_d->d15_02;
    $d16_01 = $desarrollo_d->d16_01;
    $d17_01 = $desarrollo_d->d17_01; $d17_02 = $desarrollo_d->d17_02;
    $d18_01 = $desarrollo_d->d18_01;
    $d19_01 = $desarrollo_d->d19_01;
    $d20_01 = $desarrollo_d->d20_01;
    $d21_01 = $desarrollo_d->d21_01;
    $d22_01 = $desarrollo_d->d22_01; $d22_02 = $desarrollo_d->d22_02;

    $observaciones = convertSpecialChars($obj->observaciones);

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
                                <td colspan="3"><strong>PANELES SOLARES FOTOVOLTAICOS</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">Marca / Modelo</td>
                                <td class="col-25p">'.$d03_01.'</td>
                                <td class="col-25p">'.$d03_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Potencia máxima - WP / Voltaje máximo - V</td>
                                <td class="col-25p">'.$d04_01.'</td>
                                <td class="col-25p">'.$d04_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Corriente máxima - A</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Tipo de panel solares (Amorfo/ Mono Cristalino/Poli Cristalino)</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Cantidad total de paneles /  Capacidad Total - KW</td>
                                <td class="col-25p">'.$d07_01.'</td>
                                <td class="col-25p">'.$d07_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Voltaje total - VDC</td>
                                <td class="col-15p"  colspan="2">'.$d08_01.'</td>
                            </tr>
                             <tr>
                                <td colspan="3"><strong>REGULADOR SOLAR</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">Marca / Modelo</td>
                                <td class="col-25p">'.$d09_01.'</td>
                                <td class="col-25p">'.$d09_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">N° Serie</td>
                                <td class="col-25p" colspan="2">'.$d10_01.'</td>
                             </tr>
                            <tr>
                                <td class="col-50p">Voltaje - V / Corriente máxima - A</td>
                                <td class="col-25p">'.$d11_01.'</td>
                                <td class="col-25p">'.$d11_02.'</td>
                             </tr>
                            <tr>
                                <td class="col-50p">Función LVD - Corte por descarga profunda (Si/No) </td>
                                <td class="col-25p" colspan="2">'.$d12_01.'</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>INVERSOR DE VOLTAJE</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">Marca / Modelo</td>
                                <td class="col-25p">'.$d13_01.'</td>
                                <td class="col-25p">'.$d13_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">N° Serie</td>
                                <td class="col-25p" colspan="2">'.$d14_01.'</td>
                             </tr>
                            <tr>
                                <td class="col-50p">ENTRADA DC / Voltaje máximo - V / Corriente máxima - A</td>
                                <td class="col-25p">'.$d15_01.'</td>
                                <td class="col-25p">'.$d15_02.'</td>
                            </tr>
                             <tr>
                                <td class="col-50p">ENTRADA DC / Potencia máxima - WP</td>
                                <td class="col-25p" colspan="2">'.$d16_01.'</td>
                             </tr>
                             <tr>
                                <td class="col-50p">SALIDA AC / Voltaje máximo - V / Corriente máxima - A</td>
                                <td class="col-25p">'.$d17_01.'</td>
                                <td class="col-25p">'.$d17_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">SALIDA AC / Potencia máxima - W</td>
                                <td class="col-25p" colspan="2">'.$d18_01.'</td>
                             </tr>
                             <tr>
                                <td colspan="3"><strong>SISTEMA DE CONTROL HIBRIDO FOTOVOLTAICO-HIBRIDO</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">Marca</td>
                                <td class="col-25p" colspan="2">'.$d19_01.'</td>
                             </tr>
                             <tr>
                                <td class="col-50p">Modelo</td>
                                <td class="col-25p" colspan="2">'.$d20_01.'</td>
                             </tr>
                             <tr>
                                <td class="col-50p">N° Serie</td>
                                <td class="col-25p" colspan="2">'.$d21_01.'</td>
                             </tr>
                              <tr>
                                <td class="col-50p">Sistema híbrido en operación (Si/No) / GE-Red Comercial</td>
                                <td class="col-25p">'.$d22_01.'</td>
                                <td class="col-25p">'.$d22_02.'</td>
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