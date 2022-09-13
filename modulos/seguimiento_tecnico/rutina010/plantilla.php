<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE ALIMENTACION ININTERRUMPIDA';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, false);
    $footerPlantilla = getFooter($jsonData);
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
    $g1_07_01 = $g_desarrollo->g1_07_01 ? $check : $uncheck; $g1_07_02 = $g_desarrollo->g1_07_02;
    $g1_08_01 = $g_desarrollo->g1_08_01 ? $check : $uncheck; $g1_08_02 = $g_desarrollo->g1_08_02;
    $g1_09_01 = $g_desarrollo->g1_09_01 ? $check : $uncheck; $g1_09_02 = $g_desarrollo->g1_09_02 ? $check : $uncheck; $g1_09_03 = $g_desarrollo->g1_09_03;
    $g1_10_01 = $g_desarrollo->g1_10_01 ? $check : $uncheck; $g1_10_02 = $g_desarrollo->g1_10_02;
    $g1_11_01 = $g_desarrollo->g1_11_01 ? $check : $uncheck; $g1_11_02 = $g_desarrollo->g1_11_02 ? $check : $uncheck; $g1_11_03 = $g_desarrollo->g1_11_03;
    $g1_12_01 = $g_desarrollo->g1_12_01 ? $check : $uncheck; $g1_12_02 = $g_desarrollo->g1_12_02 ? $check : $uncheck; $g1_12_03 = $g_desarrollo->g1_12_03;
    $g1_13_01 = $g_desarrollo->g1_13_01;                  $g1_13_02 = $g_desarrollo->g1_13_02;                  $g1_13_03 = $g_desarrollo->g1_13_03;
    $g1_14_01 = $g_desarrollo->g1_14_01;                  $g1_14_02 = $g_desarrollo->g1_14_02;                  $g1_14_03 = $g_desarrollo->g1_14_03;
    $g1_15_01 = $g_desarrollo->g1_15_01;
    $g1_16_01 = $g_desarrollo->g1_16_01;                  $g1_16_02 = $g_desarrollo->g1_16_02;
    $g1_17_01 = $g_desarrollo->g1_17_01;                  $g1_17_02 = $g_desarrollo->g1_17_02;
    $g1_18_01 = $g_desarrollo->g1_18_01 ? $check : $uncheck; $g1_18_02 = $g_desarrollo->g1_18_02 ? $check : $uncheck;
    $g1_19_01 = $g_desarrollo->g1_19_01 ? $check : $uncheck; $g1_19_02 = $g_desarrollo->g1_19_02 ? $check : $uncheck;
    $g1_20_01 = $g_desarrollo->g1_20_01;
    $g1_21_01 = $g_desarrollo->g1_21_01 ? $check : $uncheck; $g1_21_02 = $g_desarrollo->g1_21_02 ? $check : $uncheck; $g1_21_03 = $g_desarrollo->g1_21_03 ? $check : $uncheck; $g1_21_04 = $g_desarrollo->g1_21_04 ? $check : $uncheck;
    $g1_22_01 = $g_desarrollo->g1_22_01 ? $check : $uncheck; $g1_22_02 = $g_desarrollo->g1_22_02 ? $check : $uncheck; $g1_22_03 = $g_desarrollo->g1_22_03 ? $check : $uncheck; $g1_22_04 = $g_desarrollo->g1_22_04 ? $check : $uncheck;
    $g1_23_01 = $g_desarrollo->g1_23_01 ? $check : $uncheck; $g1_23_02 = $g_desarrollo->g1_23_02 ? $check : $uncheck; $g1_23_03 = $g_desarrollo->g1_23_03 ? $check : $uncheck; $g1_23_04 = $g_desarrollo->g1_23_04 ? $check : $uncheck;


    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '. $cabecera .'
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
                                <td class="col-10p">Obs.'.$f1_01_03.'</td>
                               </tr>
                             </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G1').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_01').'</td>
                                <td class="col-15p">'.$g1_01_01.' Bueno</td>
                                <td class="col-15p">'.$g1_01_02.' Deteriorado</td>
                                <td class="col-15p">Obs. '.$g1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_02').'</td>
                                <td class="col-15p">'.$g1_02_01.' Bueno</td>
                                <td class="col-15p">'.$g1_02_02.' Deteriorado</td>
                                <td class="col-15p">Obs. '.$g1_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_03').'</td>
                                <td class="col-15p">'.$g1_03_01.' Bueno</td>
                                <td class="col-15p">'.$g1_03_02.' Malo</td>
                                <td class="col-15p">Obs. '.$g1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_04').'</td>
                                <td class="col-15p">'.$g1_04_01.' Bueno</td>
                                <td class="col-15p">'.$g1_04_02.' Malo</td>
                                <td class="col-15p">Obs. '.$g1_04_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G1_05').'</td>
                                <td class="col-15p">'.$g1_05_01.' Bueno</td>
                                <td class="col-15p">'.$g1_05_02.' En falla</td>
                                <td class="col-15p">Obs. '.$g1_05_03.'</td>
                            </tr>
                           
                            <tr>
                                <td class="col-50p">'.constant('G1_06').'</td>
                                <td class="col-15p">'.$g1_06_01.' Bueno</td>
                                <td class="col-15p">'.$g1_06_02.' Malo</td>
                                <td class="col-15p">Obs. '.$g1_06_03.'</td>
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
                                <td class="col-65p">'.constant('G2_01').'</td>
                                <td class="col-15p">'.$g1_07_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-20p">Obs. '.$g1_07_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_02').'</td>
                                <td class="col-15p">'.$g1_08_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-20p">Obs. '.$g1_08_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_03').'</td>
                                <td class="col-15p">'.$g1_09_01.'No es necesario</td>
                                <td class="col-15p">'.$g1_09_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_09_03.' </td>
                                 </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_04').'</td>
                                <td class="col-15p">'.$g1_10_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-20p">Obs. '.$g1_10_02.'</td>
                            </tr>
                             <tr>
                                <td class="col-65p">'.constant('G2_05').'</td>
                                <td class="col-15p">'.$g1_11_01.' No es necesario</td>
                                <td class="col-15p">'.$g1_11_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_11_03.' </td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G2_06').'</td>
                                <td class="col-15p">'.$g1_12_01.' No es necesario</td>
                                <td class="col-15p">'.$g1_12_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g1_12_03.' </td>
                             </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="7"><strong>'.constant('G3TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-25p">'.constant('G3_01').'</td>
                                <td class="col-5p"> L1-N</td>
                                <td class="col-20p num">'.  $g1_13_01 . '</td>
                                <td class="col-5p"> L2-N</td>
                                <td class="col-25p num">'.  $g1_13_02 . '</td>
                                <td class="col-5p"> L3-N </td>
                                 <td class="col-25p num">'.  $g1_13_03 . '</td>
                            </tr>
                        </tbody>        
                    </table>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td class="col-25p">'.constant('G3_02').'</td>
                                <td class="col-20p num">'.  $g1_14_01 . '</td>
                                <td class="col-5p"> L1</td>
                                <td class="col-20p num">'.  $g1_14_02 . '</td>
                                <td class="col-5p"> L2</td>
                                <td class="col-25p num">'.  $g1_14_03 . '</td>
                                <td class="col-5p"> L3 </td>
                                
                            </tr>
                        </tbody>        
                    </table>
                    <table border="1">
                        <tbody>
                            
                            <tr>
                                <td class="col-40p">'.constant('G3_03').'</td>
                                <td class="col-20p num">'.  $g1_15_01 . '</td>
                                <td class="col-10p"> Hz </td>
                                </tr>
                        </tbody>        
                    </table>
                </main>
                <main>
                    <table border="1">
                        <tbody>
                            
                             <tr>
                                <td class="col-25p">'.constant('G3_04').'</td>
                                <td class="col-20p num">'.  $g1_16_01 . '</td>
                                <td class="col-5p"> V </td>
                                <td class="col-20p ">'.constant('G3_04_01').'</td>
                                <td class="col-5p num">'.  $g1_16_02 . '</td>
                                <td class="col-5p"> A </td>
                            </tr>
                            <tr>
                                <td class="col-25p">'.constant('G3_05').'</td>
                                <td class="col-20p num">'.  $g1_17_01 . '</td>
                                <td class="col-5p"> A </td>
                                <td class="col-20p ">'.constant('G3_05_01').'</td>
                                <td class="col-5p num">'.  $g1_17_02 . '</td>
                                <td class="col-5p"> A </td>
                                
                            </tr>
                        </tbody>        
                    </table>
                    <table border="1">
                        <tbody>
                             <tr>
                                <td class="col-50p">'.constant('G3_06').'</td>
                                <td class="col-15p">'.$g1_18_01.' Equilibrado</td>
                                <td class="col-15p">'.$g1_18_02.' Desequilibrado</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('G3_07').'</td>
                                <td class="col-15p">'.$g1_19_01.' Normal</td>
                                <td class="col-15p">'.$g1_19_02.' Caliente</td>
                             </tr>
                        </tbody>        
                    </table>
                    <table border="1">
                        <tbody>
                             <tr>
                                <td class="col-50p">'.constant('G3_08').'</td>
                                <td class="col-15p num">'.$g1_20_01.'</td>
                                <td class="col-15p">%</td>
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
                                <td class="col-15p">'.$g1_21_01.' SI</td>
                                <td class="col-15p">'.$g1_21_02.' NO</td>
                                <td class="col-15p">'.$g1_21_03.' SI</td>
                                <td class="col-15p">'.$g1_21_04.' NO</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G4_02').'</td>
                                <td class="col-15p">'.$g1_22_01.' SI</td>
                                <td class="col-15p">'.$g1_22_02.' NO</td>
                                <td class="col-15p">'.$g1_22_03.' SI</td>
                                <td class="col-15p">'.$g1_22_04.' NO</td>
                            </tr>22                           <tr>
                                <td class="col-40p">'.constant('G4_03').'</td>
                                <td class="col-15p">'.$g1_23_01.' SI</td>
                                <td class="col-15p">'.$g1_23_02.' NO</td>
                                <td class="col-15p">'.$g1_23_03.' SI</td>
                                <td class="col-15p">'.$g1_23_04.' NO</td>
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

