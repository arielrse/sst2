<?php
$g_desarrollo = $obj->{'g_desarrollo'};
//$f1_01_01 = $g_desarrollo->f1_01_01 ? "checked" : ""; $f1_01_02 = $g_desarrollo->f1_01_02 ? "checked" : ""; $f1_01_03 = $g_desarrollo->f1_01_03;
$f1_01_01 = $g_desarrollo->f1_01_01 ? "checked" : ""; $f1_01_02 = $g_desarrollo->f1_01_02 ? "checked" : ""; $f1_01_03 = $g_desarrollo->f1_01_03;
$g1_01_01 = $g_desarrollo->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo->g1_01_03;
$g1_02_01 = $g_desarrollo->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo->g1_02_03;
$g1_03_01 = $g_desarrollo->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo->g1_03_03;
$g1_04_01 = $g_desarrollo->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo->g1_04_03;
$g1_05_01 = $g_desarrollo->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo->g1_05_03;
$g1_06_01 = $g_desarrollo->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo->g1_06_03;
$g1_07_01 = $g_desarrollo->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo->g1_07_02;
$g1_08_01 = $g_desarrollo->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo->g1_08_02;
$g1_09_01 = $g_desarrollo->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo->g1_09_02;
$g1_10_01 = $g_desarrollo->g1_10_01 ? "checked" : ""; $g1_10_02 = $g_desarrollo->g1_10_02;
$g1_11_01 = $g_desarrollo->g1_11_01 ? "checked" : ""; $g1_11_02 = $g_desarrollo->g1_11_02;
$g1_12_01 = $g_desarrollo->g1_12_01;                  $g1_12_02 = $g_desarrollo->g1_12_02;
$g1_13_01 = $g_desarrollo->g1_13_01;
$g1_14_01 = $g_desarrollo->g1_14_01;                  $g1_14_02 = $g_desarrollo->g1_14_02;
$g1_15_01 = $g_desarrollo->g1_15_01;                  $g1_15_02 = $g_desarrollo->g1_15_02;
$g1_16_01 = $g_desarrollo->g1_16_01 ? "checked" : ""; $g1_16_02 = $g_desarrollo->g1_16_02 ? "checked" : ""; $g1_16_03 = $g_desarrollo->g1_16_03 ? "checked" : ""; $g1_16_04 = $g_desarrollo->g1_16_04 ? "checked" : "";
$g1_17_01 = $g_desarrollo->g1_17_01 ? "checked" : ""; $g1_17_02 = $g_desarrollo->g1_17_02 ? "checked" : ""; $g1_17_03 = $g_desarrollo->g1_17_03 ? "checked" : ""; $g1_17_04 = $g_desarrollo->g1_17_04 ? "checked" : "";
$g1_18_01 = $g_desarrollo->g1_18_01 ? "checked" : ""; $g1_18_02 = $g_desarrollo->g1_18_02 ? "checked" : ""; $g1_18_03 = $g_desarrollo->g1_18_03 ? "checked" : ""; $g1_18_04 = $g_desarrollo->g1_18_04 ? "checked" : "";
$g1_19_01 = $g_desarrollo->g1_19_01 ? "checked" : ""; $g1_19_02 = $g_desarrollo->g1_19_02 ? "checked" : ""; $g1_19_03 = $g_desarrollo->g1_19_03 ? "checked" : ""; $g1_19_04 = $g_desarrollo->g1_19_04 ? "checked" : "";

?>

<h6>F. Verificación Visual - Estado del Activo</h6>

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
                <td>F.1 ¿Tiene Alarmas activas?</td>
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
                    <div class="input-group input-group-sm mb-2">
                        <input type="text" class="form-control form-control-sm" placeholder="Describa la alarma" id="f1_01_03" value="<?php echo $f1_01_03 ?>">
                    </div>
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
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>
        <h6>G.1	Verificaciones técnicas</h6>
        <table class="table mb-0">
            <tbody>
            <tr>
                <td>G.1.1 Verificación indicadores luminosos (leds, focos) en el tablero de Control.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">Funcional</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option1" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">En Falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_01_03" value="<?php echo $g1_01_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.2 Verificación funcionalidad medidores panel de control</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">Funcional</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option1" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">En Falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_02_03" value="<?php echo $g1_02_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.3 Verificación estado sistemas de protección</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option1" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">En Falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_03_03" value="<?php echo $g1_03_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.4 Verificación estado conexiones sistemas puesto a tierra</td>
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
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_04_03" value="<?php echo $g1_04_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.5 Verificación estado  fusibles de protección y Relés control</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option1" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">En Falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_05_03" value="<?php echo $g1_05_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.6 Verificación  estado sistema de control automático</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">Funcional</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option1" <?php echo $g1_06_02 ?>>
                        <label class="form-check-label" for="g1_06_02">En Falla</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_06_03" value="<?php echo $g1_06_03 ?>">
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
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

        <h6>G.2	Actividades de mantenimiento</h6>

        <table class="table mb-0">
            <tbody>
            <tr>
                <td>G.2.1 Ajuste de borneras circuito de transferencia, protección y alimentación</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_07_02" value="<?php echo $g1_07_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.2 Ejecución de pruebas manuales swich de transferencia</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_08_02" value="<?php echo $g1_08_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.3 Ejecución Sellado  de Ductos</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_09_02" value="<?php echo $g1_09_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.4 Ejecución  etiquetado de cables de energía</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_01" value="option1" <?php echo $g1_10_01 ?>>
                        <label class="form-check-label" for="g1_10_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_10_02" value="<?php echo $g1_10_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.5 Comparación  Valores medidores analógicos o digitales en el panel de control con Instrumento.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_01" value="option1" <?php echo $g1_11_01 ?>>
                        <label class="form-check-label" for="g1_11_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g1_11_02" value="<?php echo $g1_11_02 ?>">
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
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

        <h6>G.3 Mediciones y Configuraciones</h6>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.1 Registrar valor del Voltímetro </span>
            <input type="text" class="form-control" id="g1_12_01" value="<?php echo $g1_12_01 ?>">
            <span class="input-group-text">(V)</span>

            <span class="input-group-text">Registrar valor de Frecuencia</span>
            <input type="text" class="form-control" id="g1_12_02" value="<?php echo $g1_12_02 ?>">
            <span class="input-group-text">(Hz)</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.2 Registrar valor del Amperímetro</span>
            <input type="text" class="form-control" id="g1_13_01" value="<?php echo $g1_13_01 ?>">
            <span class="input-group-text">(I)</span>
        </div>

        <div>
            <h7>G.3.3 Tiempo de arranque automático y transferencia a carga (Segundos)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">T arranque</span>
            <input type="text" class="form-control" id="g1_14_01" value="<?php echo $g1_14_01 ?>">

            <span class="input-group-text">T transfieren.</span>
            <input type="text" class="form-control" id="g1_14_02" value="<?php echo $g1_14_02 ?>">

        </div>

        <div>
            <h7>G.3.4 Tiempo de Re transferencia automática  y parada (Segundos)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">T retransfer.</span>
            <input type="text" class="form-control" id="g1_15_01" value="<?php echo $g1_15_01 ?>">

            <span class="input-group-text">T parada</span>
            <input type="text" class="form-control" id="g1_15_02" value="<?php echo $g1_15_02 ?>">
        </div>

    </div>
</div>

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


        <h6>G.4 Verificación alarmas: Localmente y  Gestión Remota</h6>
        <table class="table mb-0">
            <tbody>
            <tr>
                <th></th>
                <th colspan="2">Local</th>
                <th colspan="2">Remoto</th>
            </tr>

            <tr>
                <td>G.4.1 Corte AC</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_01" value="option1" <?php echo $g1_16_01 ?>>
                        <label class="form-check-label" for="g1_16_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_02" value="option2" <?php echo $g1_16_02 ?>>
                        <label class="form-check-label" for="g1_16_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_03" value="option1" <?php echo $g1_16_03 ?>>
                        <label class="form-check-label" for="g1_16_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_16_04" value="option2" <?php echo $g1_16_04 ?>>
                        <label class="form-check-label" for="g1_16_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.2 Grupo Electrógeno Encendido</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_01" value="option1" <?php echo $g1_17_01 ?>>
                        <label class="form-check-label" for="g1_17_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_02" value="option2" <?php echo $g1_17_02 ?>>
                        <label class="form-check-label" for="g1_17_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_03" value="option1" <?php echo $g1_17_03 ?>>
                        <label class="form-check-label" for="g1_17_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_17_04" value="option2" <?php echo $g1_17_04 ?>>
                        <label class="form-check-label" for="g1_17_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.3 Bajo Nivel de Combustible</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_01" value="option1" <?php echo $g1_18_01 ?>>
                        <label class="form-check-label" for="g1_18_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_02" value="option2" <?php echo $g1_18_02 ?>>
                        <label class="form-check-label" for="g1_18_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_03" value="option1" <?php echo $g1_18_03 ?>>
                        <label class="form-check-label" for="g1_18_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_04" value="option2" <?php echo $g1_18_04 ?>>
                        <label class="form-check-label" for="g1_18_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.4 Falla General</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_01" value="option1" <?php echo $g1_19_01 ?>>
                        <label class="form-check-label" for="g1_19_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_02" value="option2" <?php echo $g1_19_02 ?>>
                        <label class="form-check-label" for="g1_19_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_03" value="option1" <?php echo $g1_19_03 ?>>
                        <label class="form-check-label" for="g1_19_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_04" value="option2" <?php echo $g1_19_04 ?>>
                        <label class="form-check-label" for="g1_19_04">No</label>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>

    </div>
</div>