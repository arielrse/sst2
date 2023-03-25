<?php
$idevento = $_GET['event'];
$idcatastro = $_GET['rut'];
$cform    = $_GET['cform'];
$idgrupo  = $_GET['gp'];

$res2 = mysqli_query(
        $conexion, "SELECT g.user1, g.user2, 
                                concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre2, u1.cargo AS cargo2, u1.cel as cel2,
                                concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre3, u2.cargo AS cargo3,  u2.cel as cel3 
                            FROM grupo g
                            JOIN usuarios u1 ON g.user1 = u1.id
                            JOIN usuarios u2 ON g.user2 = u2.id
                            AND g.idgrupo = $idgrupo");

$data2 = mysqli_fetch_array($res2);

$nombre2 = $data2['nombre2'];
$nombre3 = $data2['nombre3'];

$cargo2  = $data2['cargo2'];
$cargo3  = $data2['cargo3'];

$cel2    = $data2['cel2'];
$cel3    = $data2['cel3'];

/* ---------------------------------- */
$resIden = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`,
                                        s.`departamento`, s.`provincia`, s.`localidad`, s.`municipio`
                                        FROM evento e 
                                        LEFT JOIN sitio s ON e.`idsitio` = s.`idsitio`
                                        LEFT JOIN centro c ON s.`idcentro` = c.`idcentro`
                                        WHERE e.`idevento` = ".$idevento);
$dataIden = mysqli_fetch_array($resIden);
$departamento   = $dataIden['departamento'];
$provincia      = $dataIden['provincia'];
$localidad      = $dataIden['localidad'];
$municipio      = $dataIden['municipio'];

/* ---------------------------------- */
$res3 = mysqli_query($conexion, "SELECT c.id, c.data, ca.estado FROM catastro$cform c
                                        left join catastro ca on c.idcatastro = ca.idcatastro
                                        WHERE c.idcatastro = ".$idcatastro);

$data3 = mysqli_fetch_array($res3);
$jsonCab   = $data3['data'];
$idcatastrox = $data3['id'];
$estado    = $data3['estado'];

$obj = json_decode($jsonCab);
$cm                 = $obj->{'cm'};
$sitioId            = $obj->{'sitioId'};
$propertyId         = $obj->{'propertyId'};
//falta algo el cod_activo
$cod_fijo           = $obj->{'cod_fijo'};
$cod_activo         = $obj->{'cod_activo'};
$indoor_outdoor     = $obj->{'indoor_outdoor'};
$c_fechaRealizacion = $obj->{'c_fechaRealizacion'};

$tdp           = $obj->{'tdp'};
$tr1           = $obj->{'tr1'};
$tds           = $obj->{'tds'};
$tr2           = $obj->{'tr2'};
$tu1           = $obj->{'tu1'};
$tcl           = $obj->{'tcl'};
$tu2           = $obj->{'tu2'};
$tsg           = $obj->{'tsg'};

/* -------------------------------------------- */
$inOutDoorArr = ["INDOOR", "OUTDOOR"];
$inOutDoorOption = "<option>Seleccionar...</option>";
foreach ($inOutDoorArr as $element){
    $selected = "";
    if ($indoor_outdoor == $element) $selected = "selected";

    $inOutDoorOption .= "<option value='$element' $selected>".$element."</option>";
}

/*$hrefrutina    = "../../usuarios/modulos/$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$idgrupo;*/
$hrefpdf = "../../modulos/$modulo/catastro$cform/reporte.php";
$permissions = ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient());
?>
<input type="hidden" id="catastroId" value="<?php echo $idcatastro ?>" />
<!--<input type="hidden" name="link_modulo" id="link_modulo" value="<?php /*echo $hrefrutina */?>" />-->

    <?php require("catastro_head_button.php"); ?>

    <div class="card">
        <div class="card-body p-3">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <td>CM/SCM</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $cm ?>">
                            <input type="hidden" name="cm" id="cm" value="<?=$cm?>" />
                        </div>
                    </td>
                    <td>ID Sitio</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $sitioId ?>">
                            <input type="hidden" name="sitioId" id="sitioId" value="<?=$sitioId?>" />
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>Nombre Responsable</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre2" disabled value="<?php echo $nombre2 ?>">
                        </div>
                    </td>
                    <td>Departamento</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $departamento ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nombre Responsable</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre3" disabled value="<?php echo $nombre3 ?>">
                        </div>
                    </td>
                    <td>Provincia</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $provincia ?>">
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>Fecha de catastro:</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control form-control-sm" id="c_fechaRealizacion" value="<?php echo $c_fechaRealizacion ?>">
                        </div>
                    </td>
                    <td>Localidad</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $localidad ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Property_id</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $propertyId ?>">
                            <input type="hidden" name="propertyId" id="propertyId" value="<?=$propertyId?>" />
                        </div>
                    </td>
                    <td>Indoor/Outdoor:</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <select id="indoor_outdoor" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $inOutDoorOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>Código de activo fijo:</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control form-control-sm" name="cod_fijo" id="cod_fijo" value="<?php echo $cod_fijo ?>">
                            </div>
                        </td>

                    <td>Código activo de energía:</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="cod_activo" id="cod_activo" value="<?php echo $cod_activo ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong>REFERENCIA CÓDIGO TABLEROS</strong></td>
                </tr>
                <tr>
                    <td><strong>TDP</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tdp" id="tdp" value="<?php echo $tdp ?>">
                        </div>
                    </td>
                    <td><strong>TR1</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tr1" id="tr1" value="<?php echo $tr1 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong>TDS</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tds" id="tds" value="<?php echo $tds ?>">
                        </div>
                    </td>
                    <td><strong>TR2</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tr2" id="tr2" value="<?php echo $tr2 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong>TU1</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tu1" id="tu1" value="<?php echo $tu1 ?>">
                        </div>
                    </td>
                    <td><strong>TCL</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tcl" id="tcl" value="<?php echo $tcl ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong>TU2</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tu2" id="tu2" value="<?php echo $tu2 ?>">
                        </div>
                    </td>
                    <td><strong>TSG</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="tsg" id="tsg" value="<?php echo $tsg ?>">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
