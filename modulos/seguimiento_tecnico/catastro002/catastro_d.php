<?php
require("CharsUtils.php");

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01; $d02_02 = $desarrollo_d->d02_02;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01;
$d06_01 = $desarrollo_d->d06_01;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01;
$d11_01 = $desarrollo_d->d11_01;
$d12_01 = $desarrollo_d->d12_01;
$d13_01 = $desarrollo_d->d13_01;
$d14_01 = $desarrollo_d->d14_01;
$d15_01 = $desarrollo_d->d15_01;
$d16_01 = $desarrollo_d->d16_01;

$observaciones = convertSpecialChars($obj->observaciones);

/* --------------------------------------------------------------------- */
$sist_de_bajaArr = ["Monofasico", "Bifasico", "Trifasico"];
$sist_de_bajaOption = "<option>Seleccionar...</option>";
foreach ($sist_de_bajaArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $sist_de_bajaOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$reja_segArr = ["Si", "No"];
$reja_segOption = "<option>Seleccionar...</option>";
foreach ($reja_segArr as $element){
    $selected = "";
    if ($d06_01 == $element) $selected = "selected";
    $reja_segOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$protectorArr = ["Si", "No"];
$protectorOption = "<option>Seleccionar...</option>";
foreach ($protectorArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $protectorOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$fusible_protectArr = ["Si", "No"];
$fusible_protectOption = "<option>Seleccionar...</option>";
foreach ($fusible_protectArr as $element){
    $selected = "";
    if ($d08_01 == $element) $selected = "selected";
    $fusible_protectOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */

$termomagneticoArr = ["Si", "No"];
$termomagneticoOption = "<option>Seleccionar...</option>";
foreach ($termomagneticoArr as $element){
    $selected = "";
    if ($d09_01 == $element) $selected = "selected";
    $termomagneticoOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$protec_principalArr = ["Termomagnetico", "Breiker"];
$protec_principalOption = "<option>Seleccionar...</option>";
foreach ($protec_principalArr as $element){
    $selected = "";
    if ($d10_01 == $element) $selected = "selected";
    $protec_principalOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$barra_distArr = ["Si", "No"];
$barra_distOption = "<option>Seleccionar...</option>";
foreach ($barra_distArr as $element){
    $selected = "";
    if ($d11_01 == $element) $selected = "selected";
    $barra_distOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$barra_tierraArr = ["Si", "No"];
$barra_tierraOption = "<option>Seleccionar...</option>";
foreach ($barra_tierraArr as $element){
    $selected = "";
    if ($d12_01 == $element) $selected = "selected";
    $barra_tierraOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$camara_tierraArr = ["Si", "No"];
$camara_tierraOption = "<option>Seleccionar...</option>";
foreach ($camara_tierraArr as $element){
    $selected = "";
    if ($d13_01 == $element) $selected = "selected";
    $camara_tierraOption .= "<option value='$element' $selected>".$element."</option>";
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
                    <td>Empresa distribuidora de energía</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d01_01" value="<?php echo $d01_01 ?>">
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Sistema en baja tensión (BT) / Tensión - V</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $sist_de_bajaOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d02_02" value="<?php echo $d02_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Longitud de acometida - m</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d03_01" value="<?php echo $d03_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>N° de medidor</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>N° de CLIENTE</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Reja de seguridad con candado</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d06_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $reja_segOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Protector de transciendes de primer nivel</td>
                        <td COLSPAN="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $protectorOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fusible de protección</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d08_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $fusible_protectOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Termomagnético principal de protección / Capacidad - A</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d09_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $termomagneticoOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo del elemento de protección principal</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d10_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $protec_principalOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Barra de distribución</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d11_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $barra_distOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Barra de tierra</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d12_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $barra_tierraOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Cámara de tierra de pilastra</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d13_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $camara_tierraOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de inicio de consumo de energía</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="date" class="form-control" id="d14_01" value="<?php echo $d14_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Proyecto</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d15_01" value="<?php echo $d15_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha vencimiento de garantía</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="date" class="form-control" id="d16_01" value="<?php echo $d16_01 ?>">
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

<script type="text/javascript"> /* **** */
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