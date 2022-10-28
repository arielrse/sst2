<?php

$g_desarrollo_g1 = $obj->{'g_desarrollo_g1'};
$g1_01_01 = $g_desarrollo_g1->g1_01_01 ? "checked" : ""; $g1_01_02 = $g_desarrollo_g1->g1_01_02 ? "checked" : ""; $g1_01_03 = $g_desarrollo_g1->g1_01_03;
$g1_02_01 = $g_desarrollo_g1->g1_02_01 ? "checked" : ""; $g1_02_02 = $g_desarrollo_g1->g1_02_02 ? "checked" : ""; $g1_02_03 = $g_desarrollo_g1->g1_02_03;
$g1_03_01 = $g_desarrollo_g1->g1_03_01 ? "checked" : ""; $g1_03_02 = $g_desarrollo_g1->g1_03_02 ? "checked" : ""; $g1_03_03 = $g_desarrollo_g1->g1_03_03;
$g1_04_01 = $g_desarrollo_g1->g1_04_01 ? "checked" : ""; $g1_04_02 = $g_desarrollo_g1->g1_04_02 ? "checked" : ""; $g1_04_03 = $g_desarrollo_g1->g1_04_03;
$g1_05_01 = $g_desarrollo_g1->g1_05_01 ? "checked" : ""; $g1_05_02 = $g_desarrollo_g1->g1_05_02 ? "checked" : ""; $g1_05_03 = $g_desarrollo_g1->g1_05_03;
$g1_06_01 = $g_desarrollo_g1->g1_06_01 ? "checked" : ""; $g1_06_02 = $g_desarrollo_g1->g1_06_02 ? "checked" : ""; $g1_06_03 = $g_desarrollo_g1->g1_06_03;
$g1_07_01 = $g_desarrollo_g1->g1_07_01 ? "checked" : ""; $g1_07_02 = $g_desarrollo_g1->g1_07_02 ? "checked" : ""; $g1_07_03 = $g_desarrollo_g1->g1_07_03;
$g1_08_01 = $g_desarrollo_g1->g1_08_01 ? "checked" : ""; $g1_08_02 = $g_desarrollo_g1->g1_08_02 ? "checked" : ""; $g1_08_03 = $g_desarrollo_g1->g1_08_03;
$g1_09_01 = $g_desarrollo_g1->g1_09_01 ? "checked" : ""; $g1_09_02 = $g_desarrollo_g1->g1_09_02 ? "checked" : ""; $g1_09_03 = $g_desarrollo_g1->g1_09_03;

?>

<h6>D. Sistema de Transporte Microondas MW</h6>
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col">


        <?php require("rutina_d_micro1.php"); ?>

        <?php require("rutina_d_micro2.php"); ?>

        <?php require("rutina_d_micro3.php"); ?>


    </div>
</div>


<div class="card">
    <div class="card-body">

        <div class="col mb-2">
            <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
        </div>

        <table class="table">
            <tr>
                <th colspan="4">Desarrollo de Rutina de Mantenimiento</th>
            </tr>

            <tr>
                <td>D.1 Verificacion de los canales proteccion IDU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_01" value="option1" <?php echo $g1_01_01 ?>>
                        <label class="form-check-label" for="g1_01_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_01_02" value="option3" <?php echo $g1_01_02 ?>>
                        <label class="form-check-label" for="g1_01_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_01_03" value="<?php echo $g1_01_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.2	Verificacion peinado de cables y etiquetado en IDU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_01" value="option1" <?php echo $g1_02_01 ?>>
                        <label class="form-check-label" for="g1_02_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_02_02" value="option3" <?php echo $g1_02_02 ?>>
                        <label class="form-check-label" for="g1_02_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_02_03" value="<?php echo $g1_02_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.3	Limpieza externa de equipo IDU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_01" value="option1" <?php echo $g1_03_01 ?>>
                        <label class="form-check-label" for="g1_03_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_03_02" value="option3" <?php echo $g1_03_02 ?>>
                        <label class="form-check-label" for="g1_03_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_03_03" value="<?php echo $g1_03_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.4	Verificacion peinado de cables y Etiquetado en ODU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_01" value="option1" <?php echo $g1_04_01 ?>>
                        <label class="form-check-label" for="g1_04_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_04_02" value="option3" <?php echo $g1_04_02 ?>>
                        <label class="form-check-label" for="g1_04_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_04_03" value="<?php echo $g1_04_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.5	Verificacion y sellado de conectores en ODU</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_01" value="option1" <?php echo $g1_05_01 ?>>
                        <label class="form-check-label" for="g1_05_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_05_02" value="option3" <?php echo $g1_05_02 ?>>
                        <label class="form-check-label" for="g1_05_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_05_03" value="<?php echo $g1_05_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.6	Verificacion de soporte de antena (V)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_01" value="option1" <?php echo $g1_06_01 ?>>
                        <label class="form-check-label" for="g1_06_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_06_02" value="option3" <?php echo $g1_06_02 ?>>
                        <label class="form-check-label" for="g1_06_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_06_03" value="<?php echo $g1_06_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.7	Verificacion de soportes de antena (H)</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_01" value="option1" <?php echo $g1_07_01 ?>>
                        <label class="form-check-label" for="g1_07_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_07_02" value="option3" <?php echo $g1_07_02 ?>>
                        <label class="form-check-label" for="g1_07_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_07_03" value="<?php echo $g1_07_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.8	Verificar estabilidad de antena</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_01" value="option1" <?php echo $g1_08_01 ?>>
                        <label class="form-check-label" for="g1_08_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_08_02" value="option3" <?php echo $g1_08_02 ?>>
                        <label class="form-check-label" for="g1_08_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_08_03" value="<?php echo $g1_08_03 ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <td>D.9	Verificación de sellado y vulcanizado de conectores RF</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_01" value="option1" <?php echo $g1_09_01 ?>>
                        <label class="form-check-label" for="g1_09_01">SI</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g1_09_02" value="option3" <?php echo $g1_09_02 ?>>
                        <label class="form-check-label" for="g1_09_02">NO</label>
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Obs." id="g1_09_03" value="<?php echo $g1_09_03 ?>">
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>
