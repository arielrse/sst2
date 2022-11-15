<?php
require("CharsUtils.php");

$desarrollo_d = $obj->{'desarrollo_d'};
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d-> d04_02;
$d05_01 = $desarrollo_d->d05_01; $d05_02 = $desarrollo_d-> d05_02;
$d06_01 = $desarrollo_d->d06_01; $d06_02 = $desarrollo_d-> d06_02;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01; $d08_02 = $desarrollo_d-> d08_02; $d08_03 = $desarrollo_d-> d08_03;
$d09_01 = $desarrollo_d->d09_01;
$d10_01 = $desarrollo_d->d10_01;
$d11_01 = $desarrollo_d->d11_01;
$d12_01 = $desarrollo_d->d12_01;
$d13_01 = $desarrollo_d->d13_01;
$d14_01 = $desarrollo_d->d14_01;

$observaciones = convertSpecialChars($obj->observaciones);

/* --------------------------------------------------------------------- */
$servicioArr = ["En servicio", "Fuera de servicio"];
$servicioOption = "<option>Seleccionar...</option>";
foreach ($servicioArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $servicioOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tipo_bateriaArr = ["AGM", "VRLA","LITIO"];
$tipo_bateriaOption = "<option>Seleccionar...</option>";
foreach ($tipo_bateriaArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $tipo_bateriaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$inoutdoorArr = ["Gabinete Outdoor", "Rack Indoor", "Estructura Indoor"];
$inoutdoorOption = "<option>Seleccionar...</option>";
foreach ($inoutdoorArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $inoutdoorOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

?>

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
                    <td>Funcionalidad (en servicio/fuera de servicio)</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $servicioOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Estado (degradado/dañado)</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d02_01" value="<?php echo $d02_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tipo de Batería (AGM/VRLA/LITIO)</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo  $tipo_bateriaOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cantidad de bancos de baterías / total de baterías</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d04_02" value="<?php echo $d04_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Marca / Modelo</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d05_02" value="<?php echo $d05_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Autonomía total del banco de baterías - Ah / Horas - Minutos</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d06_01" value="<?php echo $d06_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d06_02" value="<?php echo $d06_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Contenedor Gabinete (Outdoor)/Rack/Estructura (Indoor)</td>
                    <td colspan="3">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $inoutdoorOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Dimensiones de bateria (Profundidad mm X Alto mm X Ancho mm)</td>

                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_02" value="<?php echo $d08_02 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_03" value="<?php echo $d08_03 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de banco - VDC</td>

                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_01" value="<?php echo $d09_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de batería - VDC</td>
                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d10_01" value="<?php echo $d10_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de fabricación</td>
                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d11_01" value="<?php echo $d11_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de inicio de operación</td>
                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d12_01" value="<?php echo $d12_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_01" value="<?php echo $d13_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de vencimiento de garantía</td>
                    <td colspan = "3">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d14_01" value="<?php echo $d14_01 ?>">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h7 class="mb-0 text-uppercase">Otras observaciones:</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>

    </div>
</div>
