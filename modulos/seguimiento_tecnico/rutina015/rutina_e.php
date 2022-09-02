<?php

/** f_fibra **/
$f_fibra = $obj->{'f_fibra'};
//$d_01_01 = $f_fibra->d_01_01; $d_01_02 = $f_fibra->d_01_02;
$f1_01_01 = $f_fibra->f1_01_01; $f1_01_02 = $f_fibra->f1_01_02; $f1_01_03 = $f_fibra->f1_01_03; $f1_01_04 = $f_fibra->f1_01_04; $f1_01_05 = $f_fibra->f1_01_05;
$f1_02_01 = $f_fibra->f1_02_01; $f1_02_02 = $f_fibra->f1_02_02; $f1_02_03 = $f_fibra->f1_02_03; $f1_02_04 = $f_fibra->f1_02_04; $f1_02_05 = $f_fibra->f1_02_05;
$f1_03_01 = $f_fibra->f1_03_01; $f1_03_02 = $f_fibra->f1_03_02; $f1_03_03 = $f_fibra->f1_03_03; $f1_03_04 = $f_fibra->f1_03_04; $f1_03_05 = $f_fibra->f1_03_05;
$f1_04_01 = $f_fibra->f1_04_01; $f1_04_02 = $f_fibra->f1_04_02; $f1_04_03 = $f_fibra->f1_04_03; $f1_04_04 = $f_fibra->f1_04_04;
$f1_05_01 = $f_fibra->f1_05_01; $f1_05_02 = $f_fibra->f1_05_02; $f1_05_03 = $f_fibra->f1_05_03; $f1_05_04 = $f_fibra->f1_05_04;
$f1_06_01 = $f_fibra->f1_06_01; $f1_06_02 = $f_fibra->f1_06_02; $f1_06_03 = $f_fibra->f1_06_03; $f1_06_04 = $f_fibra->f1_06_04;
$f1_07_01 = $f_fibra->f1_07_01; $f1_07_02 = $f_fibra->f1_07_02; $f1_07_03 = $f_fibra->f1_07_03; $f1_07_04 = $f_fibra->f1_07_04;
$f1_08_01 = $f_fibra->f1_08_01; $f1_08_02 = $f_fibra->f1_08_02; $f1_08_03 = $f_fibra->f1_08_03; $f1_08_04 = $f_fibra->f1_08_04;

//$e_01_01 = $d_sectores->e_01_01;
$g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
$g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "checked" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02 ? "checked" : ""; $g2_01_03 = $g_desarrollo_g2->g2_01_03;
$g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "checked" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02 ? "checked" : ""; $g2_02_03 = $g_desarrollo_g2->g2_02_03;
$g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "checked" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? "checked" : ""; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
$g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "checked" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02 ? "checked" : ""; $g2_04_03 = $g_desarrollo_g2->g2_04_03;
$g2_05_01 = $g_desarrollo_g2->g2_05_01 ? "checked" : ""; $g2_05_02 = $g_desarrollo_g2->g2_05_02 ? "checked" : ""; $g2_05_03 = $g_desarrollo_g2->g2_05_03;
$g2_06_01 = $g_desarrollo_g2->g2_06_01 ? "checked" : ""; $g2_06_02 = $g_desarrollo_g2->g2_06_02 ? "checked" : ""; $g2_06_03 = $g_desarrollo_g2->g2_06_03;
$g2_07_01 = $g_desarrollo_g2->g2_07_01 ? "checked" : ""; $g2_07_02 = $g_desarrollo_g2->g2_07_02 ? "checked" : ""; $g2_07_03 = $g_desarrollo_g2->g2_07_03;
$g2_08_01 = $g_desarrollo_g2->g2_08_01 ? "checked" : ""; $g2_08_02 = $g_desarrollo_g2->g2_08_02 ? "checked" : ""; $g2_08_03 = $g_desarrollo_g2->g2_08_03;
$g2_09_01 = $g_desarrollo_g2->g2_09_01 ? "checked" : ""; $g2_09_02 = $g_desarrollo_g2->g2_09_02 ? "checked" : ""; $g2_09_03 = $g_desarrollo_g2->g2_09_03;

?>

<h6>E. Sistema de Transporte FIBRA OPTICA</h6>
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col">
        <div class="card">
            <div class="card-body">

                <div class="col mb-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                        <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                    </div>
                </div>

                <table class="table table-bordered mb-3">
                    <tbody>
                    <tr>
                        <th>N.</th>
                        <th>NE_Origen</th>
                        <th>NE_Destino</th>
                        <th>Modelo equipo FO</th>
                        <th>Puerto ETH en equipo de FO</th>
                        <th>Posición en bandeja ODF</th>
                    </tr>

                    <tr>
                        <td class="col-xl-1">1</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_01_01" value="<?php echo $f1_01_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_01_02" value="<?php echo $f1_01_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_01_03" value="<?php echo $f1_01_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_01_04" value="<?php echo $f1_01_04 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_01_05" value="<?php echo $f1_01_05 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">2</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_02_01" value="<?php echo $f1_02_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_02_02" value="<?php echo $f1_02_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_02_03" value="<?php echo $f1_02_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_02_04" value="<?php echo $f1_02_04 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_02_05" value="<?php echo $f1_02_05 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">3</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_03_01" value="<?php echo $f1_03_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_03_02" value="<?php echo $f1_03_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_03_03" value="<?php echo $f1_03_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_03_04" value="<?php echo $f1_03_04 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_03_05" value="<?php echo $f1_03_05 ?>">
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <table class="table table-bordered mb-3">
                    <tbody>
                    <tr>
                        <th>N.</th>
                        <th>Modelo equipo FO</th>
                        <th>Estado del equipo de Tx</th>
                        <th>Cantidad de puertos RBS</th>
                        <th>Descripción etiquetado de puerto en RBS (UP LINK)</th>
                        <th>Descripción del Servicio</th>
                    </tr>

                    <tr>
                        <td class="col-xl-1">1</td>
                        <td class="col-xl-2">DWDM (Optix OSN1800)</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_04_01" value="<?php echo $f1_04_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_04_02" value="<?php echo $f1_04_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_04_03" value="<?php echo $f1_04_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_04_04" value="<?php echo $f1_04_04 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">2</td>
                        <td class="col-xl-2">FIBRA OSCURA</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_05_01" value="<?php echo $f1_05_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_05_02" value="<?php echo $f1_05_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_05_03" value="<?php echo $f1_05_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_05_04" value="<?php echo $f1_05_04 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">3</td>
                        <td class="col-xl-2">IP NGN (ASR / ATN)</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_06_01" value="<?php echo $f1_06_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_06_02" value="<?php echo $f1_06_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_06_03" value="<?php echo $f1_06_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_06_04" value="<?php echo $f1_06_04 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">4</td>
                        <td class="col-xl-2">Detalle de puertos ETH ópticos</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_07_01" value="<?php echo $f1_07_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_07_02" value="<?php echo $f1_07_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_07_03" value="<?php echo $f1_07_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_07_04" value="<?php echo $f1_07_04 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-1">5</td>
                        <td class="col-xl-2">Puertos opticos en bandeja ODF</td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_08_01" value="<?php echo $f1_08_01 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_08_02" value="<?php echo $f1_08_02 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_08_03" value="<?php echo $f1_08_03 ?>">
                            </div>
                        </td>
                        <td class="col-xl-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="f1_08_04" value="<?php echo $f1_08_04 ?>">
                            </div>
                        </td>
                    </tr>



                    </tbody>
                </table>

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
                <td>E.1 Alarmas Visuales</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_01_01" value="option1" <?php echo $g2_01_01 ?>>
                        <label class="form-check-label" for="g2_01_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_01_02" value="option3" <?php echo $g2_01_02 ?>>
                        <label class="form-check-label" for="g2_01_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_01_03" value="<?php echo $g2_01_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.3	Peinado y proteccion de cruzadas (patch cord)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_02_01" value="option1" <?php echo $g2_02_01 ?>>
                        <label class="form-check-label" for="g2_02_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_02_02" value="option3" <?php echo $g2_02_02 ?>>
                        <label class="form-check-label" for="g2_02_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_02_03" value="<?php echo $g2_02_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.4	Verificacion de etiquetado (patch cord)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_01" value="option1" <?php echo $g2_03_01 ?>>
                        <label class="form-check-label" for="g2_03_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_02" value="option3" <?php echo $g2_03_02 ?>>
                        <label class="form-check-label" for="g2_03_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_03_03" value="<?php echo $g2_03_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.5	Limpieza externa equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_04_01" value="option1" <?php echo $g2_04_01 ?>>
                        <label class="form-check-label" for="g2_04_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_04_02" value="option3" <?php echo $g2_04_02 ?>>
                        <label class="form-check-label" for="g2_04_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_04_03" value="<?php echo $g2_04_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.6	Verificacion visual del cable de FO de ultima milla (acceso)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_05_01" value="option1" <?php echo $g2_05_01 ?>>
                        <label class="form-check-label" for="g2_05_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_05_02" value="option3" <?php echo $g2_05_02 ?>>
                        <label class="form-check-label" for="g2_05_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_05_03" value="<?php echo $g2_05_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.7	Limpieza de puertos ópticos libres (lado equipo)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_06_01" value="option1" <?php echo $g2_06_01 ?>>
                        <label class="form-check-label" for="g2_06_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_06_02" value="option3" <?php echo $g2_06_02 ?>>
                        <label class="form-check-label" for="g2_06_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_06_03" value="<?php echo $g2_06_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.8	Limpieza de puertos ópticos libres (bandeja ODF)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_07_01" value="option1" <?php echo $g2_07_01 ?>>
                        <label class="form-check-label" for="g2_07_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_07_02" value="option3" <?php echo $g2_07_02 ?>>
                        <label class="form-check-label" for="g2_07_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_07_03" value="<?php echo $g2_07_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.9	Sistemado de patch cord</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_08_01" value="option1" <?php echo $g2_08_01 ?>>
                        <label class="form-check-label" for="g2_08_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_08_02" value="option3" <?php echo $g2_08_02 ?>>
                        <label class="form-check-label" for="g2_08_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs."id="g2_08_03" value="<?php echo $g2_08_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>E.9	Tomas fotográficas</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_09_01" value="option1" <?php echo $g2_09_01 ?>>
                        <label class="form-check-label" for="g2_08_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_09_02" value="option3" <?php echo $g2_09_02 ?>>
                        <label class="form-check-label" for="g2_08_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g2_09_03" value="<?php echo $g2_09_03 ?>">
                    </div>
                </td>
            </tr>


        </table>
    </div>
</div>