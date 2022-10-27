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

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '012');
    $footerPlantilla .= $reporteFotog;

    /** g_desarrollo **/

    $g_desarrollo = $obj->{'g_desarrollo'};
    $f1_01_01 = $g_desarrollo->f1_01_01 ? $check : $uncheck; $f1_01_02 = $g_desarrollo->f1_01_02 ? $check : $uncheck; $f1_01_03 = $g_desarrollo->f1_01_03;
    $f1_02_01 = $g_desarrollo->f1_02_01 ? $check : $uncheck; $f1_02_02 = $g_desarrollo->f1_02_02 ? $check : $uncheck; $f1_02_03 = $g_desarrollo->f1_02_03;
    $f1_03_01 = $g_desarrollo->f1_03_01 ? $check : $uncheck; $f1_03_02 = $g_desarrollo->f1_03_02 ? $check : $uncheck; $f1_03_03 = $g_desarrollo->f1_03_03;

    $g1_01_01 = $g_desarrollo->g1_01_01 ? $check : $uncheck; $g1_01_02 = $g_desarrollo->g1_01_02 ? $check : $uncheck; $g1_01_03 = $g_desarrollo->g1_01_03;

    $g2_01_01 = $g_desarrollo->g2_01_01 ? $check : $uncheck; $g2_01_02 = $g_desarrollo->g2_01_02 ? $check : $uncheck; $g2_01_03 = $g_desarrollo->g2_01_03;
    $g2_02_01 = $g_desarrollo->g2_02_01 ? $check : $uncheck; $g2_02_02 = $g_desarrollo->g2_02_02 ? $check : $uncheck; $g2_02_03 = $g_desarrollo->g2_02_03;
    $g2_03_01 = $g_desarrollo->g2_03_01 ? $check : $uncheck; $g2_03_02 = $g_desarrollo->g2_03_02 ? $check : $uncheck; $g2_03_03 = $g_desarrollo->g2_03_03;
    $g2_04_01 = $g_desarrollo->g2_04_01 ? $check : $uncheck; $g2_04_02 = $g_desarrollo->g2_04_02 ? $check : $uncheck; $g2_04_03 = $g_desarrollo->g2_04_03;
    $g2_05_01 = $g_desarrollo->g2_05_01 ? $check : $uncheck; $g2_05_02 = $g_desarrollo->g2_05_02 ? $check : $uncheck; $g2_05_03 = $g_desarrollo->g2_05_03;
    $g2_06_01 = $g_desarrollo->g2_06_01 ? $check : $uncheck; $g2_06_02 = $g_desarrollo->g2_06_02 ? $check : $uncheck; $g2_06_03 = $g_desarrollo->g2_06_03;

    $g3_01_01 = $g_desarrollo->g3_01_01 ? $check : $uncheck; $g3_01_02 = $g_desarrollo->g3_01_02 ? $check : $uncheck; $g3_01_03 = $g_desarrollo->g3_01_03;
    $g3_02_01 = $g_desarrollo->g3_02_01 ? $check : $uncheck; $g3_02_02 = $g_desarrollo->g3_02_02 ? $check : $uncheck; $g3_02_03 = $g_desarrollo->g3_02_03;
    $g3_03_01 = $g_desarrollo->g3_03_01 ? $check : $uncheck; $g3_03_02 = $g_desarrollo->g3_03_02 ? $check : $uncheck; $g3_03_03 = $g_desarrollo->g3_03_03;
    $g3_04_01 = $g_desarrollo->g3_04_01 ? $check : $uncheck; $g3_04_02 = $g_desarrollo->g3_04_02 ? $check : $uncheck; $g3_04_03 = $g_desarrollo->g3_04_03;

    $g4_01_01 = $g_desarrollo->g4_01_01 ? $check : $uncheck; $g4_01_02 = $g_desarrollo->g4_01_02 ? $check : $uncheck; $g4_01_03 = $g_desarrollo->g4_01_03;
    $g4_02_01 = $g_desarrollo->g4_02_01 ? $check : $uncheck; $g4_02_02 = $g_desarrollo->g4_02_02 ? $check : $uncheck; $g4_02_03 = $g_desarrollo->g4_02_03;
    $g4_03_01 = $g_desarrollo->g4_03_01 ? $check : $uncheck; $g4_03_02 = $g_desarrollo->g4_03_02 ? $check : $uncheck; $g4_03_03 = $g_desarrollo->g4_03_03;
    $g4_04_01 = $g_desarrollo->g4_04_01 ? $check : $uncheck; $g4_04_02 = $g_desarrollo->g4_04_02 ? $check : $uncheck; $g4_04_03 = $g_desarrollo->g4_04_03;
    $g4_05_01 = $g_desarrollo->g4_05_01 ? $check : $uncheck; $g4_05_02 = $g_desarrollo->g4_05_02 ? $check : $uncheck; $g4_05_03 = $g_desarrollo->g4_05_03;
    $g4_06_01 = $g_desarrollo->g4_06_01 ? $check : $uncheck; $g4_06_02 = $g_desarrollo->g4_06_02 ? $check : $uncheck; $g4_06_03 = $g_desarrollo->g4_06_03;
    $g4_07_01 = $g_desarrollo->g4_07_01 ? $check : $uncheck; $g4_07_02 = $g_desarrollo->g4_07_02 ? $check : $uncheck; $g4_07_03 = $g_desarrollo->g4_07_03;
    $g4_08_01 = $g_desarrollo->g4_08_01 ? $check : $uncheck; $g4_08_02 = $g_desarrollo->g4_08_02 ? $check : $uncheck; $g4_08_03 = $g_desarrollo->g4_08_03;
    $g4_09_01 = $g_desarrollo->g4_09_01 ? $check : $uncheck; $g4_09_02 = $g_desarrollo->g4_09_02 ? $check : $uncheck; $g4_09_03 = $g_desarrollo->g4_09_03;
    $g4_10_01 = $g_desarrollo->g4_10_01 ? $check : $uncheck; $g4_10_02 = $g_desarrollo->g4_10_02 ? $check : $uncheck; $g4_10_03 = $g_desarrollo->g4_10_03;
    $g4_11_01 = $g_desarrollo->g4_11_01 ? $check : $uncheck; $g4_11_02 = $g_desarrollo->g4_11_02 ? $check : $uncheck; $g4_11_03 = $g_desarrollo->g4_11_03;
    $g4_12_01 = $g_desarrollo->g4_12_01 ? $check : $uncheck; $g4_12_02 = $g_desarrollo->g4_12_02 ? $check : $uncheck; $g4_12_03 = $g_desarrollo->g4_12_03;
    $g4_13_01 = $g_desarrollo->g4_13_01 ? $check : $uncheck; $g4_13_02 = $g_desarrollo->g4_13_02 ? $check : $uncheck; $g4_13_03 = $g_desarrollo->g4_13_03;
    $g4_14_01 = $g_desarrollo->g4_14_01 ? $check : $uncheck; $g4_14_02 = $g_desarrollo->g4_14_02 ? $check : $uncheck; $g4_14_03 = $g_desarrollo->g4_14_03;
    $g4_15_01 = $g_desarrollo->g4_15_01 ? $check : $uncheck; $g4_15_02 = $g_desarrollo->g4_15_02 ? $check : $uncheck; $g4_15_03 = $g_desarrollo->g4_15_03;
    $g4_16_01 = $g_desarrollo->g4_16_01 ? $check : $uncheck; $g4_16_02 = $g_desarrollo->g4_16_02 ? $check : $uncheck; $g4_16_03 = $g_desarrollo->g4_16_03;
    $g4_17_01 = $g_desarrollo->g4_17_01 ? $check : $uncheck; $g4_17_02 = $g_desarrollo->g4_17_02 ? $check : $uncheck; $g4_17_03 = $g_desarrollo->g4_17_03;

    $g5_01_01 = $g_desarrollo->g5_01_01;
    $g5_02_01 = $g_desarrollo->g5_02_01;
    $g5_03_01 = $g_desarrollo->g5_03_01;
    $g5_04_01 = $g_desarrollo->g5_04_01;
    $g5_05_01 = $g_desarrollo->g5_05_01; $g5_05_02 = $g_desarrollo->g5_05_02;
    $g5_06_01 = $g_desarrollo->g5_06_01; $g5_06_02 = $g_desarrollo->g5_06_02;
    $g5_07_01 = $g_desarrollo->g5_07_01; $g5_07_02 = $g_desarrollo->g5_07_02;
    $g5_08_01 = $g_desarrollo->g5_08_01; $g5_08_02 = $g_desarrollo->g5_08_02;

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
                                <td class="col-10p">Obs. '.$f1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F01').'</td>
                                <td class="col-10p">'.$f1_02_01.' Si</td>
                                <td class="col-10p">'.$f1_02_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F01').'</td>
                                <td class="col-10p">'.$f1_03_01.' Si</td>
                                <td class="col-10p">'.$f1_03_02.' No</td>
                                <td class="col-10p">Obs. '.$f1_03_03.'</td>
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
                                <td class="col-15p">'.$g1_01_01.' Funcional</td>
                                <td class="col-15p">'.$g1_01_02.' En falla</td>
                                <td class="col-15p">Obs. '.$g1_01_03.'</td>
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
                                <td class="col-15p">'.$g2_01_01.' Operativo</td>
                                <td class="col-20p">'.$g2_01_02.' No operativo</td>
                                <td class="col-20p">Obs. '.$g2_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_02').'</td>
                                <td class="col-15p">'.$g2_02_01.' Operativo</td>
                                <td class="col-20p">'.$g2_02_02.' No operativo</td>
                                <td class="col-20p">Obs. '.$g2_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_03').'</td>
                                <td class="col-15p">'.$g2_03_01.' Operativo</td>
                                <td class="col-20p">'.$g2_03_02.' No operativo</td>
                                <td class="col-20p">Obs. '.$g2_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G2_04').'</td>
                               <td class="col-15p">'.$g2_04_01.' Bueno</td>
                                <td class="col-20p">'.$g2_04_02.'Malo</td>
                                <td class="col-20p">Obs. '.$g2_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-65p">'.constant('G2_05').'</td>
                                <td class="col-15p">'.$g2_05_01.' Bueno</td>
                                <td class="col-20p">'.$g2_05_02.'Malo</td>
                                <td class="col-20p">Obs. '.$g2_05_03.'</td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G2_06').'</td>
                                <td class="col-15p">'.$g2_06_01.' Bueno</td>
                                <td class="col-20p">'.$g2_06_02.'Malo</td>
                                <td class="col-20p">Obs. '.$g2_06_03.'</td>
                             </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G3TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G3_01').'</td>
                                <td class="col-15p">'.$g3_01_01.' No es necesario</td>
                                <td class="col-20p">'.$g3_01_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g3_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G3_02').'</td>
                                <td class="col-15p">'.$g3_02_01.' No es necesario</td>
                                <td class="col-20p">'.$g3_02_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g3_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G3_03').'</td>
                                <td class="col-15p">'.$g3_03_01.' No es necesario</td>
                                <td class="col-20p">'.$g3_03_02.' Realizadoo</td>
                                <td class="col-20p">Obs. '.$g3_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G3_04').'</td>
                               <td class="col-15p">'.$g3_04_01.' No es necesario</td>
                                <td class="col-20p">'.$g3_04_02.'Realizado</td>
                                <td class="col-20p">Obs. '.$g3_04_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>'.constant('G4TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_01').'</td>
                                <td class="col-15p">'.$g4_01_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_01_02.' No operativo</td>
                                <td class="col-20p">Obs. '.$g4_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_02').'</td>
                                <td class="col-15p">'.$g4_02_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_02_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_03').'</td>
                                <td class="col-15p">'.$g4_03_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_03_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_04').'</td>
                               <td class="col-15p">'.$g4_04_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_04_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_05').'</td>
                                <td class="col-15p">'.$g4_05_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_05_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_05_03.'</td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_06').'</td>
                                <td class="col-15p">'.$g4_06_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_06_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_06_03.'</td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_07').'</td>
                                <td class="col-15p">'.$g4_07_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_07_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_07_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_08').'</td>
                                <td class="col-15p">'.$g4_08_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_08_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_08_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_09').'</td>
                                <td class="col-15p">'.$g4_09_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_09_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_09_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-65p">'.constant('G4_10').'</td>
                               <td class="col-15p">'.$g4_10_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_10_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_10_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_11').'</td>
                                <td class="col-15p">'.$g4_11_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_11_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_11_03.'</td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_12').'</td>
                                <td class="col-15p">'.$g4_12_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_12_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_12_03.'</td>
                             </tr>
                              <tr>
                                <td class="col-65p">'.constant('G4_13').'</td>
                                <td class="col-15p">'.$g4_13_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_13_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_13_03.'</td>
                             </tr>
                              <tr>
                                <td class="col-65p">'.constant('G4_14').'</td>
                                <td class="col-15p">'.$g4_14_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_14_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_14_03.'</td>
                             </tr>
                              <tr>
                                <td class="col-65p">'.constant('G4_15').'</td>
                                <td class="col-15p">'.$g4_15_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_15_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_15_03.'</td>
                             </tr>
                              <tr>
                                <td class="col-65p">'.constant('G4_16').'</td>
                                <td class="col-15p">'.$g4_16_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_16_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_16_03.'</td>
                             </tr>
                             <tr>
                                <td class="col-65p">'.constant('G4_17').'</td>
                                <td class="col-15p">'.$g4_17_01.' No es necesario</td>
                                <td class="col-20p">'.$g4_17_02.' Realizado</td>
                                <td class="col-20p">Obs. '.$g4_17_03.'</td>
                             </tr>
                              
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('G5TITLE').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-60p">'.constant('G5_01').'</td>
                                <td class="col-20p num">'.$g5_01_01.'</td>
                                <td class="col-10p">(V)</td>
                           </tr>
                           <tr>
                                <td class="col-60p">'.constant('G5_02').'</td>
                                <td class="col-20p num">'.$g5_02_01.'</td>
                                <td class="col-10p">(V)</td>
                           </tr>
                           <tr>
                                <td class="col-60p">'.constant('G5_03').'</td>
                                <td class="col-20p num">'.$g5_03_01.'</td>
                                <td class="col-10p">(V)</td>
                           </tr>
                           <tr>
                                <td class="col-60p">'.constant('G5_04').'</td>
                                <td class="col-20p num">'.$g5_04_01.'</td>
                                <td class="col-10p">(V)</td>
                           </tr>
                        </tbody>        
                    </table>									                        
                </main>
                 <main>
                    <table class="tborder">
                        <tbody>
                            
                            <tr>
                                <td class="col-40p">'.constant('G5_05').'</td>
                                <td class="col-5p num">'.$g5_05_01.'</td>
                                <td class="col-5p">(Ω)</td>
                                <td class="col-40p">Medida a tierra barra colectora caseta equipos</td>
                                <td class="col-5p num">'.$g5_05_02.'</td>
                                <td class="col-5p">(Ω)</td>
                           </tr>
                           <tr>
                                <td class="col-40p">'.constant('G5_06').'</td>
                                <td class="col-5p num">'.$g5_06_01.'</td>
                                <td class="col-5p">(Ω)</td>
                                <td class="col-40p">Medida a tierra camara de inspeccion.</td>
                                <td class="col-5p num">'.$g5_06_02.'</td>
                                <td class="col-5p">(Ω)</td>
                           </tr>
                           <tr>
                                <td class="col-40p">'.constant('G5_07').'</td>
                                <td class="col-5p num">'.$g5_07_01.'</td>
                                <td class="col-5p">(Ω)</td>
                                <td class="col-40p">Medida a tierra barra colectora tablero electrico</td>
                                 <td class="col50p num">'.$g5_07_02.'</td>
                                <td class="col-5p">(Ω)</td>
                           </tr>
                           <tr>
                                <td class="col-40p">'.constant('G5_08').'</td>
                                <td class="col-5p num">'.$g5_08_01.'</td>
                                <td class="col-5p">(Ω)</td>
                                <td class="col-40p">Medida a tierra barra colectora grupo electrogeno</td>
                                <td class="col-5p num">'.$g5_08_02.'</td>
                                <td class="col-5p">(Ω)</td>
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