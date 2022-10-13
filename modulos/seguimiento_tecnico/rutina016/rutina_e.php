<?php

$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
$g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
$g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03;
$g1_09_01 = $g_desarrollo_g1->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo_g1->g1_09_02 ? "checked" : ""; $g1_09_03 = $g_desarrollo_g1->g1_09_03;
$g1_10_01 = $g_desarrollo_g1->g1_10_01 ? "checked" : ""; $g1_10_02 = $g_desarrollo_g1->g1_10_02 ? "checked" : ""; $g1_10_03 = $g_desarrollo_g1->g1_10_03;
$g1_11_01 = $g_desarrollo_g1->g1_11_01 ? "checked" : ""; $g1_11_02 = $g_desarrollo_g1->g1_11_02 ? "checked" : ""; $g1_11_03 = $g_desarrollo_g1->g1_11_03;
$g1_12_01 = $g_desarrollo_g1->g1_12_01 ? "checked" : ""; $g1_12_02 = $g_desarrollo_g1->g1_12_02 ? "checked" : ""; $g1_12_03 = $g_desarrollo_g1->g1_12_03;
$g1_13_01 = $g_desarrollo_g1->g1_13_01 ? "checked" : ""; $g1_13_02 = $g_desarrollo_g1->g1_13_02 ? "checked" : ""; $g1_13_03 = $g_desarrollo_g1->g1_13_03;
$g1_14_01 = $g_desarrollo_g1->g1_14_01 ? "checked" : ""; $g1_14_02 = $g_desarrollo_g1->g1_14_02 ? "checked" : ""; $g1_14_03 = $g_desarrollo_g1->g1_14_03;
$g1_15_01 = $g_desarrollo_g1->g1_15_01 ? "checked" : ""; $g1_15_02 = $g_desarrollo_g1->g1_15_02 ? "checked" : ""; $g1_15_03 = $g_desarrollo_g1->g1_15_03;
$g1_16_01 = $g_desarrollo_g1->g1_16_01 ? "checked" : ""; $g1_16_02 = $g_desarrollo_g1->g1_16_02 ? "checked" : ""; $g1_16_03 = $g_desarrollo_g1->g1_16_03;
$g1_17_01 = $g_desarrollo_g1->g1_17_01 ? "checked" : ""; $g1_17_02 = $g_desarrollo_g1->g1_17_02 ? "checked" : ""; $g1_17_03 = $g_desarrollo_g1->g1_17_03;
$g1_18_01 = $g_desarrollo_g1->g1_18_01 ? "checked" : ""; $g1_18_02 = $g_desarrollo_g1->g1_18_02 ? "checked" : ""; $g1_18_03 = $g_desarrollo_g1->g1_18_03;
$g1_19_01 = $g_desarrollo_g1->g1_19_01 ? "checked" : ""; $g1_19_02 = $g_desarrollo_g1->g1_19_02 ? "checked" : ""; $g1_19_03 = $g_desarrollo_g1->g1_19_03;
$g1_20_01 = $g_desarrollo_g1->g1_20_01 ? "checked" : ""; $g1_20_02 = $g_desarrollo_g1->g1_20_02 ? "checked" : ""; $g1_20_03 = $g_desarrollo_g1->g1_20_03;
$g1_21_01 = $g_desarrollo_g1->g1_21_01 ? "checked" : ""; $g1_21_02 = $g_desarrollo_g1->g1_21_02 ? "checked" : ""; $g1_21_03 = $g_desarrollo_g1->g1_21_03;

?>

<h6>E. Desarrollo de Rutina de Mantenimiento</h6>
<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
        </div>

        <table class="table">

            <tr>
                <td>E.1 Verificación y limpieza de estructura exterior (carcaza)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option3" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_01_03" value="<?php echo $g1_01_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.2	Verificacion pintura del gabinete</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option3" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_02_03" value="<?php echo $g1_02_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.3	Verificación del estado general del equipamiento</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option3" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_03_03" value="<?php echo $g1_03_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.4	Verificación interior: MUX , SDH , MODEMS ,equipos IPNGN, etc.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option3" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_04_03" value="<?php echo $g1_04_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.5	Verificación cableado ( fibra y cobre)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option3" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_05_03" value="<?php echo $g1_05_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.6	Verificación de estado DDF y conectores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option3" <?php echo $g1_06_02 ?>>
                        <label class="form-check-label" for="g1_06_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_06_03" value="<?php echo $g1_06_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.7	Verificación de sensores de alarmas</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option3" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_07_03" value="<?php echo $g1_07_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.8	Verificación de protectores de transientes</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option3" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_08_03" value="<?php echo $g1_08_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.9	Verificación de protectores de líneas de abonados</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option3" <?php echo $g1_09_02 ?>>
                        <label class="form-check-label" for="g1_09_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_09_03" value="<?php echo $g1_09_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.10 Limpieza de polvo interior</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_01" value="option1" <?php echo $g1_10_01 ?>>
                        <label class="form-check-label" for="g1_10_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_02" value="option3" <?php echo $g1_10_02 ?>>
                        <label class="form-check-label" for="g1_10_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_10_03" value="<?php echo $g1_10_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.11 Verificación de alarmas sobre tarjetas</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_01" value="option1" <?php echo $g1_11_01 ?>>
                        <label class="form-check-label" for="g1_11_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_02" value="option3" <?php echo $g1_11_02 ?>>
                        <label class="form-check-label" for="g1_11_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_11_03" value="<?php echo $g1_11_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.12 Verificación de alarmas de ups</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_01" value="option1" <?php echo $g1_12_01 ?>>
                        <label class="form-check-label" for="g1_12_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_02" value="option3" <?php echo $g1_12_02 ?>>
                        <label class="form-check-label" for="g1_12_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_12_03" value="<?php echo $g1_12_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.13 Verificación de alarmas de rectificador</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_01" value="option1" <?php echo $g1_13_01 ?>>
                        <label class="form-check-label" for="g1_13_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_02" value="option3" <?php echo $g1_13_02 ?>>
                        <label class="form-check-label" for="g1_13_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_13_03" value="<?php echo $g1_13_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.14 Reporte  de alarmas al NOC (AC-BAT- RECTIF)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_01" value="option1" <?php echo $g1_14_01 ?>>
                        <label class="form-check-label" for="g1_14_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_02" value="option3" <?php echo $g1_14_02 ?>>
                        <label class="form-check-label" for="g1_14_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_14_03" value="<?php echo $g1_14_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.15 Verificación de existencia de F.O de reserva</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_01" value="option1" <?php echo $g1_15_01 ?>>
                        <label class="form-check-label" for="g1_15_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_02" value="option3" <?php echo $g1_15_02 ?>>
                        <label class="form-check-label" for="g1_15_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_15_03" value="<?php echo $g1_15_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.16 Etiquetado de equipos y cables</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_01" value="option1" <?php echo $g1_16_01 ?>>
                        <label class="form-check-label" for="g1_16_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_02" value="option3" <?php echo $g1_16_02 ?>>
                        <label class="form-check-label" for="g1_16_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_16_03" value="<?php echo $g1_16_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.17 Temperatura</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_01" value="option1" <?php echo $g1_17_01 ?>>
                        <label class="form-check-label" for="g1_17_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_02" value="option3" <?php echo $g1_17_02 ?>>
                        <label class="form-check-label" for="g1_17_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_17_03" value="<?php echo $g1_17_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.18 Estado de los LED's</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_01" value="option1" <?php echo $g1_18_01 ?>>
                        <label class="form-check-label" for="g1_18_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_02" value="option3" <?php echo $g1_18_02 ?>>
                        <label class="form-check-label" for="g1_18_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs."id="g1_18_03" value="<?php echo $g1_18_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.19 Verificación cableado de Pach-Cords opticos</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_01" value="option1" <?php echo $g1_19_01 ?>>
                        <label class="form-check-label" for="g1_19_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_02" value="option3" <?php echo $g1_19_02 ?>>
                        <label class="form-check-label" for="g1_19_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs."id="g1_19_03" value="<?php echo $g1_19_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.20 Verificación cableado de Energia</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_20_01" value="option1" <?php echo $g1_20_01 ?>>
                        <label class="form-check-label" for="g1_20_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_20_02" value="option3" <?php echo $g1_20_02 ?>>
                        <label class="form-check-label" for="g1_20_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_20_03" value="<?php echo $g1_20_03 ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>E.21 Limpieza del ambiente</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_21_01" value="option1" <?php echo $g1_21_01 ?>>
                        <label class="form-check-label" for="g1_21_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_21_02" value="option3" <?php echo $g1_21_02 ?>>
                        <label class="form-check-label" for="g1_21_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_21_03" value="<?php echo $g1_21_03 ?>">
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>
