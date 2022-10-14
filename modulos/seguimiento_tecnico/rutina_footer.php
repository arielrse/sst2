<?php
$pendientes       = isset($obj->{'pendientes'}) ? $obj->{'pendientes'} : '';
$recomendaciones  = isset($obj->{'recomendaciones'}) ? $obj->{'recomendaciones'} : '';
$observaciones    = isset($obj->{'observaciones'}) ? $obj->{'observaciones'} : '';

?>

<div class="card">
    <div class="card-body">

        <h7 class="mb-0 text-uppercase">H. Pendientes</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="pendientes"><?php echo $pendientes ?></textarea>
        </div>

        <h7 class="mb-0 text-uppercase">I. Recomendaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="recomendaciones"><?php echo $recomendaciones ?></textarea>
        </div>

        <h7 class="mb-0 text-uppercase">J. Observaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>


        <div class="row row-cols-auto pt-3">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>

        </div>

    </div>

</div>