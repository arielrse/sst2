<?php

//$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03 ? "checked" : ""; $g1_02_04 = $g_desarrollo_g1->g1_02_04;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo_g1->g1_03_03 ? "checked" : ""; $g1_03_04 = $g_desarrollo_g1->g1_03_04;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02;
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
?>

<h6>G. Desarrollo de Rutina de Mantenimiento</h6>
<div class="card">
    <div class="card-body">
        <div class="row align-items-center row-cols-auto g-2 mb-2">

            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>

        </div>
        <table class="table">
            <tr>
                <th colspan="5">G.1	Verificaciones técnicas</th>
            </tr>
            <tr>
                <td>G.1.1 Verificación de la mirilla de la línea de liquido</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Sin Humedad</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option2" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">Con humedad</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_01_03" placeholder="Obs." value="<?php echo $g1_01_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.2	Verificación de la mirilla nivel de aceite del compresor</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">N/A</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option1" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">A nivel</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_03" value="option2" <?php echo $g1_02_03 ?>>
                        <label class="form-check-label" for="g1_02_03">Bajo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_02_04" placeholder="Obs." value="<?php echo $g1_02_04 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.3 Verificación de operación del relé de arranque del compresor</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">N/A</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option1" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_03" value="option2" <?php echo $g1_03_03 ?>>
                        <label class="form-check-label" for="g1_03_03">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_03_04" placeholder="Obs." value="<?php echo $g1_03_04 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.4 Verificación del estado del aislante térmico de cañerías de cobre</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option2" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">Deteriorado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_04_03" placeholder="Obs." value="<?php echo $g1_04_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.5	Verificación de fugas de gas refrigerante en uniones de soldadura/mecánicas</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">Sin fugas</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option2" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">Deteriorado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_05_03" placeholder="Obs." value="<?php echo $g1_05_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.6	Inspección del sistema eléctrico del TD a equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">Si</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_06_02" placeholder="Obs." value="<?php echo $g1_06_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.7	Verificación del ruido de operación de los rodamientos de motores</td>
                <td>

                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">Aceptable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option2" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">Alto</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_07_03" placeholder="Obs." value="<?php echo $g1_07_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.8	Verificación de operación del presostato Alta (cada 6 meses)</td>
                <td>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option2" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_08_03" placeholder="Obs." value="<?php echo $g1_08_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.9	Verificación de operación del presostato baja (cada 6 meses)</td>
                <td>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option2" <?php echo $g1_09_02 ?>>
                        <label class="form-check-label" for="g1_09_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_09_03" placeholder="Obs." value="<?php echo $g1_09_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.10	Verificación de aterramiento del equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_01" value="option1" <?php echo $g1_10_01 ?>>
                        <label class="form-check-label" for="g1_10_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_02" value="option2" <?php echo $g1_10_02 ?>>
                        <label class="form-check-label" for="g1_10_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_10_03" placeholder="Obs." value="<?php echo $g1_10_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.11	Verificación del buen estado físico del equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_01" value="option1" <?php echo $g1_11_01 ?>>
                        <label class="form-check-label" for="g1_11_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_02" value="option2" <?php echo $g1_11_02 ?>>
                        <label class="form-check-label" for="g1_11_02">Con daños</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_11_03" placeholder="Obs." value="<?php echo $g1_11_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.12	Verificación del estado físico de los motores ventiladores del condensador</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_01" value="option1" <?php echo $g1_12_01 ?>>
                        <label class="form-check-label" for="g1_12_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_02" value="option2" <?php echo $g1_12_02 ?>>
                        <label class="form-check-label" for="g1_12_0213">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_12_03" placeholder="Obs." value="<?php echo $g1_12_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.13	Verificación del estado físico de los motores ventiladores del evaporador</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_01" value="option1" <?php echo $g1_13_01 ?>>
                        <label class="form-check-label" for="g1_13_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_02" value="option2" <?php echo $g1_13_02 ?>>
                        <label class="form-check-label" for="g1_13_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_13_03" placeholder="Obs." value="<?php echo $g1_13_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.14	Verificación de la sujeción de los ventiladores del condensador en el equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_01" value="option1" <?php echo $g1_14_01 ?>>
                        <label class="form-check-label" for="g1_14_01">Estable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_02" value="option2" <?php echo $g1_14_02 ?>>
                        <label class="form-check-label" for="g1_14_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_14_03" placeholder="Obs." value="<?php echo $g1_14_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.15	Verificación de la sujeción de los ventiladores del evaporador en el equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_01" value="option1" <?php echo $g1_15_01 ?>>
                        <label class="form-check-label" for="g1_15_01">Estable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_02" value="option2" <?php echo $g1_15_02 ?>>
                        <label class="form-check-label" for="g1_15_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_15_03" placeholder="Obs." value="<?php echo $g1_15_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.16	Verificación de la correcta operación del display y teclas</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_01" value="option1" <?php echo $g1_16_01 ?>>
                        <label class="form-check-label" for="g1_16_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_02" value="option2" <?php echo $g1_16_02 ?>>
                        <label class="form-check-label" for="g1_16_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_16_03" placeholder="Obs." value="<?php echo $g1_16_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.17	Verificación del estado del trayecto del drenaje de condensado</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_01" value="option1" <?php echo $g1_17_01 ?>>
                        <label class="form-check-label" for="g1_17_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_02" value="option2" <?php echo $g1_17_02 ?>>
                        <label class="form-check-label" for="g1_17_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_17_03" placeholder="Obs." value="<?php echo $g1_17_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.18	Verificación de tornillos, remaches de sujeción de carcasa, tapas del equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_01" value="option1" <?php echo $g1_18_01 ?>>
                        <label class="form-check-label" for="g1_18_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_02" value="option2" <?php echo $g1_18_02 ?>>
                        <label class="form-check-label" for="g1_18_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_18_03" placeholder="Obs." value="<?php echo $g1_18_03 ?>">
                </td>
            </tr>
        </table>
    </div>
</div>