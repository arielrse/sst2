<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - GRUPO ELECTRÓGENO </h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6>F. Verificación Visual - Estado del Activo</h6>

                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <tbody>

                            <tr>
                                <td>F.1	Estado de ductos de fluidos de combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.2	Estado de ductos de fluidos de refrigerante (agua)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.3	Fuga de combustibles</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.4	Fuga de lubricantes</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.5	Fuga de refrigerante</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.6	Fuga en la bomba combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.7	Estado de ducto de escapes</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.8	Estado físico de batería de arranque</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.9	Estado conexiones eléctricas</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.10	Estado físico de display</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.11	Estado de cargador de batería</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.12 Estado de Limpieza del grupo</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.13 Estado de indicadores luminosos (leds, focos) en el tablero de Control.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.14 Estado de la protección Transiente de 2do Nivel</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.15 Estado de correcta conexión a tierra</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.16 Verificación de los medidores en el panel de control.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6>G. Desarrollo de Rutina de Mantenimiento</h6>

                <div class="card">
                    <div class="card-body">

                        <div><h7>G.1 GRUPO ELECTRÓGENO</h7></div>

                        <div><h7><strong>G.1.1 Verificación del grupo electrógeno sin carga: monofásico/trifásico</strong></h7></div>
                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                            <div class="col">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Fase 1 - N</th>
                                        <th scope="col">Fase 2 - N</th>
                                        <th scope="col">Fase 3 - N</th>
                                        <th scope="col">Neutro - PE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-4">G.1.1.1 Voltaje de salida del grupo sin carga [VAC]</td>
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
                                        <td class="col-xl-4">G.1.1.2 Frecuencia sin carga [Hz]</td>
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

                        <div><h7><strong>G.1.2 Verificación del grupo electrógeno con carga: monofásico/trifásico</strong></h7></div>
                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                            <div class="col">

                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Fase 1 - N</th>
                                        <th scope="col">Fase 2 - N</th>
                                        <th scope="col">Fase 3 - N</th>
                                        <th scope="col">Neutro - PE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="col-xl-4">G.1.2.1 Voltaje de salida del grupo con carga [VAC]</td>
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
                                        <td class="col-xl-4">G.1.2.2 Corriente de salida del grupo en servicio [A]</td>
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
                                        <td class="col-xl-4">G.1.2.3 Frecuencia con carga [Hz]</td>
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

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="5">G.1.3 Verificación baterías de arranque</th>
                            </tr>

                            <tr>
                                <td>G.1.3.1 Prueba de arranque con el grupo generador</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3.2 Verificar voltaje [VDC]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3.3 Verificar corriente de carga con el grupo encendido [A]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3.4 Asegurar terminales de las baterías de arranque</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3.5 Limpiar las baterías de arranque</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3.6 Verificar la temperatura superficial en operación [°C]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Alta</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="4">G.1.4 Mantenimiento con el motor apagado y frio:</th>
                            </tr>

                            <tr>
                                <td>G.1.4.1 Verificar el nivel de aceite en el "Carter" (varilla nivel en el rango de bajo a alto)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Baja</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.2 Verificar el estado del aceite (en la varilla)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Buena</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Mala</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.3 Limpiar el filtro de aire</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.4 Ajustar la tensión en las correas impulsoras de las turbinas de aire</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.5 Verificar el nivel de refrigerante en el radiador (agua + liquido refrigerante)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Baja</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.6 Verificar si la rejilla de salida de aire (libre de obstrucciones)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.7 Ajuste en bornes y/o terminales de todas las conexiones eléctricas</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.8 Verificar el ajuste del ventilador al alternador</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.9 Verificar el libre desplazamiento del flotador en el tanque de combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4.10 Verificar la temperatura superficial del precalentador [°C]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="4">G.1.5 Mantenimiento con el motor en funcionamiento:</th>
                            </tr>

                            <tr>
                                <td>G.1.5.1 Verificar la operación de las bombas de inyección de combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.5.2 Verificar temperatura del motor en operación [°C]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.5.3 Verificar revoluciones del motor en operación [RPM]</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="4">G.2 TANQUE DE COMBUSTIBLE EXTERNO</th>
                            </tr>

                            <tr>
                                <td>G.2.1 Verificar el estado del ducto trasvase de combustible del tanque externo</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Dañado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.2 Verificar el funcionamiento de la bomba trasvase externa de combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.3 Verificar el sensor de nivel del tanque externo de combustible</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.4 Drenar el agua y sedimento mediante válvula purgadora del tanque externo</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <div>
                            <h7 class="mb-0 text-uppercase">G.3 SISTEMA DE TRANSFERENCIA AUTOMÁTICO INTEGRADO</h7>
                        </div>
                        <div>
                            <h7 class="mb-0">G.3.1 Pruebas de funcionamiento automático</h7>
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.1.1 Tiempo de arranque automático y transferencia a carga (seg)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">T. Arranque</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">T. Transferen.</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">Obs.</span>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.1.2 Tiempo de retransferencia automática  y parada (seg)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">T. Retransfer.</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">T. Parada</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">Obs.</span>
                            <input type="text" class="form-control">
                        </div>


                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="4">G.3.2 Mantenimiento del sistema de transferencia automático integrado</th>
                            </tr>

                            <tr>
                                <td>G.3.2.1 Verificación de operativa de transferencia Manual</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.3.2.2 Verificación de etiquetado de cables de energía</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Verificado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Dañado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.3.2.3 Verificación de fusibles de protección</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.3.2.4 Verificación de relés de control</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Falla</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

