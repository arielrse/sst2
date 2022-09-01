<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina014/rutina_d.php"); ?>

        <?php require("rutina014/rutina_e.php"); ?>

        <?php require("rutina014/rutina_d1.php"); ?>

        <?php require("rutina014/rutina_d2.php"); ?>

        <?php require("rutina014/rutina_d3.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">

                <!--<div class="card">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

                            <div class="col">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-4">Tecnologia</td>
                                        <td class="col-xl-4">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-4">Nombre del eNODO B</td>
                                        <td class="col-xl-4">
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
                                        <td class="col-xl-4">ID Estacion</td>
                                        <td class="col-xl-4">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-xl-4">Configuracion</td>
                                        <td class="col-xl-4">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
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
                                    <td class="col-xl-1">2°</td>
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
                                    <td class="col-xl-1">3°</td>
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
                                    <td class="col-xl-1">1°</td>
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
                                    <td class="col-xl-1">2°</td>
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
                                    <td class="col-xl-1">3°</td>
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
                                    <td class="col-xl-1">1°</td>
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
                                    <td class="col-xl-1">2°</td>
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
                                    <td class="col-xl-1">3°</td>
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


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>-->


            </div>
        </div>



    </div>
</div>

<script src="../../paquetes/rutina/rutina014.js" type="text/javascript"></script>