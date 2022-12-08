<?php
require("../../funciones/DateUtils.php");
$mst = "../modulos/seguimiento_tecnico.php?path=";

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());
$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$currentMonth = currentMonthLiteral();

/** --- Para mostrar periodo semestral ---- **/
$res  = mysqli_query($conexion, "SELECT sem_inicio, sem_fin, sem_cant FROM departamento WHERE iddepartamento = " . $iddepartamento);
$dato = mysqli_fetch_array($res);

$fecha_inicio = $dato['sem_inicio'];
$fecha_fin    = $dato['sem_fin'];
$cantidad_sem     = $dato['sem_cant'];

$mes_ini = monthLiteral(strtotime($fecha_inicio));
$mes_fin = monthLiteral(strtotime($fecha_fin));

$currentSemestre = $mes_ini . ' - ' . $mes_fin;

$res1 = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$fecha_inicio' AND '$fecha_fin' AND c.`iddepartamento` = " . $iddepartamento ."
            AND e.`estado` <> 'PEN'");
$data1 = mysqli_fetch_array($res1);

$cantMttosEje  = $data1['cantidad'];
$porcentajeEje = round(($cantMttosEje/$cantidad_sem)*100, 1);
/** --------------------------------------- **/

/** ----------------- Mensual ----------------- */
$res = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND c.`iddepartamento` = " . $iddepartamento);
$data = mysqli_fetch_array($res);

$cantMttosMes = $data['cantidad'];

$res = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND c.`iddepartamento` = " . $iddepartamento ."
            AND e.`estado` <> 'PEN'");
$data = mysqli_fetch_array($res);

$porcentajeEjeMes = 0;
$cantMttosEjeMes  = $data['cantidad'];
if ($cantMttosEjeMes != 0)
    $porcentajeEjeMes = round(($cantMttosEjeMes/$cantMttosMes)*100, 1);

/** ------------------------------------------- */

?>
<input type="hidden" name="iddepartamento" id="iddepartamento" value="<?php echo $iddepartamento ?>" />
<div class="page-wrapper">
    <div class="page-content">

        <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Total Mantenimientos </p>
                                <h4 class="my-1 text-white"><?php echo $cantidad_sem ?></h4>
                                <p class="mb-0 font-13 text-white">Periodo: <span><?php echo $currentSemestre ?></span></p>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Total Ejecutado</p>
                                <h4 class="my-1 text-white"><?php echo $cantMttosEje ?></h4>
                                <p class="mb-0 font-13 text-white">Ejecución <span><?php echo $porcentajeEje ?>% semestral</span></p>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Periodo <?php echo $currentMonth ?></p>
                                <h4 class="my-1 text-white"><?php echo $cantMttosMes ?></h4>
                                <p class="mb-0 font-13 text-white">Ejecución <span><?php echo $porcentajeEjeMes ?>% mensual</span></p>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Mantenimientos Ejecutados</h6>
                            </div>
                        </div>
                        <div class="chart-container-1 mt-4">
                            <canvas id="myChart01"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Mantenimientos por área</h6>
                            </div>

                        </div>
                        <div class="chart-container-1 mt-4">
                            <canvas id="myChart02"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Mantenimientos por tipo de nodo</h6>
                            </div>

                        </div>
                        <div class="chart-container-1 mt-4">
                            <canvas id="myChart03"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Mantenimientos por CM y SCM</h6>
                            </div>
                        </div>
                        <div class="chart-container-1 mt-4">
                            <canvas id="myChart04"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Mantenimientos por grupo de trabajo</h6>
                            </div>
                        </div>
                        <div class="chart-container-14 mt-2">
                            <canvas id="myChart05"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->


    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script type="text/javascript" src="../../js/chart.prev.01.js"></script>
<script type="text/javascript" src="../../js/chart.prev.02.js"></script>
<script type="text/javascript" src="../../js/chart.prev.03.js"></script>
<script type="text/javascript" src="../../js/chart.prev.04.js"></script>
<script type="text/javascript" src="../../js/chart.prev.05.js"></script>
