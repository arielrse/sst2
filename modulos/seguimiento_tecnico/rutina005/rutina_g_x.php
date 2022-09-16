<?php

$f_verificacion = $obj->{'f_verificacion'};
$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$f02_1 = $f_verificacion->f02_1 ? "checked" : ""; $f02_2 = $f_verificacion->f02_2 ? "checked" : ""; $f02_3 = $f_verificacion->f02_3;
$f03_1 = $f_verificacion->f03_1 ? "checked" : ""; $f03_2 = $f_verificacion->f03_2 ? "checked" : ""; $f03_3 = $f_verificacion->f03_3;

?>

<h6>G. Desarrollo de Rutina de Mantenimiento</h6>
<div class="card">
    <div class="card-body">
        <table class="table">
            <tbody>
            <tr>
                <th colspan="5">G.1	Verificaciones técnicas</th>
            </tr>

            <tr>
                <td>G.1.5	Inspección del sistema eléctrico del TD a equipo</td>
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
                <td>G.1.6	Verificación del ruido de operación de los rodamientos de motores</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Aceptable</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Alto</label>
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
                <td>G.1.9	Verificación de aterramiento del equipo</td>
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
                <td>G.1.10	Verificación del buen estado físico del equipo</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Bueno</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Con daños</label>
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
                <td>G.1.11	Verificación del estado físico de las aspas del ventilador</td>
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
                <td>G.1.13	Verificación de la sujeción de los ventiladores en su carcasa</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Estable</label>
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
                <td>G.1.16	Verificación de correa de trasmisión</td>
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
                <td>G.1.17	Verificación de tornillos, remaches de sujeción de carcasa, tapas del equipo</td>
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
                <th colspan="5">G.2	Actividades de mantenimiento</th>
            </tr>

            <tr>
                <td>G.2.1	Limpieza de los filtros de polvo de aire</td>
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
            <h7 class="mb-0">G.3.12	Medición de corriente de operación (A)</h7>
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
            <h7 class="mb-0">G.3.13	Medición de corriente de operación motor (A)</h7>
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
            <h7 class="mb-0">G.3.14	Medición de pico de corriente del motor (A)</h7>
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
            <h7 class="mb-0">G.3.19	Medición de Capacitores en motores ventiladores</h7>
        </div>
        <div class="input-group input-group-sm mb-2">

            <span class="input-group-text">MV1</span>
            <input type="text" class="form-control">
            <span class="input-group-text">uf</span>

            <input type="text" class="form-control">
            <span class="input-group-text">registro de voltaje nominal</span>

        </div>

    </div>
</div>