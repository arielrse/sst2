<?php
$idevento = $_GET['event'];
$idrutina = $_GET['rut'];
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
                                        s.`departamento`, s.`provincia`, s.`localidad`, s.`municipio`, s.latitud, s.longitud
                                        FROM evento e 
                                        LEFT JOIN sitio s ON e.`idsitio` = s.`idsitio`
                                        LEFT JOIN centro c ON s.`idcentro` = c.`idcentro`
                                        WHERE e.`idevento` = ".$idevento);
$dataIden = mysqli_fetch_array($resIden);
$departamento   = $dataIden['departamento'];
$provincia      = $dataIden['provincia'];
$localidad      = $dataIden['localidad'];
$municipio      = $dataIden['municipio'];
$latitud        = $dataIden['latitud'];
$longitud       = $dataIden['longitud'];

/* ---------------------------------- */
//$res3 = mysqli_query($conexion, "SELECT r.id, r.cabecera FROM rutina$cform r WHERE r.idrutina = ".$idrutina);
$res3 = mysqli_query($conexion, "SELECT r.id, r.cabecera, ru.estado FROM rutina$cform r
                                        left join rutina ru on r.idrutina = ru.idrutina
                                        WHERE r.idrutina = ".$idrutina);
$data3 = mysqli_fetch_array($res3);
$jsonCab   = $data3['cabecera'];
$idrutinax = $data3['id'];
$estado    = $data3['estado'];

$obj = json_decode($jsonCab);
$cm                 = $obj->{'cm'};
$sitioId            = $obj->{'sitioId'};
$propertyId         = $obj->{'propertyId'};

/** b_acceso **/
$b_acceso = $obj->{'b_acceso'};
$b_01_01 = $b_acceso->b_01_01;
$b_02_01 = $b_acceso->b_02_01;                  $b_02_02 = $b_acceso->b_02_02;
$b_03_01 = $b_acceso->b_03_01;
$b_04_01 = $b_acceso->b_04_01 ? "checked" : ""; $b_04_02 = $b_acceso->b_04_02 ? "checked" : "";

$c_fechaRealizacion = $obj->{'c_fechaRealizacion'};
$d_horainicio       = $obj->{'d_horainicio'};
$d_horafin          = $obj->{'d_horafin'};
$d_transcurrido     = $obj->{'d_transcurrido'};
$e_personal         = $obj->{'e_personal'};

$res4 = mysqli_query($conexion,
    "SELECT u.id, concat(u.nombre, ' ', u.ap_pat, ' ', u.ap_mat) AS nombre, u.`cargo`, u.`cel`
            FROM usuarios u
            WHERE u.nivel = 4
            AND u.`iddepartamento` = ".$iddepartamento); // Id de la sesion

$selectSupervisor = "<option>Seleccionar supervisor</option>";
while( $data4 = mysqli_fetch_array($res4) ){
    $userId = $data4['id'];
    $selected = "";
    if ($e_personal == $userId) $selected = "selected";

    $selectSupervisor .= "<option value='$userId' $selected>" . $data4['nombre'] . " - " . $data4['cargo'] . "</option>";
    //$hrefpdf = "../../modulos/$modulo/rutina$cform/reporte.php";
}

$hrefpdf = "../../modulos/$modulo/rutina$cform/reporte.php";

?>
<input type="hidden" name="rutinaId" id="rutinaId" value="<?php echo $idrutina ?>" />

    <?php require("rutina_head_button.php"); ?>

    <h6>A. Identificación del Sitio </h6>

    <div class="card">
        <div class="card-body p-3">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <td>Departamento</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $departamento ?>">
                        </div>
                    </td>
                    <td>Provincia</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $provincia ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Localidad</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $localidad ?>">
                        </div>
                    </td>
                    <td>Municipio</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" disabled value="<?php echo $municipio ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>ID Sitio</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $sitioId ?>">
                            <input type="hidden" name="sitioId" id="sitioId" value="<?=$sitioId?>" />
                        </div>
                    </td>
                    <td>Property_id</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $propertyId ?>">
                            <input type="hidden" name="propertyId" id="propertyId" value="<?=$propertyId?>" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CM/SCM</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $cm ?>">
                            <input type="hidden" name="cm" id="cm" value="<?=$cm?>" />
                        </div>
                    </td>
                    <td>Lat.</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" value="<?=$latitud?>" disabled>
                        </div>
                    </td>
                    <td>Long.</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" value="<?=$longitud?>"disabled>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <h6>B. Acceso al sitio (desde el Centro o Subcentro de Mantenimiento)</h6>
    <div class="card">
        <div class="card-body p-3">

            <div class="col mb-2">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>

            <table class="table mb-0">
                <tbody>

                <tr>
                    <td>Trayecto</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="b_01_01" value="<?php echo $b_01_01 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Distancia en Km</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control"  id="b_02_01" value="<?php echo $b_02_01 ?>">
                        </div>
                    </td>
                    <td>Tiempo de Viaje en Hrs.</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="time" class="form-control"  id="b_02_02" value="<?php echo $b_02_02 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Estado del camino</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control"  id="b_03_01" value="<?php echo $b_03_01 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Tracking de la ruta</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="b_04_01" value="option1" <?php echo $b_04_01 ?>>
                            <label class="form-check-label" for="b_04_01">Si</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="b_04_02" value="option2" <?php echo $b_04_02 ?>>
                            <label class="form-check-label" for="b_04_02">No</label>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>

    <h6>C. Datos de la Intervencion</h6>
    <div class="card">
        <div class="card-body p-3">

            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Fecha de mantenimiento:</label>
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" id="c_fechaRealizacion" value="<?php echo $c_fechaRealizacion ?>">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Hora de inicio:</label>
                </div>
                <div class="col-auto">
                    <input type="time" class="form-control form-control-sm" id="d_horainicio" value="<?php echo $d_horainicio ?>">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Hora de Culminación:</label>
                </div>
                <div class="col-auto">
                    <input type="time" class="form-control form-control-sm" id="d_horafin" value="<?php echo $d_horafin ?>">
                </div>

            </div>

        </div>
    </div>

    <h6>D. Personal Técnico Responsable</h6>
    <div class="card">
        <div class="card-body p-3">

            <div class="col mb-2">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <label for="inputCity" class="form-label">Nombre</label>
                    <select id="e_personal" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                        <?php echo $selectSupervisor ?>
                    </select>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                <div class="col">
                    <label for="inputCity" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre2" disabled value="<?php echo $nombre2 ?>">
                </div>
                <div class="col">
                    <label for="inputCity" class="form-label">Cargo</label>
                    <input type="text" class="form-control form-control-sm mb-2" id="e_personal_cargo2" disabled value="<?php echo $cargo2 ?>">
                </div>
                <div class="col">
                    <label for="inputCity" class="form-label">Telefono</label>
                    <input type="text" class="form-control form-control-sm" id="e_personal_cel2" disabled value="<?php echo $cel2 ?>">
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                <div class="col">
                    <label for="inputCity" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-sm mb-2" id="e_personal_nombre3" disabled value="<?php echo $nombre3 ?>">
                </div>
                <div class="col">
                    <label for="inputCity" class="form-label">Cargo</label>
                    <input type="text" class="form-control form-control-sm mb-2" id="e_personal_cargo3" disabled value="<?php echo $cargo3 ?>">
                </div>
                <div class="col">
                    <label for="inputCity" class="form-label">Telefono</label>
                    <input type="text" class="form-control form-control-sm" id="e_personal_cel2" disabled value="<?php echo $cel3 ?>">
                </div>
            </div>

        </div>
    </div>
