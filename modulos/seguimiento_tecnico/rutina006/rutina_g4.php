<?php
$g_desarrollo_g4 = $obj->{'g_desarrollo_g4'};
$g4_01_01 = $g_desarrollo_g4->g4_01_01 ? "checked" : ""; $g4_01_02 = $g_desarrollo_g4->g4_01_02 ? "checked" : ""; $g4_01_03 = $g_desarrollo_g4->g4_01_03 ? "checked" : ""; $g4_01_04 = $g_desarrollo_g4->g4_01_04 ? "checked" : "";
$g4_02_01 = $g_desarrollo_g4->g4_02_01 ? "checked" : ""; $g4_02_02 = $g_desarrollo_g4->g4_02_02 ? "checked" : ""; $g4_02_03 = $g_desarrollo_g4->g4_02_03 ? "checked" : ""; $g4_02_04 = $g_desarrollo_g4->g4_02_04 ? "checked" : "";
$g4_03_01 = $g_desarrollo_g4->g4_03_01 ? "checked" : ""; $g4_03_02 = $g_desarrollo_g4->g4_03_02 ? "checked" : ""; $g4_03_03 = $g_desarrollo_g4->g4_03_03 ? "checked" : ""; $g4_03_04 = $g_desarrollo_g4->g4_03_04 ? "checked" : "";
$g4_04_01 = $g_desarrollo_g4->g4_04_01 ? "checked" : ""; $g4_04_02 = $g_desarrollo_g4->g4_04_02 ? "checked" : ""; $g4_04_03 = $g_desarrollo_g4->g4_04_03 ? "checked" : ""; $g4_04_04 = $g_desarrollo_g4->g4_04_04 ? "checked" : "";
$g4_05_01 = $g_desarrollo_g4->g4_05_01 ? "checked" : ""; $g4_05_02 = $g_desarrollo_g4->g4_05_02 ? "checked" : ""; $g4_05_03 = $g_desarrollo_g4->g4_05_03 ? "checked" : ""; $g4_05_04 = $g_desarrollo_g4->g4_05_04 ? "checked" : "";
$g4_06_01 = $g_desarrollo_g4->g4_06_01 ? "checked" : ""; $g4_06_02 = $g_desarrollo_g4->g4_06_02 ? "checked" : ""; $g4_06_03 = $g_desarrollo_g4->g4_06_03 ? "checked" : ""; $g4_06_04 = $g_desarrollo_g4->g4_06_04 ? "checked" : "";

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
                <th colspan="5">G.4	Verificación alarmas: Localmente y  Gestión Remota</th>
            </tr>
            <tr>
                <th></th>
                <th colspan="2">Local</th>
                <th colspan="2">Remoto</th>
            </tr>

            <tr>
                <td>G.4.1 Alarma Puerta Abierta</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_01_01" <?php echo $g4_01_01 ?> >
                        <label class="form-check-label" for="g4_01_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_01_02" <?php echo $g4_01_02 ?> >
                        <label class="form-check-label" for="g4_01_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_01_03" <?php echo $g4_01_03 ?> >
                        <label class="form-check-label" for="g4_01_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_01_04" <?php echo $g4_01_04 ?> >
                        <label class="form-check-label" for="g4_01_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.2	Alta temperatura Gabinete</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_02_01" <?php echo $g4_02_01 ?> >
                        <label class="form-check-label" for="g4_02_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_02_02" <?php echo $g4_02_02 ?> >
                        <label class="form-check-label" for="g4_02_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_02_03" <?php echo $g4_02_03 ?> >
                        <label class="form-check-label" for="g4_02_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_02_04" <?php echo $g4_02_04 ?> >
                        <label class="form-check-label" for="g4_02_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.3	Baterías en Descarga</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_03_01" <?php echo $g4_03_01 ?> >
                        <label class="form-check-label" for="g4_03_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_03_02" <?php echo $g4_03_02 ?> >
                        <label class="form-check-label" for="g4_03_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_03_03" <?php echo $g4_03_03 ?> >
                        <label class="form-check-label" for="g4_03_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_03_04" <?php echo $g4_03_04 ?> >
                        <label class="form-check-label" for="g4_03_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.4	Falla Modulo Rectificador</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_04_01" <?php echo $g4_04_01 ?> >
                        <label class="form-check-label" for="g4_04_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_04_02" <?php echo $g4_04_02 ?> >
                        <label class="form-check-label" for="g4_04_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_04_03" <?php echo $g4_04_03 ?> >
                        <label class="form-check-label" for="g4_04_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_04_04" <?php echo $g4_04_04 ?> >
                        <label class="form-check-label" for="g4_04_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.5	Falla Modulo Regulador solar</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_05_01" <?php echo $g4_05_01 ?> >
                        <label class="form-check-label" for="g4_05_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_05_02" <?php echo $g4_05_02 ?> >
                        <label class="form-check-label" for="g4_05_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_05_03" <?php echo $g4_05_03 ?> >
                        <label class="form-check-label" for="g4_05_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_05_04" <?php echo $g4_05_04 ?> >
                        <label class="form-check-label" for="g4_05_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.6	Falla Grupo Electrógeno</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_06_01" <?php echo $g4_06_01 ?> >
                        <label class="form-check-label" for="g4_06_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_06_02" <?php echo $g4_06_02 ?> >
                        <label class="form-check-label" for="g4_06_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_06_03" <?php echo $g4_06_03 ?> >
                        <label class="form-check-label" for="g4_06_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g4_06_04" <?php echo $g4_06_04 ?> >
                        <label class="form-check-label" for="g4_06_04">No</label>
                    </div>
                </td>
            </tr>



            </tbody>
        </table>

    </div>
</div>
