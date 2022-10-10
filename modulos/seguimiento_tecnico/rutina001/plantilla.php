<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS';
    $cabecera        = getCabecera($conexion, $jsonData, $idgrupo, $titulo, true);
    $subPlantilla1   = getSubPlantilla1($jsonData);
    $subPlantilla2   = getSubPlantilla2($jsonData);
    $footerPlantilla = getFooter($jsonData);


    /** f_verificacion **/
    $f_verificacion = $obj->{'f_verificacion'};
    $f01_1 = $f_verificacion[0]->f01_1 ? $check : $uncheck;
    $f01_2 = $f_verificacion[0]->f01_2 ? $check : $uncheck;
    $f01_3 = $f_verificacion[0]->f01_3;
    $f02_1 = $f_verificacion[1]->f02_1 ? $check : $uncheck;
    $f02_2 = $f_verificacion[1]->f02_2 ? $check : $uncheck;
    $f02_3 = $f_verificacion[1]->f02_3;
    $f03_1 = $f_verificacion[2]->f03_1 ? $check : $uncheck;
    $f03_2 = $f_verificacion[2]->f03_2 ? $check : $uncheck;
    $f03_3 = $f_verificacion[2]->f03_3;
    $f04_1 = $f_verificacion[3]->f04_1 ? $check : $uncheck;
    $f04_2 = $f_verificacion[3]->f04_2 ? $check : $uncheck;
    $f04_3 = $f_verificacion[3]->f04_3;
    $f05_1 = $f_verificacion[4]->f05_1 ? $check : $uncheck;
    $f05_2 = $f_verificacion[4]->f05_2 ? $check : $uncheck;
    $f05_3 = $f_verificacion[4]->f05_3;
    $f06_1 = $f_verificacion[5]->f06_1 ? $check : $uncheck;
    $f06_2 = $f_verificacion[5]->f06_2 ? $check : $uncheck;
    $f06_3 = $f_verificacion[5]->f06_3;
    $f07_1 = $f_verificacion[6]->f07_1 ? $check : $uncheck;
    $f07_2 = $f_verificacion[6]->f07_2 ? $check : $uncheck;
    $f07_3 = $f_verificacion[6]->f07_3;
    $f08_1 = $f_verificacion[7]->f08_1 ? $check : $uncheck;
    $f08_2 = $f_verificacion[7]->f08_2 ? $check : $uncheck;
    $f08_3 = $f_verificacion[7]->f08_3;
    $f09_1 = $f_verificacion[8]->f09_1 ? $check : $uncheck;
    $f09_2 = $f_verificacion[8]->f09_2 ? $check : $uncheck;
    $f09_3 = $f_verificacion[8]->f09_3;

    /** g_desarrollo **/
    $g_desarrollo = $obj->{'g_desarrollo'};
    $g01_1 = $g_desarrollo[0]->g01_1 ? $check : $uncheck;
    $g01_2 = $g_desarrollo[0]->g01_2 ? $check : $uncheck;
    $g01_3 = $g_desarrollo[0]->g01_3;
    $g02_1 = $g_desarrollo[1]->g02_1 ? $check : $uncheck;
    $g02_2 = $g_desarrollo[1]->g02_2 ? $check : $uncheck;
    $g02_3 = $g_desarrollo[1]->g02_3;
    $g03_1 = $g_desarrollo[2]->g03_1 ? $check : $uncheck;
    $g03_2 = $g_desarrollo[2]->g03_2 ? $check : $uncheck;
    $g03_3 = $g_desarrollo[2]->g03_3;
    $g04_1 = $g_desarrollo[3]->g04_1 ? $check : $uncheck;
    $g04_2 = $g_desarrollo[3]->g04_2 ? $check : $uncheck;
    $g04_3 = $g_desarrollo[3]->g04_3;
    $g05_1 = $g_desarrollo[4]->g05_1 ? $check : $uncheck;
    $g05_2 = $g_desarrollo[4]->g05_2 ? $check : $uncheck;
    $g05_3 = $g_desarrollo[4]->g05_3;
    $g06_1 = $g_desarrollo[5]->g06_1 ? $check : $uncheck;
    $g06_2 = $g_desarrollo[5]->g06_2 ? $check : $uncheck;
    $g06_3 = $g_desarrollo[5]->g06_3;
    $g07_1 = $g_desarrollo[6]->g07_1 ? $check : $uncheck;
    $g07_2 = $g_desarrollo[6]->g07_2 ? $check : $uncheck;
    $g07_3 = $g_desarrollo[6]->g07_3;
    $g08_1 = $g_desarrollo[7]->g08_1 ? $check : $uncheck;
    $g08_2 = $g_desarrollo[7]->g08_2 ? $check : $uncheck;
    $g08_3 = $g_desarrollo[7]->g08_3;
    $g09_1 = $g_desarrollo[8]->g09_1;
    $g09_2 = $g_desarrollo[8]->g09_2;
    $g10_1 = $g_desarrollo[9]->g10_1;
    $g10_2 = $g_desarrollo[9]->g10_2;
    $g11_1 = $g_desarrollo[10]->g11_1;
    $g11_2 = $g_desarrollo[10]->g11_2;
    $g12_1 = $g_desarrollo[11]->g12_1;
    $g12_2 = $g_desarrollo[11]->g12_2;
    $g13_1 = $g_desarrollo[12]->g13_1;
    $g13_2 = $g_desarrollo[12]->g13_2;
    $g14_1 = $g_desarrollo[13]->g14_1;
    $g14_2 = $g_desarrollo[13]->g14_2;
    $g15_1 = $g_desarrollo[14]->g15_1;
    $g15_2 = $g_desarrollo[14]->g15_2;
    $g16_1 = $g_desarrollo[15]->g16_1;
    $g16_2 = $g_desarrollo[15]->g16_2;
    $g17_1 = $g_desarrollo[16]->g17_1;
    $g17_2 = $g_desarrollo[16]->g17_2;
    $g18_1 = $g_desarrollo[17]->g18_1;
    $g18_2 = $g_desarrollo[17]->g18_2;

    /** g_voltaje **/
    $g_voltaje = $obj->{'g_voltaje'};
    $g19_b01 = $g_voltaje->g19_b01;
    $g19_b02 = $g_voltaje->g19_b02;
    $g19_b03 = $g_voltaje->g19_b03;
    $g19_b04 = $g_voltaje->g19_b04;
    $g19_b05 = $g_voltaje->g19_b05;
    $g19_b06 = $g_voltaje->g19_b06;
    $g19_b07 = $g_voltaje->g19_b07;
    $g19_b08 = $g_voltaje->g19_b08;
    $g19_b09 = $g_voltaje->g19_b09;
    $g19_b10 = $g_voltaje->g19_b10;
    $g19_b11 = $g_voltaje->g19_b11;
    $g19_b12 = $g_voltaje->g19_b12;
    $g19_b13 = $g_voltaje->g19_b13;
    $g19_b14 = $g_voltaje->g19_b14;
    $g19_b15 = $g_voltaje->g19_b15;
    $g19_b16 = $g_voltaje->g19_b16;
    $g19_b17 = $g_voltaje->g19_b17;
    $g19_b18 = $g_voltaje->g19_b18;
    $g19_b19 = $g_voltaje->g19_b19;
    $g19_b20 = $g_voltaje->g19_b20;
    $g19_b21 = $g_voltaje->g19_b21;
    $g19_b22 = $g_voltaje->g19_b22;
    $g19_b23 = $g_voltaje->g19_b23;
    $g19_b24 = $g_voltaje->g19_b24;

    $g_descarga = $obj->{'g_descarga'};
    $g20_1_1 = $g_descarga->g20_1_1;
    $g20_1_2 = $g_descarga->g20_1_2;
    $g20_1_3 = $g_descarga->g20_1_3;
    $g20_2_1 = $g_descarga->g20_2_1;
    $g20_2_2 = $g_descarga->g20_2_2;
    $g20_2_3 = $g_descarga->g20_2_3;

    $g_resistencia_bb = $obj->{'g_resistencia_bb'};
    $g21_1 = $g_resistencia_bb->g21_1;
    $g21_2 = $g_resistencia_bb->g21_2;

    $plantilla =
'<body>
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                
                '. $cabecera .'
                                                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>F. Verificación Visual - Estado del Activo</strong></div>
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
                                <td class="col-10p">'.$f03_1.' Si</td>
                                <td class="col-10p">'.$f03_2.' No</td>
                                <td class="col-40p">Obs. '.$f03_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F04').'</td>
                                <td class="col-10p">'.$f04_1.' Si</td>
                                <td class="col-10p">'.$f04_2.' No</td>
                                <td class="col-40p">Obs. '.$f04_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F05').'</td>
                                <td class="col-10p">'.$f05_1.' Bueno</td>
                                <td class="col-10p">'.$f05_2.' Malo</td>
                                <td class="col-40p">Obs. '.$f05_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F06').'</td>
                                <td class="col-10p">'.$f06_1.' Si</td>
                                <td class="col-10p">'.$f06_2.' No</td>
                                <td class="col-40p">Obs. '.$f06_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F07').'</td>
                                <td class="col-10p">'.$f07_1.' Si</td>
                                <td class="col-10p">'.$f07_2.' No</td>
                                <td class="col-40p">Obs. '.$f07_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F08').'</td>
                                <td class="col-10p">'.$f08_1.' Si</td>
                                <td class="col-10p">'.$f08_2.' No</td>
                                <td class="col-40p">Obs. '.$f08_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('F09').'</td>
                                <td class="col-10p">'.$f09_1.' Si</td>
                                <td class="col-10p">'.$f09_2.' No</td>
                                <td class="col-40p">Obs. '.$f09_3.'</td>
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
                                <td class="col-40p">'.constant('G01').'</td>
                                <td class="col-10p">'.$g01_1.' Si</td>
                                <td class="col-10p">'.$g01_2.' No</td>
                                <td class="col-40p">Obs. '.$g01_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G02').'</td>
                                <td class="col-10p">'.$g02_1.' Si</td>
                                <td class="col-10p">'.$g02_2.' No</td>
                                <td class="col-40p">Obs. '.$g02_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G03').'</td>
                                <td class="col-10p">'.$g03_1.' Bueno</td>
                                <td class="col-10p">'.$g03_2.' Malo</td>
                                <td class="col-40p">Obs. '.$g03_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G04').'</td>
                                <td class="col-10p">'.$g04_1.' Bueno</td>
                                <td class="col-10p">'.$g04_2.' Malo</td>
                                <td class="col-40p">Obs. '.$g04_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G05').'</td>
                                <td class="col-10p">'.$g05_1.' Bueno</td>
                                <td class="col-10p">'.$g05_2.' Malo</td>
                                <td class="col-40p">Obs. '.$g05_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G06').'</td>
                                <td class="col-10p">'.$g06_1.' Bueno</td>
                                <td class="col-10p">'.$g06_2.' Malo</td>
                                <td class="col-40p">Obs. '.$g06_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G07').'</td>
                                <td class="col-10p">'.$g07_1.' Si</td>
                                <td class="col-10p">'.$g07_2.' No</td>
                                <td class="col-40p">Obs. '.$g07_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G08').'</td>
                                <td class="col-10p">'.$g08_1.' Si</td>
                                <td class="col-10p">'.$g08_2.' No</td>
                                <td class="col-40p">Obs. '.$g08_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G09').'</td>
                                <td class="col-10p num">'.$g09_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g09_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G10').'</td>
                                <td class="col-10p num">'.$g10_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g10_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G11').'</td>
                                <td class="col-10p num">'.$g11_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g11_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G12').'</td>
                                <td class="col-10p num">'.$g12_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g12_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G13').'</td>
                                <td class="col-10p num">'.$g13_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g13_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G14').'</td>
                                <td class="col-10p num">'.$g14_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g14_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G15').'</td>
                                <td class="col-10p num">'.$g15_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g15_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G16').'</td>
                                <td class="col-10p num">'.$g16_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g16_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G17').'</td>
                                <td class="col-10p num">'.$g17_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g17_2.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G18').'</td>
                                <td class="col-10p num">'.$g18_1.'</td>
                                <td class="col-10p"></td>
                                <td class="col-40p">Obs. '.$g18_2.'</td>
                            </tr>
                            <tr>
                                <td colspan="4">'.constant('G19').'</td>
                            </tr>
                            
                        </tbody>        
                    </table>									                        
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
                                                    <td><strong>N° Bat.</strong></td>
                                                    <td><strong>VDC</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B1</td>
                                                    <td>'.$g19_b01.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B2</td>
                                                    <td>'.$g19_b02.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B3</td>
                                                    <td>'.$g19_b03.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B4</td>
                                                    <td>'.$g19_b04.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B5</td>
                                                    <td>'.$g19_b05.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B6</td>
                                                    <td>'.$g19_b06.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td><strong>N° Bat.</strong></td>
                                                    <td><strong>VDC</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B7</td>
                                                    <td>'.$g19_b07.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B8</td>
                                                    <td>'.$g19_b08.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B9</td>
                                                    <td>'.$g19_b09.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B10</td>
                                                    <td>'.$g19_b10.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B11</td>
                                                    <td>'.$g19_b11.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B12</td>
                                                    <td>'.$g19_b12.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td><strong>N° Bat.</strong></td>
                                                    <td><strong>VDC</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B13</td>
                                                    <td>'.$g19_b13.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B14</td>
                                                    <td>'.$g19_b14.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B15</td>
                                                    <td>'.$g19_b15.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B16</td>
                                                    <td>'.$g19_b16.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B17</td>
                                                    <td>'.$g19_b17.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B18</td>
                                                    <td>'.$g19_b18.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td><strong>N° Bat.</strong></td>
                                                    <td><strong>VDC</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B19</td>
                                                    <td>'.$g19_b19.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B20</td>
                                                    <td>'.$g19_b20.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B21</td>
                                                    <td>'.$g19_b21.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B22</td>
                                                    <td>'.$g19_b22.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B23</td>
                                                    <td>'.$g19_b23.'</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B24</td>
                                                    <td>'.$g19_b24.'</td>
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
                                <td class="col-75p">G.20 Medidas por descarga BB:</td>
                                <td class="col-5p">Obs.</td>
                                <td class="col-20p"></td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="6">G.20.1 Datos de Hojas Tecnicas:</td>
                            </tr>
                            <tr>
                                <td class="col-25p">Corriente de descarga ADC:</td>
                                <td class="col-10p">'.$g20_1_1.'</td>
                                <td class="col-25p">Tiempo Noninal de descarga min:</td>
                                <td class="col-15p">'.$g20_1_2.'</td>
                                <td class="col-5p">Obs.</td>
                                <td class="col-20p">'.$g20_1_3.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <table class="tborder">
                        <tbody>
                            <tr>
                                <td colspan="6">G.20.2 Medidas en descarga:</td>
                            </tr>
                            <tr>
                                <td class="col-25p">Corriente de descarga ADC:</td>
                                <td class="col-10p">'.$g20_2_1.'</td>
                                <td class="col-25p">Tiempo Noninal de descarga min:</td>
                                <td class="col-15p">'.$g20_2_2.'</td>
                                <td class="col-5p">Obs.</td>
                                <td class="col-20p">'.$g20_2_3.'</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                
                '. $subPlantilla1 .'
                
                <main>
                    <table class="tborder">
                        <tr>
                            <td colspan="4">G.21 Medidas Resistencia Interna BB:</td>
                        </tr>
                        <tr>
                            <td colspan="4">G.21.a Datos de Hojas Tecnicas:</td>
                        </tr>
                        <tr>
                            <td class="col-30p">Valor aproximado mΩ</td>
                            <td class="col-30p">'.$g21_1.'</td>
                            <td class="col-10p">Obs.</td>
                            <td class="col-30p">'.$g21_2.'</td>
                        </tr>
                    </table>									                        
                </main>
                '. $subPlantilla2 .'
                '. $footerPlantilla .'
                </div>
            </div>
        </div>
	</div>
</body>
';

    return $plantilla;
}

function getSubPlantilla1($jsonData){

    $obj = json_decode($jsonData);
    $g_tiempo_tension = $obj->{'g_tiempo_tension'};
    $g_bb2_t1 = $g_tiempo_tension->g_bb2_t1;
    $g_bb2_t2 = $g_tiempo_tension->g_bb2_t2;
    $g_bb2_t3 = $g_tiempo_tension->g_bb2_t3;

    $g_bb2_b1_1 = $g_tiempo_tension->g_bb2_b1_1;
    $g_bb2_b1_2 = $g_tiempo_tension->g_bb2_b1_2;
    $g_bb2_b1_3 = $g_tiempo_tension->g_bb2_b1_3;
    $g_bb2_b1_4 = $g_tiempo_tension->g_bb2_b1_4;
    $g_bb2_b1_5 = $g_tiempo_tension->g_bb2_b1_5;
    $g_bb2_b1_6 = $g_tiempo_tension->g_bb2_b1_6;
    $g_bb2_b1_7 = $g_tiempo_tension->g_bb2_b1_7;
    $g_bb2_b1_8 = $g_tiempo_tension->g_bb2_b1_8;
    $g_bb2_b1_9  = $g_tiempo_tension->g_bb2_b1_9;
    $g_bb2_b1_10 = $g_tiempo_tension->g_bb2_b1_10;
    $g_bb2_b1_11 = $g_tiempo_tension->g_bb2_b1_11;

    $g_bb2_b2_1 = $g_tiempo_tension->g_bb2_b2_1;
    $g_bb2_b2_2 = $g_tiempo_tension->g_bb2_b2_2;
    $g_bb2_b2_3 = $g_tiempo_tension->g_bb2_b2_3;
    $g_bb2_b2_4 = $g_tiempo_tension->g_bb2_b2_4;
    $g_bb2_b2_5 = $g_tiempo_tension->g_bb2_b2_5;
    $g_bb2_b2_6 = $g_tiempo_tension->g_bb2_b2_6;
    $g_bb2_b2_7 = $g_tiempo_tension->g_bb2_b2_7;
    $g_bb2_b2_8 = $g_tiempo_tension->g_bb2_b2_8;
    $g_bb2_b2_9  = $g_tiempo_tension->g_bb2_b2_9;
    $g_bb2_b2_10 = $g_tiempo_tension->g_bb2_b2_10;
    $g_bb2_b2_11 = $g_tiempo_tension->g_bb2_b2_11;

    $g_bb2_b3_1 = $g_tiempo_tension->g_bb2_b3_1;
    $g_bb2_b3_2 = $g_tiempo_tension->g_bb2_b3_2;
    $g_bb2_b3_3 = $g_tiempo_tension->g_bb2_b3_3;
    $g_bb2_b3_4 = $g_tiempo_tension->g_bb2_b3_4;
    $g_bb2_b3_5 = $g_tiempo_tension->g_bb2_b3_5;
    $g_bb2_b3_6 = $g_tiempo_tension->g_bb2_b3_6;
    $g_bb2_b3_7 = $g_tiempo_tension->g_bb2_b3_7;
    $g_bb2_b3_8 = $g_tiempo_tension->g_bb2_b3_8;
    $g_bb2_b3_9  = $g_tiempo_tension->g_bb2_b3_9;
    $g_bb2_b3_10 = $g_tiempo_tension->g_bb2_b3_10;
    $g_bb2_b3_11 = $g_tiempo_tension->g_bb2_b3_11;

    $g_bb2_b4_1 = $g_tiempo_tension->g_bb2_b4_1;
    $g_bb2_b4_2 = $g_tiempo_tension->g_bb2_b4_2;
    $g_bb2_b4_3 = $g_tiempo_tension->g_bb2_b4_3;
    $g_bb2_b4_4 = $g_tiempo_tension->g_bb2_b4_4;
    $g_bb2_b4_5 = $g_tiempo_tension->g_bb2_b4_5;
    $g_bb2_b4_6 = $g_tiempo_tension->g_bb2_b4_6;
    $g_bb2_b4_7 = $g_tiempo_tension->g_bb2_b4_7;
    $g_bb2_b4_8 = $g_tiempo_tension->g_bb2_b4_8;
    $g_bb2_b4_9  = $g_tiempo_tension->g_bb2_b4_9;
    $g_bb2_b4_10 = $g_tiempo_tension->g_bb2_b4_10;
    $g_bb2_b4_11 = $g_tiempo_tension->g_bb2_b4_11;

    $g_bb2_b5_1 = $g_tiempo_tension->g_bb2_b5_1;
    $g_bb2_b5_2 = $g_tiempo_tension->g_bb2_b5_2;
    $g_bb2_b5_3 = $g_tiempo_tension->g_bb2_b5_3;
    $g_bb2_b5_4 = $g_tiempo_tension->g_bb2_b5_4;
    $g_bb2_b5_5 = $g_tiempo_tension->g_bb2_b5_5;
    $g_bb2_b5_6 = $g_tiempo_tension->g_bb2_b5_6;
    $g_bb2_b5_7 = $g_tiempo_tension->g_bb2_b5_7;
    $g_bb2_b5_8 = $g_tiempo_tension->g_bb2_b5_8;
    $g_bb2_b5_9  = $g_tiempo_tension->g_bb2_b5_9;
    $g_bb2_b5_10 = $g_tiempo_tension->g_bb2_b5_10;
    $g_bb2_b5_11 = $g_tiempo_tension->g_bb2_b5_11;

    $g_bb2_b6_1 = $g_tiempo_tension->g_bb2_b6_1;
    $g_bb2_b6_2 = $g_tiempo_tension->g_bb2_b6_2;
    $g_bb2_b6_3 = $g_tiempo_tension->g_bb2_b6_3;
    $g_bb2_b6_4 = $g_tiempo_tension->g_bb2_b6_4;
    $g_bb2_b6_5 = $g_tiempo_tension->g_bb2_b6_5;
    $g_bb2_b6_6 = $g_tiempo_tension->g_bb2_b6_6;
    $g_bb2_b6_7 = $g_tiempo_tension->g_bb2_b6_7;
    $g_bb2_b6_8 = $g_tiempo_tension->g_bb2_b6_8;
    $g_bb2_b6_9  = $g_tiempo_tension->g_bb2_b6_9;
    $g_bb2_b6_10 = $g_tiempo_tension->g_bb2_b6_10;
    $g_bb2_b6_11 = $g_tiempo_tension->g_bb2_b6_11;

    $g_bb2_b7_1 = $g_tiempo_tension->g_bb2_b7_1;
    $g_bb2_b7_2 = $g_tiempo_tension->g_bb2_b7_2;
    $g_bb2_b7_3 = $g_tiempo_tension->g_bb2_b7_3;
    $g_bb2_b7_4 = $g_tiempo_tension->g_bb2_b7_4;
    $g_bb2_b7_5 = $g_tiempo_tension->g_bb2_b7_5;
    $g_bb2_b7_6 = $g_tiempo_tension->g_bb2_b7_6;
    $g_bb2_b7_7 = $g_tiempo_tension->g_bb2_b7_7;
    $g_bb2_b7_8 = $g_tiempo_tension->g_bb2_b7_8;
    $g_bb2_b7_9  = $g_tiempo_tension->g_bb2_b7_9;
    $g_bb2_b7_10 = $g_tiempo_tension->g_bb2_b7_10;
    $g_bb2_b7_11 = $g_tiempo_tension->g_bb2_b7_11;

    $g_bb2_b8_1 = $g_tiempo_tension->g_bb2_b8_1;
    $g_bb2_b8_2 = $g_tiempo_tension->g_bb2_b8_2;
    $g_bb2_b8_3 = $g_tiempo_tension->g_bb2_b8_3;
    $g_bb2_b8_4 = $g_tiempo_tension->g_bb2_b8_4;
    $g_bb2_b8_5 = $g_tiempo_tension->g_bb2_b8_5;
    $g_bb2_b8_6 = $g_tiempo_tension->g_bb2_b8_6;
    $g_bb2_b8_7 = $g_tiempo_tension->g_bb2_b8_7;
    $g_bb2_b8_8 = $g_tiempo_tension->g_bb2_b8_8;
    $g_bb2_b8_9  = $g_tiempo_tension->g_bb2_b8_9;
    $g_bb2_b8_10 = $g_tiempo_tension->g_bb2_b8_10;
    $g_bb2_b8_11 = $g_tiempo_tension->g_bb2_b8_11;

    $g_bb2_b9_1 = $g_tiempo_tension->g_bb2_b9_1;
    $g_bb2_b9_2 = $g_tiempo_tension->g_bb2_b9_2;
    $g_bb2_b9_3 = $g_tiempo_tension->g_bb2_b9_3;
    $g_bb2_b9_4 = $g_tiempo_tension->g_bb2_b9_4;
    $g_bb2_b9_5 = $g_tiempo_tension->g_bb2_b9_5;
    $g_bb2_b9_6 = $g_tiempo_tension->g_bb2_b9_6;
    $g_bb2_b9_7 = $g_tiempo_tension->g_bb2_b9_7;
    $g_bb2_b9_8 = $g_tiempo_tension->g_bb2_b9_8;
    $g_bb2_b9_9  = $g_tiempo_tension->g_bb2_b9_9;
    $g_bb2_b9_10 = $g_tiempo_tension->g_bb2_b9_10;
    $g_bb2_b9_11 = $g_tiempo_tension->g_bb2_b9_11;

    $g_bb2_b10_1 = $g_tiempo_tension->g_bb2_b10_1;
    $g_bb2_b10_2 = $g_tiempo_tension->g_bb2_b10_2;
    $g_bb2_b10_3 = $g_tiempo_tension->g_bb2_b10_3;
    $g_bb2_b10_4 = $g_tiempo_tension->g_bb2_b10_4;
    $g_bb2_b10_5 = $g_tiempo_tension->g_bb2_b10_5;
    $g_bb2_b10_6 = $g_tiempo_tension->g_bb2_b10_6;
    $g_bb2_b10_7 = $g_tiempo_tension->g_bb2_b10_7;
    $g_bb2_b10_8 = $g_tiempo_tension->g_bb2_b10_8;
    $g_bb2_b10_9  = $g_tiempo_tension->g_bb2_b10_9;
    $g_bb2_b10_10 = $g_tiempo_tension->g_bb2_b10_10;
    $g_bb2_b10_11 = $g_tiempo_tension->g_bb2_b10_11;

    $g_bb2_b11_1 = $g_tiempo_tension->g_bb2_b11_1;
    $g_bb2_b11_2 = $g_tiempo_tension->g_bb2_b11_2;
    $g_bb2_b11_3 = $g_tiempo_tension->g_bb2_b11_3;
    $g_bb2_b11_4 = $g_tiempo_tension->g_bb2_b11_4;
    $g_bb2_b11_5 = $g_tiempo_tension->g_bb2_b11_5;
    $g_bb2_b11_6 = $g_tiempo_tension->g_bb2_b11_6;
    $g_bb2_b11_7 = $g_tiempo_tension->g_bb2_b11_7;
    $g_bb2_b11_8 = $g_tiempo_tension->g_bb2_b11_8;
    $g_bb2_b11_9  = $g_tiempo_tension->g_bb2_b11_9;
    $g_bb2_b11_10 = $g_tiempo_tension->g_bb2_b11_10;
    $g_bb2_b11_11 = $g_tiempo_tension->g_bb2_b11_11;

    $g_bb2_b12_1 = $g_tiempo_tension->g_bb2_b12_1;
    $g_bb2_b12_2 = $g_tiempo_tension->g_bb2_b12_2;
    $g_bb2_b12_3 = $g_tiempo_tension->g_bb2_b12_3;
    $g_bb2_b12_4 = $g_tiempo_tension->g_bb2_b12_4;
    $g_bb2_b12_5 = $g_tiempo_tension->g_bb2_b12_5;
    $g_bb2_b12_6 = $g_tiempo_tension->g_bb2_b12_6;
    $g_bb2_b12_7 = $g_tiempo_tension->g_bb2_b12_7;
    $g_bb2_b12_8 = $g_tiempo_tension->g_bb2_b12_8;
    $g_bb2_b12_9  = $g_tiempo_tension->g_bb2_b12_9;
    $g_bb2_b12_10 = $g_tiempo_tension->g_bb2_b12_10;
    $g_bb2_b12_11 = $g_tiempo_tension->g_bb2_b12_11;

    $g_bb2_b13_1 = $g_tiempo_tension->g_bb2_b13_1;
    $g_bb2_b13_2 = $g_tiempo_tension->g_bb2_b13_2;
    $g_bb2_b13_3 = $g_tiempo_tension->g_bb2_b13_3;
    $g_bb2_b13_4 = $g_tiempo_tension->g_bb2_b13_4;
    $g_bb2_b13_5 = $g_tiempo_tension->g_bb2_b13_5;
    $g_bb2_b13_6 = $g_tiempo_tension->g_bb2_b13_6;
    $g_bb2_b13_7 = $g_tiempo_tension->g_bb2_b13_7;
    $g_bb2_b13_8 = $g_tiempo_tension->g_bb2_b13_8;
    $g_bb2_b13_9  = $g_tiempo_tension->g_bb2_b13_9;
    $g_bb2_b13_10 = $g_tiempo_tension->g_bb2_b13_10;
    $g_bb2_b13_11 = $g_tiempo_tension->g_bb2_b13_11;

    $g_bb2_b14_1 = $g_tiempo_tension->g_bb2_b14_1;
    $g_bb2_b14_2 = $g_tiempo_tension->g_bb2_b14_2;
    $g_bb2_b14_3 = $g_tiempo_tension->g_bb2_b14_3;
    $g_bb2_b14_4 = $g_tiempo_tension->g_bb2_b14_4;
    $g_bb2_b14_5 = $g_tiempo_tension->g_bb2_b14_5;
    $g_bb2_b14_6 = $g_tiempo_tension->g_bb2_b14_6;
    $g_bb2_b14_7 = $g_tiempo_tension->g_bb2_b14_7;
    $g_bb2_b14_8 = $g_tiempo_tension->g_bb2_b14_8;
    $g_bb2_b14_9  = $g_tiempo_tension->g_bb2_b14_9;
    $g_bb2_b14_10 = $g_tiempo_tension->g_bb2_b14_10;
    $g_bb2_b14_11 = $g_tiempo_tension->g_bb2_b14_11;

    $g_bb2_b15_1 = $g_tiempo_tension->g_bb2_b15_1;
    $g_bb2_b15_2 = $g_tiempo_tension->g_bb2_b15_2;
    $g_bb2_b15_3 = $g_tiempo_tension->g_bb2_b15_3;
    $g_bb2_b15_4 = $g_tiempo_tension->g_bb2_b15_4;
    $g_bb2_b15_5 = $g_tiempo_tension->g_bb2_b15_5;
    $g_bb2_b15_6 = $g_tiempo_tension->g_bb2_b15_6;
    $g_bb2_b15_7 = $g_tiempo_tension->g_bb2_b15_7;
    $g_bb2_b15_8 = $g_tiempo_tension->g_bb2_b15_8;
    $g_bb2_b15_9  = $g_tiempo_tension->g_bb2_b15_9;
    $g_bb2_b15_10 = $g_tiempo_tension->g_bb2_b15_10;
    $g_bb2_b15_11 = $g_tiempo_tension->g_bb2_b15_11;

    $g_bb2_b16_1 = $g_tiempo_tension->g_bb2_b16_1;
    $g_bb2_b16_2 = $g_tiempo_tension->g_bb2_b16_2;
    $g_bb2_b16_3 = $g_tiempo_tension->g_bb2_b16_3;
    $g_bb2_b16_4 = $g_tiempo_tension->g_bb2_b16_4;
    $g_bb2_b16_5 = $g_tiempo_tension->g_bb2_b16_5;
    $g_bb2_b16_6 = $g_tiempo_tension->g_bb2_b16_6;
    $g_bb2_b16_7 = $g_tiempo_tension->g_bb2_b16_7;
    $g_bb2_b16_8 = $g_tiempo_tension->g_bb2_b16_8;
    $g_bb2_b16_9  = $g_tiempo_tension->g_bb2_b16_9;
    $g_bb2_b16_10 = $g_tiempo_tension->g_bb2_b16_10;
    $g_bb2_b16_11 = $g_tiempo_tension->g_bb2_b16_11;

    $g_bb2_b17_1 = $g_tiempo_tension->g_bb2_b17_1;
    $g_bb2_b17_2 = $g_tiempo_tension->g_bb2_b17_2;
    $g_bb2_b17_3 = $g_tiempo_tension->g_bb2_b17_3;
    $g_bb2_b17_4 = $g_tiempo_tension->g_bb2_b17_4;
    $g_bb2_b17_5 = $g_tiempo_tension->g_bb2_b17_5;
    $g_bb2_b17_6 = $g_tiempo_tension->g_bb2_b17_6;
    $g_bb2_b17_7 = $g_tiempo_tension->g_bb2_b17_7;
    $g_bb2_b17_8 = $g_tiempo_tension->g_bb2_b17_8;
    $g_bb2_b17_9  = $g_tiempo_tension->g_bb2_b17_9;
    $g_bb2_b17_10 = $g_tiempo_tension->g_bb2_b17_10;
    $g_bb2_b17_11 = $g_tiempo_tension->g_bb2_b17_11;

    $g_bb2_b18_1 = $g_tiempo_tension->g_bb2_b18_1;
    $g_bb2_b18_2 = $g_tiempo_tension->g_bb2_b18_2;
    $g_bb2_b18_3 = $g_tiempo_tension->g_bb2_b18_3;
    $g_bb2_b18_4 = $g_tiempo_tension->g_bb2_b18_4;
    $g_bb2_b18_5 = $g_tiempo_tension->g_bb2_b18_5;
    $g_bb2_b18_6 = $g_tiempo_tension->g_bb2_b18_6;
    $g_bb2_b18_7 = $g_tiempo_tension->g_bb2_b18_7;
    $g_bb2_b18_8 = $g_tiempo_tension->g_bb2_b18_8;
    $g_bb2_b18_9  = $g_tiempo_tension->g_bb2_b18_9;
    $g_bb2_b18_10 = $g_tiempo_tension->g_bb2_b18_10;
    $g_bb2_b18_11 = $g_tiempo_tension->g_bb2_b18_11;

    $g_bb2_b19_1 = $g_tiempo_tension->g_bb2_b19_1;
    $g_bb2_b19_2 = $g_tiempo_tension->g_bb2_b19_2;
    $g_bb2_b19_3 = $g_tiempo_tension->g_bb2_b19_3;
    $g_bb2_b19_4 = $g_tiempo_tension->g_bb2_b19_4;
    $g_bb2_b19_5 = $g_tiempo_tension->g_bb2_b19_5;
    $g_bb2_b19_6 = $g_tiempo_tension->g_bb2_b19_6;
    $g_bb2_b19_7 = $g_tiempo_tension->g_bb2_b19_7;
    $g_bb2_b19_8 = $g_tiempo_tension->g_bb2_b19_8;
    $g_bb2_b19_9  = $g_tiempo_tension->g_bb2_b19_9;
    $g_bb2_b19_10 = $g_tiempo_tension->g_bb2_b19_10;
    $g_bb2_b19_11 = $g_tiempo_tension->g_bb2_b19_11;

    $g_bb2_b20_1 = $g_tiempo_tension->g_bb2_b20_1;
    $g_bb2_b20_2 = $g_tiempo_tension->g_bb2_b20_2;
    $g_bb2_b20_3 = $g_tiempo_tension->g_bb2_b20_3;
    $g_bb2_b20_4 = $g_tiempo_tension->g_bb2_b20_4;
    $g_bb2_b20_5 = $g_tiempo_tension->g_bb2_b20_5;
    $g_bb2_b20_6 = $g_tiempo_tension->g_bb2_b20_6;
    $g_bb2_b20_7 = $g_tiempo_tension->g_bb2_b20_7;
    $g_bb2_b20_8 = $g_tiempo_tension->g_bb2_b20_8;
    $g_bb2_b20_9  = $g_tiempo_tension->g_bb2_b20_9;
    $g_bb2_b20_10 = $g_tiempo_tension->g_bb2_b20_10;
    $g_bb2_b20_11 = $g_tiempo_tension->g_bb2_b20_11;

    $g_bb2_b21_1 = $g_tiempo_tension->g_bb2_b21_1;
    $g_bb2_b21_2 = $g_tiempo_tension->g_bb2_b21_2;
    $g_bb2_b21_3 = $g_tiempo_tension->g_bb2_b21_3;
    $g_bb2_b21_4 = $g_tiempo_tension->g_bb2_b21_4;
    $g_bb2_b21_5 = $g_tiempo_tension->g_bb2_b21_5;
    $g_bb2_b21_6 = $g_tiempo_tension->g_bb2_b21_6;
    $g_bb2_b21_7 = $g_tiempo_tension->g_bb2_b21_7;
    $g_bb2_b21_8 = $g_tiempo_tension->g_bb2_b21_8;
    $g_bb2_b21_9  = $g_tiempo_tension->g_bb2_b21_9;
    $g_bb2_b21_10 = $g_tiempo_tension->g_bb2_b21_10;
    $g_bb2_b21_11 = $g_tiempo_tension->g_bb2_b21_11;

    $g_bb2_b22_1 = $g_tiempo_tension->g_bb2_b22_1;
    $g_bb2_b22_2 = $g_tiempo_tension->g_bb2_b22_2;
    $g_bb2_b22_3 = $g_tiempo_tension->g_bb2_b22_3;
    $g_bb2_b22_4 = $g_tiempo_tension->g_bb2_b22_4;
    $g_bb2_b22_5 = $g_tiempo_tension->g_bb2_b22_5;
    $g_bb2_b22_6 = $g_tiempo_tension->g_bb2_b22_6;
    $g_bb2_b22_7 = $g_tiempo_tension->g_bb2_b22_7;
    $g_bb2_b22_8 = $g_tiempo_tension->g_bb2_b22_8;
    $g_bb2_b22_9  = $g_tiempo_tension->g_bb2_b22_9;
    $g_bb2_b22_10 = $g_tiempo_tension->g_bb2_b22_10;
    $g_bb2_b22_11 = $g_tiempo_tension->g_bb2_b22_11;

    $g_bb2_b23_1 = $g_tiempo_tension->g_bb2_b23_1;
    $g_bb2_b23_2 = $g_tiempo_tension->g_bb2_b23_2;
    $g_bb2_b23_3 = $g_tiempo_tension->g_bb2_b23_3;
    $g_bb2_b23_4 = $g_tiempo_tension->g_bb2_b23_4;
    $g_bb2_b23_5 = $g_tiempo_tension->g_bb2_b23_5;
    $g_bb2_b23_6 = $g_tiempo_tension->g_bb2_b23_6;
    $g_bb2_b23_7 = $g_tiempo_tension->g_bb2_b23_7;
    $g_bb2_b23_8 = $g_tiempo_tension->g_bb2_b23_8;
    $g_bb2_b23_9  = $g_tiempo_tension->g_bb2_b23_9;
    $g_bb2_b23_10 = $g_tiempo_tension->g_bb2_b23_10;
    $g_bb2_b23_11 = $g_tiempo_tension->g_bb2_b23_11;

    $g_bb2_b24_1 = $g_tiempo_tension->g_bb2_b24_1;
    $g_bb2_b24_2 = $g_tiempo_tension->g_bb2_b24_2;
    $g_bb2_b24_3 = $g_tiempo_tension->g_bb2_b24_3;
    $g_bb2_b24_4 = $g_tiempo_tension->g_bb2_b24_4;
    $g_bb2_b24_5 = $g_tiempo_tension->g_bb2_b24_5;
    $g_bb2_b24_6 = $g_tiempo_tension->g_bb2_b24_6;
    $g_bb2_b24_7 = $g_tiempo_tension->g_bb2_b24_7;
    $g_bb2_b24_8 = $g_tiempo_tension->g_bb2_b24_8;
    $g_bb2_b24_9  = $g_tiempo_tension->g_bb2_b24_9;
    $g_bb2_b24_10 = $g_tiempo_tension->g_bb2_b24_10;
    $g_bb2_b24_11 = $g_tiempo_tension->g_bb2_b24_11;

    $plantilla = '
    <main>
        <table class="tborder text-center">
            <tbody>
                
                <tr>
                    <td class="col-15p" rowspan="3"><b>N° Bat.</b></td>
                    <td class="col-15p" rowspan="3"><b>I ADC</b></td>
                    <td class="col-70p" colspan="10"><b>TIEMPO MINUTOS</b></td>
                </tr>
                <tr>
                    <td><b>0</b></td>
                    <td><b>10</b></td>
                    <td><b>20</b></td>
                    <td><b>30</b></td>
                    <td><b>40</b></td>
                    <td><b>50</b></td>
                    <td><b>60</b></td>
                    <td><b>'.$g_bb2_t1.'</b></td>
                    <td><b>'.$g_bb2_t2.'</b></td>
                    <td><b>'.$g_bb2_t3.'</b></td>
                </tr>
                <tr>
                    <td colspan="10"><b>TENSION VDC</b></td>
                </tr>
                <tr>
                    <td>BB2-B1</td>
                    <td>'.$g_bb2_b1_1.'</td>
                    <td>'.$g_bb2_b1_2.'</td>
                    <td>'.$g_bb2_b1_3.'</td>
                    <td>'.$g_bb2_b1_4.'</td>
                    <td>'.$g_bb2_b1_5.'</td>
                    <td>'.$g_bb2_b1_6.'</td>
                    <td>'.$g_bb2_b1_7.'</td>
                    <td>'.$g_bb2_b1_8.'</td>
                    <td>'.$g_bb2_b1_9.'</td>
                    <td>'.$g_bb2_b1_10.'</td>
                    <td>'.$g_bb2_b1_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B2</td>
                    <td>'.$g_bb2_b2_1.'</td>
                    <td>'.$g_bb2_b2_2.'</td>
                    <td>'.$g_bb2_b2_3.'</td>
                    <td>'.$g_bb2_b2_4.'</td>
                    <td>'.$g_bb2_b2_5.'</td>
                    <td>'.$g_bb2_b2_6.'</td>
                    <td>'.$g_bb2_b2_7.'</td>
                    <td>'.$g_bb2_b2_8.'</td>
                    <td>'.$g_bb2_b2_9.'</td>
                    <td>'.$g_bb2_b2_10.'</td>
                    <td>'.$g_bb2_b2_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B3</td>
                    <td>'.$g_bb2_b3_1.'</td>
                    <td>'.$g_bb2_b3_2.'</td>
                    <td>'.$g_bb2_b3_3.'</td>
                    <td>'.$g_bb2_b3_4.'</td>
                    <td>'.$g_bb2_b3_5.'</td>
                    <td>'.$g_bb2_b3_6.'</td>
                    <td>'.$g_bb2_b3_7.'</td>
                    <td>'.$g_bb2_b3_8.'</td>
                    <td>'.$g_bb2_b3_9.'</td>
                    <td>'.$g_bb2_b3_10.'</td>
                    <td>'.$g_bb2_b3_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B4</td>
                    <td>'.$g_bb2_b4_1.'</td>
                    <td>'.$g_bb2_b4_2.'</td>
                    <td>'.$g_bb2_b4_3.'</td>
                    <td>'.$g_bb2_b4_4.'</td>
                    <td>'.$g_bb2_b4_5.'</td>
                    <td>'.$g_bb2_b4_6.'</td>
                    <td>'.$g_bb2_b4_7.'</td>
                    <td>'.$g_bb2_b4_8.'</td>
                    <td>'.$g_bb2_b4_9.'</td>
                    <td>'.$g_bb2_b4_10.'</td>
                    <td>'.$g_bb2_b4_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B5</td>
                    <td>'.$g_bb2_b5_1.'</td>
                    <td>'.$g_bb2_b5_2.'</td>
                    <td>'.$g_bb2_b5_3.'</td>
                    <td>'.$g_bb2_b5_4.'</td>
                    <td>'.$g_bb2_b5_5.'</td>
                    <td>'.$g_bb2_b5_6.'</td>
                    <td>'.$g_bb2_b5_7.'</td>
                    <td>'.$g_bb2_b5_8.'</td>
                    <td>'.$g_bb2_b5_9.'</td>
                    <td>'.$g_bb2_b5_10.'</td>
                    <td>'.$g_bb2_b5_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B6</td>
                    <td>'.$g_bb2_b6_1.'</td>
                    <td>'.$g_bb2_b6_2.'</td>
                    <td>'.$g_bb2_b6_3.'</td>
                    <td>'.$g_bb2_b6_4.'</td>
                    <td>'.$g_bb2_b6_5.'</td>
                    <td>'.$g_bb2_b6_6.'</td>
                    <td>'.$g_bb2_b6_7.'</td>
                    <td>'.$g_bb2_b6_8.'</td>
                    <td>'.$g_bb2_b6_9.'</td>
                    <td>'.$g_bb2_b6_10.'</td>
                    <td>'.$g_bb2_b6_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B7</td>
                    <td>'.$g_bb2_b7_1.'</td>
                    <td>'.$g_bb2_b7_2.'</td>
                    <td>'.$g_bb2_b7_3.'</td>
                    <td>'.$g_bb2_b7_4.'</td>
                    <td>'.$g_bb2_b7_5.'</td>
                    <td>'.$g_bb2_b7_6.'</td>
                    <td>'.$g_bb2_b7_7.'</td>
                    <td>'.$g_bb2_b7_8.'</td>
                    <td>'.$g_bb2_b7_9.'</td>
                    <td>'.$g_bb2_b7_10.'</td>
                    <td>'.$g_bb2_b7_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B8</td>
                    <td>'.$g_bb2_b8_1.'</td>
                    <td>'.$g_bb2_b8_2.'</td>
                    <td>'.$g_bb2_b8_3.'</td>
                    <td>'.$g_bb2_b8_4.'</td>
                    <td>'.$g_bb2_b8_5.'</td>
                    <td>'.$g_bb2_b8_6.'</td>
                    <td>'.$g_bb2_b8_7.'</td>
                    <td>'.$g_bb2_b8_8.'</td>
                    <td>'.$g_bb2_b8_9.'</td>
                    <td>'.$g_bb2_b8_10.'</td>
                    <td>'.$g_bb2_b8_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B9</td>
                    <td>'.$g_bb2_b9_1.'</td>
                    <td>'.$g_bb2_b9_2.'</td>
                    <td>'.$g_bb2_b9_3.'</td>
                    <td>'.$g_bb2_b9_4.'</td>
                    <td>'.$g_bb2_b9_5.'</td>
                    <td>'.$g_bb2_b9_6.'</td>
                    <td>'.$g_bb2_b9_7.'</td>
                    <td>'.$g_bb2_b9_8.'</td>
                    <td>'.$g_bb2_b9_9.'</td>
                    <td>'.$g_bb2_b9_10.'</td>
                    <td>'.$g_bb2_b9_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B10</td>
                    <td>'.$g_bb2_b10_1.'</td>
                    <td>'.$g_bb2_b10_2.'</td>
                    <td>'.$g_bb2_b10_3.'</td>
                    <td>'.$g_bb2_b10_4.'</td>
                    <td>'.$g_bb2_b10_5.'</td>
                    <td>'.$g_bb2_b10_6.'</td>
                    <td>'.$g_bb2_b10_7.'</td>
                    <td>'.$g_bb2_b10_8.'</td>
                    <td>'.$g_bb2_b10_9.'</td>
                    <td>'.$g_bb2_b10_10.'</td>
                    <td>'.$g_bb2_b10_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B11</td>
                    <td>'.$g_bb2_b11_1.'</td>
                    <td>'.$g_bb2_b11_2.'</td>
                    <td>'.$g_bb2_b11_3.'</td>
                    <td>'.$g_bb2_b11_4.'</td>
                    <td>'.$g_bb2_b11_5.'</td>
                    <td>'.$g_bb2_b11_6.'</td>
                    <td>'.$g_bb2_b11_7.'</td>
                    <td>'.$g_bb2_b11_8.'</td>
                    <td>'.$g_bb2_b11_9.'</td>
                    <td>'.$g_bb2_b11_10.'</td>
                    <td>'.$g_bb2_b11_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B12</td>
                    <td>'.$g_bb2_b12_1.'</td>
                    <td>'.$g_bb2_b12_2.'</td>
                    <td>'.$g_bb2_b12_3.'</td>
                    <td>'.$g_bb2_b12_4.'</td>
                    <td>'.$g_bb2_b12_5.'</td>
                    <td>'.$g_bb2_b12_6.'</td>
                    <td>'.$g_bb2_b12_7.'</td>
                    <td>'.$g_bb2_b12_8.'</td>
                    <td>'.$g_bb2_b12_9.'</td>
                    <td>'.$g_bb2_b12_10.'</td>
                    <td>'.$g_bb2_b12_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B13</td>
                    <td>'.$g_bb2_b13_1.'</td>
                    <td>'.$g_bb2_b13_2.'</td>
                    <td>'.$g_bb2_b13_3.'</td>
                    <td>'.$g_bb2_b13_4.'</td>
                    <td>'.$g_bb2_b13_5.'</td>
                    <td>'.$g_bb2_b13_6.'</td>
                    <td>'.$g_bb2_b13_7.'</td>
                    <td>'.$g_bb2_b13_8.'</td>
                    <td>'.$g_bb2_b13_9.'</td>
                    <td>'.$g_bb2_b13_10.'</td>
                    <td>'.$g_bb2_b13_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B14</td>
                    <td>'.$g_bb2_b14_1.'</td>
                    <td>'.$g_bb2_b14_2.'</td>
                    <td>'.$g_bb2_b14_3.'</td>
                    <td>'.$g_bb2_b14_4.'</td>
                    <td>'.$g_bb2_b14_5.'</td>
                    <td>'.$g_bb2_b14_6.'</td>
                    <td>'.$g_bb2_b14_7.'</td>
                    <td>'.$g_bb2_b14_8.'</td>
                    <td>'.$g_bb2_b14_9.'</td>
                    <td>'.$g_bb2_b14_10.'</td>
                    <td>'.$g_bb2_b14_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B15</td>
                    <td>'.$g_bb2_b15_1.'</td>
                    <td>'.$g_bb2_b15_2.'</td>
                    <td>'.$g_bb2_b15_3.'</td>
                    <td>'.$g_bb2_b15_4.'</td>
                    <td>'.$g_bb2_b15_5.'</td>
                    <td>'.$g_bb2_b15_6.'</td>
                    <td>'.$g_bb2_b15_7.'</td>
                    <td>'.$g_bb2_b15_8.'</td>
                    <td>'.$g_bb2_b15_9.'</td>
                    <td>'.$g_bb2_b15_10.'</td>
                    <td>'.$g_bb2_b15_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B16</td>
                    <td>'.$g_bb2_b16_1.'</td>
                    <td>'.$g_bb2_b16_2.'</td>
                    <td>'.$g_bb2_b16_3.'</td>
                    <td>'.$g_bb2_b16_4.'</td>
                    <td>'.$g_bb2_b16_5.'</td>
                    <td>'.$g_bb2_b16_6.'</td>
                    <td>'.$g_bb2_b16_7.'</td>
                    <td>'.$g_bb2_b16_8.'</td>
                    <td>'.$g_bb2_b16_9.'</td>
                    <td>'.$g_bb2_b16_10.'</td>
                    <td>'.$g_bb2_b16_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B17</td>
                    <td>'.$g_bb2_b17_1.'</td>
                    <td>'.$g_bb2_b17_2.'</td>
                    <td>'.$g_bb2_b17_3.'</td>
                    <td>'.$g_bb2_b17_4.'</td>
                    <td>'.$g_bb2_b17_5.'</td>
                    <td>'.$g_bb2_b17_6.'</td>
                    <td>'.$g_bb2_b17_7.'</td>
                    <td>'.$g_bb2_b17_8.'</td>
                    <td>'.$g_bb2_b17_9.'</td>
                    <td>'.$g_bb2_b17_10.'</td>
                    <td>'.$g_bb2_b17_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B18</td>
                    <td>'.$g_bb2_b18_1.'</td>
                    <td>'.$g_bb2_b18_2.'</td>
                    <td>'.$g_bb2_b18_3.'</td>
                    <td>'.$g_bb2_b18_4.'</td>
                    <td>'.$g_bb2_b18_5.'</td>
                    <td>'.$g_bb2_b18_6.'</td>
                    <td>'.$g_bb2_b18_7.'</td>
                    <td>'.$g_bb2_b18_8.'</td>
                    <td>'.$g_bb2_b18_9.'</td>
                    <td>'.$g_bb2_b18_10.'</td>
                    <td>'.$g_bb2_b18_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B19</td>
                    <td>'.$g_bb2_b19_1.'</td>
                    <td>'.$g_bb2_b19_2.'</td>
                    <td>'.$g_bb2_b19_3.'</td>
                    <td>'.$g_bb2_b19_4.'</td>
                    <td>'.$g_bb2_b19_5.'</td>
                    <td>'.$g_bb2_b19_6.'</td>
                    <td>'.$g_bb2_b19_7.'</td>
                    <td>'.$g_bb2_b19_8.'</td>
                    <td>'.$g_bb2_b19_9.'</td>
                    <td>'.$g_bb2_b19_10.'</td>
                    <td>'.$g_bb2_b19_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B20</td>
                    <td>'.$g_bb2_b20_1.'</td>
                    <td>'.$g_bb2_b20_2.'</td>
                    <td>'.$g_bb2_b20_3.'</td>
                    <td>'.$g_bb2_b20_4.'</td>
                    <td>'.$g_bb2_b20_5.'</td>
                    <td>'.$g_bb2_b20_6.'</td>
                    <td>'.$g_bb2_b20_7.'</td>
                    <td>'.$g_bb2_b20_8.'</td>
                    <td>'.$g_bb2_b20_9.'</td>
                    <td>'.$g_bb2_b20_10.'</td>
                    <td>'.$g_bb2_b20_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B21</td>
                    <td>'.$g_bb2_b21_1.'</td>
                    <td>'.$g_bb2_b21_2.'</td>
                    <td>'.$g_bb2_b21_3.'</td>
                    <td>'.$g_bb2_b21_4.'</td>
                    <td>'.$g_bb2_b21_5.'</td>
                    <td>'.$g_bb2_b21_6.'</td>
                    <td>'.$g_bb2_b21_7.'</td>
                    <td>'.$g_bb2_b21_8.'</td>
                    <td>'.$g_bb2_b21_9.'</td>
                    <td>'.$g_bb2_b21_10.'</td>
                    <td>'.$g_bb2_b21_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B22</td>
                    <td>'.$g_bb2_b22_1.'</td>
                    <td>'.$g_bb2_b22_2.'</td>
                    <td>'.$g_bb2_b22_3.'</td>
                    <td>'.$g_bb2_b22_4.'</td>
                    <td>'.$g_bb2_b22_5.'</td>
                    <td>'.$g_bb2_b22_6.'</td>
                    <td>'.$g_bb2_b22_7.'</td>
                    <td>'.$g_bb2_b22_8.'</td>
                    <td>'.$g_bb2_b22_9.'</td>
                    <td>'.$g_bb2_b22_10.'</td>
                    <td>'.$g_bb2_b22_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B23</td>
                    <td>'.$g_bb2_b23_1.'</td>
                    <td>'.$g_bb2_b23_2.'</td>
                    <td>'.$g_bb2_b23_3.'</td>
                    <td>'.$g_bb2_b23_4.'</td>
                    <td>'.$g_bb2_b23_5.'</td>
                    <td>'.$g_bb2_b23_6.'</td>
                    <td>'.$g_bb2_b23_7.'</td>
                    <td>'.$g_bb2_b23_8.'</td>
                    <td>'.$g_bb2_b23_9.'</td>
                    <td>'.$g_bb2_b23_10.'</td>
                    <td>'.$g_bb2_b23_11.'</td>
                </tr>
                <tr>
                    <td>BB2-B24</td>
                    <td>'.$g_bb2_b24_1.'</td>
                    <td>'.$g_bb2_b24_2.'</td>
                    <td>'.$g_bb2_b24_3.'</td>
                    <td>'.$g_bb2_b24_4.'</td>
                    <td>'.$g_bb2_b24_5.'</td>
                    <td>'.$g_bb2_b24_6.'</td>
                    <td>'.$g_bb2_b24_7.'</td>
                    <td>'.$g_bb2_b24_8.'</td>
                    <td>'.$g_bb2_b24_9.'</td>
                    <td>'.$g_bb2_b24_10.'</td>
                    <td>'.$g_bb2_b24_11.'</td>
                </tr>
                
            </tbody>        
        </table>									                        
    </main>
    ';

    return $plantilla;
}

function getSubPlantilla2($jsonData){

    $obj = json_decode($jsonData);

    $g22_medidas = $obj->{'g22_medidas'};
    $g22_obs = $g22_medidas->g22_obs;
    $g22_b01 = $g22_medidas->g22_b01;
    $g22_b02 = $g22_medidas->g22_b02;
    $g22_b03 = $g22_medidas->g22_b03;
    $g22_b04 = $g22_medidas->g22_b04;
    $g22_b05 = $g22_medidas->g22_b05;
    $g22_b06 = $g22_medidas->g22_b06;
    $g22_b07 = $g22_medidas->g22_b07;
    $g22_b08 = $g22_medidas->g22_b08;
    $g22_b09 = $g22_medidas->g22_b09;
    $g22_b10 = $g22_medidas->g22_b10;
    $g22_b11 = $g22_medidas->g22_b11;
    $g22_b12 = $g22_medidas->g22_b12;
    $g22_b13 = $g22_medidas->g22_b13;
    $g22_b14 = $g22_medidas->g22_b14;
    $g22_b15 = $g22_medidas->g22_b15;
    $g22_b16 = $g22_medidas->g22_b16;
    $g22_b17 = $g22_medidas->g22_b17;
    $g22_b18 = $g22_medidas->g22_b18;
    $g22_b19 = $g22_medidas->g22_b19;
    $g22_b20 = $g22_medidas->g22_b20;
    $g22_b21 = $g22_medidas->g22_b21;
    $g22_b22 = $g22_medidas->g22_b22;
    $g22_b23 = $g22_medidas->g22_b23;
    $g22_b24 = $g22_medidas->g22_b24;

    $plantilla =
    '<main>
        <table class="tborder">
            <tr>
                <td class="col-60p">G.22.b Medidas realizadas:</td>
                <td class="col-10p">Obs.</td>
                <td class="col-30p">'.$g22_obs.'</td>
            </tr>
        </table>									                        
    </main>         
    <main>
        <table>
            <tr>
                <td>
                    <table class="tborder">
                        <tr>
                            <td><strong>N° Bat.</strong></td>
                            <td><strong>VDC</strong></td>
                        </tr>
                        <tr>
                            <td>BB2-B1</td>
                            <td>'.$g22_b01.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B2</td>
                            <td>'.$g22_b02.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B3</td>
                            <td>'.$g22_b03.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B4</td>
                            <td>'.$g22_b04.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B5</td>
                            <td>'.$g22_b05.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B6</td>
                            <td>'.$g22_b06.'</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="tborder">
                        <tr>
                            <td><strong>N° Bat.</strong></td>
                            <td><strong>VDC</strong></td>
                        </tr>
                        <tr>
                            <td>BB2-B7</td>
                            <td>'.$g22_b07.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B8</td>
                            <td>'.$g22_b08.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B9</td>
                            <td>'.$g22_b09.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B10</td>
                            <td>'.$g22_b10.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B11</td>
                            <td>'.$g22_b11.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B12</td>
                            <td>'.$g22_b12.'</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="tborder">
                        <tr>
                            <td><strong>N° Bat.</strong></td>
                            <td><strong>VDC</strong></td>
                        </tr>
                        <tr>
                            <td>BB2-B13</td>
                            <td>'.$g22_b13.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B14</td>
                            <td>'.$g22_b14.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B15</td>
                            <td>'.$g22_b15.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B16</td>
                            <td>'.$g22_b16.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B17</td>
                            <td>'.$g22_b17.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B18</td>
                            <td>'.$g22_b18.'</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="tborder">
                        <tr>
                            <td><strong>N° Bat.</strong></td>
                            <td><strong>VDC</strong></td>
                        </tr>
                        <tr>
                            <td>BB2-B19</td>
                            <td>'.$g22_b19.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B20</td>
                            <td>'.$g22_b20.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B21</td>
                            <td>'.$g22_b21.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B22</td>
                            <td>'.$g22_b22.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B23</td>
                            <td>'.$g22_b23.'</td>
                        </tr>
                        <tr>
                            <td>BB2-B24</td>
                            <td>'.$g22_b24.'</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </main>';

    return $plantilla;
}

?>