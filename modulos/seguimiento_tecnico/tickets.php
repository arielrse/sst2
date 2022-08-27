
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
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SST</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Gestión de Tickets</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>

        </div>
        <!--end breadcrumb-->
        <!--<h6 class="mb-0 text-uppercase">Gestión de Tickets</h6>-->
        <hr/>

        <div class="card">
            <div class="card-body">


                    <div class="row row-cols-auto g-3">
                        <form name="form1" method="post" class="row g-3">
                        <div class="col">
                            <input name="fecha" type="text" class="result form-control" id="fecha" value="<?=substr($fecha,0,10);?>">
                        </div>

                        <div class="col">
                            <input class="btn btn-dark px-5" name="Submit" type="submit" value="Buscar">
                        </div>

                        <div class="col">
                            <button type="button" class="btn btn-primary px-5" onClick="location.href='<?=$link_modulo?>?path=n_ticketn.php'">Nuevo</button>
                        </div>
                        </form>
                    </div>
                    <hr />
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>N&deg;</th>
                            <th>CM/SCM</th>
                            <th>Nro Ticket</th>
                            <th>Estacion</th>
                            <th>Tecnologia</th>
                            <th>Area</th>
                            <th>Atencion</th>
                            <th>Afectacion</th>
                            <th>Sistema en Falla</th>
                            <th>Equipo en Falla</th>
                            <th>Tipo de Falla</th>
                            <th>Solucion</th>
                            <th>Inicio de alarmaRIF</th>
                            <th>Notificacion</th>
                            <th>Intervencion</th>
                            <th>Restablecimiento</th>
                            <th>Tiempo de interrupcion</th>
                            <th>Tiempo empleado</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        //$fecha = '2022-07-28';
                        $consulta = "
                        SELECT *,
                            CONCAT( 
                                    TIMESTAMPDIFF(HOUR, fecha_inicio, fecha_fin), ':', 
                                    MOD(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin), 60), '' )AS tiempo_interrupcion,
                            CONCAT( 
                                    TIMESTAMPDIFF(HOUR, fecha_notificacion, fecha_fin), ':', 
                                    MOD(TIMESTAMPDIFF(MINUTE, fecha_notificacion, fecha_fin), 60), '' )AS tiempo_empleado    	
                        FROM(
                            SELECT 
                            centro.nombre as centro_nombre,
                            st_ticketn.ticket,
                            st_ticketn.idnodo,
                            estacionentel.nombreestacion,
                            estacionentel.tiponodo,	
                            tecnologia.nombretecnologia,
                            estacionentel.AREA,
                            ticket_atencion.nombreatencion,
                            ticket_afectacionservicio.nombreafectacionservicio,
                            ticket_sistemafalla.nombresistemafalla,
                            ticket_equipofalla.nombreequipofalla,
                            ticket_tipofalla.nombretipofalla,
                            ticket_solucion.nombresolucion,
                            st_ticketn.descripcionfalla,
                            timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
                            timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
                            timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
                            timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
                            st_ticketn.observaciones
                            FROM 
                        
                            st_ticketn
                            LEFT JOIN estacionentel ON st_ticketn.idnodo= estacionentel.idestacionentel
                            LEFT JOIN centro ON estacionentel.idcentro= centro.idcentro
                            LEFT JOIN ticket_atencion ON st_ticketn.idatencion= ticket_atencion.idatencion
                            LEFT JOIN tecnologia ON st_ticketn.idtecnologia= tecnologia.idtecnologia
                            LEFT JOIN ticket_afectacionservicio ON st_ticketn.idafectacionservicio= ticket_afectacionservicio.idafectacionservicio
                            LEFT JOIN ticket_sistemafalla ON st_ticketn.idsistemafalla= ticket_sistemafalla.idsistemafalla
                            LEFT JOIN ticket_equipofalla ON st_ticketn.idequipofalla= ticket_equipofalla.idequipofalla
                            LEFT JOIN ticket_tipofalla ON st_ticketn.idtipofalla= ticket_tipofalla.idtipofalla
                            LEFT JOIN ticket_solucion ON st_ticketn.idsolucion= ticket_solucion.idsolucion
                            where
                            st_ticketn.fecha_inicio_rif='$fecha'
                        )cn1";

                        $resultado = mysqli_query($conexion, $consulta);
                        $filas	   = mysqli_num_rows($resultado);

                        if($filas!=0){
                            $i=0;
                            while($dato=mysqli_fetch_array($resultado)){
                                $i++;

                                if($nively == 1){
                                    $ticket_html = "<a href='$link_modulo?path=u_ticketn.php&ticket=".$dato['ticket']."'>".$dato['ticket']."</a>";
                                }else{
                                    $ticket_html = $dato['ticket'];
                                }

                                echo"
                                <tr>
                                    <td>".$i."</td>
                                    <td><center>".$dato['centro_nombre']."</center></td>
                                    <td><center>$ticket_html</center></td>
                                    <td><center>".$dato['nombreestacion']."</center></td>
                                    <td><center>".$dato['nombretecnologia']."</center></td>
                                    <td><center>".$dato['AREA']."</center></td>
                                    <td><center>".$dato['nombreatencion']."</center></td>
                                    <td><center>".$dato['nombreafectacionservicio']."</center></td>
                                    <td><center>".$dato['nombresistemafalla']."</center></td>
                                    <td><center>".$dato['nombreequipofalla']."</center></td>
                                    <td><center>".$dato['nombretipofalla']."</center></td>
                                    <td><center>".$dato['nombresolucion']."</center></td>
                                    <td><center>".$dato['fecha_inicio']."</center></td>
                                    <td><center>".$dato['fecha_notificacion']."</center></td>
                                    <td><center>".$dato['fecha_sitio']."</center></td>
                                    <td><center>".$dato['fecha_fin']."</center></td>
                                    <td><center>".$dato['tiempo_interrupcion']."</center></td>
                                    <td><center>".$dato['tiempo_empleado']."</center></td>
                                </tr>";
                            }
                        }
                        ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>N&deg;</th>
                                <th>CM/SCM</th>
                                <th>Nro Ticket</th>
                                <th>Estacion</th>
                                <th>Tecnologia</th>
                                <th>Area</th>
                                <th>Atencion</th>
                                <th>Afectacion</th>
                                <th>Sistema en Falla</th>
                                <th>Equipo en Falla</th>
                                <th>Tipo de Falla</th>
                                <th>Solucion</th>
                                <th>Inicio de alarmaRIF</th>
                                <th>Notificacion</th>
                                <th>Intervencion</th>
                                <th>Restablecimiento</th>
                                <th>Tiempo de interrupcion</th>
                                <th>Tiempo empleado</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#fecha').bootstrapMaterialDatePicker({
            time: false
        });
    });
</script>