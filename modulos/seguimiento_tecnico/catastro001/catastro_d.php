<?php

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01;
$d05_01 = $desarrollo_d->d05_01;
$d06_01 = $desarrollo_d->d06_01;
$d07_01 = $desarrollo_d->d07_01; $d07_02 = $desarrollo_d->d07_02;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
$d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
$d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
$d13_01 = $desarrollo_d->d13_01; $d13_02 = $desarrollo_d->d13_02;
$d14_01 = $desarrollo_d->d14_01; $d14_02 = $desarrollo_d->d14_02;
$d15_01 = $desarrollo_d->d15_01; $d15_02 = $desarrollo_d->d15_02;
$d16_01 = $desarrollo_d->d16_01; $d16_02 = $desarrollo_d->d16_02;
$d17_01 = $desarrollo_d->d17_01;
$d18_01 = $desarrollo_d->d18_01; $d18_02 = $desarrollo_d->d18_02;
$d19_01 = $desarrollo_d->d19_01; $d19_02 = $desarrollo_d->d19_02;

$observaciones = $obj->{'observaciones'};
/* --------------------------------------------------------------------- */
$funcionalidadArr = ["En servicio", "Fuera de servicio"];
$funcionalidadOption = "<option>Seleccionar...</option>";
foreach ($funcionalidadArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $funcionalidadOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="botonF"><i class="bx bx-save me-0"></i></button>
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()"><i class="bx bx-arrow-back me-0"></i></button>
                </div>
            </div>
        </div>

        <table class="table mb-0">
                <tbody>
                    <tr>
                        <td>Funcionalidad (en servicio/fuera de servicio)</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <?php echo $funcionalidadOption ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Estado (obsoleto/falta de capacidad/con falla)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d02_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Obsoleto'>Obsoleto</option>
                                    <option value='Con falla'>Falta de capacidad</option>
                                    <option value='Con falla'>Con falla</option>
                                    <option value='Sin observacion'>Sin observacion</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Derivación de Media tensión  (MT), Tensión en primario - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='14,4'>14,4</option>
                                    <option value='19,9'>19,9</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Propiedad (Empresa distribuidora/ENTEL S.A.)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d04_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='ENTEL S.A.'>ENTEL S.A.</option>
                                    <option value='Empresa distribuidora'>Empresa distribuidora</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Empresa distribuidora de energía</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Longitud de línea (MT) - Km</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d06_01" value="<?php echo $d06_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Poste / cantidad total</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d07_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Madera tratada'>Madera tratada</option>
                                    <option value='Concreto'>Concreto</option>
                                    <option value='PRFV'>PRFV</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d07_02" value="<?php echo $d07_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Largo total del poste - m</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Seccionador fusible MT en Partida (Si/No) / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d09_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Seccionador fusible MT en transformador (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d10_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d10_02" value="<?php echo $d10_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pararrayo de línea MT en partida (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d11_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d11_02" value="<?php echo $d11_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pararrayo de línea MT en transformador (Si/No)  / Capacidad - KV</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d12_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d12_02" value="<?php echo $d12_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema de puesta a tierra en puesto de transformación / medida - ohm (*)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d13_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d13_02" value="<?php echo $d13_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema de puesta a tierra de paso / cantidad</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d14_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Si'>Si</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d14_02" value="<?php echo $d14_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema en baja tensión (BT) / Tensión - V</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <select id="d15_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                    <option>Seleccionar...</option>
                                    <option value='Monofasico'>Monofasico</option>
                                    <option value='Bifasico'>Bifasico</option>
                                    <option value='Trifasico'>Trifasico</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d15_02" value="<?php echo $d15_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacidad del transformador - KVA / Frecuencia - Hz</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d16_01" value="<?php echo $d16_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d16_02" value="<?php echo $d16_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Marca de transformador</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d17_01" value="<?php echo $d17_01 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Modelo de transformador / Fecha de verificación (dd/mm/aaaa)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d18_01" value="<?php echo $d18_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d18_02" value="<?php echo $d18_02 ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>N° Serie de transformador  / Fecha de verificación (dd/mm/aaaa)</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d19_01" value="<?php echo $d19_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d19_02" value="<?php echo $d19_02 ?>">
                            </div>
                        </td>
                    </tr>
                </tbody>
        </table>

        <h7 class="mb-0 text-uppercase">Otras observaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>

    </div>
</div>
