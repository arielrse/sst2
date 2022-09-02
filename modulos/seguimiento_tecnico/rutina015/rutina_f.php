<?php

/** f_satelital_f2 **/

$f_satelital_f2 = $obj->{'f_satelital_f2'};
//$d_01_01 = $f_satelital_f2->d_01_01; $d_01_02 = $f_satelital_f2->d_01_02;
$f2_01_01 = $f_satelital_f2->f2_01_01; $f2_01_02 = $f_satelital_f2->f2_01_02;
$f2_02_01 = $f_satelital_f2->f2_02_01; $f2_02_02 = $f_satelital_f2->f2_02_02;
$f2_03_01 = $f_satelital_f2->f2_03_01; $f2_03_02 = $f_satelital_f2->f2_03_02;
$f2_04_01 = $f_satelital_f2->f2_04_01; $f2_04_02 = $f_satelital_f2->f2_04_02;
$f2_05_01 = $f_satelital_f2->f2_05_01; $f2_05_02 = $f_satelital_f2->f2_05_02;
$f2_06_01 = $f_satelital_f2->f2_06_01; $f2_06_02 = $f_satelital_f2->f2_06_02;
$f2_07_01 = $f_satelital_f2->f2_07_01; $f2_07_02 = $f_satelital_f2->f2_07_02;
$f2_08_01 = $f_satelital_f2->f2_08_01; $f2_08_02 = $f_satelital_f2->f2_08_02;
$f2_09_01 = $f_satelital_f2->f2_09_01;
$f2_10_01 = $f_satelital_f2->f2_10_01;
$f2_11_01 = $f_satelital_f2->f2_11_01;
$f2_12_01 = $f_satelital_f2->f2_12_01;
$f2_13_01 = $f_satelital_f2->f2_13_01;
$f2_14_01 = $f_satelital_f2->f2_14_01;
$f2_15_01 = $f_satelital_f2->f2_15_01;
$f2_16_01 = $f_satelital_f2->f2_16_01;
/** g_desarrollo_g3 **/
$g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
//$g2_01_01 = $g_desarrollo_g3->g1_01_01 ? "checked" : ""; $d_01_02 = $g_desarrollo_g3->g1_01_01;
$g3_01_01 = $g_desarrollo_g3->g3_01_01 ? "checked" : "";  $g3_01_02 = $g_desarrollo_g3->g3_01_02 ? "checked" : ""; $g3_01_03 = $g_desarrollo_g3->g3_01_03;
$g3_02_01 = $g_desarrollo_g3->g3_02_01 ? "checked" : "";  $g3_02_02 = $g_desarrollo_g3->g3_02_02 ? "checked" : ""; $g3_02_03 = $g_desarrollo_g3->g3_02_03;
$g3_03_01 = $g_desarrollo_g3->g3_03_01 ? "checked" : "";  $g3_03_02 = $g_desarrollo_g3->g3_03_02 ? "checked" : ""; $g3_03_03 = $g_desarrollo_g3->g3_03_03;
$g3_04_01 = $g_desarrollo_g3->g3_04_01 ? "checked" : "";  $g3_04_02 = $g_desarrollo_g3->g3_04_02 ? "checked" : ""; $g3_04_03 = $g_desarrollo_g3->g3_04_03;
$g3_05_01 = $g_desarrollo_g3->g3_05_01 ? "checked" : "";  $g3_05_02 = $g_desarrollo_g3->g3_05_02 ? "checked" : ""; $g3_05_03 = $g_desarrollo_g3->g3_05_03;
$g3_06_01 = $g_desarrollo_g3->g3_06_01 ? "checked" : "";  $g3_06_02 = $g_desarrollo_g3->g3_06_02 ? "checked" : ""; $g3_06_03 = $g_desarrollo_g3->g3_06_03;
$g3_07_01 = $g_desarrollo_g3->g3_07_01 ? "checked" : "";  $g3_07_02 = $g_desarrollo_g3->g3_07_02 ? "checked" : ""; $g3_07_03 = $g_desarrollo_g3->g3_07_03;

?>

<h6>F. Sistema de Transporte SATELITAL</h6>

<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <th>Item</th>
                                <th>Marca</th>
                                <th>Estado</th>
                            </tr>
                            <tr>
                                <td class="col-xl-6">Modem</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_01_01" value="<?php echo $f2_01_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_01_02" value="<?php echo $f2_01_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Fuente de alimentación modem</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_02_01" value="<?php echo $f2_02_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_02_02" value="<?php echo $f2_02_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">BUC</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_03_01" value="<?php echo $f2_03_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_03_02" value="<?php echo $f2_03_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">LNB</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_04_01" value="<?php echo $f2_04_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_04_02" value="<?php echo $f2_04_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Antena Parabólica</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_05_01" value="<?php echo $f2_05_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_05_02" value="<?php echo $f2_05_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Inversor de -48 v a 220 v</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_06_01" value="<?php echo $f2_06_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_06_02" value="<?php echo $f2_06_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Cable coaxial TX/RX</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_07_01" value="<?php echo $f2_07_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_07_02" value="<?php echo $f2_07_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Conectores F</td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_08_01" value="<?php echo $f2_08_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_08_02" value="<?php echo $f2_08_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <th>Datos Técnicos de Funcionamiento</th>
                                <th>Lectura</th>
                            </tr>
                            <tr>
                                <td class="col-xl-6">Potencia de transmisión</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_09_01" value="<?php echo $f2_09_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Nivel de apuntamiento/enlace</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_10_01" value="<?php echo $f2_10_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Nivel croospol</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_11_01" value="<?php echo $f2_11_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Up (kbps)</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_12_01" value="<?php echo $f2_12_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Down (kbps)</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_13_01" value="<?php echo $f2_13_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Configuración</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_14_01" value="<?php echo $f2_14_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Azimut</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_15_01" value="<?php echo $f2_15_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-6">Elevación</td>
                                <td class="col-xl-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="f2_16_01" value="<?php echo $f2_16_01 ?>">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
            </div>
        </div>
        <table class="table">
            <tr>
                <th colspan="4">Desarrollo de Rutina de Mantenimiento</th>
            </tr>

            <tr>
                <td>F.1 Verificacion peinado de cables en antena y etiquetado</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_01_01" value="option1" <?php echo $g3_01_01 ?>>
                        <label class="form-check-label" for="g3_01_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_01_02" value="option3" <?php echo $g3_01_02 ?>>
                        <label class="form-check-label" for="g3_01_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_01_03" value="<?php echo $g3_01_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.2 Verificacion y Sellado de Conectores F</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_02_01" value="option1" <?php echo $g3_02_01 ?>>
                        <label class="form-check-label" for="g3_02_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_02_02" value="option3" <?php echo $g3_02_02 ?>>
                        <label class="form-check-label" for="g3_02_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_02_03" value="<?php echo $g3_02_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.3 Verificacion y Sellado de FEEDER</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_03_01" value="option1" <?php echo $g3_03_01 ?>>
                        <label class="form-check-label" for="g3_03_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_03_02" value="option3" <?php echo $g3_03_02 ?>>
                        <label class="form-check-label" for="g3_03_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_03_03" value="<?php echo $g3_03_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.4 Verificacion y ajuste de conexiones de aterramiento</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_04_01" value="option1" <?php echo $g3_04_01 ?>>
                        <label class="form-check-label" for="g3_04_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_04_02" value="option3" <?php echo $g3_04_02 ?>>
                        <label class="form-check-label" for="g3_04_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_04_03" value="<?php echo $g3_04_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.5	Verificacion de estado de loza de antena</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_05_01" value="option1" <?php echo $g3_05_01 ?>>
                        <label class="form-check-label" for="g3_05_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_05_02" value="option3" <?php echo $g3_05_02 ?>>
                        <label class="form-check-label" for="g3_05_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_05_03" value="<?php echo $g3_05_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.6 Verificacion de estado de ductos de cableado</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_06_01" value="option1" <?php echo $g3_06_01 ?>>
                        <label class="form-check-label" for="g3_06_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_06_02" value="option3" <?php echo $g3_06_02 ?>>
                        <label class="form-check-label" for="g3_06_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_06_03" value="<?php echo $g3_06_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>F.5 Verificacion de linea de vista al satelite</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_07_01" value="option1" <?php echo $g3_07_01 ?>>
                        <label class="form-check-label" for="g3_07_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g3_07_02" value="option3" <?php echo $g3_07_02 ?>>
                        <label class="form-check-label" for="g3_07_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g3_07_03" value="<?php echo $g3_07_03 ?>">
                    </div>
                </td>
            </tr>


        </table>
    </div>
</div>