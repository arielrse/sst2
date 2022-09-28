<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idevento){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $titulo = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE ALIMENTACION ININTERRUMPIDA';
    $cabecera        = getCabeceraRutina13($conexion, $jsonData, $idgrupo, $titulo, $idevento);
    $footerPlantilla = getFooter($jsonData);
    //---------------------------

    /** g_desarrollo **/

    $e_contacto = $obj->{'e_contacto'};

    $e_01_01 = $e_contacto->e_01_01; $e_01_02 = $e_contacto->e_01_02;
    $e_02_01 = $e_contacto->e_02_01; $e_02_02 = $e_contacto->e_02_02;
    $e_03_01 = $e_contacto->e_03_01; $e_03_02 = $e_contacto->e_03_02;
    $e_04_01 = $e_contacto->e_04_01; $e_04_02 = $e_contacto->e_04_02;

    /* f_predio */
    $f_predio = $obj->{'f_predio'};
    $f_01_01 = $f_predio->f_01_01; $f_01_02 = $f_predio->f_01_02; $f_01_03 = $f_predio->f_01_03;
    $f_02_01 = $f_predio->f_02_01; $f_02_02 = $f_predio->f_02_02;
    $f_03_01 = $f_predio->f_03_01; $f_03_02 = $f_predio->f_03_02;

    /* g_estructura */
    $g_estructura = $obj->{'g_estructura'};
    $g_01_01 = $g_estructura->g_01_01; $g_01_02 = $g_estructura->g_01_02; $g_01_03 = $g_estructura->g_01_03;
    $g_02_01 = $g_estructura->g_02_01; $g_02_02 = $g_estructura->g_02_02; $g_02_03 = $g_estructura->g_02_03;

    $h_desarrollo = $obj->{'h_desarrollo'};
    $h_01_01 = $h_desarrollo->h_01_01 ? $check : $uncheck; $h_01_02 = $h_desarrollo->h_01_02 ? $check : $uncheck; $h_01_03 = $h_desarrollo->h_01_03;
    $h_02_01 = $h_desarrollo->h_02_01 ? $check : $uncheck; $h_02_02 = $h_desarrollo->h_02_02 ? $check : $uncheck; $h_02_03 = $h_desarrollo->h_02_03;
    $h_03_01 = $h_desarrollo->h_03_01 ? $check : $uncheck; $h_03_02 = $h_desarrollo->h_03_02 ? $check : $uncheck; $h_03_03 = $h_desarrollo->h_03_03;
    $h_04_01 = $h_desarrollo->h_04_01 ? $check : $uncheck; $h_04_02 = $h_desarrollo->h_04_02 ? $check : $uncheck; $h_04_03 = $h_desarrollo->h_04_03;
    $h_05_01 = $h_desarrollo->h_05_01 ? $check : $uncheck; $h_05_02 = $h_desarrollo->h_05_02 ? $check : $uncheck; $h_05_03 = $h_desarrollo->h_05_03;
    $h_06_01 = $h_desarrollo->h_06_01 ? $check : $uncheck; $h_06_02 = $h_desarrollo->h_06_02 ? $check : $uncheck; $h_06_03 = $h_desarrollo->h_06_03;
    $h_07_01 = $h_desarrollo->h_07_01 ? $check : $uncheck; $h_07_02 = $h_desarrollo->h_07_02 ? $check : $uncheck; $h_07_03 = $h_desarrollo->h_07_03;
    $h_08_01 = $h_desarrollo->h_08_01 ? $check : $uncheck; $h_08_02 = $h_desarrollo->h_08_02 ? $check : $uncheck; $h_08_03 = $h_desarrollo->h_08_03;
    $h_09_01 = $h_desarrollo->h_09_01 ? $check : $uncheck; $h_09_02 = $h_desarrollo->h_09_02 ? $check : $uncheck; $h_09_03 = $h_desarrollo->h_09_03;
    $h_10_01 = $h_desarrollo->h_10_01 ? $check : $uncheck; $h_10_02 = $h_desarrollo->h_10_02 ? $check : $uncheck; $h_10_03 = $h_desarrollo->h_10_03;
    $h_11_01 = $h_desarrollo->h_11_01 ? $check : $uncheck; $h_11_02 = $h_desarrollo->h_11_02 ? $check : $uncheck; $h_11_03 = $h_desarrollo->h_11_03;
    $h_12_01 = $h_desarrollo->h_12_01 ? $check : $uncheck; $h_12_02 = $h_desarrollo->h_12_02 ? $check : $uncheck; $h_12_03 = $h_desarrollo->h_12_03;
    $h_13_01 = $h_desarrollo->h_13_01 ? $check : $uncheck; $h_13_02 = $h_desarrollo->h_13_02 ? $check : $uncheck; $h_13_03 = $h_desarrollo->h_13_03;
    $h_14_01 = $h_desarrollo->h_14_01 ? $check : $uncheck; $h_14_02 = $h_desarrollo->h_14_02 ? $check : $uncheck; $h_14_03 = $h_desarrollo->h_14_03;
    $h_15_01 = $h_desarrollo->h_15_01 ? $check : $uncheck; $h_15_02 = $h_desarrollo->h_15_02 ? $check : $uncheck; $h_15_03 = $h_desarrollo->h_15_03;
    $h_16_01 = $h_desarrollo->h_16_01 ? $check : $uncheck; $h_16_02 = $h_desarrollo->h_16_02 ? $check : $uncheck; $h_16_03 = $h_desarrollo->h_16_03;
    $h_17_01 = $h_desarrollo->h_17_01 ? $check : $uncheck; $h_17_02 = $h_desarrollo->h_17_02 ? $check : $uncheck; $h_17_03 = $h_desarrollo->h_17_03;
    $h_18_01 = $h_desarrollo->h_18_01 ? $check : $uncheck; $h_18_02 = $h_desarrollo->h_18_02 ? $check : $uncheck; $h_18_03 = $h_desarrollo->h_18_03;
    $h_19_01 = $h_desarrollo->h_19_01 ? $check : $uncheck; $h_19_02 = $h_desarrollo->h_19_02 ? $check : $uncheck; $h_19_03 = $h_desarrollo->h_19_03;
    $h_20_01 = $h_desarrollo->h_20_01 ? $check : $uncheck; $h_20_02 = $h_desarrollo->h_20_02 ? $check : $uncheck; $h_20_03 = $h_desarrollo->h_20_03;
    $h_21_01 = $h_desarrollo->h_21_01 ? $check : $uncheck; $h_21_02 = $h_desarrollo->h_21_02 ? $check : $uncheck; $h_21_03 = $h_desarrollo->h_21_03;
    $h_22_01 = $h_desarrollo->h_22_01 ? $check : $uncheck; $h_22_02 = $h_desarrollo->h_22_02 ? $check : $uncheck; $h_22_03 = $h_desarrollo->h_22_03;
    $h_23_01 = $h_desarrollo->h_23_01 ? $check : $uncheck; $h_23_02 = $h_desarrollo->h_23_02 ? $check : $uncheck; $h_23_03 = $h_desarrollo->h_23_03;
    $h_24_01 = $h_desarrollo->h_24_01 ? $check : $uncheck; $h_24_02 = $h_desarrollo->h_24_02 ? $check : $uncheck; $h_24_03 = $h_desarrollo->h_24_03;
    $h_25_01 = $h_desarrollo->h_25_01 ? $check : $uncheck; $h_25_02 = $h_desarrollo->h_25_02 ? $check : $uncheck; $h_25_03 = $h_desarrollo->h_25_03;
    $h_26_01 = $h_desarrollo->h_26_01 ? $check : $uncheck; $h_26_02 = $h_desarrollo->h_26_02 ? $check : $uncheck; $h_26_03 = $h_desarrollo->h_26_03;
    $h_27_01 = $h_desarrollo->h_27_01 ? $check : $uncheck; $h_27_02 = $h_desarrollo->h_27_02 ? $check : $uncheck; $h_27_03 = $h_desarrollo->h_27_03;

    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '.$cabecera.'
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('ETITLE').'</strong></div>
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
                                                    <td class="col-30p">Nombres y apellidos</td>
                                                    <td class="col-70p">'.$e_01_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Telefono celular</td>
                                                    <td class="col-70p">'.$e_02_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Nombres y apellidos</td>
                                                    <td class="col-70p">'.$e_03_01.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Telefono celular</td>
                                                    <td class="col-70p">'. $e_04_01.'</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td class="col-30p">Tipo Contacto</td>
                                                    <td class="col-70p">'.$e_01_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Telefono fijo</td>
                                                    <td class="col-70p">'.$e_02_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Tipo Contacto</td>
                                                    <td class="col-70p">'.$e_03_02.'</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-30p">Telefono fijo</td>
                                                    <td class="col-70p">'. $e_04_02.'</td>
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
                        <div class="notice"><strong>'.constant('FTITLE').'</strong></div>
                    </div>
                    <table border="1">
                        <tbody>
                            <tr></tr>
                            <tr>
                                <td class="col-20p">'.constant('F01').'</td>
                                <td class="col-15p num">'.  $f_01_01 . '</td>
                                <td class="col-20p">'.constant('F01_01').'</td>
                                <td class="col-10p num">'.  $f_01_02 . '</td>
                                <td class="col-20p">'.constant('F01_02').'</td>
                                <td class="col-15p num">'.  $f_01_03 . '</td>
                                
                            </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td class="col-25p">'.constant('F02').'</td>
                                <td class="col-20p num">'. $f_02_01 . '</td>
                                <td class="col-20p">'.constant('F02_01').'</td>
                                <td class="col-25p num">'.  $f_02_02 . '</td>
                            </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td class="col-25p">'.constant('F03').'</td>
                                <td class="col-20p num">'. $f_03_01 . '</td>
                                <td class="col-20p">'.constant('F03_01').'</td>
                                <td class="col-25p num">'.  $f_03_02 . '</td>
                            </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                     <div class="notices">
                        <div class="notice"><strong>'.constant('GTITLE').'</strong></div>
                    </div>
                    <table border="1">
                        <tbody>
                            
                            <tr>
                                <td class="col-20p">'.constant('G01').'</td>
                                <td class="col-15p num">'.  $g_01_01 . '</td>
                                <td class="col-20p">'.constant('G01_01').'</td>
                                <td class="col-10p num">'.  $g_01_02 . '</td>
                                <td class="col-15p">'.constant('G01_02').'</td>
                                <td class="col-20p num">'.  $g_01_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-20p">'.constant('G02').'</td>
                                <td class="col-15p num">'.  $g_02_01 . '</td>
                                <td class="col-20p">'.constant('G02_01').'</td>
                                <td class="col-10p num">'.  $g_02_02 . '</td>
                                <td class="col-15p">'.constant('G02_02').'</td>
                                <td class="col-20p num">'.  $g_02_03 . '</td>
                             </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                     <div class="notices">
                        <div class="notice"><strong>'.constant('HTITLE').'</strong></div>
                    </div>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('HTITLE1').'</strong></td>
                                <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('H01').'</td>
                                <td class="col-10p">'.  $h_01_01 . ' Si</td>
                                <td class="col-10p">'.  $h_01_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_01_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('H02').'</td>
                                <td class="col-10p">'.  $h_02_01 . ' Si</td>
                                <td class="col-10p">'.  $h_02_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_02_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H03').'</td>
                                <td class="col-10p">'.  $h_03_01 . ' Si</td>
                                <td class="col-10p">'.  $h_03_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_03_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H04').'</td>
                                <td class="col-10p">'.  $h_04_01 . ' Si</td>
                                <td class="col-10p">'.  $h_04_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_04_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H05').'</td>
                                <td class="col-10p">'.  $h_05_01 . ' Si</td>
                                <td class="col-10p">'.  $h_05_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_05_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H06').'</td>
                                <td class="col-10p">'.  $h_06_01 . ' Si</td>
                                <td class="col-10p">'.  $h_06_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_06_03 . '</td>
                             </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('HTITLE2').'</strong></td>
                                <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('H07').'</td>
                                <td class="col-10p">'.  $h_07_01 . ' Si</td>
                                <td class="col-10p">'.  $h_07_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_07_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('H08').'</td>
                                <td class="col-10p">'.  $h_08_01 . ' Si</td>
                                <td class="col-10p">'.  $h_08_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_08_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H09').'</td>
                                <td class="col-10p">'.  $h_09_01 . ' Si</td>
                                <td class="col-10p">'.  $h_09_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_09_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H10').'</td>
                                <td class="col-10p">'.  $h_10_01 . ' Si</td>
                                <td class="col-10p">'.  $h_10_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_10_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H11').'</td>
                                <td class="col-10p">'.  $h_11_01 . ' Si</td>
                                <td class="col-10p">'.  $h_11_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_11_03 . '</td>
                             </tr>
                        </tbody>        
                    </table>
               </main> 
                <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('HTITLE3').'</strong></td>
                                <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('H12').'</td>
                                <td class="col-10p">'.  $h_12_01 . ' Si</td>
                                <td class="col-10p">'.  $h_12_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_12_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('H13').'</td>
                                <td class="col-10p">'.  $h_13_01 . ' Si</td>
                                <td class="col-10p">'.  $h_13_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_13_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H14').'</td>
                                <td class="col-10p">'.  $h_14_01 . ' Si</td>
                                <td class="col-10p">'.  $h_14_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_14_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H15').'</td>
                                <td class="col-10p">'.  $h_15_01 . ' Si</td>
                                <td class="col-10p">'.  $h_15_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_15_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H16').'</td>
                                <td class="col-10p">'.  $h_16_01 . ' Si</td>
                                <td class="col-10p">'.  $h_16_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_16_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H17').'</td>
                                <td class="col-10p">'.  $h_17_01 . ' Si</td>
                                <td class="col-10p">'.  $h_17_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_17_03 . '</td>
                             </tr>
                        </tbody>        
                    </table>
               </main>
               <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="3"><strong>'.constant('HTITLE4').'</strong></td>
                                <td class="text-center"><strong>Observaciones</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">'.constant('H18').'</td>
                                <td class="col-10p">'.  $h_18_01 . ' Si</td>
                                <td class="col-10p">'.  $h_18_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_18_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('H19').'</td>
                                <td class="col-10p">'.  $h_19_01 . ' Si</td>
                                <td class="col-10p">'.  $h_19_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_19_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H20').'</td>
                                <td class="col-10p">'.  $h_20_01 . ' Si</td>
                                <td class="col-10p">'.  $h_20_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_20_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H21').'</td>
                                <td class="col-10p">'.  $h_21_01 . ' Si</td>
                                <td class="col-10p">'.  $h_21_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_21_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H22').'</td>
                                <td class="col-10p">'.  $h_22_01 . ' Si</td>
                                <td class="col-10p">'.  $h_22_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_22_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H23').'</td>
                                <td class="col-10p">'.  $h_23_01 . ' Si</td>
                                <td class="col-10p">'.  $h_23_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_23_03 . '</td>
                             </tr>
                             <tr>
                                <td class="col-50p">'.constant('H24').'</td>
                                <td class="col-10p">'.  $h_24_01 . ' Si</td>
                                <td class="col-10p">'.  $h_24_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_24_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H25').'</td>
                                <td class="col-10p">'.  $h_25_01 . ' Si</td>
                                <td class="col-10p">'.  $h_25_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_25_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H26').'</td>
                                <td class="col-10p">'.  $h_26_01 . ' Si</td>
                                <td class="col-10p">'.  $h_26_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_26_03 . '</td>
                             </tr>
                              <tr>
                                <td class="col-50p">'.constant('H27').'</td>
                                <td class="col-10p">'.  $h_27_01 . ' Si</td>
                                <td class="col-10p">'.  $h_27_02 . ' No</td>
                                <td class="col-30p">Obs. '.  $h_27_03 . '</td>
                             </tr>
                        </tbody>        
                    </table>
               </main> 
               '.$footerPlantilla.'   
                </div>
            </div>
        </div>
	</div>
    
</body>';

    return $plantilla;
}

?>