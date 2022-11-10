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
                        <li class="breadcrumb-item active" aria-current="page">Estaciones de Mantenimiento</li>
                    </ol>
                </nav>
            </div>
        </div>

        <?php if (isAdmin() || isExpert()) { ?>
        <div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-sm btn-primary px-4" onClick="location.href='<?=$link_modulo?>?path=nuevo_estacion.php'">Nuevo</button>
            </div>
        </div>
        <?php } ?>
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Centro</th>
                                <th width="5%">Id Estacion</th>
                                <th>Nombre Estacion</th>
                                <th>Tecnología</th>
                                <th>Area</th>
                                <th>Municipio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT e.idestacionentel, e.id, c.nombre as nombreCentro, e.nombreestacion, e.tecnologia, e.area, e.municipio
                                     FROM estacionentel e
                                     LEFT JOIN centro c ON e.idcentro = c.idcentro
                                     WHERE c.iddepartamento = ".$iddepartamento;
                        $resultado = mysqli_query($conexion, $consulta);

                        while($dato=mysqli_fetch_array($resultado)){
                            $href = $link_modulo."?path=modificar_estacion.php&idest=".$dato['idestacionentel'];
                            $btnEditar = ( isAdmin() || isExpert() ) ? "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>" : "";
                            echo"
                            <tr>
                                <td>".$dato['nombreCentro']."</td>
                                <td>".$dato['id']."</td>
                                <td>".$dato['nombreestacion']."</td>
                                <td>".$dato['tecnologia']."</td>
                                <td>".$dato['area']."</td>
                                <td>".$dato['municipio']."</td>
                                <td>".$btnEditar."</td>
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

