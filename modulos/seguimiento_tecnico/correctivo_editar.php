<?php
date_default_timezone_set('America/La_Paz');

$id = $_GET['idc'];
$consulta = "SELECT r.* 
             FROM rutina_correctivo r
             WHERE r.id = " . $id;

$resultado = mysqli_query($conexion, $consulta);
$dato = mysqli_fetch_array($resultado);
$estado = $dato['estado'];

$idcentro = $dato['idcentro'];
$razon = $dato['razon'];
$iddepartamento = $dato['iddepartamento'];
$usr_resp = $dato['usr_resp'];
$idestacione = $dato['idestacione'];
$fecha_eje = $dato['fecha_eje'];
$fecha_corte = $dato['fecha_corte'];
$tipo_solucion = $dato['tipo_solucion'];
$fecha_aviso = $dato['fecha_aviso'];
$fecha_llegada = $dato['fecha_llegada'];
$fecha_salida = $dato['fecha_salida'];
$fecha_superada = $dato['fecha_superada'];
$usr_coord = $dato['usr_coord'];
$fecha_fin = $dato['fecha_fin'];
$ticket_principal = $dato['ticket_principal'];
$atencion = $dato['atencion'];
$ticket_relacion = $dato['ticket_relacion'];
$servicio_afecta = $dato['servicio_afecta'];
$en_plazo = $dato['en_plazo'];
$estado_ticket = $dato['estado_ticket'];
$sistemafalla = $dato['sistemafalla'];
$tipofalla = $dato['tipofalla'];
$equipofalla = $dato['equipofalla'];
$solucion = $dato['solucion'];
$medidas_restituir = $dato['medidas_restituir'];
$descripcion_falla = $dato['descripcion_falla'];
$estado_final = $dato['estado_final'];
$partes_afectadas = $dato['partes_afectadas'];
$causas = $dato['causas'];
$estaciones_afectadas = $dato['estaciones_afectadas'];
$descripcion_solucion = $dato['descripcion_solucion'];
$desc_solucion = $dato['desc_solucion'];
$aclarativos = $dato['aclarativos'];
$observaciones_fueraplazo = $dato['observaciones_fueraplazo'];
$acciones_preventivas = $dato['acciones_preventivas'];
$observaciones = $dato['observaciones'];
$pendiente_2 = $dato['pendiente_2'];
$pendiente_1 = $dato['pendiente_1'];
$pendiente_3 = $dato['pendiente_3'];
$pendiente_5 = $dato['pendiente_5'];
$pendiente_4 = $dato['pendiente_4'];
$idgrupo = $dato['idgrupo'];
/*$usr_tec1 = $dato['usr_tec1'];
$usr_tec2 = $dato['usr_tec2'];*/
$notas = $dato['notas'];
$insumos = $dato['insumos'];
$repuestos = $dato['repuestos'];

$permissions = ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient());

$volver = "";
if (isset($_GET['volver'])) $volver = base64_decode($_GET['volver']);

?>
<input type="hidden" name="idc" id="idc" value="<?=$id?>" />
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-2">
            <div class="breadcrumb-title pe-3"><!--Mtto. Correctivo--></div>

            <!--<div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"></li>
                        <li class="breadcrumb-item active" aria-current="page">Nuevo Mantenimiento</li>
                    </ol>
                </nav>
            </div>-->
            <div class="row row-cols-auto pb-2">
                <button type="button" class="btn btn-inverse-primary" onclick="location.href='<?=$link_modulo?>?path=correctivos_mtto.php<?=$volver?>'"><i class="bx bx-arrow-back me-0"></i></button>
                <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || (isAdmin() && $estado!='REV' ) ) { ?>
                    <div class="col">
                        <button type="button" id="toReview" class="btn btn-warning px-3"><i class="bx bx-right-arrow-alt mr-1"></i>A revisión</button>
                    </div>
                <?php } ?>

                <?php if ( (isAdmin() || isExpert()) && $estado=='REV') { ?>
                    <div class="col">
                        <button type="button" id="toApprove" class="btn btn-success px-3"><i class="bx bx-check mr-1"></i>Aprobar</button>
                    </div>
                <?php } ?>

                <?php if ((isAdmin() || isExpert()) && $estado!='PEN') { ?>
                    <div class="col">
                        <button type="button" id="toOpen" class="btn btn-danger px-3"><i class="bx bx-lock-open-alt mr-1"></i>Abrir</button>
                    </div>
                <?php } ?>
            </div>
            <div class="ms-auto">
                <form id="frm-generar" action="reporteCorrectivo.php" method="post" enctype="multipart/form-data" target="_blank">
                    <input type="submit" id="btn-generar" class="btn btn-secondary px-4" value="Generar" />
                    <input type="hidden" name="idcorrectivo" id="idcorrectivo" value="<?=$id?>" />

                    <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
                    <input type="button" id="btn-save-mttoc" class="btn btn-primary px-4" value="Guardar" />
                    <?php } ?>
                    <!--<button type="button" class="btn btn-outline-primary" onclick="location.href='<?/*=$link_modulo*/?>?path=correctivos_mtto.php'"><i class="bx bx-arrow-back me-0"></i></button>-->
                </form>
            </div>
        </div>

        <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-repeat font-18 me-1'></i>
                        </div>
                        <div class="tab-title"> Correctivo </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#adjuntosTab" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-archive-in font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Fotos</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#repuestosTab" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-cabinet font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Repuestos</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#insumosTab" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-cabinet font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Insumos</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="card">
            <div class="card-body">

                <div class="tab-content pt-3">

                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Razon de la visita:</td>
                                        <td class="col-xl-7">
                                            <input type="text" class="form-control form-control-sm" id="razon" name="razon" value="<?=$razon?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Centro de Mtto:</td>
                                        <td class="col-xl-7">
                                            <select name="idcentro" id="idcentro" class="single-select">
                                                <option value="0" selected class="title7"> Seleccionar... </option>
                                                <?php
                                                $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                                while( $dato=mysqli_fetch_array($resultado) ) {
                                                    $selected = ($idcentro == $dato['idcentro']) ? 'selected' : '';
                                                    echo '<option value="' . $dato['idcentro'] . '" '.$selected.'>' . $dato['nombre'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Regional:</td>
                                        <td class="col-xl-7">

                                                <select name="iddepartamento" class="form-select form-select-sm" id="iddepartamento" disabled>
                                                    <option value="0" selected> Seleccionar... </option>
                                                    <?php
                                                    $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                                    while($dato=mysqli_fetch_array($resultado)) {
                                                        $selected = ($iddepartamento == $dato['iddepartamento']) ? 'selected' : '';
                                                        echo '<option value="' . $dato['iddepartamento'] . '" '.$selected.'>'.$dato['nombre'].'</option>';
                                                    }
                                                    ?>
                                                </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Nombre Estación:</td>
                                        <td class="col-xl-7">
                                            <select name="idestacione" id="idestacione" class="single-select">
                                                <option value="0" selected class="title7"> Seleccionar... </option>
                                                <?php
                                                $resEst=mysqli_query($conexion, "SELECT e.idestacionentel, e.nombreestacion, e.tipo, c.coddep
                                                                             FROM estacionentel e
                                                                             LEFT JOIN centro c on e.idcentro = c.idcentro
                                                                             WHERE c.iddepartamento = '$iddepartamento'");
                                                while($dato=mysqli_fetch_array($resEst)){
                                                    $idestacionentel = $dato['idestacionentel'];
                                                    $descripcion     = $dato['nombreestacion'].' ('.$dato['tipo'].')';

                                                    $selected = ($idestacione == $dato['idestacionentel']) ? 'selected' : '';
                                                    echo '<option value="'.$idestacionentel.'" '.$selected.'>'. $descripcion .'</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Resp. Exsmecon:</td>
                                        <td class="col-xl-7">
                                            <select id="usr_resp" name="usr_resp" class="single-select">
                                                <option value="" selected class="title7"> Seleccionar... </option>
                                                <?php
                                                $resultado = mysqli_query($conexion, "SELECT id,
                                                                                            concat(nombre, ' ', ap_pat, ' ', ap_mat) AS nombre  
                                                                                            FROM usuarios where iddepartamento = '$iddepartamento' AND nivel in (1,2, 3)");
                                                while($dato=mysqli_fetch_array($resultado)) {
                                                    $selected = ($usr_resp == $dato['id']) ? 'selected' : '';
                                                    echo '<option value="' . $dato['id'] . '" '.$selected.'>' . $dato['nombre'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Fecha de Ejecución:</td>
                                        <td class="col-xl-7">
                                            <div class="input-group input-group-sm">
                                                <input type="date" class="form-control" id="fecha_eje" name="fecha_eje" value="<?php echo $fecha_eje ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Tipo de Solución:</td>
                                        <td class="col-xl-7">
                                            <?php
                                            $tipoArr = ['DEFINITIVA', 'PROVISIONAL', 'PENDIENTE'];
                                            $options = "<option value=''>Seleccionar...</option>";
                                            foreach ($tipoArr as $element){
                                                $selected = ($tipo_solucion == $element) ? 'selected' : '';
                                                $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                            }
                                            ?>
                                            <select id="tipo_solucion" name="tipo_solucion" class="form-select form-select-sm">
                                                <?php echo $options ?>
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>
                                    <tr class="bg-light">
                                        <td class="col-xl-5"></td>
                                        <td class="col-xl-7" align="center">Fecha</td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Corte de servicio ticket:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_corte" name="fecha_corte" value="<?php echo $fecha_corte ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Avisado por entel:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_aviso" name="fecha_aviso" value="<?php echo $fecha_aviso ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Salida de cm / scm:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_salida" name="fecha_salida" value="<?php echo $fecha_salida ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Llegada a estación:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_llegada" name="fecha_llegada" value="<?php echo $fecha_llegada ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">Falla superada:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_superada" name="fecha_superada" value="<?php echo $fecha_superada ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-5 bg-light">fin de trabajo:</td>
                                        <td class="col-xl-7">
                                            <input type="datetime-local" class="form-control form-control-sm" id="fecha_fin" name="fecha_fin" value="<?php echo $fecha_fin ?>">
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 mt-2">
                            <div class="col">
                                <?php
                                $res4 = mysqli_query($conexion,
                                    "SELECT u.id, concat(u.nombre, ' ', u.ap_pat, ' ', u.ap_mat) AS nombre, u.`cargo`, u.`cel`
                                           FROM usuarios u WHERE u.nivel = 4
                                           AND u.`iddepartamento` = ".$iddepartamento);

                                $selectSupervisor = "<option value=''>Seleccionar...</option>";
                                while( $data4 = mysqli_fetch_array($res4) ){
                                    $userId = $data4['id'];
                                    $selected = ($usr_coord == $userId) ? 'selected' : '';
                                    $selectSupervisor .= "<option value='$userId' ".$selected.">" . $data4['nombre'] . " - " . $data4['cargo'] . "</option>";
                                }
                                ?>
                                <label for="usr_coord" class="form-label">Personal de coordinación entel:</label>
                                <select id="usr_coord" name="usr_coord" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $selectSupervisor ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="ticket_principal" class="form-label">Ticket principal:</label>
                                <select id="ticket_principal" name="ticket_principal" class="single-select">
                                    <option value="" selected class="title7"> Seleccionar... </option>
                                    <?php
                                    //$resultado = mysqli_query($conexion, "SELECT * FROM st_ticketn");
                                    $resultado = mysqli_query($conexion,
                                            "SELECT t.id_st_ticket, t.ticket, t.fecha_inicio_rif FROM st_ticketn t
                                                   LEFT JOIN estacionentel e ON t.idestacion = e.idestacionentel
                                                   LEFT JOIN sitio s         ON e.idsitio = s.idsitio
                                                   WHERE s.iddepartamento = $iddepartamento and t.fecha_inicio_rif >= '2023-01-01'");

                                    while($dato=mysqli_fetch_array($resultado)) {
                                        $selected = ($ticket_principal == $dato['ticket']) ? 'selected' : '';
                                        echo '<option value="' . $dato['ticket'] . '" '.$selected.'>' . $dato['ticket'] . ' (' . $dato['fecha_inicio_rif'] . ')</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="ticket_relacion" class="form-label">Tickets relacionados:</label>
                                <select id="ticket_relacion" name="ticket_relacion" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                    <?php
                                    $ticketsArr = explode(',', $ticket_relacion);
                                    //$resultado = mysqli_query($conexion, "SELECT * FROM st_ticketn");
                                    $resultado = mysqli_query($conexion,
                                            "SELECT t.id_st_ticket, t.ticket FROM st_ticketn t
                                                   LEFT JOIN estacionentel e ON t.idestacion = e.idestacionentel
                                                   LEFT JOIN sitio s         ON e.idsitio = s.idsitio
                                                   WHERE s.iddepartamento = $iddepartamento and t.fecha_inicio_rif >= '2023-01-01'");

                                    while($dato=mysqli_fetch_array($resultado)) {
                                        $selected = '';
                                        if ($ticket_relacion != '') {
                                            foreach ($ticketsArr as $value) {
                                                if ($value == $dato['ticket']) {
                                                    $selected = 'selected';
                                                    break;
                                                }
                                            }
                                        }
                                        echo '<option value="' . $dato['ticket'] . '" '.$selected.'>' . $dato['ticket'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 mt-3">
                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-6 bg-light">Atención</td>
                                        <td class="col-xl-6">
                                            <?php
                                            $optionsArr = ['Remota', 'En Sitio'];
                                            $options = "<option value=''>Seleccionar...</option>";
                                            foreach ($optionsArr as $element){
                                                $selected = ($atencion == $element) ? 'selected' : '';
                                                $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                            }
                                            ?>
                                            <select id="atencion" name="atencion" class="form-select form-select-sm">
                                                <?php echo $options ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-6 bg-light">Afectacion al servicio</td>
                                        <td class="col-xl-6">
                                            <?php
                                            $optionsArr = ['Con Corte', 'Sin Corte'];
                                            $options = "<option value=''>Seleccionar...</option>";
                                            foreach ($optionsArr as $element){
                                                $selected = ($servicio_afecta == $element) ? 'selected' : '';
                                                $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                            }
                                            ?>
                                            <select id="servicio_afecta" name="servicio_afecta" class="form-select form-select-sm">
                                                <?php echo $options ?>
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col">
                                <table class="table table-sm table-bordered mb-0" width="60%">
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-6 bg-light">Estado de ticket</td>
                                        <td class="col-xl-6">
                                            <?php
                                            $optionsArr = ['Abierto', 'Cerrado', 'No Aplica'];
                                            $options = "<option value=''>Seleccionar...</option>";
                                            foreach ($optionsArr as $element){
                                                $selected = ($estado_ticket == $element) ? 'selected' : '';
                                                $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                            }
                                            ?>
                                            <select id="estado_ticket" name="estado_ticket" class="form-select form-select-sm">
                                                <?php echo $options ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-6 bg-light">En Plazo</td>
                                        <td class="col-xl-6">
                                            <?php
                                            $optionsArr = ['SI', 'NO', 'No Aplica'];
                                            $options = "<option value=''>Seleccionar...</option>";
                                            foreach ($optionsArr as $element){
                                                $selected = ($en_plazo == $element) ? 'selected' : '';
                                                $options .= '<option value="'.$element.'" '.$selected.'>'.$element.'</option>';
                                            }
                                            ?>
                                            <select id="en_plazo" name="en_plazo" class="form-select form-select-sm">
                                                <?php echo $options ?>
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1 mt-3">
                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>
                                    <tr class="bg-light">
                                        <td class="col-xl-4">SISTEMA</td>
                                        <td class="col-xl-8">
                                            <select name="sistemafalla" id="sistemafalla" class="form-select form-select-sm">
                                                <option value="" selected class="title7"> Seleccionar... </option>
                                                <?php
                                                $res2=mysqli_query($conexion, "SELECT idsistemafalla, nombresistemafalla FROM ticket_sistemafalla");
                                                while($dato2=mysqli_fetch_array($res2)){
                                                    $idsistemafalla = $dato2['idsistemafalla'];
                                                    $nombrefalla    = $dato2['nombresistemafalla'];
                                                    $selected = ($sistemafalla == $idsistemafalla) ? 'selected' : '';
                                                    echo '<option value="'.$idsistemafalla.'" '.$selected.'>'.$nombrefalla.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td class="col-xl-4 bg-light">Sistema/Equipo en falla</td>
                                        <td class="col-xl-8">
                                            <select name="equipofalla" id="equipofalla" class="form-select form-select-sm">
                                                <option value="">Seleccionar...</option>
                                                <?php
                                                $res2=mysqli_query($conexion, "SELECT idequipofalla, nombreequipofalla FROM ticket_equipofalla");
                                                while($dato2=mysqli_fetch_array($res2)){
                                                    $selected = ($equipofalla == $dato2['idequipofalla']) ? 'selected' : '';
                                                    echo '<option value="'.$dato2['idequipofalla'].'" '.$selected.'>'.$dato2['nombreequipofalla'].'</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-4 bg-light">Tipo de Falla</td>
                                        <td class="col-xl-8">
                                            <select name="tipofalla" id="tipofalla" class="form-select form-select-sm">
                                                <option value="">Seleccionar...</option>
                                                <?php
                                                $res2=mysqli_query($conexion, "SELECT ticket_tipofalla.idtipofalla, ticket_tipofalla.nombretipofalla FROM ticket_tipofalla");
                                                while($dato2=mysqli_fetch_array($res2)){
                                                    $idtipofalla = $dato2['idtipofalla'];
                                                    $nombre      = $dato2['nombretipofalla'];
                                                    $selected = ($tipofalla == $idtipofalla) ? 'selected' : '';
                                                    echo '<option value="'.$idtipofalla.'" '.$selected.'>'.$nombre.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-4 bg-light">Solucion</td>
                                        <td class="col-xl-8">
                                            <select name="solucion" id="solucion" class="single-select">
                                                <option value="">Seleccionar...</option>
                                                <?php
                                                $res2=mysqli_query($conexion, "SELECT idsolucion, nombresolucion FROM ticket_solucion order by idsolucion, nombresolucion");
                                                while($dato2=mysqli_fetch_array($res2)){
                                                    $idsolucion = $dato2['idsolucion'];
                                                    $nombre     = $dato2['idsolucion'] .' '.$dato2['nombresolucion'];
                                                    $selected = ($solucion == $idsolucion) ? 'selected' : '';
                                                    echo '<option value="'.$idsolucion.'" '.$selected.'>'.$nombre.'</option>';
                                                }

                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1 mt-3">
                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>

                                    <tr>
                                        <td class="col-xl-4 bg-light">Descripcion de la Falla del servicio:</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="descripcion_falla" name="descripcion_falla" value="<?=$descripcion_falla?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-4 bg-light">Medida de Restitucion:</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="medidas_restituir" name="medidas_restituir" value="<?=$medidas_restituir?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-4 bg-light">Estado Final de la estacion:</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="estado_final" name="estado_final" value="<?=$estado_final?>"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>CAUSAS QUE MOTIVARON LA FALLA ( análisis y diagnóstico)</h6></label>
                                <textarea class="form-control" id="causas" name="causas" rows="2"><?=$causas?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>DAÑOS Y PARTES AFECTADAS EN LA ESTACIÓN </h6></label>
                                <textarea class="form-control" id="partes_afectadas" name="partes_afectadas" rows="2"><?=$partes_afectadas?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>ESTACIONES AFECTADAS</h6></label>
                                <input type="text" class="form-control form-control-sm" id="estaciones_afectadas" name="estaciones_afectadas" value="<?=$estaciones_afectadas?>">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>SOLUCIÓN (50 CARACTERES)</h6></label>
                                <input type="text" class="form-control form-control-sm" id="desc_solucion" name="desc_solucion" value="<?=$desc_solucion?>">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>DESCRIPCIÓN DE LA SOLUCIÓN</h6></label>
                                <textarea class="form-control" id="descripcion_solucion" name="descripcion_solucion" rows="2"><?=$descripcion_solucion?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>ACLARATIVOS</h6></label>
                                <textarea class="form-control" id="aclarativos" name="aclarativos" rows="2"><?=$aclarativos?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>ACCIONES PREVENTIVAS SUGERIDAS</h6></label>
                                <textarea class="form-control" id="acciones_preventivas" name="acciones_preventivas" rows="2"><?=$acciones_preventivas?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>OBSERVACIONES DE JUSTIFICACION FUERA DE PLAZO</h6></label>
                                <textarea class="form-control" id="observaciones_fueraplazo" name="observaciones_fueraplazo" rows="2"><?=$observaciones_fueraplazo?></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label"><h6>OBSERVACIONES</h6></label>
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="2"><?=$observaciones?></textarea>
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 mt-3">
                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>

                                    <tr class="bg-light">
                                        <td></td>
                                        <td class="col-xl-8">PENDIENTES DE LA ESTACIÓN</td>
                                    </tr>
                                    <tr>
                                        <td width="2%">1.</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_1" name="pendiente_1" value="<?=$pendiente_1?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="2%">2.</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_2" name="pendiente_2" value="<?=$pendiente_2?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="2%">3.</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_3" name="pendiente_3" value="<?=$pendiente_3?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="2%">4.</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_4" name="pendiente_4" value="<?=$pendiente_4?>"></td>
                                    </tr>
                                    <tr>
                                        <td width="2%">5.</td>
                                        <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_5" name="pendiente_5" value="<?=$pendiente_5?>"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="col">
                                <table class="table table-sm table-bordered mb-0">
                                    <tbody>

                                    <tr class="bg-light">
                                        <td class="col-xl-8">PERSONAL TÉCNICO EXSMECON</td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-8">
                                            <select name="idgrupo" class="single-select" id="idgrupo">
                                                <option value="0" selected class="title7"> Seleccionar... </option>
                                                <?php
                                                $resultado=mysqli_query($conexion, "
                                                            SELECT g.idgrupo, g.codigo, g.nombre, c.nombre AS nombreCentro, d.iddepartamento
                                                            FROM grupo g 
                                                            JOIN centro c       ON g.idcentro = c.idcentro
                                                            JOIN departamento d ON c.iddepartamento = d.iddepartamento
                                                            WHERE d.`iddepartamento` = $iddepartamento ");
                                                while($dato=mysqli_fetch_array($resultado)){
                                                    $selected = ($idgrupo == $dato['idgrupo']) ? 'selected' : '';
                                                    echo '<option value="' . $dato['idgrupo'] . '" '.$selected.'>'.$dato['nombre'].' ('.$dato['nombreCentro'].')</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="notas" class="form-label"><h6>NOTAS</h6></label>
                                <textarea class="form-control" id="notas" name="notas" rows="2"><?=$notas?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="repuestosTab" role="tabpanel">
                        <?php require("../../modulos/seguimiento_tecnico/correctivo_repuestos.php"); ?>
                    </div>

                    <div class="tab-pane fade" id="insumosTab" role="tabpanel">
                        <?php require("../../modulos/seguimiento_tecnico/correctivo_materiales.php"); ?>
                    </div>

                    <div class="tab-pane fade" id="adjuntosTab" role="tabpanel">
                        <?php require("../../modulos/seguimiento_tecnico/correctivo_fotos.php"); ?>
                    </div>

                </div>

            </div>
        </div>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ms-auto">
                <div>
                    <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
                        <input type="button" id="btn-save-mttoc2" class="btn btn-primary px-4" value="Guardar" />
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    var exists  = !!document.getElementById('btn-save-mttoc');
    var exists2 = !!document.getElementById('btn-save-mttoc2');

    var btn_save_mttoc = document.getElementById('btn-save-mttoc');
    var btn_save_mttoc2 = document.getElementById('btn-save-mttoc2');

    if (exists)  btn_save_mttoc.addEventListener("click", saveMttoCorrectivo);
    if (exists2) btn_save_mttoc2.addEventListener("click", saveMttoCorrectivo);


    function saveMttoCorrectivo() {

        var frmData = new FormData;
        frmData.append('razon', $("#razon").val());
        frmData.append('idcentro', $("#idcentro").val());
        frmData.append('iddepartamento', $("#iddepartamento").val());
        frmData.append('idestacione', $("#idestacione").val());
        frmData.append('usr_resp', $("#usr_resp").val());
        frmData.append('fecha_eje', $("#fecha_eje").val());
        frmData.append('tipo_solucion', $("#tipo_solucion").val());
        frmData.append('fecha_corte', $("#fecha_corte").val());
        frmData.append('fecha_aviso', $("#fecha_aviso").val());
        frmData.append('fecha_salida', $("#fecha_salida").val());
        frmData.append('fecha_llegada', $("#fecha_llegada").val());
        frmData.append('fecha_superada', $("#fecha_superada").val());
        frmData.append('fecha_fin', $("#fecha_fin").val());
        frmData.append('usr_coord', $("#usr_coord").val());
        frmData.append('ticket_principal', $("#ticket_principal").val());
        frmData.append('ticket_relacion', $("#ticket_relacion").val());
        frmData.append('atencion', $("#atencion").val());
        frmData.append('servicio_afecta', $("#servicio_afecta").val());
        frmData.append('estado_ticket', $("#estado_ticket").val());
        frmData.append('en_plazo', $("#en_plazo").val());
        frmData.append('sistemafalla', $("#sistemafalla").val());
        frmData.append('equipofalla', $("#equipofalla").val());
        frmData.append('tipofalla', $("#tipofalla").val());
        frmData.append('solucion', $("#solucion").val());
        frmData.append('descripcion_falla', $("#descripcion_falla").val());
        frmData.append('medidas_restituir', $("#medidas_restituir").val());
        frmData.append('estado_final', $("#estado_final").val());
        frmData.append('causas', $("#causas").val());
        frmData.append('partes_afectadas', $("#partes_afectadas").val());
        frmData.append('estaciones_afectadas', $("#estaciones_afectadas").val());
        frmData.append('desc_solucion', $("#desc_solucion").val());
        frmData.append('descripcion_solucion', $("#descripcion_solucion").val());
        frmData.append('aclarativos', $("#aclarativos").val());
        frmData.append('acciones_preventivas', $("#acciones_preventivas").val());
        frmData.append('observaciones_fueraplazo', $("#observaciones_fueraplazo").val());
        frmData.append('observaciones', $("#observaciones").val());
        frmData.append('pendiente_1', $("#pendiente_1").val());
        frmData.append('pendiente_2', $("#pendiente_2").val());
        frmData.append('pendiente_3', $("#pendiente_3").val());
        frmData.append('pendiente_4', $("#pendiente_4").val());
        frmData.append('pendiente_5', $("#pendiente_5").val());
        frmData.append('idgrupo', $("#idgrupo").val());
        frmData.append('notas', $("#notas").val());

        var idc = $("#idc").val();
        frmData.append('idc', idc);

        $.ajax({
            url: 'update_mtto_correctivo.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });
        guardarMaterial();
        guardarRepuesto();
    }

    //-------------------------------------------------------------------------------
    var equipofalla = $('#equipofalla');
    //var equipofalla_sel = $('#equipofalla_sel');
    $('#sistemafalla').change(function(){
        //alert('funciona');
        var idsistemafalla=$(this).val();
        if (idsistemafalla!==''){
            //alert('funciona');
            $.ajax({
                data:{idsistemafalla:idsistemafalla},
                dataType:'html',
                type:'POST',
                url:'../../paquetes/ajax/get_equipofalla.php'
            }).done(function(data){
                equipofalla.html(data);
                equipofalla.prop('disabled',false);
            });
        }else{
            equipofalla.val('');
            equipofalla.prop('disabled',false)
        }
        //$('#equipofalla')
    });
    //---------------------------------------------------------------------------
    var tipofalla = $('#tipofalla');
    //var equipofalla_sel = $('#equipofalla_sel');
    $('#equipofalla').change(function(){
        //alert('funciona');
        var idequipofalla=$(this).val();
        if (idequipofalla!==''){
            //alert('funciona');
            $.ajax({
                data:{idequipofalla:idequipofalla},
                dataType:'html',
                type:'POST',
                url:'../../paquetes/ajax/get_tipofalla.php'
            }).done(function(data){
                tipofalla.html(data);
                tipofalla.prop('disabled',false);
            });
        }else{
            tipofalla.val('');
            tipofalla.prop('disabled',false)
        }
        //$('#equipofalla')
    });

    //---------------------------------------------------------------------------
    var solucion = $('#solucion');
    //var equipofalla_sel = $('#equipofalla_sel');
    $('#tipofalla').change(function(){
        //alert('funciona');

        var idtipofalla=$(this).val();
        var idequipofalla=$('#equipofalla').val();
        var idsistemafalla = $('#sistemafalla').val();
        //alert(idequipofalla);

        if (idtipofalla!==''){
            //alert('funciona');
            $.ajax({
                data:{idtipofalla:idtipofalla, idequipofalla:idequipofalla, idsistemafalla:idsistemafalla},
                dataType:'html',
                type:'POST',
                url:'../../paquetes/ajax/get_solucion_todo.php'
            }).done(function(data){
                solucion.html(data);
                solucion.prop('disabled',false);
            });
        }else{
            solucion.val('');
            solucion.prop('disabled',false)
        }
        //$('#equipofalla')
    });


    function fileValidation(){
        var fileInput = document.getElementById('imagen');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if(!allowedExtensions.exec(filePath)){
            alert('Por favor cargar imagenes solo con formato  jpeg  jpg  png');
            fileInput.value = '';
            return false;
        } else {
            return true;
        }
    }

    $('#btn-generar').click(function(){
        var idc  = $('#idc').val()
        $('#frm-generar').submit();
    });


    /** ----------------------------------------- **/
    var link_modulo = '../../usuarios/modulos/seguimiento_tecnico.php?path=correctivos_mtto.php';
    $(document).ready(function() {
        $('#toReview').click(function(){
            if (confirm('¿Desea enviar a revisión?')) {
                var idrutinacorrectivo  = $('#idc').val()
                var estado = 'REV';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCorrectivo.php", {
                        idrutinacorrectivo: idrutinacorrectivo,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });

    $(document).ready(function() {
        $('#toApprove').click(function(){
            if (confirm('¿Desea aprobar el Mantenimiento?')) {
                var idrutinacorrectivo  = $('#idc').val()
                var estado = 'APR';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCorrectivo.php", {
                        idrutinacorrectivo: idrutinacorrectivo,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });

    $(document).ready(function() {
        $('#toOpen').click(function(){
            if (confirm('¿Desea abrir el Mantenimiento?')) {
                var idrutinacorrectivo  = $('#idc').val()
                var estado = 'PEN';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCorrectivo.php", {
                        idrutinacorrectivo: idrutinacorrectivo,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });
</script>