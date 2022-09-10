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
    $footerPlantilla    = getFooter($jsonData);

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
    $f01_1 = $f_verificacion->f01_1 ? $check : $uncheck; $f01_2 = $f_verificacion->f01_2 ? $check : $uncheck; $f01_3 = $f_verificacion->f01_3;
    $f02_1 = $f_verificacion->f02_1 ? $check : $uncheck; $f02_2 = $f_verificacion->f02_2 ? $check : $uncheck; $f02_3 = $f_verificacion->f02_3;
    $f03_1 = $f_verificacion->f03_1 ? $check : $uncheck; $f03_2 = $f_verificacion->f03_2 ? $check : $uncheck; $f03_3 = $f_verificacion->f03_3;

    $g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
    $g1_01_01 = $g_desarrollo_g1->g1_01_01 ? $check : $uncheck; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? $check : $uncheck; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
    $g1_02_01 = $g_desarrollo_g1->g1_02_01 ? $check : $uncheck; $g1_02_02 = $g_desarrollo_g1->g1_02_02;
    $g1_03_01 = $g_desarrollo_g1->g1_03_01 ? $check : $uncheck; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? $check : $uncheck; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
    $g1_04_01 = $g_desarrollo_g1->g1_04_01 ? $check : $uncheck; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? $check : $uncheck; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
    $g1_05_01 = $g_desarrollo_g1->g1_05_01 ? $check : $uncheck; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? $check : $uncheck; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
    $g1_06_01 = $g_desarrollo_g1->g1_06_01 ? $check : $uncheck; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? $check : $uncheck; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
    $g1_07_01 = $g_desarrollo_g1->g1_07_01 ? $check : $uncheck; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? $check : $uncheck; $g1_07_03 = $g_desarrollo_g1->g1_07_03 ? $check : $uncheck; $g1_07_04 = $g_desarrollo_g1->g1_07_04;
    $g1_08_01 = $g_desarrollo_g1->g1_08_01 ? $check : $uncheck; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? $check : $uncheck; $g1_08_03 = $g_desarrollo_g1->g1_08_03 ? $check : $uncheck; $g1_08_04 = $g_desarrollo_g1->g1_08_04;

    $g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
    $g2_01_01 = $g_desarrollo_g2->g2_01_01 ? $check : $uncheck; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
    $g2_02_01 = $g_desarrollo_g2->g2_02_01 ? $check : $uncheck; $g2_02_02 = $g_desarrollo_g2->g2_02_02;
    $g2_03_01 = $g_desarrollo_g2->g2_03_01 ? $check : $uncheck; $g2_03_02 = $g_desarrollo_g2->g2_03_02;
    $g2_04_01 = $g_desarrollo_g2->g2_04_01 ? $check : $uncheck; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
    $g2_05_01 = $g_desarrollo_g2->g2_05_01 ? $check : $uncheck; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
    $g2_06_01 = $g_desarrollo_g2->g2_06_01 ? $check : $uncheck; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
    $g2_07_01 = $g_desarrollo_g2->g2_07_01 ? $check : $uncheck; $g2_07_02 = $g_desarrollo_g2->g2_07_02;
    $g2_08_01 = $g_desarrollo_g2->g2_08_01 ? $check : $uncheck; $g2_08_02 = $g_desarrollo_g2->g2_08_02;
    $g2_09_01 = $g_desarrollo_g2->g2_09_01 ? $check : $uncheck; $g2_09_02 = $g_desarrollo_g2->g2_09_02;
    $g2_10_01 = $g_desarrollo_g2->g2_10_01 ? $check : $uncheck; $g2_10_02 = $g_desarrollo_g2->g2_10_02 ? $check : $uncheck; $g2_10_03 = $g_desarrollo_g2->g2_10_03;
    $g2_11_01 = $g_desarrollo_g2->g2_11_01 ? $check : $uncheck; $g2_11_02 = $g_desarrollo_g2->g2_11_02 ? $check : $uncheck; $g2_11_03 = $g_desarrollo_g2->g2_11_03;
    $g2_12_01 = $g_desarrollo_g2->g2_12_01 ? $check : $uncheck; $g2_12_02 = $g_desarrollo_g2->g2_12_02 ? $check : $uncheck; $g2_12_03 = $g_desarrollo_g2->g2_12_03;
    $g2_13_01 = $g_desarrollo_g2->g2_13_01 ? $check : $uncheck; $g2_13_02 = $g_desarrollo_g2->g2_13_02 ? $check : $uncheck; $g2_13_03 = $g_desarrollo_g2->g2_13_03;

    $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
    $g3_01_01 = $g_desarrollo_g3->g3_01_01; $g3_01_02 = $g_desarrollo_g3->g3_01_02; $g3_01_03 = $g_desarrollo_g3->g3_01_03; $g3_01_04 = $g_desarrollo_g3->g3_01_04; $g3_01_05 = $g_desarrollo_g3->g3_01_05; $g3_01_06 = $g_desarrollo_g3->g3_01_06; $g3_01_07 = $g_desarrollo_g3->g3_01_07; $g3_01_08 = $g_desarrollo_g3->g3_01_08;
    $g3_01_09 = $g_desarrollo_g3->g3_01_09; $g3_01_10 = $g_desarrollo_g3->g3_01_10; $g3_01_11 = $g_desarrollo_g3->g3_01_11; $g3_01_12 = $g_desarrollo_g3->g3_01_12; $g3_01_13 = $g_desarrollo_g3->g3_01_13; $g3_01_14 = $g_desarrollo_g3->g3_01_14; $g3_01_15 = $g_desarrollo_g3->g3_01_15; $g3_01_16 = $g_desarrollo_g3->g3_01_16;
    $g3_01_17 = $g_desarrollo_g3->g3_01_17; $g3_01_18 = $g_desarrollo_g3->g3_01_18; $g3_01_19 = $g_desarrollo_g3->g3_01_19; $g3_01_20 = $g_desarrollo_g3->g3_01_20; $g3_01_21 = $g_desarrollo_g3->g3_01_21; $g3_01_22 = $g_desarrollo_g3->g3_01_22; $g3_01_23 = $g_desarrollo_g3->g3_01_23; $g3_01_24 = $g_desarrollo_g3->g3_01_24;

    $g3_02_01 = $g_desarrollo_g3->g3_02_01; $g3_02_02 = $g_desarrollo_g3->g3_02_02;
    $g3_03_01 = $g_desarrollo_g3->g3_03_01; $g3_03_02 = $g_desarrollo_g3->g3_03_02;
    $g3_04_01 = $g_desarrollo_g3->g3_04_01; $g3_04_02 = $g_desarrollo_g3->g3_04_02;
    $g3_05_01 = $g_desarrollo_g3->g3_05_01;

    $g_desarrollo_g4 = $obj->{'g_desarrollo_g4'};
    $g4_01_01 = $g_desarrollo_g4->g4_01_01 ? $check : $uncheck; $g4_01_02 = $g_desarrollo_g4->g4_01_02 ? $check : $uncheck; $g4_01_03 = $g_desarrollo_g4->g4_01_03 ? $check : $uncheck; $g4_01_04 = $g_desarrollo_g4->g4_01_04 ? $check : $uncheck;
    $g4_02_01 = $g_desarrollo_g4->g4_02_01 ? $check : $uncheck; $g4_02_02 = $g_desarrollo_g4->g4_02_02 ? $check : $uncheck; $g4_02_03 = $g_desarrollo_g4->g4_02_03 ? $check : $uncheck; $g4_02_04 = $g_desarrollo_g4->g4_02_04 ? $check : $uncheck;
    $g4_03_01 = $g_desarrollo_g4->g4_03_01 ? $check : $uncheck; $g4_03_02 = $g_desarrollo_g4->g4_03_02 ? $check : $uncheck; $g4_03_03 = $g_desarrollo_g4->g4_03_03 ? $check : $uncheck; $g4_03_04 = $g_desarrollo_g4->g4_03_04 ? $check : $uncheck;
    $g4_04_01 = $g_desarrollo_g4->g4_04_01 ? $check : $uncheck; $g4_04_02 = $g_desarrollo_g4->g4_04_02 ? $check : $uncheck; $g4_04_03 = $g_desarrollo_g4->g4_04_03 ? $check : $uncheck; $g4_04_04 = $g_desarrollo_g4->g4_04_04 ? $check : $uncheck;
    $g4_05_01 = $g_desarrollo_g4->g4_05_01 ? $check : $uncheck; $g4_05_02 = $g_desarrollo_g4->g4_05_02 ? $check : $uncheck; $g4_05_03 = $g_desarrollo_g4->g4_05_03 ? $check : $uncheck; $g4_05_04 = $g_desarrollo_g4->g4_05_04 ? $check : $uncheck;
    $g4_06_01 = $g_desarrollo_g4->g4_06_01 ? $check : $uncheck; $g4_06_02 = $g_desarrollo_g4->g4_06_02 ? $check : $uncheck; $g4_06_03 = $g_desarrollo_g4->g4_06_03 ? $check : $uncheck; $g4_06_04 = $g_desarrollo_g4->g4_06_04 ? $check : $uncheck;

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
                            <tr>
                                <td class="col-40p">'.constant('F02').'</td>
                                <td class="col-10p">'.$f02_1.' Si</td>
                                <td class="col-10p">'.$f02_2.' No</td>
                                <td class="col-40p">Obs. '.$f02_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F03').'</td>
                                <td class="col-10p">'.$f03_1.' Si tiene</td>
                                <td class="col-10p">'.$f03_2.' No tiene</td>
                                <td class="col-40p">Obs. '.$f02_3.'</td>
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
                                <td colspan="5"><strong>'.constant('G1').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_01').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_01_01.' Bueno</td>
                                <td class="col-15p">'.$g1_01_02.' Deteriorado</td>
                                <td class="col-20p">Obs. '.$g1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_02').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_02_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-20p">Obs. '.$g1_02_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_03').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_03_01.' Bueno</td>
                                <td class="col-15p">'.$g1_03_02.' Obstrucción</td>
                                <td class="col-20p">Obs. '.$g1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_04').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_04_01.' Bueno</td>
                                <td class="col-15p">'.$g1_04_02.' Malo</td>
                                <td class="col-20p">Obs. '.$g1_04_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_05').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_05_01.' Bueno</td>
                                <td class="col-15p">'.$g1_05_02.' Malo</td>
                                <td class="col-20p">Obs. '.$g1_05_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_06').'</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">'.$g1_06_01.' Bueno</td>
                                <td class="col-15p">'.$g1_06_02.' Malo</td>
                                <td class="col-20p">Obs. '.$g1_06_03.'</td>
                            </tr><tr>
                                <td class="col-50p">'.constant('G1_07').'</td>
                                <td class="col-5p">'.$g1_07_01.' N/A</td>
                                <td class="col-10p">'.$g1_07_02.' Operativo</td>
                                <td class="col-15p">'.$g1_07_03.' No Operativo</td>
                                <td class="col-20p">Obs. '.$g1_07_04.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_08').'</td>
                                <td class="col-5p">'.$g1_08_01.' N/A</td>
                                <td class="col-10p">'.$g1_08_02.' Operativo</td>
                                <td class="col-15p">'.$g1_08_03.' No Operativo</td>
                                <td class="col-20p">Obs. '.$g1_08_04.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main> 
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G2TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_01').'</td>
                                <td class="col-15p">'.$g2_01_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-25p">Obs. '.$g2_01_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_02').'</td>
                                <td class="col-15p">'.$g2_02_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-25p">Obs. '.$g2_02_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_03').'</td>
                                <td class="col-15p">'.$g2_03_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-25p">Obs. '.$g2_03_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_04').'</td>
                                <td class="col-15p">'.$g2_04_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-25p">Obs. '.$g2_04_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_05').'</td>
                                <td class="col-10p">'.$g2_05_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-30p">Obs. '.$g2_05_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_06').'</td>
                                <td class="col-10p">'.$g2_06_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-30p">Obs. '.$g2_06_02.'</td>
                            </tr><tr>
                                <td class="col-50p">'.constant('G2_07').'</td>
                                <td class="col-10p">'.$g2_07_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-30p">Obs. '.$g2_07_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_08').'</td>
                                <td class="col-10p">'.$g2_08_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-30p">Obs. '.$g2_08_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_09').'</td>
                                <td class="col-10p">'.$g2_09_01.' Realizado</td>
                                <td class="col-10p"></td>
                                <td class="col-30p">Obs. '.$g2_09_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_10').'</td>
                                <td class="col-10p">'.$g2_10_01.' No es necesario</td>
                                <td class="col-10p">'.$g2_10_02.' Realizado</td>
                                <td class="col-30p">Obs. '.$g2_10_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_11').'</td>
                                <td class="col-10p">'.$g2_11_01.' No es necesario</td>
                                <td class="col-10p">'.$g2_11_02.' Realizado</td>
                                <td class="col-30p">Obs. '.$g2_11_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_12').'</td>
                                <td class="col-10p">'.$g2_12_01.' No es necesario</td>
                                <td class="col-10p">'.$g2_12_02.' Realizado</td>
                                <td class="col-30p">Obs. '.$g2_12_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_13').'</td>
                                <td class="col-10p">'.$g2_13_01.' No es necesario</td>
                                <td class="col-10p">'.$g2_13_02.' Realizado</td>
                                <td class="col-30p">Obs. '.$g2_13_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main> 
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('G3TITLE').'</strong></div>
                    </div>
                </main>
               
                <main>
                    <table border="1">
                        <tbody>
                           
                            <tr>
                                <td class="col-5p">'.constant('G3_02').' </td>
                                <td class="col-10p num"> '.  $g3_02_01 . '</td>
                                <td class="col-5p"> I </td>
                                <td class="col-5p">'.constant('G3_02_01').' </td>
                                <td class="col-10p num"> '.  $g3_02_02 . '</td>
                                <td class="col-5p"> V </td>
                             </tr>
                              <tr>
                                <td class="col-5p">'.constant('G3_03').' </td>
                                <td class="col-10p num"> '.  $g3_03_01 . '</td>
                                <td class="col-5p"> I </td>
                                <td class="col-5p">'.constant('G3_03_01').' </td>
                                <td class="col-10p num"> '.  $g3_03_02 . '</td>
                                <td class="col-5p"> I </td>
                             </tr>
                              <tr>
                                <td class="col-5p">'.constant('G3_04').' </td>
                                <td class="col-10p num"> '.  $g3_04_01 . '</td>
                                <td class="col-5p"> V </td>
                                <td class="col-5p">'.constant('G3_04_01').' </td>
                                <td class="col-10p num"> '.  $g3_04_02 . '</td>
                                <td class="col-5p"> Ah. </td>
                             </tr>
                        </tbody>
                    </table>
                </main>
                <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td class="col-50p ">'.constant('G3_05').'</td>
                                <td class="col-50p">'.  $g3_05_01 . '</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                 <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="5"><strong>'.constant('G4TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p"></td>
                                <td class="col-15p"><strong>Local</strong></td>
                                <td class="col-15p"></td>
                                <td class="col-15p"><strong>Remoto</strong></td>
                                <td class="col-15p"></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_01').'</td>
                                <td class="col-15p">'.$g4_01_01.' SI</td>
                                <td class="col-15p">'.$g4_01_02.' NO</td>
                                <td class="col-15p">'.$g4_01_03.' SI</td>
                                <td class="col-15p">'.$g4_01_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_02').'</td>
                                <td class="col-15p">'.$g4_02_01.' SI</td>
                                <td class="col-15p">'.$g4_02_02.' NO</td>
                                <td class="col-15p">'.$g4_02_03.' SI</td>
                                <td class="col-15p">'.$g4_02_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_03').'</td>
                                <td class="col-15p">'.$g4_03_01.' SI</td>
                                <td class="col-15p">'.$g4_03_02.' NO</td>
                                <td class="col-15p">'.$g4_03_03.' SI</td>
                                <td class="col-15p">'.$g4_03_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_04').'</td>
                                <td class="col-15p">'.$g4_04_01.' SI</td>
                                <td class="col-15p">'.$g4_04_02.' NO</td>
                                <td class="col-15p">'.$g4_04_03.' SI</td>
                                <td class="col-15p">'.$g4_04_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_05').'</td>
                                <td class="col-15p">'.$g4_05_01.' SI</td>
                                <td class="col-15p">'.$g4_05_02.' NO</td>
                                <td class="col-15p">'.$g4_05_03.' SI</td>
                                <td class="col-15p">'.$g4_05_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_06').'</td>
                                <td class="col-15p">'.$g4_06_01.' SI</td>
                                <td class="col-15p">'.$g4_06_02.' NO</td>
                                <td class="col-15p">'.$g4_06_03.' SI</td>
                                <td class="col-15p">'.$g4_06_04.' NO</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                 '. $footerPlantilla .'  
                </div>
            </div>
        </div>
	</div>
    
</body>

';

    return $plantilla;
}

?>

