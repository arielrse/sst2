<?php
$g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
$g3_01_01 = $g_desarrollo_g3->g3_01_01; $g3_01_02 = $g_desarrollo_g3->g3_01_02; $g3_01_03 = $g_desarrollo_g3->g3_01_03; $g3_01_04 = $g_desarrollo_g3->g3_01_04; $g3_01_05 = $g_desarrollo_g3->g3_01_05; $g3_01_06 = $g_desarrollo_g3->g3_01_06; $g3_01_07 = $g_desarrollo_g3->g3_01_07; $g3_01_08 = $g_desarrollo_g3->g3_01_08;
$g3_01_09 = $g_desarrollo_g3->g3_01_09; $g3_01_10 = $g_desarrollo_g3->g3_01_10; $g3_01_11 = $g_desarrollo_g3->g3_01_11; $g3_01_12 = $g_desarrollo_g3->g3_01_12; $g3_01_13 = $g_desarrollo_g3->g3_01_13; $g3_01_14 = $g_desarrollo_g3->g3_01_14; $g3_01_15 = $g_desarrollo_g3->g3_01_15; $g3_01_16 = $g_desarrollo_g3->g3_01_16;
$g3_01_17 = $g_desarrollo_g3->g3_01_17; $g3_01_18 = $g_desarrollo_g3->g3_01_18; $g3_01_19 = $g_desarrollo_g3->g3_01_19; $g3_01_20 = $g_desarrollo_g3->g3_01_20; $g3_01_21 = $g_desarrollo_g3->g3_01_21; $g3_01_22 = $g_desarrollo_g3->g3_01_22; $g3_01_23 = $g_desarrollo_g3->g3_01_23; $g3_01_24 = $g_desarrollo_g3->g3_01_24;

$g3_02_01 = $g_desarrollo_g3->g3_02_01; $g3_02_02 = $g_desarrollo_g3->g3_02_02;
$g3_03_01 = $g_desarrollo_g3->g3_03_01; $g3_03_02 = $g_desarrollo_g3->g3_03_02;
$g3_04_01 = $g_desarrollo_g3->g3_04_01; $g3_04_02 = $g_desarrollo_g3->g3_04_02;
$g3_05_01 = $g_desarrollo_g3->g3_05_01;

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h6>G.3	Mediciones y configuraciones durante y/o después del mantenimiento</h6>
        <h7>G.3.1 Medición de  voltajes y corriente paneles solares</h7>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">V Vdc</th>
                                <th scope="col">I  A</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-xl-4">Cadena 1</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_01" value="<?php echo $g3_01_01 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_02" value="<?php echo $g3_01_02 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 2</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_03" value="<?php echo $g3_01_03 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_04" value="<?php echo $g3_01_04 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 3</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_05" value="<?php echo $g3_01_05 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_06" value="<?php echo $g3_01_06 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 4</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_07" value="<?php echo $g3_01_07 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_08" value="<?php echo $g3_01_08 ?>">
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
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">V(Vdc)</th>
                                <th scope="col">I(A)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-xl-4">Array 1</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_09" value="<?php echo $g3_01_09 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_10" value="<?php echo $g3_01_10 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 2</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_11" value="<?php echo $g3_01_11 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_12" value="<?php echo $g3_01_12 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 3</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_13" value="<?php echo $g3_01_13 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_14" value="<?php echo $g3_01_14 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 4</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_15" value="<?php echo $g3_01_15 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_16" value="<?php echo $g3_01_16 ?>">
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
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">V(Vdc)</th>
                                <th scope="col">I(A)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-xl-4">Array 1</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_17" value="<?php echo $g3_01_17 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_18" value="<?php echo $g3_01_18 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 2</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_19" value="<?php echo $g3_01_19 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_20" value="<?php echo $g3_01_20 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 3</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_21" value="<?php echo $g3_01_21 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_22" value="<?php echo $g3_01_22 ?>">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="col-xl-4">Array 4</td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_23" value="<?php echo $g3_01_23 ?>">
                                    </div>
                                </td>
                                <td class="col-xl-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" id="g3_01_24" value="<?php echo $g3_01_24 ?>">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.2	Medida de Corriente (DC) PVDU</span>
            <input type="text" class="form-control" id="g3_02_01" value="<?php echo $g3_02_01 ?>">
            <span class="input-group-text">I</span>
            <span class="input-group-text">Medida  de voltaje DC. entrada PVDU</span>
            <input type="text" class="form-control" id="g3_02_02" value="<?php echo $g3_02_02 ?>">
            <span class="input-group-text">V</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.3	Medida Pico de  corriente DC. Recarga</span>
            <input type="text" class="form-control" id="g3_03_01" value="<?php echo $g3_03_01 ?>">
            <span class="input-group-text">I</span>
            <span class="input-group-text">Corriente DC salida  display ESS500</span>
            <input type="text" class="form-control" id="g3_03_02" value="<?php echo $g3_03_02 ?>">
            <span class="input-group-text">I</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.4	Voltaje DC salida Display  ESS500</span>
            <input type="text" class="form-control" id="g3_04_01" value="<?php echo $g3_04_01 ?>">
            <span class="input-group-text">V</span>
            <span class="input-group-text">Capacidad de baterías  display ESS500</span>
            <input type="text" class="form-control" id="g3_04_02" value="<?php echo $g3_04_02 ?>">
            <span class="input-group-text">Ah.</span>
        </div>

        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">G.3.5	Coeficiente de Carga Baterías display ESS500</span>
            <input type="text" class="form-control" id="g3_05_01" value="<?php echo $g3_05_01 ?>">
            <span class="input-group-text"></span>
            <span class="input-group-text"></span>
            <span class="input-group-text"></span>
        </div>

    </div>
</div>
