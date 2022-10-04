<?php
$mst = "../modulos/seguimiento_tecnico.php?path=";
$muser = "../modulos/usuarios.php?path=";
?>

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

        <li class="menu-label">Seguimiento</li>

        <li>
            <a href="<?=$mst?>tickets.php">
                <div class="parent-icon"><i class='bx bx-braille'></i>
                </div>
                <div class="menu-title">Tickets</div>
            </a>
        </li>

        <?php if (isAdmin() || isExpert()) { ?>
        <li>
            <a href="<?=$mst?>cronograma.php">
                <div class="parent-icon"><i class='bx bx-calendar-plus'></i>
                </div>
                <div class="menu-title">Cronogramas</div>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="<?=$mst?>cronograma_cm.php">
                <div class="parent-icon"><i class='bx bx-calendar-plus'></i>
                </div>
                <div class="menu-title">Cronograma Centros</div>
            </a>
        </li>

        <li>
            <a href="<?=$mst?>mantenimientos.php">
                <div class="parent-icon"><i class='bx bx-grid-alt'></i>
                </div>
                <div class="menu-title">Mtto Preventivo</div>
            </a>
        </li>

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
                <div class="parent-icon"><i class='bx bx-unite'></i>
                </div>
                <div class="menu-title">Sitios de Mtto</div>
            </a>
        </li>

        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Estadisticas</div>
            </a>
        </li>

        <li class="menu-label">Configuraciones</li>

        <!--<li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Roles</div>
            </a>
        </li>-->

        <li>
            <a href="<?=$muser?>ver_usuarios.php">
            <!--<a href="#">-->
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Usuarios</div>
            </a>
        </li>

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