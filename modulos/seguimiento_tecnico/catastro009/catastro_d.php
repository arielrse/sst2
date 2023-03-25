<?php
require("CharsUtils.php");

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01; $d05_02 = $desarrollo_d->d05_02;
$d06_01 = $desarrollo_d->d06_01; $d06_02 = $desarrollo_d->d06_02;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01;
$d11_01 = $desarrollo_d->d11_01;
$d12_01 = $desarrollo_d->d12_01;
$d13_01 = $desarrollo_d->d13_01;

$observaciones = convertSpecialChars($obj->observaciones);

/* --------------------------------------------------------------------- */
$servicioArr = ["En servicio", "Fuera de servicio"];
$servicioOption = "<option>Seleccionar...</option>";
foreach ($servicioArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $servicioOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

$estadoArr = ["Obsoleto", "Falta de capacidad", "Con falla"];
$estadoOption = "<option>Seleccionar...</option>";
foreach ($estadoArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $estadoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tipo_equipoArr = ["Split", "Mochila"];
$tipo_equipoOption = "<option>Seleccionar...</option>";
foreach ($tipo_equipoArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $tipo_equipoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$baja_tensionArr = ["Monofasico", "Trifasico"];
$baja_tensionOption = "<option>Seleccionar...</option>";
foreach ($baja_tensionArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $baja_tensionOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$flujo_aireArr = ["Down Flow", "UP Flow", "Frontal"];
$flujo_aireOption = "<option>Seleccionar...</option>";
foreach ($flujo_aireArr as $element){
    $selected = "";
    if ($d10_01 == $element) $selected = "selected";
    $flujo_aireOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <table class="table mb-0">
            <tbody>
                <tr>
                   <td>Funcionalidad (en servicio/fuera de servicio)</td>
                   <td colspan="2">
                       <div class="input-group input-group-sm mb-2">
                           <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                               <?php echo $servicioOption ?>
                           </select>
                       </div>
                   </td>
                </tr>
                <tr>
                    <td>Estado (obsoleto/falta de capacidad/con falla)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $estadoOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tipo de equipo (Split/Mochila)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo  $tipo_equipoOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Marca </td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                            </div>
                        </td>
                    </tr>
                   <tr>
                        <td>Modelo Unidad Interna / Externa</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                       <td>
                           <div class="input-group input-group-sm mb-2">
                               <input type="text" class="form-control" id="d05_02" value="<?php echo $d05_02 ?>">
                           </div>
                       </td>
                    </tr>
                <tr>
                    <td>Numero de Serie Unidad Interna / Externa</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d06_01" value="<?php echo $d06_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d06_02" value="<?php echo $d06_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sistema en baja tensión BT (Monofásico/Trifásico)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $baja_tensionOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de entrada - VCA</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Capacidad de enfriamiento - KBTU- Kw  (KW=KBTU/3,41)</td>

                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_01" value="<?php echo $d09_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tipo de Flujo de aire (Down Flow/ UP Flow / Frontal)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d10_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $flujo_aireOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de inicio de operación</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d11_01" value="<?php echo $d11_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d12_01" value="<?php echo $d12_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha vencimiento de garantía</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d13_01" value="<?php echo $d13_01 ?>">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h7 class="mb-0 text-uppercase">Otras observaciones:</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>
        <!-- Reporte Fotografico --> <!-- ***** -->
        <h6 class="mt-3">AMBIENTE - REPORTE FOTOGRÁFICO</h6>

        <?php /*if ( !isClient() && !isNationalClient() ) { */?>
        <?php if ( $permissions ) { ?>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="col-md-4">
                            <input class="form-control form-control-sm" type="file" id="imagen" name="imagen">
                        </div>
                        <div class="col-md-7">
                            <input id="tituloimagen" name="tituloimagen" class="form-control form-control-sm" type="text" placeholder="Titulo">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-sm btn-outline-primary" type="button" id="btn-subirimg" name="btn-subirimg"><i class='bx bx-plus'></i></button>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <div id="table-imgs">
            <table class="table mb-0 table-hover">
                <?php
                $query = "SELECT * FROM catastroimg WHERE idcatastro = " . $idcatastro;
                $result = mysqli_query($conexion, $query);
                $i = 1;
                while( $data = mysqli_fetch_array($result) ){

                    $nombre = $data['nombre'];
                    $idcatastroimg  = $data['idcatastroimg'];

                    $hrefDoc = '../../fotos/catastro/' . $nombre;

                    $eliminarDoc = "";
                    /*if (!isNationalClient() && !isClient())*/
                    if ($permissions)
                        $eliminarDoc .= "<a href='javascript:;' class='ms-3' id='btnEliminarDoc' onclick='eliminarImagenCatastro(`$idcatastroimg`)'>
                                    <i class='bx bx-x'></i>
                                 </a>";
                    echo "
                    <tr>
                        <td width='5%'>$i</td>
                        <td width='88%'><a href='$hrefDoc' target='_blank'>".$data['titulo']."</a></td>
                        <td width='7%'>
                            <div class='d-flex'>
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
        <!-- End Reporte Fotografico -->

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        var btnEnviar = $("#btn-subirimg");

        $('#btn-subirimg').click(function(){

            var idcatastro  = $('#catastroId').val()
            var tituloimagen = $('#tituloimagen').val()

            var size = document.getElementsByName("imagen")[0].files[0].size;
            var docsize = ((size / 1024)/1000);

            if ( docsize < 10) {
                var frmData = new FormData;
                frmData.append("imagen", $("input[name=imagen]")[0].files[0]);
                frmData.append("idcatastro", idcatastro);
                frmData.append("tituloimagen", tituloimagen);

                if (fileValidation()) {
                    $.ajax({
                        url: 'subir_imagenCatastro.php',
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
                            $("#table-imgs").load(window.location + " #table-imgs");
                            document.querySelector('#imagen').value = "";
                            document.querySelector('#tituloimagen').value = "";
                            btnEnviar.html('<i class="bx bx-plus"></i>');
                            btnEnviar.attr("disabled", false);
                        }
                    })
                } else {
                    document.querySelector('#imagen').value = "";
                    document.querySelector('#tituloimagen').value = "";
                }
            } else{
                alert( 'No es posible, el archivo supera los 10MB' )
            }
            return false;

        });

    });

    function eliminarImagenCatastro(idImg){

        if (confirm('¿Esta seguro que desea eliminar la imagen? : ' + idImg)) {

            var frmData = new FormData;
            frmData.append("idImg", idImg);

            $.ajax({
                url: 'eliminar_imagen_catastro.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $("#table-imgs").load(window.location + " #table-imgs");
                }
            })
        }
    }

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

</script>