<?php
require("../../../funciones/DateUtils.php");
require("../ReporteMtoUtils.php");
require("variable_text.php");

function getPlantilla($conexion, $jsonData, $idgrupo){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};

    $b1_noAplica    = $obj->{'b1_noAplica'}     ? $check : $uncheck;
    $b1_idenActivo  = $obj->{'b1_idenActivo'}   ? $obj->{'b1_idenActivo'}  : "" ;
    $b1_nroActivo   = $obj->{'b1_nroActivo'}    ? $obj->{'b1_nroActivo'}   : "" ;

    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});

    $d_horainicio   = $obj->{'d_horainicio'};
    $d_horafin      = $obj->{'d_horafin'};
    $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);

    //---------------------------
    $dataPers = getPersonalOyM($conexion, $obj->{'e_personal'});
    $nombre1 = $dataPers['nombre'];
    $cargo1  = $dataPers['cargo'];
    $cel1    = $dataPers['cel'];

    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    $cargo2  = $dataPersMtto['cargo2'];
    $cargo3  = $dataPersMtto['cargo3'];
    $cel2    = $dataPersMtto['cel2'];
    $cel3    = $dataPersMtto['cel3'];
    //---------------------------

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

    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            <div id="invoice">
                <div class="invoice">
                <table>
                    <tr>
                        <th class="col-2">
                            <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
                        </th>
                        <th class="col-10 company-details">
                            <div>
                                <div>RMP-BB-001/2021</div>
                                <div>Subgerencia de Operación y Mantenimiento</div>
                                <div>Sistemas de Energía y Climatización</div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center" colspan="2">
                            <h4>RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS</h4>
                        </th>
                    </tr>
                </table>
                <main>
                    <div class="notices">
                        <div class="notice"><strong>A. Identificación del Sitio</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-10p no">CM/SCM:</td>
                                <td class="col-20p">'. $cm .'</td>
                                <td class="col-10p no">ID Sitio:</td>
                                <td class="col-10p">'. $sitioId .'</td>
                                <td class="col-12p no">Property_id:</td>
                                <td class="col-40p">'. $propertyId .'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
               
                <main>
                    <div class="notices">
                        <div class="notice"><strong>B. Identificación del Activo</strong></div>
                    </div>
                </main>																        
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-15p no">Identificación:</td>
                                <td>'. $b_idenActivo .'</td>
                                <td class="col-15p no">N° Activo Fijo:</td>
                                <td>'. $b_nroActivo .'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>B1. Identificación del Activo Madre</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-10p no">NO APLICA</td>
                                <td class="col-5p" align="center">'.$b1_noAplica.'</td>
                                <td class="col-13p no">Identificación:</td>
                                <td>'.$b1_idenActivo.'</td>
                                <td class="col-13p no">N° Activo Fijo:</td>
                                <td>'.$b1_nroActivo.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>C. Fecha de Realización</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-30p no">Fecha de mantenimiento:</td>
                                <td class="col-70p">'.$c_fechaRealizacion.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>D. Tiempo de Duración</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-15p no">Hora de inicio:</td>
                                <td>'.$d_horainicio.'</td>
                                <td class="col-20p no">Hora de Culminación:</td>
                                <td>'.$d_horafin.'</td>
                                <td class="col-20p no">Tiempo Transcurrido:</td>
                                <td>'.$tiempoTrans.'</td>
                            </tr>     
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                    <div class="notices">
                        <div class="notice"><strong>E. Personal Técnico Responsable</strong></div>
                    </div>
                </main>	
                <main>
                    <table class="tborder">
                        <tbody> 
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre1.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo1.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel1.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre2.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo2.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel2.'</td>
                            </tr>
                            <tr>
                                <td class="col-8p no">Nombre:</td>
                                <td class="col-30p">'.$nombre3.'</td>
                                <td class="col-7p no">Cargo:</td>
                                <td class="col-35p">'.$cargo3.'</td>
                                <td class="col-10p no">Teléfono:</td>
                                <td class="col-8p">'.$cel3.'</td>
                            </tr>
                            
                            
                        </tbody>        
                    </table>									                        
                </main>
                
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
                                <td class="col-10p">'.$g03_1.' Si</td>
                                <td class="col-10p">'.$g03_2.' No</td>
                                <td class="col-40p">Obs. '.$g03_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G04').'</td>
                                <td class="col-10p">'.$g04_1.' Si</td>
                                <td class="col-10p">'.$g04_2.' No</td>
                                <td class="col-40p">Obs. '.$g04_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G05').'</td>
                                <td class="col-10p">'.$g05_1.' Si</td>
                                <td class="col-10p">'.$g05_2.' No</td>
                                <td class="col-40p">Obs. '.$g05_3.'</td>
                            </tr>
                            <tr>
                                <td class="col-40p">'.constant('G06').'</td>
                                <td class="col-10p">'.$g06_1.' Si</td>
                                <td class="col-10p">'.$g06_2.' No</td>
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
                        </tbody>        
                    </table>									                        
                </main>
                
                <main>
                
                </main>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td>N° Bat.</td>
                                                    <td>VDC</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B2</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B4</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B6</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td>N° Bat.</td>
                                                    <td>VDC</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B7</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B8</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B9</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B10</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B11</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B12</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td>N° Bat.</td>
                                                    <td>VDC</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B13</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B15</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B18</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="tborder">
                                                <tr>
                                                    <td>N° Bat.</td>
                                                    <td>VDC</td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B19</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B20</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B21</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B23</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>BB2-B24</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>    
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	</div>
    
</body>

';

    return $plantilla;
}

?>

