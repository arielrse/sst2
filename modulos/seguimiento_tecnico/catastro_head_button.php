<?php

?>
<div class="row row-cols-auto pb-2">
    <div class="col">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
        </div>
    </div>

    <?php if ( ($estado=='PEN' && !isClient()) || ( isExpert() && $estado=='REV') && !isClient() ) { ?>
    <div class="col">
        <input type="button" id="botonHead" class="btn btn-primary px-4" value="Guardar" />
    </div>
    <?php } ?>

    <?php if ( ($estado=='PEN' && !isClient()) || (isAdmin() && $estado!='REV' ) ) { ?>
    <div class="col">
        <button type="button" id="toReview" class="btn btn-warning px-3"><i class="bx bx-right-arrow-alt mr-1"></i>A revisión</button>
    </div>
    <?php } ?>

    <?php if ( (isAdmin() || isExpert()) && $estado=='REV') { ?>
    <div class="col">
        <button type="button" id="toApprove" class="btn btn-success px-3"><i class="bx bx-check mr-1"></i>Aprobar</button>
    </div>
    <?php } ?>

    <?php if ((isAdmin() || isExpert()) && $estado!='PEN') { ?>
    <div class="col">
        <button type="button" id="toOpen" class="btn btn-danger px-3"><i class="bx bx-lock-open-alt mr-1"></i>Reabrir</button>
    </div>
    <?php } ?>
</div>

<script type=text/javascript>
    $(document).ready(function() {
        $('#toReview').click(function(){
            if (confirm('¿Desea enviar el catastro a revisión?')) {
                var idcatastro = $('#catastroId').val();
                var link_modulo = $('#link_modulo').val();
                var estado = 'REV';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCatastro.php", {
                        idcatastro: idcatastro,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });

    $(document).ready(function() {
        $('#toApprove').click(function(){
            if (confirm('¿Desea aprobar el formulario de catastro?')) {
                var idcatastro = $('#catastroId').val();
                var link_modulo = $('#link_modulo').val();
                var estado = 'APR';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCatastro.php", {
                        idcatastro: idcatastro,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });

    $(document).ready(function() {
        $('#toOpen').click(function(){
            if (confirm('¿Desea Reabrir el formulario de catastro?')) {
                var idcatastro = $('#catastroId').val();
                var link_modulo = $('#link_modulo').val();
                var estado = 'PEN';

                jQuery.post("../../modulos/seguimiento_tecnico/update_estadoCatastro.php", {
                        idcatastro: idcatastro,
                        estado: estado
                    }, function(data, textStatus){
                        window.location.href = link_modulo;
                    }
                );
            }
        });
    });
</script>