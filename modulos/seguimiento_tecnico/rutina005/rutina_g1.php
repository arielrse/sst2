<?php

$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
$g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
$g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03;

?>

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
                <td>G.1.5 Inspección del sistema eléctrico del TD a equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Si</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_01_02" placeholder="Obs." value="<?php echo $g1_01_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.6 Verificación del ruido de operación de los rodamientos de motores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">Aceptable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option1" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">Alto</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_02_03" placeholder="Obs." value="<?php echo $g1_02_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.9 Verificación de aterramiento del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option1" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_03_03" placeholder="Obs." value="<?php echo $g1_03_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.10 Verificación del buen estado físico del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option1" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">Con daños</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_04_03" placeholder="Obs." value="<?php echo $g1_04_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.11 Verificación del estado físico de las aspas del ventilador</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option1" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_05_03" placeholder="Obs." value="<?php echo $g1_05_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.13 Verificación de la sujeción de los ventiladores en su carcasa</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">Estable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option1" <?php echo $g1_06_02 ?>>
                        <label class="form-check-label" for="g1_06_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_06_03" placeholder="Obs." value="<?php echo $g1_06_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.16 Verificación de correa de trasmisión</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option1" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_07_03" placeholder="Obs." value="<?php echo $g1_07_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.17 Verificación de tornillos, remaches de sujeción de carcasa, tapas del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option1" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_08_03" placeholder="Obs." value="<?php echo $g1_08_03 ?>">
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>