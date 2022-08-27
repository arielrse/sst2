<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - SFV / HIBRIDO</h6>
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
                                <td>F.1 ¿Tiene Alarmas activas?</td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.2	Verificación de histórico de alarmas</td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>F.3	Verificación de taxonomía del equipo</td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <h6>G. Desarrollo de Rutina de Mantenimiento</h6>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="5">G.1	Verificaciones técnicas</th>
                            </tr>

                            <tr>
                                <td>G.1.1	Verificación estado de paneles solares, soportes, junción Box.</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Deteriorado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.2	Verificar si los paneles fotovoltaicos  están orientados al Norte Geográfico</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.3	Verificar si no existe obstrucción (Arboles) línea de vista paneles solares</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Obstrucción</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.4	Verificar el estado del cable de tierra y terminales de cada equipo</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.5	Verificación cables de comunicación se encuentran conectados</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.6	Verificación Estado Banco Baterías</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Malo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.7	Verificación operación Grupo Electrógeno</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">N/A</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.8	Verificación operación  Inversor</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">N/A</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="5">G.2	Actividades de mantenimiento</th>
                            </tr>

                            <tr>
                                <td>G.2.1	Limpieza de la superficie paneles solares</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.2	Limpieza de Módulos Rectificadores</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.3	Limpieza sistema de climatización (Aire Acondicionado/Extractor de Aire)</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.4	Limpieza del área correspondiente a la línea de vista Paneles Solares</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.5	Ajuste de borneras  conexiones arreglo panales a  junción box</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.6	Ajuste de borneras cables de tierra equipos y paneles a las barra de tierra</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.7	Ajuste de borneras cables de energía  Junction Box-PVDU</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.8	Ajuste  de borneras cables de energía  gabinete a ingreso Banco Baterías</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.9	Ajuste  de borneras sistemas de protección gabinete</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.10	Sistematización cables de energía Panel-Junction Box-PVDU</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No es necesario</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.11	Sistematización cables de energía y sistema de tierra gabinete</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No es necesario</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.12	Etiquetado de cables de energía Junction Box, Paneles Solares, gabinete.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No es necesario</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.2.13	Etiquetado de cargas unidad de distribución de Potencia</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">No es necesario</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Realizado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="5">G.3	Mediciones y configuraciones durante y/o después del mantenimiento</th>
                            </tr>

                            <tr>
                                <td colspan="5">G.3.1 Medición de  voltajes y corriente paneles solares</td>
                            </tr>


                            </tbody>
                        </table>


                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">V Vdc</th>
                                                <th scope="col">I  A</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="col-xl-4">Cadena 1</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 2</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 3</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 4</td>
                                                <td class="col-xl-4">
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

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">V(Vdc)</th>
                                                <th scope="col">I(A)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="col-xl-4">Array 1</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 2</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 3</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 4</td>
                                                <td class="col-xl-4">
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

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">V(Vdc)</th>
                                                <th scope="col">I(A)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="col-xl-4">Array 1</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 2</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 3</td>
                                                <td class="col-xl-4">
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
                                                <td class="col-xl-4">Array 4</td>
                                                <td class="col-xl-4">
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


                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.2	Medida de Corriente (DC) PVDU</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">I</span>
                            <span class="input-group-text">Medida  de voltaje DC. entrada PVDU</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.3	Medida Pico de  corriente DC. Recarga</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">I</span>
                            <span class="input-group-text">Corriente DC salida  display ESS500</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">I</span>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.4	Voltaje DC salida Display  ESS500</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>
                            <span class="input-group-text">Capacidad de baterías  display ESS500</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">Ah.</span>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.5	Coeficiente de Carga Baterías display ESS500</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text"></span>
                            <span class="input-group-text"></span>
                            <span class="input-group-text"></span>
                        </div>

                        <table class="table mb-0">
                            <tbody>

                            <tr>
                                <th colspan="5">G.4	Verificación alarmas: Localmente y  Gestión Remota</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th colspan="2">Local</th>
                                <th colspan="2">Remoto</th>
                            </tr>

                            <tr>
                                <td>G.4.1	Alarma Puerta Abierta</td>
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
                            </tr>

                            <tr>
                                <td>G.4.2	Alta temperatura Gabinete</td>
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
                            </tr>

                            <tr>
                                <td>G.4.3	Baterías en Descarga</td>
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
                            </tr>

                            <tr>
                                <td>G.4.4	Falla Modulo Rectificador</td>
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
                            </tr>

                            <tr>
                                <td>G.4.5	Falla Modulo Regulador solar</td>
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
                            </tr>

                            <tr>
                                <td>G.4.6	Falla Grupo Electrógeno</td>
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

