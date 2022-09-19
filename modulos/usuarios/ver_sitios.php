<?php

?>
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Sitios de Mantenimiento</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Centro</th>
                                <th width="5%">Id Sitio</th>
                                <th>Nombre Sitio</th>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Area</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT c.nombre as nombreCentro, s.codsitio, s.nombre, s.departamento, s.provincia, s.area
                                     FROM sitio s
                                     LEFT JOIN centro c ON s.idcentro = c.idcentro
                                     WHERE s.iddepartamento = ".$iddepartamento;
                        $resultado = mysqli_query($conexion, $consulta);
                        while($dato=mysqli_fetch_array($resultado)){
                            echo"
                            <tr>
                                <td>".$dato['nombreCentro']."</td>
                                <td>".$dato['codsitio']."</td>
                                <td>".$dato['nombre']."</td>
                                <td>".$dato['departamento']."</td>
                                <td>".$dato['provincia']."</td>
                                <td>".$dato['area']."</td>
                            </tr>";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

