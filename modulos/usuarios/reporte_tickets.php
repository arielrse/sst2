<?php

?>
<div class="page-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bx-file me-1 font-20 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Reporte Tickets de Mantenimiento</h5>
                        </div>

                        <form class="row g-3" name="amper" method="post" action="../../excel/excel_st_listado_ticketreporte.php">
                            <!--<input type="hidden" name="path" value="generar_catastros.php" />-->
                            <div class="col-md-12">
                                <label for="iddepartamento" class="form-label">Departamento</label>
                                <select name="iddepartamento" class="form-select" id="iddepartamento" required>
                                    <option value="" selected> Seleccionar... </option>
                                    <?
                                    $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                    while($dato=mysqli_fetch_array($resultado))
                                        echo '<option value="'.$dato['iddepartamento'].'">'.$dato['nombre'].'</option>';
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="idcentro" class="form-label">Centro</label>
                                <select name="idcentro" class="single-select" id="idcentro">
                                    <option value="" selected class="title7"> Seleccionar... </option>
                                    <?php
                                    $resultado=mysqli_query($conexion, "SELECT idcentro, nombre, coddep FROM centro");
                                    while($dato=mysqli_fetch_array($resultado))
                                        echo '<option value="'.$dato['idcentro'].'">' . '(' . $dato['coddep'] . ') ' . $dato['nombre'].'</option>';
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="fechainicio" class="form-label">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fechainicio" name="fechainicio" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fechafin" class="form-label">Fecha Fin</label>
                                <input type="date" class="form-control" id="fechafin" name="fechafin" required>
                            </div>

                            <div class="col-12">
                                <input name="adicionar" type="submit" value="Generar" class="btn btn-primary px-5" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>