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

        <?php if (isAdmin() || isExpert()) { ?>
        <div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-sm btn-primary px-4" onClick="location.href='<?=$link_modulo?>?path=nuevo_sitio.php'">Nuevo</button>
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
                                <th width="5%">Id Sitio</th>
                                <th>Nombre Sitio</th>
                                <th>Provincia</th>
                                <th>Municipio</th>
                                <th>Area</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT idsitio, c.nombre as nombreCentro, s.codsitio, s.nombre, s.provincia, s.municipio, s.area
                                     FROM sitio s
                                     LEFT JOIN centro c ON s.idcentro = c.idcentro
                                     WHERE s.iddepartamento = ".$iddepartamento;
                        $resultado = mysqli_query($conexion, $consulta);

                        while($dato=mysqli_fetch_array($resultado)){
                            $href = $link_modulo."?path=modificar_sitio.php&ids=".$dato['idsitio'];
                            $btnEditar = "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>";
                            echo"
                            <tr>
                                <td>".$dato['nombreCentro']."</td>
                                <td>".$dato['codsitio']."</td>
                                <td>".$dato['nombre']."</td>
                                <td>".$dato['provincia']."</td>
                                <td>".$dato['municipio']."</td>
                                <td>".$dato['area']."</td>
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

