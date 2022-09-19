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
                        <li class="breadcrumb-item active" aria-current="page">Gestion de Grupos de Mantenimiento</li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_grupo.php'">Nuevo</button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Departamento</th>
                                <th>Centro</th>
                                <th>Grupo</th>
                                <th>Persona 1</th>
                                <th>Persona 2</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT g.idgrupo, g.`nombre` AS grupo, d.`nombre` AS depto, c.`nombre` AS centro, g.user1, g.user2, 
                                    concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS personal1,
                                    concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS personal2
                                    FROM grupo g
                                    JOIN centro c       ON g.`idcentro` = c.`idcentro`
                                    JOIN departamento d ON c.`iddepartamento` = d.`iddepartamento`
                                    JOIN usuarios u1    ON g.user1 = u1.id
                                    JOIN usuarios u2    ON g.user2 = u2.id
                                    WHERE d.iddepartamento = ".$iddepartamento;

                        $resultado = mysqli_query($conexion, $consulta);

                        while($dato=mysqli_fetch_array($resultado)){
                            $href = $link_modulo."?path=modificar_grupo.php&idg=".$dato['idgrupo'];
                            $btnEditar = "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>";

                            echo"
                            <tr>
                                <td>".$dato['depto']."</td>
                                <td>".$dato['centro']."</td>
                                <td>".$dato['grupo']."</td>
                                <td>".$dato['personal1']."</td>
                                <td>".$dato['personal2']."</td>
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

