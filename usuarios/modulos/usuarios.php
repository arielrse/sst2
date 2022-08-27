<?php
session_start(); 
require("../../funciones/motor.php");
require("../funciones/verificar_sesion.php");

$modulo="usuarios";
$link_modulo=$modulo.".php";
$link_modulo_r=$modulo."_r.php";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../../assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../../assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet"/>
    <link href="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="../../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <link href="../../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <link href="../../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

    <!-- datetimepicker -->
    <link href="../../assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
    <link href="../../assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
    <link href="../../assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- loader-->
    <link href="../../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="../../assets/css/app.css" rel="stylesheet">
    <link href="../../assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../../assets/css/dark-theme.css" />
    <link rel="stylesheet" href="../../assets/css/semi-dark.css" />
    <link rel="stylesheet" href="../../assets/css/header-colors.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>

    <title>Sistema de Seguimiento Técnico</title>

</head>

<body>
<!--wrapper-->
<div class="wrapper">


    <!--sidebar wrapper -->
    <?php require("../funciones/sidebar.php"); ?>
    <!--end sidebar wrapper -->


    <!--start header -->
    <?php require("../funciones/header.php"); ?>
    <!--end header -->

    <!--start page wrapper -->
    <?php
        if (isset($_REQUEST['path'])) {
            $path = $_REQUEST['path'];
            include("../../modulos/usuarios/" . $path);
        }
    ?>
    <!--end page wrapper -->

    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <?php include("../../funciones/footer.php"); ?>
    <!--<footer class="page-footer">
        <p class="mb-0">Copyright © 2022. All right reserved.</p>
    </footer>-->
</div>
<!--end wrapper-->

<!--start switcher-->

<!--end switcher-->

<!-- Bootstrap JS -->
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="../../assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="../../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../../assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="../../assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="../../assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>

<script src="../../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<!--notification js -->
<script src="../../assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="../../assets/plugins/notifications/js/notifications.min.js"></script>
<script src="../../assets/js/index.js"></script>
<!--app JS-->
<script src="../../assets/js/app.js"></script>
<!-- Date picker -->
<script src="../../assets/plugins/datetimepicker/js/legacy.js"></script>
<script src="../../assets/plugins/datetimepicker/js/picker.js"></script>
<script src="../../assets/plugins/datetimepicker/js/picker.time.js"></script>
<script src="../../assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="../../assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
<script src="../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>

<script src="../../assets/plugins/select2/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>

</body>

</html>