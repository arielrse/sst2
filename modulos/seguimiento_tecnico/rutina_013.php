<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];

?>
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - INFRAESTRUCTURA DEL SITIO</h6>
        <hr/>

        <?php /*require("rutina_head.php"); */?>
        <h6 class="mb-0 text-uppercase">A. Identificación del Sitio</h6>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-3">

                <table class="table mb-0">
                    <tbody>
                    <tr>
                        <td>Departamento</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Provincia</td>
                        <td colspan="3">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Localidad</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Municipio</td>
                        <td colspan="3">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ID Sitio</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Property_id</td>
                        <td colspan="3">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>CM/SCM</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Lat.</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Long.</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <h6>B. Acceso al sitio (desde el Centro o Subcentro de Mantenimiento)</h6>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>

                    <tr>
                        <td>Trayecto</td>
                        <td colspan="3">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Distancia en Km</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Tiempo de Viaje en Hrs.</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Estado del camino</td>
                        <td colspan="3">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Tracking de la ruta</td>
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

        <h6>C. Datos de la Intervencion</h6>
        <div class="card">
            <div class="card-body">

                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Fecha de mantenimiento:</span>
                    <input type="date" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Hora de inicio:</span>
                    <input type="time" class="form-control">
                    <span class="input-group-text">Hora de Fin:</span>
                    <input type="time" class="form-control">
                    <span class="input-group-text">Tiempo Transcurrido:</span>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <h6 class="mb-0">E. Personal Técnico Responsable</h6>
        <div class="card">
            <div class="card-body">
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Nombre:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Cargo:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Teléfono:</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Nombre:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Cargo:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Teléfono:</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Nombre:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Cargo:</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Teléfono:</span>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>


        <h6 class="mb-0">E: Datos de contacto en sitio</h6>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>

                    <tr>
                        <td>Nombres y apellidos</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Tipo Contacto</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Telefono celular</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Telefono fijo</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Nombres y apellidos</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Tipo Contacto</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Telefono celular</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>Telefono fijo</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <h6 class="mb-0">F: Datos del predio</h6>
        <div class="card">
            <div class="card-body">
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Tipo de  sitio</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Predio</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Cerramiento perimetral</span>
                    <input type="text" class="form-control">
                </div>

                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Dimension predio</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Loza de equipos</span>
                    <input type="text" class="form-control">
                </div>

                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Loza o caseta grupo</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Espacio en Loza equipos</span>
                    <input type="text" class="form-control">
                </div>

            </div>
        </div>

        <h6 class="mb-0">G. Tipo de estructura radiante</h6>
        <div class="card">
            <div class="card-body">
                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Tipo estructura 1</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Altura (m)</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Estado</span>
                    <input type="text" class="form-control">
                </div>

                <div class="input-group input-group-sm mb-2">
                    <span class="input-group-text">Tipo estructura 2</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Altura (m)</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">Estado</span>
                    <input type="text" class="form-control">
                </div>

            </div>
        </div>





        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h6>H. Desarrollo de Rutina de Mantenimiento</h6>

                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <tbody>

                            <tr>
                                <td colspan="2"><strong>MANTENIMIENTO PREVENTIVO DE AMBIENTES</strong></td>
                                <td colspan="2">Observaciones</td>
                            </tr>
                            <tr>
                                <td>H.1 Limpieza ambiente de equipos</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.2	Verificación de estado de puertas, chapas y candados.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.3	Verificación de filtración de agua</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.4	Verificación de humedad</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.5	Verificación y eliminacion de plagas ( hormigas, roedores, etc.)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.6	Verificacion de iluminacion</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><strong>MANTENIMIENTO PREVENTIVO CASETAS OUTDOOR</strong></td>
                                <td colspan="2">Observaciones</td>
                            </tr>
                            <tr>
                                <td>H.7	Verificacion del estado del techo</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.8	Verificacion de la estructura</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.9	Verificacion de la loza (Undimientos, rajaduras, etc)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.10 Verificacion de plagas ( hormigas , roedores, etc.)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.11 Verificacion de iluminacion</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><strong>MANTENIMIENTO PREVENTIVO DEL PREDIO</strong></td>
                                <td colspan="2">Observaciones</td>
                            </tr>

                            <tr>
                                <td>H.12 Limpieza y retiro de material residual, desechos sólidos, liquidos y papel pegado en pared, del área interna y externa al cerco perimetral.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.13 Limpieza de maleza en el área interna y externa (4 metros circundantes al sitio)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.14 Verificacion del muro o enmallado perimetral</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.15 Verificacion de puertas y chapas (Puerta principal y otros)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.16 Verificar si exsite hundimiento del terreno o esta estable</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.17 Verificacion de señaletica</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><strong>MANTENIMIENTO PREVENTIVO DE LA ESTRUCTURA DEL SISTEMA RADIANTE</strong></td>
                                <td colspan="2">Observaciones</td>
                            </tr>

                            <tr>
                                <td>H.18 Verificar la verticalidad de la estructura.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.19 Verificar si no existe puntos de oxidación en la estructura y tomar fotografías en caso de encontrar anormalidades.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.20 Verificar la tensión de los cables de arriostramiento (Solo en torres arriostradas)</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.21 Verificar el estado del pintado de la estructura y adjuntar fotografías en caso de encontrar anormalidades.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.22 Verificar el estado de las escaleras de acceso de la torre</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.23 Verificar estado de jaula de proteccion de la escalera de acceso.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.24 Verificar el estado de los descansos</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.25 Verificar si los Pernos Principales estan ajustados</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.26 Verificación de conexion a puesta a Tierra.</td>
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
                                        <input type="text" class="form-control" placeholder="Obs.">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>H.27 Verificación de iluminacion en baliza</td>
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

        <h7 class="mb-0 text-uppercase">I. Observaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <div class="row row-cols-auto p-3">
            <div class="col">
                <input type="button" id="boton" class="btn btn-primary px-5" value="Guardar" />
            </div>
            <div class="col">
                <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar"
                       onclick="history.back()" />
            </div>
        </div>

    </div>
</div>

<script src="../../paquetes/rutina/rutina013.js" type="text/javascript"></script>