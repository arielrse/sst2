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
                        <li class="breadcrumb-item active" aria-current="page">Extraworks</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="card-body">

                <form name="amper" method="post" action="<?=$link_modulo?>?path=extraworks.php">
                <div class="row row-cols-auto g-3">

                    <?php if (isAdmin() || isExpert()) { ?>
                        <div class="col">
                            <input name="nuevoE" type="button" value="Nuevo" class="btn btn-sm btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_extrawork.php'" />
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
                            <th width="15%">Fecha</th>
                            <th width="20%">Centro</th>
                            <th width="20%">Estacion</th>
                            <th width="35%">Titulo</th>
                            <th width="10%"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $consulta = "SELECT r.id, r.fecha, r.titulo, c.nombre as centro, s.nombre as sitio, r.informe
                                     FROM rutina_extrawork r
                                     LEFT JOIN centro c ON r.idcentro   = c.idcentro
                                     LEFT JOIN sitio s  ON r.idsitio = s.idsitio
                                     WHERE c.iddepartamento = " . $iddepartamento . "
                                     AND r.fecha BETWEEN '$inicio' AND '$fin'
                                     ORDER BY r.id desc";

                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            while( $dato = mysqli_fetch_array($resultado) ){
                                $idrutinacorrectivo = $dato['id'];
                                $href = "$link_modulo?path=editar_extrawork.php&id=".$dato['id'];

                                $link_doc = "";
                                if ($dato['informe'] != ''){
                                    $href_doc = $dato['informe'] != '' ? "../../docs/extrawork/".$dato['informe'] : '';
                                    $link_doc = "<a href='$href_doc' target='_blank'><i class='bx bx-file'></i></a>";
                                }

                                $ticket_html = "";
                                $eliminarRutina = "";

                                $link_editar = "";
                                if (isAdmin() || isExpert()) {
                                    $link_editar .= "<a href='$href' class=''><i class='bx bx-edit'></i></a>";
                                }

                                echo"
                                <tr>
                                    <td>".$dato['fecha']."</td>
                                    <td>".$dato['centro']."</td>
                                    <td>".$dato['sitio']."</td>
                                    <td>".$dato['titulo']."</td>
                                    <td>
                                        <div class='d-flex order-actions'>
                                            ".$link_editar."
                                            ".$link_doc."   
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