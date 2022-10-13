<?php

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01; $d05_02 = $desarrollo_d->d05_02;
$d06_01 = $desarrollo_d->d06_01; $d06_02 = $desarrollo_d->d06_02;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01;
$d11_01 = $desarrollo_d->d11_01;
$d12_01 = $desarrollo_d->d12_01;
$d13_01 = $desarrollo_d->d13_01;



$observaciones = $obj->{'observaciones'};
/* --------------------------------------------------------------------- */
$servicioArr = ["En servicio", "Fuera de servicio"];
$servicioOption = "<option>Seleccionar...</option>";
foreach ($servicioArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $servicioOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

$estadoArr = ["Obsoleto", "Falta de capacidad", "Con falla"];
$estadoOption = "<option>Seleccionar...</option>";
foreach ($estadoArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $estadoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tipo_equipoArr = ["Split", "Mochila"];
$tipo_equipoOption = "<option>Seleccionar...</option>";
foreach ($tipo_equipoArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $tipo_equipoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$baja_tensionArr = ["Monofásico", "Trifásico"];
$baja_tensionOption = "<option>Seleccionar...</option>";
foreach ($baja_tensionArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $baja_tensionOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$flujo_aireArr = ["Down Flow", "UP Flow", "Frontal"];
$flujo_aireOption = "<option>Seleccionar...</option>";
foreach ($flujo_aireArr as $element){
    $selected = "";
    if ($d10_01 == $element) $selected = "selected";
    $flujo_aireOption .= "<option value='$element' $selected>".$element."</option>";
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
                   <td colspan="2">
                       <div class="input-group input-group-sm mb-2">
                           <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                               <?php echo $servicioOption ?>
                           </select>
                       </div>
                   </td>
                </tr>
                <tr>
                    <td>Estado (obsoleto/falta de capacidad/con falla)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $estadoOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tipo de equipo (Split/Mochila)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo  $tipo_equipoOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Marca </td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                            </div>
                        </td>
                    </tr>
                   <tr>
                        <td>Modelo Unidad Interna / Externa</td>
                        <td>
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
                    <td>Numero de Serie Unidad Interna / Externa</td>
                    <td>
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
                    <td>Sistema en baja tensión BT (Monofásico/Trifásico)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $baja_tensionOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de entrada - VCA</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Capacidad de enfriamiento - KBTU- Kw  (KW=KBTU/3,41)</td>

                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_01" value="<?php echo $d09_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tipo de Flujo de aire (Down Flow/ UP Flow / Frontal)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d10_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $flujo_aireOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de inicio de operación</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d11_01" value="<?php echo $d11_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d12_01" value="<?php echo $d12_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha vencimiento de garantía</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_01" value="<?php echo $d13_01 ?>">
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
