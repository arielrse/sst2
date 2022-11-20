<?php
require("funciones/motor.php");
ini_set("session.gc_maxlifetime","28800");
session_start();

$santox = $_POST["santo"];
$senax  = $_POST["sena"];
$senax  = md5(trim($senax));

$consulta = "SELECT nivel, id FROM usuarios WHERE cuenta='$santox' and contrasena='$senax'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if( $filas!=0 ) {
    $dato    = mysqli_fetch_array($resultado);
    $sesionx = md5 (uniqid (rand(), true));

    $_SESSION["santox"] = $santox;
    $_SESSION["senax"] = $senax;
    $_SESSION["sesionx"] = $sesionx;
    $_SESSION["nivelx"] = $dato['nivel'];
    $_SESSION["remitente"] = "st@encens.net";
    $_SESSION["nombre_remitente"] = "Sistema de Seguimiento Tecnico";
    $_SESSION["web"] = "http://exsmecon.encens.net";

    $_SESSION["gestion"] = date("Y");
    $id_usuario = $dato['id'];

    if (getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        $client = gethostbyaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
    } else {
        $ip   = getenv("REMOTE_ADDR");
        $client = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    }

    $str = preg_split("/\./", $client);
    $i = count($str);
    $x = $i - 1;
    $n = $i - 2;
    $isp = $str[$n] . "." . $str[$x];

    $consulta="INSERT INTO usuarios_registros (id_usuarios_registros, id_usuario, fecha, ip, isp) VALUES (NULL, '$id_usuario', NOW(), '$ip', '$isp')";
    mysqli_query($conexion, $consulta);

    $consulta="UPDATE usuarios SET nro_ing = nro_ing + 1, sesion_temp = '$sesionx' WHERE cuenta='$santox' and contrasena='$senax'";
    mysqli_query($conexion, $consulta);

    header("Location: usuarios/modulos/seguimiento_tecnico.php?path=dashboard.php");

} else {
    header("Location: index.php?sw=1");
}


?>