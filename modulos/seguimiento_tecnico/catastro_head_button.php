<?php
//$event = isset($_GET["event"]) ? $_GET["event"] : 0;
//$gp = isset($_GET["gp"]) ? $_GET["gp"] : 0;
$volver = isset($_GET["volver"]) ? $_GET["volver"] : 0;

//$params_volver = "&event=$event&gp=$gp&tr=0&tc=1&volver=$volver";
$params_volver = "&event=$idevento&gp=$idgrupo&tr=0&tc=1&volver=$volver";
$hrefrutina    = "../../usuarios/modulos/$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$idgrupo."&tr=0&tc=1&volver=$volver";
?>
<input type="hidden" name="link_modulo" id="link_modulo" value="<?php echo $hrefrutina ?>" />
<div class="row row-cols-auto pb-2">
    <div class="col">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-inverse-primary" onclick="location.href='<?=$link_modulo?>?path=prev_estacion.php<?=$params_volver?>'"><i class="bx bx-arrow-back me-0"></i></button>
        </div>
    </div>

    <?php if ( ($estado=='PEN' && !isClient()) || ( isExpert() || isAdmin() && $estado=='REV') && !isClient() ) { ?>
    <div class="col">
        <input type="button" id="botonHead" class="btn btn-primary px-4" value="Guardar" />
    </div>
    <?php } ?>
    
    <form action="<?php echo $hrefpdf ?>" method="post" enctype="multipart/form-data" target="_blank">
        <input type="hidden" id="cform" name="cform" value="<?php echo $cform ?>" />
        <input type="hidden" id="idcatastrox" name="idcatastrox" value="<?php echo $idcatastrox ?>" />
        <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $idgrupo ?>" />
        <input type="hidden" id="iddepartamento" name="iddepartamento" value="<?php echo $iddepartamento ?>" />
        <input type="hidden" id="idevento" name="idevento" value="<?php echo $idevento ?>" />

        <div class="col">
            <button type="submit" class="btn btn-secondary px-4" name="Submit" value="Generar"><i class="bx bx-file mr-1"></i>Generar</button>
        </div>
    </form>

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