<?php

$f_verificacion = $obj->{'f_verificacion'};
$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$f02_1 = $f_verificacion->f02_1 ? "checked" : ""; $f02_2 = $f_verificacion->f02_2 ? "checked" : ""; $f02_3 = $f_verificacion->f02_3;
$f03_1 = $f_verificacion->f03_1 ? "checked" : ""; $f03_2 = $f_verificacion->f03_2 ? "checked" : ""; $f03_3 = $f_verificacion->f03_3;

?>

<h6>F. Verificación Visual - Estado del Activo</h6>
<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <table class="table mb-0">
            <tbody>
            <tr>
                <td>F.1 ¿Tiene Alarmas activas?</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f01_1" <?php echo $f01_1 ?> value="option1">
                        <label class="form-check-label" for="f01_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f01_2" <?php echo $f01_2 ?> value="option2">
                        <label class="form-check-label" for="f01_2">No</label>
                    </div>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control form-control-sm" id="f01_3" placeholder="Obs." value="<?php echo $f01_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.2 Verificación de histórico de alarmas</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f02_1" <?php echo $f02_1 ?> value="option1">
                        <label class="form-check-label" for="f02_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f02_2" <?php echo $f02_2 ?> value="option2">
                        <label class="form-check-label" for="f02_2">No</label>
                    </div>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control form-control-sm" id="f02_3" placeholder="Obs." value="<?php echo $f02_3 ?>">
                </td>
            </tr>

            <tr>
                <td>F.3 Verificación de taxonomía del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f03_1" <?php echo $f03_1 ?> value="option1">
                        <label class="form-check-label" for="f03_1">Si tiene</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f03_2" <?php echo $f03_2 ?> value="option2">
                        <label class="form-check-label" for="f03_2">No tiene</label>
                    </div>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control form-control-sm" id="f03_3" placeholder="Obs." value="<?php echo $f03_3 ?>">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

