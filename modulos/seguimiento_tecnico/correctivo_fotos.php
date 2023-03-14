<?php
$query = "SELECT id, posicion, nombre as imagen, titulo as nombre, idrutinacorrectivo 
            FROM rutina_correctivo_img
            WHERE idrutinacorrectivo = " . $id ." order by posicion desc";
$resultado = mysqli_query($conexion, $query);
?>
<?php if ( !isClient() && !isNationalClient() ) { ?>
    <div class="row">
        <div class="col">
            <div class="input-group">
                <div class="col-md-4">
                    <input class="form-control form-control-sm" type="file" id="imagen" name="imagen">
                </div>
                <div class="col-md-7">
                    <input id="titulodoc" name="titulodoc" class="form-control form-control-sm" type="text" placeholder="Titulo">
                </div>
                <?php if ( $permissions ) { ?>
                    <div class="col-md-1">
                        <button class="btn btn-sm btn-outline-primary" type="button" id="btn-subirimg" name="btn-subirimg"><i class='bx bx-plus'></i></button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>


<div id="imagenesDiv" class="row mt-2">
    <h6 class="mb-0 text-uppercase"></h6>
    <hr/>

    <div class="card-group shadow"> <!---->
        <?php
        $i = 1;
        $cerrar_abrir = '</div><div class="card-group shadow">';
        foreach($resultado as $row){
            $idImg = $row['id'];
            $posicion = $row['posicion'];
            $ruta_img = "../../fotos/correctivo/".$row['imagen'];
            $extension = pathinfo($ruta_img, PATHINFO_EXTENSION);
            ?>
            <div class="card border-end shadow-none">
                <a href="<?php echo $ruta_img ?>" target="_blank"><img src="<?php echo $ruta_img ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <!--<h5 class="card-title">Card title</h5>-->
                    <p class="card-text"><?php echo $row['nombre']; ?></p>
                    <hr>
                    <div class="d-flex align-items-center gap-2">
                        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
                            <button type="button" class="btn btn-sm btn-default" data-bs-toggle="modal" data-bs-target="#titlePhotoModal<?php echo $idImg?>">
                                <i class="fadeIn animated bx bx-edit-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-default" onclick="eliminarImagenCorrectivo(<?php echo $idImg ?>); return false;"><i class="fadeIn animated bx bx-trash"></i></button>
                        <?php } ?>

                        <div class="modal fade" id="titlePhotoModal<?php echo $idImg?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar Título</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea class="form-control" id="titleTextarea<?php echo $idImg?>" rows="4"><?php echo $row['nombre']; ?></textarea>

                                        <div class="row g-2 align-items-center mt-1">
                                            <div class="col-auto">
                                                <label class="col-form-label">Posición:</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" min="1" data-bind="value:replyNumber" class="form-control form-control-sm" id="posicion<?php echo $idImg?>" value="<?php echo $posicion ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="btnClose<?php echo $idImg?>" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="modifyTile('<?php echo $idImg?>')">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer bg-white"> <small class="text-muted">Posición: <?php echo $posicion ?></small></div>
            </div>
            <?php if ( $i % 3 == 0 ) echo $cerrar_abrir; ?>

            <?php $i++; ?>
        <?php } ?>
    </div><!---->
</div>


<script type="text/javascript">

    $(document).ready(function () {

        var btnEnviar = $("#btn-subirimg");

        $('#btn-subirimg').click(function(){

            var idrutinacorrectivo  = $('#idc').val()
            var iddepartamento      = $('#iddepartamento').val()
            var titulodoc           = $('#titulodoc').val()

            var size = document.getElementsByName("imagen")[0].files[0].size;
            var docsize = ((size / 1024)/1000);

            if ( docsize < 10) {
                var frmData = new FormData;
                frmData.append("imagen", $("input[name=imagen]")[0].files[0]);
                frmData.append("idrutinacorrectivo", idrutinacorrectivo);
                frmData.append("iddepartamento", iddepartamento);
                frmData.append("titulodoc", titulodoc);


                if (fileValidation()) {
                    $.ajax({
                        url: 'subir_imagen_correctivo.php',
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
                            $("#imagenesDiv").load(window.location + " #imagenesDiv");
                            document.querySelector('#imagen').value = "";
                            document.querySelector('#titulodoc').value = "";
                            btnEnviar.html('<i class="bx bx-plus"></i>');
                            btnEnviar.attr("disabled", false);
                        }
                    })
                } else {
                    document.querySelector('#imagen').value = "";
                    document.querySelector('#titulodoc').value = "";
                }

            } else{
                alert( 'No es posible, el archivo supera los 10MB' )
            }
            return false;

        });

    });

    function modifyTile(idImg) {

        var btn_close = $("#btnClose"+idImg);
        var title    = $('#titleTextarea'+idImg).val()
        var posicion = $('#posicion'+idImg).val()

        var frmData = new FormData;
        frmData.append("idImg", idImg);
        frmData.append("title", title);
        frmData.append("posicion", posicion);

        $.ajax({
            url: 'modificar_foto_correctivo.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                alert(data);
                btn_close.click();
                $("#imagenesDiv").load(window.location + " #imagenesDiv");
            }
        })
    }

    function eliminarImagenCorrectivo(idImg){

        if (confirm('¿Esta seguro que desea eliminar la imagen...? : ' + idImg)) {

            var frmData = new FormData;
            frmData.append("idImg", idImg);

            $.ajax({
                url: 'eliminar_imagen_correctivo.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $("#imagenesDiv").load(window.location + " #imagenesDiv");
                }
            })
        }
    }

</script>