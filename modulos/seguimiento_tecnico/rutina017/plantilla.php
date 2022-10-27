<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo, $idevento, $idrutinax, $titulosArr){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cabecera        = getCabeceraRutina17($conexion, $jsonData, $idgrupo, $idevento, $titulosArr);
    $footerPlantilla = getFooter($jsonData);

    $reporteFotog    = getReporteFotog($conexion, $idrutinax, '017');
    $footerPlantilla .= $reporteFotog;

    /** Diagrama */
    $query = "select id, imagen from rutina017 where id='$idrutinax'";
    $resultado = mysqli_query($conexion, $query);
    $resArr = mysqli_fetch_array($resultado);
    $nombreImagen = $resArr['imagen'];



    /** g_desarrollo **/

    $d_herbicida = $obj->{'d_herbicida'};
//$e_01_01 = $e_contacto->e_01_01; $e_01_02 = $e_contacto->e_01_02;
//$f01_1 = $f_verificacion->f01_1 ? $check : $uncheck; $f01_2 = $f_verificacion->f01_2 ? $check : $uncheck; $f01_3 = $f_verificacion->f01_3;
    $d_01_01 = $d_herbicida->d_01_01; $d_01_02 = $d_herbicida->d_01_02;
    $d_02_01 = $d_herbicida->d_02_01; $d_02_02 = $d_herbicida->d_02_02;
    $d_03_01 = $d_herbicida->d_03_01; $d_03_02 = $d_herbicida->d_03_02;
    $d_04_02 = $d_herbicida->d_04_02;
    $d_05_01 = $d_herbicida->d_05_01 ? $check : $uncheck; $d_05_02 = $d_herbicida->d_05_02 ? $check : $uncheck;
    $d_06_01 = $d_herbicida->d_06_01;
    $d_07_01 = $d_herbicida->d_07_01;
    $d_08_01 = $d_herbicida->d_08_01 ? $check : $uncheck;
    $d_08_02 = $d_herbicida->d_08_02 ? $check : $uncheck;
    $d_08_03 = $d_herbicida->d_08_03 ? $check : $uncheck;
    $d_08_04 = $d_herbicida->d_08_04 ? $check : $uncheck;
    $d_08_05 = $d_herbicida->d_08_05 ? $check : $uncheck;
    $d_08_06 = $d_herbicida->d_08_06 ? $check : $uncheck;
    $d_08_07 = $d_herbicida->d_08_07 ? $check : $uncheck;
    $d_08_08 = $d_herbicida->d_08_08 ? $check : $uncheck;
    $d_08_09 = $d_herbicida->d_08_09 ? $check : $uncheck;
    $a_datos = $obj->{'a_datos'};
    $a_01_01 = $a_datos->a_01_01; $a_01_02 = $a_datos->a_01_02; $a_01_03 = $a_datos->a_01_03;
    $a_02_01 = $a_datos->a_02_01; $a_02_02 = $a_datos->a_02_02; $a_02_03 = $a_datos->a_02_03;
    $a_03_01 = $a_datos->a_03_01; $a_03_02 = $a_datos->a_03_02; $a_03_03 = $a_datos->a_03_03;
    $a_04_01 = $a_datos->a_04_01; $a_04_02 = $a_datos->a_04_02; $a_04_03 = $a_datos->a_04_03;
    $a_05_01 = $a_datos->a_05_01;
    $a_06_01 = $a_datos->a_06_01;
    $a_07_01 = $a_datos->a_07_01;
    $a_08_01 = $a_datos->a_08_01;
    $a_09_01 = $a_datos->a_09_01;
    $a_10_01 = $a_datos->a_10_01;
    $a_11_01 = $a_datos->a_11_01;
    $a_12_01 = $a_datos->a_12_01;
    $a_13_01 = $a_datos->a_13_01;


    $plantilla =
        '<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                '.$cabecera.'
                <main>
                    <div class="notices">
                        <div class="notice"><strong>'.constant('DTITLE').'</strong></div>
                    </div>
                </main>	
               <main>
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
                                        <td class="col-60p">'.$d_02_01.'</td>
                                    </tr>
                                    <tr>
                                        <td class="col-40p">'.constant('D03').'</td>
                                        <td class="col-60p">'.$d_03_01.'</td>
                                    </tr>
                                    <tr>
                                    <td class="col-40p">.</td>
                                        <td class="col-60p"></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="tborder">
                                   <tr>
                                        <td class="col-60p">'.constant('D01_01').'</td>
                                        <td class="col-40p">'.$d_01_02.'</td>
                                   </tr>
                                    <tr>
                                        <td class="col-60p">'.constant('$d_02_02').'</td>
                                        <td class="col-40p">'.$d_02_02.'</td>
                                    </tr>
                                    <tr>
                                        <td class="col-60p">'.constant('D03_01').'</td>
                                        <td class="col-40p">'.$d_03_02.'</td>
                                    </tr>
                                    <tr>
                                        <td class="col-60p">'.constant('D04').'</td>
                                        <td class="col-40p">'.$d_04_02.'</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
               </main>	
               <main>
                    <table class="tborder">
                          <div>
                               <tr>
                                  <td class="col-50p">'.constant('D05').'</td>
                                  <td class="col-20p">'.  $d_05_01 . ' Si</td>
                                  <td class="col-20p">'.  $d_05_02 . ' No</td>
                               </tr>    
                          </div>
                    </table>
               </main>
               <main>
                    <table class="tborder">
                          <div>
                               <tr>
                                  <td class="col-50p">'.constant('D06').'</td>
                                  <td class="col-50p">'.  $d_06_01 . '</td>
                               </tr>
                               <tr>
                                  <td class="col-50p">'.constant('D07').'</td>
                                  <td class="col-50p">'.$d_07_01.'</td>
                               </tr>    
                          </div>
                    </table>
               </main> 
               <main>
                    <table>
                        <tr>
                            <td>
                                <table class="tborder">
                                   <tr>
                                      <td class="col-30p">Clima Ayer</td>
                                      <td class="col-20p">'.$d_08_01.'</td>
                                      <td class="col-20p">'.$d_08_02.'</td>
                                      <td class="col-20p">'.$d_08_03.'</td>
                                    </tr>
                                   <tr>
                                      <td></td>  
                                      <td class="col-30p">'.constant('D10').'</td>
                                      <td class="col-30p">'.constant('D11').'</td>
                                      <td class="col-30p">'.constant('D12').'</td>
                                    </tr>
                               </table>
                            </td>
                            <td>
                                <table class="tborder">
                                   <tr>
                                      <td class="col-30p">Clima Hoy</td>
                                      <td class="col-20p">'.$d_08_04.'</td>
                                      <td class="col-20p">'.$d_08_05.'</td>
                                      <td class="col-20p">'.$d_08_06.'</td>
                                    </tr>
                                   <tr>
                                      <td></td>  
                                      <td class="col-30p">'.constant('D10').'</td>
                                      <td class="col-30p">'.constant('D11').'</td>
                                      <td class="col-30p">'.constant('D12').'</td>
                                    </tr>
                               </table>
                            </td>
                            <td>
                                <table class="tborder">
                                   <tr>
                                      <td class="col-30p">Clima Mañana</td>
                                      <td class="col-20p">'.$d_08_07.'</td>
                                      <td class="col-20p">'.$d_08_08.'</td>
                                      <td class="col-20p">'.$d_08_09.'</td>
                                    </tr>
                                   <tr>
                                      <td></td>  
                                      <td class="col-30p">'.constant('D10').'</td>
                                      <td class="col-30p">'.constant('D11').'</td>
                                      <td class="col-30p">'.constant('D12').'</td>
                                    </tr>
                               </table>
                            </td>
                        </tr>
                    </table>
               </main>
               <main>
                    <table class="tborder">
                        <tr>
                            <td>
                                <table class="tborder">
                                   <tr class="notices">
                                       <td colspan="6"> <strong>'.constant('ETITLE').'</strong></td>
                                   </tr>
                                   <tr>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Area m2</strong></td>
                                        <td><strong>Largo</strong></td>
                                        <td>X</td>
                                        <td><strong>Ancho</strong></td>
                                   </tr>
                                   <tr>
                                        <td><strong>A1</strong></td>
                                        <td>'.constant('E01').'</td>
                                        <td><strong>'.$a_01_01.'</strong></td>
                                        <td><strong>'.$a_01_02.'</strong></td>
                                        <td>X</td>
                                        <td><strong>'.$a_01_03.'</strong></td>
                                    </tr>
                                     <tr>
                                        <td><strong>A2</strong></td>
                                        <td>'.constant('E02').'</td>
                                        <td><strong>'.$a_02_01.'</strong></td>
                                        <td><strong>'.$a_02_02.'</strong></td>
                                        <td>X</td>
                                        <td><strong>'.$a_02_03.'</strong></td>
                                    </tr>
                                     <tr>
                                        <td><strong>A3</strong></td>
                                        <td>'.constant('E03').'</td>
                                        <td><strong>'.$a_03_01.'</strong></td>
                                        <td><strong>'.$a_03_02.'</strong></td>
                                        <td>X</td>
                                        <td><strong>'.$a_03_03.'</strong></td>
                                    </tr>
                                     <tr>
                                        <td><strong>A4</strong></td>
                                        <td>'.constant('E04').'</td>
                                        <td><strong>'.$a_04_01.'</strong></td>
                                        <td><strong>'.$a_04_02.'</strong></td>
                                        <td>X</td>
                                        <td><strong>'.$a_04_03.'</strong></td>
                                    </tr>
                                     <tr>
                                        <td><strong>A5</strong></td>
                                        <td colspan="4">'.constant('E05').'</td>
                                        <td><strong>'.$a_05_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A6</strong></td>
                                        <td colspan="4">'.constant('E06').'</td>
                                        <td><strong>'.$a_06_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A5</strong></td>
                                        <td colspan="4">'.constant('E07').'</td>
                                        <td><strong>'.$a_07_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A7</strong></td>
                                        <td colspan="4">'.constant('E08').'</td>
                                        <td><strong>'.$a_08_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A6</strong></td>
                                        <td colspan="4">'.constant('E09').'</td>
                                        <td><strong>'.$a_09_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A8</strong></td>
                                        <td colspan="4">'.constant('E10').'</td>
                                        <td><strong>'.$a_10_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td><strong>A9</strong></td>
                                        <td colspan="4">'.constant('E11').'</td>
                                        <td><strong>'.$a_11_01.'</strong></td>
                                     </tr>
                                     <tr>
                                        <td colspan="5">'.constant('E12').'</td>
                                        <td><strong>'.$a_12_01.'</strong></td>
                                     </tr>
                                      <tr>
                                        <td colspan="5">'.constant('E13').'</td>
                                        <td><strong>'.$a_13_01.'</strong></td>
                                     </tr>
                                      <tr>
                                        <td colspan="6">'.constant('E14').'</td>
                                       </tr>
                                </table>
                            </td>
                             <td>
                                <div class="notices">
                                    <div class="notice"><strong>'.constant('FTITLE').'</strong></div>
                                </div>
                                <div>
                                    <img src="../../../fotos/'.$nombreImagen.'" style="width: auto; height: 400px; margin: auto;display: block;" />
                                </div>
                            </td>
                        </tr>
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