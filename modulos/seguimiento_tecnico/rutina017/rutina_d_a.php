<?php

/* d_herbicida */
$d_herbicida = $obj->{'d_herbicida'};
//$e_01_01 = $e_contacto->e_01_01; $e_01_02 = $e_contacto->e_01_02;
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d_01_01 = $d_herbicida->d_01_01; $d_01_02 = $d_herbicida->d_01_02;
$d_02_01 = $d_herbicida->d_02_01; $d_02_02 = $d_herbicida->d_02_02;
$d_03_01 = $d_herbicida->d_03_01; $d_03_02 = $d_herbicida->d_03_02;
                                  $d_04_02 = $d_herbicida->d_04_02;
$d_05_01 = $d_herbicida->d_05_01 ? "checked" : ""; $d_05_02 = $d_herbicida->d_05_02 ? "checked" : "";
$d_06_01 = $d_herbicida->d_06_01;
$d_07_01 = $d_herbicida->d_07_01;
$d_08_01 = $d_herbicida->d_08_01 ? "checked" : "";
$d_08_02 = $d_herbicida->d_08_02 ? "checked" : "";
$d_08_03 = $d_herbicida->d_08_03 ? "checked" : "";
$d_08_04 = $d_herbicida->d_08_04 ? "checked" : "";
$d_08_05 = $d_herbicida->d_08_05 ? "checked" : "";
$d_08_06 = $d_herbicida->d_08_06 ? "checked" : "";
$d_08_07 = $d_herbicida->d_08_07 ? "checked" : "";
$d_08_08 = $d_herbicida->d_08_08 ? "checked" : "";
$d_08_09 = $d_herbicida->d_08_09 ? "checked" : "";
$a_datos = $obj->{'a_datos'};
$a_01_01 = $a_datos->a_01_01; $a_01_02 = $a_datos->a_01_02; $a_01_03 = $a_datos->a_01_03;
$a_02_01 = $a_datos->a_02_01; $a_02_02 = $a_datos->a_02_02; $a_02_03 = $a_datos->a_02_03;
$a_03_01 = $a_datos->a_03_01; $a_03_02 = $a_datos->a_03_02; $a_03_03 = $a_datos->a_03_03;
$a_04_01 = $a_datos->a_04_01; $a_04_02 = $a_datos->a_04_02; $a_04_03 = $a_datos->a_04_03;
$a_05_01 = $a_datos->a_05_01;
$a_06_01 = $a_datos->a_06_01;
$a_07_01 = $a_datos->a_07_01;
$a_08_01 = $a_datos->a_08_01;
$a_09_01 = $a_datos->a_09_01;
$a_10_01 = $a_datos->a_10_01;
$a_11_01 = $a_datos->a_11_01;
$a_12_01 = $a_datos->a_12_01;
$a_13_01 = $a_datos->a_13_01;
/* --------------------------------------------------------------------- */
$tipo_herbicidaArr = ["LIQUIDO", "GRANULADO"];
$tipo_herbicidaOption = "<option>Seleccionar...</option>";
foreach ($tipo_herbicidaArr as $element){
    $selected = "";
    if ($d_02_01 == $element) $selected = "selected";
    $tipo_herbicidaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$tipo_fumigadoraArr = ["MANUAL", "CON MOTOR"];
$tipo_fumigadoraOption = "<option>Seleccionar...</option>";
foreach ($tipo_fumigadoraArr as $element){
    $selected = "";
    if ($d_03_01 == $element) $selected = "selected";
    $tipo_fumigadoraOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
?>

<h6 class="mb-0">D. Tipo de Herbicida - Clima</h6>
<div class="card">
    <div class="card-body">

        <div class="col">
            <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
        </div>

        <table class="table mb-0">
            <tbody>
            <tr>
                <td>Marca del Herbicida</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="$d_01_01" value="<?php echo $d_01_01 ?>">
                    </div>
                </td>
                <td>Cantidad Utilizada x tanque de fumigado [ml o gr]</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_01_02" value="<?php echo $d_01_02 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Tipo de herbicida</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <select id="d_02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                            <?php echo $tipo_herbicidaOption ?>
                        </select>
                    </div>
                </td>
                <td>Capacidad del tanque [Ltrs]</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_02_02" value="<?php echo $d_02_02 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Tipo de fumigadora</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <select id="d_03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                            <?php echo $tipo_fumigadoraOption ?>
                        </select>
                    </div>
                </td>
                <td>Cantidad de tanques preparado</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_03_02" value="<?php echo $d_03_02 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Cantidad Total de Herbicida Utilizada [ml o gr]</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_04_02" value="<?php echo $d_04_02 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td> Uso de Aditivo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="d_05_01" value="option1" <?php echo $d_05_01 ?>>
                        <label class="form-check-label" for="d_05_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="d_05_02" value="option2" <?php echo $d_05_02 ?>>
                        <label class="form-check-label" for="d_05_02">No</label>
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Marca de Aditivo</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_06_01" value="<?php echo $d_06_01 ?>">
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Cantidad Utilizada [ml]</td>
                <td>
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control" id="d_07_01" value="<?php echo $d_07_01 ?>">
                    </div>
                </td>
                <td></td>
             </tr>
            </tbody>
        </table>
        <div class="row row-cols-4 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">

            <div>

                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td class="text-center" rowspan="2">Clima Ayer</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_01" value="option2" <?php echo $d_08_01 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_02" value="option2" <?php echo $d_08_02 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_03" value="option2" <?php echo $d_08_03 ?>>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Soleado</td>
                        <td>Nublado</td>
                        <td>Lluvioso</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="col">

                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td class="text-center" rowspan="2">Clima de Hoy</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_04" value="option2" <?php echo $d_08_04 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_05" value="option2" <?php echo $d_08_05 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_06" value="option2" <?php echo $d_08_06 ?>>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Soleado</td>
                        <td>Nublado</td>
                        <td>Lluvioso</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col">

                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td class="text-center" rowspan="2">Clima de Mañana</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_07" value="option2" <?php echo $d_08_07 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_08" value="option2" <?php echo $d_08_08 ?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="d_08_09" value="option2" <?php echo $d_08_09 ?>>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Soleado</td>
                        <td>Nublado</td>
                        <td>Lluvioso</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<h6 class="mb-0">E: Datos del Predio</h6>
<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

            <div class="col">

                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><strong>Area m2</strong></td>
                        <td></td>
                        <td>Largo</td>
                        <td>X</td>
                        <td>Ancho</td>
                    </tr>
                    <tr>
                        <td><strong>A1</strong></td>
                        <td>Terreno Interno</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_01_01" value="<?php echo $a_01_01 ?>">
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_01_02" value="<?php echo $a_01_02 ?>">
                            </div>
                        </td>
                        <td>X</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_01_03" value="<?php echo $a_01_03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>A2</strong></td>
                        <td>Loza de equipos</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_02_01" value="<?php echo $a_02_01 ?>">
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_02_02" value="<?php echo $a_02_02 ?>">
                            </div>
                        </td>
                        <td>X</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_02_03" value="<?php echo $a_02_03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>A3</strong></td>
                        <td>Sala de equipos GE</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_03_01" value="<?php echo $a_03_01 ?>">
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_03_02" value="<?php echo $a_03_02 ?>">
                            </div>
                        </td>
                        <td>X</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_03_03" value="<?php echo $a_03_03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>A4</strong></td>
                        <td>Vivienda</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_04_01" value="<?php echo $a_04_01 ?>">
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_04_02" value="<?php echo $a_04_02 ?>">
                            </div>
                        </td>
                        <td>X</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_04_03" value="<?php echo $a_04_03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>A5</strong></td>
                        <td>Terreno Externo</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_05_01" value="<?php echo $a_05_01 ?>">
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>A6</strong></td>
                        <td>Terreno Interno desmalezado m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_06_01" value="<?php echo $a_06_01 ?>">
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td><strong>A5</strong></td>
                        <td>Terreno Externo desmalezado m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_07_01" value="<?php echo $a_07_01 ?>">
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td><strong>A7</strong></td>
                        <td>Total Terreno desmalezado (Interno+externo) m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_08_01" value="<?php echo $a_08_01 ?>">
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td><strong>A6</strong></td>
                        <td>Terreno Interno aplicado con herbicida m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_09_01" value="<?php echo $a_09_01 ?>">
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td><strong>A8</strong></td>
                        <td>Terreno Externo aplicado con herbicida m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_10_01" value="<?php echo $a_10_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>A9</strong></td>
                        <td>Total Terreno aplicado con herbicida m2</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_11_01" value="<?php echo $a_11_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">Cantidad lados propiedad privada</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_12_01" value="<?php echo $a_12_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">Cantidad lados terreno externo</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="a_13_01" value="<?php echo $a_13_01 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <h6 class="mb-0">F: Diagrama del sitio</h6>
                <table class="table table-bordered mb-0">
                    <tbody>

                    </tbody>
                </table>

            </div>

        </div>

    </div>
</div>
