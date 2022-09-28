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
$res3 = mysqli_query($conexion, "SELECT r.id, r.data FROM catastro$cform r WHERE r.idcatastro = ".$idcatastro);
$data3 = mysqli_fetch_array($res3);
$jsonCab   = $data3['data'];
$idcatastrox = $data3['id'];

$obj = json_decode($jsonCab);
$cm                 = $obj->{'cm'};
$sitioId            = $obj->{'sitioId'};
$propertyId         = $obj->{'propertyId'};
//falta algo el cod_activo
$cod_fijo         = $obj->{'cod_fijo'};
$cod_activo         = $obj->{'cod_activo'};
$cod_complemento    = $obj->{'cod_complemento'};
$indoor_outdoor     = $obj->{'indoor_outdoor'};
$c_fechaRealizacion = $obj->{'c_fechaRealizacion'};


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


$hrefpdf = "../../modulos/$modulo/catastro$cform/catastro_d.php";
?>
    <input type="hidden" id="catastroId" value="<?php echo $idcatastro ?>" />

    <div class="row row-cols-auto pb-2">
        <div class="col">
            <input type="button" id="botonHead" class="btn btn-primary px-5" value="Guardar" />
        </div>
        <div class="col">
            <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar" onclick="history.back()" />
        </div>
        <form action="<?php echo $hrefpdf ?>" method="post" enctype="multipart/form-data" target="_blank">
            <input type="hidden" id="cform" name="cform" value="<?php echo $cform ?>" />
            <input type="hidden" id="idcatastrox" name="idcatastrox" value="<?php echo $idcatastrox ?>" />
            <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $idgrupo ?>" />
            <input type="hidden" id="iddepartamento" name="iddepartamento" value="<?php echo $iddepartamento ?>" />
            <input type="hidden" id="idevento" name="idevento" value="<?php echo $idevento ?>" />
            <div class="col">
                <input type="submit" class="btn btn-info px-5" name="Submit" value="Generar"  />
            </div>
        </form>
    </div>

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

                    <td></td>
                    <td></td>

                    <td>Código activo complemento:</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" name="cod_complemento" id="cod_complemento" value="<?php echo $cod_complemento ?>">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
