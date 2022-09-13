<?php
$idrutina = $_GET['rut'];
$propertyId = $_GET['propertyId'];
$nombreForm = $_GET['nombreForm'];

//$query = "select * from imagenes";
$query = "select * from rutina_imagen where idrutina='$idrutina'";
$resultado = mysqli_query($conexion, $query);

function url_completa($forwarded_host = false) {
    $ssl   = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
    $proto = strtolower($_SERVER['SERVER_PROTOCOL']);
    $proto = substr($proto, 0, strpos($proto, '/')) . ($ssl ? 's' : '' );
    if ($forwarded_host && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    } else {
        if (isset($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
        } else {
            $port = $_SERVER['SERVER_PORT'];
            $port = ((!$ssl && $port=='80') || ($ssl && $port=='443' )) ? '' : ':' . $port;
            $host = $_SERVER['SERVER_NAME'] . $port;
        }
    }
    $request = $_SERVER['REQUEST_URI'];
    return $proto . '://' . $host . $request;
}

?>

<div class="page-wrapper">
    <div class="page-content">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-primary"><?php echo $propertyId . " - " . $nombreForm ?></h6>
                    <form action="../../modulos/seguimiento_tecnico/subir.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="urlAddImage" id="urlAddImage" value="<? echo htmlspecialchars(url_completa()); ?>" />
                        <input type="hidden" name="idrutina" id="idrutina" value="<? echo $idrutina; ?>" />
                        <div class="form-group">

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Imagenes para reporte fotográfico</label>
                                <input class="form-control form-control-sm" type="file" id="imagen" name="imagen">
                            </div>

                        </div>
                        <div class="form-group mb-2">
                            <label for="my-input">Titulo de la Imagen</label>
                            <input id="my-input" class="form-control form-control-sm" type="text" name="titulo">
                        </div>
                        <?php if(isset($_SESSION['mensaje'])){ ?>
                            <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                                <strong><?php echo $_SESSION['mensaje']; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php session_unset(); } ?>
                        <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
                        <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar" onclick="history.back()" />
                    </form>
                </div>

            </div>

            <div class="row mt-2">
                <h6 class="mb-0 text-uppercase"></h6>
                <hr/>

                    <?php
                    foreach($resultado as $row){
                    ?>
                    <div class="col-md-4">
                        <div class="img-thumbnail">
                            <a href="../../fotos/dog-5357794__340.webp">
                                <img src="../../fotos/<?php echo $row['imagen']; ?>" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <!--<p><?php /*echo $row['nombre']; */?></p>-->
                                </div>
                            </a>
                            <!--<div class=""><h6 class="card-title"><?php /*echo $row['nombre']; */?></h6></div>-->
                            <p class="card-text"><?php echo $row['nombre']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
            </div>


            <!--<div class="row mt-2">
                <h6 class="mb-0 text-uppercase"></h6>
                <hr/>
                <div class="card-group shadow">
                    <?php
/*                            $i = 0;
                    foreach($resultado as $row){
                        $i++;
                    */?>
                        <div class="card border-end shadow-none">
                            <img src="../../fotos/<?php /*echo $row['imagen']; */?>" class="card-img-top" alt="...">
                            <div class="card-body"><h6 class="card-title"><?php /*echo $row['nombre']; */?></h6></div>
                        </div>
                    <?php
/*                                if ($i == 2){
                    */?>
                    </div><div class="card-group shadow">
                    <?php
/*                                    $i = 0;
                        }
                    }*/?>
                </div>
            </div>-->



            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </div>
</div>