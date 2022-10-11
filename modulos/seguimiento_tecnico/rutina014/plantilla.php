<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idrutinax){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, false);
    $footerPlantilla = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '014');
    $footerPlantilla .= $reporteFotog;

    //---------------------------
    $d_relevamiento = $obj->{'d_relevamiento'};

    $d_01_01 = $d_relevamiento->d_01_01; $d_01_02 = $d_relevamiento->d_01_02;
    $d_02_01 = $d_relevamiento->d_02_01; $d_02_02 = $d_relevamiento->d_02_02;
    $d_03_01 = $d_relevamiento->d_03_01; $d_03_02 = $d_relevamiento->d_03_02;
    $d_04_01 = $d_relevamiento->d_04_01; $d_04_02 = $d_relevamiento->d_04_02;

    $d_sectores = $obj->{'d_sectores'};

    $bts_01_01 = $d_sectores->bts_01_01;
    $bts_02_01 = $d_sectores->bts_02_01;
    $bts_03_01 = $d_sectores->bts_03_01;
    $bts_04_01 = $d_sectores->bts_04_01;
    $d1_01_01 = $d_sectores->d1_01_01; $d1_01_02 = $d_sectores->d1_01_02; $d1_01_03 = $d_sectores->d1_01_03; $d1_01_04 = $d_sectores->d1_01_04; $d1_01_05 = $d_sectores->d1_01_05; $d1_01_06 = $d_sectores->d1_01_06; $d1_01_07 = $d_sectores->d1_01_07; $d1_01_08 = $d_sectores->d1_01_08; $d1_01_09 = $d_sectores->d1_01_09; $d1_01_10 = $d_sectores->d1_01_10; $d1_01_11 = $d_sectores->d1_01_11; $d1_01_12 = $d_sectores->d1_01_12; $d1_01_13 = $d_sectores->d1_01_13;
    $d1_02_01 = $d_sectores->d1_02_01; $d1_02_02 = $d_sectores->d1_02_02; $d1_02_03 = $d_sectores->d1_02_03; $d1_02_04 = $d_sectores->d1_02_04; $d1_02_05 = $d_sectores->d1_02_05; $d1_02_06 = $d_sectores->d1_02_06; $d1_02_07 = $d_sectores->d1_02_07; $d1_02_08 = $d_sectores->d1_02_08; $d1_02_09 = $d_sectores->d1_02_09; $d1_02_10 = $d_sectores->d1_02_10; $d1_02_11 = $d_sectores->d1_02_11; $d1_02_12 = $d_sectores->d1_02_12; $d1_02_13 = $d_sectores->d1_02_13;
    $d1_03_01 = $d_sectores->d1_03_01; $d1_03_02 = $d_sectores->d1_03_02; $d1_03_03 = $d_sectores->d1_03_03; $d1_03_04 = $d_sectores->d1_03_04; $d1_03_05 = $d_sectores->d1_03_05; $d1_03_06 = $d_sectores->d1_03_06; $d1_03_07 = $d_sectores->d1_03_07; $d1_03_08 = $d_sectores->d1_03_08; $d1_03_09 = $d_sectores->d1_03_09; $d1_03_10 = $d_sectores->d1_03_10; $d1_03_11 = $d_sectores->d1_03_11; $d1_03_12 = $d_sectores->d1_03_12; $d1_03_13 = $d_sectores->d1_03_13;
    $d1_04_01 = $d_sectores->d1_04_01; $d1_04_02 = $d_sectores->d1_04_02; $d1_04_03 = $d_sectores->d1_04_03; $d1_04_04 = $d_sectores->d1_04_04; $d1_04_05 = $d_sectores->d1_04_05; $d1_04_06 = $d_sectores->d1_04_06; $d1_04_07 = $d_sectores->d1_04_07; $d1_04_08 = $d_sectores->d1_04_08; $d1_04_09 = $d_sectores->d1_04_09; $d1_04_10 = $d_sectores->d1_04_10; $d1_04_11 = $d_sectores->d1_04_11; $d1_04_12 = $d_sectores->d1_04_12; $d1_04_13 = $d_sectores->d1_04_13;
    $d1_05_01 = $d_sectores->d1_05_01; $d1_05_02 = $d_sectores->d1_05_02; $d1_05_03 = $d_sectores->d1_05_03; $d1_05_04 = $d_sectores->d1_05_04; $d1_05_05 = $d_sectores->d1_05_05; $d1_05_06 = $d_sectores->d1_05_06; $d1_05_07 = $d_sectores->d1_05_07; $d1_05_08 = $d_sectores->d1_05_08; $d1_05_09 = $d_sectores->d1_05_09; $d1_05_10 = $d_sectores->d1_05_10; $d1_05_11 = $d_sectores->d1_05_11; $d1_05_12 = $d_sectores->d1_05_12; $d1_05_13 = $d_sectores->d1_05_13;
    $d1_06_01 = $d_sectores->d1_06_01; $d1_06_02 = $d_sectores->d1_06_02; $d1_06_03 = $d_sectores->d1_06_03; $d1_06_04 = $d_sectores->d1_06_04; $d1_06_05 = $d_sectores->d1_06_05; $d1_06_06 = $d_sectores->d1_06_06; $d1_06_07 = $d_sectores->d1_06_07; $d1_06_08 = $d_sectores->d1_06_08; $d1_06_09 = $d_sectores->d1_06_09; $d1_06_10 = $d_sectores->d1_06_10; $d1_06_11 = $d_sectores->d1_06_11; $d1_06_12 = $d_sectores->d1_06_12; $d1_06_13 = $d_sectores->d1_06_13;

   // $d_sectores = $obj->{'d_sectores'};
    $subPlantilla_NodoB  = getSubPlantilla_NodoB($jsonData);
    $subPlantilla_eNodoB = getSubPlantilla_eNodoB($jsonData);


    //E. Desarrollo de Rutina de Mantenimiento
    $e_desarrollo = $obj->{'e_desarrollo'};
    $e1_01_01 = $e_desarrollo->e1_01_01 ? $check : $uncheck; $e1_01_02 = $e_desarrollo->e1_01_02 ? $check : $uncheck; $e1_01_03 = $e_desarrollo->e1_01_03;
    $e1_02_01 = $e_desarrollo->e1_02_01 ? $check : $uncheck; $e1_02_02 = $e_desarrollo->e1_02_02 ? $check : $uncheck; $e1_02_03 = $e_desarrollo->e1_02_03;
    $e1_03_01 = $e_desarrollo->e1_03_01 ? $check : $uncheck; $e1_03_02 = $e_desarrollo->e1_03_02 ? $check : $uncheck; $e1_03_03 = $e_desarrollo->e1_03_03;
    $e1_04_01 = $e_desarrollo->e1_04_01 ? $check : $uncheck; $e1_04_02 = $e_desarrollo->e1_04_02 ? $check : $uncheck; $e1_04_03 = $e_desarrollo->e1_04_03;
    $e1_05_01 = $e_desarrollo->e1_05_01 ? $check : $uncheck; $e1_05_02 = $e_desarrollo->e1_05_02 ? $check : $uncheck; $e1_05_03 = $e_desarrollo->e1_05_03;
    $e1_06_01 = $e_desarrollo->e1_06_01 ? $check : $uncheck; $e1_06_02 = $e_desarrollo->e1_06_02 ? $check : $uncheck; $e1_06_03 = $e_desarrollo->e1_06_03;
    $e1_07_01 = $e_desarrollo->e1_07_01 ? $check : $uncheck; $e1_07_02 = $e_desarrollo->e1_07_02 ? $check : $uncheck; $e1_07_03 = $e_desarrollo->e1_07_03;
    $e1_08_01 = $e_desarrollo->e1_08_01 ? $check : $uncheck; $e1_08_02 = $e_desarrollo->e1_08_02 ? $check : $uncheck; $e1_08_03 = $e_desarrollo->e1_08_03;
    $e1_09_01 = $e_desarrollo->e1_09_01 ? $check : $uncheck; $e1_09_02 = $e_desarrollo->e1_09_02 ? $check : $uncheck; $e1_09_03 = $e_desarrollo->e1_09_03;
    $e1_10_01 = $e_desarrollo->e1_10_01 ? $check : $uncheck; $e1_10_02 = $e_desarrollo->e1_10_02 ? $check : $uncheck; $e1_10_03 = $e_desarrollo->e1_10_03;
    $e1_11_01 = $e_desarrollo->e1_11_01 ? $check : $uncheck; $e1_11_02 = $e_desarrollo->e1_11_02 ? $check : $uncheck; $e1_11_03 = $e_desarrollo->e1_11_03;
    $e1_12_01 = $e_desarrollo->e1_12_01 ? $check : $uncheck; $e1_12_02 = $e_desarrollo->e1_12_02 ? $check : $uncheck; $e1_12_03 = $e_desarrollo->e1_12_03;
    $e1_13_01 = $e_desarrollo->e1_13_01 ? $check : $uncheck; $e1_13_02 = $e_desarrollo->e1_13_02 ? $check : $uncheck; $e1_13_03 = $e_desarrollo->e1_13_03;
    $e1_14_01 = $e_desarrollo->e1_14_01 ? $check : $uncheck; $e1_14_02 = $e_desarrollo->e1_14_02 ? $check : $uncheck; $e1_14_03 = $e_desarrollo->e1_14_03;
    $e1_15_01 = $e_desarrollo->e1_15_01 ? $check : $uncheck; $e1_15_02 = $e_desarrollo->e1_15_02 ? $check : $uncheck; $e1_15_03 = $e_desarrollo->e1_15_03;
    $e1_16_01 = $e_desarrollo->e1_16_01 ? $check : $uncheck; $e1_16_02 = $e_desarrollo->e1_16_02 ? $check : $uncheck; $e1_16_03 = $e_desarrollo->e1_16_03;


    $e2_17_01 = $e_desarrollo->e2_17_01; $e2_17_02 = $e_desarrollo->e2_17_02; $e2_17_03 = $e_desarrollo->e2_17_03;
    $e2_18_01 = $e_desarrollo->e2_18_01; $e2_18_02 = $e_desarrollo->e2_18_02; $e2_18_03 = $e_desarrollo->e2_18_03;
    $e2_19_01 = $e_desarrollo->e2_19_01; $e2_19_02 = $e_desarrollo->e2_19_02; $e2_19_03 = $e_desarrollo->e2_19_03;

    $e3_01_01 = $e_desarrollo->e3_01_01; $e3_01_02 = $e_desarrollo->e3_01_02;
    $e3_02_01 = $e_desarrollo->e3_02_01; $e3_02_02 = $e_desarrollo->e3_02_02;
    $e3_03_01 = $e_desarrollo->e3_03_01; $e3_03_02 = $e_desarrollo->e3_03_02;
    $e3_04_01 = $e_desarrollo->e3_04_01; $e3_04_02 = $e_desarrollo->e3_04_02;
    $e3_05_01 = $e_desarrollo->e3_05_01; $e3_05_02 = $e_desarrollo->e3_05_02;
    $e3_06_01 = $e_desarrollo->e3_06_01; $e3_06_02 = $e_desarrollo->e3_06_02;
    $e3_07_01 = $e_desarrollo->e3_07_01; $e3_07_02 = $e_desarrollo->e3_07_02;
    $e3_08_01 = $e_desarrollo->e3_08_01; $e3_08_02 = $e_desarrollo->e3_08_02;
    $e3_09_01 = $e_desarrollo->e3_09_01; $e3_09_02 = $e_desarrollo->e3_09_02;
    $e3_10_01 = $e_desarrollo->e3_10_01; $e3_10_02 = $e_desarrollo->e3_10_02;
    $e3_11_01 = $e_desarrollo->e3_11_01; $e3_11_02 = $e_desarrollo->e3_11_02;
    $e3_12_01 = $e_desarrollo->e3_12_01; $e3_12_02 = $e_desarrollo->e3_12_02;

    $e4_01_01 = $e_desarrollo->e4_01_01; $e4_01_02 = $e_desarrollo->e4_01_02; $e4_01_03 = $e_desarrollo->e4_01_03; $e4_01_04 = $e_desarrollo->e4_01_04; $e4_01_05 = $e_desarrollo->e4_01_05;
    $e4_02_01 = $e_desarrollo->e4_02_01; $e4_02_02 = $e_desarrollo->e4_02_02; $e4_02_03 = $e_desarrollo->e4_02_03; $e4_02_04 = $e_desarrollo->e4_02_04; $e4_02_05 = $e_desarrollo->e4_02_05;
    $e4_03_01 = $e_desarrollo->e4_03_01; $e4_03_02 = $e_desarrollo->e4_03_02; $e4_03_03 = $e_desarrollo->e4_03_03; $e4_03_04 = $e_desarrollo->e4_03_04; $e4_03_05 = $e_desarrollo->e4_03_05;
    $e4_04_01 = $e_desarrollo->e4_04_01; $e4_04_02 = $e_desarrollo->e4_04_02; $e4_04_03 = $e_desarrollo->e4_04_03; $e4_04_04 = $e_desarrollo->e4_04_04; $e4_04_05 = $e_desarrollo->e4_04_05;
    $e4_05_01 = $e_desarrollo->e4_05_01; $e4_05_02 = $e_desarrollo->e4_05_02; $e4_05_03 = $e_desarrollo->e4_05_03; $e4_05_04 = $e_desarrollo->e4_05_04; $e4_05_05 = $e_desarrollo->e4_05_05;
    $e4_06_01 = $e_desarrollo->e4_06_01; $e4_06_02 = $e_desarrollo->e4_06_02; $e4_06_03 = $e_desarrollo->e4_06_03; $e4_06_04 = $e_desarrollo->e4_06_04; $e4_06_05 = $e_desarrollo->e4_06_05;

    $e5_01_01 = $e_desarrollo->e5_01_01; $e5_01_02 = $e_desarrollo->e5_01_02; $e5_01_03 = $e_desarrollo->e5_01_03; $e5_01_04 = $e_desarrollo->e5_01_04; $e5_01_05 = $e_desarrollo->e5_01_05; $e5_01_06 = $e_desarrollo->e5_01_06; $e5_01_07 = $e_desarrollo->e5_01_07; $e5_01_08 = $e_desarrollo->e5_01_08; $e5_01_09 = $e_desarrollo->e5_01_09; $e5_01_10 = $e_desarrollo->e5_01_10; $e5_01_11 = $e_desarrollo->e5_01_11;
    $e5_02_01 = $e_desarrollo->e5_02_01; $e5_02_02 = $e_desarrollo->e5_02_02; $e5_02_03 = $e_desarrollo->e5_02_03; $e5_02_04 = $e_desarrollo->e5_02_04; $e5_02_05 = $e_desarrollo->e5_02_05; $e5_02_06 = $e_desarrollo->e5_02_06; $e5_02_07 = $e_desarrollo->e5_02_07; $e5_02_08 = $e_desarrollo->e5_02_08; $e5_02_09 = $e_desarrollo->e5_02_09; $e5_02_10 = $e_desarrollo->e5_02_10; $e5_02_11 = $e_desarrollo->e5_02_11;
    $e5_03_01 = $e_desarrollo->e5_03_01; $e5_03_02 = $e_desarrollo->e5_03_02; $e5_03_03 = $e_desarrollo->e5_03_03; $e5_03_04 = $e_desarrollo->e5_03_04; $e5_03_05 = $e_desarrollo->e5_03_05; $e5_03_06 = $e_desarrollo->e5_03_06; $e5_03_07 = $e_desarrollo->e5_03_07; $e5_03_08 = $e_desarrollo->e5_03_08; $e5_03_09 = $e_desarrollo->e5_03_09; $e5_03_10 = $e_desarrollo->e5_03_10; $e5_03_11 = $e_desarrollo->e5_03_11;


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
               <main>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td class="col-40p">'.constant('D01').'</td>
                                                    <td class="col-60p">'.$d_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D02').'</td>
                                                    <td class="col-60p">'.$d_01_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D03').'</td>
                                                    <td class="col-60p">'.$d_02_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D04').'</td>
                                                    <td class="col-60p">'.$d_02_02.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D05').'</td>
                                                    <td class="col-60p">'.$d_03_01.'</td>
                                               </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D06').'</td>
                                                    <td class="col-60p">'.$d_03_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D07').'</td>
                                                    <td class="col-60p">'.$d_04_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D08').'</td>
                                                    <td class="col-60p">'.$d_04_02.'</td>
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
                    <div class="notices">
                        <div class="notice"><strong>'.constant('ETITLE').'</strong></div>
                    </div>
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-40p">'.constant('E01').'</td>
                                <td class="col-10p">'.$e1_01_01.' Si</td>
                                <td class="col-10p">'.$e1_01_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_01_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E02').'</td>
                                <td class="col-10p">'.$e1_02_01.' Si</td>
                                <td class="col-10p">'.$e1_02_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_02_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E03').'</td>
                                <td class="col-10p">'.$e1_03_01.' Si</td>
                                <td class="col-10p">'.$e1_03_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_03_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E04').'</td>
                                <td class="col-10p">'.$e1_04_01.' Si</td>
                                <td class="col-10p">'.$e1_04_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_04_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E05').'</td>
                                <td class="col-10p">'.$e1_05_01.' Si</td>
                                <td class="col-10p">'.$e1_05_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_05_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E06').'</td>
                                <td class="col-10p">'.$e1_06_01.' Si</td>
                                <td class="col-10p">'.$e1_06_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_06_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E07').'</td>
                                <td class="col-10p">'.$e1_07_01.' Si</td>
                                <td class="col-10p">'.$e1_07_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_07_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E08').'</td>
                                <td class="col-10p">'.$e1_08_01.' Si</td>
                                <td class="col-10p">'.$e1_08_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_08_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E09').'</td>
                                <td class="col-10p">'.$e1_09_01.' Si</td>
                                <td class="col-10p">'.$e1_09_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_09_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E10').'</td>
                                <td class="col-10p">'.$e1_10_01.' Si</td>
                                <td class="col-10p">'.$e1_10_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_10_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E11').'</td>
                                <td class="col-10p">'.$e1_11_01.' Si</td>
                                <td class="col-10p">'.$e1_11_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_11_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E12').'</td>
                                <td class="col-10p">'.$e1_12_01.' Si</td>
                                <td class="col-10p">'.$e1_12_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_12_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E13').'</td>
                                <td class="col-10p">'.$e1_13_01.' Si</td>
                                <td class="col-10p">'.$e1_13_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_13_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E14').'</td>
                                <td class="col-10p">'.$e1_14_01.' Si</td>
                                <td class="col-10p">'.$e1_14_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_14_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E15').'</td>
                                <td class="col-10p">'.$e1_15_01.' Si</td>
                                <td class="col-10p">'.$e1_15_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_15_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E16').'</td>
                                <td class="col-10p">'.$e1_16_01.' Si</td>
                                <td class="col-10p">'.$e1_16_02.' No</td>
                                <td class="col-10p">Obs. '.$e1_16_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="4"><strong>'.constant('ETITLE1').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-25p"><strong>Tecnologia</strong></td>
                                <td class="col-25p"><strong>Existe/No Existe</strong></td>
                                <td class="col-25p"><strong>Solucion</strong></td>
                                <td class="col-25p"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-25p">2G</td>
                                <td class="col-25p">'.$e2_17_01.'</td>
                                <td class="col-25p">'.$e2_17_02.'</td>
                                <td class="col-25p">'.$e2_17_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-25p">3G</td>
                                <td class="col-25p">'.$e2_18_01.'</td>
                                <td class="col-25p">'.$e2_18_02.'</td>
                                <td class="col-25p">'.$e2_18_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-25p">LTE</td>
                                <td class="col-25p">'.$e2_19_01.'</td>
                                <td class="col-25p">'.$e2_19_02.'</td>
                                <td class="col-25p">'.$e2_19_03.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-40p"><strong>Verificar alarmas externas</strong></td>
                                <td class="col-20p"><strong>Estado</strong></td>
                                <td class="col-40p"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E17').'</td>
                                <td class="col-20p">'.$e3_01_01.'</td>
                                <td class="col-40p">'.$e3_01_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E18').'</td>
                                <td class="col-20p">'.$e3_02_01.'</td>
                                <td class="col-40p">'.$e3_02_02.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E19').'</td>
                                <td class="col-20p">'.$e3_03_01.'</td>
                                <td class="col-40p">'.$e3_03_02.'</td>
                             </tr>
                             <tr>
                                <td class="col-40p">'.constant('E20').'</td>
                                <td class="col-20p">'.$e3_04_01.'</td>
                                <td class="col-40p">'.$e3_04_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E21').'</td>
                                <td class="col-20p">'.$e3_05_01.'</td>
                                <td class="col-40p">'.$e3_05_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E22').'</td>
                                <td class="col-20p">'.$e3_06_01.'</td>
                                <td class="col-40p">'.$e3_06_02.'</td>
                             </tr>
                             <tr>
                                <td class="col-40p">'.constant('E23').'</td>
                                <td class="col-20p">'.$e3_07_01.'</td>
                                <td class="col-40p">'.$e3_07_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E24').'</td>
                                <td class="col-20p">'.$e3_08_01.'</td>
                                <td class="col-40p">'.$e3_08_02.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E19').'</td>
                                <td class="col-20p">'.$e3_09_01.'</td>
                                <td class="col-40p">'.$e3_09_02.'</td>
                             </tr>
                             <tr>
                                <td class="col-40p">'.constant('E17').'</td>
                                <td class="col-20p">'.$e3_10_01.'</td>
                                <td class="col-40p">'.$e3_10_02.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E18').'</td>
                                <td class="col-20p">'.$e3_11_01.'</td>
                                <td class="col-40p">'.$e3_11_02.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E19').'</td>
                                <td class="col-20p">'.$e3_12_01.'</td>
                                <td class="col-40p">'.$e3_12_02.'</td>
                             </tr>
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-15p"><strong>'.constant('ETITLE2').'</strong></td>
                                <td class="col-15p"><strong>Numero A</strong></td>
                                <td class="col-15p"><strong>Numero B</strong></td>
                                <td class="col-15p"><strong>Prueba exitosa?</strong></td>
                                <td class="col-15p"><strong>Fecha y hora</strong></td>
                                <td class="col-15p"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-15p">'.constant('E29').'</td>
                                <td class="col-15p">'.$e4_01_01.'</td>
                                <td class="col-15p">'.$e4_01_02.'</td>
                                <td class="col-15p">'.$e4_01_03.'</td>
                                <td class="col-15p">'.$e4_01_04.'</td>
                                <td class="col-15p">'.$e4_01_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-15p">'.constant('E30').'</td>
                                <td class="col-15p">'.$e4_02_01.'</td>
                                <td class="col-15p">'.$e4_02_02.'</td>
                                <td class="col-15p">'.$e4_02_03.'</td>
                                <td class="col-15p">'.$e4_02_04.'</td>
                                <td class="col-15p">'.$e4_02_05.'</td>
                            </tr>
                             <tr>
                                <td class="col-15p">'.constant('E31').'</td>
                                <td class="col-15p">'.$e4_03_01.'</td>
                                <td class="col-15p">'.$e4_03_02.'</td>
                                <td class="col-15p">'.$e4_03_03.'</td>
                                <td class="col-15p">'.$e4_03_04.'</td>
                                <td class="col-15p">'.$e4_03_05.'</td>
                            </tr>
                             <tr>
                                <td class="col-15p">'.constant('E32').'</td>
                                <td class="col-15p">'.$e4_04_01.'</td>
                                <td class="col-15p">'.$e4_04_02.'</td>
                                <td class="col-15p">'.$e4_04_03.'</td>
                                <td class="col-15p">'.$e4_04_04.'</td>
                                <td class="col-15p">'.$e4_04_05.'</td>
                            </tr>
                             <tr>
                                <td class="col-15p">'.constant('E33').'</td>
                                <td class="col-15p">'.$e4_05_01.'</td>
                                <td class="col-15p">'.$e4_05_02.'</td>
                                <td class="col-15p">'.$e4_05_03.'</td>
                                <td class="col-15p">'.$e4_05_04.'</td>
                                <td class="col-15p">'.$e4_05_05.'</td>
                            </tr>
                             <tr>
                                <td class="col-15p">'.constant('E34').'</td>
                                <td class="col-15p">'.$e4_06_01.'</td>
                                <td class="col-15p">'.$e4_06_02.'</td>
                                <td class="col-15p">'.$e4_06_03.'</td>
                                <td class="col-15p">'.$e4_06_04.'</td>
                                <td class="col-15p">'.$e4_06_05.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="3"><strong>Medida de ROE</strong></td>
                                <td colspan="3"><strong>Medida del Delta (R1-R2<=3)</strong></td>
                                <td colspan="3"><strong>Medida del RDSI (LTE)</strong></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                 <td><strong>Tecnologia</strong></td>
                                 <td><strong>Sector 1</strong></td>
                                 <td><strong>Sector 2</strong></td>
                                 <td><strong>Sector 3</strong></td>
                                 <td><strong>Sector 1</strong></td>
                                 <td><strong>Sector 2</strong></td>
                                 <td><strong>Sector 3</strong></td>
                                 <td><strong>Sector 1</strong></td>
                                 <td><strong>Sector 2</strong></td>
                                 <td><strong>Sector 3</strong></td>
                                 <td><strong>N. de Antenas</strong></td>
                                 <td><strong>N. de RRU</strong></td>
                             </tr>
                            <tr>
                                <td class="col-15p">2G</td>
                                <td class="col-5p">'.$e5_01_01.'</td>
                                <td class="col-5p">'.$e5_01_02.'</td>
                                <td class="col-5p">'.$e5_01_03.'</td>
                                <td class="col-5p">'.$e5_01_04.'</td>
                                <td class="col-5p">'.$e5_01_05.'</td>
                                <td class="col-5p">'.$e5_01_06.'</td>
                                <td class="col-5p">'.$e5_01_07.'</td>
                                <td class="col-5p">'.$e5_01_08.'</td>
                                <td class="col-5p">'.$e5_01_09.'</td>
                                <td class="col-5p">'.$e5_01_10.'</td>
                                <td class="col-5p">'.$e5_01_11.'</td>
                            </tr>
                            <tr>
                                <td class="col-15p">3G</td>
                                <td class="col-5p">'.$e5_02_01.'</td>
                                <td class="col-5p">'.$e5_02_02.'</td>
                                <td class="col-5p">'.$e5_02_03.'</td>
                                <td class="col-5p">'.$e5_02_04.'</td>
                                <td class="col-5p">'.$e5_02_05.'</td>
                                <td class="col-5p">'.$e5_02_06.'</td>
                                <td class="col-5p">'.$e5_02_07.'</td>
                                <td class="col-5p">'.$e5_02_08.'</td>
                                <td class="col-5p">'.$e5_02_09.'</td>
                                <td class="col-5p">'.$e5_02_10.'</td>
                                <td class="col-5p">'.$e5_02_11.'</td>
                            </tr>
                            <tr>
                                <td class="col-15p">LTE</td>
                                <td class="col-5p">'.$e5_03_01.'</td>
                                <td class="col-5p">'.$e5_03_02.'</td>
                                <td class="col-5p">'.$e5_03_03.'</td>
                                <td class="col-5p">'.$e5_03_04.'</td>
                                <td class="col-5p">'.$e5_03_05.'</td>
                                <td class="col-5p">'.$e5_03_06.'</td>
                                <td class="col-5p">'.$e5_03_07.'</td>
                                <td class="col-5p">'.$e5_03_08.'</td>
                                <td class="col-5p">'.$e5_03_09.'</td>
                                <td class="col-5p">'.$e5_03_10.'</td>
                                <td class="col-5p">'.$e5_03_11.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
               </main>
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('DTITLE1').'</strong></div>
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
                                                    <td class="col-40p">'.constant('D01_01').'</td>
                                                    <td class="col-60p">'.$bts_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D01_02').'</td>
                                                    <td class="col-60p">'.$bts_02_01.'</td>
                                                </tr>
                                             </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D01_03').'</td>
                                                    <td class="col-60p">'.$bts_03_01.'</td>
                                               </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D01_04').'</td>
                                                    <td class="col-60p">'.$bts_04_01.'</td>
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
                                    <td>Sector</td>
                                    <td>LOCAL CELL ID</td>
                                    <td>Banda MHz</td>
                                    <td>Modelo RBS</td>
                                    <td>Tipo de Antena</td>
                                    <td>Marca antena</td>
                                    <td>Modelo antena</td>
                                    <td>Azimut</td>
                                    <td>Tilt Mecánico</td>
                                    <td>Tilt Eléctrico</td>
                                    <td>Ángulo Apertura</td>
                                    <td>Altura Antena (m)</td>
                                    <td>Tiene RET</td>
                                    <td>Modelo RRU</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d1_01_01.'</td>
                                    <td>'.$d1_01_02.'</td>
                                    <td>'.$d1_01_03.'</td>
                                    <td>'.$d1_01_04.'</td>
                                    <td>'.$d1_01_05.'</td>
                                    <td>'.$d1_01_06.'</td>
                                    <td>'.$d1_01_07.'</td>
                                    <td>'.$d1_01_08.'</td>
                                    <td>'.$d1_01_09.'</td>
                                    <td>'.$d1_01_10.'</td>
                                    <td>'.$d1_01_11.'</td>
                                    <td>'.$d1_01_12.'</td>
                                    <td>'.$d1_01_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d1_02_01.'</td>
                                    <td>'.$d1_02_02.'</td>
                                    <td>'.$d1_02_03.'</td>
                                    <td>'.$d1_02_04.'</td>
                                    <td>'.$d1_02_05.'</td>
                                    <td>'.$d1_02_06.'</td>
                                    <td>'.$d1_02_07.'</td>
                                    <td>'.$d1_02_08.'</td>
                                    <td>'.$d1_02_09.'</td>
                                    <td>'.$d1_02_10.'</td>
                                    <td>'.$d1_02_11.'</td>
                                    <td>'.$d1_02_12.'</td>
                                    <td>'.$d1_02_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d1_03_01.'</td>
                                    <td>'.$d1_03_02.'</td>
                                    <td>'.$d1_03_03.'</td>
                                    <td>'.$d1_03_04.'</td>
                                    <td>'.$d1_03_05.'</td>
                                    <td>'.$d1_03_06.'</td>
                                    <td>'.$d1_03_07.'</td>
                                    <td>'.$d1_03_08.'</td>
                                    <td>'.$d1_03_09.'</td>
                                    <td>'.$d1_03_10.'</td>
                                    <td>'.$d1_03_11.'</td>
                                    <td>'.$d1_03_12.'</td>
                                    <td>'.$d1_03_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d1_04_01.'</td>
                                    <td>'.$d1_04_02.'</td>
                                    <td>'.$d1_04_03.'</td>
                                    <td>'.$d1_04_04.'</td>
                                    <td>'.$d1_04_05.'</td>
                                    <td>'.$d1_04_06.'</td>
                                    <td>'.$d1_04_07.'</td>
                                    <td>'.$d1_04_08.'</td>
                                    <td>'.$d1_04_09.'</td>
                                    <td>'.$d1_04_10.'</td>
                                    <td>'.$d1_04_11.'</td>
                                    <td>'.$d1_04_12.'</td>
                                    <td>'.$d1_04_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d1_05_01.'</td>
                                    <td>'.$d1_05_02.'</td>
                                    <td>'.$d1_05_03.'</td>
                                    <td>'.$d1_05_04.'</td>
                                    <td>'.$d1_05_05.'</td>
                                    <td>'.$d1_05_06.'</td>
                                    <td>'.$d1_05_07.'</td>
                                    <td>'.$d1_05_08.'</td>
                                    <td>'.$d1_05_09.'</td>
                                    <td>'.$d1_05_10.'</td>
                                    <td>'.$d1_05_11.'</td>
                                    <td>'.$d1_05_12.'</td>
                                    <td>'.$d1_05_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d1_06_01.'</td>
                                    <td>'.$d1_06_02.'</td>
                                    <td>'.$d1_06_03.'</td>
                                    <td>'.$d1_06_04.'</td>
                                    <td>'.$d1_06_05.'</td>
                                    <td>'.$d1_06_06.'</td>
                                    <td>'.$d1_06_07.'</td>
                                    <td>'.$d1_06_08.'</td>
                                    <td>'.$d1_06_09.'</td>
                                    <td>'.$d1_06_10.'</td>
                                    <td>'.$d1_06_11.'</td>
                                    <td>'.$d1_06_12.'</td>
                                    <td>'.$d1_06_13.'</td>
                                </tr>
                        </tbody>
                    </table>
               </main> 
                  '. $subPlantilla_NodoB .'
                  '. $subPlantilla_eNodoB .'    
                  '. $footerPlantilla .'   
                </div>
            </div>
        </div>
	</div>
    
</body>

';

    return $plantilla;
}

function getSubPlantilla_nodoB($jsonData){
    $obj = json_decode($jsonData);
    $d_sectores = $obj->{'d_sectores'};

    $nodoB_01_01 = $d_sectores->nodoB_01_01;
    $nodoB_02_01 = $d_sectores->nodoB_02_01;
    $nodoB_03_01 = $d_sectores->nodoB_03_01;
    $nodoB_04_01 = $d_sectores->nodoB_04_01;
    $d2_01_01 = $d_sectores->d2_01_01; $d2_01_02 = $d_sectores->d2_01_02; $d2_01_03 = $d_sectores->d2_01_03; $d2_01_04 = $d_sectores->d2_01_04; $d2_01_05 = $d_sectores->d2_01_05; $d2_01_06 = $d_sectores->d2_01_06; $d2_01_07 = $d_sectores->d2_01_07; $d2_01_08 = $d_sectores->d2_01_08; $d2_01_09 = $d_sectores->d2_01_09; $d2_01_10 = $d_sectores->d2_01_10; $d2_01_11 = $d_sectores->d2_01_11; $d2_01_12 = $d_sectores->d2_01_12; $d2_01_13 = $d_sectores->d2_01_13;
    $d2_02_01 = $d_sectores->d2_02_01; $d2_02_02 = $d_sectores->d2_02_02; $d2_02_03 = $d_sectores->d2_02_03; $d2_02_04 = $d_sectores->d2_02_04; $d2_02_05 = $d_sectores->d2_02_05; $d2_02_06 = $d_sectores->d2_02_06; $d2_02_07 = $d_sectores->d2_02_07; $d2_02_08 = $d_sectores->d2_02_08; $d2_02_09 = $d_sectores->d2_02_09; $d2_02_10 = $d_sectores->d2_02_10; $d2_02_11 = $d_sectores->d2_02_11; $d2_02_12 = $d_sectores->d2_02_12; $d2_02_13 = $d_sectores->d2_02_13;
    $d2_03_01 = $d_sectores->d2_03_01; $d2_03_02 = $d_sectores->d2_03_02; $d2_03_03 = $d_sectores->d2_03_03; $d2_03_04 = $d_sectores->d2_03_04; $d2_03_05 = $d_sectores->d2_03_05; $d2_03_06 = $d_sectores->d2_03_06; $d2_03_07 = $d_sectores->d2_03_07; $d2_03_08 = $d_sectores->d2_03_08; $d2_03_09 = $d_sectores->d2_03_09; $d2_03_10 = $d_sectores->d2_03_10; $d2_03_11 = $d_sectores->d2_03_11; $d2_03_12 = $d_sectores->d2_03_12; $d2_03_13 = $d_sectores->d2_03_13;
    $d2_04_01 = $d_sectores->d2_04_01; $d2_04_02 = $d_sectores->d2_04_02; $d2_04_03 = $d_sectores->d2_04_03; $d2_04_04 = $d_sectores->d2_04_04; $d2_04_05 = $d_sectores->d2_04_05; $d2_04_06 = $d_sectores->d2_04_06; $d2_04_07 = $d_sectores->d2_04_07; $d2_04_08 = $d_sectores->d2_04_08; $d2_04_09 = $d_sectores->d2_04_09; $d2_04_10 = $d_sectores->d2_04_10; $d2_04_11 = $d_sectores->d2_04_11; $d2_04_12 = $d_sectores->d2_04_12; $d2_04_13 = $d_sectores->d2_04_13;
    $d2_05_01 = $d_sectores->d2_05_01; $d2_05_02 = $d_sectores->d2_05_02; $d2_05_03 = $d_sectores->d2_05_03; $d2_05_04 = $d_sectores->d2_05_04; $d2_05_05 = $d_sectores->d2_05_05; $d2_05_06 = $d_sectores->d2_05_06; $d2_05_07 = $d_sectores->d2_05_07; $d2_05_08 = $d_sectores->d2_05_08; $d2_05_09 = $d_sectores->d2_05_09; $d2_05_10 = $d_sectores->d2_05_10; $d2_05_11 = $d_sectores->d2_05_11; $d2_05_12 = $d_sectores->d2_05_12; $d2_05_13 = $d_sectores->d2_05_13;
    $d2_06_01 = $d_sectores->d2_06_01; $d2_06_02 = $d_sectores->d2_06_02; $d2_06_03 = $d_sectores->d2_06_03; $d2_06_04 = $d_sectores->d2_06_04; $d2_06_05 = $d_sectores->d2_06_05; $d2_06_06 = $d_sectores->d2_06_06; $d2_06_07 = $d_sectores->d2_06_07; $d2_06_08 = $d_sectores->d2_06_08; $d2_06_09 = $d_sectores->d2_06_09; $d2_06_10 = $d_sectores->d2_06_10; $d2_06_11 = $d_sectores->d2_06_11; $d2_06_12 = $d_sectores->d2_06_12; $d2_06_13 = $d_sectores->d2_06_13;
    $d2_07_01 = $d_sectores->d2_07_01; $d2_07_02 = $d_sectores->d2_07_02; $d2_07_03 = $d_sectores->d2_07_03; $d2_07_04 = $d_sectores->d2_07_04; $d2_07_05 = $d_sectores->d2_07_05; $d2_07_06 = $d_sectores->d2_07_06; $d2_07_07 = $d_sectores->d2_07_07; $d2_07_08 = $d_sectores->d2_07_08; $d2_07_09 = $d_sectores->d2_07_09; $d2_07_10 = $d_sectores->d2_07_10; $d2_07_11 = $d_sectores->d2_07_11; $d2_07_12 = $d_sectores->d2_07_12; $d2_07_13 = $d_sectores->d2_07_13;
    $d2_08_01 = $d_sectores->d2_08_01; $d2_08_02 = $d_sectores->d2_08_02; $d2_08_03 = $d_sectores->d2_08_03; $d2_08_04 = $d_sectores->d2_08_04; $d2_08_05 = $d_sectores->d2_08_05; $d2_08_06 = $d_sectores->d2_08_06; $d2_08_07 = $d_sectores->d2_08_07; $d2_08_08 = $d_sectores->d2_08_08; $d2_08_09 = $d_sectores->d2_08_09; $d2_08_10 = $d_sectores->d2_08_10; $d2_08_11 = $d_sectores->d2_08_11; $d2_08_12 = $d_sectores->d2_08_12; $d2_08_13 = $d_sectores->d2_08_13;
    $d2_09_01 = $d_sectores->d2_09_01; $d2_09_02 = $d_sectores->d2_09_02; $d2_09_03 = $d_sectores->d2_09_03; $d2_09_04 = $d_sectores->d2_09_04; $d2_09_05 = $d_sectores->d2_09_05; $d2_09_06 = $d_sectores->d2_09_06; $d2_09_07 = $d_sectores->d2_09_07; $d2_09_08 = $d_sectores->d2_09_08; $d2_09_09 = $d_sectores->d2_09_09; $d2_09_10 = $d_sectores->d2_09_10; $d2_09_11 = $d_sectores->d2_09_11; $d2_09_12 = $d_sectores->d2_09_12; $d2_09_13 = $d_sectores->d2_09_13;
    $d2_10_01 = $d_sectores->d2_10_01; $d2_10_02 = $d_sectores->d2_10_02; $d2_10_03 = $d_sectores->d2_10_03; $d2_10_04 = $d_sectores->d2_10_04; $d2_10_05 = $d_sectores->d2_10_05; $d2_10_06 = $d_sectores->d2_10_06; $d2_10_07 = $d_sectores->d2_10_07; $d2_10_08 = $d_sectores->d2_10_08; $d2_10_09 = $d_sectores->d2_10_09; $d2_10_10 = $d_sectores->d2_10_10; $d2_10_11 = $d_sectores->d2_10_11; $d2_10_12 = $d_sectores->d2_10_12; $d2_10_13 = $d_sectores->d2_10_13;
    $d2_11_01 = $d_sectores->d2_11_01; $d2_11_02 = $d_sectores->d2_11_02; $d2_11_03 = $d_sectores->d2_11_03; $d2_11_04 = $d_sectores->d2_11_04; $d2_11_05 = $d_sectores->d2_11_05; $d2_11_06 = $d_sectores->d2_11_06; $d2_11_07 = $d_sectores->d2_11_07; $d2_11_08 = $d_sectores->d2_11_08; $d2_11_09 = $d_sectores->d2_11_09; $d2_11_10 = $d_sectores->d2_11_10; $d2_11_11 = $d_sectores->d2_11_11; $d2_11_12 = $d_sectores->d2_11_12; $d2_11_13 = $d_sectores->d2_11_13;
    $d2_12_01 = $d_sectores->d2_12_01; $d2_12_02 = $d_sectores->d2_12_02; $d2_12_03 = $d_sectores->d2_12_03; $d2_12_04 = $d_sectores->d2_12_04; $d2_12_05 = $d_sectores->d2_12_05; $d2_12_06 = $d_sectores->d2_12_06; $d2_12_07 = $d_sectores->d2_12_07; $d2_12_08 = $d_sectores->d2_12_08; $d2_12_09 = $d_sectores->d2_12_09; $d2_12_10 = $d_sectores->d2_12_10; $d2_12_11 = $d_sectores->d2_12_11; $d2_12_12 = $d_sectores->d2_12_12; $d2_12_13 = $d_sectores->d2_12_13;


    $plantilla = '
    <main>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td class="col-40p">'.constant('D02_01').'</td>
                                                    <td class="col-60p">'.$nodoB_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D02_02').'</td>
                                                    <td class="col-60p">'.$nodoB_02_01.'</td>
                                                </tr>
                                             </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D02_03').'</td>
                                                    <td class="col-60p">'.$nodoB_03_01.'</td>
                                               </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D02_04').'</td>
                                                    <td class="col-60p">'.$nodoB_04_01.'</td>
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
                                    <td>Sector</td>
                                    <td>LOCAL CELL ID</td>
                                    <td>Banda MHz</td>
                                    <td>Modelo RBS</td>
                                    <td>Tipo de Antena</td>
                                    <td>Marca antena</td>
                                    <td>Modelo antena</td>
                                    <td>Azimut</td>
                                    <td>Tilt Mecánico</td>
                                    <td>Tilt Eléctrico</td>
                                    <td>Ángulo Apertura</td>
                                    <td>Altura Antena (m)</td>
                                    <td>Tiene RET</td>
                                    <td>Modelo RRU</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d2_01_01.'</td>
                                    <td>'.$d2_01_02.'</td>
                                    <td>'.$d2_01_03.'</td>
                                    <td>'.$d2_01_04.'</td>
                                    <td>'.$d2_01_05.'</td>
                                    <td>'.$d2_01_06.'</td>
                                    <td>'.$d2_01_07.'</td>
                                    <td>'.$d2_01_08.'</td>
                                    <td>'.$d2_01_09.'</td>
                                    <td>'.$d2_01_10.'</td>
                                    <td>'.$d2_01_11.'</td>
                                    <td>'.$d2_01_12.'</td>
                                    <td>'.$d2_01_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d2_02_01.'</td>
                                    <td>'.$d2_02_02.'</td>
                                    <td>'.$d2_02_03.'</td>
                                    <td>'.$d2_02_04.'</td>
                                    <td>'.$d2_02_05.'</td>
                                    <td>'.$d2_02_06.'</td>
                                    <td>'.$d2_02_07.'</td>
                                    <td>'.$d2_02_08.'</td>
                                    <td>'.$d2_02_09.'</td>
                                    <td>'.$d2_02_10.'</td>
                                    <td>'.$d2_02_11.'</td>
                                    <td>'.$d2_02_12.'</td>
                                    <td>'.$d2_02_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d2_03_01.'</td>
                                    <td>'.$d2_03_02.'</td>
                                    <td>'.$d2_03_03.'</td>
                                    <td>'.$d2_03_04.'</td>
                                    <td>'.$d2_03_05.'</td>
                                    <td>'.$d2_03_06.'</td>
                                    <td>'.$d2_03_07.'</td>
                                    <td>'.$d2_03_08.'</td>
                                    <td>'.$d2_03_09.'</td>
                                    <td>'.$d2_03_10.'</td>
                                    <td>'.$d2_03_11.'</td>
                                    <td>'.$d2_03_12.'</td>
                                    <td>'.$d2_03_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d2_04_01.'</td>
                                    <td>'.$d2_04_02.'</td>
                                    <td>'.$d2_04_03.'</td>
                                    <td>'.$d2_04_04.'</td>
                                    <td>'.$d2_04_05.'</td>
                                    <td>'.$d2_04_06.'</td>
                                    <td>'.$d2_04_07.'</td>
                                    <td>'.$d2_04_08.'</td>
                                    <td>'.$d2_04_09.'</td>
                                    <td>'.$d2_04_10.'</td>
                                    <td>'.$d2_04_11.'</td>
                                    <td>'.$d2_04_12.'</td>
                                    <td>'.$d2_04_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d2_05_01.'</td>
                                    <td>'.$d2_05_02.'</td>
                                    <td>'.$d2_05_03.'</td>
                                    <td>'.$d2_05_04.'</td>
                                    <td>'.$d2_05_05.'</td>
                                    <td>'.$d2_05_06.'</td>
                                    <td>'.$d2_05_07.'</td>
                                    <td>'.$d2_05_08.'</td>
                                    <td>'.$d2_05_09.'</td>
                                    <td>'.$d2_05_10.'</td>
                                    <td>'.$d2_05_11.'</td>
                                    <td>'.$d2_05_12.'</td>
                                    <td>'.$d2_05_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d2_06_01.'</td>
                                    <td>'.$d2_06_02.'</td>
                                    <td>'.$d2_06_03.'</td>
                                    <td>'.$d2_06_04.'</td>
                                    <td>'.$d2_06_05.'</td>
                                    <td>'.$d2_06_06.'</td>
                                    <td>'.$d2_06_07.'</td>
                                    <td>'.$d2_06_08.'</td>
                                    <td>'.$d2_06_09.'</td>
                                    <td>'.$d2_06_10.'</td>
                                    <td>'.$d2_06_11.'</td>
                                    <td>'.$d2_06_12.'</td>
                                    <td>'.$d2_06_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d2_07_01.'</td>
                                    <td>'.$d2_07_02.'</td>
                                    <td>'.$d2_07_03.'</td>
                                    <td>'.$d2_07_04.'</td>
                                    <td>'.$d2_07_05.'</td>
                                    <td>'.$d2_07_06.'</td>
                                    <td>'.$d2_07_07.'</td>
                                    <td>'.$d2_07_08.'</td>
                                    <td>'.$d2_07_09.'</td>
                                    <td>'.$d2_07_10.'</td>
                                    <td>'.$d2_07_11.'</td>
                                    <td>'.$d2_07_12.'</td>
                                    <td>'.$d2_07_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d2_08_01.'</td>
                                    <td>'.$d2_08_02.'</td>
                                    <td>'.$d2_08_03.'</td>
                                    <td>'.$d2_08_04.'</td>
                                    <td>'.$d2_08_05.'</td>
                                    <td>'.$d2_08_06.'</td>
                                    <td>'.$d2_08_07.'</td>
                                    <td>'.$d2_08_08.'</td>
                                    <td>'.$d2_08_09.'</td>
                                    <td>'.$d2_08_10.'</td>
                                    <td>'.$d2_08_11.'</td>
                                    <td>'.$d2_08_12.'</td>
                                    <td>'.$d2_08_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d2_09_01.'</td>
                                    <td>'.$d2_09_02.'</td>
                                    <td>'.$d2_09_03.'</td>
                                    <td>'.$d2_09_04.'</td>
                                    <td>'.$d2_09_05.'</td>
                                    <td>'.$d2_09_06.'</td>
                                    <td>'.$d2_09_07.'</td>
                                    <td>'.$d2_09_08.'</td>
                                    <td>'.$d2_09_09.'</td>
                                    <td>'.$d2_09_10.'</td>
                                    <td>'.$d2_09_11.'</td>
                                    <td>'.$d2_09_12.'</td>
                                    <td>'.$d2_09_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d2_10_01.'</td>
                                    <td>'.$d2_10_02.'</td>
                                    <td>'.$d2_10_03.'</td>
                                    <td>'.$d2_10_04.'</td>
                                    <td>'.$d2_10_05.'</td>
                                    <td>'.$d2_10_06.'</td>
                                    <td>'.$d2_10_07.'</td>
                                    <td>'.$d2_10_08.'</td>
                                    <td>'.$d2_10_09.'</td>
                                    <td>'.$d2_10_10.'</td>
                                    <td>'.$d2_10_11.'</td>
                                    <td>'.$d2_10_12.'</td>
                                    <td>'.$d2_10_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d2_11_01.'</td>
                                    <td>'.$d2_11_02.'</td>
                                    <td>'.$d2_11_03.'</td>
                                    <td>'.$d2_11_04.'</td>
                                    <td>'.$d2_11_05.'</td>
                                    <td>'.$d2_11_06.'</td>
                                    <td>'.$d2_11_07.'</td>
                                    <td>'.$d2_11_08.'</td>
                                    <td>'.$d2_11_09.'</td>
                                    <td>'.$d2_11_10.'</td>
                                    <td>'.$d2_11_11.'</td>
                                    <td>'.$d2_11_12.'</td>
                                    <td>'.$d2_11_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d2_12_01.'</td>
                                    <td>'.$d2_12_02.'</td>
                                    <td>'.$d2_12_03.'</td>
                                    <td>'.$d2_12_04.'</td>
                                    <td>'.$d2_12_05.'</td>
                                    <td>'.$d2_12_06.'</td>
                                    <td>'.$d2_12_07.'</td>
                                    <td>'.$d2_12_08.'</td>
                                    <td>'.$d2_12_09.'</td>
                                    <td>'.$d2_12_10.'</td>
                                    <td>'.$d2_12_11.'</td>
                                    <td>'.$d2_12_12.'</td>
                                    <td>'.$d2_12_13.'</td>
                                </tr>
                        </tbody>
                    </table>
               </main>
    ';

    return $plantilla;

}

function getSubPlantilla_eNodoB($jsonData){
    $obj = json_decode($jsonData);
    $d_sectores = $obj->{'d_sectores'};

    $enodoB_01_01 = $d_sectores->enodoB_01_01;
    $enodoB_02_01 = $d_sectores->enodoB_02_01;
    $enodoB_03_01 = $d_sectores->enodoB_03_01;
    $enodoB_04_01 = $d_sectores->enodoB_04_01;
    $d3_01_01 = $d_sectores->d3_01_01; $d3_01_02 = $d_sectores->d3_01_02; $d3_01_03 = $d_sectores->d3_01_03; $d3_01_04 = $d_sectores->d3_01_04; $d3_01_05 = $d_sectores->d3_01_05; $d3_01_06 = $d_sectores->d3_01_06; $d3_01_07 = $d_sectores->d3_01_07; $d3_01_08 = $d_sectores->d3_01_08; $d3_01_09 = $d_sectores->d3_01_09; $d3_01_10 = $d_sectores->d3_01_10; $d3_01_11 = $d_sectores->d3_01_11; $d3_01_12 = $d_sectores->d3_01_12; $d3_01_13 = $d_sectores->d3_01_13;
    $d3_02_01 = $d_sectores->d3_02_01; $d3_02_02 = $d_sectores->d3_02_02; $d3_02_03 = $d_sectores->d3_02_03; $d3_02_04 = $d_sectores->d3_02_04; $d3_02_05 = $d_sectores->d3_02_05; $d3_02_06 = $d_sectores->d3_02_06; $d3_02_07 = $d_sectores->d3_02_07; $d3_02_08 = $d_sectores->d3_02_08; $d3_02_09 = $d_sectores->d3_02_09; $d3_02_10 = $d_sectores->d3_02_10; $d3_02_11 = $d_sectores->d3_02_11; $d3_02_12 = $d_sectores->d3_02_12; $d3_02_13 = $d_sectores->d3_02_13;
    $d3_03_01 = $d_sectores->d3_03_01; $d3_03_02 = $d_sectores->d3_03_02; $d3_03_03 = $d_sectores->d3_03_03; $d3_03_04 = $d_sectores->d3_03_04; $d3_03_05 = $d_sectores->d3_03_05; $d3_03_06 = $d_sectores->d3_03_06; $d3_03_07 = $d_sectores->d3_03_07; $d3_03_08 = $d_sectores->d3_03_08; $d3_03_09 = $d_sectores->d3_03_09; $d3_03_10 = $d_sectores->d3_03_10; $d3_03_11 = $d_sectores->d3_03_11; $d3_03_12 = $d_sectores->d3_03_12; $d3_03_13 = $d_sectores->d3_03_13;
    $d3_04_01 = $d_sectores->d3_04_01; $d3_04_02 = $d_sectores->d3_04_02; $d3_04_03 = $d_sectores->d3_04_03; $d3_04_04 = $d_sectores->d3_04_04; $d3_04_05 = $d_sectores->d3_04_05; $d3_04_06 = $d_sectores->d3_04_06; $d3_04_07 = $d_sectores->d3_04_07; $d3_04_08 = $d_sectores->d3_04_08; $d3_04_09 = $d_sectores->d3_04_09; $d3_04_10 = $d_sectores->d3_04_10; $d3_04_11 = $d_sectores->d3_04_11; $d3_04_12 = $d_sectores->d3_04_12; $d3_04_13 = $d_sectores->d3_04_13;
    $d3_05_01 = $d_sectores->d3_05_01; $d3_05_02 = $d_sectores->d3_05_02; $d3_05_03 = $d_sectores->d3_05_03; $d3_05_04 = $d_sectores->d3_05_04; $d3_05_05 = $d_sectores->d3_05_05; $d3_05_06 = $d_sectores->d3_05_06; $d3_05_07 = $d_sectores->d3_05_07; $d3_05_08 = $d_sectores->d3_05_08; $d3_05_09 = $d_sectores->d3_05_09; $d3_05_10 = $d_sectores->d3_05_10; $d3_05_11 = $d_sectores->d3_05_11; $d3_05_12 = $d_sectores->d3_05_12; $d3_05_13 = $d_sectores->d3_05_13;
    $d3_06_01 = $d_sectores->d3_06_01; $d3_06_02 = $d_sectores->d3_06_02; $d3_06_03 = $d_sectores->d3_06_03; $d3_06_04 = $d_sectores->d3_06_04; $d3_06_05 = $d_sectores->d3_06_05; $d3_06_06 = $d_sectores->d3_06_06; $d3_06_07 = $d_sectores->d3_06_07; $d3_06_08 = $d_sectores->d3_06_08; $d3_06_09 = $d_sectores->d3_06_09; $d3_06_10 = $d_sectores->d3_06_10; $d3_06_11 = $d_sectores->d3_06_11; $d3_06_12 = $d_sectores->d3_06_12; $d3_06_13 = $d_sectores->d3_06_13;
    $d3_07_01 = $d_sectores->d3_07_01; $d3_07_02 = $d_sectores->d3_07_02; $d3_07_03 = $d_sectores->d3_07_03; $d3_07_04 = $d_sectores->d3_07_04; $d3_07_05 = $d_sectores->d3_07_05; $d3_07_06 = $d_sectores->d3_07_06; $d3_07_07 = $d_sectores->d3_07_07; $d3_07_08 = $d_sectores->d3_07_08; $d3_07_09 = $d_sectores->d3_07_09; $d3_07_10 = $d_sectores->d3_07_10; $d3_07_11 = $d_sectores->d3_07_11; $d3_07_12 = $d_sectores->d3_07_12; $d3_07_13 = $d_sectores->d3_07_13;
    $d3_08_01 = $d_sectores->d3_08_01; $d3_08_02 = $d_sectores->d3_08_02; $d3_08_03 = $d_sectores->d3_08_03; $d3_08_04 = $d_sectores->d3_08_04; $d3_08_05 = $d_sectores->d3_08_05; $d3_08_06 = $d_sectores->d3_08_06; $d3_08_07 = $d_sectores->d3_08_07; $d3_08_08 = $d_sectores->d3_08_08; $d3_08_09 = $d_sectores->d3_08_09; $d3_08_10 = $d_sectores->d3_08_10; $d3_08_11 = $d_sectores->d3_08_11; $d3_08_12 = $d_sectores->d3_08_12; $d3_08_13 = $d_sectores->d3_08_13;
    $d3_09_01 = $d_sectores->d3_09_01; $d3_09_02 = $d_sectores->d3_09_02; $d3_09_03 = $d_sectores->d3_09_03; $d3_09_04 = $d_sectores->d3_09_04; $d3_09_05 = $d_sectores->d3_09_05; $d3_09_06 = $d_sectores->d3_09_06; $d3_09_07 = $d_sectores->d3_09_07; $d3_09_08 = $d_sectores->d3_09_08; $d3_09_09 = $d_sectores->d3_09_09; $d3_09_10 = $d_sectores->d3_09_10; $d3_09_11 = $d_sectores->d3_09_11; $d3_09_12 = $d_sectores->d3_09_12; $d3_09_13 = $d_sectores->d3_09_13;

    $plantilla = '
    <main>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td class="col-40p">'.constant('D03_01').'</td>
                                                    <td class="col-60p">'.$enodoB_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D03_02').'</td>
                                                    <td class="col-60p">'.$enodoB_02_01.'</td>
                                                </tr>
                                             </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D03_03').'</td>
                                                    <td class="col-60p">'.$enodoB_03_01.'</td>
                                               </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D03_04').'</td>
                                                    <td class="col-60p">'.$enodoB_04_01.'</td>
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
                                    <td>Sector</td>
                                    <td>LOCAL CELL ID</td>
                                    <td>Banda MHz</td>
                                    <td>Modelo RBS</td>
                                    <td>Tipo de Antena</td>
                                    <td>Marca antena</td>
                                    <td>Modelo antena</td>
                                    <td>Azimut</td>
                                    <td>Tilt Mecánico</td>
                                    <td>Tilt Eléctrico</td>
                                    <td>Ángulo Apertura</td>
                                    <td>Altura Antena (m)</td>
                                    <td>Tiene RET</td>
                                    <td>Modelo RRU</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d3_01_01.'</td>
                                    <td>'.$d3_01_02.'</td>
                                    <td>'.$d3_01_03.'</td>
                                    <td>'.$d3_01_04.'</td>
                                    <td>'.$d3_01_05.'</td>
                                    <td>'.$d3_01_06.'</td>
                                    <td>'.$d3_01_07.'</td>
                                    <td>'.$d3_01_08.'</td>
                                    <td>'.$d3_01_09.'</td>
                                    <td>'.$d3_01_10.'</td>
                                    <td>'.$d3_01_11.'</td>
                                    <td>'.$d3_01_12.'</td>
                                    <td>'.$d3_01_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d3_02_01.'</td>
                                    <td>'.$d3_02_02.'</td>
                                    <td>'.$d3_02_03.'</td>
                                    <td>'.$d3_02_04.'</td>
                                    <td>'.$d3_02_05.'</td>
                                    <td>'.$d3_02_06.'</td>
                                    <td>'.$d3_02_07.'</td>
                                    <td>'.$d3_02_08.'</td>
                                    <td>'.$d3_02_09.'</td>
                                    <td>'.$d3_02_10.'</td>
                                    <td>'.$d3_02_11.'</td>
                                    <td>'.$d3_02_12.'</td>
                                    <td>'.$d3_02_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d3_03_01.'</td>
                                    <td>'.$d3_03_02.'</td>
                                    <td>'.$d3_03_03.'</td>
                                    <td>'.$d3_03_04.'</td>
                                    <td>'.$d3_03_05.'</td>
                                    <td>'.$d3_03_06.'</td>
                                    <td>'.$d3_03_07.'</td>
                                    <td>'.$d3_03_08.'</td>
                                    <td>'.$d3_03_09.'</td>
                                    <td>'.$d3_03_10.'</td>
                                    <td>'.$d3_03_11.'</td>
                                    <td>'.$d3_03_12.'</td>
                                    <td>'.$d3_03_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d3_04_01.'</td>
                                    <td>'.$d3_04_02.'</td>
                                    <td>'.$d3_04_03.'</td>
                                    <td>'.$d3_04_04.'</td>
                                    <td>'.$d3_04_05.'</td>
                                    <td>'.$d3_04_06.'</td>
                                    <td>'.$d3_04_07.'</td>
                                    <td>'.$d3_04_08.'</td>
                                    <td>'.$d3_04_09.'</td>
                                    <td>'.$d3_04_10.'</td>
                                    <td>'.$d3_04_11.'</td>
                                    <td>'.$d3_04_12.'</td>
                                    <td>'.$d3_04_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d3_05_01.'</td>
                                    <td>'.$d3_05_02.'</td>
                                    <td>'.$d3_05_03.'</td>
                                    <td>'.$d3_05_04.'</td>
                                    <td>'.$d3_05_05.'</td>
                                    <td>'.$d3_05_06.'</td>
                                    <td>'.$d3_05_07.'</td>
                                    <td>'.$d3_05_08.'</td>
                                    <td>'.$d3_05_09.'</td>
                                    <td>'.$d3_05_10.'</td>
                                    <td>'.$d3_05_11.'</td>
                                    <td>'.$d3_05_12.'</td>
                                    <td>'.$d3_05_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d3_06_01.'</td>
                                    <td>'.$d3_06_02.'</td>
                                    <td>'.$d3_06_03.'</td>
                                    <td>'.$d3_06_04.'</td>
                                    <td>'.$d3_06_05.'</td>
                                    <td>'.$d3_06_06.'</td>
                                    <td>'.$d3_06_07.'</td>
                                    <td>'.$d3_06_08.'</td>
                                    <td>'.$d3_06_09.'</td>
                                    <td>'.$d3_06_10.'</td>
                                    <td>'.$d3_06_11.'</td>
                                    <td>'.$d3_06_12.'</td>
                                    <td>'.$d3_06_13.'</td>
                                </tr>
                                <tr>
                                    <td>1°</td>
                                    <td>'.$d3_07_01.'</td>
                                    <td>'.$d3_07_02.'</td>
                                    <td>'.$d3_07_03.'</td>
                                    <td>'.$d3_07_04.'</td>
                                    <td>'.$d3_07_05.'</td>
                                    <td>'.$d3_07_06.'</td>
                                    <td>'.$d3_07_07.'</td>
                                    <td>'.$d3_07_08.'</td>
                                    <td>'.$d3_07_09.'</td>
                                    <td>'.$d3_07_10.'</td>
                                    <td>'.$d3_07_11.'</td>
                                    <td>'.$d3_07_12.'</td>
                                    <td>'.$d3_07_13.'</td>
                                </tr>
                                <tr>
                                    <td>2°</td>
                                    <td>'.$d3_08_01.'</td>
                                    <td>'.$d3_08_02.'</td>
                                    <td>'.$d3_08_03.'</td>
                                    <td>'.$d3_08_04.'</td>
                                    <td>'.$d3_08_05.'</td>
                                    <td>'.$d3_08_06.'</td>
                                    <td>'.$d3_08_07.'</td>
                                    <td>'.$d3_08_08.'</td>
                                    <td>'.$d3_08_09.'</td>
                                    <td>'.$d3_08_10.'</td>
                                    <td>'.$d3_08_11.'</td>
                                    <td>'.$d3_08_12.'</td>
                                    <td>'.$d3_08_13.'</td>
                                </tr>
                                <tr>
                                    <td>3°</td>
                                    <td>'.$d3_09_01.'</td>
                                    <td>'.$d3_09_02.'</td>
                                    <td>'.$d3_09_03.'</td>
                                    <td>'.$d3_09_04.'</td>
                                    <td>'.$d3_09_05.'</td>
                                    <td>'.$d3_09_06.'</td>
                                    <td>'.$d3_09_07.'</td>
                                    <td>'.$d3_09_08.'</td>
                                    <td>'.$d3_09_09.'</td>
                                    <td>'.$d3_09_10.'</td>
                                    <td>'.$d3_09_11.'</td>
                                    <td>'.$d3_09_12.'</td>
                                    <td>'.$d3_09_13.'</td>
                                </tr>
                        </tbody>
                    </table>
               </main>
    ';

    return $plantilla;
}


?>