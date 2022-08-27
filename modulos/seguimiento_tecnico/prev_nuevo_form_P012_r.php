<?php
require("../../funciones/funciones.php");

$responsable     = $_POST['responsable'];
$fechamantenimiento = $_POST['fechamantenimiento'];
$ideventos     = $_POST['idevento'];

$idevento     = $_POST["idevento"];
$idformulario = $_POST["idformulario"];
$titulo       = $_POST["titulo"];
$params       = $_POST["params"];

$size6    = $_POST["size6"];
$p06 = "";
for($i=1; $i < $size6; $i++ ){
    $p06 .= $_POST["p06$i"];
    if($i==3 || $i==6 || $i==9)
        $p06 .= '|';
    else{
        if($i<$size6-1)
            $p06 .= ';';
    }
}


$size1    = $_POST["size1"];
$p01 = "";
for($i=1; $i < $size1; $i++ ){
    $p01 .= $_POST["p01$i"];
    if($i==12 || $i==24)
        $p01 .= '|';
    else{
        if($i<$size1-1)
            $p01 .= ';';
    }
}

$size2    = $_POST["size2"];
$p02 = "";
for($i=1; $i < $size2; $i++ ){
    $p02 .= $_POST["p02$i"];
    if($i==12||$i==24||$i==36||$i==48||$i==60||$i==72||$i==84||$i==96||$i==108)
        $p02 .= '|';
    else{
        if($i<$size2-1)
            $p02 .= ';';
    }
}

/** Nuevo Formulario Mtto. **/
if(isset($_POST['responsable']) and !empty($_POST['responsable']) and isset($_POST['fechamantenimiento']) and !empty($_POST['fechamantenimiento']) ){
if(!isset($_POST['idformtto'])){

    $id = incrementar_id("formulario_p012", "id");
    $consulta = "INSERT INTO formulario_p012 SET
    id           ='".$id."',
    idevento     ='".$idevento."',
    idformulario ='".$idformulario."',
    titulo ='".$titulo."',
    p01       ='".$p01."',
    p06       ='".$p06."',
    p02       ='".$p02."'";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado) {
        header("Location: ".$link_modulo."?path=prev_estacion.php$params");
    }
    else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

/** Editar Formulario Mtto. **/
}else{

    $idformtto = $_POST['idformtto'];
    $consulta =  "UPDATE formulario_p012 SET
                    titulo ='".$titulo."',
                    p01    ='".$p01."',
                    p06    ='".$p06."',
                    p02    ='".$p02."'
                  WHERE id = ".$idformtto."
                    ";
    $resultado=mysqli_query($conexion, $consulta);
    if($resultado) {
        header("Location: ".$link_modulo."?path=prev_estacion.php$params");
    }
    else echo "<b>Ocurrio un error, revise bien la informaci�n insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
}

if(!isset($_POST['idformtto'])){

$query= mysqli_query($conexion, "SELECT MAX(id) FROM formulario_p012");
$row = mysqli_fetch_row($query);
$idm = $idm = trim($row[0]);;

$Hoy = date("Y-m-d H:i:s");
$srr = mysqli_query($conexion, "INSERT INTO p012_formulario VALUES ('$idm','$ideventos','$responsable','$fechamantenimiento','$Hoy')");
 }else

  $sql =mysqli_query($conexion, "UPDATE p012_formulario SET responsable = '$responsable', fechamantenimiento = '$fechamantenimiento' WHERE id = '$idformtto'");
  
  
}    else echo "<b>Ocurrio un error, revise bien la informaci�n insertada!:: responsable y fecha de mantenimiento:campos oblogatorios::::</b>".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>


