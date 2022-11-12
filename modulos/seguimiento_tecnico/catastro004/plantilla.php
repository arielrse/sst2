<?php
require("../../../funciones/DateUtils.php");
require("../ReporteCatastroUtils.php");


function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
   // $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
   // $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera004($conexion, $jsonData, $idgrupo, $idevento);


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
                                <td class="col-50p">Equipo de pertenencia (Grupo Electrógeno/UPS)</td>
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
                                <td class="col-50p">Tablero de transferencia ATS (Integrado/Externo)</td>
                                <td class="col-25p" colspan="2">'.$d04_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Marca</td>
                                <td class="col-25p" colspan="2">'.$d05_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Modelo</td>
                                <td class="col-25p" colspan="2">'.$d06_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">N° Serie</td>
                                <td class="col-25p" colspan="2">'.$d07_01.'</td>
                                
                           </tr>
                            <tr>
                                <td class="col-50p">Sistema en baja tensión BT (Monofásico/Bifásico/trifásico)</td>
                                <td class="col-25p" colspan="2">'.$d08_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Voltaje - V</td>
                                <td class="col-25p" colspan="2">'.$d09_01.'</td>
                           </tr>
                            <tr>
                                <td class="col-50p">Capacidad - KVA</td>
                                <td class="col-25p" colspan="2">'.$d10_01.'</td>
                           </tr>
                           <tr>
                                    <td class="col-50p">Protector de segundo nivel</td>
                                <td class="col-25p" colspan="2">'.$d11_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Tipo de uso (Indoor / Outdoor)</td>
                                <td class="col-25p" colspan="2">'.$d12_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Año de inicio de operación</td>
                                <td class="col-25p" colspan="2">'.$d13_01.'</td>
                           </tr>
                           <tr>
                                <td class="col-50p">Fecha de inicio de operación</td>
                                <td class="col-25p" colspan="2">'.$d14_01.'</td>
                           </tr>
                          <tr>
                                <td class="col-50p">Proyecto</td>
                                <td class="col-25p" colspan="2">'.$d15_01.'</td>
                          </tr>
                          <tr>
                                <td class="col-50p">Fecha de vencimiento de garantía</td>
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