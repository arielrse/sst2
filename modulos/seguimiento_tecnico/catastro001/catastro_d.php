<?php

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01;
$d06_01 = $desarrollo_d->d06_01;
$d07_01 = $desarrollo_d->d07_01; $d07_02 = $desarrollo_d->d07_02;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
$d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
$d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
$d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
$d14_01 = $desarrollo_d->d14_01; $d14_02 = $desarrollo_d->d14_02;
$d15_01 = $desarrollo_d->d15_01; $d15_02 = $desarrollo_d->d15_02;
$d16_01 = $desarrollo_d->d16_01; $d16_02 = $desarrollo_d->d16_02;
$d17_01 = $desarrollo_d->d17_01;
$d18_01 = $desarrollo_d->d18_01; $d18_02 = $desarrollo_d->d18_02;
$d19_01 = $desarrollo_d->d19_01; $d19_02 = $desarrollo_d->d19_02;

$observaciones = $obj->{'observaciones'};
/* --------------------------------------------------------------------- */
$funcionalidadArr = ["En servicio", "Fuera de servicio"];
$funcionalidadOption = "<option>Seleccionar...</option>";
foreach ($funcionalidadArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $funcionalidadOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$estadoArr = ["Obsoleto", "Falta de capacidad", "Con falla", "Sin observacion"];
$estadoOption = "<option>Seleccionar...</option>";
foreach ($estadoArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $estadoOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$derivacionArr = ["14,4", "19,9"];
$derivacionOption = "<option>Seleccionar...</option>";
foreach ($derivacionArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $derivacionOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$propiedadArr = ["ENTEL S.A.", "Empresa distribuidora"];
$propiedadOption = "<option>Seleccionar...</option>";
foreach ($propiedadArr as $element){
    $selected = "";
    if ($d04_01 == $element) $selected = "selected";
    $propiedadOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tipo_posteArr = ["Madera tratada", "Concreto", "PRFV"];
$tipo_posteOption = "<option>Seleccionar...</option>";
foreach ($tipo_posteArr as $element){
    $selected = "";
    if ($d07_01 == $element) $selected = "selected";
    $tipo_posteOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$fusible_mt_en_partidaArr = ["Si", "No"];
$fusible_mt_en_partidaOption = "<option>Seleccionar...</option>";
foreach ($fusible_mt_en_partidaArr as $element){
    $selected = "";
    if ($d09_01 == $element) $selected = "selected";
    $fusible_mt_en_partidaOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$fusible_mt_en_transArr = ["Si", "No"];
$fusible_mt_en_transOption = "<option>Seleccionar...</option>";
foreach ($fusible_mt_en_transArr as $element){
    $selected = "";
    if ($d09_01 == $element) $selected = "selected";
    $fusible_mt_en_transOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$linea_mt_en_partidaArr = ["Si", "No"];
$linea_mt_en_partidaOption = "<option>Seleccionar...</option>";
foreach ($linea_mt_en_partidaArr as $element){
    $selected = "";
    if ($d11_01 == $element) $selected = "selected";
    $linea_mt_en_partidaOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */

$linea_mt_en_transArr = ["Si", "No"];
$linea_mt_en_transOption = "<option>Seleccionar...</option>";
foreach ($linea_mt_en_transArr as $element){
    $selected = "";
    if ($d12_01 == $element) $selected = "selected";
    $linea_mt_en_transOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$sist_transArr = ["Si", "No"];
$sist_transOption = "<option>Seleccionar...</option>";
foreach ($sist_transArr as $element){
    $selected = "";
    if ($d13_01 == $element) $selected = "selected";
    $sist_transOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$sist_de_pasoArr = ["Si", "No"];
$sist_de_pasoOption = "<option>Seleccionar...</option>";
foreach ($sist_de_pasoArr as $element){
    $selected = "";
    if ($d14_01 == $element) $selected = "selected";
    $sist_de_pasoOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */
$sist_de_bajaArr = ["Monofasico", "Bifasico", "Trifasico"];
$sist_de_bajaOption = "<option>Seleccionar...</option>";
foreach ($sist_de_bajaArr as $element){
    $selected = "";
    if ($d15_01 == $element) $selected = "selected";
    $sist_de_bajaOption .= "<option value='$element' $selected>".$element."</option>";

}
/* --------------------------------------------------------------------- */

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

        <table class="table mb-0">
                <tbody>
                    <tr>
                        <td>Funcionalidad (en servicio/fuera de servicio)</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $funcionalidadOption ?>
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
                        <td>Derivación de Media tensión  (MT), Tensión en primario - KV</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $derivacionOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Propiedad (Empresa distribuidora/ENTEL S.A.)</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d04_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $propiedadOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Empresa distribuidora de energía</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Longitud de línea (MT) - Km</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d06_01" value="<?php echo $d06_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Poste / cantidad total</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $tipo_posteOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d07_02" value="<?php echo $d07_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Largo total del poste - m</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Seccionador fusible MT en Partida (Si/No) / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d09_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $fusible_mt_en_partidaOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Seccionador fusible MT en transformador (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d10_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $fusible_mt_en_transOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d10_02" value="<?php echo $d10_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pararrayo de línea MT en partida (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d11_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $linea_mt_en_partidaOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d11_02" value="<?php echo $d11_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pararrayo de línea MT en transformador (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d12_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $linea_mt_en_transOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d12_02" value="<?php echo $d12_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema de puesta a tierra en puesto de transformación / medida - ohm (*)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d13_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $sist_transOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d13_02" value="<?php echo $d13_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema de puesta a tierra de paso / cantidad</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d14_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $sist_de_pasoOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d14_02" value="<?php echo $d14_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema en baja tensión (BT) / Tensión - V</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d15_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $sist_de_bajaOption ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d15_02" value="<?php echo $d15_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad del transformador - KVA / Frecuencia - Hz</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d16_01" value="<?php echo $d16_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d16_02" value="<?php echo $d16_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Marca de transformador</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d17_01" value="<?php echo $d17_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Modelo de transformador / Fecha de verificación (dd/mm/aaaa)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d18_01" value="<?php echo $d18_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d18_02" value="<?php echo $d18_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>N° Serie de transformador  / Fecha de verificación (dd/mm/aaaa)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d19_01" value="<?php echo $d19_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d19_02" value="<?php echo $d19_02 ?>">
                            </div>
                        </td>
                    </tr>
                </tbody>
        </table>

        <h7 class="mb-0 text-uppercase">Otras observaciones:</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>

    </div>
</div>
