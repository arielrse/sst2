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
                        <li class="breadcrumb-item active" aria-current="page">Gestion de Centros de Mantenimiento</li>
                    </ol>
                </nav>
            </div>
        </div>


        <!--<div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-primary px-5" onClick="location.href='<?/*=$link_modulo*/?>?path=nuevo_grupo.php'">Nuevo</button>
            </div>
        </div>-->

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">Codigo</th>
                                <th>Departamento</th>
                                <th>Centro</th>
                                <th width="5%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT d.`codigo`, d.`nombre` AS nombreDepto, c.`nombre` AS nombreCentro
                                        FROM centro c
                                        LEFT JOIN departamento d ON c.`iddepartamento` = d.`iddepartamento`";

                        $resultado = mysqli_query($conexion, $consulta);

                        while($dato=mysqli_fetch_array($resultado)){
                            //$href = $link_modulo."?path=modificar_grupo.php&idg=".$dato['idgrupo'];
                            //$btnEditar = "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>";

                            echo"
                            <tr>
                                <td>".$dato['codigo']."</td>
                                <td>".$dato['nombreDepto']."</td>
                                <td>".$dato['nombreCentro']."</td>
                                <td></td>
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

