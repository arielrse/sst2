<?php
$g_desarrollo = $obj->{'g_desarrollo'};
$f1_01_01 = $g_desarrollo->f1_01_01 ? "checked" : ""; $f1_01_02 = $g_desarrollo->f1_01_02 ? "checked" : ""; $f1_01_03 = $g_desarrollo->f1_01_03;
$g1_01_01 = $g_desarrollo->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo->g1_01_03;
$g1_02_01 = $g_desarrollo->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo->g1_02_03;
$g1_03_01 = $g_desarrollo->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo->g1_03_03;
$g1_04_01 = $g_desarrollo->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo->g1_04_03;
$g1_05_01 = $g_desarrollo->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo->g1_05_03;
$g1_06_01 = $g_desarrollo->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo->g1_06_03;
$g1_07_01 = $g_desarrollo->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo->g1_07_02;
$g1_08_01 = $g_desarrollo->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo->g1_08_02;
$g1_09_01 = $g_desarrollo->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo->g1_09_02 ? "checked" : ""; $g1_09_03 = $g_desarrollo->g1_09_03;
$g1_10_01 = $g_desarrollo->g1_10_01 ? "checked" : ""; $g1_10_02 = $g_desarrollo->g1_10_02;
$g1_11_01 = $g_desarrollo->g1_11_01 ? "checked" : ""; $g1_11_02 = $g_desarrollo->g1_11_02 ? "checked" : ""; $g1_11_03 = $g_desarrollo->g1_11_03;
$g1_12_01 = $g_desarrollo->g1_12_01 ? "checked" : ""; $g1_12_02 = $g_desarrollo->g1_12_02 ? "checked" : ""; $g1_12_03 = $g_desarrollo->g1_12_03;
$g1_13_01 = $g_desarrollo->g1_13_01;                  $g1_13_02 = $g_desarrollo->g1_13_02;                  $g1_13_03 = $g_desarrollo->g1_13_03;
$g1_14_01 = $g_desarrollo->g1_14_01;                  $g1_14_02 = $g_desarrollo->g1_14_02;                  $g1_14_03 = $g_desarrollo->g1_14_03;
$g1_15_01 = $g_desarrollo->g1_15_01;
$g1_16_01 = $g_desarrollo->g1_16_01;                  $g1_16_02 = $g_desarrollo->g1_16_02;
$g1_17_01 = $g_desarrollo->g1_17_01;                  $g1_17_02 = $g_desarrollo->g1_17_02;
$g1_18_01 = $g_desarrollo->g1_18_01 ? "checked" : ""; $g1_18_02 = $g_desarrollo->g1_18_02 ? "checked" : "";
$g1_19_01 = $g_desarrollo->g1_19_01 ? "checked" : ""; $g1_19_02 = $g_desarrollo->g1_19_02 ? "checked" : "";
$g1_20_01 = $g_desarrollo->g1_20_01;
$g1_21_01 = $g_desarrollo->g1_21_01 ? "checked" : ""; $g1_21_02 = $g_desarrollo->g1_21_02 ? "checked" : ""; $g1_21_03 = $g_desarrollo->g1_21_03 ? "checked" : ""; $g1_21_04 = $g_desarrollo->g1_21_04 ? "checked" : "";
$g1_22_01 = $g_desarrollo->g1_22_01 ? "checked" : ""; $g1_22_02 = $g_desarrollo->g1_22_02 ? "checked" : ""; $g1_22_03 = $g_desarrollo->g1_22_03 ? "checked" : ""; $g1_22_04 = $g_desarrollo->g1_22_04 ? "checked" : "";
$g1_23_01 = $g_desarrollo->g1_23_01 ? "checked" : ""; $g1_23_02 = $g_desarrollo->g1_23_02 ? "checked" : ""; $g1_23_03 = $g_desarrollo->g1_23_03 ? "checked" : ""; $g1_23_04 = $g_desarrollo->g1_23_04 ? "checked" : "";


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
                <td>F.1 Sistema en Baja Tensión Operativo</td>
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
                        <input type="text" class="form-control form-control-sm" id="f1_01_03" placeholder="Describa la alarma" value="<?php echo $f1_01_03 ?>">
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
        <table class="table">
            <tbody>
            <tr>
                <td>G.1.1 Verificación estado de cables AC de alimentación</td>
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
                <td>G.1.2 Verificación estado de cables DC de alimentación</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option1" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">Deteriorado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_02_03" placeholder="Obs." value="<?php echo $g1_02_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.3 Verificación ordenado y peinado cables AC</td>
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
                <td>G.1.4 Verificación correcta instalación de módulos PDU</td>
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
                <td>G.1.5 Verificación Correcta de pantalla y teclas de funcionamiento</td>
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
                    <input type="text" class="form-control form-control-sm" id="g1_05_03" placeholder="Obs." value="<?php echo $g1_05_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.1.6 Verificar el estado del cable de tierra y terminales del equipo</td>
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
        <table class="table">
            <tbody>
            <tr>
                <td>G.2.1 Pruebas de funcionalidad térmicos de habilitación</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_07_02" placeholder="Obs." value="<?php echo $g1_07_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.2 Pruebas de funcionalidad  automática</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_08_02" placeholder="Obs." value="<?php echo $g1_08_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.3 Etiquetado  correcto de interruptores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option1" <?php echo $g1_09_02 ?>>
                        <label class="form-check-label" for="g1_09_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_09_03" placeholder="Obs." value="<?php echo $g1_09_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.4 Ajuste de borneras en general</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_10_01" value="option1" <?php echo $g1_10_01 ?>>
                        <label class="form-check-label" for="g1_10_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_10_02" placeholder="Obs." value="<?php echo $g1_10_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.5 Reemplazo de terminales mal instalados</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_01" value="option1" <?php echo $g1_11_01 ?>>
                        <label class="form-check-label" for="g1_11_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_11_02" value="option1" <?php echo $g1_11_02 ?>>
                        <label class="form-check-label" for="g1_11_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_11_03" placeholder="Obs." value="<?php echo $g1_11_03 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.6 Ajuste de conexiones sistema puesta a tierra del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_01" value="option1" <?php echo $g1_12_01 ?>>
                        <label class="form-check-label" for="g1_12_01">No es necesario</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_12_02" value="option1" <?php echo $g1_12_02 ?>>
                        <label class="form-check-label" for="g1_12_02">Realizado</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g1_12_03" placeholder="Obs." value="<?php echo $g1_12_03 ?>">
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

        <div><h7>G.3.1 Registrar voltaje  AC de entrada</h7></div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1-N</span>
            <input type="text" class="form-control" id="g1_13_01" value="<?php echo $g1_13_01 ?>">

            <span class="input-group-text">L2-N</span>
            <input type="text" class="form-control" id="g1_13_02" value="<?php echo $g1_13_02 ?>">

            <span class="input-group-text">L3-N</span>
            <input type="text" class="form-control" id="g1_13_03" value="<?php echo $g1_13_03 ?>">

        </div>

        <div><h7>G.3.2 Registrar de la corriente AC de entrada</h7></div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g1_14_01" value="<?php echo $g1_14_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g1_14_02" value="<?php echo $g1_14_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g1_14_03" value="<?php echo $g1_14_03 ?>">

        </div>


        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.3 Frecuencia de entrada AC</span>
            <input type="text" class="form-control" id="g1_15_01" value="<?php echo $g1_15_01 ?>">
            <span class="input-group-text">Hz</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.4 Registro del voltaje DC del banco de baterías</span>
            <input type="text" class="form-control" id="g1_16_01" value="<?php echo $g1_16_01 ?>">
            <span class="input-group-text">V</span>

            <span class="input-group-text">Registro del voltaje  AC a la salida</span>
            <input type="text" class="form-control" id="g1_16_02" value="<?php echo $g1_16_02 ?>">
            <span class="input-group-text">A</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.5 Registro de la corriente DC de salida</span>
            <input type="text" class="form-control" id="g1_17_01" value="<?php echo $g1_17_01 ?>">
            <span class="input-group-text">A</span>

            <span class="input-group-text">Registro de la corriente AC a la salida</span>
            <input type="text" class="form-control" id="g1_17_02" value="<?php echo $g1_17_02 ?>">
            <span class="input-group-text">A</span>
        </div>


        <table class="table">
            <tbody>

            <tr>
                <td>G.3.6 Verificar y controlar la distribución de AC  UPS en tableros de la estación.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_01" value="option1" <?php echo $g1_18_01 ?>>
                        <label class="form-check-label" for="g1_18_01">Equilibrado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_18_02" value="option3" <?php echo $g1_18_02 ?>>
                        <label class="form-check-label" for="g1_18_02">Desequilibrado</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.3.7 Revisión de sobrecalentamiento del cableado en AC y DC.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_01" value="option1" <?php echo $g1_19_01 ?>>
                        <label class="form-check-label" for="g1_19_01">Normal</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_19_02" value="option3" <?php echo $g1_19_02 ?>>
                        <label class="form-check-label" for="g1_19_02">Caliente</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Porcentaje de carga Pu/Pn</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-control" type="text" id="g1_20_01" value="<?php echo $g1_20_01 ?>">
                    </div>
                </td>
                <td>%</td>
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

        <h6>G.4	Verificación alarmas: Localmente y  Gestión Remota</h6>
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
                        <input class="form-check-input" type="checkbox" id="g1_21_01" value="option1" <?php echo $g1_21_01 ?>>
                        <label class="form-check-label" for="g1_21_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_21_02" value="option2" <?php echo $g1_21_02 ?>>
                        <label class="form-check-label" for="g1_21_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_21_03" value="option1" <?php echo $g1_21_03 ?>>
                        <label class="form-check-label" for="g1_21_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_21_04" value="option2" <?php echo $g1_21_04 ?>>
                        <label class="form-check-label" for="g1_21_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.2 Baterias en Descarga</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_22_01" value="option1" <?php echo $g1_22_01 ?>>
                        <label class="form-check-label" for="g1_22_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_22_02" value="option2" <?php echo $g1_22_02 ?>>
                        <label class="form-check-label" for="g1_22_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_22_03" value="option1" <?php echo $g1_22_03 ?>>
                        <label class="form-check-label" for="g1_22_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_22_04" value="option2" <?php echo $g1_22_04 ?>>
                        <label class="form-check-label" for="g1_22_04">No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>G.4.3 Falla Modulo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_23_01" value="option1" <?php echo $g1_23_01 ?>>
                        <label class="form-check-label" for="g1_23_01">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_23_02" value="option2" <?php echo $g1_23_02 ?>>
                        <label class="form-check-label" for="g1_23_02">No</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_23_03" value="option1" <?php echo $g1_23_03 ?>>
                        <label class="form-check-label" for="g1_23_03">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_23_04" value="option2" <?php echo $g1_23_04 ?>>
                        <label class="form-check-label" for="g1_23_04">No</label>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>

    </div>
</div>