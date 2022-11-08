
<h6>II. EQUIPOS INSTALADOS </h6>
<?php require("catastro_tabla_1.php"); ?>

<h6>DATOS DE ENERGIA</h6>
<?php require("catastro_tabla_2.php"); ?>

<h6>TOPOLOGIA DE RED</h6>
<?php require("catastro_tabla_3.php"); ?>

<div class="row align-items-center row-cols-auto g-2 mb-2">
    <div class="col">
        <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
    </div>
</div>

<h6>AMBIENTE</h6>

<?php if ( !isClient() && !isNationalClient() ) { ?>
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
            if (!isNationalClient() && !isClient())
                $eliminarDoc .= "<a href='javascript:;' class='ms-3' id='btnEliminarDoc' onclick='eliminarImagenCatastro(`$idcatastroimg`)'>
                                    <i class='bx bxs-trash'></i>
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

<div class="row mt-3">
    <div class="col-12">
        <label for="inputAddress" class="form-label"><h6>OBSERVACIONES:</h6></label>
        <textarea class="form-control" id="observaciones" name="observaciones" rows="2"><?php echo $observaciones ?></textarea>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-12">
        <label for="inputAddress" class="form-label"><h6>TRABAJOS PENDIENTES:</h6></label>
        <textarea class="form-control" id="pendientes" name="pendientes" rows="2"><?php echo $pendientes ?></textarea>
    </div>
</div>

<div class="row align-items-center row-cols-auto g-2 mb-2">
    <div class="col">
        <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        var btnEnviar = $("#btn-subirimg");

        $('#btn-subirimg').click(function(){

            var idcatastro  = $('#idcatastro').val()
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
