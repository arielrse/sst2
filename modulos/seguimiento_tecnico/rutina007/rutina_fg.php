<?php
$g_desarrollo = $obj->{'g_desarrollo'};
$f1_01_01 = $g_desarrollo->f1_01_01 ? "checked" : ""; $f1_01_02 = $g_desarrollo->f1_01_02 ? "checked" : ""; $f1_01_03 = $g_desarrollo->f1_01_03;
$g1_01_01 = $g_desarrollo->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo->g1_01_03;
$g1_02_01 = $g_desarrollo->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo->g1_02_03;
$g1_03_01 = $g_desarrollo->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo->g1_03_03;
$g1_04_01 = $g_desarrollo->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo->g1_04_03;
$g1_05_01 = $g_desarrollo->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo->g1_05_03;
$g1_06_01 = $g_desarrollo->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo->g1_06_03;
$g1_07_01 = $g_desarrollo->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo->g1_07_03;
$g1_08_01 = $g_desarrollo->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo->g1_08_03;
$g1_09_01 = $g_desarrollo->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo->g1_09_02 ? "checked" : ""; $g1_09_03 = $g_desarrollo->g1_09_03;
$g1_10_01 = $g_desarrollo->g1_10_01 ? "checked" : ""; $g1_10_02 = $g_desarrollo->g1_10_02 ? "checked" : ""; $g1_10_03 = $g_desarrollo->g1_10_03;
$g1_11_01 = $g_desarrollo->g1_11_01 ? "checked" : ""; $g1_11_02 = $g_desarrollo->g1_11_02 ? "checked" : ""; $g1_11_03 = $g_desarrollo->g1_11_03;
$g1_12_01 = $g_desarrollo->g1_12_01 ? "checked" : ""; $g1_12_02 = $g_desarrollo->g1_12_02 ? "checked" : ""; $g1_12_03 = $g_desarrollo->g1_12_03;
$g1_13_01 = $g_desarrollo->g1_13_01 ? "checked" : ""; $g1_13_02 = $g_desarrollo->g1_13_02 ? "checked" : ""; $g1_13_03 = $g_desarrollo->g1_13_03;
$g1_14_01 = $g_desarrollo->g1_14_01 ? "checked" : ""; $g1_14_02 = $g_desarrollo->g1_14_02 ? "checked" : ""; $g1_14_03 = $g_desarrollo->g1_14_03;
$g1_15_01 = $g_desarrollo->g1_15_01 ? "checked" : ""; $g1_15_02 = $g_desarrollo->g1_15_02 ? "checked" : ""; $g1_15_03 = $g_desarrollo->g1_15_03;

$g1_16_01 = $g_desarrollo->g1_16_01 ? "checked" : ""; $g1_16_02 = $g_desarrollo->g1_16_02;
$g1_17_01 = $g_desarrollo->g1_17_01 ? "checked" : ""; $g1_17_02 = $g_desarrollo->g1_17_02;
$g1_18_01 = $g_desarrollo->g1_18_01 ? "checked" : ""; $g1_18_02 = $g_desarrollo->g1_18_02;
$g1_19_01 = $g_desarrollo->g1_19_01 ? "checked" : ""; $g1_19_02 = $g_desarrollo->g1_19_02;

$g1_20_01 = $g_desarrollo->g1_20_01; $g1_20_02 = $g_desarrollo->g1_20_02; $g1_20_03 = $g_desarrollo->g1_20_03; $g1_20_04 = $g_desarrollo->g1_20_04; $g1_20_05 = $g_desarrollo->g1_20_05; $g1_20_06 = $g_desarrollo->g1_20_06;
$g1_21_01 = $g_desarrollo->g1_21_01; $g1_21_02 = $g_desarrollo->g1_21_02; $g1_21_03 = $g_desarrollo->g1_21_03; $g1_21_04 = $g_desarrollo->g1_21_04; $g1_21_05 = $g_desarrollo->g1_21_05;

$g_desarrollo3 = $obj->{'g_desarrollo3'};

$g3_01_01 = $g_desarrollo3->g3_01_01; $g3_01_02 = $g_desarrollo3->g3_01_02;
$g3_02_01 = $g_desarrollo3->g3_02_01; $g3_02_02 = $g_desarrollo3->g3_02_02;
$g3_03_01 = $g_desarrollo3->g3_03_01; $g3_03_02 = $g_desarrollo3->g3_03_02;
$g3_04_01 = $g_desarrollo3->g3_04_01; $g3_04_02 = $g_desarrollo3->g3_04_02;

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
                <td>F.1 Sistema Media Tensión Operativo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f1_01_01" value="option1" <?php echo $f1_01_01 ?>>
                        <label class="form-check-label" for="f1_01_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="f1_01_02" value="option2" <?php echo $f1_01_02 ?>>
                        <label class="form-check-label" for="f1_01_02">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="f1_01_03" placeholder="Obs." value="<?php echo $f1_01_03 ?>">
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>

<h6>G. Desarrollo de Rutina de Mantenimiento</h6>
<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h6>G.1	Verificaciones técnicas</h6>
        <table class="table">
            <tbody>
            <tr>
                <td>G.1.1 Verificación estado del transformador MT/BT</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option1" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_01_03" placeholder="Obs." value="<?php echo $g1_01_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.2 Verificación estado Pararrayos Punto de Transformación</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option1" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_02_03" placeholder="Obs." value="<?php echo $g1_02_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.3 Verificación estado Seccionador Punto de Transformación</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option1" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_03_03" placeholder="Obs." value="<?php echo $g1_03_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.4 Verificación estado bajante sistema de puesta a tierra transformador</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option1" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_04_03" placeholder="Obs." value="<?php echo $g1_04_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.5 Verificación estado Pararrayos Punto de Arranque</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option1" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_05_03" placeholder="Obs." value="<?php echo $g1_05_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.6 Verificación estado Seccionador  de línea Punto de Arranque</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option1" <?php echo $g1_06_02 ?>>
                        <label class="form-check-label" for="g1_06_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_06_03" placeholder="Obs." value="<?php echo $g1_06_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.7 Verificación estado bajante sistema de puesta a tierra arranque</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option1" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_07_03" placeholder="Obs." value="<?php echo $g1_07_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.8 Verificación nivel de Aceite en transformador MT/BT</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">Normal</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option1" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">Bajo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_08_03" placeholder="Obs." value="<?php echo $g1_08_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.9 Verificación estado identificación de los postes</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option1" <?php echo $g1_09_02 ?>>
                        <label class="form-check-label" for="g1_09_02">No cuenta</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_09_03" placeholder="Obs." value="<?php echo $g1_09_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.10 Verificación verticalidad Postes extensión media tensión</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_01" value="option1" <?php echo $g1_10_01 ?>>
                        <label class="form-check-label" for="g1_10_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_02" value="option1" <?php echo $g1_10_02 ?>>
                        <label class="form-check-label" for="g1_10_02">Inclinado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_10_03" placeholder="Obs." value="<?php echo $g1_10_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.11 Verificación estado postación extensión media tensión</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_01" value="option1" <?php echo $g1_11_01 ?>>
                        <label class="form-check-label" for="g1_11_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_02" value="option1" <?php echo $g1_11_02 ?>>
                        <label class="form-check-label" for="g1_11_02">Deteriorado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_11_03" placeholder="Obs." value="<?php echo $g1_11_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.12 Verificación estado estructuras extensión media tensión</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_01" value="option1" <?php echo $g1_12_01 ?>>
                        <label class="form-check-label" for="g1_12_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_02" value="option1" <?php echo $g1_12_02 ?>>
                        <label class="form-check-label" for="g1_12_02">Corrección</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_12_03" placeholder="Obs." value="<?php echo $g1_12_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.13 Verificación estado Sistemas de protección de paso extensión media tensión</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_01" value="option1" <?php echo $g1_13_01 ?>>
                        <label class="form-check-label" for="g1_13_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_13_02" value="option1" <?php echo $g1_13_02 ?>>
                        <label class="form-check-label" for="g1_13_02">En falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_13_03" placeholder="Obs." value="<?php echo $g1_13_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.14 Verificación existencia usuarios que se encuentren derivados en MT/BT</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_01" value="option1" <?php echo $g1_14_01 ?>>
                        <label class="form-check-label" for="g1_14_01">Ninguno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_14_02" value="option1" <?php echo $g1_14_02 ?>>
                        <label class="form-check-label" for="g1_14_02">Existen</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_14_03" placeholder="Obs." value="<?php echo $g1_14_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.15 Verificación necesidad de desbroce en el trayecto de la extensión de energía</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_01" value="option1" <?php echo $g1_15_01 ?>>
                        <label class="form-check-label" for="g1_15_01">Requiere</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_15_02" value="option1" <?php echo $g1_15_02 ?>>
                        <label class="form-check-label" for="g1_15_02">No Requiere</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_15_03" placeholder="Obs." value="<?php echo $g1_15_03 ?>">
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h6>G.2	Actividades de mantenimiento</h6>
        <table class="table mb-0">
            <tbody>
            <tr>
                <td>G.2.1	Ajuste de tuercas de sujeción conexiones  en transformador, pararrayos</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_01" value="option1" <?php echo $g1_16_01 ?>>
                        <label class="form-check-label" for="g1_16_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_16_02" placeholder="Obs." value="<?php echo $g1_16_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.2 Ajuste de tuercas de sujeción salida transformador (cable dúplex)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_01" value="option1" <?php echo $g1_17_01 ?>>
                        <label class="form-check-label" for="g1_17_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_17_02" placeholder="Obs." value="<?php echo $g1_17_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.3 Limpieza y ajuste perno de sujeción  varillas/ bajante de tierra (Transformador)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_01" value="option1" <?php echo $g1_18_01 ?>>
                        <label class="form-check-label" for="g1_18_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_18_02" placeholder="Obs." value="<?php echo $g1_18_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.4 Limpieza y ajuste perno de sujeción  varillas/ bajante de tierra (Arranque)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_01" value="option1" <?php echo $g1_19_01 ?>>
                        <label class="form-check-label" for="g1_19_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_19_02" placeholder="Obs." value="<?php echo $g1_19_02 ?>">
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>


<div class="card">
    <div class="card-body">

        <div>
            <h7 class="mb-0">G.3.1 Medición de tensión  salida del transformador (V)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1-N</span>
            <input type="text" class="form-control" id="g1_20_01" value="<?php echo $g1_20_01 ?>">

            <span class="input-group-text">L2-N</span>
            <input type="text" class="form-control" id="g1_20_02" value="<?php echo $g1_20_02 ?>">

            <span class="input-group-text">L3-N</span>
            <input type="text" class="form-control" id="g1_20_03" value="<?php echo $g1_20_03 ?>">

            <span class="input-group-text">L1-L2</span>
            <input type="text" class="form-control" id="g1_20_04" value="<?php echo $g1_20_04 ?>">

            <span class="input-group-text">L1-L3</span>
            <input type="text" class="form-control" id="g1_20_05" value="<?php echo $g1_20_05 ?>">

            <span class="input-group-text">L2-L2</span>
            <input type="text" class="form-control" id="g1_20_06" value="<?php echo $g1_20_06 ?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.2 Medición de corriente de operación salida transformador (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g1_21_01" value="<?php echo $g1_21_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g1_21_02" value="<?php echo $g1_21_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g1_21_03" value="<?php echo $g1_21_03 ?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g1_21_04" value="<?php echo $g1_21_04 ?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g1_21_05" value="<?php echo $g1_21_05 ?>">
        </div>
        <table class="table mb-0">
            <tbody>
            <tr>
                <td>G.3.3	Medida independiente  puesta a tierra solo Varillas en  Punto  de Transformador</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_01_01" value="<?php echo $g3_01_01 ?>">
                </td>
                <td>(Ω)</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_01_02" placeholder="Obs." value="<?php echo $g3_01_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.3.4	Medida sistema completo puesta a tierra en Punto de Transformador</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_02_01" value="<?php echo $g3_02_01 ?>">
                </td>
                <td>(Ω)</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_02_02" placeholder="Obs." value="<?php echo $g3_02_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.3.5	Medida independiente  puesta a tierra solo Varillas en  Punto  de Arranque</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_03_01" value="<?php echo $g3_03_01 ?>">
                </td>
                <td>(Ω)</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_03_02" placeholder="Obs." value="<?php echo $g3_03_02 ?>">
                </td>
            </tr>
            <tr>
                <td>G.3.6	Medida sistema completo puesta a tierra en Punto de Arranque</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_04_01" value="<?php echo $g3_04_01 ?>">
                </td>
                <td>(Ω)</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g3_04_02" placeholder="Obs." value="<?php echo $g3_04_02 ?>">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>