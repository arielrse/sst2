<?php

?>
<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h7 class="mb-0 text-uppercase">Cronograma de Mantenimiento</h7>
                <div class="card">
                    <div class="card-body">

                        <p>
                            <label>CENTROS:</label>
                            <select name="idcentro" id="ingreso_por">
                                <option value="0" selected class="title7"> Seleccionar... </option>
                                <?php
                                $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, codigo FROM centro where iddepartamento = $iddepartamento");
                                while($dato=mysqli_fetch_array($resultado))
                                    echo '<option value="'.$dato['idcentro'].'">'.$dato['nombre'].'</option>';
                                ?>
                            </select>

                            <label>MES:</label>
                            <select name="mes" id="mes">
                                <?php
                                $Meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

                                for ($i=1; $i<=12; $i++) {
                                    if ($i == date('m'))
                                        echo '<option value="'.$i.'"selected>'.$Meses[($i)-1].'</option>';
                                    else
                                        echo '<option value="'.$i.'">'.$Meses[($i)-1].'</option>';
                                }
                                ?>
                            </select>

                            <select name="" class="">
                                <?php
                                for($i = 1; $i <= date("t"); $i++) {
                                    $i==date("d") ? $valor = "selected" : $valor = "";
                                    echo "<option value='$i' $valor>$i</option>";
                                }
                                ?>
                            </select>

                            <button class="btn btn-secondary" id="prev-btn" type="button">Buscar</button>
                        </p>
                        <!-- SmartWizard html -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=text/javascript>


</script>