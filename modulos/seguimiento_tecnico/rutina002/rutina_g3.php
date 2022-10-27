<?php
$g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};

$g3_01_01 = $g_desarrollo_g3->g3_01_01;
$g3_02_01 = $g_desarrollo_g3->g3_02_01;
$g3_04_01 = $g_desarrollo_g3->g3_04_01; $g3_04_02 = $g_desarrollo_g3->g3_04_02; $g3_04_03 = $g_desarrollo_g3->g3_04_03; $g3_04_04 = $g_desarrollo_g3->g3_04_04; $g3_04_05 = $g_desarrollo_g3->g3_04_05; $g3_04_06 = $g_desarrollo_g3->g3_04_06;
$g3_05_01 = $g_desarrollo_g3->g3_05_01; $g3_05_02 = $g_desarrollo_g3->g3_05_02; $g3_05_03 = $g_desarrollo_g3->g3_05_03; $g3_05_04 = $g_desarrollo_g3->g3_05_04; $g3_05_05 = $g_desarrollo_g3->g3_05_05;
$g3_06_01 = $g_desarrollo_g3->g3_06_01;
$g3_07_01 = $g_desarrollo_g3->g3_07_01;
$g3_08_01 = $g_desarrollo_g3->g3_08_01; $g3_08_02 = $g_desarrollo_g3->g3_08_02; $g3_08_03 = $g_desarrollo_g3->g3_08_03; $g3_08_04 = isset($g_desarrollo_g3->g3_08_04) ? $g_desarrollo_g3->g3_08_04 : "";
$g3_09_01 = $g_desarrollo_g3->g3_09_01; $g3_09_02 = $g_desarrollo_g3->g3_09_02; $g3_09_03 = $g_desarrollo_g3->g3_09_03; $g3_09_04 = isset($g_desarrollo_g3->g3_09_04) ? $g_desarrollo_g3->g3_09_04 : "";
?>

<h6>G.3 Mediciones y configuraciones durante y/o después del mantenimiento</h6>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <table class="table mb-0">
                <tbody>
                <tr>
                    <td>G.3.1 Setting de corriente de carga a un banco de baterías</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="g3_01_01" value="<?php echo $g3_01_01 ?>">
                            </div>
                        </div>

                    </td>
                </tr>

                <tr>
                    <td>G.3.2 Setting de cantidad de bancos de batería</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="g3_02_01" value="<?php echo $g3_02_01 ?>">
                            </div>
                        </div>

                    </td>
                </tr>

                </tbody>
            </table>

        <div>
            <h7>G.3.4 Voltaje de entrada en el equipo AC</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1-N</span>
            <input type="text" class="form-control" id="g3_04_01" value="<?php echo $g3_04_01 ?>">

            <span class="input-group-text">L2-N</span>
            <input type="text" class="form-control" id="g3_04_02" value="<?php echo $g3_04_02 ?>">

            <span class="input-group-text">L3-N</span>
            <input type="text" class="form-control" id="g3_04_03" value="<?php echo $g3_04_03 ?>">

            <span class="input-group-text">L1-L2</span>
            <input type="text" class="form-control" id="g3_04_04" value="<?php echo $g3_04_04 ?>">

            <span class="input-group-text">L1-L3</span>
            <input type="text" class="form-control" id="g3_04_05" value="<?php echo $g3_04_05 ?>">

            <span class="input-group-text">L2-L2</span>
            <input type="text" class="form-control" id="g3_04_06" value="<?php echo $g3_04_06 ?>">


        </div>

        <div>
            <h7 class="mb-0">G.3.5 Corrinte de entrada en el equipo AC</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_05_01" value="<?php echo $g3_05_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_05_02" value="<?php echo $g3_05_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_05_03" value="<?php echo $g3_05_03 ?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g3_05_04" value="<?php echo $g3_05_04 ?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g3_05_05" value="<?php echo $g3_05_05 ?>">
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.6 Voltaje de salida en el equipo DC</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_06_01" value="<?php echo $g3_06_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">VDC</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.7 Corriente total de salida en el equipo DC</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_07_01" value="<?php echo $g3_07_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">A DC</label>
            </div>
        </div>

        <div>
            <h7 class="mb-0">G.3.8 Corriente de carga a un Banco de baterías</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_08_01" value="<?php echo $g3_08_01 ?>">
            <span class="input-group-text">A Banco 1</span>

            <input type="text" class="form-control" id="g3_08_02" value="<?php echo $g3_08_02 ?>">
            <span class="input-group-text">A Banco 2</span>

            <input type="text" class="form-control" id="g3_08_03" value="<?php echo $g3_08_03 ?>">
            <span class="input-group-text">A Banco 3</span>

            <input type="text" class="form-control" id="g3_08_04" value="<?php echo $g3_08_04 ?>">
            <span class="input-group-text">A Banco 4</span>
        </div>

        <div>
            <h7 class="mb-0">G.3.9	Medición de voltaje de flotación de cada banco de baterías</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_09_01" value="<?php echo $g3_09_01 ?>">
            <span class="input-group-text">V DC Banco 1</span>

            <input type="text" class="form-control" id="g3_09_02" value="<?php echo $g3_09_02 ?>">
            <span class="input-group-text">V DC Banco 2</span>

            <input type="text" class="form-control" id="g3_09_03" value="<?php echo $g3_09_03 ?>">
            <span class="input-group-text">V DC Banco 3</span>

            <input type="text" class="form-control" id="g3_09_04" value="<?php echo $g3_09_04 ?>">
            <span class="input-group-text">V DC Banco 4</span>
        </div>


    </div>
</div>