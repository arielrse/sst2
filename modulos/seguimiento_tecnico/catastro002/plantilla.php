<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera002($conexion, $jsonData, $idgrupo, $idevento);

    //$reporteFotog    = getReporteFotog($conexion, $idrutinax, '001');

   // $cabecera        = '<h6>Hola</h6>';
    //$footerPlantilla = '<h6>Hola</h6>';
    //$reporteFotog    = '<h6>Hola</h6>';

    //$footerPlantilla .= $reporteFotog;

    /** desarrollo_d **/
    $desarrollo_d = $obj->{'desarrollo_d'};
    $d01_01 = $desarrollo_d->d01_01;
    $d02_01 = $desarrollo_d->d02_01; $d02_02 = $desarrollo_d->d02_02;
    $d03_01 = $desarrollo_d->d03_01;
    $d04_01 = $desarrollo_d->d04_01;
    $d05_01 = $desarrollo_d->d05_01;
    $d06_01 = $desarrollo_d->d06_01;
    $d07_01 = $desarrollo_d->d07_01;
    $d08_01 = $desarrollo_d->d08_01;
    $d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
    $d10_01 = $desarrollo_d->d10_01;
    $d11_01 = $desarrollo_d->d11_01;
    $d12_01 = $desarrollo_d->d12_01;
    $d13_01 = $desarrollo_d->d13_01;
    $d14_01 = $desarrollo_d->d14_01;
    $d15_01 = $desarrollo_d->d15_01;
    $d16_01 = $desarrollo_d->d16_01;

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
                                <td class="col-50p">Empresa distribuidora de energía</td>
                                <td class="col-25p" colspan="2">'.$d01_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Sistema en baja tensión (BT) / Tensión - V</td>
                                <td class="col-25p">'.$d02_01.'</td>
                                <td class="col-25p">'.$d02_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Longitud de acometida - m</td>
                                <td class="col-25p" colspan="2">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">N° de medidor</td>
                                <td class="col-25p" colspan="2">'.$d04_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">N° de CLIENTE</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Reja de seguridad con candado</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Protector de transciendes de primer nivel</td>
                                <td class="col-25p" colspan="2">'.$d07_01.'</td>
                                
                           </tr>
                            <tr>
                                <td class="col-50p">Fusible de protección</td>
                                <td class="col-25p" colspan="2">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Termomagnético principal de protección / Capacidad - A</td>
                                <td class="col-25p">'.$d09_01.'</td>
                                <td class="col-25p">'.$d09_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Tipo del elemento de protección principal</td>
                                <td class="col-25p" colspan="2">'.$d10_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Barra de distribución</td>
                                <td class="col-25p" colspan="2">'.$d11_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Barra de tierra</td>
                                <td class="col-25p" colspan="2">'.$d12_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Cámara de tierra de pilastra</td>
                                <td class="col-25p" colspan="2">'.$d13_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Fecha de inicio de consumo de energía</td>
                                <td class="col-25p" colspan="2">'.$d14_01.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p" colspan="2">'.$d15_01.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Fecha vencimiento de garantía</td>
                                <td class="col-25p" colspan="2">'.$d16_01.'</td>
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