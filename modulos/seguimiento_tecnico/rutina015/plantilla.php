<?php
require("../../../funciones/DateUtils.php");

require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idrutinax, $titulosArr){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    //$cabecera        = getCabecera($conexion, $jsonData, $idgrupo, false, $titulosArr);
    $cabecera        = getCabecera2($conexion, $jsonData, $idgrupo, $idevento, $titulosArr);

    $tablasFibraArr  = getJsonData_fibra_r15($conexion, $idrutinax);

    $subPlantilla1   = getSubPlantilla1($jsonData);
    $subPlantilla2   = getSubPlantilla2($jsonData);
    $subPlantilla3   = getSubPlantilla3($jsonData);


    $subPlantillaFibraAnt = '
        <br />
        <main>
            <div class="notices">
                <div class="notice"><strong>'.constant('ETITLE').'</strong></div>
            </div>
        </main>	';

    $subPlantillaFibraAnt .= getSubPlantillaFibraAnt($jsonData);

    $subPlantillaFibra    = getSubPlantillaFibra($tablasFibraArr);

    $footerPlantilla = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '015');
    $footerPlantilla .= $reporteFotog;

    //---------------------------



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


    $g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
    $g2_01_01 = $g_desarrollo_g2->g2_01_01 ? $check : $uncheck; $g2_01_02 = $g_desarrollo_g2->g2_01_02 ? $check : $uncheck; $g2_01_03 = $g_desarrollo_g2->g2_01_03;
    $g2_02_01 = $g_desarrollo_g2->g2_02_01 ? $check : $uncheck; $g2_02_02 = $g_desarrollo_g2->g2_02_02 ? $check : $uncheck; $g2_02_03 = $g_desarrollo_g2->g2_02_03;
    $g2_03_01 = $g_desarrollo_g2->g2_03_01 ? $check : $uncheck; $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? $check : $uncheck; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
    $g2_04_01 = $g_desarrollo_g2->g2_04_01 ? $check : $uncheck; $g2_04_02 = $g_desarrollo_g2->g2_04_02 ? $check : $uncheck; $g2_04_03 = $g_desarrollo_g2->g2_04_03;
    $g2_05_01 = $g_desarrollo_g2->g2_05_01 ? $check : $uncheck; $g2_05_02 = $g_desarrollo_g2->g2_05_02 ? $check : $uncheck; $g2_05_03 = $g_desarrollo_g2->g2_05_03;
    $g2_06_01 = $g_desarrollo_g2->g2_06_01 ? $check : $uncheck; $g2_06_02 = $g_desarrollo_g2->g2_06_02 ? $check : $uncheck; $g2_06_03 = $g_desarrollo_g2->g2_06_03;
    $g2_07_01 = $g_desarrollo_g2->g2_07_01 ? $check : $uncheck; $g2_07_02 = $g_desarrollo_g2->g2_07_02 ? $check : $uncheck; $g2_07_03 = $g_desarrollo_g2->g2_07_03;
    $g2_08_01 = $g_desarrollo_g2->g2_08_01 ? $check : $uncheck; $g2_08_02 = $g_desarrollo_g2->g2_08_02 ? $check : $uncheck; $g2_08_03 = $g_desarrollo_g2->g2_08_03;
    $g2_09_01 = $g_desarrollo_g2->g2_09_01 ? $check : $uncheck; $g2_09_02 = $g_desarrollo_g2->g2_09_02 ? $check : $uncheck; $g2_09_03 = $g_desarrollo_g2->g2_09_03;

    $f_satelital_f2 = $obj->{'f_satelital_f2'};
//$d_01_01 = $f_satelital_f2->d_01_01; $d_01_02 = $f_satelital_f2->d_01_02;
    $f2_01_01 = $f_satelital_f2->f2_01_01; $f2_01_02 = $f_satelital_f2->f2_01_02;
    $f2_02_01 = $f_satelital_f2->f2_02_01; $f2_02_02 = $f_satelital_f2->f2_02_02;
    $f2_03_01 = $f_satelital_f2->f2_03_01; $f2_03_02 = $f_satelital_f2->f2_03_02;
    $f2_04_01 = $f_satelital_f2->f2_04_01; $f2_04_02 = $f_satelital_f2->f2_04_02;
    $f2_05_01 = $f_satelital_f2->f2_05_01; $f2_05_02 = $f_satelital_f2->f2_05_02;
    $f2_06_01 = $f_satelital_f2->f2_06_01; $f2_06_02 = $f_satelital_f2->f2_06_02;
    $f2_07_01 = $f_satelital_f2->f2_07_01; $f2_07_02 = $f_satelital_f2->f2_07_02;
    $f2_08_01 = $f_satelital_f2->f2_08_01; $f2_08_02 = $f_satelital_f2->f2_08_02;
    $f2_09_01 = $f_satelital_f2->f2_09_01;
    $f2_10_01 = $f_satelital_f2->f2_10_01;
    $f2_11_01 = $f_satelital_f2->f2_11_01;
    $f2_12_01 = $f_satelital_f2->f2_12_01;
    $f2_13_01 = $f_satelital_f2->f2_13_01;
    $f2_14_01 = $f_satelital_f2->f2_14_01;
    $f2_15_01 = $f_satelital_f2->f2_15_01;
    $f2_16_01 = $f_satelital_f2->f2_16_01;
    /** g_desarrollo_g3 **/
    $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
    $g3_01_01 = $g_desarrollo_g3->g3_01_01 ? $check : $uncheck;  $g3_01_02 = $g_desarrollo_g3->g3_01_02 ? $check : $uncheck; $g3_01_03 = $g_desarrollo_g3->g3_01_03;
    $g3_02_01 = $g_desarrollo_g3->g3_02_01 ? $check : $uncheck;  $g3_02_02 = $g_desarrollo_g3->g3_02_02 ? $check : $uncheck; $g3_02_03 = $g_desarrollo_g3->g3_02_03;
    $g3_03_01 = $g_desarrollo_g3->g3_03_01 ? $check : $uncheck;  $g3_03_02 = $g_desarrollo_g3->g3_03_02 ? $check : $uncheck; $g3_03_03 = $g_desarrollo_g3->g3_03_03;
    $g3_04_01 = $g_desarrollo_g3->g3_04_01 ? $check : $uncheck;  $g3_04_02 = $g_desarrollo_g3->g3_04_02 ? $check : $uncheck; $g3_04_03 = $g_desarrollo_g3->g3_04_03;
    $g3_05_01 = $g_desarrollo_g3->g3_05_01 ? $check : $uncheck;  $g3_05_02 = $g_desarrollo_g3->g3_05_02 ? $check : $uncheck; $g3_05_03 = $g_desarrollo_g3->g3_05_03;
    $g3_06_01 = $g_desarrollo_g3->g3_06_01 ? $check : $uncheck;  $g3_06_02 = $g_desarrollo_g3->g3_06_02 ? $check : $uncheck; $g3_06_03 = $g_desarrollo_g3->g3_06_03;
    $g3_07_01 = $g_desarrollo_g3->g3_07_01 ? $check : $uncheck;  $g3_07_02 = $g_desarrollo_g3->g3_07_02 ? $check : $uncheck; $g3_07_03 = $g_desarrollo_g3->g3_07_03;

    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '. $cabecera .'
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('DTITLE').'</strong></div>
                    </div>
                </main>	
               '. $subPlantilla1 .'
               <br />
               '. $subPlantilla2 .'
               <br />&nbsp;<br />&nbsp;<br />&nbsp;<br />
               '. $subPlantilla3 .'
               
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="3"><strong>'.constant('DTITLE1').'</strong></td>
                                 <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('D01_01').'</td>
                                <td class="col-15p">'.$g1_01_01.' Si</td>
                                <td class="col-15p">'.$g1_01_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_01_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('D01_02').'</td>
                                <td class="col-15p">'.$g1_02_01.' Si</td>
                                <td class="col-15p">'.$g1_02_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_02_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('D01_03').'</td>
                                <td class="col-15p">'.$g1_03_01.' Si</td>
                                <td class="col-15p">'.$g1_03_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('D01_04').'</td>
                                <td class="col-15p">'.$g1_04_01.' Si</td>
                                <td class="col-15p">'.$g1_04_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('D01_05').'</td>
                                <td class="col-15p">'.$g1_05_01.' Si</td>
                                <td class="col-15p">'.$g1_05_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_05_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('D01_06').'</td>
                                <td class="col-15p">'.$g1_06_01.' Si</td>
                                <td class="col-15p">'.$g1_06_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_06_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('D01_07').'</td>
                                <td class="col-15p">'.$g1_07_01.' Si</td>
                                <td class="col-15p">'.$g1_07_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_07_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('D01_08').'</td>
                                <td class="col-15p">'.$g1_08_01.' Si</td>
                                <td class="col-15p">'.$g1_08_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_08_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('D01_09').'</td>
                                <td class="col-15p">'.$g1_09_01.' Si</td>
                                <td class="col-15p">'.$g1_09_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_09_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>
               
               ' . $subPlantillaFibraAnt . '
                              
               ' . $subPlantillaFibra . '               
               
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="3"><strong>'.constant('ETITLE1').'</strong></td>
                                 <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E01_01').'</td>
                                <td class="col-15p">'.$g2_01_01.' Si</td>
                                <td class="col-15p">'.$g2_01_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_01_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E01_02').'</td>
                                <td class="col-15p">'.$g2_02_01.' Si</td>
                                <td class="col-15p">'.$g2_02_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_02_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E01_03').'</td>
                                <td class="col-15p">'.$g2_03_01.' Si</td>
                                <td class="col-15p">'.$g2_03_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E01_04').'</td>
                                <td class="col-15p">'.$g2_04_01.' Si</td>
                                <td class="col-15p">'.$g2_04_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E01_05').'</td>
                                <td class="col-15p">'.$g2_05_01.' Si</td>
                                <td class="col-15p">'.$g2_05_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_05_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E01_06').'</td>
                                <td class="col-15p">'.$g2_06_01.' Si</td>
                                <td class="col-15p">'.$g2_06_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_06_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E01_07').'</td>
                                <td class="col-15p">'.$g2_07_01.' Si</td>
                                <td class="col-15p">'.$g2_07_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_07_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E01_08').'</td>
                                <td class="col-15p">'.$g2_08_01.' Si</td>
                                <td class="col-15p">'.$g2_08_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_08_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E01_09').'</td>
                                <td class="col-15p">'.$g2_09_01.' Si</td>
                                <td class="col-15p">'.$g2_09_02.' No</td>
                                <td class="col-25p">Obs. '.$g2_09_03.'</td>
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
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td class="col-50p"><strong>Item</strong></td>
                                                    <td class="col-25p"><strong>Marca</strong></td>
                                                    <td class="col-25p"><strong>Estado</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F01').'</td>
                                                    <td class="col-25p">'.$f2_01_01.'</td>
                                                    <td class="col-25p">'.$f2_01_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F02').'</td>
                                                    <td class="col-25p">'.$f2_02_01.'</td>
                                                    <td class="col-25p">'.$f2_02_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F03').'</td>
                                                    <td class="col-25p">'.$f2_03_01.'</td>
                                                    <td class="col-25p">'.$f2_03_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F04').'</td>
                                                    <td class="col-25p">'.$f2_04_01.'</td>
                                                    <td class="col-25p">'.$f2_04_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F05').'</td>
                                                    <td class="col-25p">'.$f2_05_01.'</td>
                                                    <td class="col-25p">'.$f2_05_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F06').'</td>
                                                    <td class="col-25p">'.$f2_06_01.'</td>
                                                    <td class="col-25p">'.$f2_06_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F07').'</td>
                                                    <td class="col-25p">'.$f2_07_01.'</td>
                                                    <td class="col-25p">'.$f2_07_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">'.constant('F08').'</td>
                                                    <td class="col-25p">'.$f2_08_01.'</td>
                                                    <td class="col-25p">'.$f2_08_02.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td></td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-50p"><strong>Datos Técnicos de Funcionamiento</strong></td>
                                                    <td class="col-55p"><strong>Lectura</strong></td>
                                               </tr>
                                                <tr>
                                                    <td class="col-50p">Potencia de transmisión</td>
                                                    <td class="col-50p">'.$f2_09_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Nivel de apuntamiento/enlace</td>
                                                    <td class="col-50p">'.$f2_10_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Nivel croospol</td>
                                                    <td class="col-50p">'.$f2_11_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Up (kbps)</td>
                                                    <td class="col-50p">'.$f2_12_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Down (kbps)</td>
                                                    <td class="col-50p">'.$f2_13_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Configuración</td>
                                                    <td class="col-50p">'.$f2_14_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Azimut</td>
                                                    <td class="col-50p">'.$f2_15_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-50p">Elevación</td>
                                                    <td class="col-50p">'.$f2_16_01.'</td>
                                                </tr>
                                            </table>
                                        </td>
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
                                <td class="text-center" colspan="3"><strong>'.constant('FTITLE3').'</strong></td>
                                 <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F3_01').'</td>
                                <td class="col-15p">'.$g3_01_01.' Si</td>
                                <td class="col-15p">'.$g3_01_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_01_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('F3_02').'</td>
                                <td class="col-15p">'.$g3_02_01.' Si</td>
                                <td class="col-15p">'.$g3_02_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_02_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('F3_03').'</td>
                                <td class="col-15p">'.$g3_03_01.' Si</td>
                                <td class="col-15p">'.$g3_03_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F3_04').'</td>
                                <td class="col-15p">'.$g3_04_01.' Si</td>
                                <td class="col-15p">'.$g3_04_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('F3_05').'</td>
                                <td class="col-15p">'.$g3_05_01.' Si</td>
                                <td class="col-15p">'.$g3_05_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_05_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('F3_06').'</td>
                                <td class="col-15p">'.$g3_06_01.' Si</td>
                                <td class="col-15p">'.$g3_06_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_06_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('F3_07').'</td>
                                <td class="col-15p">'.$g3_07_01.' Si</td>
                                <td class="col-15p">'.$g3_07_02.' No</td>
                                <td class="col-25p">Obs. '.$g3_07_03.'</td>
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

function getSubPlantillaFibra($tablasFibraArr){

    $tabla_e1 = json_decode( $tablasFibraArr[0], true );
    $tabla_e2 = json_decode( $tablasFibraArr[1], true );
    $tabla_e3 = json_decode( $tablasFibraArr[2], true );
    $tabla_e4 = json_decode( $tablasFibraArr[3], true );

    $plantilla = '';

    /** ----------------------Tabla 1------------------------ **/

    if ($tabla_e1) {
        $plantilla .= '
        <table class="tborder">
            <tr>
                <td class="col-5p" align="center"><strong> N. </strong></td>
                <td class="col-20p" align="center"><strong> ' . constant('E01') . '</strong></td>
                <td class="col-20p" align="center"><strong> ' . constant('E02') . '</strong></td>
                <td class="col-20p" align="center"><strong> ' . constant('E03') . '</strong></td>
                <td class="col-15p" align="center"><strong> ' . constant('E04') . '</strong></td>
                <td class="col-20p" align="center"><strong> ' . constant('E05') . '</strong></td>
            </tr>';

        foreach ($tabla_e1 as $obj) {
            $plantilla .= '
            <tr>
                <td align="center"> '.$obj['nro'].'</td>
                <td> '.$obj['origen'].'</td>
                <td> '.$obj['destino'].'</td>
                <td> '.$obj['modelo'].'</td>
                <td> '.$obj['puertoEth'].'</td>
                <td> '.$obj['posicionOdf'].'</td>
            </tr>
            ';
        }
        $plantilla .= '</table><br />';
    }

    /** ----------------------Tabla 2------------------------ **/

    if ($tabla_e2) {
        $plantilla .= '
        <table class="tborder">
            <tr>
                <td class="col-5p" align="center"><strong> N. </strong></td>
                <td class="col-15p" align="center"><strong> '.constant('E03').'</strong></td>
                <td class="col-10p" align="center"><strong> '.constant('E06').'</strong></td>
                <td class="col-10p" align="center"><strong> '.constant('E07').'</strong></td>
                <td class="col-30p" align="center"><strong> '.constant('E08').'</strong></td>
                <td class="col-30p" align="center"><strong> '.constant('E09').'</strong></td>
            </tr>';
        foreach ($tabla_e2 as $obj) {
            $plantilla .= '
            <tr>
                <td align="center">'.$obj['nro'].'</td>
                <td>'.$obj['modelo'].'</td>
                <td align="center">'.$obj['estadoTx'].'</td>
                <td align="center">'.$obj['cantPtos'].'</td>
                <td>
                    <div>H. Tx From: '.$obj['txFrom'].'</div>
                    <div>H. Rx To: '.$obj['rxTo'].'</div>
                </td>
                <td>'.$obj['descripcion'].'</td>
            </tr>';
        }
        $plantilla .= '</table><br />';
    }

    /** ----------------------Tabla 3------------------------ **/

    if ($tabla_e3) {
        $plantilla .= '
        <table class="tborder">
        <tr>
            <td width="20%" align="center"><strong>Detalle de puertos ETH ópticos</strong></td>
            <td width="80%">
            
                <table class="tborder">';
                foreach ($tabla_e3 as $obj) {
                    $nomEq = $obj['id_nom'];
                    $plantilla .=
                        "<tr>" .
                        "    <td width='15%' align='center'>" .
                        "        <p><strong>Tarjeta</strong></p><br />" .
                        "        <p>". $nomEq . "</p>" .
                        "    </td>" .
                        "    <td>" .
                        "        <table class='table table-bordered'>" .
                        "            <tr class='align-middle'>" .
                        "                <th width='12%'>Slot/Prto</th>" .
                        "                <th>Descripción</th>" .
                        "                <th width='20%'>Estado</th>" .
                        "            </tr>";


                    foreach ($obj['puertos'] as $objPrto) {

                        $puerto = $objPrto['id_puerto'];
                        $descri = $objPrto['id_descri'];
                        $estado = $objPrto['id_estado'];

                        $plantilla .=
                            "<tr>" .
                            "   <td align='center'>" . $puerto . "</td>" .
                            "   <td>" . $descri . "</td>" .
                            "   <td align='center'>" . $estado . "</td>" .
                            "</tr>";
                    }
                    $plantilla .=
                        "        </table>" .
                        "    </td>" .
                        "</tr>";
                }

                $plantilla .= '</table>';
                $plantilla .= '</td></tr></table><br />';
    }

    /** ----------------------Tabla 4------------------------ **/

    if ($tabla_e4) {
        $plantilla .= '
        <table class="tborder">
        <tr>
            <td width="20%" align="center"><strong>Puertos opticos en bandeja ODF</strong></td>
            <td width="80%">
            
                <table class="tborder">';
        foreach ($tabla_e4 as $obj) {
            $nomEq = $obj['id_nom'];
            $plantilla .=
                "<tr>" .
                "    <td width='15%' align='center'>" .
                "        <p><strong>No. Bandeja</strong></p><br />" .
                "        <p>". $nomEq . "</p>" .
                "    </td>" .
                "    <td>" .
                "        <table class='table table-bordered'>" .
                "            <tr class='align-middle'>" .
                "                <th width='12%'>Prto.</th>" .
                "                <th>Descripción</th>" .
                "                <th width='20%'>Tipo de Conector</th>" .
                "            </tr>";


            foreach ($obj['puertos'] as $objPrto) {

                $puerto = $objPrto['id_puerto'];
                $descri = $objPrto['id_descri'];
                $estado = $objPrto['id_estado'];

                $plantilla .=
                    "<tr>" .
                    "   <td align='center'>" . $puerto . "</td>" .
                    "   <td>" . $descri . "</td>" .
                    "   <td align='center'>" . $estado . "</td>" .
                    "</tr>";
            }
            $plantilla .=
                "        </table>" .
                "    </td>" .
                "</tr>";
        }

        $plantilla .= '</table>';
        $plantilla .= '</td></tr></table><br />';
    }

    return $plantilla;
}

function getSubPlantillaFibraAnt($jsonData){

    $obj = json_decode($jsonData);

    $f_fibra = $obj->{'f_fibra'};
    $plantilla = '';

    $f1_01_01 = $f_fibra->f1_01_01; $f1_01_02 = $f_fibra->f1_01_02; $f1_01_03 = $f_fibra->f1_01_03; $f1_01_04 = $f_fibra->f1_01_04; $f1_01_05 = $f_fibra->f1_01_05;
    $f1_02_01 = $f_fibra->f1_02_01; $f1_02_02 = $f_fibra->f1_02_02; $f1_02_03 = $f_fibra->f1_02_03; $f1_02_04 = $f_fibra->f1_02_04; $f1_02_05 = $f_fibra->f1_02_05;
    $f1_03_01 = $f_fibra->f1_03_01; $f1_03_02 = $f_fibra->f1_03_02; $f1_03_03 = $f_fibra->f1_03_03; $f1_03_04 = $f_fibra->f1_03_04; $f1_03_05 = $f_fibra->f1_03_05;

    $f1_04_01 = $f_fibra->f1_04_01; $f1_04_02 = $f_fibra->f1_04_02; $f1_04_03 = $f_fibra->f1_04_03; $f1_04_04_from = $f_fibra->f1_04_04_from; $f1_04_05 = $f_fibra->f1_04_05;
    $f1_04_04_to   = $f_fibra->f1_04_04_to;
    $f1_05_01 = $f_fibra->f1_05_01; $f1_05_02 = $f_fibra->f1_05_02; $f1_05_03 = $f_fibra->f1_05_03; $f1_05_04_from = $f_fibra->f1_05_04_from; $f1_05_05 = $f_fibra->f1_05_05;
    $f1_05_04_to   = $f_fibra->f1_05_04_to;
    $f1_06_01 = $f_fibra->f1_06_01; $f1_06_02 = $f_fibra->f1_06_02; $f1_06_03 = $f_fibra->f1_06_03; $f1_06_04_from = $f_fibra->f1_06_04_from; $f1_06_05 = $f_fibra->f1_06_05;
    $f1_06_04_to   = $f_fibra->f1_06_04_to;

    $f1_07_02 = $f_fibra->f1_07_02; $f1_07_03_a = $f_fibra->f1_07_03_a; $f1_07_04_a = $f_fibra->f1_07_04_a; $f1_07_05_a = $f_fibra->f1_07_05_a;
    $f1_07_03_b = $f_fibra->f1_07_03_b; $f1_07_04_b = $f_fibra->f1_07_04_b; $f1_07_05_b = $f_fibra->f1_07_05_b;
    $f1_08_02 = $f_fibra->f1_08_02; $f1_08_03_a = $f_fibra->f1_08_03_a; $f1_08_04_a = $f_fibra->f1_08_04_a; $f1_08_05_a = $f_fibra->f1_08_05_a;
    $f1_08_03_b = $f_fibra->f1_08_03_b; $f1_08_04_b = $f_fibra->f1_08_04_b; $f1_08_05_b = $f_fibra->f1_08_05_b;
    $f1_08_03_c = $f_fibra->f1_08_03_c; $f1_08_04_c = $f_fibra->f1_08_04_c; $f1_08_05_c = $f_fibra->f1_08_05_c;

    /*$plantilla = '
        <main>
            <div class="notices">
                <div class="notice"><strong>'.constant('ETITLE').'</strong></div>
            </div>
        </main>	';*/

    if ($f1_01_01 != '') {
        $plantilla = '
        <main>
            <table class="tborder">
                <tbody>
                    <tr>
                        <td class="col-10p"><strong> N. </strong></td>
                        <td class="col-10p"><strong> ' . constant('E01') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E02') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E03') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E04') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E05') . '</strong></td>
                    </tr>
                    <tr>
                        <td class="col-10p"> 1</td>
                        <td class="col-15p"> ' . $f1_01_01 . '</td>
                        <td class="col-15p"> ' . $f1_01_02 . '</td>
                        <td class="col-15p"> ' . $f1_01_03 . '</td>
                        <td class="col-15p"> ' . $f1_01_04 . '</td>
                        <td class="col-15p"> ' . $f1_01_05 . '</td>
                    </tr>
                    <tr>
                        <td class="col-10p">2</td>
                        <td class="col-15p"> ' . $f1_02_01 . '</td>
                        <td class="col-15p"> ' . $f1_02_02 . '</td>
                        <td class="col-15p"> ' . $f1_02_03 . '</td>
                        <td class="col-15p"> ' . $f1_02_04 . '</td>
                        <td class="col-15p"> ' . $f1_02_05 . '</td>
                    </tr>
                    <tr>
                        <td class="col-10p">3</td>
                        <td class="col-15p"> ' . $f1_03_01 . '</td>
                        <td class="col-15p"> ' . $f1_03_02 . '</td>
                        <td class="col-15p"> ' . $f1_03_03 . '</td>
                        <td class="col-15p"> ' . $f1_03_04 . '</td>
                        <td class="col-15p"> ' . $f1_03_05 . '</td>
                    </tr>
                </tbody>        
            </table>									                        
       </main>';
    }

    if ($f1_04_01 != '') {
        $plantilla .= '
        <main>
            <table class="tborder">
                <tbody>
                    <tr>
                        <td class="col-10p"><strong> N. </strong></td>
                        <td class="col-10p"><strong> ' . constant('E03') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E06') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E07') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E08') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E09') . '</strong></td>
                    </tr>
                    <tr>
                        <td class="col-5p"> 1</td>
                        <td class="col-15p"> ' . $f1_04_01 . '</td>
                        <td class="col-15p"> ' . $f1_04_02 . '</td>
                        <td class="col-15p"> ' . $f1_04_03 . '</td>
                        <td class="col-25p"> Hilo Tx From:' . $f1_04_04_from . '</td>
                        <td class="col-25p"> ' . $f1_04_05 . '</td>
                    </tr>
                    <tr>
                        <td class="col-5p"> </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-25p"> Hilo Tx To:' . $f1_04_04_to . '</td>
                        <td class="col-25p">  </td>
                    </tr>
                    <tr>
                        <td class="col-5p">2</td>
                        <td class="col-15p"> ' . $f1_05_01 . '</td>
                        <td class="col-15p"> ' . $f1_05_02 . '</td>
                        <td class="col-15p"> ' . $f1_05_03 . '</td>
                        <td class="col-25p">Hilo Tx From:  ' . $f1_05_04_from . '</td>
                        <td class="col-25p"> ' . $f1_05_05 . '</td>
                    </tr>
                     <tr>
                        <td class="col-5p"> </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-25p"> Hilo Tx To:' . $f1_05_04_to . '</td>
                        <td class="col-25p">  </td>
                    </tr>
                    <tr>
                        <td class="col-5p">3</td>
                        <td class="col-15p"> ' . $f1_06_01 . '</td>
                        <td class="col-15p"> ' . $f1_06_02 . '</td>
                        <td class="col-15p"> ' . $f1_06_03 . '</td>
                        <td class="col-25p">Hilo Tx From:  ' . $f1_06_04_from . '</td>
                        <td class="col-25p"> ' . $f1_06_05 . '</td>
                    </tr>
                     <tr>
                        <td class="col-5p"> </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-15p">  </td>
                        <td class="col-25p"> Hilo Tx To:' . $f1_06_04_to . '</td>
                        <td class="col-25p">  </td>
                    </tr>
                </tbody>        
            </table>									                        
       </main>';
    }

    if ($f1_07_02 != '') {
        $plantilla .= '
        <main>
            <table class="tborder">
                <tbody>
                    <tr>
                        <td class="col-10p"><strong> 4</strong></td>
                        <td class="col-15p"><strong> ' . constant('E10') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E12') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E13') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E14') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E15') . '</strong></td>
                    </tr>
                    <tr>
                        <td class="col-10p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> ' . $f1_07_02 . '</td>
                        <td class="col-15p"> ' . $f1_07_03_a . '</td>
                        <td class="col-15p"> ' . $f1_07_04_a . '</td>
                        <td class="col-15p"> ' . $f1_07_05_a . '</td>
                    </tr>
                    <tr>
                        <td class="col-10p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> ' . $f1_07_03_b . '</td>
                        <td class="col-15p"> ' . $f1_07_04_b . '</td>
                        <td class="col-15p"> ' . $f1_07_05_b . '</td>
                    </tr>
                </tbody>        
            </table>									                        
       </main>';
    }

    if ($f1_08_02 != '') {
        $plantilla .= '
        <main>
            <table class="tborder">
                <tbody>
                    <tr>
                        <td class="col-10p"><strong>5</strong></td>
                        <td class="col-15p"><strong> ' . constant('E10') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E11') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E13') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E14') . '</strong></td>
                        <td class="col-15p"><strong> ' . constant('E16') . '</strong></td>
                    </tr>
                    <tr>
                        <td class="col-10p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> ' . $f1_08_02 . '</td>
                        <td class="col-15p"> ' . $f1_08_03_a . '</td>
                        <td class="col-15p"> ' . $f1_08_04_a . '</td>
                        <td class="col-15p"> ' . $f1_08_05_a . '</td>
                    </tr>
                    <tr>
                        <td class="col-10p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> ' . $f1_08_03_b . '</td>
                        <td class="col-15p"> ' . $f1_08_04_b . '</td>
                        <td class="col-15p"> ' . $f1_08_05_b . '</td>
                    </tr>
                    <tr>
                        <td class="col-10p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> </td>
                        <td class="col-15p"> ' . $f1_08_03_c . '</td>
                        <td class="col-15p"> ' . $f1_08_04_c . '</td>
                        <td class="col-15p"> ' . $f1_08_05_c . '</td>
                    </tr>
                </tbody>        
            </table>									                        
       </main>';
    }

    return $plantilla;
}

function getSubPlantilla1($jsonData){
    $obj = json_decode($jsonData);
    $d_micro_1 = $obj->{'d_micro_1'};

    $d1_01_01 = $d_micro_1->d1_01_01; $d1_01_02 = $d_micro_1->d1_01_02; $d1_01_03 = $d_micro_1->d1_01_03; $d1_01_04 = $d_micro_1->d1_01_04; $d1_01_05 = $d_micro_1->d1_01_05; $d1_01_06 = $d_micro_1->d1_01_06;
    $d1_02_01 = $d_micro_1->d1_02_01; $d1_02_02 = $d_micro_1->d1_02_02; $d1_02_03 = $d_micro_1->d1_02_03; $d1_02_04 = $d_micro_1->d1_02_04; $d1_02_05 = $d_micro_1->d1_02_05; $d1_02_06 = $d_micro_1->d1_02_06;
    $d1_03_01 = $d_micro_1->d1_03_01; $d1_03_02 = $d_micro_1->d1_03_02; $d1_03_03 = $d_micro_1->d1_03_03; $d1_03_04 = $d_micro_1->d1_03_04; $d1_03_05 = $d_micro_1->d1_03_05; $d1_03_06 = $d_micro_1->d1_03_06;
    $d1_04_01 = $d_micro_1->d1_04_01; $d1_04_02 = $d_micro_1->d1_04_02; $d1_04_03 = $d_micro_1->d1_04_03; $d1_04_04 = $d_micro_1->d1_04_04; $d1_04_05 = $d_micro_1->d1_04_05; $d1_04_06 = $d_micro_1->d1_04_06;
    $d1_05_01 = $d_micro_1->d1_05_01; $d1_05_02 = $d_micro_1->d1_05_02; $d1_05_03 = $d_micro_1->d1_05_03; $d1_05_04 = $d_micro_1->d1_05_04; $d1_05_05 = $d_micro_1->d1_05_05; $d1_05_06 = $d_micro_1->d1_05_06;
    $d1_06_01 = $d_micro_1->d1_06_01; $d1_06_02 = $d_micro_1->d1_06_02; $d1_06_03 = $d_micro_1->d1_06_03; $d1_06_04 = $d_micro_1->d1_06_04; $d1_06_05 = $d_micro_1->d1_06_05; $d1_06_06 = $d_micro_1->d1_06_06;
    $d1_07_01 = $d_micro_1->d1_07_01; $d1_07_02 = $d_micro_1->d1_07_02; $d1_07_03 = $d_micro_1->d1_07_03; $d1_07_04 = $d_micro_1->d1_07_04; $d1_07_05 = $d_micro_1->d1_07_05; $d1_07_06 = $d_micro_1->d1_07_06;
    $d1_08_01 = $d_micro_1->d1_08_01; $d1_08_02 = $d_micro_1->d1_08_02; $d1_08_03 = $d_micro_1->d1_08_03; $d1_08_04 = $d_micro_1->d1_08_04; $d1_08_05 = $d_micro_1->d1_08_05; $d1_08_06 = $d_micro_1->d1_08_06;
    $d1_09_01 = $d_micro_1->d1_09_01; $d1_09_02 = $d_micro_1->d1_09_02; $d1_09_03 = $d_micro_1->d1_09_03; $d1_09_04 = $d_micro_1->d1_09_04; $d1_09_05 = $d_micro_1->d1_09_05; $d1_09_06 = $d_micro_1->d1_09_06;
    $d1_10_01 = $d_micro_1->d1_10_01; $d1_10_02 = $d_micro_1->d1_10_02; $d1_10_03 = $d_micro_1->d1_10_03; $d1_10_04 = $d_micro_1->d1_10_04; $d1_10_05 = $d_micro_1->d1_10_05; $d1_10_06 = $d_micro_1->d1_10_06;
    $d1_11_01 = $d_micro_1->d1_11_01; $d1_11_02 = $d_micro_1->d1_11_02; $d1_11_03 = $d_micro_1->d1_11_03; $d1_11_04 = $d_micro_1->d1_11_04; $d1_11_05 = $d_micro_1->d1_11_05; $d1_11_06 = $d_micro_1->d1_11_06;
    $d1_12_01 = $d_micro_1->d1_12_01; $d1_12_02 = $d_micro_1->d1_12_02; $d1_12_03 = $d_micro_1->d1_12_03; $d1_12_04 = $d_micro_1->d1_12_04; $d1_12_05 = $d_micro_1->d1_12_05; $d1_12_06 = $d_micro_1->d1_12_06;
    $d1_13_01 = $d_micro_1->d1_13_01; $d1_13_02 = $d_micro_1->d1_13_02; $d1_13_03 = $d_micro_1->d1_13_03; $d1_13_04 = $d_micro_1->d1_13_04; $d1_13_05 = $d_micro_1->d1_13_05; $d1_13_06 = $d_micro_1->d1_13_06;
    $d1_14_01 = $d_micro_1->d1_14_01; $d1_14_02 = $d_micro_1->d1_14_02; $d1_14_03 = $d_micro_1->d1_14_03; $d1_14_04 = $d_micro_1->d1_14_04; $d1_14_05 = $d_micro_1->d1_14_05; $d1_14_06 = $d_micro_1->d1_14_06;
    $d1_15_01 = $d_micro_1->d1_15_01; $d1_15_02 = $d_micro_1->d1_15_02; $d1_15_03 = $d_micro_1->d1_15_03; $d1_15_04 = $d_micro_1->d1_15_04; $d1_15_05 = $d_micro_1->d1_15_05; $d1_15_06 = $d_micro_1->d1_15_06;
    $plantilla =
        '<main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-10p"><strong> '.constant('D01').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D02').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D03').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D04').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D05').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D06').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D07').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>1</strong></td>
                                <td class="col-15p"> '.$d1_01_01.'</td>
                                <td class="col-15p"> '.$d1_01_02.'</td>
                                <td class="col-15p"> '.$d1_01_03.'</td>
                                <td class="col-15p"> '.$d1_01_04.'</td>
                                <td class="col-15p"> '.$d1_01_05.'</td>
                                <td class="col-15p"> '.$d1_01_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>2</strong></td>
                                <td class="col-15p"> '.$d1_02_01.'</td>
                                <td class="col-15p"> '.$d1_02_02.'</td>
                                <td class="col-15p"> '.$d1_02_03.'</td>
                                <td class="col-15p"> '.$d1_02_04.'</td>
                                <td class="col-15p"> '.$d1_02_05.'</td>
                                <td class="col-15p"> '.$d1_02_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>3</strong></td>
                                <td class="col-15p"> '.$d1_03_01.'</td>
                                <td class="col-15p"> '.$d1_03_02.'</td>
                                <td class="col-15p"> '.$d1_03_03.'</td>
                                <td class="col-15p"> '.$d1_03_04.'</td>
                                <td class="col-15p"> '.$d1_03_05.'</td>
                                <td class="col-15p"> '.$d1_03_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>4</strong></td>
                                <td class="col-15p"> '.$d1_04_01.'</td>
                                <td class="col-15p"> '.$d1_04_02.'</td>
                                <td class="col-15p"> '.$d1_04_03.'</td>
                                <td class="col-15p"> '.$d1_04_04.'</td>
                                <td class="col-15p"> '.$d1_04_05.'</td>
                                <td class="col-15p"> '.$d1_04_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>5</strong></td>
                                <td class="col-15p"> '.$d1_05_01.'</td>
                                <td class="col-15p"> '.$d1_05_02.'</td>
                                <td class="col-15p"> '.$d1_05_03.'</td>
                                <td class="col-15p"> '.$d1_05_04.'</td>
                                <td class="col-15p"> '.$d1_05_05.'</td>
                                <td class="col-15p"> '.$d1_05_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>6</strong></td>
                                <td class="col-15p"> '.$d1_06_01.'</td>
                                <td class="col-15p"> '.$d1_06_02.'</td>
                                <td class="col-15p"> '.$d1_06_03.'</td>
                                <td class="col-15p"> '.$d1_06_04.'</td>
                                <td class="col-15p"> '.$d1_06_05.'</td>
                                <td class="col-15p"> '.$d1_06_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>7</strong></td>
                                <td class="col-15p"> '.$d1_07_01.'</td>
                                <td class="col-15p"> '.$d1_07_02.'</td>
                                <td class="col-15p"> '.$d1_07_03.'</td>
                                <td class="col-15p"> '.$d1_07_04.'</td>
                                <td class="col-15p"> '.$d1_07_05.'</td>
                                <td class="col-15p"> '.$d1_07_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>8</strong></td>
                                <td class="col-15p"> '.$d1_08_01.'</td>
                                <td class="col-15p"> '.$d1_08_02.'</td>
                                <td class="col-15p"> '.$d1_08_03.'</td>
                                <td class="col-15p"> '.$d1_08_04.'</td>
                                <td class="col-15p"> '.$d1_08_05.'</td>
                                <td class="col-15p"> '.$d1_08_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>9</strong></td>
                                <td class="col-15p"> '.$d1_09_01.'</td>
                                <td class="col-15p"> '.$d1_09_02.'</td>
                                <td class="col-15p"> '.$d1_09_03.'</td>
                                <td class="col-15p"> '.$d1_09_04.'</td>
                                <td class="col-15p"> '.$d1_09_05.'</td>
                                <td class="col-15p"> '.$d1_09_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>10</strong></td>
                                <td class="col-15p"> '.$d1_10_01.'</td>
                                <td class="col-15p"> '.$d1_10_02.'</td>
                                <td class="col-15p"> '.$d1_10_03.'</td>
                                <td class="col-15p"> '.$d1_10_04.'</td>
                                <td class="col-15p"> '.$d1_10_05.'</td>
                                <td class="col-15p"> '.$d1_10_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>11</strong></td>
                                <td class="col-15p"> '.$d1_11_01.'</td>
                                <td class="col-15p"> '.$d1_11_02.'</td>
                                <td class="col-15p"> '.$d1_11_03.'</td>
                                <td class="col-15p"> '.$d1_11_04.'</td>
                                <td class="col-15p"> '.$d1_11_05.'</td>
                                <td class="col-15p"> '.$d1_11_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>12</strong></td>
                                <td class="col-15p"> '.$d1_12_01.'</td>
                                <td class="col-15p"> '.$d1_12_02.'</td>
                                <td class="col-15p"> '.$d1_12_03.'</td>
                                <td class="col-15p"> '.$d1_12_04.'</td>
                                <td class="col-15p"> '.$d1_12_05.'</td>
                                <td class="col-15p"> '.$d1_12_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>13</strong></td>
                                <td class="col-15p"> '.$d1_13_01.'</td>
                                <td class="col-15p"> '.$d1_13_02.'</td>
                                <td class="col-15p"> '.$d1_13_03.'</td>
                                <td class="col-15p"> '.$d1_13_04.'</td>
                                <td class="col-15p"> '.$d1_13_05.'</td>
                                <td class="col-15p"> '.$d1_13_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>14</strong></td>
                                <td class="col-15p"> '.$d1_14_01.'</td>
                                <td class="col-15p"> '.$d1_14_02.'</td>
                                <td class="col-15p"> '.$d1_14_03.'</td>
                                <td class="col-15p"> '.$d1_14_04.'</td>
                                <td class="col-15p"> '.$d1_14_05.'</td>
                                <td class="col-15p"> '.$d1_14_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>15</strong></td>
                                <td class="col-15p"> '.$d1_15_01.'</td>
                                <td class="col-15p"> '.$d1_15_02.'</td>
                                <td class="col-15p"> '.$d1_15_03.'</td>
                                <td class="col-15p"> '.$d1_15_04.'</td>
                                <td class="col-15p"> '.$d1_15_05.'</td>
                                <td class="col-15p"> '.$d1_15_06.'</td>
                            </tr>
                        </tbody>
                    </table>
               </main>';

    return $plantilla;
}
function getSubPlantilla2($jsonData){
$obj = json_decode($jsonData);
$d_micro_2 = $obj->{'d_micro_2'};
$d2_01_01 = $d_micro_2->d2_01_01; $d2_01_02 = $d_micro_2->d2_01_02; $d2_01_03 = $d_micro_2->d2_01_03; $d2_01_04 = $d_micro_2->d2_01_04; $d2_01_05 = $d_micro_2->d2_01_05; $d2_01_06 = $d_micro_2->d2_01_06;
$d2_02_01 = $d_micro_2->d2_02_01; $d2_02_02 = $d_micro_2->d2_02_02; $d2_02_03 = $d_micro_2->d2_02_03; $d2_02_04 = $d_micro_2->d2_02_04; $d2_02_05 = $d_micro_2->d2_02_05; $d2_02_06 = $d_micro_2->d2_02_06;
$d2_03_01 = $d_micro_2->d2_03_01; $d2_03_02 = $d_micro_2->d2_03_02; $d2_03_03 = $d_micro_2->d2_03_03; $d2_03_04 = $d_micro_2->d2_03_04; $d2_03_05 = $d_micro_2->d2_03_05; $d2_03_06 = $d_micro_2->d2_03_06;
$d2_04_01 = $d_micro_2->d2_04_01; $d2_04_02 = $d_micro_2->d2_04_02; $d2_04_03 = $d_micro_2->d2_04_03; $d2_04_04 = $d_micro_2->d2_04_04; $d2_04_05 = $d_micro_2->d2_04_05; $d2_04_06 = $d_micro_2->d2_04_06;
$d2_05_01 = $d_micro_2->d2_05_01; $d2_05_02 = $d_micro_2->d2_05_02; $d2_05_03 = $d_micro_2->d2_05_03; $d2_05_04 = $d_micro_2->d2_05_04; $d2_05_05 = $d_micro_2->d2_05_05; $d2_05_06 = $d_micro_2->d2_05_06;
$d2_06_01 = $d_micro_2->d2_06_01; $d2_06_02 = $d_micro_2->d2_06_02; $d2_06_03 = $d_micro_2->d2_06_03; $d2_06_04 = $d_micro_2->d2_06_04; $d2_06_05 = $d_micro_2->d2_06_05; $d2_06_06 = $d_micro_2->d2_06_06;
$d2_07_01 = $d_micro_2->d2_07_01; $d2_07_02 = $d_micro_2->d2_07_02; $d2_07_03 = $d_micro_2->d2_07_03; $d2_07_04 = $d_micro_2->d2_07_04; $d2_07_05 = $d_micro_2->d2_07_05; $d2_07_06 = $d_micro_2->d2_07_06;
$d2_08_01 = $d_micro_2->d2_08_01; $d2_08_02 = $d_micro_2->d2_08_02; $d2_08_03 = $d_micro_2->d2_08_03; $d2_08_04 = $d_micro_2->d2_08_04; $d2_08_05 = $d_micro_2->d2_08_05; $d2_08_06 = $d_micro_2->d2_08_06;
$d2_09_01 = $d_micro_2->d2_09_01; $d2_09_02 = $d_micro_2->d2_09_02; $d2_09_03 = $d_micro_2->d2_09_03; $d2_09_04 = $d_micro_2->d2_09_04; $d2_09_05 = $d_micro_2->d2_09_05; $d2_09_06 = $d_micro_2->d2_09_06;
$d2_10_01 = $d_micro_2->d2_10_01; $d2_10_02 = $d_micro_2->d2_10_02; $d2_10_03 = $d_micro_2->d2_10_03; $d2_10_04 = $d_micro_2->d2_10_04; $d2_10_05 = $d_micro_2->d2_10_05; $d2_10_06 = $d_micro_2->d2_10_06;
$d2_11_01 = $d_micro_2->d2_11_01; $d2_11_02 = $d_micro_2->d2_11_02; $d2_11_03 = $d_micro_2->d2_11_03; $d2_11_04 = $d_micro_2->d2_11_04; $d2_11_05 = $d_micro_2->d2_11_05; $d2_11_06 = $d_micro_2->d2_11_06;
$d2_12_01 = $d_micro_2->d2_12_01; $d2_12_02 = $d_micro_2->d2_12_02; $d2_12_03 = $d_micro_2->d2_12_03; $d2_12_04 = $d_micro_2->d2_12_04; $d2_12_05 = $d_micro_2->d2_12_05; $d2_12_06 = $d_micro_2->d2_12_06;
$d2_13_01 = $d_micro_2->d2_13_01; $d2_13_02 = $d_micro_2->d2_13_02; $d2_13_03 = $d_micro_2->d2_13_03; $d2_13_04 = $d_micro_2->d2_13_04; $d2_13_05 = $d_micro_2->d2_13_05; $d2_13_06 = $d_micro_2->d2_13_06;
$d2_14_01 = $d_micro_2->d2_14_01; $d2_14_02 = $d_micro_2->d2_14_02; $d2_14_03 = $d_micro_2->d2_14_03; $d2_14_04 = $d_micro_2->d2_14_04; $d2_14_05 = $d_micro_2->d2_14_05; $d2_14_06 = $d_micro_2->d2_14_06;
$d2_15_01 = $d_micro_2->d2_15_01; $d2_15_02 = $d_micro_2->d2_15_02; $d2_15_03 = $d_micro_2->d2_15_03; $d2_15_04 = $d_micro_2->d2_15_04; $d2_15_05 = $d_micro_2->d2_15_05; $d2_15_06 = $d_micro_2->d2_15_06;
    $plantilla =
        '<main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-10p"><strong> '.constant('D08').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D02').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D03').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D04').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D05').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D09').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D10').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-10p"> 1</td>
                                <td class="col-15p"> '.$d2_01_01.'</td>
                                <td class="col-15p"> '.$d2_01_02.'</td>
                                <td class="col-15p"> '.$d2_01_03.'</td>
                                <td class="col-15p"> '.$d2_01_04.'</td>
                                <td class="col-15p"> '.$d2_01_05.'</td>
                                <td class="col-15p"> '.$d2_01_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p">2</td>
                                <td class="col-15p"> '.$d2_02_01.'</td>
                                <td class="col-15p"> '.$d2_02_02.'</td>
                                <td class="col-15p"> '.$d2_02_03.'</td>
                                <td class="col-15p"> '.$d2_02_04.'</td>
                                <td class="col-15p"> '.$d2_02_05.'</td>
                                <td class="col-15p"> '.$d2_02_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p">3</td>
                                <td class="col-15p"> '.$d2_03_01.'</td>
                                <td class="col-15p"> '.$d2_03_02.'</td>
                                <td class="col-15p"> '.$d2_03_03.'</td>
                                <td class="col-15p"> '.$d2_03_04.'</td>
                                <td class="col-15p"> '.$d2_03_05.'</td>
                                <td class="col-15p"> '.$d2_03_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"> 4</td>
                                <td class="col-15p"> '.$d2_04_01.'</td>
                                <td class="col-15p"> '.$d2_04_02.'</td>
                                <td class="col-15p"> '.$d2_04_03.'</td>
                                <td class="col-15p"> '.$d2_04_04.'</td>
                                <td class="col-15p"> '.$d2_04_05.'</td>
                                <td class="col-15p"> '.$d2_04_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p">5</td>
                                <td class="col-15p"> '.$d2_05_01.'</td>
                                <td class="col-15p"> '.$d2_05_02.'</td>
                                <td class="col-15p"> '.$d2_05_03.'</td>
                                <td class="col-15p"> '.$d2_05_04.'</td>
                                <td class="col-15p"> '.$d2_05_05.'</td>
                                <td class="col-15p"> '.$d2_05_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p">6</td>
                                <td class="col-15p"> '.$d2_06_01.'</td>
                                <td class="col-15p"> '.$d2_06_02.'</td>
                                <td class="col-15p"> '.$d2_06_03.'</td>
                                <td class="col-15p"> '.$d2_06_04.'</td>
                                <td class="col-15p"> '.$d2_06_05.'</td>
                                <td class="col-15p"> '.$d2_06_06.'</td>
                            </tr>
                             <tr>
                                <td class="col-10p"><strong>7</strong></td>
                                <td class="col-15p"> '.$d2_07_01.'</td>
                                <td class="col-15p"> '.$d2_07_02.'</td>
                                <td class="col-15p"> '.$d2_07_03.'</td>
                                <td class="col-15p"> '.$d2_07_04.'</td>
                                <td class="col-15p"> '.$d2_07_05.'</td>
                                <td class="col-15p"> '.$d2_07_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>8</strong></td>
                                <td class="col-15p"> '.$d2_08_01.'</td>
                                <td class="col-15p"> '.$d2_08_02.'</td>
                                <td class="col-15p"> '.$d2_08_03.'</td>
                                <td class="col-15p"> '.$d2_08_04.'</td>
                                <td class="col-15p"> '.$d2_08_05.'</td>
                                <td class="col-15p"> '.$d2_08_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>9</strong></td>
                                <td class="col-15p"> '.$d2_09_01.'</td>
                                <td class="col-15p"> '.$d2_09_02.'</td>
                                <td class="col-15p"> '.$d2_09_03.'</td>
                                <td class="col-15p"> '.$d2_09_04.'</td>
                                <td class="col-15p"> '.$d2_09_05.'</td>
                                <td class="col-15p"> '.$d2_09_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>10</strong></td>
                                <td class="col-15p"> '.$d2_10_01.'</td>
                                <td class="col-15p"> '.$d2_10_02.'</td>
                                <td class="col-15p"> '.$d2_10_03.'</td>
                                <td class="col-15p"> '.$d2_10_04.'</td>
                                <td class="col-15p"> '.$d2_10_05.'</td>
                                <td class="col-15p"> '.$d2_10_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>11</strong></td>
                                <td class="col-15p"> '.$d2_11_01.'</td>
                                <td class="col-15p"> '.$d2_11_02.'</td>
                                <td class="col-15p"> '.$d2_11_03.'</td>
                                <td class="col-15p"> '.$d2_11_04.'</td>
                                <td class="col-15p"> '.$d2_11_05.'</td>
                                <td class="col-15p"> '.$d2_11_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>12</strong></td>
                                <td class="col-15p"> '.$d2_12_01.'</td>
                                <td class="col-15p"> '.$d2_12_02.'</td>
                                <td class="col-15p"> '.$d2_12_03.'</td>
                                <td class="col-15p"> '.$d2_12_04.'</td>
                                <td class="col-15p"> '.$d2_12_05.'</td>
                                <td class="col-15p"> '.$d2_12_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>13</strong></td>
                                <td class="col-15p"> '.$d2_13_01.'</td>
                                <td class="col-15p"> '.$d2_13_02.'</td>
                                <td class="col-15p"> '.$d2_13_03.'</td>
                                <td class="col-15p"> '.$d2_13_04.'</td>
                                <td class="col-15p"> '.$d2_13_05.'</td>
                                <td class="col-15p"> '.$d2_13_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>14</strong></td>
                                <td class="col-15p"> '.$d2_14_01.'</td>
                                <td class="col-15p"> '.$d2_14_02.'</td>
                                <td class="col-15p"> '.$d2_14_03.'</td>
                                <td class="col-15p"> '.$d2_14_04.'</td>
                                <td class="col-15p"> '.$d2_14_05.'</td>
                                <td class="col-15p"> '.$d2_14_06.'</td>
                            </tr>
                            <tr>
                                <td class="col-10p"><strong>15</strong></td>
                                <td class="col-15p"> '.$d2_15_01.'</td>
                                <td class="col-15p"> '.$d2_15_02.'</td>
                                <td class="col-15p"> '.$d2_15_03.'</td>
                                <td class="col-15p"> '.$d2_15_04.'</td>
                                <td class="col-15p"> '.$d2_15_05.'</td>
                                <td class="col-15p"> '.$d2_15_06.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>';
    return $plantilla;
}
function getSubPlantilla3($jsonData){
$obj = json_decode($jsonData);
$d_micro_3 = $obj->{'d_micro_3'};
$d3_01_01 = $d_micro_3->d3_01_01; $d3_01_02 = $d_micro_3->d3_01_02; $d3_01_03 = $d_micro_3->d3_01_03; $d3_01_04 = $d_micro_3->d3_01_04; $d3_01_05 = $d_micro_3->d3_01_05; $d3_01_06 = $d_micro_3->d3_01_06; $d3_01_07 = $d_micro_3->d3_01_07;
$d3_02_01 = $d_micro_3->d3_02_01; $d3_02_02 = $d_micro_3->d3_02_02; $d3_02_03 = $d_micro_3->d3_02_03; $d3_02_04 = $d_micro_3->d3_02_04; $d3_02_05 = $d_micro_3->d3_02_05; $d3_02_06 = $d_micro_3->d3_02_06; $d3_02_07 = $d_micro_3->d3_02_07;
$d3_03_01 = $d_micro_3->d3_03_01; $d3_03_02 = $d_micro_3->d3_03_02; $d3_03_03 = $d_micro_3->d3_03_03; $d3_03_04 = $d_micro_3->d3_03_04; $d3_03_05 = $d_micro_3->d3_03_05; $d3_03_06 = $d_micro_3->d3_03_06; $d3_03_07 = $d_micro_3->d3_03_07;
$d3_04_01 = $d_micro_3->d3_04_01; $d3_04_02 = $d_micro_3->d3_04_02; $d3_04_03 = $d_micro_3->d3_04_03; $d3_04_04 = $d_micro_3->d3_04_04; $d3_04_05 = $d_micro_3->d3_04_05; $d3_04_06 = $d_micro_3->d3_04_06; $d3_04_07 = $d_micro_3->d3_04_07;
$d3_05_01 = $d_micro_3->d3_05_01; $d3_05_02 = $d_micro_3->d3_05_02; $d3_05_03 = $d_micro_3->d3_05_03; $d3_05_04 = $d_micro_3->d3_05_04; $d3_05_05 = $d_micro_3->d3_05_05; $d3_05_06 = $d_micro_3->d3_05_06; $d3_05_07 = $d_micro_3->d3_05_07;
$d3_06_01 = $d_micro_3->d3_06_01; $d3_06_02 = $d_micro_3->d3_06_02; $d3_06_03 = $d_micro_3->d3_06_03; $d3_06_04 = $d_micro_3->d3_06_04; $d3_06_05 = $d_micro_3->d3_06_05; $d3_06_06 = $d_micro_3->d3_06_06; $d3_06_07 = $d_micro_3->d3_06_07;
$d3_07_01 = $d_micro_3->d3_07_01; $d3_07_02 = $d_micro_3->d3_07_02; $d3_07_03 = $d_micro_3->d3_07_03; $d3_07_04 = $d_micro_3->d3_07_04; $d3_07_05 = $d_micro_3->d3_07_05; $d3_07_06 = $d_micro_3->d3_07_06; $d3_07_07 = $d_micro_3->d3_07_07;
$d3_08_01 = $d_micro_3->d3_08_01; $d3_08_02 = $d_micro_3->d3_08_02; $d3_08_03 = $d_micro_3->d3_08_03; $d3_08_04 = $d_micro_3->d3_08_04; $d3_08_05 = $d_micro_3->d3_08_05; $d3_08_06 = $d_micro_3->d3_08_06; $d3_08_07 = $d_micro_3->d3_08_07;
$d3_09_01 = $d_micro_3->d3_09_01; $d3_09_02 = $d_micro_3->d3_09_02; $d3_09_03 = $d_micro_3->d3_09_03; $d3_09_04 = $d_micro_3->d3_09_04; $d3_09_05 = $d_micro_3->d3_09_05; $d3_09_06 = $d_micro_3->d3_09_06; $d3_09_07 = $d_micro_3->d3_09_07;
$d3_10_01 = $d_micro_3->d3_10_01; $d3_10_02 = $d_micro_3->d3_10_02; $d3_10_03 = $d_micro_3->d3_10_03; $d3_10_04 = $d_micro_3->d3_10_04; $d3_10_05 = $d_micro_3->d3_10_05; $d3_10_06 = $d_micro_3->d3_10_06; $d3_10_07 = $d_micro_3->d3_10_07;
$d3_11_01 = $d_micro_3->d3_11_01; $d3_11_02 = $d_micro_3->d3_11_02; $d3_11_03 = $d_micro_3->d3_11_03; $d3_11_04 = $d_micro_3->d3_11_04; $d3_11_05 = $d_micro_3->d3_11_05; $d3_11_06 = $d_micro_3->d3_11_06; $d3_11_07 = $d_micro_3->d3_11_07;
$d3_12_01 = $d_micro_3->d3_12_01; $d3_12_02 = $d_micro_3->d3_12_02; $d3_12_03 = $d_micro_3->d3_12_03; $d3_12_04 = $d_micro_3->d3_12_04; $d3_12_05 = $d_micro_3->d3_12_05; $d3_12_06 = $d_micro_3->d3_12_06; $d3_12_07 = $d_micro_3->d3_12_07;
$d3_13_01 = $d_micro_3->d3_13_01; $d3_13_02 = $d_micro_3->d3_13_02; $d3_13_03 = $d_micro_3->d3_13_03; $d3_13_04 = $d_micro_3->d3_13_04; $d3_13_05 = $d_micro_3->d3_13_05; $d3_13_06 = $d_micro_3->d3_13_06; $d3_13_07 = $d_micro_3->d3_13_07;
$d3_14_01 = $d_micro_3->d3_14_01; $d3_14_02 = $d_micro_3->d3_14_02; $d3_14_03 = $d_micro_3->d3_14_03; $d3_14_04 = $d_micro_3->d3_14_04; $d3_14_05 = $d_micro_3->d3_14_05; $d3_14_06 = $d_micro_3->d3_14_06; $d3_14_07 = $d_micro_3->d3_14_07;
$d3_15_01 = $d_micro_3->d3_15_01; $d3_15_02 = $d_micro_3->d3_15_02; $d3_15_03 = $d_micro_3->d3_15_03; $d3_15_04 = $d_micro_3->d3_15_04; $d3_15_05 = $d_micro_3->d3_15_05; $d3_15_06 = $d_micro_3->d3_15_06; $d3_15_07 = $d_micro_3->d3_15_07;
    $plantilla =
        '<main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-10p"><strong> '.constant('D08').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D11').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D12').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D13').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D14').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D15').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D16').'</strong></td>
                                <td class="col-15p"><strong> '.constant('D17').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>1</strong></td>
                                <td class="col-15p"> '.$d3_01_01.'</td>
                                <td class="col-15p"> '.$d3_01_02.'</td>
                                <td class="col-15p"> '.$d3_01_03.'</td>
                                <td class="col-15p"> '.$d3_01_04.'</td>
                                <td class="col-15p"> '.$d3_01_05.'</td>
                                <td class="col-15p"> '.$d3_01_06.'</td>
                                <td class="col-15p"> '.$d3_01_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 2</strong></td>
                                <td class="col-15p"> '.$d3_02_01.'</td>
                                <td class="col-15p"> '.$d3_02_02.'</td>
                                <td class="col-15p"> '.$d3_02_03.'</td>
                                <td class="col-15p"> '.$d3_02_04.'</td>
                                <td class="col-15p"> '.$d3_02_05.'</td>
                                <td class="col-15p"> '.$d3_02_06.'</td>
                                <td class="col-15p"> '.$d3_02_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 3</strong></td>
                                <td class="col-15p"> '.$d3_03_01.'</td>
                                <td class="col-15p"> '.$d3_03_02.'</td>
                                <td class="col-15p"> '.$d3_03_03.'</td>
                                <td class="col-15p"> '.$d3_03_04.'</td>
                                <td class="col-15p"> '.$d3_03_05.'</td>
                                <td class="col-15p"> '.$d3_03_06.'</td>
                                <td class="col-15p"> '.$d3_03_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 4</strong></td>
                                <td class="col-15p"> '.$d3_04_01.'</td>
                                <td class="col-15p"> '.$d3_04_02.'</td>
                                <td class="col-15p"> '.$d3_04_03.'</td>
                                <td class="col-15p"> '.$d3_04_04.'</td>
                                <td class="col-15p"> '.$d3_04_05.'</td>
                                <td class="col-15p"> '.$d3_04_06.'</td>
                                <td class="col-15p"> '.$d3_04_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 5</strong></td>
                                <td class="col-15p"> '.$d3_05_01.'</td>
                                <td class="col-15p"> '.$d3_05_02.'</td>
                                <td class="col-15p"> '.$d3_05_03.'</td>
                                <td class="col-15p"> '.$d3_05_04.'</td>
                                <td class="col-15p"> '.$d3_05_05.'</td>
                                <td class="col-15p"> '.$d3_05_06.'</td>
                                <td class="col-15p"> '.$d3_05_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 6</strong></td>
                                <td class="col-15p"> '.$d3_06_01.'</td>
                                <td class="col-15p"> '.$d3_06_02.'</td>
                                <td class="col-15p"> '.$d3_06_03.'</td>
                                <td class="col-15p"> '.$d3_06_04.'</td>
                                <td class="col-15p"> '.$d3_06_05.'</td>
                                <td class="col-15p"> '.$d3_06_06.'</td>
                                <td class="col-15p"> '.$d3_06_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 7</strong></td>
                                <td class="col-15p"> '.$d3_07_01.'</td>
                                <td class="col-15p"> '.$d3_07_02.'</td>
                                <td class="col-15p"> '.$d3_07_03.'</td>
                                <td class="col-15p"> '.$d3_07_04.'</td>
                                <td class="col-15p"> '.$d3_07_05.'</td>
                                <td class="col-15p"> '.$d3_07_06.'</td>
                                <td class="col-15p"> '.$d3_07_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 8</strong></td>
                                <td class="col-15p"> '.$d3_08_01.'</td>
                                <td class="col-15p"> '.$d3_08_02.'</td>
                                <td class="col-15p"> '.$d3_08_03.'</td>
                                <td class="col-15p"> '.$d3_08_04.'</td>
                                <td class="col-15p"> '.$d3_08_05.'</td>
                                <td class="col-15p"> '.$d3_08_06.'</td>
                                <td class="col-15p"> '.$d3_08_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong> 9</strong></td>
                                <td class="col-15p"> '.$d3_09_01.'</td>
                                <td class="col-15p"> '.$d3_09_02.'</td>
                                <td class="col-15p"> '.$d3_09_03.'</td>
                                <td class="col-15p"> '.$d3_09_04.'</td>
                                <td class="col-15p"> '.$d3_09_05.'</td>
                                <td class="col-15p"> '.$d3_09_06.'</td>
                                <td class="col-15p"> '.$d3_09_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>10</strong></td>
                                <td class="col-15p"> '.$d3_10_01.'</td>
                                <td class="col-15p"> '.$d3_10_02.'</td>
                                <td class="col-15p"> '.$d3_10_03.'</td>
                                <td class="col-15p"> '.$d3_10_04.'</td>
                                <td class="col-15p"> '.$d3_10_05.'</td>
                                <td class="col-15p"> '.$d3_10_06.'</td>
                                <td class="col-15p"> '.$d3_10_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>11</strong></td>
                                <td class="col-15p"> '.$d3_11_01.'</td>
                                <td class="col-15p"> '.$d3_11_02.'</td>
                                <td class="col-15p"> '.$d3_11_03.'</td>
                                <td class="col-15p"> '.$d3_11_04.'</td>
                                <td class="col-15p"> '.$d3_11_05.'</td>
                                <td class="col-15p"> '.$d3_11_06.'</td>
                                <td class="col-15p"> '.$d3_11_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>12</strong></td>
                                <td class="col-15p"> '.$d3_12_01.'</td>
                                <td class="col-15p"> '.$d3_12_02.'</td>
                                <td class="col-15p"> '.$d3_12_03.'</td>
                                <td class="col-15p"> '.$d3_12_04.'</td>
                                <td class="col-15p"> '.$d3_12_05.'</td>
                                <td class="col-15p"> '.$d3_12_06.'</td>
                                <td class="col-15p"> '.$d3_12_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>13</strong></td>
                                <td class="col-15p"> '.$d3_13_01.'</td>
                                <td class="col-15p"> '.$d3_13_02.'</td>
                                <td class="col-15p"> '.$d3_13_03.'</td>
                                <td class="col-15p"> '.$d3_13_04.'</td>
                                <td class="col-15p"> '.$d3_13_05.'</td>
                                <td class="col-15p"> '.$d3_13_06.'</td>
                                <td class="col-15p"> '.$d3_13_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>14</strong></td>
                                <td class="col-15p"> '.$d3_14_01.'</td>
                                <td class="col-15p"> '.$d3_14_02.'</td>
                                <td class="col-15p"> '.$d3_14_03.'</td>
                                <td class="col-15p"> '.$d3_14_04.'</td>
                                <td class="col-15p"> '.$d3_14_05.'</td>
                                <td class="col-15p"> '.$d3_14_06.'</td>
                                <td class="col-15p"> '.$d3_14_07.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>15</strong></td>
                                <td class="col-15p"> '.$d3_15_01.'</td>
                                <td class="col-15p"> '.$d3_15_02.'</td>
                                <td class="col-15p"> '.$d3_15_03.'</td>
                                <td class="col-15p"> '.$d3_15_04.'</td>
                                <td class="col-15p"> '.$d3_15_05.'</td>
                                <td class="col-15p"> '.$d3_15_06.'</td>
                                <td class="col-15p"> '.$d3_15_07.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>';
    return $plantilla;
}
?>