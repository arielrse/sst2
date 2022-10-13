<?php

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01;
$d06_01 = $desarrollo_d->d06_01;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01;
$d10_01 = $desarrollo_d->d10_01;
$d11_01 = $desarrollo_d->d11_01;
$d12_01 = $desarrollo_d->d12_01;
$d13_01 = $desarrollo_d->d13_01;
$d14_01 = $desarrollo_d->d14_01;
$d15_01 = $desarrollo_d->d15_01;
$d16_01 = $desarrollo_d->d16_01;
$d17_01 = $desarrollo_d->d17_01; $d17_02 = $desarrollo_d->d17_02;
$d18_01 = $desarrollo_d->d18_01; $d18_02 = $desarrollo_d->d18_02;
$d19_01 = $desarrollo_d->d19_01;
$d20_01 = $desarrollo_d->d20_01;
$d21_01 = $desarrollo_d->d21_01;

$observaciones = $obj->{'observaciones'};
/* --------------------------------------------------------------------- */
$estadoArr = ["Obsoleto", "Falta de capacidad", "Con falla", "Sin observacion", "Bueno"];
$estadoOption = "<option>Seleccionar...</option>";
foreach ($estadoArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $estadoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$servicioArr = ["En servicio", "Fuera de servicio"];
$servicioOption = "<option>Seleccionar...</option>";
foreach ($servicioArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $servicioOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

$inoutdoorArr = ["Indoor", "Outdoor"];
$inoutdoorOption = "<option>Seleccionar...</option>";
foreach ($inoutdoorArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $inoutdoorOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$cabinaArr = ["Si", "No"];
$cabinaOption = "<option>Seleccionar...</option>";
foreach ($cabinaArr as $element){
    $selected = "";
    if ($d08_01 == $element) $selected = "selected";
    $cabinaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$sist_de_bajaArr = ["Monofasico", "Bifasico", "Trifasico"];
$sist_de_bajaOption = "<option>Seleccionar...</option>";
foreach ($sist_de_bajaArr as $element){
    $selected = "";
    if ($d09_01 == $element) $selected = "selected";
    $sist_de_bajaOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$frecuenciaArr = ["50", "60"];
$frecuenciaOption = "<option>Seleccionar...</option>";
foreach ($frecuenciaArr as $element){
    $selected = "";
    if ($d11_01 == $element) $selected = "selected";
    $frecuenciaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tableroArr = ["Integrado", "Externo"];
$tableroOption = "<option>Seleccionar...</option>";
foreach ($tableroArr as $element){
    $selected = "";
    if ($d14_01 == $element) $selected = "selected";
    $tableroOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$bombaArr = ["Si", "No"];
$bombaOption = "<option>Seleccionar...</option>";
foreach ($bombaArr as $element){
    $selected = "";
    if ($d17_01 == $element) $selected = "selected";
    $bombaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$auto_manualArr = ["Automático", "Manual"];
$auto_manualOption = "<option>Seleccionar...</option>";
foreach ($auto_manualArr as $element){
    $selected = "";
    if ($d17_02 == $element) $selected = "selected";
    $auto_manualOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$precalArr = ["Si", "No"];
$precalOption = "<option>Seleccionar...</option>";
foreach ($precalArr as $element){
    $selected = "";
    if ($d18_01 == $element) $selected = "selected";
    $precalOption .= "<option value='$element' $selected>".$element."</option>";
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
                    <td>Altura de operación - msnm</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d01_01" value="<?php echo $d01_01 ?>">
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Funcionalidad (en servicio/fuera de servicio)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $servicioOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                <tr>
                    <td>Estado (obsoleto/falta de capacidad/con falla)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $estadoOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Marca</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>N° Serie</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d06_01" value="<?php echo $d06_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de uso (Indoor/Outdoor)</td>
                        <td COLSPAN="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $inoutdoorOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Cabina de insonorización</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d08_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $cabinaOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema en baja tensión BT (Monofásico/trifásico)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d09_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo  $sist_de_bajaOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Voltaje - V</td>
                        <td colspan="2">
                           <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d10_01" value="<?php echo $d10_01 ?>">
                           </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>Frecuencia - Hz</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d11_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $frecuenciaOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad nominal - KVA</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d12_01" value="<?php echo $d12_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad efectiva - KVA</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d13_01" value="<?php echo $d13_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tablero de transferencia ATS (Integrado/Externo)</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d14_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $tableroOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad del tanque  integrado - Lt</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d15_01" value="<?php echo $d15_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad del tanque externo - Lt</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d16_01" value="<?php echo $d16_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>bomba de trasiego / Automático - Manual</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d17_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $bombaOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d17_02" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $auto_manualOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                <tr>
                    <td>Precalentador / Potencia, capacidad térmica - KW</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <select id="d18_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $precalOption ?>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d18_02" value="<?php echo $d18_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de inicio de consumo de energía</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d19_01" value="<?php echo $d19_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d20_01" value="<?php echo $d20_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha vencimiento de garantía</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d21_01" value="<?php echo $d21_01 ?>">
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
