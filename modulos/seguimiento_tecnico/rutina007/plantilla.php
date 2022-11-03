<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idrutinax, $titulosArr){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};
    $footerPlantilla    = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '007');
    $footerPlantilla .= $reporteFotog;

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

    /** g_desarrollo **/
      $g_desarrollo = $obj->{'g_desarrollo'};
    $f1_01_01 = $g_desarrollo->f1_01_01 ? $check : $uncheck; $f1_01_02 = $g_desarrollo->f1_01_02 ? $check : $uncheck; $f1_01_03 = $g_desarrollo->f1_01_03;
    $g1_01_01 = $g_desarrollo->g1_01_01 ? $check : $uncheck; $g1_01_02 = $g_desarrollo->g1_01_02 ? $check : $uncheck; $g1_01_03 = $g_desarrollo->g1_01_03;
    $g1_02_01 = $g_desarrollo->g1_02_01 ? $check : $uncheck; $g1_02_02 = $g_desarrollo->g1_02_02 ? $check : $uncheck; $g1_02_03 = $g_desarrollo->g1_02_03;
    $g1_03_01 = $g_desarrollo->g1_03_01 ? $check : $uncheck; $g1_03_02 = $g_desarrollo->g1_03_02 ? $check : $uncheck; $g1_03_03 = $g_desarrollo->g1_03_03;
    $g1_04_01 = $g_desarrollo->g1_04_01 ? $check : $uncheck; $g1_04_02 = $g_desarrollo->g1_04_02 ? $check : $uncheck; $g1_04_03 = $g_desarrollo->g1_04_03;
    $g1_05_01 = $g_desarrollo->g1_05_01 ? $check : $uncheck; $g1_05_02 = $g_desarrollo->g1_05_02 ? $check : $uncheck; $g1_05_03 = $g_desarrollo->g1_05_03;
    $g1_06_01 = $g_desarrollo->g1_06_01 ? $check : $uncheck; $g1_06_02 = $g_desarrollo->g1_06_02 ? $check : $uncheck; $g1_06_03 = $g_desarrollo->g1_06_03;
    $g1_07_01 = $g_desarrollo->g1_07_01 ? $check : $uncheck; $g1_07_02 = $g_desarrollo->g1_07_02 ? $check : $uncheck; $g1_07_03 = $g_desarrollo->g1_07_03;
    $g1_08_01 = $g_desarrollo->g1_08_01 ? $check : $uncheck; $g1_08_02 = $g_desarrollo->g1_08_02 ? $check : $uncheck; $g1_08_03 = $g_desarrollo->g1_08_03;
    $g1_09_01 = $g_desarrollo->g1_09_01 ? $check : $uncheck; $g1_09_02 = $g_desarrollo->g1_09_02 ? $check : $uncheck; $g1_09_03 = $g_desarrollo->g1_09_03;
    $g1_10_01 = $g_desarrollo->g1_10_01 ? $check : $uncheck; $g1_10_02 = $g_desarrollo->g1_10_02 ? $check : $uncheck; $g1_10_03 = $g_desarrollo->g1_10_03;
    $g1_11_01 = $g_desarrollo->g1_11_01 ? $check : $uncheck; $g1_11_02 = $g_desarrollo->g1_11_02 ? $check : $uncheck; $g1_11_03 = $g_desarrollo->g1_11_03;
    $g1_12_01 = $g_desarrollo->g1_12_01 ? $check : $uncheck; $g1_12_02 = $g_desarrollo->g1_12_02 ? $check : $uncheck; $g1_12_03 = $g_desarrollo->g1_12_03;
    $g1_13_01 = $g_desarrollo->g1_13_01 ? $check : $uncheck; $g1_13_02 = $g_desarrollo->g1_13_02 ? $check : $uncheck; $g1_13_03 = $g_desarrollo->g1_13_03;
    $g1_14_01 = $g_desarrollo->g1_14_01 ? $check : $uncheck; $g1_14_02 = $g_desarrollo->g1_14_02 ? $check : $uncheck; $g1_14_03 = $g_desarrollo->g1_14_03;
    $g1_15_01 = $g_desarrollo->g1_15_01 ? $check : $uncheck; $g1_15_02 = $g_desarrollo->g1_15_02 ? $check : $uncheck; $g1_15_03 = $g_desarrollo->g1_15_03;

    $g1_16_01 = $g_desarrollo->g1_16_01 ? $check : $uncheck; $g1_16_02 = $g_desarrollo->g1_16_02;
    $g1_17_01 = $g_desarrollo->g1_17_01 ? $check : $uncheck; $g1_17_02 = $g_desarrollo->g1_17_02;
    $g1_18_01 = $g_desarrollo->g1_18_01 ? $check : $uncheck; $g1_18_02 = $g_desarrollo->g1_18_02;
    $g1_19_01 = $g_desarrollo->g1_19_01 ? $check : $uncheck; $g1_19_02 = $g_desarrollo->g1_19_02;

    $g1_20_01 = $g_desarrollo->g1_20_01; $g1_20_02 = $g_desarrollo->g1_20_02; $g1_20_03 = $g_desarrollo->g1_20_03; $g1_20_04 = $g_desarrollo->g1_20_04; $g1_20_05 = $g_desarrollo->g1_20_05; $g1_20_06 = $g_desarrollo->g1_20_06;
    $g1_21_01 = $g_desarrollo->g1_21_01; $g1_21_02 = $g_desarrollo->g1_21_02; $g1_21_03 = $g_desarrollo->g1_21_03; $g1_21_04 = $g_desarrollo->g1_21_04; $g1_21_05 = $g_desarrollo->g1_21_05;

    $g_desarrollo3 = $obj->{'g_desarrollo3'};

    $g3_01_01 = $g_desarrollo3->g3_01_01; $g3_01_02 = $g_desarrollo3->g3_01_02;
    $g3_02_01 = $g_desarrollo3->g3_02_01; $g3_02_02 = $g_desarrollo3->g3_02_02;
    $g3_03_01 = $g_desarrollo3->g3_03_01; $g3_03_02 = $g_desarrollo3->g3_03_02;
    $g3_04_01 = $g_desarrollo3->g3_04_01; $g3_04_02 = $g_desarrollo3->g3_04_02;


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
                                <div><b>'.$titulosArr[1].'</b></div>
                                <div><b>'.$titulosArr[2].'</b></div>
                                <div><b>'.$titulosArr[3].'</b></div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center" colspan="2">
                            <h4>'. $titulosArr[0] .'</h4>
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
                                <td class="col-10p">'.$f1_01_01.' Si</td>
                                <td class="col-10p">'.$f1_01_02.' No</td>
                                <td class="col-15p">Obs. '.$F1_01_03.'</td>
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
                                <td colspan="4"><strong>'.constant('G1').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_01').'</td>
                                <td class="col-15p">'.$g1_01_01.' Operativo</td>
                                <td class="col-15p">'.$g1_01_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_02').'</td>
                                <td class="col-15p">'.$g1_02_01.' Operativo</td>
                                <td class="col-15p">'.$g1_02_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_03').'</td>
                                <td class="col-15p">'.$g1_03_01.' Operativo</td>
                                <td class="col-15p">'.$g1_03_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_04').'</td>
                                <td class="col-15p">'.$g1_04_01.' Operativo</td>
                                <td class="col-15p">'.$g1_04_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_04_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_05').'</td>
                                <td class="col-15p">'.$g1_05_01.' Operativo</td>
                                <td class="col-15p">'.$g1_05_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_05_03.'</td>
                            </tr>
                           
                            <tr>
                                <td class="col-50p">'.constant('G1_06').'</td>
                                <td class="col-15p">'.$g1_06_01.' Operativo</td>
                                <td class="col-15p">'.$g1_06_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_06_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_07').'</td>
                                <td class="col-15p">'.$g1_07_01.' Operativo</td>
                                <td class="col-15p">'.$g1_07_02.' No operativo</td>
                                <td class="col-15p">Obs. '.$g1_07_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_08').'</td>
                                <td class="col-15p">'.$g1_08_01.' Normal</td>
                                <td class="col-15p">'.$g1_08_02.' Bajo </td>
                                <td class="col-15p">Obs. '.$g1_08_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_09').'</td>
                                <td class="col-15p">'.$g1_09_01.' Bueno</td>
                                <td class="col-15p">'.$g1_09_02.' No cuenta</td>
                                <td class="col-15p">Obs. '.$g1_09_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_10').'</td>
                                <td class="col-15p">'.$g1_10_01.' Bueno</td>
                                <td class="col-15p">'.$g1_10_02.' Inclindo </td>
                                <td class="col-15p">Obs. '.$g1_10_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_11').'</td>
                                <td class="col-15p">'.$g1_11_01.' Bueno</td>
                                <td class="col-15p">'.$g1_11_02.' Deteriorado </td>
                                <td class="col-15p">Obs. '.$g1_11_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_12').'</td>
                                <td class="col-15p">'.$g1_12_01.' Bueno</td>
                                <td class="col-15p">'.$g1_12_02.' Corrección </td>
                                <td class="col-15p">Obs. '.$g1_12_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_13').'</td>
                                <td class="col-15p">'.$g1_13_01.' Bueno</td>
                                <td class="col-15p">'.$g1_13_02.' En falla </td>
                                <td class="col-15p">Obs. '.$g1_13_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_14').'</td>
                                <td class="col-15p">'.$g1_14_01.' Ninguno</td>
                                <td class="col-15p">'.$g1_14_02.' Existen </td>
                                <td class="col-15p">Obs. '.$g1_14_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_15').'</td>
                                <td class="col-15p">'.$g1_15_01.' Requiere</td>
                                <td class="col-15p">'.$g1_15_02.' No Requiere </td>
                                <td class="col-15p">Obs. '.$g1_15_03.'</td>
                            </tr>
                            
                        </tbody>        
                    </table>									                        
                </main> 
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('G2TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G2_01').'</td>
                                <td class="col-20p">'.$g1_16_01.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_16_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G2_02').'</td>
                                <td class="col-20p">'.$g1_17_01.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_17_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G2_03').'</td>
                                <td class="col-20p">'.$g1_18_01.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_18_02.' </td>
                                 </tr>
                            <tr>
                                <td class="col-60p">'.constant('G2_04').'</td>
                                <td class="col-20p">'.$g1_19_01.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_19_02.'</td>
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
                                <td colspan="12">'.constant('G3_01').'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"> L1-N </td>
                                <td class="col-10p"> '.  $g1_20_01 . '</td>
                                <td class="col-5p"> L2-N </td>
                                <td class="col-10p"> '.  $g1_20_02 . '</td>
                                <td class="col-5p"> L3-N </td>
                                <td class="col-10p"> '.  $g1_20_03 . '</td>
                                <td class="col-5p"> L1-L2 </td>
                                <td class="col-10p"> '.  $g1_20_04 . '</td>
                                <td class="col-5p"> L1-L3 </td>
                                <td class="col-10p"> '.  $g1_20_05 . '</td>
                                <td class="col-5p"> L2-L2 </td>
                                <td class="col-10p"> '.  $g1_20_06 . '</td>
                             </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table border="1">
                        <tbody>            
                            
                            <tr>
                                <td colspan="10">'.constant('G3_02').'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"> L1 </td>
                                <td class="col-15p"> '.  $g1_21_01 . '</td>
                                <td class="col-5p"> L2 </td>
                                <td class="col-15p"> '.  $g1_21_02 . '</td>
                                <td class="col-5p"> L3 </td>
                                <td class="col-15p"> '.  $g1_21_03 . '</td>
                                <td class="col-5p"> N </td>
                                <td class="col-15p"> '.  $g1_21_04 . '</td>
                                <td class="col-5p"> PE </td>
                                <td class="col-15p"> '.  $g1_21_05 . '</td>
                            </tr>
                            
                        </tbody>        
                    </table>
                </main>
                 <main>
                    <table class="tborder">
                        <tbody>
                           <tr>
                                <td class="col-60p">'.constant('G3_03').'</td>
                                <td class="col-10p num">'.$g3_01_01.'</td>
                                <td class="col-5p"> (Ω)</td>
                                <td class="col-30p">Obs. '.$g3_01_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G3_04').'</td>
                                <td class="col-10p num">'.$g3_02_01.'</td>
                                <td class="col-5p"> (Ω)</td>
                                <td class="col-30p">Obs. '.$g3_02_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G3_05').'</td>
                                <td class="col-10p num">'.$g3_03_01.' </td>
                                <td class="col-5p"> (Ω)</td>
                                <td class="col-30p">Obs. '.$g3_03_02.' </td>
                                 </tr>
                            <tr>
                                <td class="col-60p">'.constant('G3_06').'</td>
                                <td class="col-10p num">'.$g3_04_01.'</td>
                                <td class="col-5p"> (Ω)</td>
                                <td class="col-30p">Obs. '.$g3_04_02.'</td>
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