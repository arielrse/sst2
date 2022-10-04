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

$b_idenActivo       = $obj->{'b_idenActivo'};
$b_nroActivo        = $obj->{'b_nroActivo'};

$b1_noAplica    = isset($obj->{'b1_noAplica'})   ? $obj->{'b1_noAplica'}    : false ;
$b1_idenActivo  = isset($obj->{'b1_idenActivo'}) ? $obj->{'b1_idenActivo'}  : "" ;
$b1_nroActivo   = isset($obj->{'b1_nroActivo'})  ? $obj->{'b1_nroActivo'}   : "" ;

$d_horainicio       = $obj->{'d_horainicio'};
$d_horafin          = $obj->{'d_horafin'};
$d_transcurrido     = $obj->{'d_transcurrido'};

$c_fechaRealizacion = $obj->{'c_fechaRealizacion'};
$e_personal         = $obj->{'e_personal'};

$b1_noAplica_checked = "";
if ($b1_noAplica) $b1_noAplica_checked = "checked";

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
}

$b1View = $cform == "001";

$hrefpdf = "../../modulos/$modulo/rutina$cform/reporte.php";
$hrefrutina    = "../../usuarios/modulos/$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$idgrupo;

?>
<input type="hidden" name="rutinaId" id="rutinaId" value="<?php echo $idrutina ?>" />
<!--<input type="hidden" name="grupoId" id="grupoId" value="<?php /*echo $idgrupo */?>" />
<input type="hidden" name="eventoId" id="eventoId" value="<?php /*echo $idevento */?>" />-->
<input type="hidden" name="link_modulo" id="link_modulo" value="<?php echo $hrefrutina ?>" />

    <?php require("rutina_head_button.php"); ?>


    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body p-3">

            <h6 class="mb-0">A. Identificación del Sitio</h6>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 mb-2">
                <div class="col">
                    <label for="inputFirstName" class="form-label">CM/SCM:</label>
                    <input type="text" class="form-control form-control-sm" disabled value="<?php echo $cm ?>">
                    <input type="hidden" name="cm" id="cm" value="<?=$cm?>" />
                </div>

                <div class="col">
                    <label for="inputFirstName" class="form-label">ID Sitio:</label>
                    <input type="text" class="form-control form-control-sm" disabled value="<?php echo $sitioId ?>">
                    <input type="hidden" name="sitioId" id="sitioId" value="<?=$sitioId?>" />
                </div>

                <div class="col">
                    <label for="inputFirstName" class="form-label">Property id:</label>
                    <input type="text" class="form-control form-control-sm" disabled value="<?php echo $propertyId ?>">
                    <input type="hidden" name="propertyId" id="propertyId" value="<?=$propertyId?>" />
                </div>
            </div>

            <h6 class="mb-0">B. Identificación del Activo</h6>

            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Identificación:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-sm" id="b_idenActivo" value="<?php echo $b_idenActivo?>">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">N. Activo Fijo:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-sm" id="b_nroActivo" value="<?php echo $b_nroActivo?>">
                </div>
            </div>

            <?php if ( $b1View ) { ?>
            <h6 class="mb-2">B1. Identificación del Activo Madre</h6>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <label for="b1_noAplica" class="col-form-label">No Aplica:</label>
                </div>
                <div class="col-auto">
                    <input class="form-check-input" type="checkbox" id="b1_noAplica" <?php echo $b1_noAplica_checked ?> >
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Identificación:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-sm" id="b1_idenActivo" value="<?php echo $b1_idenActivo?>">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">N. Activo Fijo:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-sm" id="b1_nroActivo" value="<?php echo $b1_nroActivo ?>">
                </div>
            </div>
            <?php } ?>

            <h6 class="mb-0">D. Tiempo de Duración</h6>
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

            <h6 class="mb-0">C. Fecha de Realización</h6>

            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Fecha de mantenimiento:</label>
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" id="c_fechaRealizacion" value="<?php echo $c_fechaRealizacion ?>">
                </div>
            </div>

            <h6 class="mb-0">E. Personal Técnico Responsable</h6>

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