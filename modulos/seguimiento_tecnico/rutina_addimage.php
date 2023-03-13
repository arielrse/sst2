<?php

$idrutina = $_GET['rut'];
$propertyId = $_GET['propertyId'];
$nombreForm = $_GET['nombreForm'];
$estado = $_GET['estado'];
$codform = $_GET['codform'];
$coddep = $_GET['coddep'];

$query = "select * from rutina_imagen where idrutina='$idrutina' order by posicion desc ";
$resultado = mysqli_query($conexion, $query);

$sizeimgage = 0;
foreach($resultado as $row) {
    $idImg = $row['id'];
    $ruta_img = "../../fotos/" . $row['imagen'];
    $sizeimgage += filesize($ruta_img);
}
$sizeimgage /= (1024*1024);
$sizeimgage = round($sizeimgage, 2);
?>


<div class="page-wrapper">
    <div class="page-content">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-primary"><?php echo $propertyId . " - " . $nombreForm ?></h6>
                        <input type="hidden" name="idrutina" id="idrutina" value="<? echo $idrutina; ?>" />
                        <input type="hidden" name="coddep" id="coddep" value="<? echo $coddep; ?>" />
                        <div class="form-group">

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Imagenes para reporte fotográfico <?php echo '('.$sizeimgage.')' ?></label>
                                <input class="form-control form-control-sm" type="file" id="imagen" name="imagen">
                            </div>

                        </div>
                        <div class="form-group mb-2">
                            <label for="titulo">Titulo de la Imagen</label>

                            <?php
                            $res = mysqli_query($conexion, "select titulo, codform from rutina_titulos where codform = '$codform'");

                            $selectTitulos = '<select id="select-titulo" class="form-control form-control-sm">
                                                <option value="">Seleccionar</option>';

                            while( $data = mysqli_fetch_array($res) ){
                                $selectTitulos .= '<option value="'.$data['titulo'].'">'.$data['titulo'].'</option>';
                            }
                            $selectTitulos .= '</select>';
                            echo $selectTitulos;
                            ?>
                        </div>

                        <div class="form-group mb-2">
                            <input id="titulo" name="titulo" class="form-control form-control-sm" type="text">
                        </div>

                        <div class="row row-cols-auto pb-2">
                            <?php
                            $botonCargar = ($estado == 'PEN') ? '<button type="button" class="btn btn-primary px-4" id="cargar" name="cargar">Cargar Imagen</button>' : '';
                            $botonCargar = (!isClient() && !isNationalClient()) ? $botonCargar : "";
                            ?>
                            <div class="col">
                                <?php echo $botonCargar; ?>
                            </div>

                            <div class="col">
                                <input type="button" class="btn btn-secondary px-4" value="Cancelar" onclick="history.back()" />
                            </div>

                            <?php if (isAdmin() || isExpert()){ ?>
                            <div class="col">
                                <button type="button" class="btn btn-danger px-4" id="btn-resize" name="btn-resize">Reducir IMG</button>
                            </div>
                            <?php } ?>

                            <div class="col">
                                <div id="loading"></div>
                            </div>

                        </div>

                </div>

            </div>

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
                        $ruta_img = "../../fotos/".$row['imagen'];
                        $extension = pathinfo($ruta_img, PATHINFO_EXTENSION);
                    ?>
                        <div class="card border-end shadow-none">
                            <!--<img src="assets/images/gallery/14.png" class="card-img-top" alt="...">-->
                            <a href="<?php echo $ruta_img ?>" target="_blank"><img src="<?php echo $ruta_img ?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <!--<h5 class="card-title">Card title</h5>-->
                                <p class="card-text"><?php echo $row['nombre']; ?></p>
                                <hr>
                                <div class="d-flex align-items-center gap-2">
                                    <button type="button" class="btn btn-sm btn-default" data-bs-toggle="modal" data-bs-target="#titlePhotoModal<?php echo $idImg?>">
                                        <i class="fadeIn animated bx bx-edit-alt"></i>
                                    </button>

                                    <button type="button" class="btn btn-sm btn-default" onclick="eliminarImagen(<?php echo $idImg ?>); return false;"><i class="fadeIn animated bx bx-trash"></i></button>

                                    <!--<a href="javascript:;" class="btn btn-inverse-dark"><i class='bx bx-star'></i>Button</a>
                                    <a href="javascript:;" class="btn btn-dark"><i class='bx bx-microphone' ></i>Button</a>-->

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

                        <!-- CODE -->

                    <?php $i++; ?>
                    <?php } ?>

                </div><!---->


            </div>

    </div>
</div>

<script type=text/javascript>

    function modifyTile(idImg) {

        var btn_close = $("#btnClose"+idImg);
        var title    = $('#titleTextarea'+idImg).val()
        var posicion = $('#posicion'+idImg).val()
        /*alert("Titulo..." + title);
        alert("Posicion..." + posicion);*/

        var frmData = new FormData;
        frmData.append("idImg", idImg);
        frmData.append("title", title);
        frmData.append("posicion", posicion);

        $.ajax({
            url: 'modificar_foto.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                alert(data);
                btn_close.click();
                //document.getElementById("btnClose").click();
                $("#imagenesDiv").load(window.location + " #imagenesDiv");
            }
        })
    }

    $('#btn-resize').click(function(){
        if (confirm('Esta seguro de continuar?, esta operacion reduce la calidad de las imagenes.')) {

            var btn_resize = $("#btn-resize");

            var idrutina = $('#idrutina').val()
            var frmData = new FormData;
            frmData.append("idrutina", idrutina);

            $.ajax({
                url: 'rutina_imageresize.php',
                type: 'POST',
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function (data) {
                    btn_resize.attr("disabled", true);
                    $("#loading").html('<div class="spinner-border spinner-border-sm" role="status"></div>');
                },
                success: function (data) {
                    alert(data)
                    $("#imagenesDiv").load(window.location + " #imagenesDiv");
                    //document.querySelector('#cargar').value = textoSubir;
                    btn_resize.attr("disabled", false);
                    $("#loading").html('');
                }
            })
        }
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

    function eliminarImagen(idImg){

        if (confirm('¿Esta seguro que desea eliminar la imagen? : ' + idImg)) {

            var frmData = new FormData;
            frmData.append("idImg", idImg);

            $.ajax({
                url: 'eliminar_imagen.php',
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

    $(document).ready(function () {
        $('#select-titulo').change(function(){

            var titulo   = $('#select-titulo').val();

            document.querySelector('#titulo').value = titulo;

            return false;
        });
    });

    $(document).ready(function () {

        /*var frm = $("#formSubirImg");*/
        var btnEnviar = $("#cargar");
        var textoSubir    = document.querySelector('#cargar').value;
        var textoSubiendo = "Cargando imagen...";

        $('#cargar').click(function(){


            var idrutina = $('#idrutina').val()
            var titulo   = $('#titulo').val()
            var coddep   = $('#coddep').val()

            var frmData = new FormData;
            frmData.append("imagen", $("input[name=imagen]")[0].files[0]);
            frmData.append("idrutina", idrutina);
            frmData.append("titulo", titulo);
            frmData.append("coddep", coddep);

            if (fileValidation()) {
                $.ajax({
                    url: 'subir_imagen.php',
                    type: 'POST',
                    data: frmData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function (data) {
                        document.querySelector('#cargar').value = textoSubiendo;
                        btnEnviar.attr("disabled", true);
                        $("#loading").html('<div class="spinner-border spinner-border-sm" role="status"></div>');
                    },
                    success: function (data) {
                        console.log('log: ' + data);

                        $("#imagenesDiv").load(window.location + " #imagenesDiv");

                        document.querySelector('#imagen').value = "";
                        document.querySelector('#titulo').value = "";

                        document.querySelector('#cargar').value = textoSubir;
                        btnEnviar.attr("disabled", false);

                        $("#loading").html('');
                    }
                })
            }
            return false;

        });

    });


</script>