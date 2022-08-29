<?php
$g_desarrollo_g3 = $obj->{'g_desarrollo_g3'};
$g3_01_01 = $g_desarrollo_g3->g3_01_01;
$g3_02_01 = $g_desarrollo_g3->g3_02_01;
$g3_03_01 = $g_desarrollo_g3->g3_03_01;
$g3_04_01 = $g_desarrollo_g3->g3_04_01;
$g3_05_01 = $g_desarrollo_g3->g3_05_01;
$g3_06_01 = $g_desarrollo_g3->g3_06_01;
$g3_07_01 = $g_desarrollo_g3->g3_07_01;
$g3_08_01 = $g_desarrollo_g3->g3_08_01;
$g3_09_01 = $g_desarrollo_g3->g3_09_01;
$g3_10_01 = $g_desarrollo_g3->g3_10_01;
$g3_11_01 = $g_desarrollo_g3->g3_11_01; $g3_11_02 = $g_desarrollo_g3->g3_11_02; $g3_11_03 = $g_desarrollo_g3->g3_11_03; $g3_11_04 = $g_desarrollo_g3->g3_11_04; $g3_11_05 = $g_desarrollo_g3->g3_11_05; $g3_11_06 =  $g_desarrollo_g3->g3_11_06;
$g3_12_01 = $g_desarrollo_g3->g3_12_01; $g3_12_02 = $g_desarrollo_g3->g3_12_02; $g3_12_03 = $g_desarrollo_g3->g3_12_03; $g3_12_04 = $g_desarrollo_g3->g3_12_04; $g3_12_05 = $g_desarrollo_g3->g3_12_05;
$g3_13_01 = $g_desarrollo_g3->g3_13_01; $g3_13_02 = $g_desarrollo_g3->g3_13_02; $g3_13_03 = $g_desarrollo_g3->g3_13_03; $g3_13_04 = $g_desarrollo_g3->g3_13_04; $g3_13_05 = $g_desarrollo_g3->g3_13_05;
$g3_14_01 = $g_desarrollo_g3->g3_14_01; $g3_14_02 = $g_desarrollo_g3->g3_14_02; $g3_14_03 = $g_desarrollo_g3->g3_14_03;
$g3_15_01 = $g_desarrollo_g3->g3_15_01; $g3_15_02 = $g_desarrollo_g3->g3_15_02;
$g3_16_01 = $g_desarrollo_g3->g3_16_01; $g3_16_02 = $g_desarrollo_g3->g3_16_02;
$g3_17_01 = $g_desarrollo_g3->g3_17_01; $g3_17_02 = $g_desarrollo_g3->g3_17_02;
$g3_18_01 = $g_desarrollo_g3->g3_18_01; $g3_18_02 = $g_desarrollo_g3->g3_18_02;
$g3_19_01 = $g_desarrollo_g3->g3_19_01; $g3_19_02 = $g_desarrollo_g3->g3_19_02; $g3_19_03 = $g_desarrollo_g3->g3_19_03; $g3_19_04 =  $g_desarrollo_g3->g3_19_04;
$g3_20_01 = $g_desarrollo_g3->g3_20_01; $g3_20_02 = $g_desarrollo_g3->g3_20_02; $g3_20_03 = $g_desarrollo_g3->g3_20_03 ? "checked" : "";
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

        <h6>G.3	Mediciones y configuraciones durante y/o después del mantenimiento</h6>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.1	Temperatura del ambiente con instrumento</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_01_01" value="<?php echo $g3_01_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.2	Temperatura de retorno con instrumento</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_02_01" value="<?php echo $g3_02_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.3	Temperatura de inyección con instrumento</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_03_01" value="<?php echo $g3_03_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.4	Temperatura de retorno registrado por el equipo</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_04_01" value="<?php echo $g3_04_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.5	Temperatura de inyección registrado por el equipo</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_05_01" value="<?php echo $g3_05_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.6	Setting de temperatura en el equipo</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_06_01" value="<?php echo $g3_06_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">°C</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.7	Setting de humedad relativa</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_07_01" value="<?php echo $g3_07_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">%HR</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.8	Medición de humedad relativa registrado por el equipo</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_08_01" value="<?php echo $g3_08_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">%HR</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.9	Medición de alta presión con instrumento</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_09_01" value="<?php echo $g3_09_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">PSI</label>
            </div>
        </div>

        <div class="input-group input-group-sm mb-2">
            <h7 class="mb-0">G.3.10	Medición de baja presión con instrumento</h7>
            <div class="form-check form-check-inline">
                <input type="text" class="form-control" id="g3_10_01" value="<?php echo $g3_10_01 ?>">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">PSI</label>
            </div>
        </div>



        <div>
            <h7 class="mb-0">G.3.11	Medición de tensión en el equipo (V)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1-N</span>
            <input type="text" class="form-control" id="g3_11_01" value="<?php echo $g3_11_01?>">

            <span class="input-group-text">L2-N</span>
            <input type="text" class="form-control" id="g3_11_02" value="<?php echo $g3_11_02?>">

            <span class="input-group-text">L3-N</span>
            <input type="text" class="form-control" id="g3_11_03" value="<?php echo $g3_11_03?>">

            <span class="input-group-text">L1-L2</span>
            <input type="text" class="form-control" id="g3_11_04" value="<?php echo $g3_11_04?>">

            <span class="input-group-text">L1-L3</span>
            <input type="text" class="form-control" id="g3_11_05" value="<?php echo $g3_11_05?>">

            <span class="input-group-text">L2-L2</span>
            <input type="text" class="form-control" id="g3_11_06" value="<?php echo $g3_11_06?>">


        </div>

        <div>
            <h7 class="mb-0">G.3.12	Medición de corriente de operación sin compresor (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_12_01" value="<?php echo $g3_12_01?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_12_02" value="<?php echo $g3_12_02?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_12_03" value="<?php echo $g3_12_03?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g3_12_04" value="<?php echo $g3_12_04?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g3_12_05" value="<?php echo $g3_12_05?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.13	Medición de corriente de operación con compresor (A) LA</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_13_01" value="<?php echo $g3_13_01?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_13_02" value="<?php echo $g3_13_02?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_13_03" value="<?php echo $g3_13_03?>">

            <span class="input-group-text">N</span>
            <input type="text" class="form-control" id="g3_13_04" value="<?php echo $g3_13_04?>">

            <span class="input-group-text">PE</span>
            <input type="text" class="form-control" id="g3_13_05" value="<?php echo $g3_13_05?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.14	Medición de pico de corriente del compresor (A)  LRA</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">L1</span>
            <input type="text" class="form-control" id="g3_14_01" value="<?php echo $g3_14_01?>">

            <span class="input-group-text">L2</span>
            <input type="text" class="form-control" id="g3_14_02" value="<?php echo $g3_14_02?>">

            <span class="input-group-text">L3</span>
            <input type="text" class="form-control" id="g3_14_03" value="<?php echo $g3_14_03?>">

        </div>

        <div>
            <h7 class="mb-0">G.3.15	Medición de tensión en el transformador (V)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">Entrada</span>
            <input type="text" class="form-control" id="g3_15_01" value="<?php echo $g3_15_01?>">

            <span class="input-group-text">Salida</span>
            <input type="text" class="form-control" id="g3_15_02" value="<?php echo $g3_15_02?>">
        </div>

        <div>
            <h7 class="mb-0">G.3.16	Medición de corriente  y voltaje de trabajo de Motor ventilador MV1 (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_16_01" value="<?php echo $g3_16_01?>">
            <span class="input-group-text">A</span>

            <input type="text" class="form-control" id="g3_16_02" value="<?php echo $g3_16_02?>">
            <span class="input-group-text">V</span>
        </div>

        <div>
            <h7 class="mb-0">G.3.17	Medición de corriente  y voltaje de trabajo de Motor ventilador MV2 (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_17_01" value="<?php echo $g3_17_01?>">
            <span class="input-group-text">A</span>

            <input type="text" class="form-control" id="g3_17_02" value="<?php echo $g3_17_02?>">
            <span class="input-group-text">V</span>
        </div>

        <div>
            <h7 class="mb-0">G.3.18	Medición de corriente  y voltaje de trabajo de Motor ventilador MV3 (A)</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_18_01" value="<?php echo $g3_18_01?>">
            <span class="input-group-text">A</span>

            <input type="text" class="form-control" id="g3_18_02" value="<?php echo $g3_18_02?>">
            <span class="input-group-text">V</span>
        </div>

        <div>
            <h7 class="mb-0">G.3.19	Medición de Capacitores en motores ventiladores</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <span class="input-group-text">MV1</span>
            <input type="text" class="form-control" id="g3_19_01" value="<?php echo $g3_19_01?>">
            <span class="input-group-text">uf</span>

            <span class="input-group-text">MV2</span>
            <input type="text" class="form-control"id="g3_19_02" value="<?php echo $g3_19_02?>">
            <span class="input-group-text">uf</span>

            <span class="input-group-text">MV3</span>
            <input type="text" class="form-control" id="g3_19_03" value="<?php echo $g3_19_03?>">
            <span class="input-group-text">uf</span>

            <input type="text" class="form-control" id="g3_19_04" value="<?php echo $g3_19_04?>">
            <span class="input-group-text">registro voltaje nominal</span>
        </div>

        <div>
            <h7 class="mb-0">G.3.20	Medición de Capacitor en el compresor</h7>
        </div>
        <div class="input-group input-group-sm mb-2">
            <input type="text" class="form-control" id="g3_20_01" value="<?php echo $g3_20_01?>">
            <span class="input-group-text">uf</span>

            <input type="text" class="form-control" id="g3_20_02" value="<?php echo $g3_20_02?>">
            <span class="input-group-text">registro de voltaje nominal</span>

            <div class="input-group-text">
                <input class="form-check-input" type="checkbox" id="g3_20_03" <?php echo $g3_20_03?>>
            </div>
            <span class="input-group-text">N/A</span>
        </div>

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

    </div>
</div>