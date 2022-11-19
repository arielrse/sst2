<?php
$mes      = isset($_POST["mes"]) ? $_POST["mes"] : date("n");
$anio     = isset($_POST["anio"]) ?  $_POST["anio"] : date("Y");

$ultimoDiaMes = date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
$inicio = $anio."-".$mes."-"."01";
$fin    = $anio."-".$mes."-".$ultimoDiaMes;
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
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento Correctivo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="card-body">

                <form name="amper" method="post" action="<?=$link_modulo?>?path=correctivos_mtto.php">
                <div class="row row-cols-auto g-3">

                    <?php if (isAdmin() || isExpert()) { ?>
                        <div class="col">
                            <input name="nuevoE" type="button" value="Nuevo" class="btn btn-sm btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=correctivo_nuevo.php'" />
                        </div>
                    <?php } ?>
                        <div class="col">
                            <select name="anio" class="form-select form-select-sm">
                                <option value="2021" <? if($anio==2021) echo"class='naranja' selected"; ?>>2021</option>
                                <option value="2022" <? if($anio==2022) echo"class='naranja' selected"; ?>>2022</option>
                                <option value="2023" <? if($anio==2023) echo"class='naranja' selected"; ?>>2023</option>
                                <option value="2024" <? if($anio==2024) echo"class='naranja' selected"; ?>>2024</option>
                            </select>&nbsp;
                        </div>
                        <div class="col">
                            <?php
                            $meses = ["01"=>"Enero","02"=>"Febrero","03"=>"Marzo","04"=>"Abril","05"=>"Mayo","06"=>"Junio","07"=>"Julio","08"=>"Agosto","09"=>"Septiembre","10"=>"Octubre","11"=>"Noviembre","12"=>"Diciembre"];
                            $options = "<option value=''>Meses<option>";
                            foreach ($meses as $clave => $element){
                                $selected = $mes == $clave ? 'selected' : '';
                                $options .= '<option value="'.$clave.'" '.$selected.'>'.$element.'</option>';
                            }
                            ?>
                            <select id="mes" name="mes" class="form-select form-select-sm">
                                <?php echo $options ?>
                            </select>
                        </div>
                        <div class="col">
                            <!--<button class="btn btn-sm btn-dark px-4" id="btn-buscar">Buscar</button>-->
                            <input class="btn btn-sm btn-secondary px-3" name="ver" type="submit"  value="Buscar" />
                        </div>
                </div>
                </form>

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
                        $consulta = "SELECT r.id, r.estado, r.fecha_eje, r.razon, c.nombre as centro, e.nombreestacion, s.nombresistemafalla, r.servicio_afecta as afectacion 
                                     FROM rutina_correctivo r
                                     LEFT JOIN centro c        ON r.idcentro    = c.idcentro
                                     LEFT JOIN estacionentel e ON r.idestacione = e.idestacionentel
                                     LEFT JOIN departamento d  ON r.iddepartamento = d.iddepartamento 
                                     LEFT JOIN ticket_sistemafalla s ON r.sistemafalla COLLATE utf8_general_ci = s.idsistemafalla COLLATE utf8_general_ci
                                     WHERE r.iddepartamento = " . $iddepartamento . "
                                     AND r.fecha_eje BETWEEN '$inicio' AND '$fin'
                                     ORDER BY r.id desc";
                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            while($dato=mysqli_fetch_array($resultado)){
                                $idrutinacorrectivo = $dato['id'];
                                $href = "$link_modulo?path=correctivo_editar.php&idc=".$dato['id'];
                                $ticket_html = "";

                                $eliminarRutina = ($dato['estado']=='PEN') ? "<a href='javascript:;' class='ms-3' id='btnEliminarRutina' onclick='eliminarRutinaCorrectivo(`$idrutinacorrectivo`)'><i class='bx bx-trash'></i></a>" : "";
                                $eliminarRutina = (!isClient() && !isNationalClient()) ? $eliminarRutina : "";

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
                                            ".$eliminarRutina."
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

    function eliminarRutinaCorrectivo(idrutinacorrectivo){

        if (confirm('¿Esta seguro eliminar la rutina correctivo y todos sus archivos?')){
            jQuery.post("../../paquetes/rutina/delete_correctivo.php", {
                idrutinacorrectivo: idrutinacorrectivo
                }, function(data){
                    $("#table-correctivos").load(window.location + " #table-correctivos");
                }
            );
        }
    }

</script>