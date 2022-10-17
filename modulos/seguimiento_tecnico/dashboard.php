<?php
require("../../funciones/DateUtils.php");
$mst = "../modulos/seguimiento_tecnico.php?path=";

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());
$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

$currentMonth = currentMonthLiteral();

$res = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND c.`iddepartamento` = " . $iddepartamento);
$data = mysqli_fetch_array($res);

$cantMttos = $data['cantidad'];

$res1 = mysqli_query($conexion,
    "SELECT count(*) AS cantidad FROM evento e
            LEFT JOIN centro c ON e.`idcentro` = c.`idcentro`
            WHERE e.`inicio` BETWEEN '$start_date' AND '$end_date' AND c.`iddepartamento` = " . $iddepartamento ."
            AND e.`estado` <> 'PEN'");
$data1 = mysqli_fetch_array($res1);

$cantMttosEje = $data1['cantidad'];

$porcentajeEje = round(($cantMttosEje/$cantMttos)*100, 1);

?>
<input type="hidden" name="iddepartamento" id="iddepartamento" value="<?php echo $iddepartamento ?>" />
<div class="page-wrapper">
    <div class="page-content">

        <!--<div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="row" style="flex: .5 .5 auto; padding: .5rem .5rem;">

                        <div class="col-md-4">
                            <select id="inputState" class="form-select form-select-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-sm btn-secondary" id="next-btn" type="button">Actualizar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>-->

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Total Mantenimientos </p>
                                <h4 class="my-1 text-white"><?php echo $cantMttos ?></h4>
                                <p class="mb-0 font-13 text-white">Periodo <strong><?php echo $currentMonth ?></strong></p>
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
                                <p class="mb-0 font-13 text-white">Ejecución <strong><?php echo $porcentajeEje ?>%</strong></p>
                            </div>
                            <div id="chart2"></div>
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
