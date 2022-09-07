<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};

    $b1_noAplica    = $obj->{'b1_noAplica'}     ? $check : $uncheck;
    $b1_idenActivo  = $obj->{'b1_idenActivo'}   ? $obj->{'b1_idenActivo'}  : "" ;
    $b1_nroActivo   = $obj->{'b1_nroActivo'}    ? $obj->{'b1_nroActivo'}   : "" ;

    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});

    $d_horainicio   = $obj->{'d_horainicio'};
    $d_horafin      = $obj->{'d_horafin'};
    $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);

    //---------------------------
    $dataPers = getPersonalOyM($conexion, $obj->{'e_personal'});
    $nombre1 = $dataPers['nombre'];
    $cargo1  = $dataPers['cargo'];
    $cel1    = $dataPers['cel'];

    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    $cargo2  = $dataPersMtto['cargo2'];
    $cargo3  = $dataPersMtto['cargo3'];
    $cel2    = $dataPersMtto['cel2'];
    $cel3    = $dataPersMtto['cel3'];
    //---------------------------

    /** f_verificacion **/
    $f_verificacion = $obj->{'f_verificacion'};
    $f01_1 = $f_verificacion[0]->f01_1 ? $check : $uncheck;
    $f01_2 = $f_verificacion[0]->f01_2 ? $check : $uncheck;
    $f01_3 = $f_verificacion[0]->f01_3;
    $f02_1 = $f_verificacion[1]->f02_1 ? $check : $uncheck;
    $f02_2 = $f_verificacion[1]->f02_2 ? $check : $uncheck;
    $f02_3 = $f_verificacion[1]->f02_3;
    $f03_1 = $f_verificacion[2]->f03_1 ? $check : $uncheck;
    $f03_2 = $f_verificacion[2]->f03_2 ? $check : $uncheck;
    $f03_3 = $f_verificacion[2]->f03_3;
    $f04_1 = $f_verificacion[3]->f04_1 ? $check : $uncheck;
    $f04_2 = $f_verificacion[3]->f04_2 ? $check : $uncheck;
    $f04_3 = $f_verificacion[3]->f04_3;
    $f05_1 = $f_verificacion[4]->f05_1 ? $check : $uncheck;
    $f05_2 = $f_verificacion[4]->f05_2 ? $check : $uncheck;
    $f05_3 = $f_verificacion[4]->f05_3;
    $f06_1 = $f_verificacion[5]->f06_1 ? $check : $uncheck;
    $f06_2 = $f_verificacion[5]->f06_2 ? $check : $uncheck;
    $f06_3 = $f_verificacion[5]->f06_3;
    $f07_1 = $f_verificacion[6]->f07_1 ? $check : $uncheck;
    $f07_2 = $f_verificacion[6]->f07_2 ? $check : $uncheck;
    $f07_3 = $f_verificacion[6]->f07_3;
    $f08_1 = $f_verificacion[7]->f08_1 ? $check : $uncheck;
    $f08_2 = $f_verificacion[7]->f08_2 ? $check : $uncheck;
    $f08_3 = $f_verificacion[7]->f08_3;
    $f09_1 = $f_verificacion[8]->f09_1 ? $check : $uncheck;
    $f09_2 = $f_verificacion[8]->f09_2 ? $check : $uncheck;
    $f09_3 = $f_verificacion[8]->f09_3;

    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                <table>
                    <tr>
                        <th class="col-2">
                            <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
                        </th>
                        <th class="col-10 company-details">
                            <div>
                                <div>RMP-BB-001/2021</div>
                                <div>Subgerencia de Operación y Mantenimiento</div>
                                <div>Sistemas de Energía y Climatización</div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center" colspan="2">
                            <h4>RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS</h4>
                        </th>
                    </tr>
                </table>
                <main>
                    <div class="notices">
                        <div class="notice"><strong>A. Identificación del Sitio</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-10p no">CM/SCM:</td>
                                <td class="col-20p">'. $cm .'</td>
                                <td class="col-10p no">ID Sitio:</td>
                                <td class="col-10p">'. $sitioId .'</td>
                                <td class="col-12p no">Property_id:</td>
                                <td class="col-40p">'. $propertyId .'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
               
                <main>
                    <div class="notices">
                        <div class="notice"><strong>B. Identificación del Activo</strong></div>
                    </div>
                </main>																        
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-15p no">Identificación:</td>
                                <td>'. $b_idenActivo .'</td>
                                <td class="col-15p no">N° Activo Fijo:</td>
                                <td>'. $b_nroActivo .'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>B1. Identificación del Activo Madre</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-10p no">NO APLICA</td>
                                <td class="col-5p" align="center">'.$b1_noAplica.'</td>
                                <td class="col-13p no">Identificación:</td>
                                <td>'.$b1_idenActivo.'</td>
                                <td class="col-13p no">N° Activo Fijo:</td>
                                <td>'.$b1_nroActivo.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>C. Fecha de Realización</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-30p no">Fecha de mantenimiento:</td>
                                <td class="col-70p">'.$c_fechaRealizacion.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>D. Tiempo de Duración</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-15p no">Hora de inicio:</td>
                                <td>'.$d_horainicio.'</td>
                                <td class="col-20p no">Hora de Culminación:</td>
                                <td>'.$d_horafin.'</td>
                                <td class="col-20p no">Tiempo Transcurrido:</td>
                                <td>'.$tiempoTrans.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>E. Personal Técnico Responsable</strong></div>
                    </div>
                </main>	
                <main>
                    <table class="tborder">
                        <tbody> 
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre1.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo1.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel1.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre2.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo2.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel2.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre3.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo3.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel3.'</td>
                            </tr>
                            
                            
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>F. Verificación Visual - Estado del Activo</strong></div>
                    </div>
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-40p">'.constant('F01').'</td>
                                <td class="col-10p">'.$f01_1.' Si</td>
                                <td class="col-10p">'.$f01_2.' No</td>
                                <td class="col-40p">Obs. '.$f01_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F02').'</td>
                                <td class="col-10p">'.$f02_1.' Si</td>
                                <td class="col-10p">'.$f02_2.' No</td>
                                <td class="col-40p">Obs. '.$f02_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F03').'</td>
                                <td class="col-10p">'.$f03_1.' Si</td>
                                <td class="col-10p">'.$f03_2.' No</td>
                                <td class="col-40p">Obs. '.$f03_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F04').'</td>
                                <td class="col-10p">'.$f04_1.' Si</td>
                                <td class="col-10p">'.$f04_2.' No</td>
                                <td class="col-40p">Obs. '.$f04_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F05').'</td>
                                <td class="col-10p">'.$f05_1.' Bueno</td>
                                <td class="col-10p">'.$f05_2.' Malo</td>
                                <td class="col-40p">Obs. '.$f05_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F06').'</td>
                                <td class="col-10p">'.$f06_1.' Si</td>
                                <td class="col-10p">'.$f06_2.' No</td>
                                <td class="col-40p">Obs. '.$f06_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F07').'</td>
                                <td class="col-10p">'.$f07_1.' Si</td>
                                <td class="col-10p">'.$f07_2.' No</td>
                                <td class="col-40p">Obs. '.$f07_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F08').'</td>
                                <td class="col-10p">'.$f08_1.' Si</td>
                                <td class="col-10p">'.$f08_2.' No</td>
                                <td class="col-40p">Obs. '.$f08_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F09').'</td>
                                <td class="col-10p">'.$f09_1.' Si</td>
                                <td class="col-10p">'.$f09_2.' No</td>
                                <td class="col-40p">Obs. '.$f09_3.'</td>
                            </tr>
                                                    
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('GTITLE').'</strong></div>
                    </div>
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-40p">'.constant('G01').'</td>
                                <td class="col-10p">'.$f01_1.' Si</td>
                                <td class="col-10p">'.$f01_2.' No</td>
                                <td class="col-40p">Obs. '.$f01_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G02').'</td>
                                <td class="col-10p">'.$f02_1.' Si</td>
                                <td class="col-10p">'.$f02_2.' No</td>
                                <td class="col-40p">Obs. '.$f02_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G03').'</td>
                                <td class="col-10p">'.$f03_1.' Si</td>
                                <td class="col-10p">'.$f03_2.' No</td>
                                <td class="col-40p">Obs. '.$f03_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G04').'</td>
                                <td class="col-10p">'.$f04_1.' Si</td>
                                <td class="col-10p">'.$f04_2.' No</td>
                                <td class="col-40p">Obs. '.$f04_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G05').'</td>
                                <td class="col-10p">'.$f05_1.' Si</td>
                                <td class="col-10p">'.$f05_2.' No</td>
                                <td class="col-40p">Obs. '.$f05_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G06').'</td>
                                <td class="col-10p">'.$f06_1.' Si</td>
                                <td class="col-10p">'.$f06_2.' No</td>
                                <td class="col-40p">Obs. '.$f06_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G07').'</td>
                                <td class="col-10p">'.$f07_1.' Si</td>
                                <td class="col-10p">'.$f07_2.' No</td>
                                <td class="col-40p">Obs. '.$f07_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G08').'</td>
                                <td class="col-10p">'.$f08_1.' Si</td>
                                <td class="col-10p">'.$f08_2.' No</td>
                                <td class="col-40p">Obs. '.$f08_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G09').'</td>
                                <td class="col-10p">'.$f09_1.' Si</td>
                                <td class="col-10p">'.$f09_2.' No</td>
                                <td class="col-40p">Obs. '.$f09_3.'</td>
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

