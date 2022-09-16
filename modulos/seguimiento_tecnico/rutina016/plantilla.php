<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, false);
    $footerPlantilla = getFooter($jsonData);
    //---------------------------

    /** g_desarrollo **/

   $d_relevamiento_d1 = $obj->{'d_relevamiento_d1'};
    $d1_01_01 = $d_relevamiento_d1->d1_01_01;
    $d1_02_01 = $d_relevamiento_d1->d1_02_01;
    $d1_03_01 = $d_relevamiento_d1->d1_03_01;

    /**  e1_equipo_e1_e1 **/
    $e1_equipo_e1 = $obj->{'e1_equipo_e1'};
//$e_01_01 = $e1_equipo_e1->d_01_01; $d_01_02 = $e1_equipo_e1->e_01_02;
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

//$f1_01_01 = $g_desarrollo_g1->f1_01_01 ? $check : $uncheck; $f1_01_02 = $g_desarrollo->f1_01_02 ? $check : $uncheck; $f1_01_03 = $g_desarrollo_g1->f1_01_03;

    $p_puerto12_p = $obj->{'p_puerto12_p'};
    $p_01_01 = $p_puerto12_p->p_01_01; $p_01_02 = $p_puerto12_p->p_01_02; $p_01_03 = $p_puerto12_p->p_01_03;
    $p_02_01 = $p_puerto12_p->p_02_01; $p_02_02 = $p_puerto12_p->p_02_02; $p_02_03 = $p_puerto12_p->p_02_03;
    $p_03_01 = $p_puerto12_p->p_03_01; $p_03_02 = $p_puerto12_p->p_03_02; $p_03_03 = $p_puerto12_p->p_03_03;
    $p_04_01 = $p_puerto12_p->p_04_01; $p_04_02 = $p_puerto12_p->p_04_02; $p_04_03 = $p_puerto12_p->p_04_03;
    $p_05_01 = $p_puerto12_p->p_05_01; $p_05_02 = $p_puerto12_p->p_05_02; $p_05_03 = $p_puerto12_p->p_05_03;
    $p_06_01 = $p_puerto12_p->p_06_01; $p_06_02 = $p_puerto12_p->p_06_02; $p_06_03 = $p_puerto12_p->p_06_03;
    $p_07_01 = $p_puerto12_p->p_07_01; $p_07_02 = $p_puerto12_p->p_07_02; $p_07_03 = $p_puerto12_p->p_07_03;
    $p_08_01 = $p_puerto12_p->p_08_01; $p_08_02 = $p_puerto12_p->p_08_02; $p_08_03 = $p_puerto12_p->p_08_03;
    $p_09_01 = $p_puerto12_p->p_09_01; $p_09_02 = $p_puerto12_p->p_09_02; $p_09_03 = $p_puerto12_p->p_09_03;
    $p_10_01 = $p_puerto12_p->p_10_01; $p_10_02 = $p_puerto12_p->p_10_02; $p_10_03 = $p_puerto12_p->p_10_03;

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
                                                    <td class="col-60p">'.$d_02_01.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                               <tr>
                                                    <td class="col-40p">'.constant('D03').'</td>
                                                    <td class="col-60p">'.$d_03_01.'</td>
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
                            <tr>
                                <td class="col-5p">1</td>
                                <td class="col-15p">'.constant('E01').'</td>
                                <td class="col-15p">'.$e1_01_01.'</td>
                                <td class="col-15p">'.$e1_01_02.'</td>
                                <td class="col-15p">'.$e1_01_03.'</td>
                                <td class="col-15p">'.$e1_01_04.'</td>
                                <td class="col-20p">'.$e1_01_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">2</td>
                                <td class="col-15p">'.constant('E02').'</td>
                                <td class="col-15p">'.$e1_02_01.'</td>
                                <td class="col-15p">'.$e1_02_02.'</td>
                                <td class="col-15p">'.$e1_02_03.'</td>
                                <td class="col-15p">'.$e1_02_04.'</td>
                                <td class="col-20p">'.$e1_02_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">3</td>
                                <td class="col-15p">'.constant('E03').'</td>
                                <td class="col-15p">'.$e1_03_01.'</td>
                                <td class="col-15p">'.$e1_03_02.'</td>
                                <td class="col-15p">'.$e1_03_03.'</td>
                                <td class="col-15p">'.$e1_03_04.'</td>
                                <td class="col-20p">'.$e1_03_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">3</td>
                                <td class="col-15p">'.constant('E04').'</td>
                                <td class="col-15p">'.$e1_04_01.'</td>
                                <td class="col-15p">'.$e1_04_02.'</td>
                                <td class="col-15p">'.$e1_04_03.'</td>
                                <td class="col-15p">'.$e1_04_04.'</td>
                                <td class="col-20p">'.$e1_04_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">1</td>
                                <td class="col-15p">'.constant('E05').'</td>
                                <td class="col-15p">'.$e1_05_01.'</td>
                                <td class="col-15p">'.$e1_05_02.'</td>
                                <td class="col-15p">'.$e1_05_03.'</td>
                                <td class="col-15p">'.$e1_05_04.'</td>
                                <td class="col-20p">'.$e1_05_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">2</td>
                                <td class="col-15p">'.constant('E06').'</td>
                                <td class="col-15p">'.$e1_06_01.'</td>
                                <td class="col-15p">'.$e1_06_02.'</td>
                                <td class="col-15p">'.$e1_06_03.'</td>
                                <td class="col-15p">'.$e1_06_04.'</td>
                                <td class="col-20p">'.$e1_06_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">3</td>
                                <td class="col-15p">'.constant('E07').'</td>
                                <td class="col-15p">'.$e1_07_01.'</td>
                                <td class="col-15p">'.$e1_07_02.'</td>
                                <td class="col-15p">'.$e1_07_03.'</td>
                                <td class="col-15p">'.$e1_07_04.'</td>
                                <td class="col-20p">'.$e1_07_05.'</td>
                            </tr>
                            <tr>
                                <td class="col-5p">3</td>
                                <td class="col-15p">'.constant('E08').'</td>
                                <td class="col-15p">'.$e1_08_01.'</td>
                                <td class="col-15p">'.$e1_08_02.'</td>
                                <td class="col-15p">'.$e1_08_03.'</td>
                                <td class="col-15p">'.$e1_08_04.'</td>
                                <td class="col-20p">'.$e1_08_05.'</td>
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

