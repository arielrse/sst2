<?php
$g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
$g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "checked" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
$g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "checked" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02;
$g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "checked" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02;
$g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "checked" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
$g2_05_01 = $g_desarrollo_g2->g2_05_01 ? "checked" : ""; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
$g2_06_01 = $g_desarrollo_g2->g2_06_01 ? "checked" : ""; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
$g2_07_01 = $g_desarrollo_g2->g2_07_01 ? "checked" : ""; $g2_07_02 = $g_desarrollo_g2->g2_07_02;
$g2_08_01 = $g_desarrollo_g2->g2_08_01 ? "checked" : ""; $g2_08_02 = $g_desarrollo_g2->g2_08_02;
$g2_09_01 = $g_desarrollo_g2->g2_09_01 ? "checked" : ""; $g2_09_02 = $g_desarrollo_g2->g2_09_02;
$g2_10_01 = $g_desarrollo_g2->g2_10_01 ? "checked" : ""; $g2_10_02 = $g_desarrollo_g2->g2_10_02 ? "checked" : ""; $g2_10_03 = $g_desarrollo_g2->g2_10_03;
$g2_11_01 = $g_desarrollo_g2->g2_11_01 ? "checked" : ""; $g2_11_02 = $g_desarrollo_g2->g2_11_02 ? "checked" : ""; $g2_11_03 = $g_desarrollo_g2->g2_11_03;
$g2_12_01 = $g_desarrollo_g2->g2_12_01 ? "checked" : ""; $g2_12_02 = $g_desarrollo_g2->g2_12_02 ? "checked" : ""; $g2_12_03 = $g_desarrollo_g2->g2_12_03;
$g2_13_01 = $g_desarrollo_g2->g2_13_01 ? "checked" : ""; $g2_13_02 = $g_desarrollo_g2->g2_13_02 ? "checked" : ""; $g2_13_03 = $g_desarrollo_g2->g2_13_03;
?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <table class="table">
            <tbody>
            <tr>
                <th colspan="5">G.2	Actividades de mantenimiento</th>
            </tr>

            <tr>
                <td>G.2.1	Limpieza de la superficie paneles solares</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_01_01" value="option1" <?php echo $g2_01_01 ?>>
                        <label class="form-check-label" for="g2_01_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_01_02" placeholder="Obs." value="<?php echo $g2_01_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.2	Limpieza de Módulos Rectificadores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_02_01" value="option1" <?php echo $g2_02_01 ?>>
                        <label class="form-check-label" for="g2_02_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_02_02" placeholder="Obs." value="<?php echo $g2_02_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.3	Limpieza sistema de climatización (Aire Acondicionado/Extractor de Aire)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_01" value="option1" <?php echo $g2_03_01 ?>>
                        <label class="form-check-label" for="g2_03_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_03_02" placeholder="Obs." value="<?php echo $g2_03_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.4	Limpieza del área correspondiente a la línea de vista Paneles Solares</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_04_01" value="option1" <?php echo $g2_04_01 ?>>
                        <label class="form-check-label" for="g2_04_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_04_02" placeholder="Obs." value="<?php echo $g2_04_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.5	Ajuste de borneras  conexiones arreglo panales a  junción box</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_05_01" value="option1" <?php echo $g2_05_01 ?>>
                        <label class="form-check-label" for="g2_05_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_05_02" placeholder="Obs." value="<?php echo $g2_05_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.6	Ajuste de borneras cables de tierra equipos y paneles a las barra de tierra</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_06_01" value="option1" <?php echo $g2_06_01 ?>>
                        <label class="form-check-label" for="g2_06_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_06_02" placeholder="Obs." value="<?php echo $g2_06_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.7	Ajuste de borneras cables de energía  Junction Box-PVDU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_07_01" value="option1" <?php echo $g2_07_01 ?>>
                        <label class="form-check-label" for="g2_07_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_07_02" placeholder="Obs." value="<?php echo $g2_07_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.8	Ajuste  de borneras cables de energía  gabinete a ingreso Banco Baterías</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_08_01" value="option1" <?php echo $g2_08_01 ?>>
                        <label class="form-check-label" for="g2_08_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_08_02" placeholder="Obs." value="<?php echo $g2_08_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.9	Ajuste  de borneras sistemas de protección gabinete</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_09_01" value="option1" <?php echo $g2_09_01 ?>>
                        <label class="form-check-label" for="g2_09_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_09_02" placeholder="Obs." value="<?php echo $g2_09_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.10	Sistematización cables de energía Panel-Junction Box-PVDU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_10_01" value="option1" <?php echo $g2_10_01 ?>>
                        <label class="form-check-label" for="g2_10_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_10_02" value="option1" <?php echo $g2_10_02 ?>>
                        <label class="form-check-label" for="g2_10_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_10_03" placeholder="Obs." value="<?php echo $g2_10_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.11	Sistematización cables de energía y sistema de tierra gabinete</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_11_01" value="option1" <?php echo $g2_11_01 ?>>
                        <label class="form-check-label" for="g2_11_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_11_02" value="option1" <?php echo $g2_11_02 ?>>
                        <label class="form-check-label" for="g2_11_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_11_03" placeholder="Obs." value="<?php echo $g2_11_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.12	Etiquetado de cables de energía Junction Box, Paneles Solares, gabinete.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_12_01" value="option1" <?php echo $g2_12_01 ?>>
                        <label class="form-check-label" for="g2_12_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_12_02" value="option1" <?php echo $g2_12_02 ?>>
                        <label class="form-check-label" for="g2_12_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_12_03" placeholder="Obs." value="<?php echo $g2_12_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.13	Etiquetado de cargas unidad de distribución de Potencia</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_13_01" value="option1" <?php echo $g2_13_01 ?>>
                        <label class="form-check-label" for="g2_13_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_13_02" value="option1" <?php echo $g2_13_02 ?>>
                        <label class="form-check-label" for="g2_13_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_13_03" placeholder="Obs." value="<?php echo $g2_13_03 ?>">
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>
