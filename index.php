<?
$sw = isset($_GET["sw"]) ? $_GET["sw"] : 0;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>SST - Sistema Seguimiento Tecnico</title>

    <meta content="Sistema de Seguimiento Tecnico" name=description>
    <meta content="Seguimiento de Seguimiento Tecnico" name=keywords>
</head>

<!--<body>
    <form class="form" name="form" method="post" action="v0001.php">
        <div class="login-form">
            <div align="center"><img src='img/logodimesat79x90.png'></div>
            <h1>SST - Sistema de Seguimiento Tecnico</h1>
            <div class="form-group ">
                <input name="santo" type="text" class="form-control" placeholder="Usuario" id="santo">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group log-status">
                <input name="sena" type="password" class="form-control" placeholder="Contrase&ntilde;a" id="santo">
                <i class="fa fa-lock"></i>
            </div>

            <?/* if($sw==1){ */?> <span class="alert">Credenciales Invalidas</span> <?/* } */?>
            <?/* if($sw==2){ */?> <span class="alert">Error! Su sesi&oacute;nn ha caducado</span> <?/* } */?>

            <button class="log-btn" type="submit">Iniciar Sesi&oacute;n</button>
            <div align="center" class="texto"><br />&copy; 2022</div>
        </div>
    </form>
</body>-->
<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="assets/images/logo-img.png" width="180" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Iniciar Sesión</h3>
                                    <p>¿Aún no tienes una cuenta? <a href="#">Solicita aqui</a>
                                    </p>
                                </div>

                                <div class="d-grid">
                                    <!--<a class="btn my-4 shadow-sm btn-white" href="javascript:;">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                                            <span>Sign in with Google</span>
										</span>
                                    </a>-->
                                    <!--<a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>-->
                                </div>

                                <div class="login-separater text-center mb-4"> <span>INICIAR SESIÓN CON EL CORREO ELECTRÓNICO</span>
                                    <hr/>
                                </div>

                                <div class="form-body">
                                    <!--<form class="row g-3">-->
                                    <form class="row g-3" name="form" method="post" action="v0001.php">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Dirección de correo electrónico</label>
                                            <input type="text" class="form-control" name="santo" id="santo" placeholder="Correo electronico" value="ariel.siles@gmail.com">

                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Introducir la contraseña</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="sena" class="form-control border-end-0" placeholder="Contrase&ntilde;a" id="santo" value="asiles">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">	<a href="#">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Iniciar Sesi&oacute;n</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="assets/js/app.js"></script>
</body>
</html>