<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idcatastrox, $cform){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera005($conexion, $jsonData, $idgrupo, $idevento);
    $reporteFoto = getReporteFotoCatastro($conexion, $idcatastrox, $cform);

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
                                <td class="col-25p">'.$d01_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Estado (Obsoleto/Falta de capacidad/Con falla/Bueno)</td>
                                <td class="col-25p">'.$d02_01.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">Tipo de Tablero (REFERENCIA CÓDIGO TABLEROS)</td>
                                <td class="col-25p">'.$d03_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Marca</td>
                                <td class="col-25p">'.$d04_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">N° SERIE</td>
                                <td class="col-25p">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Tipo de uso (Indoor/Outdoor)</td>
                                <td class="col-25p">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tipo de montaje (Pared/Piso/Soporte)</td>
                                <td class="col-25p">'.$d07_01.'</td>
                                
                           </tr>
                            <tr>
                                <td class="col-50p">Sistema en baja tensión BT (Monofásico/Trifásico/Bifásico/Continua)</td>
                                <td class="col-25p">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Capacidad - A</td>
                                <td class="col-25p">'.$d09_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Tipo del elemento de protección principal</td>
                                <td class="col-25p">'.$d10_01.'</td>
                           </tr>
                           <tr>
                                    <td class="col-50p">Protector de segundo nivel</td>
                                <td class="col-25p">'.$d11_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tipo de Distribución (Por Chicotillo/Por Peineta)</td>
                                <td class="col-25p">'.$d12_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Fecha de inicio de operación</td>
                                <td class="col-25p">'.$d13_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p">'.$d14_01.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Fecha de vencimiento de garantía</td>
                                <td class="col-25p">'.$d15_01.'</td>
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