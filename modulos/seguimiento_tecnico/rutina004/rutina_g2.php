<?php
$g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};

$g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "checked" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
$g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "checked" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02;
$g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "checked" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? "checked" : ""; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
$g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "checked" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
$g2_05_01 = $g_desarrollo_g2->g2_05_01 ? "checked" : ""; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
$g2_06_01 = $g_desarrollo_g2->g2_06_01 ? "checked" : ""; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
$g2_07_01 = $g_desarrollo_g2->g2_07_01 ? "checked" : ""; $g2_07_02 = $g_desarrollo_g2->g2_07_02;
$g2_08_01 = $g_desarrollo_g2->g2_08_01 ? "checked" : ""; $g2_08_02 = $g_desarrollo_g2->g2_08_02;
$g2_09_01 = $g_desarrollo_g2->g2_09_01 ? "checked" : ""; $g2_09_02 = $g_desarrollo_g2->g2_09_02;
$g2_10_01 = $g_desarrollo_g2->g2_10_01 ? "checked" : ""; $g2_10_02 = $g_desarrollo_g2->g2_10_02;
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

        <table class="table">
            <tr>
                <th colspan="5">G.2	Actividades de mantenimiento</th>
            </tr>

            <tr>
                <td>G.2.1	Limpieza de los filtros de polvo de aire</td>
                <td></td>
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
                <td>G.2.2	Limpieza de polvo del panel del evaporador</td>
                <td></td>
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
                <td>G.2.3	Cambio de filtro de polvo de aire</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_01" value="option1" <?php echo $g2_03_01 ?>>
                        <label class="form-check-label" for="g2_03_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_02" value="option1" <?php echo $g2_03_02 ?>>
                        <label class="form-check-label" for="g2_03_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_03_03" placeholder="Obs." value="<?php echo $g2_03_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.4	Lavado del panel serpentín del condensador</td>
                <td></td>
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
                <td>G.2.5	Peinado de las aletas del serpentín del evaporador</td>
                <td></td>
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
                <td>G.2.6	Peinado de las aletas del serpentín del condensador</td>
                <td></td>
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
                <td>G.2.7	Ajuste de borneras en el panel eléctrico del equipo</td>
                <td></td>
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
                <td>G.2.8	Ajuste de borneras del circuito del equipo en el tablero eléctrico</td>
                <td></td>
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
                <td>G.2.9	Lubricación de los motores ventiladores</td>
                <td></td>
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
                <td>G.2.10	Limpieza de obstrucciones del trayecto del drenaje de condensado</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_10_01" value="option1" <?php echo $g2_10_01 ?>>
                        <label class="form-check-label" for="g2_10_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_10_02" placeholder="Obs." value="<?php echo $g2_10_02 ?>">
                </td>
            </tr>
        </table>
    </div>
</div>