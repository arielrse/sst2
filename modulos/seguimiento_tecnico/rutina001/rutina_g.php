<?php

$g_desarrollo = $obj->{'g_desarrollo'};
$g01_1 = $g_desarrollo[0]->g01_1 ? "checked" : "";
$g01_2 = $g_desarrollo[0]->g01_2 ? "checked" : "";
$g01_3 = $g_desarrollo[0]->g01_3;

$g02_1 = $g_desarrollo[1]->g02_1 ? "checked" : "";
$g02_2 = $g_desarrollo[1]->g02_2 ? "checked" : "";
$g02_3 = $g_desarrollo[1]->g02_3;

$g03_1 = $g_desarrollo[2]->g03_1 ? "checked" : "";
$g03_2 = $g_desarrollo[2]->g03_2 ? "checked" : "";
$g03_3 = $g_desarrollo[2]->g03_3;

$g04_1 = $g_desarrollo[3]->g04_1 ? "checked" : "";
$g04_2 = $g_desarrollo[3]->g04_2 ? "checked" : "";
$g04_3 = $g_desarrollo[3]->g04_3;

$g05_1 = $g_desarrollo[4]->g05_1 ? "checked" : "";
$g05_2 = $g_desarrollo[4]->g05_2 ? "checked" : "";
$g05_3 = $g_desarrollo[4]->g05_3;

$g06_1 = $g_desarrollo[5]->g06_1 ? "checked" : "";
$g06_2 = $g_desarrollo[5]->g06_2 ? "checked" : "";
$g06_3 = $g_desarrollo[5]->g06_3;

$g07_1 = $g_desarrollo[6]->g07_1 ? "checked" : "";
$g07_2 = $g_desarrollo[6]->g07_2 ? "checked" : "";
$g07_3 = $g_desarrollo[6]->g07_3;

$g08_1 = $g_desarrollo[7]->g08_1 ? "checked" : "";
$g08_2 = $g_desarrollo[7]->g08_2 ? "checked" : "";
$g08_3 = $g_desarrollo[7]->g08_3;

$g09_1 = $g_desarrollo[8]->g09_1;
$g09_2 = $g_desarrollo[8]->g09_2;

$g10_1 = $g_desarrollo[9]->g10_1;
$g10_2 = $g_desarrollo[9]->g10_2;

$g11_1 = $g_desarrollo[10]->g11_1;
$g11_2 = $g_desarrollo[10]->g11_2;

$g12_1 = $g_desarrollo[11]->g12_1;
$g12_2 = $g_desarrollo[11]->g12_2;

$g13_1 = $g_desarrollo[12]->g13_1;
$g13_2 = $g_desarrollo[12]->g13_2;

$g14_1 = $g_desarrollo[13]->g14_1;
$g14_2 = $g_desarrollo[13]->g14_2;

$g15_1 = $g_desarrollo[14]->g15_1;
$g15_2 = $g_desarrollo[14]->g15_2;

$g16_1 = $g_desarrollo[15]->g16_1;
$g16_2 = $g_desarrollo[15]->g16_2;

$g17_1 = $g_desarrollo[16]->g17_1;
$g17_2 = $g_desarrollo[16]->g17_2;

$g18_1 = $g_desarrollo[17]->g18_1;
$g18_2 = $g_desarrollo[17]->g18_2;

/* - - - - */

$g_voltaje = $obj->{'g_voltaje'};
$g19_b01 = $g_voltaje->g19_b01;
$g19_b02 = $g_voltaje->g19_b02;
$g19_b03 = $g_voltaje->g19_b03;
$g19_b04 = $g_voltaje->g19_b04;
$g19_b05 = $g_voltaje->g19_b05;
$g19_b06 = $g_voltaje->g19_b06;
$g19_b07 = $g_voltaje->g19_b07;
$g19_b08 = $g_voltaje->g19_b08;
$g19_b09 = $g_voltaje->g19_b09;
$g19_b10 = $g_voltaje->g19_b10;
$g19_b11 = $g_voltaje->g19_b11;
$g19_b12 = $g_voltaje->g19_b12;
$g19_b13 = $g_voltaje->g19_b13;
$g19_b14 = $g_voltaje->g19_b14;
$g19_b15 = $g_voltaje->g19_b15;
$g19_b16 = $g_voltaje->g19_b16;
$g19_b17 = $g_voltaje->g19_b17;
$g19_b18 = $g_voltaje->g19_b18;
$g19_b19 = $g_voltaje->g19_b19;
$g19_b20 = $g_voltaje->g19_b20;
$g19_b21 = $g_voltaje->g19_b21;
$g19_b22 = $g_voltaje->g19_b22;
$g19_b23 = $g_voltaje->g19_b23;
$g19_b24 = $g_voltaje->g19_b24;

$g_descarga = $obj->{'g_descarga'};
$g20_1_1 = $g_descarga->g20_1_1;
$g20_1_2 = $g_descarga->g20_1_2;
$g20_1_3 = $g_descarga->g20_1_3;
$g20_2_1 = $g_descarga->g20_2_1;
$g20_2_2 = $g_descarga->g20_2_2;
$g20_2_3 = $g_descarga->g20_2_3;


?>
<h6>G. Desarrollo de Rutina de Mantenimiento</h6>

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
                <td>G.1	Ajuste en bornera:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g01_1" <?php echo $g01_1 ?> value="option1">
                        <label class="form-check-label" for="g01_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g01_2" <?php echo $g01_2 ?> value="option2">
                        <label class="form-check-label" for="g01_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g01_3" placeholder="Obs." value="<?php echo $g01_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G2. Limpieza en bornera:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g02_1" <?php echo $g02_1 ?> value="option1">
                        <label class="form-check-label" for="g02_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g02_2" <?php echo $g02_2 ?> value="option2">
                        <label class="form-check-label" for="g02_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g02_3" placeholder="Obs." value="<?php echo $g02_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.3	Ajuste de aterramiento:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g03_1" <?php echo $g03_1 ?> value="option1">
                        <label class="form-check-label" for="g03_1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g03_2" <?php echo $g03_2 ?> value="option2">
                        <label class="form-check-label" for="g03_2">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g03_3" placeholder="Obs." value="<?php echo $g03_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.4	Anclaje:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g04_1" <?php echo $g04_1 ?> value="option1">
                        <label class="form-check-label" for="g04_1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g04_2" <?php echo $g04_2 ?> value="option2">
                        <label class="form-check-label" for="g04_2">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g04_3" placeholder="Obs." value="<?php echo $g04_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.5	Ajuste Polo (+):</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g05_1" <?php echo $g05_1 ?> value="option1">
                        <label class="form-check-label" for="g05_1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g05_2" <?php echo $g05_2 ?> value="option2">
                        <label class="form-check-label" for="g05_2">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g05_3" placeholder="Obs." value="<?php echo $g05_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.6	Ajuste Polo (-):</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g06_1" <?php echo $g06_1 ?> value="option1">
                        <label class="form-check-label" for="g06_1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g06_2" <?php echo $g06_2 ?> value="option2">
                        <label class="form-check-label" for="g06_2">Malo</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g06_3" placeholder="Obs." value="<?php echo $g06_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.7	Limpieza  tablero de BB:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g07_1" <?php echo $g07_1 ?> value="option1">
                        <label class="form-check-label" for="g07_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g07_2" <?php echo $g07_2 ?> value="option2">
                        <label class="form-check-label" for="g07_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g07_3" placeholder="Obs." value="<?php echo $g07_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.8	Ajuste bornes  proteccion:</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g08_1" <?php echo $g08_1 ?> value="option1">
                        <label class="form-check-label" for="g08_1">Si</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g08_2" <?php echo $g08_2 ?> value="option2">
                        <label class="form-check-label" for="g08_2">No</label>
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g08_3" placeholder="Obs." value="<?php echo $g08_3 ?>">
                </td>
            </tr>

            <tr>
                <td>G.9 Voltaje en carga BB VDC:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g09_1" value="<?php echo $g09_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g09_2" placeholder="Obs." value="<?php echo $g09_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.10 Voltaje en flotacion BB VDC:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g10_1" value="<?php echo $g10_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g10_2" placeholder="Obs." value="<?php echo $g10_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.11 Corriente de Carga configurado:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g11_1" value="<?php echo $g11_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g11_2" placeholder="Obs." value="<?php echo $g11_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.12 Corriente de Carga nominal:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g12_1" value="<?php echo $g12_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g12_2" placeholder="Obs." value="<?php echo $g12_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.13 Temperatura ambiente °C:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g13_1" value="<?php echo $g13_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g13_2" placeholder="Obs." value="<?php echo $g13_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.14 Temperatura punto medio BB °C:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g14_1" value="<?php echo $g14_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g14_2" placeholder="Obs." value="<?php echo $g14_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.15 Cantidad de Cadenas:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g15_1" value="<?php echo $g15_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g15_2" placeholder="Obs." value="<?php echo $g15_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.16 Cantidad de Baterias/Cadena:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g16_1" value="<?php echo $g16_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g16_2" placeholder="Obs." value="<?php echo $g16_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.17 Cantidad Total de Baterias:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g17_1" value="<?php echo $g17_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g17_2" placeholder="Obs." value="<?php echo $g17_2 ?>">
                </td>
            </tr>

            <tr>
                <td>G.18 Capacidad total del BB  A-Hr:</td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g18_1" value="<?php echo $g18_1 ?>">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g18_2" placeholder="Obs." value="<?php echo $g18_2 ?>">
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
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>
        <h7 class="mb-0 text-uppercase">G.19 Medida de Voltaje por celda y cadena del BB:</h7>
        <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 row-cols-xl-4">
            <div class="col">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">N° Bat.</th>
                        <th scope="col">VDC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B1</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b01" value="<?php echo $g19_b01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B2</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b02" value="<?php echo $g19_b02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B3</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b03" value="<?php echo $g19_b03 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B4</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b04" value="<?php echo $g19_b04 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B5</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b05" value="<?php echo $g19_b05 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B6</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b06" value="<?php echo $g19_b06 ?>">
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
                        <th scope="col">VDC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B7</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b07" value="<?php echo $g19_b07 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B8</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b08" value="<?php echo $g19_b08 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B9</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b09" value="<?php echo $g19_b09 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B10</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b10" value="<?php echo $g19_b10 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B11</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b11" value="<?php echo $g19_b11 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B12</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b12" value="<?php echo $g19_b12 ?>">
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
                        <th scope="col">VDC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B13</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b13" value="<?php echo $g19_b13 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B14</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b14" value="<?php echo $g19_b14 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B15</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b15" value="<?php echo $g19_b15 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B16</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b16" value="<?php echo $g19_b16 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B17</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b17" value="<?php echo $g19_b17 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B18</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b18" value="<?php echo $g19_b18 ?>">
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
                        <th scope="col">VDC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xl-6">BB2-B19</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b19" value="<?php echo $g19_b19 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B20</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b20" value="<?php echo $g19_b20 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B21</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b21" value="<?php echo $g19_b21 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B22</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b22" value="<?php echo $g19_b22 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B23</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b23" value="<?php echo $g19_b23 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB2-B24</td>
                        <td class="col-xl-6">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" id="g19_b24" value="<?php echo $g19_b24 ?>">
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
        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h7 class="mb-0 text-uppercase">G.20 Medidas por descarga BB:</h7>

        <div>
            <h7 class="mb-0 text-uppercase">G.20.1 Datos de Hojas Tecnicas:</h7>
        </div>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 mb-2">
            <div class="col">
                <label for="inputFirstName" class="form-label">Corriente de descarga ADC:</label>
                <input type="text" class="form-control form-control-sm" id="g20_1_1" value="<?php echo $g20_1_1 ?>">
            </div>

            <div class="col">
                <label for="inputFirstName" class="form-label">Tiempo Noninal de descarga min:</label>
                <input type="text" class="form-control form-control-sm" id="g20_1_2" value="<?php echo $g20_1_2 ?>">
            </div>

            <div class="col">
                <label for="inputFirstName" class="form-label">Observacion:</label>
                <input type="text" class="form-control form-control-sm" id="g20_1_3" value="<?php echo $g20_1_3 ?>">
            </div>
        </div>

        <div>
            <h7 class="mb-0 text-uppercase">G.20.2 Medidas en descarga:</h7>
        </div>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 mb-2">
            <div class="col">
                <label for="inputFirstName" class="form-label">Corriente de descarga ADC:</label>
                <input type="text" class="form-control form-control-sm" id="g20_2_1" value="<?php echo $g20_2_1 ?>">
            </div>

            <div class="col">
                <label for="inputFirstName" class="form-label">Tiempo Noninal de descarga min:</label>
                <input type="text" class="form-control form-control-sm" id="g20_2_2" value="<?php echo $g20_2_2 ?>">
            </div>

            <div class="col">
                <label for="inputFirstName" class="form-label">Observacion:</label>
                <input type="text" class="form-control form-control-sm" id="g20_2_3" value="<?php echo $g20_2_3 ?>">
            </div>
        </div>

    </div>
</div>