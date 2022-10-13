<?php

$g_resistencia_bb = $obj->{'g_resistencia_bb'};
$g21_1 = $g_resistencia_bb->g21_1;
$g21_2 = $g_resistencia_bb->g21_2;

$g22_medidas = $obj->{'g22_medidas'};
$g22_obs = $g22_medidas->g22_obs;
$g22_b01 = $g22_medidas->g22_b01;
$g22_b02 = $g22_medidas->g22_b02;
$g22_b03 = $g22_medidas->g22_b03;
$g22_b04 = $g22_medidas->g22_b04;
$g22_b05 = $g22_medidas->g22_b05;
$g22_b06 = $g22_medidas->g22_b06;
$g22_b07 = $g22_medidas->g22_b07;
$g22_b08 = $g22_medidas->g22_b08;
$g22_b09 = $g22_medidas->g22_b09;
$g22_b10 = $g22_medidas->g22_b10;
$g22_b11 = $g22_medidas->g22_b11;
$g22_b12 = $g22_medidas->g22_b12;
$g22_b13 = $g22_medidas->g22_b13;
$g22_b14 = $g22_medidas->g22_b14;
$g22_b15 = $g22_medidas->g22_b15;
$g22_b16 = $g22_medidas->g22_b16;
$g22_b17 = $g22_medidas->g22_b17;
$g22_b18 = $g22_medidas->g22_b18;
$g22_b19 = $g22_medidas->g22_b19;
$g22_b20 = $g22_medidas->g22_b20;
$g22_b21 = $g22_medidas->g22_b21;
$g22_b22 = $g22_medidas->g22_b22;
$g22_b23 = $g22_medidas->g22_b23;
$g22_b24 = $g22_medidas->g22_b24;

?>
<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <div><h7 class="mb-0 text-uppercase">G.21 Medidas Resistencia Interna BB:</h7></div>
        <div><h7 class="mb-0 text-uppercase">G.21.a  Datos de Hojas Tecnicas:</h7></div>

        <div class="row g-3 align-items-center mb-2">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Valor aproximado mΩ:</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control form-control-sm" id="g21_1" value="<?php echo $g21_1 ?>">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g21_2" value="<?php echo $g21_2 ?>">
            </div>
        </div>

        <div class="row g-3 align-items-center mb-2">
            <div class="col-auto">
                <!--<label for="inputPassword6" class="col-form-label">Valor aproximado mΩ:</label>-->
                <h7 class="mb-0 text-uppercase">G.22.b Medidas realizadas:</h7>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control form-control-sm" placeholder="Obs." id="g22_obs" value="<?php echo $g22_obs ?>">
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 row-cols-xl-4">
            <div class="col">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">N° Bat.</th>
                        <th scope="col">mΩ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B1</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b01" value="<?php echo $g22_b01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B2</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b02" value="<?php echo $g22_b02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B3</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b03" value="<?php echo $g22_b03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B4</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b04" value="<?php echo $g22_b04 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B5</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b05" value="<?php echo $g22_b05 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B6</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b06" value="<?php echo $g22_b06 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">N° Bat.</th>
                        <th scope="col">mΩ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B7</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b07" value="<?php echo $g22_b07 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B8</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b08" value="<?php echo $g22_b08 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B9</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b09" value="<?php echo $g22_b09 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B10</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b10" value="<?php echo $g22_b10 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B11</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b11" value="<?php echo $g22_b11 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B12</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b12" value="<?php echo $g22_b12 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">N° Bat.</th>
                        <th scope="col">mΩ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B13</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b13" value="<?php echo $g22_b13 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B14</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b14" value="<?php echo $g22_b14 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B15</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b15" value="<?php echo $g22_b15 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B16</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b16" value="<?php echo $g22_b16 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B17</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b17" value="<?php echo $g22_b17 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B18</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b18" value="<?php echo $g22_b18 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">N° Bat.</th>
                        <th sco22="col">mΩ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B19</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b19" value="<?php echo $g22_b19 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B20</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b20" value="<?php echo $g22_b20 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B21</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b21" value="<?php echo $g22_b21 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B22</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b22" value="<?php echo $g22_b22 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B23</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b23" value="<?php echo $g22_b23 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B24</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g22_b24" value="<?php echo $g22_b24 ?>">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
