<?php
require("../../../funciones/ImageUtils.php");

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

function getCabecera($conexion, $jsonData, $idgrupo, $activoMadre=false, $titulosArr){

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
                    <div><b>'.$titulosArr[1].'</b></div>
                    <div><b>'.$titulosArr[2].'</b></div>
                    <div><b>'.$titulosArr[3].'</b></div>
                </div>
            </th>
        </tr>
        <tr>
            <th class="text-center" colspan="2">
                <h4>'. $titulosArr[0] .'</h4>
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

//Cabeceras 14, 15, 16
function getCabecera2($conexion, $jsonData, $idgrupo, $idevento, $titulosArr){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`, s.`municipio`, s.latitud, s.longitud
                                                FROM evento e 
                                                LEFT JOIN sitio s 	 ON e.`idsitio` = s.`idsitio`
                                                LEFT JOIN centro c 	 ON s.`idcentro` = c.`idcentro`
                                                LEFT JOIN departamento d ON c.`iddepartamento` = d.`iddepartamento`
                                                WHERE e.`idevento` = ".$idevento);
    $dataIden = mysqli_fetch_array($resIden);
    $departamento   = $dataIden['departamento'];
    $provincia      = $dataIden['provincia'];
    $localidad      = $dataIden['localidad'];



    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    $cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};

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
                    <div><b>'.$titulosArr[1].'</b></div>
                    <div><b>'.$titulosArr[2].'</b></div>
                    <div><b>'.$titulosArr[3].'</b></div>
                </div>
            </th>
        </tr>
        <tr>
            <th class="text-center" colspan="2">
                <h4>'. $titulosArr[0] .'</h4>
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
                    <td class="col-10p no">Departamento</td>
                    <td class="col-20p">'. $departamento .'</td>
                    <td class="col-10p no">Provincia</td>
                    <td class="col-10p">'. $provincia .'</td>
                    <td class="col-12p no">Localidad</td>
                    <td class="col-40p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-10p no">CM/SCM</td>
                    <td class="col-20p">'. $cm .'</td>
                    <td class="col-10p no">ID Sitio</td>
                    <td class="col-10p">'. $sitioId .'</td>
                    <td class="col-12p no">Property_id</td>
                    <td class="col-40p">'. $propertyId .'</td>
                </tr>     
            </tbody>        
        </table>									                        
    </main>
    
    <main>
        <div class="notices">
            <div class="notice"><strong>B. Datos de la Intervencion</strong></div>
        </div>
    </main>																  
    <main>
        <table>
            <tbody>
                <tr>
                    <td class="col-15p no" colspan="2" >Fecha de mantenimiento:</td>
                    <td colspan="4" >'.$c_fechaRealizacion.'</td>
                </tr>     
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
            <div class="notice"><strong>C. Personal Técnico Responsable</strong></div>
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

function getCabeceraRutina13($conexion, $jsonData, $idgrupo, $idevento, $titulosArr){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`, s.`municipio`, s.latitud, s.longitud
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
    $latitud        = $dataIden['latitud'];
    $longitud       = $dataIden['longitud'];

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
                    <div><b>'.$titulosArr[1].'</b></div>
                    <div><b>'.$titulosArr[2].'</b></div>
                    <div><b>'.$titulosArr[3].'</b></div>
                </div>
            </th>
        </tr>
        <tr>
            <th class="text-center" colspan="2">
                <h4>'. $titulosArr[0] .'</h4>
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
                    <td class="col-15p">'. $latitud .'</td>
                    <td class="col-10p no">Long.:</td>
                    <td class="col-15p">'. $longitud .'</td>
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

function getCabeceraRutina17($conexion, $jsonData, $idgrupo, $idevento, $titulosArr){

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
    //$latitud        = $dataIden['latitud'];
    //$longitud       = $dataIden['longitud'];

    $obj = json_decode($jsonData);
    $check   = "<img style='vertical-align:middle' src='../../../img/checked.png'>";
    $uncheck = "<img style='vertical-align:middle' src='../../../img/unchecked.png'>";

    //$cm                 = $obj->{'cm'};
    $sitioId            = $obj->{'sitioId'};
    $propertyId         = $obj->{'propertyId'};
    //$b_idenActivo       = $obj->{'b_idenActivo'};
    //$b_nroActivo        = $obj->{'b_nroActivo'};

    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $c_fechaherbicida = dateToLiteral($obj->{'c_fechaherbicida'});
    $d_horainicio   = $obj->{'d_horainicio'};
    $d_horafin      = $obj->{'d_horafin'};
    $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);
    $d_horainicio1   = $obj->{'d_horainicio1'};
    $d_horafin1      = $obj->{'d_horafin1'};
    $tiempoTrans1    = timeDiff($d_horainicio1, $d_horafin1);
    //---------------------------


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
                    <div><b>'.$titulosArr[1].'</b></div>
                    <div><b>'.$titulosArr[2].'</b></div>
                    <div><b>'.$titulosArr[3].'</b></div>
                </div>
            </th>
        </tr>
        <tr>
            <th class="text-center" colspan="2">
                <h4>'. $titulosArr[0] .'</h4>
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
              </tbody>
        </table>
    </main>
    <main>
        <div class="notices">
            <div class="notice"><strong>B. Datos de la Intervencion</strong></div>
        </div>
    </main>
      <main>
        <table class="table tborder mb-0">
              <tbody>
                    <tr>
                        <td class="col-25p no">Fecha de desmalezado:</td>
                        <td class="col-25p">'.$c_fechaRealizacion.'</td>
                        
                        <td class="col-15p no">Fecha de aplicación de herbicida:</td>
                        <td class="col-25p">'.$c_fechaherbicida.'</td>
                    </tr>
                    <tr>
                        <td class="col-25p no">Hora Inicio:</td>
                        <td class="col-25p">'.$d_horainicio.'</td>
                        
                        <td class="col-15p no">Hora Inicio:</td>
                        <td class="col-25p">'.$d_horainicio1.'</td>
                    </tr>
                     <tr>
                        <td class="col-25p no">Hora Fin:</td>
                        <td class="col-25p">'.$d_horafin.'</td>
                        
                        <td class="col-15p no">Hora Fin:</td>
                        <td class="col-25p">'.$d_horafin1.'</td>
                    </tr>
                     <tr>
                        <td class="col-25p no">Tiempo Transcurrido:</td>
                        <td class="col-25p">'.$tiempoTrans.'</td>
                        
                        <td class="col-15p no">Tiempo Transcurrido:</td>
                        <td class="col-25p">'.$tiempoTrans1.'</td>
                    </tr>
              </tbody>
        </table>
    </main>
    <main>
        <div class="notices">
            <div class="notice"><strong>C. Personal Técnico Responsable</strong></div>
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

function getReporteFotog($conexion, $idrutinax, $codRutina){

    $res = mysqli_query($conexion,
        "SELECT ri.imagen, ri.nombre FROM rutina".$codRutina." r
                LEFT JOIN rutina_imagen ri ON r.idrutina = ri.idrutina
                WHERE r.id = " . $idrutinax . " ORDER BY ri.posicion ASC");

    $result = '<br />
    <main>
        <div class="notices" align="center">
            <div class="notice"><strong>REPORTE FOTOGRAFICO</strong></div>
        </div>
    </main>
    <div class="tborde-foto"><table ><tr>';
    $num = 1;
    while( $data = mysqli_fetch_array($res) ){
        if (isset($data['imagen'])) {
            $file_image = "../../../fotos/" . $data['imagen'];
            if ( exif_imagetype($file_image) == IMAGETYPE_JPEG || exif_imagetype($file_image) == IMAGETYPE_PNG ) {

                adjustPhotoOrientation($file_image);
                $result .= '
            <td align="center">
                <div>
                    <img src="' . $file_image . '" style="width: auto; height: 400px; margin: auto;display: block;" />
                    <div style="font-size: 14px; margin-top: 5px" >' . $data['nombre'] . '</div>
                </div>
               
            </td>';

                if (($num % 2) == 0) {
                    $result .= '</tr><tr style="margin-top: 10px;">';
                }
                $num++;
            }
        }
    }
    $result .= '</tr></table></div>';

    return $result;
}

function getEquiposR16Ant($equiposArr){
    $result = '';
    foreach ($equiposArr as $obj) {
        if ( $obj['existe'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-15p">' . $obj['equipo'] . '</td>
                <td class="col-15p">' . $obj['existe'] . '</td>
                <td class="col-15p">' . $obj['estado'] . '</td>
                <td class="col-15p">' . $obj['energia'] . '</td>
                <td class="col-15p">' . $obj['prtos'] . '</td>
                <td class="col-20p">' . $obj['desc'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getEquiposR16($conexion, $idrutinax){

    $res = mysqli_query($conexion, "SELECT r.id, r.tabla_1 FROM rutina016 r
                                           WHERE r.id = ".$idrutinax);
    $data = mysqli_fetch_array($res);
    $tabla_1   = $data['tabla_1'];
    $tabla_1_arr = json_decode($tabla_1, true);

    $result = '';
    foreach ($tabla_1_arr as $obj) {
        $result .= '
        <tr>
            <td class="col-5p">' . $obj['id'] . '</td>
            <td class="col-15p">' . $obj['equipo'] . '</td>
            <td class="col-15p">' . $obj['existe'] . '</td>
            <td class="col-15p">' . $obj['estado'] . '</td>
            <td class="col-15p">' . $obj['energia'] . '</td>
            <td class="col-15p">' . $obj['prtos'] . '</td>
            <td class="col-20p">' . $obj['desc'] . '</td>
        </tr>';
    }
    return $result;
}

function getFuentesR16Ant($fuentesArr){
    $result = '';
    foreach ($fuentesArr as $obj) {
        if ( $obj['fuenteA'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-15p">' . $obj['equipo'] . '</td>
                <td class="col-15p">' . $obj['fuenteA'] . '</td>
                <td class="col-15p">' . $obj['origen1'] . '</td>
                <td class="col-15p">' . $obj['fuenteB'] . '</td>
                <td class="col-15p">' . $obj['origen2'] . '</td>
                <td class="col-20p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getFuentesR16($conexion, $idrutinax){

    $res = mysqli_query($conexion, "SELECT r.id, r.tabla_2 FROM rutina016 r
                                           WHERE r.id = ".$idrutinax);
    $data = mysqli_fetch_array($res);
    $tabla_2   = $data['tabla_2'];
    $tabla_2_arr = json_decode($tabla_2, true);

    $result = '';
    foreach ($tabla_2_arr as $obj) {
        if ( $obj['fuenteA'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-15p">' . $obj['equipo'] . '</td>
                <td class="col-15p">' . $obj['fuenteA'] . '</td>
                <td class="col-15p">' . $obj['origen1'] . '</td>
                <td class="col-15p">' . $obj['fuenteB'] . '</td>
                <td class="col-15p">' . $obj['origen2'] . '</td>
                <td class="col-20p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getPuertos1R16Ant($puertos1Arr){
    $result = '';
    foreach ($puertos1Arr as $obj) {
        if ( $obj['descri'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-5p">' . $obj['puerto'] . '</td>
                <td class="col-30p">' . $obj['descri'] . '</td>
                <td class="col-30p">' . $obj['posicion'] . '</td>
                <td class="col-30p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getPuertos1R16($conexion, $idrutinax){
    $res = mysqli_query($conexion, "SELECT r.id, r.tabla_3 FROM rutina016 r
                                           WHERE r.id = ".$idrutinax);
    $data = mysqli_fetch_array($res);
    $tabla_3   = $data['tabla_3'];
    $tabla_3_arr = json_decode($tabla_3, true);

    $result = '';
    foreach ($tabla_3_arr as $obj) {
        if ( $obj['descri'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-5p">' . $obj['puerto'] . '</td>
                <td class="col-30p">' . $obj['descri'] . '</td>
                <td class="col-30p">' . $obj['posicion'] . '</td>
                <td class="col-30p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getPuertos2R16Ant($puertos2Arr){
    $result = '';
    foreach ($puertos2Arr as $obj) {
        if ( $obj['descri'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-5p">' . $obj['puerto'] . '</td>
                <td class="col-30p">' . $obj['descri'] . '</td>
                <td class="col-30p">' . $obj['posicion'] . '</td>
                <td class="col-30p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}
function getPuertos2R16($conexion, $idrutinax){
    $res = mysqli_query($conexion, "SELECT r.id, r.tabla_4 FROM rutina016 r
                                           WHERE r.id = ".$idrutinax);
    $data = mysqli_fetch_array($res);
    $tabla_4   = $data['tabla_4'];
    $tabla_4_arr = json_decode($tabla_4, true);

    $result = '';
    foreach ($tabla_4_arr as $obj) {
        if ( $obj['descri'] != '' ) {
            $result .= '
            <tr>
                <td class="col-5p">' . $obj['id'] . '</td>
                <td class="col-5p">' . $obj['puerto'] . '</td>
                <td class="col-30p">' . $obj['descri'] . '</td>
                <td class="col-30p">' . $obj['posicion'] . '</td>
                <td class="col-30p">' . $obj['obs'] . '</td>
            </tr>';
        }
    }
    return $result;
}

function getPuertosEquiposR16($conexion, $idrutinax){
    $res = mysqli_query($conexion, "SELECT r.id, r.tabla_5 FROM rutina016 r
                                           WHERE r.id = ".$idrutinax);
    $data = mysqli_fetch_array($res);
    $tabla_5   = $data['tabla_5'];
    $table_e5_arr = json_decode($tabla_5, true);


        $dataHtml = "";
        if ($table_e5_arr) {
            $cont = 3;

            $dataHtml .= "<main><table class='tborder'>";

            foreach ($table_e5_arr as $objVal) {

                $dataHtml .=
                    "<tr><td class='text-center' colspan='5'><strong>Puertos Equipo " . $cont++ . "</strong></td></tr>" .
                    "<tr class='align-middle'>" .
                    "    <td class='col-5p'>Id</td>" .
                    "    <td class='col-5p'>Puerto</td>" .
                    "    <td class='col-30p'>Descripción</td>" .
                    "    <td class='col-30p'>Posicion</td>" .
                    "    <td class='col-30p'>Obs</td>" .
                    "</tr>";

                foreach ($objVal['puertos'] as $objPrto) {

                    $id = $objPrto['id_id'];
                    $puerto = $objPrto['id_puerto'];
                    $descri = $objPrto['id_descri'];
                    $posicionPrt = $objPrto['id_posicion'];
                    $observacion = $objPrto['id_obs'];


                    $dataHtml .=
                        "<tr class='align-middle'>" .
                        "   <td>" . $id . "</td>" .
                        "   <td>" . $puerto . "</td>" .
                        "   <td>" . $descri . "</td>" .
                        "   <td>" . $posicionPrt . "</td>" .
                        "   <td>" . $observacion . "</td>" .
                        "</tr>";
                }
                $dataHtml .= "</table></main>";
                $dataHtml .= "<main><table class='tborder'>";
            }
            $dataHtml .= "</table></main>";
        }

        return $dataHtml;
}

?>