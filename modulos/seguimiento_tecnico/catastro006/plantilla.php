<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera006($conexion, $jsonData, $idgrupo, $idevento);


    /** desarrollo_d **/
    $desarrollo_d = $obj->{'desarrollo_d'};
    $d01_01 = $desarrollo_d->d01_01;
    $d02_01 = $desarrollo_d->d02_01;
    $d03_01 = $desarrollo_d->d03_01;
    $d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d->d04_02;
    $d05_01 = $desarrollo_d->d05_01;
    $d06_01 = $desarrollo_d->d06_01;
    $d07_01 = $desarrollo_d->d07_01;
    $d08_01 = $desarrollo_d->d08_01;
    $d09_01 = $desarrollo_d->d09_01;
    $d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
    $d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
    $d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
    $d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
    $d14_01_01 = $desarrollo_d->d14_01_01; $d14_01_02 = $desarrollo_d->d14_01_02;
    $d14_02_01 = $desarrollo_d->d14_02_01; $d14_02_02 = $desarrollo_d->d14_02_02;
    $d14_03_01 = $desarrollo_d->d14_03_01; $d14_03_02 = $desarrollo_d->d14_03_02;
    $d14_04_01 = $desarrollo_d->d14_04_01; $d14_04_02 = $desarrollo_d->d14_04_02;
    $d14_05_01 = $desarrollo_d->d14_05_01; $d14_05_02 = $desarrollo_d->d14_05_02;
    $d14_06_01 = $desarrollo_d->d14_06_01; $d14_06_02 = $desarrollo_d->d14_06_02;
    $d14_07_01 = $desarrollo_d->d14_07_01; $d14_07_02 = $desarrollo_d->d14_07_02;
    $d14_08_01 = $desarrollo_d->d14_08_01; $d14_08_02 = $desarrollo_d->d14_08_02;
    $d15_01 = $desarrollo_d->d15_01;
    $d16_01 = $desarrollo_d->d16_01;
    $d17_01 = $desarrollo_d->d17_01;

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
                                <td class="col-50p">Sistema en baja tensión BT (Monofásico/Trifásico)</td>
                                <td class="col-25p" colspan="2">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Marca / Modelo</td>
                                <td class="col-25p">'.$d04_01.'</td>
                                <td class="col-25p">'.$d04_02.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">N° SERIE</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">ByPass (Interno/Externo)</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tipo de uso (Indoor/Outdoor)</td>
                                <td class="col-25p" colspan="2">'.$d07_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Voltaje de entrada - VAC</td>
                                <td class="col-25p" colspan="2">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Voltaje de salida - VAC</td>
                                <td class="col-25p" colspan="2">'.$d09_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Capacidad - KVA / Corriente total - A</td>
                                <td class="col-25p">'.$d10_01.'</td>
                                <td class="col-25p">'.$d10_02.'</td>
                           </tr>
                           <tr>
                               <td class="col-50p">Numero de Serie / Modelo de módulos de Control</td>
                               <td class="col-25p">'.$d11_01.'</td>
                               <td class="col-25p">'.$d11_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Cantidad de módulos en uso / cantidad espacio libre para módulos</td>
                                <td class="col-25p">'.$d12_01.'</td>
                                <td class="col-25p">'.$d12_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Capacidad de cada módulo - KVA / corriente - A</td>
                                <td class="col-25p">'.$d13_01.'</td>
                                <td class="col-25p">'.$d13_02.'</td>
                           </tr>
                           
                           </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="table mb-0" class="tborder">
                        <tbody>
                           <tr>
                                <td colspan="6"><strong>Numero de Serie / Modelo de módulos de Potencia</strong></td>
                           </tr>
                           <tr>
                                <td class="col-5p no" align="center">1.-</td>
                                <td class="col-20p">'.$d14_01_01.'</td>
                                <td class="col-20p">'.$d14_01_02.'</td>
                                <td class="col-5p no" align="center">2.-</td>
                                <td class="col-20p">'.$d14_02_01.'</td>
                                <td class="col-20p">'.$d14_02_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-5p no" align="center">3.-</td>
                                <td class="col-20p">'.$d14_03_01.'</td>
                                <td class="col-20p">'.$d14_03_02.'</td>
                                <td class="col-5p no" align="center">4.-</td>
                                <td class="col-20p">'.$d14_04_01.'</td>
                                <td class="col-20p">'.$d14_04_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-5p no" align="center">5.-</td>
                                <td class="col-20p">'.$d14_05_01.'</td>
                                <td class="col-20p">'.$d14_05_02.'</td>
                                <td class="col-5p no" align="center">6.-</td>
                                <td class="col-20p">'.$d14_06_01.'</td>
                                <td class="col-20p">'.$d14_06_02.'</td>
                           </tr>
                           <tr>
                                <td class="col-5p no" align="center">7.-</td>
                                <td class="col-20p">'.$d14_07_01.'</td>
                                <td class="col-20p">'.$d14_07_02.'</td>
                                <td class="col-5p no" align="center">8.-</td>
                                <td class="col-20p">'.$d14_08_01.'</td>
                                <td class="col-20p">'.$d14_08_02.'</td>
                           </tr>
                        </tbody>        
                    </table>									                        
                </main>           
                <main>
                    <table class="tborder">
                        <tbody>            
                            <tr>
                                <td class="col-50p">Fecha de inicio de operación</td>
                                <td class="col-25p" colspan="2">'.$d15_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p" colspan="2">'.$d16_01.'</td>
                           </tr><tr>
                                <td class="col-50p">Fecha de vencimiento de garantía</td>
                                <td class="col-25p" colspan="2">'.$d17_01.'</td>
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