<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idrutinax, $titulosArr){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, false, $titulosArr);
    $footerPlantilla = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '011');
    $footerPlantilla .= $reporteFotog;

    //---------------------------

    /** g_desarrollo **/

    $f_verificacion = $obj->{'f_verificacion'};

    $f1_01_01 = $f_verificacion->f1_01_01 ? $check : $uncheck; $f1_01_02 = $f_verificacion->f1_01_02 ? $check : $uncheck; $f1_01_03 = $f_verificacion->f1_01_03;
    $f1_02_01 = $f_verificacion->f1_02_01 ? $check : $uncheck; $f1_02_02 = $f_verificacion->f1_02_02 ? $check : $uncheck; $f1_02_03 = $f_verificacion->f1_02_03;
    $f1_03_01 = $f_verificacion->f1_03_01 ? $check : $uncheck; $f1_03_02 = $f_verificacion->f1_03_02 ? $check : $uncheck; $f1_03_03 = $f_verificacion->f1_03_03;
    $f1_04_01 = $f_verificacion->f1_04_01 ? $check : $uncheck; $f1_04_02 = $f_verificacion->f1_04_02 ? $check : $uncheck; $f1_04_03 = $f_verificacion->f1_04_03;
    $f1_05_01 = $f_verificacion->f1_05_01 ? $check : $uncheck; $f1_05_02 = $f_verificacion->f1_05_02 ? $check : $uncheck; $f1_05_03 = $f_verificacion->f1_05_03;
    $f1_06_01 = $f_verificacion->f1_06_01 ? $check : $uncheck; $f1_06_02 = $f_verificacion->f1_06_02 ? $check : $uncheck; $f1_06_03 = $f_verificacion->f1_06_03;
    $f1_07_01 = $f_verificacion->f1_07_01 ? $check : $uncheck; $f1_07_02 = $f_verificacion->f1_07_02 ? $check : $uncheck; $f1_07_03 = $f_verificacion->f1_07_03;
    $f1_08_01 = $f_verificacion->f1_08_01 ? $check : $uncheck; $f1_08_02 = $f_verificacion->f1_08_02 ? $check : $uncheck; $f1_08_03 = $f_verificacion->f1_08_03;
    $f1_09_01 = $f_verificacion->f1_09_01 ? $check : $uncheck; $f1_09_02 = $f_verificacion->f1_09_02 ? $check : $uncheck; $f1_09_03 = $f_verificacion->f1_09_03;
    $f1_10_01 = $f_verificacion->f1_10_01 ? $check : $uncheck; $f1_10_02 = $f_verificacion->f1_10_02 ? $check : $uncheck; $f1_10_03 = $f_verificacion->f1_10_03;
    $f1_11_01 = $f_verificacion->f1_11_01 ? $check : $uncheck; $f1_11_02 = $f_verificacion->f1_11_02 ? $check : $uncheck; $f1_11_03 = $f_verificacion->f1_11_03;
    $f1_12_01 = $f_verificacion->f1_12_01 ? $check : $uncheck; $f1_12_02 = $f_verificacion->f1_12_02 ? $check : $uncheck; $f1_12_03 = $f_verificacion->f1_12_03;
    $f1_13_01 = $f_verificacion->f1_13_01 ? $check : $uncheck; $f1_13_02 = $f_verificacion->f1_13_02 ? $check : $uncheck; $f1_13_03 = $f_verificacion->f1_13_03;
    $f1_14_01 = $f_verificacion->f1_14_01 ? $check : $uncheck; $f1_14_02 = $f_verificacion->f1_14_02 ? $check : $uncheck; $f1_14_03 = $f_verificacion->f1_14_03;
    $f1_15_01 = $f_verificacion->f1_15_01 ? $check : $uncheck; $f1_15_02 = $f_verificacion->f1_15_02 ? $check : $uncheck; $f1_15_03 = $f_verificacion->f1_15_03;
    $f1_16_01 = $f_verificacion->f1_16_01 ? $check : $uncheck; $f1_16_02 = $f_verificacion->f1_16_02 ? $check : $uncheck; $f1_16_03 = $f_verificacion->f1_16_03;

    $g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};

    $g1_01_01_01 = $g_desarrollo_g1->g1_01_01_01; $g1_01_01_02 = $g_desarrollo_g1->g1_01_01_02; $g1_01_01_03 = $g_desarrollo_g1->g1_01_01_03; $g1_01_01_04 = $g_desarrollo_g1->g1_01_01_04;
    $g1_01_02_01 = $g_desarrollo_g1->g1_01_02_01; $g1_01_02_02 = $g_desarrollo_g1->g1_01_02_02; $g1_01_02_03 = $g_desarrollo_g1->g1_01_02_03; $g1_01_02_04 = $g_desarrollo_g1->g1_01_02_04;
    $g1_02_01_01 = $g_desarrollo_g1->g1_02_01_01; $g1_02_01_02 = $g_desarrollo_g1->g1_02_01_02; $g1_02_01_03 = $g_desarrollo_g1->g1_02_01_03; $g1_02_01_04 = $g_desarrollo_g1->g1_02_01_04;
    $g1_02_02_01 = $g_desarrollo_g1->g1_02_02_01; $g1_02_02_02 = $g_desarrollo_g1->g1_02_02_02; $g1_02_02_03 = $g_desarrollo_g1->g1_02_02_03; $g1_02_02_04 = $g_desarrollo_g1->g1_02_02_04;
    $g1_02_03_01 = $g_desarrollo_g1->g1_02_03_01; $g1_02_03_02 = $g_desarrollo_g1->g1_02_03_02; $g1_02_03_03 = $g_desarrollo_g1->g1_02_03_03; $g1_02_03_04 = $g_desarrollo_g1->g1_02_03_04;
    $g1_03_01_01 = $g_desarrollo_g1->g1_03_02_01 ? $check : $uncheck; $g1_03_01_02 = $g_desarrollo_g1->g1_03_02_02 ? $check : $uncheck; $g1_03_01_03 = $g_desarrollo_g1->g1_03_01_03;
    $g1_03_02_01 = $g_desarrollo_g1->g1_03_02_01 ? $check : $uncheck; $g1_03_02_02 = $g_desarrollo_g1->g1_03_02_02 ? $check : $uncheck; $g1_03_02_03 = $g_desarrollo_g1->g1_03_02_03;
    $g1_03_03_01 = $g_desarrollo_g1->g1_03_03_01 ? $check : $uncheck; $g1_03_03_02 = $g_desarrollo_g1->g1_03_02_02 ? $check : $uncheck; $g1_03_03_03 = $g_desarrollo_g1->g1_03_03_03;
    $g1_03_04_01 = $g_desarrollo_g1->g1_03_04_01 ? $check : $uncheck; $g1_03_04_02 = $g_desarrollo_g1->g1_03_04_02;
    $g1_03_05_01 = $g_desarrollo_g1->g1_03_05_01 ? $check : $uncheck; $g1_03_05_02 = $g_desarrollo_g1->g1_03_05_02;
    $g1_03_06_01 = $g_desarrollo_g1->g1_03_06_01 ? $check : $uncheck; $g1_03_06_02 = $g_desarrollo_g1->g1_03_06_02 ? $check : $uncheck; $g1_03_06_03 = $g_desarrollo_g1->g1_03_06_03;
    $g1_04_01_01 = $g_desarrollo_g1->g1_04_01_01 ? $check : $uncheck; $g1_04_01_02 = $g_desarrollo_g1->g1_04_01_02 ? $check : $uncheck; $g1_04_01_03 = $g_desarrollo_g1->g1_04_01_03;
    $g1_04_02_01 = $g_desarrollo_g1->g1_04_02_01 ? $check : $uncheck; $g1_04_02_02 = $g_desarrollo_g1->g1_04_02_02 ? $check : $uncheck; $g1_04_02_03 = $g_desarrollo_g1->g1_04_02_03;
    $g1_04_03_01 = $g_desarrollo_g1->g1_04_03_01 ? $check : $uncheck; $g1_04_03_02 = $g_desarrollo_g1->g1_04_03_02;
    $g1_04_04_01 = $g_desarrollo_g1->g1_04_04_01 ? $check : $uncheck; $g1_04_04_02 = $g_desarrollo_g1->g1_04_04_02;
    $g1_04_05_01 = $g_desarrollo_g1->g1_04_05_01 ? $check : $uncheck; $g1_04_05_02 = $g_desarrollo_g1->g1_04_05_02 ? $check : $uncheck; $g1_04_05_03 = $g_desarrollo_g1->g1_04_05_03;
    $g1_04_06_01 = $g_desarrollo_g1->g1_04_06_01 ? $check : $uncheck; $g1_04_06_02 = $g_desarrollo_g1->g1_04_06_02;
    $g1_04_07_01 = $g_desarrollo_g1->g1_04_07_01 ? $check : $uncheck; $g1_04_07_02 = $g_desarrollo_g1->g1_04_07_02;
    $g1_04_08_01 = $g_desarrollo_g1->g1_04_08_01 ? $check : $uncheck; $g1_04_08_02 = $g_desarrollo_g1->g1_04_08_02;
    $g1_04_09_01 = $g_desarrollo_g1->g1_04_09_01 ? $check : $uncheck; $g1_04_09_02 = $g_desarrollo_g1->g1_04_09_02;
    $g1_04_10_01 = $g_desarrollo_g1->g1_04_10_01 ? $check : $uncheck; $g1_04_10_02 = $g_desarrollo_g1->g1_04_10_02;

    $g1_05_01_01 = $g_desarrollo_g1->g1_05_01_01 ? $check : $uncheck; $g1_05_01_02 = $g_desarrollo_g1->g1_05_01_02 ? $check : $uncheck; $g1_05_01_03 = $g_desarrollo_g1->g1_05_01_03;
    $g1_05_02_01 = $g_desarrollo_g1->g1_05_02_01 ? $check : $uncheck; $g1_05_02_02 = $g_desarrollo_g1->g1_05_02_02;
    $g1_05_03_01 = $g_desarrollo_g1->g1_05_03_01 ? $check : $uncheck; $g1_05_03_02 = $g_desarrollo_g1->g1_05_03_02;

    
    $g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};

    $g2_01_01 = $g_desarrollo_g2->g2_01_01 ? $check : $uncheck;  $g2_01_02 = $g_desarrollo_g2->g2_01_02 ? $check : $uncheck; $g2_01_03 = $g_desarrollo_g2->g2_01_03;
    $g2_02_01 = $g_desarrollo_g2->g2_02_01 ? $check : $uncheck;  $g2_02_02 = $g_desarrollo_g2->g2_02_02 ? $check : $uncheck; $g2_02_03 = $g_desarrollo_g2->g2_02_03;
    $g2_03_01 = $g_desarrollo_g2->g2_03_01 ? $check : $uncheck;  $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? $check : $uncheck; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
    $g2_04_01 = $g_desarrollo_g2->g2_04_01 ? $check : $uncheck;  $g2_04_02 = $g_desarrollo_g2->g2_04_02 ? $check : $uncheck; $g2_04_03 = $g_desarrollo_g2->g2_04_03;

    $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
    $g3_01_01_01 = $g_desarrollo_g3->g3_01_01_01; $g3_01_01_02 = $g_desarrollo_g3->g3_01_01_01; $g3_01_01_03 = $g_desarrollo_g3->g3_01_01_03;
    $g3_01_02_01 = $g_desarrollo_g3->g3_01_02_01; $g3_01_02_02 = $g_desarrollo_g3->g3_01_02_02; $g3_01_02_03 = $g_desarrollo_g3->g3_01_02_03;
    $g3_02_01_01 = $g_desarrollo_g3->g3_02_01_01 ? $check : $uncheck; $g3_02_01_02 = $g_desarrollo_g3->g3_02_01_02 ? $check : $uncheck; $g3_02_01_03 = $g_desarrollo_g3->g3_02_01_03;
    $g3_02_02_01 = $g_desarrollo_g3->g3_02_02_01 ? $check : $uncheck; $g3_02_02_02 = $g_desarrollo_g3->g3_02_02_02 ? $check : $uncheck; $g3_02_02_03 = $g_desarrollo_g3->g3_02_02_03;
    $g3_02_03_01 = $g_desarrollo_g3->g3_02_03_01 ? $check : $uncheck; $g3_02_03_02 = $g_desarrollo_g3->g3_02_03_02 ? $check : $uncheck; $g3_02_03_03 = $g_desarrollo_g3->g3_02_03_03;
    $g3_02_04_01 = $g_desarrollo_g3->g3_02_04_01 ? $check : $uncheck; $g3_02_04_02 = $g_desarrollo_g3->g3_02_04_02 ? $check : $uncheck; $g3_02_04_03 = $g_desarrollo_g3->g3_02_04_03;

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
                                <td class="col-60p">'.constant('F01').'</td>
                                <td class="col-10p">'.$f1_01_01.' Bueno</td>
                                <td class="col-10p">'.$f1_01_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F02').'</td>
                                <td class="col-10p">'.$f1_02_01.' Bueno</td>
                                <td class="col-10p">'.$f1_02_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F03').'</td>
                                <td class="col-10p">'.$f1_03_01.' Si</td>
                                <td class="col-10p">'.$f1_03_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F04').'</td>
                                <td class="col-10p">'.$f1_04_01.' Si</td>
                                <td class="col-10p">'.$f1_04_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_04_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F05').'</td>
                                <td class="col-10p">'.$f1_05_01.' Si</td>
                                <td class="col-10p">'.$f1_05_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_05_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F06').'</td>
                                <td class="col-10p">'.$f1_06_01.' Si</td>
                                <td class="col-10p">'.$f1_06_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_06_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F07').'</td>
                                <td class="col-10p">'.$f1_07_01.' Bueno</td>
                                <td class="col-10p">'.$f1_07_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_07_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F08').'</td>
                                <td class="col-10p">'.$f1_08_01.' Bueno</td>
                                <td class="col-10p">'.$f1_08_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_08_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F09').'</td>
                                <td class="col-10p">'.$f1_09_01.' Bueno</td>
                                <td class="col-10p">'.$f1_09_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_09_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F10').'</td>
                                <td class="col-10p">'.$f1_10_01.' Bueno</td>
                                <td class="col-10p">'.$f1_10_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_10_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F11').'</td>
                                <td class="col-10p">'.$f1_11_01.' Bueno</td>
                                <td class="col-10p">'.$f1_11_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_11_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F12').'</td>
                                <td class="col-10p">'.$f1_12_01.' Bueno</td>
                                <td class="col-10p">'.$f1_12_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_12_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F13').'</td>
                                <td class="col-10p">'.$f1_13_01.' Si</td>
                                <td class="col-10p">'.$f1_13_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_13_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F14').'</td>
                                <td class="col-10p">'.$f1_14_01.' Bueno</td>
                                <td class="col-10p">'.$f1_14_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_14_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F15').'</td>
                                <td class="col-10p">'.$f1_15_01.' Bueno</td>
                                <td class="col-10p">'.$f1_15_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_15_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('F16').'</td>
                                <td class="col-10p">'.$f1_16_01.' Bueno</td>
                                <td class="col-10p">'.$f1_16_02.' Malo</td>
                                <td class="col-10p">Obs. '.$f1_16_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                
                    <div class="notices">
                        <div class="notice"><strong>'.constant('GTITLE').'</strong></div>
                    </div>
                	
                   <table class="tborder">
                         <tr>
                             <td class="col-100p"><strong>'.constant('G.1').'</strong></td>
                         </tr>
                         <tr>
                             <td class="col-100p"><strong>'.constant('G.1.1').'</strong></td>
                         </tr>
                        <tr>
                            <td>
                                <table class="tborder">
                                    <tr>
                                        <td><strong> </strong></td>
                                        <td><strong>Fase 1 - N</strong></td>
                                        <td><strong>Fase 2 - N</strong></td>
                                        <td><strong>Fase 3 - N</strong></td>
                                        <td><strong>Neutro - PE</strong></td>
                                    </tr>
                                    <tr>
                                        <td>'.constant('G.1.1.1').'</td>
                                        <td>'.$g1_01_01_01.'</td>
                                        <td>'.$g1_01_01_02.'</td>
                                        <td>'.$g1_01_01_03.'</td>
                                        <td>'.$g1_01_01_04.'</td>
                                    </tr>
                                    <tr>
                                        <td>'.constant('G.1.1.2').'</td>
                                        <td>'.$g1_01_02_01.'</td>
                                        <td>'.$g1_01_02_02.'</td>
                                        <td>'.$g1_01_02_03.'</td>
                                        <td>'.$g1_01_02_04.'</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </main>
                <main>
                    <table class="tborder">
                         <tr>
                             <td class="col-100p"><strong>'.constant('G.1.2').'</strong></td>
                         </tr>
                        <tr>
                            <td>
                                <table class="tborder">
                                    <tr>
                                        <td><strong> </strong></td>
                                        <td><strong>Fase 1 - N</strong></td>
                                        <td><strong>Fase 2 - N</strong></td>
                                        <td><strong>Fase 3 - N</strong></td>
                                        <td><strong>Neutro - PE</strong></td>
                                    </tr>
                                    <tr>
                                        <td>'.constant('G.1.2.1').'</td>
                                        <td>'.$g1_02_01_01.'</td>
                                        <td>'.$g1_02_01_02.'</td>
                                        <td>'.$g1_02_01_03.'</td>
                                        <td>'.$g1_02_01_04.'</td>
                                    </tr>
                                    <tr>
                                        <td>'.constant('G.1.2.2').'</td>
                                        <td>'.$g1_02_02_01.'</td>
                                        <td>'.$g1_02_02_02.'</td>
                                        <td>'.$g1_02_02_03.'</td>
                                        <td>'.$g1_02_02_04.'</td>
                                    </tr>
                                     <tr>
                                        <td>'.constant('G.1.2.3').'</td>
                                        <td>'.$g1_02_03_01.'</td>
                                        <td>'.$g1_02_03_02.'</td>
                                        <td>'.$g1_02_03_03.'</td>
                                        <td>'.$g1_02_03_04.'</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G.1.3').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.1').'</td>
                                <td class="col-15p">'.$g1_03_01_01.' Operativo</td>
                                <td class="col-15p">'.$g1_03_01_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g1_03_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.2').'</td>
                                <td class="col-15p">'.$g1_03_02_01.' Verificado</td>
                                <td class="col-15p">'.$g1_03_02_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g1_03_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.3').'</td>
                                <td class="col-15p">'.$g1_03_03_01.' Verificado</td>
                                <td class="col-15p">'.$g1_03_03_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g1_03_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.4').'</td>
                                <td class="col-15p">'.$g1_03_04_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_03_04_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.5').'</td>
                                <td class="col-15p">'.$g1_03_05_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_03_05_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.3.6').'</td>
                                <td class="col-15p">'.$g1_03_06_01.' Verificado</td>
                                <td class="col-15p">'.$g1_03_06_02.' Alta</td>
                                <td class="col-15p">Obs. '.$g1_03_06_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G.1.4').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.1').'</td>
                                <td class="col-15p">'.$g1_04_01_01.' Verificado</td>
                                <td class="col-15p">'.$g1_04_01_02.' Baja</td>
                                <td class="col-15p">Obs. '.$g1_04_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.2').'</td>
                                <td class="col-15p">'.$g1_04_02_01.' Buena</td>
                                <td class="col-15p">'.$g1_04_02_02.' Mala</td>
                                <td class="col-15p">Obs. '.$g1_04_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.3').'</td>
                                <td class="col-15p">'.$g1_04_03_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_03_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.4').'</td>
                                <td class="col-15p">'.$g1_04_04_01.' Realizado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_04_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.5').'</td>
                                <td class="col-15p">'.$g1_04_05_01.' Verificado</td>
                                <td class="col-15p">'.$g1_04_05_02.' Baja</td>
                                <td class="col-15p">Obs. '.$g1_04_05_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.6').'</td>
                                <td class="col-15p">'.$g1_04_06_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_06_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.7').'</td>
                                <td class="col-15p">'.$g1_04_07_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_07_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.8').'</td>
                                <td class="col-15p">'.$g1_04_08_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_08_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.9').'</td>
                                <td class="col-15p">'.$g1_04_09_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_09_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.4.10').'</td>
                                <td class="col-15p">'.$g1_04_10_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_04_10_02.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G.1.5').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.5.1').'</td>
                                <td class="col-15p">'.$g1_05_01_01.' Operativo</td>
                                <td class="col-15p">'.$g1_05_01_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g1_05_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.5.2').'</td>
                                <td class="col-15p">'.$g1_05_02_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_05_02_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G.1.5.3').'</td>
                                <td class="col-15p">'.$g1_05_03_01.' Verificado</td>
                                <td class="col-15p"></td>
                                <td class="col-15p">Obs. '.$g1_05_03_02.'</td>
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
                                <td class="col-15p">'.$g2_01_01.' Verificado</td>
                                <td class="col-15p">'.$g2_01_02.' Dañado</td>
                                <td class="col-15p">Obs. '.$g2_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_02').'</td>
                                <td class="col-15p">'.$g2_02_01.' Operativo</td>
                                <td class="col-15p">'.$g2_02_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g2_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_03').'</td>
                                <td class="col-15p">'.$g2_03_01.' Operativo</td>
                                <td class="col-15p">'.$g2_03_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g2_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G2_04').'</td>
                                <td class="col-15p">'.$g2_04_01.' Realizado</td>
                                <td class="col-15p">'.$g2_04_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g2_04_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                          <tr>
                             <td><strong>'.constant('G3TITLE').'</strong></td>
                         </tr>
                         
                    </table>
                   <table class="tborder">
                         <tr>
                             <td colspan="6"><strong>'.constant('G3_01').'</strong></td>
                         </tr>
                         <tr>
                             <td colspan="6"><strong>'.constant('G3_02').'</strong></td>
                         </tr>
                         <tr>
                                <td class="col-15p">T. Arranque</td>
                                <td class="col-20p">'.$g3_01_01_01.' </td>
                                <td class="col-15p">T. Transferen.</td>
                                <td class="col-20p">'.$g3_01_01_02.' </td>
                                <td class="col-10p">Obs. </td>
                                <td class="col-20p">'.$g3_01_01_03.'</td>
                         </tr>
                         <tr>
                                <td class="col-15p">T. Transferen.</td>
                                <td class="col-20p">'.$g3_01_02_01.' </td>
                                <td class="col-15p">T. Parada</td>
                                <td class="col-20p">'.$g3_01_02_02.' </td>
                                <td class="col-10p">Obs. </td>
                                <td class="col-20p">'.$g3_01_02_03.'</td>
                         </tr>
                    </table>
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G3_04').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G3_05').'</td>
                                <td class="col-15p">'.$g3_02_01_01.' Operativo</td>
                                <td class="col-15p">'.$g3_02_01_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g3_02_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G3_06').'</td>
                                <td class="col-15p">'.$g3_02_02_01.' Verificado</td>
                                <td class="col-15p">'.$g3_02_02_02.' Dañado</td>
                                <td class="col-15p">Obs. '.$g3_02_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G3_07').'</td>
                                <td class="col-15p">'.$g3_02_03_01.' Operativo</td>
                                <td class="col-15p">'.$g3_02_03_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g3_02_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('G3_08').'</td>
                                <td class="col-15p">'.$g3_02_04_01.' Operativo</td>
                                <td class="col-15p">'.$g3_02_04_02.' Falla</td>
                                <td class="col-15p">Obs. '.$g3_02_04_03.'</td>
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