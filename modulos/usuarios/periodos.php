<?php

$res  = mysqli_query($conexion, "SELECT sem_inicio, sem_fin, sem_cant FROM departamento WHERE iddepartamento = " . $iddepartamento);
$dato = mysqli_fetch_array($res);
$fecha_inicio = $dato['sem_inicio'];
$fecha_fin    = $dato['sem_fin'];
$cantidad     = $dato['sem_cant'];

?>
<input type="hidden" name="iddepartamento" id="iddepartamento" value="<?php echo $iddepartamento ?>" />
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-ruler me-1 font-20 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Periodo Semestral</h5>
                        </div>
                        <hr>

                        <form class="row g-3" name="amper"">

                            <div class="col-md-4">
                                <label for="sem_inicio" class="form-label">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="sem_inicio" name="sem_inicio" value="<?php echo $fecha_inicio ?>">
                            </div>

                            <div class="col-md-4">
                                <label for="sem_fin" class="form-label">Fecha de Fin</label>
                                <input type="date" class="form-control" id="sem_fin" name="sem_fin" value="<?php echo $fecha_fin ?>">
                            </div>

                            <div class="col-md-4">
                                <label for="sem_cant" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="sem_cant" name="sem_cant" value="<?php echo $cantidad ?>">
                            </div>

                            <?php if ( isAdmin() ) { ?>
                            <div class="col-12">
                                <button id="btn-save" name="btn-save" class="btn btn-primary px-5">Guardar</button>
                                <!--<input onClick="location.href='<?/*=$link_modulo*/?>?path=ver_sitios.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">-->
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=text/javascript>

    $('#btn-save').click(function(){

        var iddepartamento = $("#iddepartamento").val();
        var sem_inicio = $("#sem_inicio").val();
        var sem_fin    = $("#sem_fin").val();
        var sem_cant    = $("#sem_cant").val();

        var frmData = new FormData;
        frmData.append('iddepartamento', iddepartamento);
        frmData.append('sem_inicio', sem_inicio);
        frmData.append('sem_fin', sem_fin);
        frmData.append('sem_cant', sem_cant);

        /*console.log('Inicio: ' + periodo_sem_inicio);
        console.log('Fin: ' + periodo_sem_fin);*/

        $.ajax({
            url: 'update_periodos.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });
        return false;
    });

</script>