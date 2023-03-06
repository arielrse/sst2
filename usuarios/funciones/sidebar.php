<?php
$mst = "../modulos/seguimiento_tecnico.php?path=";
$muser = "../modulos/usuarios.php?path=";
$link_home = "../modulos/seguimiento_tecnico.php?path=dashboard.php";
?>
<input type="hidden" name="link_home" id="link_home" value="<?php echo $link_home ?>" />
<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>" />

<div class="sidebar-wrapper" data-simplebar="true">

    <div class="sidebar-header">
        <div>
            <img src="../../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">EXSMECON</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">


        <li>
            <a href="<?=$mst?>dashboard.php">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <!--<li class="menu-label">-->
            <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <?php
                $buttonsDepto = "";
                $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");

                while($dato=mysqli_fetch_array($resultado)){
                    $codigo = $dato['codigo'];
                    $active = $iddepartamento==$dato['iddepartamento'] ? 'active' : '';

                    if (isNationalClient()){
                        $onclick = "onclick='changeDepto(`$codigo`)'";
                        $buttonsDepto .= "<button type='button' $onclick class='btn btn-sm btn-outline-primary $active'>$codigo</button>";
                    } else {
                        $buttonsDepto .= $iddepartamento==$dato['iddepartamento'] ? "<button type='button' class='btn btn-sm btn-outline-primary' disabled>$codigo</button>" : "";
                    }
                }
                echo $buttonsDepto;
                ?>
            </div>
        <!--</li>-->

        <li>
            <a href="<?=$mst?>tickets.php">
                <div class="parent-icon"><i class='bx bx-braille'></i>
                </div>
                <div class="menu-title">Tickets Correctivo</div>
            </a>
        </li>

        <li>
            <a href="<?=$mst?>correctivos_mtto.php">
                <div class="parent-icon"><i class='bx bx-repeat'></i>
                </div>
                <div class="menu-title">Mtto Correctivo</div>
            </a>
        </li>

        <?php if (isAdmin() || isExpert()) { ?>
        <li>
            <a href="<?=$mst?>cronograma.php">
                <div class="parent-icon"><i class='bx bx-calendar-plus'></i>
                </div>
                <div class="menu-title">Lista Cronograma</div>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="<?=$mst?>cronograma_cm.php">
                <div class="parent-icon"><i class='bx bx-calendar-star'></i>
                </div>
                <div class="menu-title">Mtto Preventivo</div>
            </a>
        </li>

        <li>
            <a href="<?=$mst?>mantenimientos.php">
                <div class="parent-icon"><i class='bx bx-grid-alt'></i>
                </div>
                <div class="menu-title">Lista Preventivos</div>
            </a>
        </li>

        <?php if (isAdmin() || isExpert() || isNationalClient() || isClient()) { ?>
        <li>
            <a href="<?=$mst?>extraworks.php">
                <div class="parent-icon"><i class='bx bx-bullseye'></i>
                </div>
                <div class="menu-title">Extrawork</div>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="<?=$muser?>ver_centros.php">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Centros Mtto</div>
            </a>
        </li>

        <li>
            <a href="<?=$muser?>ver_grupos.php">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Grupos Mtto</div>
            </a>
        </li>

        <li>
            <a href="<?=$muser?>ver_sitios.php">
                <div class="parent-icon"><i class='bx bx-building-house'></i>
                </div>
                <div class="menu-title">Sitios de Mtto</div>
            </a>
        </li>

        <li>
            <a href="<?=$muser?>ver_estaciones.php">
                <div class="parent-icon"><i class='bx bx-station'></i>
                </div>
                <div class="menu-title">Estaciones de Mtto</div>
            </a>
        </li>

        <?php if ( isAdmin() || isExpert() || isClient() || isNationalClient() ) { ?>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Estadisticas</div>
            </a>
            <ul>
                <li> <a href="<?=$mst?>estadistica_preventivo.php"><i class="bx bx-right-arrow-alt"></i>Mtto. Preventivo</a>
                </li>

            </ul>
            <ul>
                <li> <a href="<?=$mst?>estadistica_correctivo.php"><i class="bx bx-right-arrow-alt"></i>Mtto. Correctivo</a>
                </li>

            </ul>
        </li>
        <?php } ?>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-file"></i>
                </div>
                <div class="menu-title">Reportes</div>
            </a>
            <ul>
                <li> <a href="<?=$muser?>reporte_catastro.php"><i class="bx bx-right-arrow-alt"></i>Catastros</a>
                </li>

            </ul>
            <ul>
                <li> <a href="<?=$muser?>reporte_tickets.php"><i class="bx bx-right-arrow-alt"></i>Tickets</a>
                </li>

            </ul>
            <ul>
                <li> <a href="<?=$muser?>reporte_ticketsC4.php"><i class="bx bx-right-arrow-alt"></i>Reporte Cert4</a>
                </li>

            </ul>
        </li>

        <?php if ( isAdmin() || isExpert() ) { ?>
        <li>
            <a href="<?=$muser?>ver_materiales.php">
                <div class="parent-icon"><i class='bx bx-collection'></i>
                </div>
                <div class="menu-title">Materiales</div>
            </a>
        </li>
        <?php } ?>

        <li class="menu-label">Configuraciones</li>

        <?php if ( isAdmin() ) { ?>
        <li>
            <a href="<?=$muser?>ver_usuarios.php">
            <!--<a href="#">-->
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Usuarios</div>
            </a>
        </li>
        <?php } ?>

        <?php if ( isAdmin() ) { ?>
            <li>
                <a href="<?=$muser?>periodos.php">
                    <div class="parent-icon"><i class='bx bx-ruler'></i>
                    </div>
                    <div class="menu-title">Periodos</div>
                </a>
            </li>
        <?php } ?>

        <li>
            <a href="../../salir.php">
                <!--<a href="#">-->
                <div class="parent-icon"><i class='bx bx-log-out'></i>
                </div>
                <div class="menu-title">Salir</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>
<script type="text/javascript">

    function changeDepto(depto){

        if (confirm('¿Desea cambiar al Departamento ' + depto + ' ?')) {

            var link_home = $('#link_home').val();
            var id_user   = $('#id_user').val();

            jQuery.post("../../modulos/usuarios/change_depto.php", {
                    codigoDepto: depto,
                    id_user: id_user
                }, function(data, textStatus){
                    window.location.href = link_home;
                }
            );
        }

    }

</script>