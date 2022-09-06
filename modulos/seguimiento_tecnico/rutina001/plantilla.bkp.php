<?php

function getPlantilla($jsonData){

    $obj = json_decode($jsonData);
    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};

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
                        <div class="notice"><strong>B1. Identificación del Activo Madre</strong></div>
                    </div>
                </main>																  
                <main>
                    <table>
                        <tbody>
                            <tr>
                                <td class="no">NO APLICA</td>
                                <td>&#10004;</td>
                                <td class="no">Identificación:</td>
                                <td>Developing</td>
                                <td class="no">N° Activo Fijo:</td>
                                <td></td>
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
                                <td class="col-8">05/09/2022</td>
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
                                <td>08:00</td>
                                <td class="no">Hora de Culminación:</td>
                                <td>09:30</td>
                                <td class="no">Tiempo Transcurrido:</td>
                                <td>01:30</td>
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
                    
                </div>
            </div>
        </div>
	</div>
    
</body>

';

    return $plantilla;
}

?>

