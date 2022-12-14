<?php

$desarrollo_d = $obj->{'desarrollo_d'};
//$f01_1 = $f_verificacion->f01_1 ? "checked" : ""; $f01_2 = $f_verificacion->f01_2 ? "checked" : ""; $f01_3 = $f_verificacion->f01_3;
$d01_01 = $desarrollo_d->d01_01;
$d02_01 = $desarrollo_d->d02_01;
$d03_01 = $desarrollo_d->d03_01;
$d04_01 = $desarrollo_d->d04_01; $d04_02 = $desarrollo_d->d04_02;
$d05_01 = $desarrollo_d->d05_01;
$d06_01 = $desarrollo_d->d06_01;
$d07_01 = $desarrollo_d->d07_01;
$d08_01 = $desarrollo_d->d08_01;
$d09_01 = $desarrollo_d->d09_01; $d09_02 = $desarrollo_d->d09_02;
$d10_01 = $desarrollo_d->d10_01; $d10_02 = $desarrollo_d->d10_02;
$d11_01 = $desarrollo_d->d11_01; $d11_02 = $desarrollo_d->d11_02;
$d12_01 = $desarrollo_d->d12_01; $d12_02 = $desarrollo_d->d12_02;
$d13_01_01 = $desarrollo_d->d13_01_01; $d13_01_02 = $desarrollo_d->d13_01_02;
$d13_02_01 = $desarrollo_d->d13_02_01; $d13_02_02 = $desarrollo_d->d13_02_02;
$d13_03_01 = $desarrollo_d->d13_03_01; $d13_03_02 = $desarrollo_d->d13_03_02;
$d13_04_01 = $desarrollo_d->d13_04_01; $d13_04_02 = $desarrollo_d->d13_04_02;
$d13_05_01 = $desarrollo_d->d13_05_01; $d13_05_02 = $desarrollo_d->d13_05_02;
$d13_06_01 = $desarrollo_d->d13_06_01; $d13_06_02 = $desarrollo_d->d13_06_02;
$d13_07_01 = $desarrollo_d->d13_07_01; $d13_07_02 = $desarrollo_d->d13_07_02;
$d13_08_01 = $desarrollo_d->d13_08_01; $d13_08_02 = $desarrollo_d->d13_08_02;
$d14_01 = $desarrollo_d->d14_01;
$d15_01 = $desarrollo_d->d15_01;
$d16_01 = $desarrollo_d->d16_01;



$observaciones = $obj->{'observaciones'};
/* --------------------------------------------------------------------- */
$servicioArr = ["En servicio", "Fuera de servicio"];
$servicioOption = "<option>Seleccionar...</option>";
foreach ($servicioArr as $element){
    $selected = "";
    if ($d01_01 == $element) $selected = "selected";
    $servicioOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

/**$estadoArr = ["Obsoleto", "Falta de capacidad", "Con falla", "Sin observacion"];
$estadoOption = "<option>Seleccionar...</option>";
foreach ($estadoArr as $element){
    $selected = "";
    if ($d02_01 == $element) $selected = "selected";
    $estadoOption .= "<option value='$element' $selected>".$element."</option>";
}*/
/* --------------------------------------------------------------------- */
$sist_de_bajaArr = ["Monofasico", "Trifasico"];
$sist_de_bajaOption = "<option>Seleccionar...</option>";
foreach ($sist_de_bajaArr as $element){
    $selected = "";
    if ($d03_01 == $element) $selected = "selected";
    $sist_de_bajaOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$inoutdoorArr = ["Indoor", "Outdoor"];
$inoutdoorOption = "<option>Seleccionar...</option>";
foreach ($inoutdoorArr as $element){
    $selected = "";
    if ($d06_01 == $element) $selected = "selected";
    $inoutdoorOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */
$protec_principalArr = ["Termomagn??tico", "Breiker"];
$protec_principalOption = "<option>Seleccionar...</option>";
foreach ($protec_principalArr as $element){
    $selected = "";
    if ($d10_01 == $element) $selected = "selected";
    $protec_principalOption .= "<option value='$element' $selected>".$element."</option>";
}
/* --------------------------------------------------------------------- */

?>

<div class="card">
    <div class="card-body">

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <table class="table mb-0">
            <tbody>
                <tr>
                    <td>Funcionalidad (en servicio/fuera de servicio)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d01_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $servicioOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Estado (obsoleto/falta de capacidad/con falla)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d02_01" value="<?php echo $d02_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sistema en baja tensi??n BT (Monof??sico/trif??sico)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d03_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo  $sist_de_bajaOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                    <tr>
                        <td>Marca / Modelo</td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_01" value="<?php echo $d04_01 ?>">
                            </div>
                        </td>
                        <td>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d04_02" value="<?php echo $d04_02 ?>">
                            </div>
                        </td>
                    </tr>
                   <tr>
                        <td>N?? Serie</td>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control" id="d05_01" value="<?php echo $d05_01 ?>">
                            </div>
                        </td>
                    </tr>
                <!--<tr>
                    <td>ByPass (Interno/Externo)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d06_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php /*echo  $bypassOption */?>
                            </select>
                        </div>
                    </td>
                </tr>-->
                <tr>
                    <td>Tipo de uso (Indoor/Outdoor)</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <select id="d06_01" class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                                <?php echo $inoutdoorOption ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de entrada - VAC</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d07_01" value="<?php echo $d07_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Voltaje de salida - VDC</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d08_01" value="<?php echo $d08_01 ?>">
                        </div>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>Capacidad - KVA / Corriente total - A</td>

                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_01" value="<?php echo $d09_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d09_02" value="<?php echo $d09_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Numero de Serie / Modelo de m??dulos de Control</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d10_01" value="<?php echo $d10_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d10_02" value="<?php echo $d10_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                     <td>Cantidad de m??dulos en uso / cantidad espacio libre para m??dulos</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d11_01" value="<?php echo $d11_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d11_02" value="<?php echo $d11_02 ?>">
                        </div>
                    </td>
                 </tr>
                <tr>
                    <td>Capacidad de cada m??dulo - KVA / corriente - A</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d12_01" value="<?php echo $d12_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d12_02" value="<?php echo $d12_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">Numero de Serie / Modelo de m??dulos de Potencia</td>
                </tr>
                <tr>
                  <td class = "col-5p">1</td>
                  <td>
                       <div class="input-group input-group-sm mb-2">
                           <input type="text" class="form-control" id="d13_01_01" value="<?php echo $d13_01_01 ?>">
                       </div>
                  </td>
                  <td>
                      <div class="input-group input-group-sm mb-2">
                          <input type="text" class="form-control" id="d13_01_02" value="<?php echo $d13_01_02 ?>">
                      </div>
                  </td>
                </tr>
                <tr>
                    <td class = "col-5p">2</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_02_01" value="<?php echo $d13_02_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_02_02" value="<?php echo $d13_02_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">3</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_03_01" value="<?php echo $d13_03_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_03_02" value="<?php echo $d13_03_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">4</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_04_01" value="<?php echo $d13_04_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_04_02" value="<?php echo $d13_04_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">5</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_05_01" value="<?php echo $d13_05_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_05_02" value="<?php echo $d13_05_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">6</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_06_01" value="<?php echo $d13_06_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_06_02" value="<?php echo $d13_06_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">7</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_07_01" value="<?php echo $d13_07_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_07_02" value="<?php echo $d13_07_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class = "col-5p">8</td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_08_01" value="<?php echo $d13_08_01 ?>">
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d13_08_02" value="<?php echo $d13_08_02 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de inicio de consumo de energ??a</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d14_01" value="<?php echo $d14_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="text" class="form-control" id="d15_01" value="<?php echo $d15_01 ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fecha vencimiento de garant??a</td>
                    <td colspan="2">
                        <div class="input-group input-group-sm mb-2">
                            <input type="date" class="form-control" id="d16_01" value="<?php echo $d16_01 ?>">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row align-items-center row-cols-auto g-2 mb-2">
            <div class="col">
                <?php require("../../modulos/seguimiento_tecnico/single_save.php"); ?>
            </div>
        </div>

        <h7 class="mb-0 text-uppercase">Otras observaciones:</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="observaciones"><?php echo $observaciones ?></textarea>
        </div>

    </div>
</div>
