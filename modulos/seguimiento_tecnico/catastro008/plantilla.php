<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idcatastrox, $cform){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera008($conexion, $jsonData, $idgrupo, $idevento);
    $reporteFoto     = getReporteFotoCatastro($conexion, $idcatastrox, $cform);


    /** desarrollo_d **/
    $desarrollo_d = $obj->{'desarrollo_d'};
    $d01_01 = $desarrollo_d->d01_01;
    $d02_01 = $desarrollo_d->d02_01;
    $d03_01 = $desarrollo_d->d03_01;
    $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d-> d04_02;
    $d05_01 = $desarrollo_d->d05_01; $d05_02 = $desarrollo_d-> d05_02;
    $d06_01 = $desarrollo_d->d06_01; $d06_02 = $desarrollo_d-> d06_02;
    $d07_01 = $desarrollo_d->d07_01;
    $d08_01 = $desarrollo_d->d08_01; $d08_02 = $desarrollo_d-> d08_02; $d08_03 = $desarrollo_d-> d08_03;
    $d09_01 = $desarrollo_d->d09_01;
    $d10_01 = $desarrollo_d->d10_01;
    $d11_01 = $desarrollo_d->d11_01;
    $d12_01 = $desarrollo_d->d12_01;
    $d13_01 = $desarrollo_d->d13_01;
    $d14_01 = $desarrollo_d->d14_01;



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
                                <td class="col-25p" colspan="3">'.$d01_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Estado (degradado/dañado)</td>
                                <td class="col-25p" colspan="3">'.$d02_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Tipo de Batería (AGM/VRLA/LITIO)</td>
                                <td class="col-25p" colspan="3">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Cantidad de bancos de baterías / total de baterías</td>
                                <td class="col-25p">'.$d04_01.'</td>
                                <td class="col-25p" colspan="2">'.$d04_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Marca / Modelo</td>
                                <td class="col-25p">'.$d05_01.'</td>
                                <td class="col-25p" colspan="2">'.$d05_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Autonomía total del banco de baterías - Ah / Horas - Minutos</td>
                                <td class="col-25p">'.$d06_01.'</td>
                                <td class="col-25p"  colspan="2">'.$d06_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Contenedor Gabinete (Outdoor)/Rack/Estructura (Indoor)</td>
                                <td class="col-25p" colspan="3">'.$d07_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Dimensiones de bateria (Profundidad mm X Alto mm X Ancho mm)</td>
                                <td class="col-15p">'.$d08_01.'</td>
                                <td class="col-15p">'.$d08_02.'</td>
                                <td class="col-15p">'.$d08_03.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Voltaje de banco - VDC</td>
                                <td class="col-25p" colspan="3">'.$d09_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Voltaje de batería - VDC</td>
                                <td class="col-25p" colspan="3">'.$d10_01.'</td>
                             </tr>
                           <tr>
                               <td class="col-50p">Fecha de fabricación</td>
                               <td class="col-25p" colspan="3">'.$d11_01.'</td>
                            </tr>
                           <tr>
                                <td class="col-50p">Fecha de inicio de operación</td>
                                <td class="col-25p" colspan="3">'.$d12_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p" colspan="3">'.$d13_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Fecha de vencimiento de garantía</td>
                                <td class="col-25p" colspan="3">'.$d14_01.'</td>
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