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
                        <li class="breadcrumb-item active" aria-current="page">Mantenimiento Preventivo</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr/>

        <div class="card">
            <div class="card-body">

                    <div class="row row-cols-auto g-3">

                            <div class="col">
                                <input name="nuevoE" type="button" value="Nuevo" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=nuevo_evento.php'" />
                            </div>

                    </div>
                    <hr />

                <div class="table-responsive">
                    <!--<table id="example" class="table table-striped table-bordered" style="width:100%">-->
                    <table id="example" class="table mb-0" style="width:100%">
                        <thead class="table-light">
                        <tr>
                            <th>Fecha</th>
                            <th>Cod</th>
                            <th>Sitio</th>
                            <th>Tipo</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $consulta = "SELECT e.`idevento`, s.`codsitio`, s.`nombre`, s.`tiponodo`, e.`inicio`, e.`fin`, g.idgrupo, g.`nombre` as grupo
                                     FROM evento e
                                     LEFT JOIN sitio s ON e.`idsitio` = s.`idsitio`
                                     LEFT JOIN grupo g ON e.`idgrupo` = g.`idgrupo`";

                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            while($dato=mysqli_fetch_array($resultado)){
                                $href = "$link_modulo?path=prev_estacion.php&event=".$dato['idevento']."&gp=".$dato['idgrupo'];
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
                                    <td>".$dato['codsitio']."</td>
                                    <td>".$dato['nombre']."</td>
                                    <td>".$dato['tiponodo']."</td>
                                    <td>".$dato['grupo']."</td>
                                    <td>
                                        <div class='d-flex order-actions'>
                                            <a href='$href' class=''><i class='bx bxs-edit'></i></a>
                                            <a href='javascript:;' class='ms-3'><i class='bx bxs-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>";
                            }
                        }

                        ?>

                        </tbody>
                        <tfoot class="table-light">
                        <tr>
                            <th>Fecha</th>
                            <th>Cod</th>
                            <th>Sitio</th>
                            <th>Tipo</th>
                            <th>Grupo</th>
                            <th>Acciones</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

<link href="../../paquetes/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">var GB_ROOT_DIR = "./../../paquetes/greybox/";</script>
<script type="text/javascript" src="../../paquetes/greybox/AJS.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="../../paquetes/greybox/gb_scripts_no_reload.js"></script>
