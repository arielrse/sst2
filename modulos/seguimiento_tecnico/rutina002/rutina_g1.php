<?php

$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03 ? "checked" : ""; $g1_02_04 = $g_desarrollo_g1->g1_02_04;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
$g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
$g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03;
$g1_09_01 = $g_desarrollo_g1->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo_g1->g1_09_02 ? "checked" : ""; $g1_09_03 = $g_desarrollo_g1->g1_09_03;

?>

<h6>G. Desarrollo de Rutina de Mantenimiento</h6>
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

        <h6>G.1 Verificaciones tecnicas</h6>
        <table class="table mb-0">
                <tbody>
                <tr>
                    <td>G.1.1 Verificacion de operación del controldador</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Sin Humedad</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option2" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">Con humedad</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_01_03" placeholder="Obs." value="<?php echo $g1_01_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.2 Verificacion de operación de los motores ventiladores</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">N/A</label>
                    </div>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option2" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">Operativo</label>
                    </div>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_02_03" value="option2" <?php echo $g1_02_03 ?>>
                        <label class="form-check-label" for="g1_02_03">No operativo</label>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g1_02_04" placeholder="Obs." value="<?php echo $g1_02_04 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.3 Inspeccion del sistema electrico del TD a equipo</td>
                    <td colspan="2">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">Si</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_03_02" placeholder="Obs." value="<?php echo $g1_03_02 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.4 Verificacion del ruido de operación de los rodamientos de motores</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">Aceptable</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option2" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">Alto</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_04_03" placeholder="Obs." value="<?php echo $g1_04_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.5 Verificacion de aterramento del equipo</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">Bueno</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option2" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">Malo</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_05_03" placeholder="Obs." value="<?php echo $g1_05_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.6 Verificacion del buen estado fisico del equipo</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?> >
                        <label class="form-check-label" for="g1_06_01">Bueno</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option2" <?php echo $g1_06_02 ?> >
                        <label class="form-check-label" for="g1_06_02">Con daños</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_06_03" placeholder="Obs." value="<?php echo $g1_06_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.7 Verificación de la correcta operación del display y teclas</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?> >
                        <label class="form-check-label" for="g1_07_01">Bueno</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option2" <?php echo $g1_07_02 ?> >
                        <label class="form-check-label" for="g1_07_02">Malo</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_07_03" placeholder="Obs." value="<?php echo $g1_07_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.8 Verificación del buen estado de Shunt, PDUs</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?> >
                        <label class="form-check-label" for="g1_08_01">Bueno</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option2" <?php echo $g1_08_02 ?> >
                        <label class="form-check-label" for="g1_08_02">Malo</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_08_03" placeholder="Obs." value="<?php echo $g1_08_03 ?>">
                    </td>
                </tr>

                <tr>
                    <td>G.1.9 Verificación de sobre carga de capacidad de la planta rectificadora</td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?> >
                        <label class="form-check-label" for="g1_09_01">sin sobrecarga</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option2" <?php echo $g1_09_02 ?> >
                        <label class="form-check-label" for="g1_09_02">sobrecargado</label>
                    </td>
                    <td colspan="2">
                        <input type="text" class="form-control form-control-sm" id="g1_09_03" placeholder="Obs." value="<?php echo $g1_09_03 ?>">
                    </td>
                </tr>

                </tbody>
            </table>
    </div>
</div>