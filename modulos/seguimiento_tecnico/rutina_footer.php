<?php
$pendientes       = $obj->{'pendientes'};
$recomendaciones  = $obj->{'recomendaciones'};
$observaciones    = $obj->{'observaciones'};

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
                <input type="button" id="botonFooter" class="btn btn-primary px-5" value="Guardar" />
            </div>
            <div class="col">
                <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar" onclick="history.back()" />
            </div>
        </div>

    </div>

</div>