<?php
session_start(); 
require("../../funciones/motor.php");
require("../funciones/verificar_sesion.php");
$modulo="seguimiento_tecnico";
$link_modulo=$modulo.".php";
$link_modulo_r=$modulo."_r.php";
if (isset($_REQUEST['path'])){
$path=$_REQUEST['path'];
include("../../modulos/".$modulo."/".$path);
}
?>
