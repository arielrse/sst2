<?php
$web=$_SESSION["web"];
//if (isset($_GET['event'])) $idevento = $_GET['event'];
$idevento = $_GET['event'];
$idgrupo = $_GET['gp'];


$resultado = mysqli_query($conexion, "SELECT e.`idevento`, e.`inicio`, s.`nombre`, s.`codsitio`, s.`tiponodo`, c.`nombre` AS nombreCentro, c.`coddep`, e.estado
                                            FROM evento e 
                                            LEFT JOIN sitio s ON e.`idsitio` = s.`idsitio`
                                            LEFT JOIN centro c ON s.`idcentro` = c.`idcentro`
                                            WHERE e.`idevento` = ".$idevento);
$dato = mysqli_fetch_array($resultado);

$result = mysqli_query($conexion,
    "SELECT g.user1, g.user2, 
            concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre1, u1.cargo AS cargo1, u1.cel AS cel1, 
            concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre2, u2.cargo AS cargo2, u2.cel AS cel2
            FROM grupo g
            JOIN usuarios u1 ON g.user1 = u1.id
            JOIN usuarios u2 ON g.user2 = u2.id
            AND g.idgrupo = ".$idevento);

$datoGp = mysqli_fetch_array($result);

$propertyId  = $dato['nombre'];
$sitioId     = $dato['codsitio'];
$cm          = $dato['nombreCentro'];
$estado      = $dato['estado'];
$fechaMtto   = $dato['inicio'];
$coddep   = $dato['coddep'];
$fechaInicio  = DateTime::createFromFormat('Y-m-d', $fechaMtto)->format('d/m/Y');
?>
<input type="hidden" name="cm" id="cm" value="<?=$cm?>" />
<input type="hidden" name="sitioId" id="sitioId" value="<?=$sitioId?>" />
<input type="hidden" name="idevento" id="idevento" value="<?=$idevento?>" />
<input type="hidden" name="propertyId" id="propertyId" value="<?=$propertyId?>" />
<input type="hidden" id="nombre2" value="<?=$nombre2?>" />
<input type="hidden" id="cargo2" value="<?=$cargo2?>" />
<input type="hidden" id="cel2" value="<?=$cel2?>" />
<input type="hidden" id="fechaMtto" value="<?=$fechaMtto?>" />



<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento  </li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="row g-0">
                <div class="card-body">
                    <h6 class="card-title"><? echo $propertyId . " - " . $cm ?></h6>
                    <div class="d-flex gap-2 py-2">
                        <div class="text-secondary"><i class='bx bxs-calendar-plus align-middle'></i><?php echo " " .$fechaInicio ?></div>
                        <?php if ( isAdmin() || isExpert() ) { ?>
                        <div>
                            <select id="select-estado">
                                <?php
                                $stateArr = ["PEN" => "Pendiente", "EJE" => "Ejecutado", "REP" => "Reprogramado ejecutado"];
                                $optionsState = "";
                                foreach ($stateArr as $estadoParam => $valor){
                                    $selected = ($estado == $estadoParam) ? 'selected' : '';
                                    $optionsState .= "<option value='$estadoParam' $selected>$valor</option>";
                                }
                                echo $optionsState;
                                ?>
                            </select>
                        </div>
                        <?php } ?>
                    </div>

                    <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-cog font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title"> Rutinas </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-cabinet font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Catastro</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primaryfiles" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-archive-in font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Docs Adjuntos</div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">

                            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                                <div class="col mb-2">
                                    <div class="input-group">
                                        <select class="single-select form-select" id="formulario">
                                            <option value="0" selected> Seleccionar rutina </option>
                                            <?php
                                            $resultado = mysqli_query($conexion, "SELECT idformulario, codigo, nombre, area FROM formulario WHERE tipo = 'PREVENTIVO'");
                                            while($dato=mysqli_fetch_array($resultado))
                                                echo '<option value="'.$dato['codigo'].'|'.$dato['idformulario'].'">'.$dato['codigo'].' - '.$dato['nombre'].'</option>';
                                            ?>
                                        </select>

                                        <?php if ( !isClient() && !isNationalClient() ) { ?>
                                        <button class="btn btn-outline-primary" type="button" id="add-rutina"><i class='bx bx-plus'></i></button>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>


                            <div id="table-routine">
                                <table class="table mb-0 table-hover">
                                    <tbody>
                                    <?php
                                    $query = "SELECT r.idrutina, f.idformulario, f.codigo, f.nombre, r.estado
                                                FROM rutina r
                                                LEFT JOIN formulario f ON r.idformulario = f.idformulario
                                                WHERE r.idevento = $idevento AND f.tipo = 'PREVENTIVO'";

                                    $result = mysqli_query($conexion, $query);
                                    $rows	= mysqli_num_rows($result);
                                    if ( $rows > 0 ){
                                        $i = 0;
                                        while( $data = mysqli_fetch_array($result) ){

                                            $stateHtml = "";
                                            if ($data['estado'] == 'PEN')
                                                $stateHtml = "<div class='text-danger'><i class='bx bxs-circle align-middle'></i> Pendiente</div>";
                                            if ($data['estado'] == 'REV')
                                                $stateHtml = "<div class='text-warning'><i class='bx bxs-circle align-middle'></i> Revisión</div>";
                                            if ($data['estado'] == 'APR')
                                                $stateHtml = "<div class='text-success'><i class='bx bxs-circle align-middle'></i> Aprobado</div>";

                                            $i++;
                                            $codigo     = $data['codigo'];
                                            $nombreForm = $data['nombre'];
                                            $idrutina   = $data['idrutina'];
                                            $estado     = $data['estado'];

                                            $href    = "$link_modulo?path=rutina_$codigo.php&event=$idevento&rut=$idrutina&cform=$codigo&gp=$idgrupo";
                                            $hrefpdf = "../../modulos/$modulo/rutina$codigo/reporte.php&event=$idevento";
                                            $hrefImg = "$link_modulo?path=rutina_addimage.php&codform=$codigo&rut=$idrutina&propertyId=$propertyId&nombreForm=$nombreForm&estado=$estado&coddep=$coddep";

                                            $eliminarRutina = ($data['estado']=='PEN') ? "<a href='javascript:;' class='ms-3' id='btnEliminarRutina' onclick='eliminarRutina(`$idrutina`, `$codigo`)'><i class='bx bxs-trash'></i></a>" : "";
                                            $eliminarRutina = (!isClient() && !isNationalClient()) ? $eliminarRutina : "";

                                            $addImagenes    = "<a href='$hrefImg' class='ms-3'><i class='bx bxs-image-add'></i></a>";

                                            echo "
                                            <tr>
                                                <td scope='row'>$i</td>
                                                <td>".$nombreForm."</td>
                                                <td>".$stateHtml."</td>
                                                <td>
                                                    <div class='d-flex order-actions'>
                                                        <a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>
                                                        ".$eliminarRutina."
                                                        ".$addImagenes."
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            ";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="primaryprofile" role="tabpanel">

                            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                                <div class="col mb-2">
                                    <div class="input-group">
                                        <select class="single-select form-select" id="catastroSelect">
                                            <option value="0" selected> Seleccionar catastro </option>
                                            <?php
                                            $resultado = mysqli_query($conexion, "SELECT idformulario, codigo, nombre, area FROM formulario WHERE tipo = 'CATASTRO'");
                                            while($dato=mysqli_fetch_array($resultado))
                                                echo '<option value="'.$dato['codigo'].'|'.$dato['idformulario'].'">'.$dato['codigo'].' - '.$dato['nombre'].'</option>';
                                            ?>
                                        </select>
                                        <?php if ( !isClient() && !isNationalClient() ) { ?>
                                        <button class="btn btn-outline-primary" type="button" id="add-catastro"><i class='bx bx-plus'></i></button>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div id="table-catastro">
                                <table class="table mb-0 table-hover">
                                    <tbody>
                                    <?php
                                    $query = "SELECT c.idcatastro, f.idformulario, f.codigo, f.nombre, c.estado
                                                FROM catastro c
                                                LEFT JOIN formulario f ON c.idformulario = f.idformulario
                                                WHERE c.idevento = $idevento AND f.tipo = 'CATASTRO'";

                                    $result = mysqli_query($conexion, $query);
                                    $rows	= mysqli_num_rows($result);
                                    if ( $rows > 0 ){
                                        $i = 0;
                                        while( $data = mysqli_fetch_array($result) ){

                                            $stateCatastroHtml = "";
                                            if ($data['estado'] == 'PEN')
                                                $stateCatastroHtml = "<div class='text-danger'><i class='bx bxs-circle align-middle'></i> Pendiente</div>";
                                            if ($data['estado'] == 'REV')
                                                $stateCatastroHtml = "<div class='text-warning'><i class='bx bxs-circle align-middle'></i> Revisión</div>";
                                            if ($data['estado'] == 'APR')
                                                $stateCatastroHtml = "<div class='text-success'><i class='bx bxs-circle align-middle'></i> Aprobado</div>";

                                            $i++;
                                            $codigo = $data['codigo'];
                                            $nombreForm = $data['codigo'] . ' ' . $data['nombre'];
                                            $idcatastro = $data['idcatastro'];
                                            $href    = "$link_modulo?path=catastro_$codigo.php&event=$idevento&rut=$idcatastro&cform=$codigo&gp=$idgrupo";
                                            $hrefpdf = "../../modulos/$modulo/rutina$codigo/reporte.php&event=$idevento";
                                            $hrefImg = "$link_modulo?path=rutina_add_image.php&rut=$idcatastro&propertyId=$propertyId&nombreForm=$nombreForm";

                                            $eliminarCatastro = "";
                                            if (!isNationalClient() && !isClient())
                                                $eliminarCatastro = "<a href='javascript:;' class='ms-3' id='btnEliminarCatastro' onclick='eliminarCatastro(`$idcatastro`, `$codigo`)'><i class='bx bxs-trash'></i></a>";

                                            $addImagenes    = "<a href='$hrefImg' class='ms-3'><i class='bx bxs-image-add'></i></a>";

                                            echo "
                                            <tr>
                                                <th scope='row'>$i</th>
                                                <td>".$nombreForm."</td>
                                                <td>".$stateCatastroHtml."</td>
                                                <td>
                                                    <div class='d-flex order-actions'>
                                                        <a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>
                                                        " . $eliminarCatastro . "
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            ";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="primaryfiles" role="tabpanel">
                            <?php if ( !isClient() && !isNationalClient() ) { ?>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input class="form-control" type="file" id="filedoc" name="filedoc">
                                        <input id="titulodoc" name="titulodoc" class="form-control" type="text" placeholder="Titulo del documento">
                                        <button class="btn btn-outline-primary" type="button" id="btn-subirdoc" name="btn-subirdoc"><i class='bx bx-plus'></i></button>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div id="table-docs">
                                <table class="table mb-0 table-hover">
                                <?php
                                $query = "SELECT id, nombre, titulo, extension, idevento FROM rutina_docs
                                          WHERE idevento = " . $idevento;
                                $result = mysqli_query($conexion, $query);
                                $i = 1;
                                while( $data = mysqli_fetch_array($result) ){
                                    $ext = $data['extension'];
                                    $nombreDoc = $data['nombre'];
                                    $idDoc = $data['id'];


                                    $hrefDoc = '../../docs/' . $nombreDoc;
                                    $sizedoc = filesize($hrefDoc)/1024/1000;
                                    $sizedoc = round($sizedoc, 1);


                                    $eliminarDoc = "";
                                    if (!isNationalClient() && !isClient())
                                        $eliminarDoc .= "<a href='javascript:;' class='ms-3' id='btnEliminarDoc' onclick='eliminarDoc(`$idDoc`, `$nombreDoc`)'>
                                                            <i class='bx bxs-trash'></i>
                                                         </a>";

                                    echo "
                                    <tr>
                                        <td>$i</td>
                                        <td>".$data['titulo']."</td>
                                        <td><small>$sizedoc M</small></td>
                                        <td>
                                            <div class='d-flex'>
                                                <i class='bx bx-download px-lg-1'></i>
                                                <a href='$hrefDoc' download>$ext</a>
                                                " . $eliminarDoc ."
                                            </div>
                                        </td>
                                    </tr>
                                    ";
                                    $i++;
                                }
                                ?>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<script type=text/javascript>

    function eliminarDoc(idDoc, nombreDoc){

        if (confirm('¿Esta seguro que desea eliminar el archivo?')) {

            var frmData = new FormData;
            frmData.append("idDoc", idDoc);
            frmData.append("nombreDoc", nombreDoc);

            $.ajax({
                url: 'eliminar_doc.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $("#table-docs").load(window.location + " #table-docs");
                }
            })
        }
    }

    async function getDatos(codigoForm) {
        const url = "../../paquetes/rutina/data/rutina" + codigoForm +".json"
        const res = await fetch(url);
        const datosFetch = await res.json();
        return datosFetch;
    }

    async function getDatosCatastro(codigoForm) {
        const url = "../../paquetes/catastro/data/catastro" + codigoForm +".json"
        const res = await fetch(url);
        const datosFetch = await res.json();
        return datosFetch;
    }


    function setReprogramacion(){
        alert("Reprogramar...")
    }

    function eliminarRutina(idrutina, codForm){

        if (confirm('¿Esta seguro eliminar la rutina y todos sus archivos?')){
            jQuery.post("../../paquetes/rutina/delete_rutina.php", {
                idrutina: idrutina,
                codForm: codForm
                }, function(data){
                    $("#table-routine").load(window.location + " #table-routine");
                }
            );
        }
    }

    function eliminarCatastro(idcatastro, codForm){

        if (confirm('¿Esta seguro que desea eliminar el catastro? : ' + codForm)){
            jQuery.post("../../paquetes/catastro/delete_catastro.php", {
                    idcatastro: idcatastro,
                    codForm: codForm
                }, function(data){
                    $("#table-catastro").load(window.location + " #table-catastro");
                }
            );
        }
    }

    function generarReporte(idrutina){
        alert("Reporte PDF: " + idrutina);
        jQuery.post("../../modulos/seguimiento_tecnico/rutina001/loadReport.php", {
                idrutina: idrutina,
            }, function(data){

            }
        );
    }

    $(document).ready(function() {

        $('#add-rutina').click(function(){

            var formulario = $('#formulario').val();
            var splitForm    = formulario.split("|");
            var codigoForm   = splitForm[0];
            var idformulario = splitForm[1];
            var fechaMtto    = $('#fechaMtto').val();

            var evento       = <?php echo $idevento; ?>

            var cm = $('#cm').val();
            var sitioId = $('#sitioId').val();
            var propertyId = $('#propertyId').val();

            getDatos(codigoForm)
                .then( (datos) => {
                    datos.cm = cm;
                    datos.sitioId = sitioId;
                    datos.propertyId = propertyId;
                    datos.c_fechaRealizacion = fechaMtto;

                    jQuery.post("../../paquetes/rutina/insert_rutina.php", {
                        idformulario: idformulario,
                        idevento: evento,
                        codigoForm: codigoForm,
                        jsonData: JSON.stringify(datos)
                    }, function(data, textStatus){
                        $("#table-routine").load(window.location + " #table-routine");
                        }
                    );
                })
        });

    });

    $(document).ready(function() {

        $('#add-catastro').click(function(){

            var formulario = $('#catastroSelect').val();
            var splitForm    = formulario.split("|");
            var codigoForm   = splitForm[0];
            var idformulario = splitForm[1];
            var fechaMtto    = $('#fechaMtto').val();
            var evento       = <?php echo $idevento; ?>

            var cm = $('#cm').val();
            var sitioId = $('#sitioId').val();
            var propertyId = $('#propertyId').val();

            getDatosCatastro(codigoForm)
                .then( (datos) => {
                    datos.cm = cm;
                    datos.sitioId = sitioId;
                    datos.propertyId = propertyId;
                    datos.c_fechaRealizacion = fechaMtto;

                    jQuery.post("../../paquetes/catastro/insert_catastro.php", {
                            idformulario: idformulario,
                            idevento: evento,
                            codigoForm: codigoForm,
                            jsonData: JSON.stringify(datos)
                        }, function(data, textStatus){
                            $("#table-catastro").load(window.location + " #table-catastro");
                        }
                    );
                })
        });

    });

    $(document).ready(function () {

        var btnEnviar = $("#btn-subirdoc");
        //var textoSubiendo = "Cargando imagen...";
        $('#btn-subirdoc').click(function(){

            var idevento  = $('#idevento').val()
            var titulodoc = $('#titulodoc').val()

            var size = document.getElementsByName("filedoc")[0].files[0].size;
            var docsize = ((size / 1024)/1000);

            if ( docsize < 150) {
                var frmData = new FormData;
                frmData.append("filedoc", $("input[name=filedoc]")[0].files[0]);
                frmData.append("idevento", idevento);
                frmData.append("titulodoc", titulodoc);

                $.ajax({
                    url: 'subir_doc.php',
                    type: 'POST',
                    data: frmData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function (data) {
                        btnEnviar.attr("disabled", true);
                        btnEnviar.html('<div class="spinner-border spinner-border-sm" role="status"></div>');
                    },
                    success: function (data) {
                        alert(data);
                        $("#table-docs").load(window.location + " #table-docs");
                        document.querySelector('#filedoc').value = "";
                        document.querySelector('#titulodoc').value = "";
                        btnEnviar.html('<i class="bx bx-plus"></i>');
                        btnEnviar.attr("disabled", false);
                    }
                })
            } else{
                alert( 'No es posible, el archivo supera los 150MB' )
            }
            return false;

        });

    });

    $(document).ready(function () {
        $('#select-estado').change(function(){

            //var id = $(this).find(':selected')[0].id;
            var idevento = $('#idevento').val()
            var estado   = $('#select-estado').val();

            alert('Actualizando... ');

            var frmData = new FormData;
            frmData.append("idevento", idevento);
            frmData.append("estado", estado);

            $.ajax({
                url: 'cambiar_estadoevento.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    alert(data);
                }
            })
            return false;
        });
    });
</script>