<?php
require("../../funciones/DateUtils.php");
$mst = "../modulos/seguimiento_tecnico.php?path=";

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());
$start_date = date('Y-m-d', $month_start);
$end_date = date('Y-m-d', $month_end);

//$currentMonth = currentMonthLiteral();
$currentMonth = monthLiteral(strtotime($start_date));

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

$porcentajeEje = 0;
$porcentajeEje = ($cantMttos > 0) ? round(($cantMttosEje/$cantMttos)*100, 1) : 0;


?>
<input type="hidden" name="iddepartamento" id="iddepartamento" value="<?php echo $iddepartamento ?>" />
<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-xl-2">
                                <button id="btn-actualizar" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bx-refresh'></i>Actualizar</button>
                            </div>
                            <div class="col-lg-9 col-xl-10">
                                <form class="float-lg-end">
                                    <div class="row row-cols-lg-auto g-2">

                                        <div class="col-12">
                                            <div class="btn-group">
                                                <div class="col-sm-12">
                                                    <input type="date" id="fechainicio" name="fechainicio" class="form-control" value="<?=$start_date?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="col-sm-12">
                                                    <input type="date" id="fechafin" name="fechafin" class="form-control" value="<?=$end_date?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center" id="total-mtto">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Total Mantenimientos </p>
                                <h4 class="my-1 text-white" id="total_mttos"></h4>
                                <p class="mb-0 font-13 text-white">Periodo <strong id="periodo"></strong></p>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center" id="total-eje">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Total Ejecutado</p>
                                <h4 class="my-1 text-white" id="total_eje"></h4>
                                <p class="mb-0 font-13 text-white">Ejecución <strong id="porcentaje"></strong>%</p>
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
<script type="text/javascript" src="../../js/chart_preventivo_01.js"></script>
<script type="text/javascript" src="../../js/chart_preventivo_02.js"></script>
<script type="text/javascript" src="../../js/chart_preventivo_03.js"></script>
<script type="text/javascript" src="../../js/chart_preventivo_04.js"></script>
<script type="text/javascript" src="../../js/chart_preventivo_05.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var fechainicio = $("#fechainicio").val();
        var fechafin = $("#fechafin").val();
        var iddepartamento = $("#iddepartamento").val();

        showTotalMttos(iddepartamento, fechainicio, fechafin);
        cargar_grafico_01(iddepartamento, fechainicio, fechafin);
        cargar_grafico_02(iddepartamento, fechainicio, fechafin);
        cargar_grafico_03(iddepartamento, fechainicio, fechafin);
        cargar_grafico_04(iddepartamento, fechainicio, fechafin);
        cargar_grafico_05(iddepartamento, fechainicio, fechafin);

        $("#btn-actualizar").click(function(e) {

            fechainicio = $("#fechainicio").val();
            fechafin = $("#fechafin").val();
            iddepartamento = $("#iddepartamento").val();

            console.log(fechainicio);
            console.log(fechafin);
            console.log(iddepartamento);

            showTotalMttos(iddepartamento, fechainicio, fechafin);
            cargar_grafico_01(iddepartamento, fechainicio, fechafin);
            cargar_grafico_02(iddepartamento, fechainicio, fechafin);
            cargar_grafico_03(iddepartamento, fechainicio, fechafin);
            cargar_grafico_04(iddepartamento, fechainicio, fechafin);
            cargar_grafico_05(iddepartamento, fechainicio, fechafin);

        });

    });

    function showTotalMttos(iddepartamento, fechainicio, fechafin) {
        var frmData = new FormData;
        frmData.append('iddepartamento', iddepartamento);
        frmData.append('fechainicio', fechainicio);
        frmData.append('fechafin', fechafin);

        $.ajax({
            url: '../../modulos/charts/data_total_mttos.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                var dataJson = JSON.parse(resp);
                console.log('Total periodo: ' + dataJson.periodo);
                console.log('Total total_mttos: ' + dataJson.total_mttos);
                console.log('Total total_eje: ' + dataJson.total_eje);
                console.log('Total porcentaje: ' + dataJson.porcentaje);

                $('#periodo').html(dataJson.periodo);
                $('#total_mttos').html(dataJson.total_mttos);
                $('#total_eje').html(dataJson.total_eje);
                $('#porcentaje').html(dataJson.porcentaje);
            }
        });
    }
    
</script>
