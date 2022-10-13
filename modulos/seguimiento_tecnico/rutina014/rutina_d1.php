<?php

/** d_sectores **/
$d_sectores = $obj->{'d_sectores'};

$bts_01_01 = $d_sectores->bts_01_01;
$bts_02_01 = $d_sectores->bts_02_01;
$bts_03_01 = $d_sectores->bts_03_01;
$bts_04_01 = $d_sectores->bts_04_01;
$d1_01_01 = $d_sectores->d1_01_01; $d1_01_02 = $d_sectores->d1_01_02; $d1_01_03 = $d_sectores->d1_01_03; $d1_01_04 = $d_sectores->d1_01_04; $d1_01_05 = $d_sectores->d1_01_05; $d1_01_06 = $d_sectores->d1_01_06; $d1_01_07 = $d_sectores->d1_01_07; $d1_01_08 = $d_sectores->d1_01_08; $d1_01_09 = $d_sectores->d1_01_09; $d1_01_10 = $d_sectores->d1_01_10; $d1_01_11 = $d_sectores->d1_01_11; $d1_01_12 = $d_sectores->d1_01_12; $d1_01_13 = $d_sectores->d1_01_13;
$d1_02_01 = $d_sectores->d1_02_01; $d1_02_02 = $d_sectores->d1_02_02; $d1_02_03 = $d_sectores->d1_02_03; $d1_02_04 = $d_sectores->d1_02_04; $d1_02_05 = $d_sectores->d1_02_05; $d1_02_06 = $d_sectores->d1_02_06; $d1_02_07 = $d_sectores->d1_02_07; $d1_02_08 = $d_sectores->d1_02_08; $d1_02_09 = $d_sectores->d1_02_09; $d1_02_10 = $d_sectores->d1_02_10; $d1_02_11 = $d_sectores->d1_02_11; $d1_02_12 = $d_sectores->d1_02_12; $d1_02_13 = $d_sectores->d1_02_13;
$d1_03_01 = $d_sectores->d1_03_01; $d1_03_02 = $d_sectores->d1_03_02; $d1_03_03 = $d_sectores->d1_03_03; $d1_03_04 = $d_sectores->d1_03_04; $d1_03_05 = $d_sectores->d1_03_05; $d1_03_06 = $d_sectores->d1_03_06; $d1_03_07 = $d_sectores->d1_03_07; $d1_03_08 = $d_sectores->d1_03_08; $d1_03_09 = $d_sectores->d1_03_09; $d1_03_10 = $d_sectores->d1_03_10; $d1_03_11 = $d_sectores->d1_03_11; $d1_03_12 = $d_sectores->d1_03_12; $d1_03_13 = $d_sectores->d1_03_13;
$d1_04_01 = $d_sectores->d1_04_01; $d1_04_02 = $d_sectores->d1_04_02; $d1_04_03 = $d_sectores->d1_04_03; $d1_04_04 = $d_sectores->d1_04_04; $d1_04_05 = $d_sectores->d1_04_05; $d1_04_06 = $d_sectores->d1_04_06; $d1_04_07 = $d_sectores->d1_04_07; $d1_04_08 = $d_sectores->d1_04_08; $d1_04_09 = $d_sectores->d1_04_09; $d1_04_10 = $d_sectores->d1_04_10; $d1_04_11 = $d_sectores->d1_04_11; $d1_04_12 = $d_sectores->d1_04_12; $d1_04_13 = $d_sectores->d1_04_13;
$d1_05_01 = $d_sectores->d1_05_01; $d1_05_02 = $d_sectores->d1_05_02; $d1_05_03 = $d_sectores->d1_05_03; $d1_05_04 = $d_sectores->d1_05_04; $d1_05_05 = $d_sectores->d1_05_05; $d1_05_06 = $d_sectores->d1_05_06; $d1_05_07 = $d_sectores->d1_05_07; $d1_05_08 = $d_sectores->d1_05_08; $d1_05_09 = $d_sectores->d1_05_09; $d1_05_10 = $d_sectores->d1_05_10; $d1_05_11 = $d_sectores->d1_05_11; $d1_05_12 = $d_sectores->d1_05_12; $d1_05_13 = $d_sectores->d1_05_13;
$d1_06_01 = $d_sectores->d1_06_01; $d1_06_02 = $d_sectores->d1_06_02; $d1_06_03 = $d_sectores->d1_06_03; $d1_06_04 = $d_sectores->d1_06_04; $d1_06_05 = $d_sectores->d1_06_05; $d1_06_06 = $d_sectores->d1_06_06; $d1_06_07 = $d_sectores->d1_06_07; $d1_06_08 = $d_sectores->d1_06_08; $d1_06_09 = $d_sectores->d1_06_09; $d1_06_10 = $d_sectores->d1_06_10; $d1_06_11 = $d_sectores->d1_06_11; $d1_06_12 = $d_sectores->d1_06_12; $d1_06_13 = $d_sectores->d1_06_13;


?>

<h6>D. Relevamiento de sectores</h6>

<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
            <div class="col">
                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td class="col-xl-4">Tecnologia</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="bts_01_01" value="<?php echo $bts_01_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-xl-4">Nombre de la BTS</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="bts_02_01" value="<?php echo $bts_02_01 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-bordered mb-0">
                    <tbody>
                    <tr>
                        <td class="col-xl-4">ID Estacion</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="bts_03_01" value="<?php echo $bts_03_01 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="col-xl-4">Configuracion</td>
                        <td class="col-xl-4">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="bts_04_01" value="<?php echo $bts_04_01 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <table class="table table-bordered mb-0">
                <tbody>
                <tr>
                    <th>Sector</th>
                    <th>LOCAL CELL ID</th>
                    <th>Banda MHz</th>
                    <th>Modelo RBS</th>
                    <th>Tipo de Antena</th>
                    <th>Marca antena</th>
                    <th>Modelo antena</th>
                    <th>Azimut</th>
                    <th>Tilt Mecánico</th>
                    <th>Tilt Eléctrico</th>
                    <th>Ángulo Apertura</th>
                    <th>Altura Antena (m)</th>
                    <th>Tiene RET</th>
                    <th>Modelo RRU</th>
                </tr>

                <tr>
                    <td class="col-xl-1">1°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_01" value="<?php echo $d1_01_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_02" value="<?php echo $d1_01_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_03" value="<?php echo $d1_01_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_04" value="<?php echo $d1_01_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_05" value="<?php echo $d1_01_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_06" value="<?php echo $d1_01_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_07" value="<?php echo $d1_01_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_08" value="<?php echo $d1_01_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_09" value="<?php echo $d1_01_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_10" value="<?php echo $d1_01_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_11" value="<?php echo $d1_01_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_12" value="<?php echo $d1_01_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_01_13" value="<?php echo $d1_01_13 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-xl-1">2°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_01" value="<?php echo $d1_02_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_02" value="<?php echo $d1_02_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_03" value="<?php echo $d1_02_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_04" value="<?php echo $d1_02_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_05" value="<?php echo $d1_02_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_06" value="<?php echo $d1_02_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_07" value="<?php echo $d1_02_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_08" value="<?php echo $d1_02_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_09" value="<?php echo $d1_02_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_10" value="<?php echo $d1_02_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_11" value="<?php echo $d1_02_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_12" value="<?php echo $d1_02_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_02_13" value="<?php echo $d1_02_13 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-xl-1">3°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_01" value="<?php echo $d1_03_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_02" value="<?php echo $d1_03_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_03" value="<?php echo $d1_03_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_04" value="<?php echo $d1_03_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_05" value="<?php echo $d1_03_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_06" value="<?php echo $d1_03_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_07" value="<?php echo $d1_03_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_08" value="<?php echo $d1_03_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_09" value="<?php echo $d1_03_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_10" value="<?php echo $d1_03_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_11" value="<?php echo $d1_03_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_12" value="<?php echo $d1_03_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_03_13" value="<?php echo $d1_03_13 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-xl-1">1°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_01" value="<?php echo $d1_04_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_02" value="<?php echo $d1_04_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_03" value="<?php echo $d1_04_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_04" value="<?php echo $d1_04_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_05" value="<?php echo $d1_04_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_06" value="<?php echo $d1_04_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_07" value="<?php echo $d1_04_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_08" value="<?php echo $d1_04_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_09" value="<?php echo $d1_04_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_10" value="<?php echo $d1_04_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_11" value="<?php echo $d1_04_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_12" value="<?php echo $d1_04_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_04_13" value="<?php echo $d1_04_13 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-xl-1">2°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_01" value="<?php echo $d1_05_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_02" value="<?php echo $d1_05_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_03" value="<?php echo $d1_05_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_04" value="<?php echo $d1_05_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_05" value="<?php echo $d1_05_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_06" value="<?php echo $d1_05_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_07" value="<?php echo $d1_05_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_08" value="<?php echo $d1_05_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_09" value="<?php echo $d1_05_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_10" value="<?php echo $d1_05_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_11" value="<?php echo $d1_05_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_12" value="<?php echo $d1_05_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_05_13" value="<?php echo $d1_05_13 ?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="col-xl-1">3°</td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_01" value="<?php echo $d1_06_01 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_02" value="<?php echo $d1_06_02 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_03" value="<?php echo $d1_06_03 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_04" value="<?php echo $d1_06_04 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_05" value="<?php echo $d1_06_05 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_06" value="<?php echo $d1_06_06 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_07" value="<?php echo $d1_06_07 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_08" value="<?php echo $d1_06_08 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_09" value="<?php echo $d1_06_09 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_10" value="<?php echo $d1_06_10 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_11" value="<?php echo $d1_06_11 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_12" value="<?php echo $d1_06_12 ?>">
                        </div>
                    </td>
                    <td class="col-xl-1">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="d1_06_13" value="<?php echo $d1_06_13 ?>">
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>