<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idrutinax, $titulosArr){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabecera2($conexion, $jsonData, $idgrupo, $idevento, $titulosArr);

    $footerPlantilla = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '016');
    $footerPlantilla .= $reporteFotog;

    //---------------------------

    /** g_desarrollo **/

   $d_relevamiento_d1 = $obj->{'d_relevamiento_d1'};
    $d1_01_01 = $d_relevamiento_d1->d1_01_01;
    $d1_02_01 = $d_relevamiento_d1->d1_02_01;
    $d1_03_01 = $d_relevamiento_d1->d1_03_01;

    /**  e1_equipo_e1_e1 **/
    $e1_equipo_e1 = $obj->{'e1_equipo_e1'};
    $e1_01_01 = $e1_equipo_e1->e1_01_01; $e1_01_02 = $e1_equipo_e1->e1_01_02; $e1_01_03 = $e1_equipo_e1->e1_01_03; $e1_01_04 = $e1_equipo_e1->e1_01_04; $e1_01_05 = $e1_equipo_e1->e1_01_05;
    $e1_02_01 = $e1_equipo_e1->e1_02_01; $e1_02_02 = $e1_equipo_e1->e1_02_02; $e1_02_03 = $e1_equipo_e1->e1_02_03; $e1_02_04 = $e1_equipo_e1->e1_02_04; $e1_02_05 = $e1_equipo_e1->e1_02_05;
    $e1_03_01 = $e1_equipo_e1->e1_03_01; $e1_03_02 = $e1_equipo_e1->e1_03_02; $e1_03_03 = $e1_equipo_e1->e1_03_03; $e1_03_04 = $e1_equipo_e1->e1_03_04; $e1_03_05 = $e1_equipo_e1->e1_03_05;
    $e1_04_01 = $e1_equipo_e1->e1_04_01; $e1_04_02 = $e1_equipo_e1->e1_04_02; $e1_04_03 = $e1_equipo_e1->e1_04_03; $e1_04_04 = $e1_equipo_e1->e1_04_04; $e1_04_05 = $e1_equipo_e1->e1_04_05;
    $e1_05_01 = $e1_equipo_e1->e1_05_01; $e1_05_02 = $e1_equipo_e1->e1_05_02; $e1_05_03 = $e1_equipo_e1->e1_05_03; $e1_05_04 = $e1_equipo_e1->e1_05_04; $e1_05_05 = $e1_equipo_e1->e1_05_05;
    $e1_06_01 = $e1_equipo_e1->e1_06_01; $e1_06_02 = $e1_equipo_e1->e1_06_02; $e1_06_03 = $e1_equipo_e1->e1_06_03; $e1_06_04 = $e1_equipo_e1->e1_06_04; $e1_06_05 = $e1_equipo_e1->e1_06_05;
    $e1_07_01 = $e1_equipo_e1->e1_07_01; $e1_07_02 = $e1_equipo_e1->e1_07_02; $e1_07_03 = $e1_equipo_e1->e1_07_03; $e1_07_04 = $e1_equipo_e1->e1_07_04; $e1_07_05 = $e1_equipo_e1->e1_07_05;
    $e1_08_01 = $e1_equipo_e1->e1_08_01; $e1_08_02 = $e1_equipo_e1->e1_08_02; $e1_08_03 = $e1_equipo_e1->e1_08_03; $e1_08_04 = $e1_equipo_e1->e1_08_04; $e1_08_05 = $e1_equipo_e1->e1_08_05;

    $e1_09_01 = $e1_equipo_e1->e1_09_01; $e1_09_02 = $e1_equipo_e1->e1_09_02; $e1_09_03 = $e1_equipo_e1->e1_09_03; $e1_09_04 = $e1_equipo_e1->e1_09_04; $e1_09_05 = $e1_equipo_e1->e1_09_05;
    $e1_10_01 = $e1_equipo_e1->e1_10_01; $e1_10_02 = $e1_equipo_e1->e1_10_02; $e1_10_03 = $e1_equipo_e1->e1_10_03; $e1_10_04 = $e1_equipo_e1->e1_10_04; $e1_10_05 = $e1_equipo_e1->e1_10_05;
    $e1_11_01 = $e1_equipo_e1->e1_11_01; $e1_11_02 = $e1_equipo_e1->e1_11_02; $e1_11_03 = $e1_equipo_e1->e1_11_03; $e1_11_04 = $e1_equipo_e1->e1_11_04; $e1_11_05 = $e1_equipo_e1->e1_11_05;
    $e1_12_01 = $e1_equipo_e1->e1_12_01; $e1_12_02 = $e1_equipo_e1->e1_12_02; $e1_12_03 = $e1_equipo_e1->e1_12_03; $e1_12_04 = $e1_equipo_e1->e1_12_04; $e1_12_05 = $e1_equipo_e1->e1_12_05;
    $e1_13_01 = $e1_equipo_e1->e1_13_01; $e1_13_02 = $e1_equipo_e1->e1_13_02; $e1_13_03 = $e1_equipo_e1->e1_13_03; $e1_13_04 = $e1_equipo_e1->e1_13_04; $e1_13_05 = $e1_equipo_e1->e1_13_05;
    $e1_14_01 = $e1_equipo_e1->e1_14_01; $e1_14_02 = $e1_equipo_e1->e1_14_02; $e1_14_03 = $e1_equipo_e1->e1_14_03; $e1_14_04 = $e1_equipo_e1->e1_14_04; $e1_14_05 = $e1_equipo_e1->e1_14_05;

    $equipos_ant = array(
        array("id" => "1", "equipo" => "ASR-9010", "existe" => $e1_01_01, "estado" => $e1_01_02, "energia" => $e1_01_03, "prtos" => $e1_01_04, "desc" => $e1_01_05),
        array("id" => "2", "equipo" => "ASR-920", "existe" => $e1_02_01, "estado" => $e1_02_02, "energia" => $e1_02_03, "prtos" => $e1_02_04, "desc" => $e1_02_05),
        array("id" => "3", "equipo" => "ME-3400", "existe" => $e1_03_01, "estado" => $e1_03_02, "energia" => $e1_03_03, "prtos" => $e1_03_04, "desc" => $e1_03_05),
        array("id" => "4", "equipo" => "SW-HUAWEI", "existe" => $e1_04_01, "estado" => $e1_04_02, "energia" => $e1_04_03, "prtos" => $e1_04_04, "desc" => $e1_04_05),
        array("id" => "5", "equipo" => "SW-RAISECOM", "existe" => $e1_05_01, "estado" => $e1_05_02, "energia" => $e1_05_03, "prtos" => $e1_05_04, "desc" => $e1_05_05),
        array("id" => "6", "equipo" => "DSLAM-H", "existe" => $e1_06_01, "estado" => $e1_06_02, "energia" => $e1_06_03, "prtos" => $e1_06_04, "desc" => $e1_06_05),
        array("id" => "7", "equipo" => "DSLAM-Z", "existe" => $e1_07_01, "estado" => $e1_07_02, "energia" => $e1_07_03, "prtos" => $e1_07_04, "desc" => $e1_07_05),
        array("id" => "8", "equipo" => "OLT", "existe" => $e1_08_01, "estado" => $e1_08_02, "energia" => $e1_08_03, "prtos" => $e1_08_04, "desc" => $e1_08_05)
    );

    $fuentes_ant = array(
        array("id" => "1", "equipo" => "ASR-9010", "fuenteA" => $e1_09_01, "origen1" => $e1_09_02, "fuenteB" => $e1_09_03, "origen2" => $e1_09_04, "obs" => $e1_09_05),
        array("id" => "2", "equipo" => "ASR-920", "fuenteA" => $e1_10_01, "origen1" => $e1_10_02, "fuenteB" => $e1_10_03, "origen2" => $e1_10_04, "obs" => $e1_10_05),
        array("id" => "3", "equipo" => "OLT 300", "fuenteA" => $e1_11_01, "origen1" => $e1_11_02, "fuenteB" => $e1_11_03, "origen2" => $e1_11_04, "obs" => $e1_11_05),
        array("id" => "1", "equipo" => "ASR-9010", "fuenteA" => $e1_12_01, "origen1" => $e1_12_02, "fuenteB" => $e1_12_03, "origen2" => $e1_12_04, "obs" => $e1_12_05),
        array("id" => "2", "equipo" => "ASR-920", "fuenteA" => $e1_13_01, "origen1" => $e1_13_02, "fuenteB" => $e1_13_03, "origen2" => $e1_13_04, "obs" => $e1_13_05),
        array("id" => "3", "equipo" => "OLT 300", "fuenteA" => $e1_14_01, "origen1" => $e1_14_02, "fuenteB" => $e1_14_03, "origen2" => $e1_14_04, "obs" => $e1_14_05)
    );

    $p_puerto12_p = $obj->{'p_puerto12_p'};
    $p_01_01 = $p_puerto12_p->p_01_01; $p_01_02 = $p_puerto12_p->p_01_02; $p_01_03 = $p_puerto12_p->p_01_03;
    $p_02_01 = $p_puerto12_p->p_02_01; $p_02_02 = $p_puerto12_p->p_02_02; $p_02_03 = $p_puerto12_p->p_02_03;
    $p_03_01 = $p_puerto12_p->p_03_01; $p_03_02 = $p_puerto12_p->p_03_02; $p_03_03 = $p_puerto12_p->p_03_03;
    $p_04_01 = $p_puerto12_p->p_04_01; $p_04_02 = $p_puerto12_p->p_04_02; $p_04_03 = $p_puerto12_p->p_04_03;
    $p_05_01 = $p_puerto12_p->p_05_01; $p_05_02 = $p_puerto12_p->p_05_02; $p_05_03 = $p_puerto12_p->p_05_03;

    $puertos1_ant = array(
        array("id" => "1", "puerto" => "0", "descri" => $p_01_01, "posicion" => $p_01_02, "obs" => $p_01_03),
        array("id" => "2", "puerto" => "1", "descri" => $p_02_01, "posicion" => $p_02_02, "obs" => $p_02_03),
        array("id" => "3", "puerto" => "2", "descri" => $p_03_01, "posicion" => $p_03_02, "obs" => $p_03_03),
        array("id" => "4", "puerto" => "3", "descri" => $p_04_01, "posicion" => $p_04_02, "obs" => $p_04_03),
        array("id" => "5", "puerto" => "4", "descri" => $p_05_01, "posicion" => $p_05_02, "obs" => $p_05_03),
    );

    $p_06_01 = $p_puerto12_p->p_06_01; $p_06_02 = $p_puerto12_p->p_06_02; $p_06_03 = $p_puerto12_p->p_06_03;
    $p_07_01 = $p_puerto12_p->p_07_01; $p_07_02 = $p_puerto12_p->p_07_02; $p_07_03 = $p_puerto12_p->p_07_03;
    $p_08_01 = $p_puerto12_p->p_08_01; $p_08_02 = $p_puerto12_p->p_08_02; $p_08_03 = $p_puerto12_p->p_08_03;
    $p_09_01 = $p_puerto12_p->p_09_01; $p_09_02 = $p_puerto12_p->p_09_02; $p_09_03 = $p_puerto12_p->p_09_03;
    $p_10_01 = $p_puerto12_p->p_10_01; $p_10_02 = $p_puerto12_p->p_10_02; $p_10_03 = $p_puerto12_p->p_10_03;

    $puertos2_ant = array(
        array("id" => "1", "puerto" => "0", "descri" => $p_06_01, "posicion" => $p_06_02, "obs" => $p_06_03),
        array("id" => "2", "puerto" => "1", "descri" => $p_07_01, "posicion" => $p_07_02, "obs" => $p_07_03),
        array("id" => "3", "puerto" => "2", "descri" => $p_08_01, "posicion" => $p_08_02, "obs" => $p_08_03),
        array("id" => "4", "puerto" => "3", "descri" => $p_09_01, "posicion" => $p_09_02, "obs" => $p_09_03),
        array("id" => "5", "puerto" => "4", "descri" => $p_10_01, "posicion" => $p_10_02, "obs" => $p_10_03),
    );

    $equipos_filas  = getEquiposR16Ant($equipos_ant)    .   getEquiposR16($conexion, $idrutinax);
    $fuentes_filas  = getFuentesR16Ant($fuentes_ant)    .   getFuentesR16($conexion, $idrutinax);
    $puertos1_filas = getPuertos1R16Ant($puertos1_ant)  .   getPuertos1R16($conexion, $idrutinax);
    $puertos2_filas = getPuertos2R16Ant($puertos2_ant)  .   getPuertos2R16($conexion, $idrutinax);



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
    $g1_17_01 = $g_desarrollo_g1->g1_17_01 ? $check : $uncheck; $g1_17_02 = $g_desarrollo_g1->g1_17_02 ? $check : $uncheck; $g1_17_03 = $g_desarrollo_g1->g1_17_03;
    $g1_18_01 = $g_desarrollo_g1->g1_18_01 ? $check : $uncheck; $g1_18_02 = $g_desarrollo_g1->g1_18_02 ? $check : $uncheck; $g1_18_03 = $g_desarrollo_g1->g1_18_03;
    $g1_19_01 = $g_desarrollo_g1->g1_19_01 ? $check : $uncheck; $g1_19_02 = $g_desarrollo_g1->g1_19_02 ? $check : $uncheck; $g1_19_03 = $g_desarrollo_g1->g1_19_03;
    $g1_20_01 = $g_desarrollo_g1->g1_20_01 ? $check : $uncheck; $g1_20_02 = $g_desarrollo_g1->g1_20_02 ? $check : $uncheck; $g1_20_03 = $g_desarrollo_g1->g1_20_03;
    $g1_21_01 = $g_desarrollo_g1->g1_21_01 ? $check : $uncheck; $g1_21_02 = $g_desarrollo_g1->g1_21_02 ? $check : $uncheck; $g1_21_03 = $g_desarrollo_g1->g1_21_03;


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
                                                    <td class="col-60p">'.$d1_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-40p">'.constant('D02').'</td>
                                                    <td class="col-60p">'.$d1_02_01.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D03').'</td>
                                                    <td class="col-60p">'.$d1_03_01.'</td>
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
                                <td class="col-10p"><strong>Id</strong></td>
                                <td class="col-15p"><strong>Equipo</strong></td>
                                <td class="col-15p"><strong>Existe</strong></td>
                                <td class="col-15p"><strong>Estado</strong></td>
                                <td class="col-15p"><strong>Energia</strong></td>
                                <td class="col-15p"><strong>Cantidad de Puertos</strong></td>
                                <td class="col-15p"><strong>Descripción Etiqueta Puerto UPLINK</strong></td>
                            </tr>
                            '.$equipos_filas.'
                        </tbody>        
                    </table>									                        
               </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="col-10p"><strong>Id</strong></td>
                                <td class="col-15p"><strong>Equipo</strong></td>
                                <td class="col-15p"><strong>Fuente A (v)</strong></td>
                                <td class="col-15p"><strong>Origen 1</strong></td>
                                <td class="col-15p"><strong>Fuente B (v)</strong></td>
                                <td class="col-15p"><strong>Origen 2</strong></td>
                                <td class="col-15p"><strong>Observaciones</strong></td>
                            </tr>
                            
                            '.$fuentes_filas.'
                            
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="5"><strong>'.constant('PTITLE1').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>'.constant('P01').'</strong></td>
                                <td class="col-5p"><strong>'.constant('P02').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P03').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P04').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P05').'</strong></td>
                            </tr>
                            
                            '.$puertos1_filas.'
                            
                        </tbody>        
                    </table>									                        
               </main>
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="5"><strong>'.constant('PTITLE2').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-5p"><strong>'.constant('P01').'</strong></td>
                                <td class="col-5p"><strong>'.constant('P02').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P03').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P04').'</strong></td>
                                <td class="col-30p"><strong>'.constant('P05').'</strong></td>
                            </tr>
                            
                            '.$puertos2_filas.'
                            
                        </tbody>        
                    </table>									                        
               </main>
               <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="4"><strong>'.constant('ETITLE2').'</strong></td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E02_01').'</td>
                                <td class="col-15p">'.$g1_01_01.' Si</td>
                                <td class="col-15p">'.$g1_01_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_01_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_02').'</td>
                                <td class="col-15p">'.$g1_02_01.' Si</td>
                                <td class="col-15p">'.$g1_02_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_02_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_03').'</td>
                                <td class="col-15p">'.$g1_03_01.' Si</td>
                                <td class="col-15p">'.$g1_03_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_03_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E02_04').'</td>
                                <td class="col-15p">'.$g1_04_01.' Si</td>
                                <td class="col-15p">'.$g1_04_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_04_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_05').'</td>
                                <td class="col-15p">'.$g1_05_01.' Si</td>
                                <td class="col-15p">'.$g1_05_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_05_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_06').'</td>
                                <td class="col-15p">'.$g1_06_01.' Si</td>
                                <td class="col-15p">'.$g1_06_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_06_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_07').'</td>
                                <td class="col-15p">'.$g1_07_01.' Si</td>
                                <td class="col-15p">'.$g1_07_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_07_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_08').'</td>
                                <td class="col-15p">'.$g1_08_01.' Si</td>
                                <td class="col-15p">'.$g1_08_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_08_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_09').'</td>
                                <td class="col-15p">'.$g1_09_01.' Si</td>
                                <td class="col-15p">'.$g1_09_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_09_03.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('E02_10').'</td>
                                <td class="col-15p">'.$g1_10_01.' Si</td>
                                <td class="col-15p">'.$g1_10_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_10_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_11').'</td>
                                <td class="col-15p">'.$g1_11_01.' Si</td>
                                <td class="col-15p">'.$g1_11_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_11_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_12').'</td>
                                <td class="col-15p">'.$g1_12_01.' Si</td>
                                <td class="col-15p">'.$g1_12_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_12_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_13').'</td>
                                <td class="col-15p">'.$g1_13_01.' Si</td>
                                <td class="col-15p">'.$g1_13_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_13_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_14').'</td>
                                <td class="col-15p">'.$g1_14_01.' Si</td>
                                <td class="col-15p">'.$g1_14_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_14_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_15').'</td>
                                <td class="col-15p">'.$g1_15_01.' Si</td>
                                <td class="col-15p">'.$g1_15_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_15_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_16').'</td>
                                <td class="col-15p">'.$g1_16_01.' Si</td>
                                <td class="col-15p">'.$g1_16_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_16_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_17').'</td>
                                <td class="col-15p">'.$g1_17_01.' Si</td>
                                <td class="col-15p">'.$g1_17_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_17_03.'</td>
                            </tr>
                             <tr>
                                <td class="col-40p">'.constant('E02_18').'</td>
                                <td class="col-15p">'.$g1_18_01.' Si</td>
                                <td class="col-15p">'.$g1_18_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_18_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_19').'</td>
                                <td class="col-15p">'.$g1_19_01.' Si</td>
                                <td class="col-15p">'.$g1_19_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_19_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_20').'</td>
                                <td class="col-15p">'.$g1_20_01.' Si</td>
                                <td class="col-15p">'.$g1_20_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_20_03.'</td>
                            </tr>
                              <tr>
                                <td class="col-40p">'.constant('E02_21').'</td>
                                <td class="col-15p">'.$g1_21_01.' Si</td>
                                <td class="col-15p">'.$g1_21_02.' No</td>
                                <td class="col-25p">Obs. '.$g1_21_03.'</td>
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