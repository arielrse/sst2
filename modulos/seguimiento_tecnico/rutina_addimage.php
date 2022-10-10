<?php
$idrutina = $_GET['rut'];
$propertyId = $_GET['propertyId'];
$nombreForm = $_GET['nombreForm'];

$query = "select * from rutina_imagen where idrutina='$idrutina'";
$resultado = mysqli_query($conexion, $query);

?>

<div class="page-wrapper">
    <div class="page-content">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-primary"><?php echo $propertyId . " - " . $nombreForm ?></h6>
                    <form id="formSubirImg" action="subir_imagen.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idrutina" id="idrutina" value="<? echo $idrutina; ?>" />
                        <div class="form-group">

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Imagenes para reporte fotográfico</label>
                                <input class="form-control form-control-sm" type="file" id="imagen" name="imagen">
                            </div>

                        </div>
                        <div class="form-group mb-2">
                            <label for="titulo">Titulo de la Imagen</label>
                            <input id="titulo" name="titulo" class="form-control form-control-sm" type="text">
                        </div>

                        <div class="row row-cols-auto pb-2">
                            <?php if ( !isClient() || !isNationalClient() ) { ?>
                            <div class="col">
                                <input type="submit" value="Cargar Imagen" class="btn btn-primary" id="cargar" name="cargar" />
                            </div>
                            <?php } ?>
                            <div class="col">
                                <input type="button" class="btn btn-secondary px-5" value="Cancelar" onclick="history.back()" />
                            </div>
                            <div class="col">
                                <div id="loading"></div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

            <div id="imagenesDiv" class="row mt-2">
                <h6 class="mb-0 text-uppercase"></h6>
                <hr/>

                    <?php
                    foreach($resultado as $row){
                        $idImg = $row['id'];
                    ?>
                    <div class="col-md-4">
                        <div class="img-thumbnail">
                            <a href="../../fotos/<?php echo $row['imagen']; ?>" target="_blank">
                                <img src="../../fotos/<?php echo $row['imagen']; ?>" alt="Lights" style="width:100%">
                            </a>
                            <p class="card-text"><?php echo $row['nombre']; ?>
                            <?php if ( !isClient() || !isNationalClient() ) { ?>
                                <a href='' id="link-eliminar" onclick="eliminarImagen(<?php echo $idImg ?>); return false;"><i class="lni lni-close"></i></a>
                            <?php } ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
            </div>


            <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>-->

    </div>
</div>

<script type=text/javascript>

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

        var frm = $("#formSubirImg");
        var btnEnviar = $("#cargar");
        var textoSubir    = document.querySelector('#cargar').value;
        var textoSubiendo = "Cargando imagen...";

        frm.bind("submit", function () {

            var idrutina = $('#idrutina').val()
            var titulo   = $('#titulo').val()

            var frmData = new FormData;
            frmData.append("imagen", $("input[name=imagen]")[0].files[0]);
            frmData.append("idrutina", idrutina);
            frmData.append("titulo", titulo);

            $.ajax({
                url: frm.attr("action"),
                type: frm.attr("method"),
                data: frmData,
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function (data){
                    document.querySelector('#cargar').value = textoSubiendo;
                    btnEnviar.attr("disabled", true);
                    $("#loading").html('<div class="spinner-border spinner-border-sm" role="status"></div>');
                },
                success: function (data){

                    $("#imagenesDiv").load(window.location + " #imagenesDiv");

                    document.querySelector('#imagen').value = "";
                    document.querySelector('#titulo').value = "";

                    document.querySelector('#cargar').value = textoSubir;
                    btnEnviar.attr("disabled", false);

                    $("#loading").html('');
                }
            })

            return false;

        });

    });


</script>