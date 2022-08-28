<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - ASR / OLT / METRO</h6>
        <hr/>

        <?php require("rutina_head_nodo.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">

                <h6>D. Relevamiento</h6>

                <div class="card">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

                            <div class="col">

                                <table class="table table-bordered mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-6">Ubicación equipo datos</td>
                                        <td class="col-xl-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xl-6">Ubicación rack</td>
                                        <td class="col-xl-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
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
                                        <td class="col-xl-6">Tipo de Infraestructura</td>
                                        <td class="col-xl-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered mb-3">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Equipo</th>
                                        <th>Existe</th>
                                        <th>Estado</th>
                                        <th>Energia</th>
                                        <th>Cantidad de Puertos</th>
                                        <th>Descripción Etiqueta Puerto UPLINK</th>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-1">ASR-9010</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-1">ASR-920</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-1">ME-3400</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">4</td>
                                        <td class="col-xl-1">SW-HUAWEI</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">5</td>
                                        <td class="col-xl-1">SW-RAISECOM</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">6</td>
                                        <td class="col-xl-1">DSLAM-H</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">7</td>
                                        <td class="col-xl-1">DSLAM-Z</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">8</td>
                                        <td class="col-xl-1">OLT</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>

                                <table class="table table-bordered mb-3">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Equipo</th>
                                        <th>Fuente A (v)</th>
                                        <th>Origen 1</th>
                                        <th>Fuente B (v)</th>
                                        <th>Origen 2</th>
                                        <th>Observaciones</th>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-1">ASR-9010</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-1">ASR-920</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-1">OLT 300</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">4</td>
                                        <td colspan="6"></td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-1">ASR-9010</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-1">ASR-920</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-1">OLT 300</td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-1">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">4</td>
                                        <td colspan="6"></td>
                                    </tr>

                                    </tbody>
                                </table>

                                <h6>Puertos Equipo 1</h6>
                                <table class="table table-bordered mb-3">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Puerto</th>
                                        <th>Descripcion</th>
                                        <th>Posicion</th>
                                        <th>Observaciones</th>

                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-1">0</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">4</td>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">5</td>
                                        <td class="col-xl-1">4</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                <h6>Puertos Equipo 2</h6>
                                <table class="table table-bordered mb-3">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Puerto</th>
                                        <th>Descripcion</th>
                                        <th>Posicion</th>
                                        <th>Observaciones</th>

                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-1">0</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-1">1</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-1">2</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">4</td>
                                        <td class="col-xl-1">3</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-1">5</td>
                                        <td class="col-xl-1">4</td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="col-xl-2">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


                <h6>E. Desarrollo de Rutina de Mantenimiento</h6>
                <div class="card">
                    <div class="card-body">
                        <table class="table">

                            <tr>
                                <td>E.1 Verificación y limpieza de estructura exterior (carcaza)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.2	Verificacion pintura del gabinete</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.3	Verificación del estado general del equipamiento</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.4	Verificación interior: MUX , SDH , MODEMS ,equipos IPNGN, etc.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.5	Verificación cableado ( fibra y cobre)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.6	Verificación de estado DDF y conectores</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.7	Verificación de sensores de alarmas</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.8	Verificación de protectores de transientes</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.9	Verificación de protectores de líneas de abonados</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.10 Limpieza de polvo interior</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.11 Verificación de alarmas sobre tarjetas</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.12 Verificación de alarmas de ups</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.13 Verificación de alarmas de rectificador</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.14 Reporte  de alarmas al NOC (AC-BAT- RECTIF)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.15 Verificación de existencia de F.O de reserva</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.16 Etiquetado de equipos y cables</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.17 Temperatura</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.18 Estado de los LED's</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.19 Verificación cableado de Pach-Cords opticos</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.20 Verificación cableado de Energia</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>E.21 Limpieza del ambiente</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">SI</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">NO</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>



            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina016.js" type="text/javascript"></script>