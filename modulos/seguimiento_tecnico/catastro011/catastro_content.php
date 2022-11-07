
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
                    <input id="titulodoc" name="titulodoc" class="form-control form-control-sm" type="text" placeholder="Titulo">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-sm btn-outline-primary" type="button" id="btn-subirimg" name="btn-subirimg"><i class='bx bx-plus'></i></button>
                </div>
            </div>

        </div>
    </div>
<?php } ?>

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