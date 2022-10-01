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
$cod_complemento    = $obj->{'cod_complemento'};
$indoor_outdoor     = $obj->{'indoor_outdoor'};
$c_fechaRealizacion = $obj->{'c_fechaRealizacion'};

$reca1              =$obj->{'reca1'};
$reca2              =$obj->{'reca2'};
$recb1              =$obj->{'recb1'};
$recb2              =$obj->{'recb2'};
$fuente_a           =$obj->{'fuente_a'};
$fuente_b           =$obj->{'fuente_b'};
/*$res4 = mysqli_query($conexion,
    "SELECT u.id, concat(u.nombre, ' ', u.ap_pat, ' ', u.ap_mat) AS nombre, u.`cargo`, u.`cel`
            FROM usuarios u
            WHERE u.nivel = 3
            AND u.`iddepartamento` = ".$iddepartamento);

$selectSupervisor = "<option>Seleccionar supervisor</option>";
while( $data4 = mysqli_fetch_array($res4) ){
    $userId = $data4['id'];
    $selected = "";
    if ($e_personal == $userId) $selected = "selected";

    $selectSupervisor .= "<option value='$userId' $selected>" . $data4['nombre'] . " - " . $data4['cargo'] . "</option>";
    $hrefpdf = "../../modulos/$modulo/catastro$cform/reporte.php";
}*/

/* -------------------------------------------- */
$inOutDoorArr = ["INDOOR", "OUTDOOR"];
$inOutDoorOption = "<option>Seleccionar...</option>";
foreach ($inOutDoorArr as $element){
    $selected = "";
    if ($indoor_outdoor == $element) $selected = "selected";

    $inOutDoorOption .= "<option value='$element' $selected>".$element."</option>";
}

$hrefrutina    = "../../usuarios/modulos/$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$idgrupo;
?>
<input type="hidden" id="catastroId" value="<?php echo $idcatastro ?>" />
<input type="hidden" name="link_modulo" id="link_modulo" value="<?php echo $hrefrutina ?>" />

    <?php require("catastro_head_button.php"); ?>

    <div class="card">
        <div class="card-body p-3">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <td>CM/SCM</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $cm ?>">
                            <input type="hidden" name="cm" id="cm" value="<?=$cm?>" />
                        </div>
                    </td>
                    <td>ID Sitio</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $sitioId ?>">
                            <input type="hidden" name="sitioId" id="sitioId" value="<?=$sitioId?>" />
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>Nombre Responsable</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre2" disabled value="<?php echo $nombre2 ?>">
                        </div>
                    </td>
                    <td>Departamento</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $departamento ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nombre Responsable</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre3" disabled value="<?php echo $nombre3 ?>">
                        </div>
                    </td>
                    <td>Provincia</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $provincia ?>">
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>Fecha de catastro:</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control form-control-sm" id="c_fechaRealizacion" value="<?php echo $c_fechaRealizacion ?>">
                        </div>
                    </td>
                    <td>Localidad</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $localidad ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Property_id</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $propertyId ?>">
                            <input type="hidden" name="propertyId" id="propertyId" value="<?=$propertyId?>" />
                        </div>
                    </td>
                    <td>Indoor/Outdoor:</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="indoor_outdoor" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $inOutDoorOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Código de activo fijo:</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="cod_fijo" id="cod_fijo" value="<?php echo $cod_fijo ?>">
                        </div>
                    </td>
                    <td>Código activo de energía:</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="cod_activo" id="cod_activo" value="<?php echo $cod_activo ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"></td>

                    <td>Código activo complemento:</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="cod_complemento" id="cod_complemento" value="<?php echo $cod_complemento ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="reca1" id="reca1" value="<?php echo $reca1 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="reca2" id="reca2" value="<?php echo $reca2 ?>">
                        </div>
                    </td>
                    <td class = "text-center"  colspan="4"><strong>REFERENCIA CÓDIGO RECTIFICADORES</strong></td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="recb1" id="recb1" value="<?php echo $recb1 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="recb2" id="recb2" value="<?php echo $recb2 ?>">
                        </div>
                    </td>
                    <td><strong>RECA</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="fuente_a" id="fuente_a" value="<?php echo $fuente_a ?>">
                        </div>
                    </td>
                    <td><strong>RECB</strong></td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="fuente_b" id="fuente_b" value="<?php echo $fuente_b ?>">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
