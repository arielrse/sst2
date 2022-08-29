<?php
$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
$g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03 ? "checked" : ""; $g1_07_04 = $g_desarrollo_g1->g1_07_04;
$g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03 ? "checked" : ""; $g1_08_04 = $g_desarrollo_g1->g1_08_04;

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

        <table class="table">
            <tbody>
            <tr>
                <th colspan="5">G.1	Verificaciones técnicas</th>
            </tr>

            <tr>
                <td>G.1.1 Verificación estado de paneles solares, soportes, junción Box.</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option1" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">Deteriorado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_01_03" placeholder="Obs." value="<?php echo $g1_01_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.2	Verificar si los paneles fotovoltaicos  están orientados al Norte Geográfico</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_02_02" placeholder="Obs." value="<?php echo $g1_02_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.3	Verificar si no existe obstrucción (Arboles) línea de vista paneles solares</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option1" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">Obstrucción</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_03_03" placeholder="Obs." value="<?php echo $g1_03_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.4	Verificar el estado del cable de tierra y terminales de cada equipo</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option1" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_04_03" placeholder="Obs." value="<?php echo $g1_04_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.5	Verificación cables de comunicación se encuentran conectados</td>
                <td></td>
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
                <td>G.1.6	Verificación Estado Banco Baterías</td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">Bueno</label>
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
                <td>G.1.7	Verificación operación Grupo Electrógeno</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">N/A</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option1" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_03" value="option1" <?php echo $g1_07_03 ?>>
                        <label class="form-check-label" for="g1_07_03">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_07_04" placeholder="Obs." value="<?php echo $g1_07_04 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.8	Verificación operación  Inversor</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">N/A</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option1" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">Operativo</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_03" value="option1" <?php echo $g1_08_03 ?>>
                        <label class="form-check-label" for="g1_08_03">No operativo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_08_04" placeholder="Obs." value="<?php echo $g1_08_04 ?>">
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>
