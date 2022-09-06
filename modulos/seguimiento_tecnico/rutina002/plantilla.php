<?php

function getPlantilla($jsonData){

    $obj = json_decode($jsonData);
    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};
    $d_horainicio       = $obj->{'d_horainicio'};
    $d_horafin          = $obj->{'d_horafin'};
    $d_transcurrido     = $obj->{'d_transcurrido'};

    $c_fechaRealizacion = $obj->{'c_fechaRealizacion'};



    $f_verificacion = $obj->{'f_verificacion'};
    $f01_1 = $f_verificacion->f01_1 ? "&#10004;" : ""; $f01_2 = $f_verificacion->f01_2 ? "&#10004;" : ""; $f01_3 = $f_verificacion->f01_3;
    $f02_1 = $f_verificacion->f02_1 ? "&#10004;" : ""; $f02_2 = $f_verificacion->f02_2 ? "&#10004;" : ""; $f02_3 = $f_verificacion->f02_3;
    $f03_1 = $f_verificacion->f03_1 ? "&#10004;" : ""; $f03_2 = $f_verificacion->f03_2 ? "&#10004;" : ""; $f03_3 = $f_verificacion->f03_3;
    $f04_1 = $f_verificacion->f04_1 ? "&#10004;" : ""; $f04_2 = $f_verificacion->f04_2 ? "&#10004;" : ""; $f04_3 = $f_verificacion->f04_3;

    $g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
    $g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "&#10004" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "&#10004" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
    $g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "&#10004" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "&#10004" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03 ? "&#10004" : ""; $g1_02_04 = $g_desarrollo_g1->g1_02_04;
    $g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "&#10004" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02;
    $g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "&#10004" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "&#10004" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
    $g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "&#10004" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "&#10004" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
    $g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "&#10004" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "&#10004" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
    $g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "&#10004" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "&#10004" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
    $g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "&#10004" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "&#10004" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03;
    $g1_09_01 = $g_desarrollo_g1->g1_09_01 ? "&#10004" : ""; $g1_09_02 = $g_desarrollo_g1->g1_09_02 ? "&#10004" : ""; $g1_09_03 = $g_desarrollo_g1->g1_09_03;

    $g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};

    $g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "&#10004" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
    $g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "&#10004" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02 ? "&#10004" : ""; $g2_02_03 = $g_desarrollo_g2->g2_02_03;
    $g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "&#10004" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? "&#10004" : ""; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
    $g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "&#10004" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
    $g2_05_01 = $g_desarrollo_g2->g2_05_01 ? "&#10004" : ""; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
    $g2_06_01 = $g_desarrollo_g2->g2_06_01 ? "&#10004" : ""; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
    $g2_07_01 = $g_desarrollo_g2->g2_07_01 ? "&#10004" : ""; $g2_07_02 = $g_desarrollo_g2->g2_07_02;
    $g2_08_01 = $g_desarrollo_g2->g2_08_01 ? "&#10004" : ""; $g2_08_02 = $g_desarrollo_g2->g2_08_02;
    $g2_09_01 = $g_desarrollo_g2->g2_09_01 ? "&#10004" : ""; $g2_09_02 = $g_desarrollo_g2->g2_09_02;
    $g2_10_01 = $g_desarrollo_g2->g2_10_01 ? "&#10004" : ""; $g2_10_02 = $g_desarrollo_g2->g2_10_02;
    $g2_11_01 = $g_desarrollo_g2->g2_11_01 ? "&#10004" : ""; $g2_11_02 = $g_desarrollo_g2->g2_11_02;
    $g2_12_01 = $g_desarrollo_g2->g2_12_01 ? "&#10004" : ""; $g2_12_02 = $g_desarrollo_g2->g2_12_02;

    $g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};

    $g3_01_01 = $g_desarrollo_g3->g3_01_01;
    $g3_02_01 = $g_desarrollo_g3->g3_02_01;
    $g3_04_01 = $g_desarrollo_g3->g3_04_01; $g3_04_02 = $g_desarrollo_g3->g3_04_02; $g3_04_03 = $g_desarrollo_g3->g3_04_03; $g3_04_04 = $g_desarrollo_g3->g3_04_04; $g3_04_05 = $g_desarrollo_g3->g3_04_05; $g3_04_06 = $g_desarrollo_g3->g3_04_06;
    $g3_05_01 = $g_desarrollo_g3->g3_05_01; $g3_05_02 = $g_desarrollo_g3->g3_05_02; $g3_05_03 = $g_desarrollo_g3->g3_05_03; $g3_05_04 = $g_desarrollo_g3->g3_05_04; $g3_05_05 = $g_desarrollo_g3->g3_05_05;
    $g3_06_01 = $g_desarrollo_g3->g3_06_01;
    $g3_07_01 = $g_desarrollo_g3->g3_07_01;
    $g3_08_01 = $g_desarrollo_g3->g3_08_01; $g3_08_02 = $g_desarrollo_g3->g3_08_02; $g3_08_03 = $g_desarrollo_g3->g3_08_03;
    $g3_09_01 = $g_desarrollo_g3->g3_09_01; $g3_09_02 = $g_desarrollo_g3->g3_09_02; $g3_09_03 = $g_desarrollo_g3->g3_09_03;
    $plantilla =
'<body>    
    <div class="card-">
        <div class="card-body-">
            
            
            <!--<div class="invoice-head">
                
            </div>-->
        
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
                            <h3>RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS</h3>
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
                                <td class="no">CM/SCM:</td>
                                <td>'. $cm .'</td>
                                <td class="no">ID Sitio:</td>
                                <td>'. $sitioId .'</td>
                                <td class="no">Property_id:</td>
                                <td>'. $propertyId .'</td>
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
                                <td class="no">Identificación:</td>
                                <td>'. $b_idenActivo .'</td>
                                <td class="no">N° Activo Fijo:</td>
                                <td>'. $b_nroActivo .'</td>
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
                                <td class="no col-4">Fecha de mantenimiento:</td>
                                <td class="col-8">'.$c_fechaRealizacion.'</td>
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
                                <td class="no">Hora de inicio:</td>
                                <td>'.$d_horainicio.'</td>
                                <td class="no">Hora de Culminación:</td>
                                <td>'.$d_horafin.'</td>
                                <td class="no">Tiempo Transcurrido:</td>
                                <td>'.$d_transcurrido.'</td>
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
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-1 no">Nombre:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Cargo:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Teléfono:</td>
                                <td class="col-2">---</td>
                            </tr>
                            <tr>
                                <td class="col-1 no">Nombre:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Cargo:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Teléfono:</td>
                                <td class="col-2">---</td>
                            </tr>
                            <tr>
                                <td class="col-1 no">Nombre:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Cargo:</td>
                                <td class="col-3">---</td>
                                <td class="col-1 no">Teléfono:</td>
                                <td class="col-2">---</td>
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
                    <table border="1">
                        <tbody>
                            
                            <tr>
                                <td class="col-40p">F.1 Alarmas activas</td>
                                <td class="col-10p">SI '.     $f01_1 . '</td>
                                <td class="col-10p">NO '.     $f01_2 . '</td>
                                <td class="col-40p">Obs. ' .  $f01_3 . '</td>
                            </tr>
                            <tr>
                                <td class="col-40p">F.2	Verificacion de historico de alarmas</td>
                                <td class="col-10p">SI '.     $f02_1 . '</td>
                                <td class="col-10p">NO '.     $f02_2 . '</td>
                                <td class="col-40p">Obs. ' .  $f02_3 . '</td>
                            </tr>
                            <tr>
                                <td class="col-40p">F.3	Verificacion fisica integra del gabinete</td>
                                <td class="col-10p">SI '.     $f03_1 . '</td>
                                <td class="col-10p">NO '.     $f03_2 . '</td>
                                <td class="col-40p">Obs. ' .  $f03_3 . '</td>
                            </tr>
                            <tr>
                                <td class="col-40p">F.4	Verificacion de taxonomia del equipo</td>
                                <td class="col-10p">Si Tiene '.     $f04_1 . '</td>
                                <td class="col-10p">No tiene '.     $f04_2 . '</td>
                                <td class="col-40p">Obs. ' .  $f04_3 . '</td>
                            </tr>
                            
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <div class="notices">
                        <div class="notice"><strong>G. Desarrollo de Rutina de Mantenimiento</strong></div>
                    </div>
                </main>  
                  
                  <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="5"><strong>G.1	Verificaciones tecnicas</strong></td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.1 Verificacion de operación del controldador</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">Sin Humedad '.  $g1_01_01 . '</td>
                                <td class="col-10p">Con Humedad '.  $g1_01_02 . '</td>
                                <td class="col-30p">Obs. '.         $g1_01_03 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.2 Verificacion de operación de los motores ventiladores</td>
                                <td class="col-7p">N/A '.     $g1_02_01 . '</td>
                                <td class="col-15p">Operativo '.     $g1_02_02 . '</td>
                                <td class="col-15p">No Operativo ' .  $g1_02_03 . '</td>
                                <td class="col-30p">Obs. ' .  $g1_02_04 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.3 Inspeccion del sistema electrico del TD a equipo</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">SI '.     $g1_03_01 . '</td>
                                <td class="col-10p"> </td>
                                <td class="col-30p">Obs. ' .  $g1_03_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.4	Verificacion del ruido de operación de los rodamientos de motores</td>
                                <td class="col-5p"></td>
                                <td class="col-10p">Aceptable '. $g1_04_01 . '</td>
                                <td class="col-10p">Alto ' .     $g1_04_02 . '</td>
                                <td class="col-30p">Obs. ' .     $g1_04_03 . '</td>
                            </tr>
                             <tr>
                                <td class="col-35p">G.1.5 Verificacion de aterramento del equipo</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">Bueno '.  $g1_05_01 . '</td>
                                <td class="col-10p">Malo '.   $g1_05_02 . '</td>
                                <td class="col-30p">Obs. '.   $g1_05_03 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.6 Verificacion del buen estado fisico del equipo</td>
                                <td class="col-7p"> </td>
                                <td class="col-15p">Bueno '.      $g1_06_02 . '</td>
                                <td class="col-15p">Con Daños ' . $g1_06_03 . '</td>
                                <td class="col-30p">Obs. ' .      $g1_06_04 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.7 Verificación de la correcta operación del display y teclas</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">Bueno '.     $g1_07_01 . '</td>
                                <td class="col-10p">Malo  ' .    $g1_07_02 . '</td>
                                <td class="col-30p">Obs. ' .     $g1_07_03 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.8 Verificación del buen estado de Shunt, PDUs</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">Bueno '. $g1_08_01 . '</td>
                                <td class="col-10p">Malo  '. $g1_08_02 . '</td>
                                <td class="col-30p">Obs. ' . $g1_08_03 . '</td>
                            </tr>
                            <tr>
                                <td class="col-35p">G.1.9 Verificación de sobre carga de capacidad de la planta rectificadora</td>
                                <td class="col-5p"> </td>
                                <td class="col-10p">Sin Sobrecarga '. $g1_09_01 . '</td>
                                <td class="col-10p">Sobrecargado ' .  $g1_09_02 . '</td>
                                <td class="col-30p">Obs. ' .          $g1_09_03 . '</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                 
                <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="4"><strong>G.2 Actividades de mantenimiento</strong></td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.1 Limpieza de los filtros de polvo de aire</td>
                                <td class="col-15p">Realizado '.  $g2_01_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.         $g2_01_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.2 Limpieza de polvo de rendijas de renovación de aire del gabinete</td>
                                <td class="col-15p">Realizado '.  $g2_02_01 . '</td>
                                <td class="col-15p">N/A '.          $g2_02_01 . '</td>
                                <td class="col-30p">Obs. '.        $g2_02_03 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.3 Revisión de sobrecalentamiento del cableado en ac</td>
                                <td class="col-15p">No es necesario '. $g2_03_01 . '</td>
                                <td class="col-15p">Realizado ' .      $g2_03_02 . '</td>
                                <td class="col-30p">Obs. ' .           $g2_03_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.4	Revisión de sobrecalentamiento del cableado en dc</td>
                                <td class="col-15p">Realizado '.  $g2_04_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_04_02 . '</td>
                            </tr>
                             <tr>
                                <td class="col-45p">G.2.5 Control de distribución de energía DC en/los puntos de servicio</td>
                                <td class="col-15p">Realizado '.   $g2_05_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_05_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.6 Ajuste del torque de elementos de sujeción en el PDU DC</td>
                                <td class="col-15p">Realizado '.  $g2_06_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_06_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.7 Ajuste de borneras en el panel eléctrico del equipo</td>
                                <td class="col-15p">Realizado '.  $g2_07_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_07_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.8 Ajuste de borneras del circuito del equipo en el tablero eléctrico</td>
                                <td class="col-15p">Realizado '.  $g2_08_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_08_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.9 Lubricación de los motores ventiladores</td>
                                <td class="col-15p">Realizado '.  $g2_09_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_09_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.10 Inspección del estado de los fusibles de protección</td>
                                <td class="col-15p">Realizado '.  $g2_10_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_10_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.11 Prueba de autonomía del banco de baterías</td>
                                <td class="col-15p">Realizado '.  $g2_11_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_11_02 . '</td>
                            </tr>
                            <tr>
                                <td class="col-45p">G.2.12 Revisión de operación de todos los módulos de rectificadores</td>
                                <td class="col-15p">Realizado '.  $g2_12_01 . '</td>
                                <td class="col-15p"> </td>
                                <td class="col-30p">Obs. '.        $g2_12_02 . '</td>
                            </tr>
                        </tbody>        
                    </table>									                        
                </main>
                <main>
                    <table border="1">
                        <tbody>
                            <tr>
                                <td colspan="2"><strong>G.3 Mediciones y configuraciones durante y/o después del mantenimiento</strong></td>
                            </tr>
                            <tr>
                                <td class="col-50p">G.3.1 Setting de corriente de carga a un banco de baterías</td>
                                <td class="col-15p">'.  $g3_01_01 . '</td>
                            </tr>
                            <tr>
                                <td class="col-50p">G.3.2 Setting de cantidad de bancos de batería</td>
                                <td class="col-15p"> '.  $g3_02_01 . '</td>
                             </tr>
                            
                        </tbody>        
                    </table>									                        
                </main>
                </div>
            </div>
        </div>
	</div>
    
</body>

';

    return $plantilla;
}

?>

