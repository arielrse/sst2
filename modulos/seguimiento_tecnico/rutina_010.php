<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE ALIMENTACION ININTERRUMPIDA</h6>
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
                                <td>F.1 Sistema en Baja Tensión Operativo</td>
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
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control" placeholder="Describa la alarma">
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
                                <td>G.1.1 Verificación estado de cables AC de alimentación</td>
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
                                <td>G.1.2 Verificación estado de cables DC de alimentación</td>
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
                                <td>G.1.3 Verificación ordenado y peinado cables AC</td>
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
                                <td>G.1.4 Verificación correcta instalación de módulos PDU</td>
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
                                <td>G.1.5 Verificación Correcta de pantalla y teclas de funcionamiento</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">En Falla</label>
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
                                <td>G.1.6 Verificar el estado del cable de tierra y terminales del equipo</td>
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


                            </tbody>
                        </table>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th colspan="5">G.2	Actividades de mantenimiento</th>
                            </tr>

                            <tr>
                                <td>G.2.1 Pruebas de funcionalidad térmicos de habilitación</td>
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
                                <td>G.2.2 Pruebas de funcionalidad  automática</td>
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
                                <td>G.2.3 Etiquetado  correcto de interruptores</td>
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
                                <td>G.2.4 Ajuste de borneras en general</td>
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
                                <td>G.2.5 Reemplazo de terminales mal instalados</td>
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
                                <td>G.2.6 Ajuste de conexiones sistema puesta a tierra del equipo</td>
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
                                <th colspan="5">G.3 Mediciones y Configuraciones</th>
                            </tr>

                            </tbody>
                        </table>

                        <div>
                            <h7>G.3.1 Registrar voltaje  AC de entrada</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1-N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2-N</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3-N</span>
                            <input type="text" class="form-control">

                        </div>

                        <div>
                            <h7>G.3.2 Registrar de la corriente AC de entrada</h7>
                        </div>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">L1</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L2</span>
                            <input type="text" class="form-control">

                            <span class="input-group-text">L3</span>
                            <input type="text" class="form-control">

                        </div>


                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.3 Frecuencia de entrada AC</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">Hz</span>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.4 Registro del voltaje DC del banco de baterías</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">V</span>

                            <span class="input-group-text">Registro del voltaje  AC a la salida</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>
                        </div>

                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text">G.3.5 Registro de la corriente DC de salida</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>

                            <span class="input-group-text">Registro de la corriente AC a la salida</span>
                            <input type="text" class="form-control">
                            <span class="input-group-text">A</span>
                        </div>


                        <table class="table">
                            <tbody>

                            <tr>
                                <td>G.3.6 Verificar y controlar la distribución de AC  UPS en tableros de la estación.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Equilibrado</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Desequilibrado</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>G.3.7 Revisión de sobrecalentamiento del cableado en AC y DC.</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Normal</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Caliente</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Porcentaje de carga Pu/Pn</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-control" type="text" id="inlineCheckbox1">
                                    </div>
                                </td>
                                <td>%</td>
                            </tr>

                            </tbody>
                        </table>


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
                                <td>G.4.1 Corte AC</td>
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
                                <td>G.4.2 Baterias en Descarga</td>
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
                                <td>G.4.3 Falla Modulo</td>
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

<script src="../../paquetes/rutina/rutina010.js" type="text/javascript"></script>