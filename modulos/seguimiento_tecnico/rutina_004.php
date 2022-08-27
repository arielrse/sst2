<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - AIRES ACONDICIONADOS GABINETES</h6>
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
                                <td>F.1 Tiene Alarmas activas</td>
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
                                <td>G.1.1 Verificación de la mirilla de la línea de liquido</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Sin Humedad</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Con humedad</label>
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
                                <td>G.1.2	Verificación de la mirilla nivel de aceite del compresor</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">N/A</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">A nivel</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Bajo</label>
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
                                <td>G.1.3 Verificación de operación del relé de arranque del compresor</td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No operativo</label>
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
                                <td>G.1.4 Verificación del estado del aislante térmico de cañerías de cobre</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Deteriorado</label>
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
                                <td>G.1.5	Verificación de fugas de gas refrigerante en uniones de soldadura/mecánicas</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Sin fugas</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Deteriorado</label>
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
                                <td>G.1.6	Inspección del sistema eléctrico del TD a equipo</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Si</label>
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
                                <td>G.1.7	Verificación del ruido de operación de los rodamientos de motores</td>
                                <td>

                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Aceptable</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Alto</label>
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
                                <td>G.1.8	Verificación de operación del presostato Alta (cada 6 meses)</td>
                                <td>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No operativo</label>
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
                                <td>G.1.9	Verificación de operación del presostato baja (cada 6 meses)</td>
                                <td>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Operativo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No operativo</label>
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
                                <td>G.1.10	Verificación de aterramiento del equipo</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.11	Verificación del buen estado físico del equipo</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Con daños</label>
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
                                <td>G.1.12	Verificación del estado físico de los motores ventiladores del condensador</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.13	Verificación del estado físico de los motores ventiladores del evaporador</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.14	Verificación de la sujeción de los ventiladores del condensador en el equipo</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Estable</label>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.15	Verificación de la sujeción de los ventiladores del evaporador en el equipo</td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Estable</label>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.16	Verificación de la correcta operación del display y teclas</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.17	Verificación del estado del trayecto del drenaje de condensado</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.1.18	Verificación de tornillos, remaches de sujeción de carcasa, tapas del equipo</td>
                                <td></td>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Obs.</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="5">G.2	Actividades de mantenimiento</th>
                            </tr>

                            <tr>
                                <td>G.2.1	Limpieza de los filtros de polvo de aire</td>
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
                                <td>G.2.2	Limpieza de polvo del panel del evaporador</td>
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
                                <td>G.2.3	Cambio de filtro de polvo de aire</td>
                                <td></td>
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
                                <td>G.2.4	Lavado del panel serpentín del condensador</td>
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
                                <td>G.2.5	Peinado de las aletas del serpentín del evaporador</td>
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
                                <td>G.2.6	Peinado de las aletas del serpentín del condensador</td>
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
                                <td>G.2.7	Ajuste de borneras en el panel eléctrico del equipo</td>
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
                                <td>G.2.8	Ajuste de borneras del circuito del equipo en el tablero eléctrico</td>
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
                                <td>G.2.9	Lubricación de los motores ventiladores</td>
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
                                <td>G.2.10	Limpieza de obstrucciones del trayecto del drenaje de condensado</td>
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
                                <th colspan="5">G.3	Mediciones y configuraciones durante y/o después del mantenimiento</th>
                            </tr>

                            </tbody>
                        </table>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.1	Temperatura del ambiente con instrumento</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">°C</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.2	Temperatura de retorno con instrumento</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">°C</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.4	Temperatura de retorno registrado por el equipo</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">°C</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.5	Temperatura de inyección registrado por el equipo</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">°C</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.6	Setting de temperatura en el equipo</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">°C</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.7	Setting de humedad relativa</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">%HR</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.8	Medición de humedad relativa registrado por el equipo</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">%HR</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.9	Medición de alta presión con instrumento</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">PSI</label>
                            </div>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <h7 class="mb-0">G.3.10	Medición de baja presión con instrumento</h7>
                            <div class="form-check form-check-inline">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">PSI</label>
                            </div>
                        </div>



                        <div>
                            <h7 class="mb-0">G.3.11	Medición de tensión en el equipo (V)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1-N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2-N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3-N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L1-L2</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L1-L3</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2-L2</span>
                            <input type="text" class="form-control">


                        </div>

                        <div>
                            <h7 class="mb-0">G.3.12	Medición de corriente de operación sin compresor (A)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">PE</span>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.13	Medición de corriente de operación con compresor (A) LA</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">PE</span>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.14	Medición de pico de corriente del compresor (A)  LRA</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3</span>
                            <input type="text" class="form-control">

                        </div>

                        <div>
                            <h7 class="mb-0">G.3.15	Medición de tensión en el transformador (V)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">Entrada</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">Salida</span>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.16	Medición de corriente  y voltaje de trabajo de Motor ventilador MV1 (A)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>

                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.17	Medición de corriente  y voltaje de trabajo de Motor ventilador MV2 (A)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>

                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.18	Medición de corriente  y voltaje de trabajo de Motor ventilador MV3 (A)</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>

                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.19	Medición de Capacitores en motores ventiladores</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">MV1</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">uf</span>

                            <span class="input-group-text">MV2</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">uf</span>

                            <span class="input-group-text">MV3</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">uf</span>

                            <input type="text" class="form-control">
                            <span class="input-group-text">registro voltaje nominal</span>
                        </div>

                        <div>
                            <h7 class="mb-0">G.3.20	Medición de Capacitor en el compresor</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control">
                            <span class="input-group-text">uf</span>

                            <input type="text" class="form-control">
                            <span class="input-group-text">registro de voltaje nominal</span>

                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            </div>
                            <span class="input-group-text">N/A</span>

                        </div>

                    </div>
                </div>



            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

