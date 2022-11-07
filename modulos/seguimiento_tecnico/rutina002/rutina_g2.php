<?php
$g_desarrollo_g2 = $obj->{'g_desarrollo_g2'};

$g2_01_01 = $g_desarrollo_g2->g2_01_01 ? "checked" : ""; $g2_01_02 = $g_desarrollo_g2->g2_01_02;
$g2_02_01 = $g_desarrollo_g2->g2_02_01 ? "checked" : ""; $g2_02_02 = $g_desarrollo_g2->g2_02_02 ? "checked" : ""; $g2_02_03 = $g_desarrollo_g2->g2_02_03;
$g2_03_01 = $g_desarrollo_g2->g2_03_01 ? "checked" : ""; $g2_03_02 = $g_desarrollo_g2->g2_03_02 ? "checked" : ""; $g2_03_03 = $g_desarrollo_g2->g2_03_03;
$g2_04_01 = $g_desarrollo_g2->g2_04_01 ? "checked" : ""; $g2_04_02 = $g_desarrollo_g2->g2_04_02;
$g2_05_01 = $g_desarrollo_g2->g2_05_01 ? "checked" : ""; $g2_05_02 = $g_desarrollo_g2->g2_05_02;
$g2_06_01 = $g_desarrollo_g2->g2_06_01 ? "checked" : ""; $g2_06_02 = $g_desarrollo_g2->g2_06_02;
$g2_07_01 = $g_desarrollo_g2->g2_07_01 ? "checked" : ""; $g2_07_02 = $g_desarrollo_g2->g2_07_02;
$g2_08_01 = $g_desarrollo_g2->g2_08_01 ? "checked" : ""; $g2_08_02 = $g_desarrollo_g2->g2_08_02;
$g2_09_01 = $g_desarrollo_g2->g2_09_01 ? "checked" : ""; $g2_09_02 = $g_desarrollo_g2->g2_09_02;
$g2_10_01 = $g_desarrollo_g2->g2_10_01 ? "checked" : ""; $g2_10_02 = $g_desarrollo_g2->g2_10_02;
$g2_11_01 = $g_desarrollo_g2->g2_11_01 ? "checked" : ""; $g2_11_02 = $g_desarrollo_g2->g2_11_02;
$g2_12_01 = $g_desarrollo_g2->g2_12_01 ? "checked" : ""; $g2_12_02 = $g_desarrollo_g2->g2_12_02;

?>

<h6 class="mb-0">G.2 Actividades de mantenimiento</h6>
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
                <td>G.2.1 Limpieza de los filtros de polvo de aire</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_01_01" value="option1" <?php echo $g2_01_01 ?> >
                        <label class="form-check-label" for="g2_01_01">Realizado</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_01_02" placeholder="Obs." value="<?php echo $g2_01_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.2 Limpieza de polvo de rendijas de renovación de aire del gabinete</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_02_01" value="option1" <?php echo $g2_02_01 ?> >
                        <label class="form-check-label" for="g2_02_01">Realizado</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_02_02" value="option2" <?php echo $g2_02_02 ?> >
                        <label class="form-check-label" for="g2_02_02">N/A</label>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_02_03" placeholder="Obs." value="<?php echo $g2_02_03 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.3 Revisión de sobrecalentamiento del cableado en ac</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_03_01" value="option1" <?php echo $g2_03_01 ?> >
                        <label class="form-check-label" for="g2_03_01">No necesario</label>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_03_02" value="option2" <?php echo $g2_03_02 ?> >
                        <label class="form-check-label" for="g2_03_02">Realizado</label>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_03_03" placeholder="Obs." value="<?php echo $g2_03_03 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.4 Revisión de sobrecalentamiento del cableado en dc</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_04_01" value="option1" <?php echo $g2_04_01 ?> >
                        <label class="form-check-label" for="g2_04_01">Realizado</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_04_02" placeholder="Obs." value="<?php echo $g2_04_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.5 Control de distribución de energía DC en/los puntos de servicio</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_05_01" value="option1" <?php echo $g2_05_01 ?> >
                        <label class="form-check-label" for="g2_05_01">Realizado</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_05_02" placeholder="Obs." value="<?php echo $g2_05_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.6 Ajuste del torque de elementos de sujeción en el PDU DC</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_06_01" value="option1" <?php echo $g2_06_01 ?> >
                        <label class="form-check-label" for="g2_06_01">Realizado</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_06_02" placeholder="Obs." value="<?php echo $g2_06_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.7 Ajuste de borneras en el panel eléctrico del equipo</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_07_01" value="option1" <?php echo $g2_07_01 ?> >
                        <label class="form-check-label" for="g2_07_01">Realizado</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_07_02" placeholder="Obs." value="<?php echo $g2_07_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.8 Ajuste de borneras del circuito del equipo en el tablero eléctrico</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_08_01" value="option1" <?php echo $g2_08_01 ?> >
                        <label class="form-check-label" for="g2_08_01">Realizado</label>
                    </td>
                <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_08_02" placeholder="Obs." value="<?php echo $g2_08_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.9 Lubricación de los motores ventiladores</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_09_01" value="option1" <?php echo $g2_09_01 ?> >
                        <label class="form-check-label" for="g2_09_01">Realizado</label>
                    </td>
                <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_09_02" placeholder="Obs." value="<?php echo $g2_09_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.10 Inspección del estado de los fusibles de protección</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_10_01" value="option1" <?php echo $g2_10_01 ?> >
                        <label class="form-check-label" for="g2_10_01">Realizado</label>
                    </td>
                <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_10_02" placeholder="Obs." value="<?php echo $g2_10_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.11 Prueba de autonomía del banco de baterías</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_11_01" value="option1" <?php echo $g2_11_01 ?> >
                        <label class="form-check-label" for="g2_11_01">Realizado</label>
                    </td>
                <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_11_02" placeholder="Obs." value="<?php echo $g2_11_02 ?>">
                    </td>
                
            </tr>

            <tr>
                <td>G.2.12 Revisión de operación de todos los módulos de rectificadores</td>
                
                    <td>
                        <input class="form-check-input" type="checkbox" id="g2_12_01" value="option1" <?php echo $g2_12_01 ?> >
                        <label class="form-check-label" for="g2_12_01">Realizado</label>
                    </td>
                <td></td>
                    <td>
                        <input type="text" class="form-control form-control-sm" id="g2_12_02" placeholder="Obs." value="<?php echo $g2_12_02 ?>">
                    </td>

            </tr>

            </tbody>
        </table>
    </div>
</div>