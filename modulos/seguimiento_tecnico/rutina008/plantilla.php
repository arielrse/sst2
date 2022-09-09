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
    $f1_01_01 = $f_verificacion->f1_01_01 ? $check : $uncheck; $f1_01_02 = $f_verificacion->f1_01_02 ? $check : $uncheck; $f1_01_03 = $f_verificacion->f1_01_03;

    $g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
    $g1_01_01 = $g_desarrollo_g1->g1_01_01 ? $check : $uncheck; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? $check : $uncheck; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
    $g1_02_01 = $g_desarrollo_g1->g1_02_01 ? $check : $uncheck; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? $check : $uncheck; $g1_02_03 = $g_desarrollo_g1->g1_02_03;
    $g1_03_01 = $g_desarrollo_g1->g1_03_01 ? $check : $uncheck; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? $check : $uncheck; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
    $g1_04_01 = $g_desarrollo_g1->g1_04_01 ? $check : $uncheck; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? $check : $uncheck; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
    $g1_05_01 = $g_desarrollo_g1->g1_05_01 ? $check : $uncheck; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? $check : $uncheck; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
    $g1_06_01 = $g_desarrollo_g1->g1_06_01 ? $check : $uncheck; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? $check : $uncheck; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
    $g1_07_01 = $g_desarrollo_g1->g1_07_01 ? $check : $uncheck; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? $check : $uncheck; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
    $g1_08_01 = $g_desarrollo_g1->g1_08_01 ? $check : $uncheck; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? $check : $uncheck; $g1_08_03 = $g_desarrollo_g1->g1_08_03;
    $g1_09_01 = $g_desarrollo_g1->g1_09_01 ? $check : $uncheck; $g1_09_02 = $g_desarrollo_g1->g1_09_02 ? $check : $uncheck; $g1_09_03 = $g_desarrollo_g1->g1_09_03;
    $g1_10_01 = $g_desarrollo_g1->g1_10_01 ? $check : $uncheck; $g1_10_02 = $g_desarrollo_g1->g1_10_02 ? $check : $uncheck; $g1_10_03 = $g_desarrollo_g1->g1_10_03;
    $g1_11_01 = $g_desarrollo_g1->g1_11_01 ? $check : $uncheck; $g1_11_02 = $g_desarrollo_g1->g1_11_02 ? $check : $uncheck; $g1_11_03 = $g_desarrollo_g1->g1_11_03;
    $g1_12_01 = $g_desarrollo_g1->g1_12_01 ? $check : $uncheck; $g1_12_02 = $g_desarrollo_g1->g1_12_02 ? $check : $uncheck; $g1_12_03 = $g_desarrollo_g1->g1_12_03;
    $g1_13_01 = $g_desarrollo_g1->g1_13_01 ? $check : $uncheck; $g1_13_02 = $g_desarrollo_g1->g1_13_02 ? $check : $uncheck; $g1_13_03 = $g_desarrollo_g1->g1_13_03;
    $g1_14_01 = $g_desarrollo_g1->g1_14_01 ? $check : $uncheck; $g1_14_02 = $g_desarrollo_g1->g1_14_02 ? $check : $uncheck; $g1_14_03 = $g_desarrollo_g1->g1_14_03;
    $g1_15_01 = $g_desarrollo_g1->g1_15_01 ? $check : $uncheck; $g1_15_02 = $g_desarrollo_g1->g1_15_02 ? $check : $uncheck; $g1_15_03 = $g_desarrollo_g1->g1_15_03;
    $g1_16_01 = $g_desarrollo_g1->g1_16_01 ? $check : $uncheck; $g1_16_02 = $g_desarrollo_g1->g1_16_02 ? $check : $uncheck; $g1_16_03 = $g_desarrollo_g1->g1_16_03;

    $g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
    $g2_01_01 = $g_desarrollo_g2->g2_01_01 ? $check : $uncheck; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
    $g2_02_01 = $g_desarrollo_g2->g2_02_01 ? $check : $uncheck; $g2_02_02 = $g_desarrollo_g2->g2_02_02;
    $g2_03_01 = $g_desarrollo_g2->g2_03_01 ? $check : $uncheck; $g2_03_02 = $g_desarrollo_g2->g2_03_02;
    $g2_04_01 = $g_desarrollo_g2->g2_04_01 ? $check : $uncheck; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
    $g2_05_01 = $g_desarrollo_g2->g2_05_01 ? $check : $uncheck; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
    $g2_06_01 = $g_desarrollo_g2->g2_06_01 ? $check : $uncheck; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
    $g2_07_01 = $g_desarrollo_g2->g2_07_01 ? $check : $uncheck; $g2_07_02 = $g_desarrollo_g2->g2_07_02;

    $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
    $g3_01_01 = $g_desarrollo_g3->g3_01_01; $g3_01_02 = $g_desarrollo_g3->g3_01_02; $g3_01_03 = $g_desarrollo_g3->g3_01_03; $g3_01_04 = $g_desarrollo_g3->g3_01_04; $g3_01_05 = $g_desarrollo_g3->g3_01_05; $g3_01_06 = $g_desarrollo_g3->g3_01_06;
    $g3_02_01 = $g_desarrollo_g3->g3_02_01; $g3_02_02 = $g_desarrollo_g3->g3_02_02; $g3_02_03 = $g_desarrollo_g3->g3_02_03;
    $g3_03_01 = $g_desarrollo_g3->g3_03_01;
    $g3_04_01 = $g_desarrollo_g3->g3_04_01 ? $check : $uncheck; $g3_04_02 = $g_desarrollo_g3->g3_04_02 ? $check : $uncheck;
    $g3_05_01 = $g_desarrollo_g3->g3_05_01 ? $check : $uncheck; $g3_05_02 = $g_desarrollo_g3->g3_05_02 ? $check : $uncheck;
    $g3_06_01 = $g_desarrollo_g3->g3_06_01;

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
                            <h4>RUTINA DE MANTENIMIENTO PREVENTIVO</h4>
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
                    <table>
                        <tbody> 
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre1.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo1.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-10p">'.$cel1.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre2.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo2.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-10p">'.$cel2.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre3.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo3.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-10p">'.$cel3.'</td>
                            </tr>
                            
                            
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('FTITLE').'</strong></div>
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
