<?php

if(isset($_POST["fecha"])) $fecha = $_POST["fecha"]." 00:00:00";
else {
    $dato=mysqli_fetch_array(mysqli_query($conexion, "select now()"));
    $fecha=$dato[0];
}

if(isset($_POST["menos"])) {
    $dato=mysqli_fetch_array(mysqli_query($conexion, "SELECT DATE_SUB('$fecha',INTERVAL 1 DAY)"));
    $fecha=$dato[0];
}

if(isset($_POST["mas"])){
    $dato=mysqli_fetch_array(mysqli_query($conexion, "SELECT DATE_ADD('$fecha',INTERVAL 1 DAY)"));
    $fecha=$dato[0];
}

$fecha=substr($fecha,0,10);
$fini= substr($fecha,0,4)."-". substr($fecha,5,2)."-01";
$ffin= substr($fecha,0,4)."-". substr($fecha,5,2)."-31";

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
                        <li class="breadcrumb-item active" aria-current="page">Gestion de Cronogramas</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="row row-cols-auto g-3 mb-2">
            <div class="col">
                <input name="nuevoE" type="button" value="Nuevo" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_evento.php'" />
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Centro</th>
                            <th>ID Sitio</th>
                            <th>Sitio</th>
                            <th>Tipo</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $res = mysqli_query($conexion, "SELECT g.idgrupo FROM grupo g WHERE g.user1 = '$id_user' OR    g.user2 = '$id_user'");
                        $dato = mysqli_fetch_array($res);

                        $consulta = "SELECT e.`idevento`, c.nombre as centro, s.`codsitio`, s.`nombre`, s.`tiponodo`, e.`inicio`, e.`fin`, g.idgrupo, g.`nombre` as grupo
                                     FROM evento e
                                     LEFT JOIN sitio s ON e.`idsitio` = s.`idsitio`
                                     LEFT JOIN grupo g ON e.`idgrupo` = g.`idgrupo`
                                     LEFT JOIN centro c ON g.idcentro = c.idcentro
                                     WHERE c.iddepartamento = ".$iddepartamento;

                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            while($dato=mysqli_fetch_array($resultado)){
                                $idevento = $dato['idevento'];
                                $nombre = $dato['nombre'];
                                $href = "$link_modulo?path=prev_estacion.php&event=".$idevento."&gp=".$dato['idgrupo'];
                                if($nively == 1){
                                    //$ticket_html = "<a href='$link_modulo?path=u_ticketn.php&ticket=".$dato['ticket']."'>".$dato['ticket']."</a>";
                                    $ticket_html = "";
                                }else{
                                    //$ticket_html = $dato['ticket'];
                                    $ticket_html = "";
                                }

                                echo"
                                <tr>
                                    <td>".$dato['inicio']."</td>
                                    <td>".$dato['centro']."</td>
                                    <td>".$dato['codsitio']."</td>
                                    <td>".$dato['nombre']."</td>
                                    <td>".$dato['tiponodo']."</td>
                                    <td>".$dato['grupo']."</td>
                                    <td>
                                        <div class='d-flex order-actions'>
                                            <a href='javascript:;' class='ms-3' onclick='eliminarMtto(`$idevento`, `$nombre`)'><i class='bx bxs-trash'></i></a>
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

<!--<link href="../../paquetes/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">var GB_ROOT_DIR = "./../../paquetes/greybox/";</script>
<script type="text/javascript" src="../../paquetes/greybox/AJS.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/gb_scripts_no_reload.js"></script>-->
<script type=text/javascript>
    function eliminarMtto(idevento, nombre){

        if (confirm( '¿Seguro que desea eliminar? : ' + nombre)){
            jQuery.post("../../paquetes/rutina/delete_mtto.php", {
                idevento: idevento,
            }, function(data){
                if (data == -1)
                    noti_error_delete();

                $("#example").load(window.location + " #example");
            }
            );
        }
    }


</script>