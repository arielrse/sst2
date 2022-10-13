<?php
$g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};
$g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "checked" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
$g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "checked" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02;
$g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "checked" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02;
$g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "checked" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02;

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h6>G.2	Actividades de mantenimiento</h6>
        <table class="table">
            <tbody>
            <tr>
                <td>G.2.1 Limpieza de los filtros de polvo de aire</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_01_01" value="option1" <?php echo $g2_01_01 ?>>
                        <label class="form-check-label" for="g2_01_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_01_02" placeholder="Obs." value="<?php echo $g2_01_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.7 Ajuste de borneras en el panel eléctrico del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_02_01" value="option1" <?php echo $g2_02_01 ?>>
                        <label class="form-check-label" for="g2_02_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_02_02" placeholder="Obs." value="<?php echo $g2_02_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.8 Ajuste de borneras del circuito del equipo en el tablero eléctrico</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_03_01" value="option1" <?php echo $g2_03_01 ?>>
                        <label class="form-check-label" for="g2_03_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_03_02" placeholder="Obs." value="<?php echo $g2_03_02 ?>">
                </td>
            </tr>

            <tr>
                <td>G.2.9	Lubricación de los motores ventiladores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="g2_04_01" value="option1" <?php echo $g2_04_01 ?>>
                        <label class="form-check-label" for="g2_04_01">Realizado</label>
                    </div>
                </td>
                <td></td>
                <td>
                    <input type="text" class="form-control form-control-sm" id="g2_04_02" placeholder="Obs." value="<?php echo $g2_04_02 ?>">
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>