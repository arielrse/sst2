<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6>D. Relevamiento</h6>

                <div class="card">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <tbody>

                                            <tr>
                                                <td class="col-xl-4">Radio Bases</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Tipo de Transporte</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Salto Anterior</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Energía principal</td>
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
                            </div>

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <tbody>

                                            <tr>
                                                <td class="col-xl-4">Vendor</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Equipo de transmisión</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Interface</td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-4">Energía Respaldo</td>
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
                            </div>

                        </div>
                    </div>
                </div>

                <h6>E. Desarrollo de Rutina de Mantenimiento</h6>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>D.1 Verificar la no existencia de alarmas visuales</td>
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
                                <td>D.2	Verificar la instalación de gabinetes</td>
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
                                <td>D.3	Verificar la instalación de la BBU y Tarjetas</td>
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
                                <td>D.4	Limpieza fuera y dentro de gabinetes</td>
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
                                <td>D.5	Verificar ajuste en conexiones de aterramiento de gabinetes</td>
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
                                <td>D.6	Verificar que los cables de energía y aterramiento no estén dañados o rotos</td>
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
                                <td>D.7	Verificar etiquetado en gabinetes</td>
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
                                <td>D.8	Verificar la instalación de las RRU’s</td>
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
                                <td>D.9	Verificar la instalación de las Antenas</td>
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
                                <td>D.10 Verificar ajuste en conexiones de aterramiento de RRU’s</td>
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
                                <td>D.11 Verificar que cables de energía y aterramiento de RRU’s no estén dañados o rotos</td>
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
                                <td>D.12 Verificar vulcanizado y sellado de conectores en Antenas y RRU’s</td>
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
                                <td>D.13 Verificar etiquetado en Antenas y RRU’s</td>
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
                                <td>D.14 Verificación del estado de coaxiales, F.O. y Vdc.</td>
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
                                <td>D.15 Verificar Jumpers</td>
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
                                <td>D.16 Verificar conexionado de los RETs</td>
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


                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <tbody>

                                            <tr>
                                                <th colspan="4">Alarmas internas  atravez del puerto de O&M de la RBS (LMT,OMT)</th>
                                            </tr>
                                            <tr>
                                                <th>Tecnologia</th>
                                                <th>Existe/No Existe</th>
                                                <th>Solucion</th>
                                                <th>Observaciones</th>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-3">2G</td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-3">3G</td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-3">LTE</td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-3">
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
                                        <table class="table table-bordered mb-0">
                                            <tbody>
                                            <tr>
                                                <th>Verificar alarmas externas</th>
                                                <th>Estado</th>
                                                <th>Observaciones</th>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Puerta Abierta</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Baterías en descarga</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Corte de energía comercial</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Inundación</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Falla de protección de transcientes</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Alarma de rectificador</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Humo</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Falla de baliza</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">GG. Warning</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">GG. Apagado</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">Bajo nivel de combustible</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td class="col-xl-4">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="col-xl-6">GG. Encendido</td>
                                                <td class="col-xl-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
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
                            </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <tbody>
                                            <tr>
                                                <th>Pruebas de servicio</th>
                                                <th>Numero A</th>
                                                <th>Numero B</th>
                                                <th>Prueba exitosa?</th>
                                                <th>Fecha y hora</th>
                                                <th>Observaciones</th>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-2">Llamar a un teléfono móvil GSM</td>
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
                                                <td class="col-xl-2">Llamar a un teléfono móvil UMTS</td>
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
                                                <td class="col-xl-2">Llamar a un teléfono fijo</td>
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
                                                <td class="col-xl-2">Verificación de handovers</td>
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
                                                <td class="col-xl-2">SMS</td>
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
                                                <td class="col-xl-2">Navegación en internet</td>
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

                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <tbody>

                                            <tr>
                                                <th></th>
                                                <th colspan="3">Medida de ROE</th>
                                                <th colspan="3">Medida del Delta (R1-R2<=3)</th>
                                                <th colspan="3">Medida del RDSI (LTE)</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th>Tecnologia</th>
                                                <th>Sector 1</th>
                                                <th>Sector 2</th>
                                                <th>Sector 3</th>
                                                <th>Sector 1</th>
                                                <th>Sector 2</th>
                                                <th>Sector 3</th>
                                                <th>Sector 1</th>
                                                <th>Sector 2</th>
                                                <th>Sector 3</th>
                                                <th>N. de Antenas</th>
                                                <th>N. de RRU</th>
                                            </tr>

                                            <tr>
                                                <td class="col-xl-1">2G</td>
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
                                                <td class="col-xl-1">3G</td>
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
                                                <td class="col-xl-1">LTE</td>
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
                            </div>
                        </div>

                    </div>
                </div>

                <h6>D. Relevamiento de sectores</h6>

                <div class="card">
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
                                        <td class="col-xl-4">Nombre de la BTS</td>
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

                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>

                <div class="card">
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
                                        <td class="col-xl-4">Nombre del NODO B</td>
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
                </div>

                <div class="card">
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
                </div>


            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>


