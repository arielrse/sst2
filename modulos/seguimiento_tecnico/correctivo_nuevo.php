<?php
date_default_timezone_set('America/La_Paz');

$fecha_eje = date("Y-m-d");
$fecha_corte = date("Y-m-d H:i");
$fecha_aviso = date("Y-m-d H:i");
$fecha_salida = date("Y-m-d H:i");
$fecha_llegada = date("Y-m-d H:i");
$fecha_superada = date("Y-m-d H:i");
$fecha_fin = date("Y-m-d H:i");
?>
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Mtto. Correctivo</div>

            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"></li>
                        <li class="breadcrumb-item active" aria-current="page">Nuevo Mantenimiento</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div>
                    <input type="button" id="btn-save-mttoc" class="btn btn-primary px-4" value="Guardar" />
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

                    <div class="col">
                        <table class="table table-sm table-bordered mb-0">
                            <tbody>
                            <tr>
                                <td class="col-xl-5 bg-light">Razon de la visita:</td>
                                <td class="col-xl-7">
                                    <input type="text" class="form-control form-control-sm" id="razon" name="razon" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-xl-5 bg-light">Centro de Mtto:</td>
                                <td class="col-xl-7">
                                    <select name="idcentro" id="idcentro" class="single-select">
                                        <option value="0" selected class="title7"> Seleccionar... </option>
                                        <?php
                                        $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['idcentro'].'">'.$dato['nombre'].'</option>';
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
                                                echo '<option value="' . $dato['iddepartamento'] . '" ';
                                                if($iddepartamento==$dato['iddepartamento']) echo 'selected';
                                                echo'>'.$dato['nombre'].'</option>';
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
                                        while($dato2=mysqli_fetch_array($resEst)){
                                            $idestacionentel  = $dato2['idestacionentel'];
                                            $descripcion = $dato2['nombreestacion'].' ('.$dato2['tipo'].')';
                                            echo '<option value="'.$idestacionentel.'">'. $descripcion .'</option>';
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
                                                                                    FROM usuarios where iddepartamento = '$iddepartamento' AND nivel = 2");
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>';
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
                                    $tipoArr = ['DEFINITIVA', 'PROVISIONAL'];
                                    $options = "<option value=''>Seleccionar...</option>";
                                    foreach ($tipoArr as $element){
                                        $options .= '<option value="'.$element.'">'.$element.'</option>';
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
                                   AND u.`iddepartamento` = ".$iddepartamento); // Id de la sesion
                        $selectSupervisor = "<option value=''>Seleccionar...</option>";

                        while( $data4 = mysqli_fetch_array($res4) ){
                            $userId = $data4['id'];
                            $selectSupervisor .= "<option value='$userId'>" . $data4['nombre'] . " - " . $data4['cargo'] . "</option>";
                        }
                        ?>
                        <label for="usr_coord" class="form-label">Personal de coordinación entel:</label>
                        <select id="usr_coord" name="usr_coord" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                            <?php echo $selectSupervisor ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="ticket_principal" class="form-label">Ticket GFM principal:</label>
                        <select id="ticket_principal" name="ticket_principal" class="single-select">
                            <option value="" selected class="title7"> Seleccionar... </option>
                            <?php
                            $resultado = mysqli_query($conexion, "SELECT * FROM st_ticketn");
                            while($dato=mysqli_fetch_array($resultado)) {
                                echo '<option value="' . $dato['ticket'] . '">' . $dato['ticket'] . ' (' . $dato['fecha_inicio_rif'] . ')</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="ticket_relacion" class="form-label">Tickets relacionados:</label>
                        <select id="ticket_relacion" name="ticket_relacion" class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                            <?php
                            $resultado = mysqli_query($conexion, "SELECT * FROM st_ticketn");
                            while($dato=mysqli_fetch_array($resultado)) {
                                echo '<option value="' . $dato['ticket'] . '">' . $dato['ticket'] . '</option>';
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
                                        $options .= '<option value="'.$element.'">'.$element.'</option>';
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
                                        $options .= '<option value="'.$element.'">'.$element.'</option>';
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
                                    $optionsArr = ['Abierto', 'Cerrado'];
                                    $options = "<option value=''>Seleccionar...</option>";
                                    foreach ($optionsArr as $element){
                                        $options .= '<option value="'.$element.'">'.$element.'</option>';
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
                                    $optionsArr = ['SI', 'NO'];
                                    $options = "<option value=''>Seleccionar...</option>";
                                    foreach ($optionsArr as $element){
                                        $options .= '<option value="'.$element.'">'.$element.'</option>';
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
                                            echo '<option value="'.$idsistemafalla.'">'.$nombrefalla.'</option>';
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
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-xl-4 bg-light">Tipo de Falla</td>
                                <td class="col-xl-8">
                                    <select name="tipofalla" id="tipofalla" class="form-select form-select-sm">
                                        <option value="">Seleccionar...</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-xl-4 bg-light">Solucion</td>
                                <td class="col-xl-8">
                                    <select name="solucion" id="solucion" class="form-select form-select-sm">
                                        <option value="">Seleccionar...</option>
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
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="descripcion_falla" name="descripcion_falla"></td>
                            </tr>
                            <tr>
                                <td class="col-xl-4 bg-light">Medida de Restitucion:</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="medidas_restituir" name="medidas_restituir"></td>
                            </tr>
                            <tr>
                                <td class="col-xl-4 bg-light">Estado Final de la estacion:</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="estado_final" name="estado_final"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>CAUSAS QUE MOTIVARON LA FALLA ( análisis y diagnóstico)</h6></label>
                        <textarea class="form-control" id="causas" name="causas" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>DAÑOS Y PARTES AFECTADAS EN LA ESTACIÓN </h6></label>
                        <textarea class="form-control" id="partes_afectadas" name="partes_afectadas" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>ESTACIONES AFECTADAS</h6></label>
                        <input type="text" class="form-control form-control-sm" id="estaciones_afectadas" name="estaciones_afectadas">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>SOLUCIÓN (50 CARACTERES)</h6></label>
                        <input type="text" class="form-control form-control-sm" id="desc_solucion" name="desc_solucion">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>DESCRIPCIÓN DE LA SOLUCIÓN</h6></label>
                        <textarea class="form-control" id="descripcion_solucion" name="descripcion_solucion" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>ACLARATIVOS</h6></label>
                        <textarea class="form-control" id="aclarativos" name="aclarativos" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>ACCIONES PREVENTIVAS SUGERIDAS</h6></label>
                        <textarea class="form-control" id="acciones_preventivas" name="acciones_preventivas" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>OBSERVACIONES DE JUSTIFICACION FUERA DE PLAZO</h6></label>
                        <textarea class="form-control" id="observaciones_fueraplazo" name="observaciones_fueraplazo" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h6>OBSERVACIONES</h6></label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="2"></textarea>
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
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_1" name="pendiente_1"></td>
                            </tr>
                            <tr>
                                <td width="2%">2.</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_2" name="pendiente_2"></td>
                            </tr>
                            <tr>
                                <td width="2%">3.</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_3" name="pendiente_3"></td>
                            </tr>
                            <tr>
                                <td width="2%">4.</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_4" name="pendiente_4"></td>
                            </tr>
                            <tr>
                                <td width="2%">5.</td>
                                <td class="col-xl-8"><input type="text" class="form-control form-control-sm" id="pendiente_5" name="pendiente_5"></td>
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
                                        while($dato=mysqli_fetch_array($resultado))
                                            echo '<option value="'.$dato['idgrupo'].'">'.$dato['nombre'].' ('.$dato['nombreCentro'].')</option>';
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
                        <label for="inputAddress" class="form-label"><h6>NOTAS</h6></label>
                        <textarea class="form-control" id="notas" name="notas" rows="2"></textarea>
                    </div>
                </div>

            </div>
        </div>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ms-auto">
                <div>
                    <input type="button" id="btn-save-mttoc2" class="btn btn-primary px-4" value="Guardar" />
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    var btn_save_mttoc = document.getElementById('btn-save-mttoc');
    btn_save_mttoc.addEventListener("click", saveMttoCorrectivo);

    var btn_save_mttoc2 = document.getElementById('btn-save-mttoc2');
    btn_save_mttoc2.addEventListener("click", saveMttoCorrectivo);

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

        $.ajax({
            url: 'save_mtto_correctivo.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
                //info_notify('Datos insertados correctamente', 'info');
                setTimeout( function() { window.location.href = '<?=$link_modulo?>?path=correctivos_mtto.php'; }, 1000 );
            }
        });

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
        //alert(idequipofalla);

        if (idtipofalla!==''){
            //alert('funciona');
            $.ajax({
                data:{idtipofalla:idtipofalla, idequipofalla:idequipofalla},
                dataType:'html',
                type:'POST',
                url:'../../paquetes/ajax/get_solucion.php'
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

</script>