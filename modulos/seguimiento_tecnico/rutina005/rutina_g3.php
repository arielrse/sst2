<?php

$g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
$g3_01_01 = $g_desarrollo_g3->g3_01_01; $g3_01_02 = $g_desarrollo_g3->g3_01_02; $g3_01_03 = $g_desarrollo_g3->g3_01_03; $g3_01_04 = $g_desarrollo_g3->g3_01_04; $g3_01_05 = $g_desarrollo_g3->g3_01_05; $g3_01_06 = $g_desarrollo_g3->g3_01_06;
$g3_02_01 = $g_desarrollo_g3->g3_02_01; $g3_02_02 = $g_desarrollo_g3->g3_02_02; $g3_02_03 = $g_desarrollo_g3->g3_02_03; $g3_02_04 = $g_desarrollo_g3->g3_02_04; $g3_02_05 = $g_desarrollo_g3->g3_02_05;
$g3_03_01 = $g_desarrollo_g3->g3_03_01; $g3_03_02 = $g_desarrollo_g3->g3_03_02; $g3_03_03 = $g_desarrollo_g3->g3_03_03; $g3_03_04 = $g_desarrollo_g3->g3_03_04; $g3_03_05 = $g_desarrollo_g3->g3_03_05;
$g3_04_01 = $g_desarrollo_g3->g3_04_01; $g3_04_02 = $g_desarrollo_g3->g3_04_02; $g3_04_03 = $g_desarrollo_g3->g3_04_03;
$g3_05_01 = $g_desarrollo_g3->g3_05_01; $g3_05_02 = $g_desarrollo_g3->g3_05_02;

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

        <div>
            <h6>G.3	Mediciones y configuraciones durante y/o después del mantenimiento</h6>
        </div>
        <div>
            <h7 class="mb-0">G.3.11	Medición de tensión en el equipo (V)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1-N</span>
            <input type="text" class="form-control" id="g3_01_01" value="<?php echo $g3_01_01 ?>">

            <span class="input-group-text">L2-N</span>
            <input type="text" class="form-control" id="g3_01_02" value="<?php echo $g3_01_02 ?>">

            <span class="input-group-text">L3-N</span>
            <input type="text" class="form-control" id="g3_01_03" value="<?php echo $g3_01_03 ?>">

            <span class="input-group-text">L1-L2</span>
            <input type="text" class="form-control" id="g3_01_04" value="<?php echo $g3_01_04 ?>">

            <span class="input-group-text">L1-L3</span>
            <input type="text" class="form-control" id="g3_01_05" value="<?php echo $g3_01_05 ?>">

            <span class="input-group-text">L2-L2</span>
            <input type="text" class="form-control" id="g3_01_06" value="<?php echo $g3_01_06 ?>">

        </div>

        <div>
            <h7 class="mb-0">G.3.12	Medición de corriente de operación (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_02_01" value="<?php echo $g3_02_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_02_02" value="<?php echo $g3_02_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_02_03" value="<?php echo $g3_02_03 ?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g3_02_04" value="<?php echo $g3_02_04 ?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g3_02_05" value="<?php echo $g3_02_05 ?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.13	Medición de corriente de operación motor (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_03_01" value="<?php echo $g3_03_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_03_02" value="<?php echo $g3_03_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_03_03" value="<?php echo $g3_03_03 ?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g3_03_04" value="<?php echo $g3_03_04 ?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g3_03_05" value="<?php echo $g3_03_05 ?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.14	Medición de pico de corriente del motor (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_04_01" value="<?php echo $g3_04_01 ?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_04_02" value="<?php echo $g3_04_02 ?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_04_03" value="<?php echo $g3_04_03 ?>">

        </div>

        <div>
            <h7 class="mb-0">G.3.19	Medición de Capacitores en motores ventiladores</h7>
        </div>
        <div class="input-group input-group-sm mb-2">

            <span class="input-group-text">MV1</span>
            <input type="text" class="form-control" id="g3_05_01" value="<?php echo $g3_05_01 ?>">
            <span class="input-group-text">uf</span>

            <input type="text" class="form-control" id="g3_05_02" value="<?php echo $g3_05_02 ?>">
            <span class="input-group-text">registro de voltaje nominal</span>

        </div>

    </div>
</div>