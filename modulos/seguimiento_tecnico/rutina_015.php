<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE TRANSMISIÓN (MW, FO, SAT)</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">

                <!--<h6>D. Sistema de Transporte Microondas MW</h6>
               <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                   <div class="col">
                       <div class="card">
                           <div class="card-body">
                               <table class="table table-bordered mb-3">
                                   <tbody>
                                   <tr>
                                       <th>IDU</th>
                                       <th>NE_Origen</th>
                                       <th>NE_Destino</th>
                                       <th>Fabricante</th>
                                       <th>Modelo</th>
                                       <th>Alarmas</th>
                                       <th>Estado ML_MW</th>
                                   </tr>

                                   <tr>
                                       <td class="col-xl-1">1</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">2</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">3</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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

                               <table class="table table-bordered mb-3">
                                   <tbody>
                                   <tr>
                                       <th>ODU</th>
                                       <th>NE_Origen</th>
                                       <th>NE_Destino</th>
                                       <th>Fabricante</th>
                                       <th>Modelo</th>
                                       <th>Frecuencia Tx-Origen (Mhz)</th>
                                       <th>Frecuencia Tx-Destino (Mhz)</th>
                                   </tr>

                                   <tr>
                                       <td class="col-xl-1">1</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">2</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">3</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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

                               <table class="table table-bordered mb-3">
                                   <tbody>
                                   <tr>
                                       <th>ODU</th>
                                       <th>Tipo de Radio MW  1+1, 1+0, 2+0, XPIC, HTBY, SD</th>
                                       <th>Azimuth/Tilt</th>
                                       <th>Niveles de Potencia TX/RX</th>
                                       <th>Valor XPI (20 - 35) dB</th>
                                       <th>Valor SNIR (> 40 dB)</th>
                                       <th>Diámetro  Antena [m]</th>
                                       <th>Altura de Antena [m]</th>

                                   </tr>

                                   <tr>
                                       <td class="col-xl-1">1</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">2</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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
                                       <td class="col-xl-1">3</td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
                                           <div class="input-group input-group-sm">
                                               <input type="text" class="form-control">
                                           </div>
                                       </td>
                                       <td class="col-xl-1">
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


               <div class="card">
                   <div class="card-body">
                       <table class="table">
                           <tr>
                               <th colspan="4">Desarrollo de Rutina de Mantenimiento</th>
                           </tr>

                           <tr>
                               <td>D.1 Verificacion de los canales proteccion IDU</td>
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
                               <td>D.2	Verificacion peinado de cables y etiquetado en IDU</td>
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
                               <td>D.3	Limpieza externa de equipo IDU</td>
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
                               <td>D.4	Verificacion peinado de cables y Etiquetado en ODU</td>
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
                               <td>D.5	Verificacion y sellado de conectores en ODU</td>
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
                               <td>D.6	Verificacion de soporte de antena (V)</td>
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
                               <td>D.7	Verificacion de soportes de antena (H)</td>
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
                               <td>D.8	Verificar estabilidad de antena</td>
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
                               <td>D.9	Verificación de sellado y vulcanizado de conectores RF</td>
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
                   </div>
               </div>-->
                <?php require("rutina015/rutina_d.php"); ?>

                <?php require("rutina015/rutina_e.php"); ?>

                <?php require("rutina015/rutina_f.php"); ?>

            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina015.js" type="text/javascript"></script>