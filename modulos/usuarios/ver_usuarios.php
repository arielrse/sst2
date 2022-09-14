<?


$consulta="SELECT id,CONCAT(nombre,' ',ap_pat,' ',ap_mat) AS nom,DATE_FORMAT(fecha_nacimiento,'%d/%m/%Y') AS nac,cuenta,direccion,mail,mail2,skype,msn,telf,cel,telf_oficina,interno,cargo,nro_ing,activo FROM usuarios";


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
                        <li class="breadcrumb-item active" aria-current="page">Gestion de usuarios</li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row row-cols-auto mb-2">
            <div class="col">
                <button type="button" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_usuario.php'">Nuevo</button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Cuenta</th>
                                <th>Email</th>
                                <th>Departamento</th>
                                <th>Nivel</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT u.`id`, concat(u.nombre, ' ', u.`ap_pat`, ' ', u.`ap_mat`) AS nombre, u.`cuenta`, u.`mail`, u.`nivel`, d.`nombre` as depto
                                    FROM usuarios u
                                    LEFT JOIN departamento d ON u.`iddepartamento` = d.`iddepartamento`";

                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);


                        while($dato=mysqli_fetch_array($resultado)){

                            $href = $link_modulo."?path=modificar_usuario.php&id=".$dato['id'];
                            $btnEditar = "<a href='$href' class='ms-3'><i class='bx bxs-edit'></i></a>";

                            echo"
                            <tr>
                                <td><center>".$dato['id']."</center></td>
                                <td><center>".$dato['nombre']."</center></td>
                                <td><center>".$dato['cuenta']."</center></td>
                                <td><center>".$dato['mail']."</center></td>
                                <td><center>".$dato['depto']."</center></td>
                                <td><center>".$dato['nivel']."</center></td>
                                <td><center>".$btnEditar."</center></td>
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

