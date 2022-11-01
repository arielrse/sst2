
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento Correctivo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="card-body">

                <div class="row row-cols-auto g-3">
                        <div class="col">
                            <input name="nuevoE" type="button" value="Nuevo" class="btn btn-sm btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=correctivo_nuevo.php'" />
                        </div>
                </div>
                <hr />

                <div class="table-responsive">
                    <table id="table-correctivos" class="table table-sm table-striped table-bordered">
                        <thead class="table-light">
                        <tr>
                            <th width="5%">Fecha</th>
                            <th width="30%">Razon</th>
                            <th width="20%">Centro</th>
                            <th width="20%">Estacion</th>
                            <th width="15%">Sistema</th>
                            <th width="10%">Afectacion</th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT r.id, r.fecha_eje, r.razon, c.nombre as centro, e.nombreestacion, s.nombresistemafalla, r.servicio_afecta as afectacion 
                                     FROM rutina_correctivo r
                                     LEFT JOIN centro c        ON r.idcentro    = c.idcentro
                                     LEFT JOIN estacionentel e ON r.idestacione = e.idestacionentel
                                     LEFT JOIN departamento d  ON r.iddepartamento = d.iddepartamento 
                                     LEFT JOIN ticket_sistemafalla s ON r.sistemafalla COLLATE utf8_general_ci = s.idsistemafalla COLLATE utf8_general_ci
                                     WHERE r.iddepartamento = " . $iddepartamento . "
                                     ORDER BY r.id desc";
                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            while($dato=mysqli_fetch_array($resultado)){
                                $href = "$link_modulo?path=correctivo_editar.php&idc=".$dato['id'];
                                $ticket_html = "";

                                echo"
                                <tr>
                                    <td><small>".$dato['fecha_eje']."</small></td>
                                    <td><small>".$dato['razon']."</small></td>
                                    <td><small>".$dato['centro']."</small></td>
                                    <td><small>".$dato['nombreestacion']."</small></td>
                                    <td><small>".$dato['nombresistemafalla']."</small></td>
                                    <td><small>".$dato['afectacion']."</small></td>
                                    <td>
                                        <div class='d-flex order-actions'>
                                            <a href='$href' class=''><i class='bx bx-edit'></i></a>
                                        </div>
                                    </td>
                                </tr>";
                            }
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=text/javascript>

    $(document).ready(function() {
        $('#table-correctivos').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );

</script>