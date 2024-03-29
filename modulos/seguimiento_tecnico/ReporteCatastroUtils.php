<?php
require("../../../funciones/ImageUtils.php");

function convertSpecialChars($text){
    $text = str_replace("&#10;", "<br>", $text);
    $str     = str_replace('\u','u', $text);
    return preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
}

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

function getCabecera1($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};

    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
   // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------


    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</b></div>
                    <div><b>ENERGÍA COMERCIAL (ECM) - EXTENSIÓN DE ENERGÍA MEDIA TENSIÓN</b></div>
                   
                </div>
            </th>
        </tr>
        
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
            </tbody>        
        </table>									                        
    </main>
   
  
    ';
    return $plantilla;
}
function getCabecera002($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};

    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------


    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</b></div>
                    <div><b>ENERGÍA COMERCIAL (ECM) - PUESTO DE MEDICIÓN (PILASTRA)</b></div>
                   
                </div>
            </th>
        </tr>
        
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
            </tbody>        
        </table>									                        
    </main>
   
  
    ';
    return $plantilla;
}
function getCabecera003($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};

    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------


    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</b></div>
                    <div><b>GRUPO ELECTRÓGENO (GE)</b></div>
                   
                </div>
            </th>
        </tr>
        
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
            </tbody>        
        </table>									                        
    </main>
   
  
    ';
    return $plantilla;
}
function getCabecera004($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    $cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------


    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</b></div>
                    <div><b>TABLERO DE TRANSFERENCIA (ATS) - BYPASS</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo complemento:</td>
                    <td class="col-25p">'.$cod_complemento.'</td>
                </tr>
            </tbody>        
        </table>									                        
    </main>
   
  
    ';
    return $plantilla;
}
function getCabecera005($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    //$cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------
    $tdp           = $obj->{'tdp'};
    $tr1           = $obj->{'tr1'};
    $tds           = $obj->{'tds'};
    $tr2           = $obj->{'tr2'};
    $tu1           = $obj->{'tu1'};
    $tcl           = $obj->{'tcl'};
    $tu2           = $obj->{'tu2'};
    $tsg           = $obj->{'tsg'};


    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</b></div>
                    <div><b>TABLERO DE DISTRIBUCIÓN (TDP)</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td colspan="4" align="center"><strong>REFERENCIA CÓDIGO TABLEROS</strong></td>
                </tr>
                <tr>
                    <td class="col-25p no">TDP</td>
                    <td class="col-25p">'.$tdp.'</td>
                    <td class="col-25p no">TR1</td>
                    <td class="col-25p">'. $tr1.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">TDS</td>
                    <td class="col-25p">'.$tds.'</td>
                    <td class="col-25p no">TR2</td>
                    <td class="col-25p">'. $tr2.'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">TU1</td>
                    <td class="col-30p">'.$tu1.'</td>
                    <td class="col-25p no">TCL</td>
                    <td class="col-25p">'. $tcl.'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">TU2</td>
                    <td class="col-25p">'.$tu2.'</td>
                    <td class="col-25p no">TSG</td>
                    <td class="col-25p">'. $tsg.'</td>
                </tr>
               
           </tbody>        
        </table>									                        
    </main>
  
    ';
    return $plantilla;
}
function getCabecera006($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    $cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);
    $upsa1              =$obj->{'upsa1'};
    $upsa2              =$obj->{'upsa2'};
    $upsb1              =$obj->{'upsb1'};
    $upsb2              =$obj->{'upsb2'};
    $fuente_a           =$obj->{'fuente_a'};
    $fuente_b           =$obj->{'fuente_b'};


    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------

    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA </b></div>
                    <div><b>SISTEMA ININTERRUMPIBLE DE ENERGÍA (UPS)</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'.$cm.'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'.$sitioId.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'.$departamento.'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'.$provincia.'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'.$localidad.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId.'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo complemento:</td>
                    <td class="col-25p">'.$cod_complemento.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                   <td class="col-15p">'.$upsa1.'</td>
                   <td class="col-15p">'.$upsa2.'</td>
                   <td class="col-70p no" colspan="4" align="center">REFERENCIA CÓDIGO UPS</td>
               </tr>
               <tr>
                   <td class="col-15p">'.$upsb1.'</td>
                   <td class="col-15p">'.$upsb2.'</td>
                   <td class="col-15p no">UPSA</td>
                   <td class="col-15p">'. $fuente_a.'</td>
                   <td class="col-15p no">UPSB</td>
                   <td class="col-15p">'. $fuente_b.'</td>
               </tr>
           </tbody>        
        </table>									                        
    </main>
  
    ';
    return $plantilla;
}
function getCabecera007($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    $cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);
    $reca1              =$obj->{'reca1'};
    $reca2              =$obj->{'reca2'};
    $recb1              =$obj->{'recb1'};
    $recb2              =$obj->{'recb2'};
    $fuente_a           =$obj->{'fuente_a'};
    $fuente_b           =$obj->{'fuente_b'};


    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------

    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA </b></div>
                    <div><b>PLANTA DE RECTIFICADORES (REC)</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'.$cm.'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'.$sitioId.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'.$departamento.'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'.$provincia.'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'.$localidad.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId.'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo complemento:</td>
                    <td class="col-25p">'.$cod_complemento.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                   <td class="col-15p">'.$reca1.'</td>
                   <td class="col-15p">'.$reca2.'</td>
                   <td class="col-70p no" colspan="4" align="center">REFERENCIA CÓDIGO RECTIFICADORES</td>
               </tr>
               <tr>
                   <td class="col-15p">'.$recb1.'</td>
                   <td class="col-15p">'.$recb2.'</td>
                   <td class="col-15p no">RECA</td>
                   <td class="col-15p">'. $fuente_a.'</td>
                   <td class="col-15p no">RECB</td>
                   <td class="col-15p">'. $fuente_b.'</td>
               </tr>
           </tbody>        
        </table>									                        
    </main>
  
    ';
    return $plantilla;
}
function getCabecera008($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    $cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);
    $upsa1              =$obj->{'upsa1'};
    $upsa2              =$obj->{'upsa2'};
    $upsb1              =$obj->{'upsb1'};
    $upsb2              =$obj->{'upsb2'};
    $reca1              =$obj->{'reca1'};
    $reca2              =$obj->{'reca2'};
    $recb1              =$obj->{'recb1'};
    $recb2              =$obj->{'recb2'};
    $rec_fuente_a       =$obj->{'rec_fuente_a'};
    $rec_fuente_b       =$obj->{'rec_fuente_b'};
    $ups_fuente_a       =$obj->{'ups_fuente_a'};
    $ups_fuente_b       =$obj->{'ups_fuente_b'};



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------

    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA </b></div>
                    <div><b>BANCO DE BATERÍAS (BB) / UPS - PLANTA DE RECTIFICADORES - SISTEMA FOTOVOLTAICO</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'.$cm.'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'.$sitioId.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'.$departamento.'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'.$provincia.'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'.$localidad.'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId.'</td>
                    <td class="col-25p no">Indoor/Outdoor:</td>
                    <td class="col-25p">'.$indoor_outdoor.'</td>
                 </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="col-25p no">Código activo complemento:</td>
                    <td class="col-25p">'.$cod_complemento.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                   <td class="col-15p">'.$reca1.'</td>
                   <td class="col-15p">'.$upsa1.'</td>
                   <td class="col-70p no" colspan="4" align="center">REFERENCIA CÓDIGO RECTIFICADORES - UPS</td>
               </tr>
               <tr>
                   <td class="col-15p">'.$recb1.'</td>
                   <td class="col-15p">'.$upsb1.'</td>
                   <td class="col-15p no">RECA</td>
                   <td class="col-15p">'. $rec_fuente_a.'</td>
                   <td class="col-15p no">UPSA</td>
                   <td class="col-15p">'. $ups_fuente_a.'</td>
               </tr>
                <tr>
                   <td class="col-15p">'.$reca2.'</td>
                   <td class="col-15p">'.$upsa2.'</td>
                   <td class="col-15p no">RECA</td>
                   <td class="col-15p">'. $rec_fuente_b.'</td>
                   <td class="col-15p no">UPSA</td>
                   <td class="col-15p">'. $ups_fuente_b.'</td>
               </tr>
               <tr>
                   <td class="col-15p">'.$recb2.'.</td>
                   <td class="col-15p">'.$upsb2.'.</td>
                   
               </tr>
           </tbody>        
        </table>									                        
    </main>
  
    ';
    return $plantilla;
}
function getCabecera009($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    //$cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------



    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMA DE CLIMATIZACIÓN</b></div>
                    <div><b>SISTEMA DE CLIMATIZACIÓN (AAC)</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
   
    ';
    return $plantilla;
}
function getCabecera010($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = dateToLiteral($obj->{'c_fechaRealizacion'});
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    //$cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    //$cargo2  = $dataPersMtto['cargo2'];
    //$cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------



    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO SISTEMA FOTOVOLTAICO</b></div>
                    <div><b>SISTEMA FOTOVOLTAICO (SFV)</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-25p">'.$nombre2.'</td>
                    <td class="col-25p no">DEPARTAMENTO:</td>
                    <td class="col-25p">'. $departamento .'</td>
                </tr>  
                 <tr>
                    <td class="col-25p no">Nombre:</td>
                    <td class="col-30p">'.$nombre3.'</td>
                    <td class="col-25p no">PROVINCIA:</td>
                    <td class="col-25p">'. $provincia .'</td>
                </tr>  
                <tr>
                    <td class="col-30p no">Fecha de catastro:</td>
                    <td class="col-25p">'.$c_fechaRealizacion.'</td>
                    <td class="col-25p no">LOCALIDAD:</td>
                    <td class="col-25p">'. $localidad .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">Property_id:</td>
                    <td class="col-25p">'.$propertyId .'</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td class="col-25p no">Código activo fijo:</td>
                    <td class="col-25p">'.$cod_fijo.'</td>
                    <td class="col-25p no">Código activo de energía:</td>
                    <td class="col-25p">'.$cod_activo.'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
   
    ';
    return $plantilla;
}

function getCabecera011($conexion, $jsonData, $idgrupo, $idevento){

    $resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                                d.`nombre` AS departamento, s.`provincia`, s.`localidad`
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
    $cod_activo         = $obj->{'cod_activo'};
    $cod_fijo           = $obj->{'cod_fijo'};
    $c_fechaRealizacion = date("d/m/Y", strtotime($obj->{'c_fechaRealizacion'}) );
    $indoor_outdoor     = $obj->{'indoor_outdoor'};
    //$cod_complemento    = $obj->{'cod_complemento'};
    //$d_horainicio   = $obj->{'d_horainicio'};
    //$d_horafin      = $obj->{'d_horafin'};
    // $tiempoTrans    = timeDiff($d_horainicio, $d_horafin);



    $dataPersMtto = getPersonalMtto($conexion, $idgrupo);
    $nombre2 = $dataPersMtto['nombre2'];
    $nombre3 = $dataPersMtto['nombre3'];
    $cargo2  = $dataPersMtto['cargo2'];
    $cargo3  = $dataPersMtto['cargo3'];
    //$cel2    = $dataPersMtto['cel2'];
    //$cel3    = $dataPersMtto['cel3'];
    //---------------------------



    $plantilla = '
    <table>
        <tr>
            <th class="col-2">
                <div><img src="../../../img/logo-entel.png" width="90" alt="" /></div>
            </th>
            <th class="col-10 company-details">
                <div>
                    <div><b>FORMULARIO DE CATASTRO EQUIPOS DATOS/IP</b></div>
                    <div><b>EQUIPOS NETWORKING CAPA 2/3</b></div>
                   
                </div>
            </th>
        </tr>
       
    </table>
   												  
    <main>
        <table class="no" style="margin-top: 5px;">
            <tr><td class="col-100p no"><strong>I. DATOS TECNICOS </strong></td></tr>
        </table>
    </main>
    <main>
        <table class="tborder">
            <tbody>
                <tr>
                    <td class="col-25p no">ESTACION / SITIO:</td>
                    <td class="col-25p">'. $propertyId .'</td>
                    <td class="col-25p no">ID Sitio:</td>
                    <td class="col-25p">'. $sitioId .'</td>
                </tr>
                <tr>
                    <td class="col-25p no">FECHA DE ACTUALIZACION:</td>
                    <td class="col-25p">'. $c_fechaRealizacion .'</td>
                    <td class="col-25p no">CM/SCM:</td>
                    <td class="col-25p">'. $cm .'</td>
                </tr>
                <tr>
                    <td class="col-30p no">Nombre del Responsable:</td>
                    <td class="col-25p">'. $nombre2 .'</td>
                    <td class="col-25p no">Cargo:</td>
                    <td class="col-25p">'. $cargo2 .'</td>
                </tr>
                <tr>
                    <td class="col-30p no">Nombre del Responsable:</td>
                    <td class="col-25p">'. $nombre3 .'</td>
                    <td class="col-25p no">Cargo:</td>
                    <td class="col-25p">'. $cargo3 .'</td>
                </tr>
           </tbody>        
        </table>									                        
    </main>
   
    ';
    return $plantilla;
}

function getReporteFotoCatastro($conexion, $idcatastrox, $codRutina){

    $res = mysqli_query($conexion,
        "SELECT ci.nombre, ci.titulo FROM catastro".$codRutina." c
                LEFT JOIN catastroimg ci ON c.idcatastro = ci.idcatastro
                WHERE c.id = " . $idcatastrox);

    $result = '
    <div class="tborde-foto">
    <table>
    
    <tr><td class="col-100p no" colspan="2"><h2>REPORTE FOTOGRAFICO</h2></td></tr>
    <tr>';
    $num = 1;
    while( $data = mysqli_fetch_array($res) ){
        if (isset($data['nombre'])) {
            $file_image = "../../../fotos/catastro/" . $data['nombre'];
            if ( exif_imagetype($file_image) == IMAGETYPE_JPEG || exif_imagetype($file_image) == IMAGETYPE_PNG ) {

                adjustPhotoOrientation($file_image);
                $result .= '
            <td align="center">
                <div>
                    <img src="' . $file_image . '" style="width: auto; height: 400px; margin: auto;display: block;" />
                    <div style="font-size: 14px; margin-top: 5px" >' . $data['titulo'] . '</div>
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
?>