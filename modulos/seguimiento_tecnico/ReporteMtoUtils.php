<?php

function getPersonalOyM($conexion, $idusuario){
    $res = mysqli_query($conexion, "SELECT u.id, concat(u.nombre, ' ', u.ap_pat, ' ', u.ap_mat) AS nombre, u.`cargo`, u.`cel`
                                          FROM usuarios u
                                          WHERE u.id = '".$idusuario."'");
    $dataRes = mysqli_fetch_array($res);

    return array("nombre" => $dataRes['nombre'], "cargo" => $dataRes['cargo'], "cel" => $dataRes['cel']);
}

function getPersonalMtto($conexion, $idgrupo){
    $res = mysqli_query(
        $conexion, "SELECT g.user1, g.user2, 
                                concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre2, u1.cargo AS cargo2, u1.cel as cel2,
                                concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre3, u2.cargo AS cargo3,  u2.cel as cel3 
                            FROM grupo g
                            JOIN usuarios u1 ON g.user1 = u1.id
                            JOIN usuarios u2 ON g.user2 = u2.id
                            AND g.idgrupo = $idgrupo");
    $dataRes = mysqli_fetch_array($res);

    return array(
        "nombre2" => $dataRes['nombre2'], "cargo2"  => $dataRes['cargo2'], "cel2"    => $dataRes['cel2'],
        "nombre3" => $dataRes['nombre3'], "cargo3"  => $dataRes['cargo3'], "cel3"    => $dataRes['cel3']
    );
}

function getCabecera($conexion, $jsonData, $idgrupo, $titulo, $activoMadre=false){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    $b_idenActivo       = $obj->{'b_idenActivo'};
    $b_nroActivo        = $obj->{'b_nroActivo'};

    $b1_plantilla = $activoMadre ? get_b1_plantilla($jsonData) : "";

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

    $plantilla = '
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
                <h4>'. $titulo .'</h4>
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
    
    '.$b1_plantilla.'
    
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
    ';
    return $plantilla;
}

function getCabeceraRutina13($conexion, $jsonData, $idgrupo, $titulo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`, s.`municipio`
                                                FROM evento e 
                                                LEFT JOIN sitio s 	 ON e.`idsitio` = s.`idsitio`
                                                LEFT JOIN centro c 	 ON s.`idcentro` = c.`idcentro`
                                                LEFT JOIN departamento d ON c.`iddepartamento` = d.`iddepartamento`
                                                WHERE e.`idevento` = ".$idevento);
    $dataIden = mysqli_fetch_array($resIden);
    $departamento   = $dataIden['departamento'];
    $provincia      = $dataIden['provincia'];
    $localidad      = $dataIden['localidad'];
    $municipio      = $dataIden['municipio'];

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    //$b_idenActivo       = $obj->{'b_idenActivo'};
    //$b_nroActivo        = $obj->{'b_nroActivo'};
    $b_acceso         = $obj->{'b_acceso'};
    $b_01_01 = $b_acceso->b_01_01;
    $b_02_01 = $b_acceso->b_02_01; $b_02_02 = $b_acceso->b_02_02;
    $b_03_01 = $b_acceso->b_03_01;
    $b_04_01 = $b_acceso->b_04_01 ? $check : $uncheck; $b_04_02 = $b_acceso->b_04_02 ? $check : $uncheck;

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

    $plantilla =

    '<table>
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
                <h4>'. $titulo .'</h4>
            </th>
        </tr>
    </table>
    <main>
        <div class="notices">
            <div class="notice"><strong>A. Identificación del Sitio</strong></div>
        </div>
    </main>
    <main>
    <table class="table tborder mb-0">
                <tbody>
                <tr>
                    <td class="col-25p no">Departamento:</td>
                    <td class="col-25p">'. $departamento .'</td>
                    
                    <td class="col-15p no">Provincia:</td>
                    <td class="col-25p" colspan="3">'. $provincia .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Localidad:</td>
                    <td class="col-25p">'. $localidad .'</td>
                    
                    <td class="col-15p no">Municipio:</td>
                    <td class="col-25p" colspan="3">'. $municipio .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                    
                    <td class="col-15p no">Property_id:</td>
                    <td class="col-25p" colspan="3">'. $propertyId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-10p no">Lat.:</td>
                    <td class="col-15p"></td>
                    <td class="col-10p no">Long.:</td>
                    <td class="col-15p"></td>
                </tr>

                </tbody>
            </table>
    </main>
    <main>
        <div class="notices">
            <div class="notice"><strong>B. Acceso al sitio (desde el Centro o Subcentro de Mantenimiento)</strong></div>
        </div>
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-30p no">Trayecto</td>
                    <td class="col-70p">'.$b_01_01.'</td>
                </tr>     
            </tbody>        
        </table>									                        
    </main>															  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-20p no">Distancia en Km</td>
                    <td class="col-30p">'.$b_02_01.'</td>
                    <td class="col-20p no">Tiempo de Viaje en Hrs.</td>
                    <td class="col-30p">'.$b_02_02.'</td>
                </tr>     
            </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-30p no">Estado del camino</td>
                    <td class="col-70p">'.$b_03_01.'</td>
                </tr>     
            </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-20p no">Tracking de la ruta</td>
                    <td class="col-30p">'.$b_04_01.' Si</td>
                    <td class="col-30p">'.$b_04_02.' No</td>
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
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-30p no">Fecha de mantenimiento:</td>
                    <td class="col-70p">'.$c_fechaRealizacion.'</td>
                </tr>     
            </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
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
            <div class="notice"><strong>D. Personal Técnico Responsable</strong></div>
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
    ';
    return $plantilla;
}

function get_b1_plantilla($jsonData){

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";
    $b1_noAplica   = $obj->{'b1_noAplica'} ? $check : $uncheck;
    $b1_idenActivo = $obj->{'b1_idenActivo'} ? $obj->{'b1_idenActivo'} : "";
    $b1_nroActivo  = $obj->{'b1_nroActivo'} ? $obj->{'b1_nroActivo'} : "";

    $plantilla = '
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
    ';
    return $plantilla;
}

function getFooter($jsonData){

    $obj = json_decode($jsonData);

    $pendientes       = str_replace("&#10;", "<br>", $obj->{'pendientes'});
    $recomendaciones  = str_replace("&#10;", "<br>", $obj->{'recomendaciones'});
    $observaciones    = str_replace("&#10;", "<br>", $obj->{'observaciones'});

    $planilla = '
    <main>
        <div class="notices">
            <div class="notice"><strong>H. Pendientes</strong></div>
        </div>
    </main>
    <main>
        <div class="areatext">'. $pendientes .'</div>
    </main>
    
    <main>
        <div class="notices">
            <div class="notice"><strong>I. Recomendaciones</strong></div>
        </div>
    </main>
    <main>
        <div class="areatext">'. $recomendaciones .'</div>
    </main>
    
    <main>
        <div class="notices">
            <div class="notice"><strong>J. Observaciones</strong></div>
        </div>
    </main>
    <main>
        <div class="areatext">'. $observaciones .'</div>
    </main>
    ';

    return $planilla;
}

?>