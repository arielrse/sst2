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
                        <li class="breadcrumb-item active" aria-current="page">Materiales</li>
                    </ol>
                </nav>
            </div>
        </div>

        <?php if (isAdmin() || isExpert()) { ?>
        <div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-sm btn-primary px-4" onClick="location.href='<?=$link_modulo?>?path=nuevo_material.php'">Nuevo</button>
            </div>
        </div>
        <?php } ?>
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Material</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT * FROM material";
                        $resultado = mysqli_query($conexion, $consulta);

                        while($dato=mysqli_fetch_array($resultado)){
                            $href = $link_modulo."?path=modificar_material.php&idmat=".$dato['idmaterial'];
                            $btnEditar = ( isAdmin() || isExpert() ) ? "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>" : "";
                            echo"
                            <tr>
                                <td>".$dato['codigo']."</td>
                                <td>".$dato['nombre']."</td>
                                <td>".$dato['unidad']."</td>
                                <td>".$dato['precio']."</td>
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

