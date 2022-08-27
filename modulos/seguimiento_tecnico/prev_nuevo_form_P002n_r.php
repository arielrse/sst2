<?php
require("../../funciones/funciones.php");

$responsable     = $_POST['responsable'];

$ideventos     = $_POST['idevento'];
$pss10    = $_POST['ps10'];
$pss11    = $_POST['p011'];
$serenos    = $_POST['sereno'];
$observacion    = $_POST['observaciones'];
$fechamantenimiento = $_POST['fechamantenimiento'];



$idevento     = $_POST["idevento"];
$idformulario = $_POST["idformulario"];
$titulo       = $_POST["titulo"];
$params       = $_POST["params"];
$p01    = $_POST["p01"];
$p02    = $_POST["p02"];
$p03    = $_POST["p03"];
$p04    = $_POST["p04"];
$p05    = $_POST["p05"];
$p06    = $_POST["p06"];

$size7    = $_POST["size7"];
$p07 = "";
for($i=1; $i < $size7; $i++ ){
    $p07 .= $_POST["p07$i"];
    if($i==11 || $i==22 || $i==33 || $i==44 || $i==55)
        $p07 .= '|';
    else{
        if($i<$size7-1)
            $p07 .= ';';
    }
}
$p08    = $_POST["p08"];
$p09    = $_POST["p09"];
$ps10    = $_POST["ps10"];
$ps11    = $_POST["ps11"];
$sereno    = $_POST["sereno"];
$observaciones    = $_POST["observaciones"];
/** Nuevo Formulario Mtto. **/
if(isset($_POST['responsable']) and !empty($_POST['responsable']) and isset($_POST['fechamantenimiento']) and !empty($_POST['fechamantenimiento']) ){
if(!isset($_POST['idformtto'])){

    $id = incrementar_id("formulario_p002", "id");
    $consulta = "INSERT INTO formulario_p002 SET
    id           ='".$id."',
    idevento     ='".$idevento."',
    idformulario ='".$idformulario."',
    titulo ='".$titulo."',
    p01       ='".$p01."',
    p02       ='".$p02."',
    p03       ='".$p03."',
    p04       ='".$p04."',
    p05       ='".$p05."',
    p06       ='".$p06."',
    p07       ='".$p07."',
    p08       ='".$p08."',
    p09       ='".$p09."',
    p010       ='".$ps10."',
    p011       ='".$ps11."',
    p012       ='".$sereno."',
    p013       ='".$observaciones."'";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado) {
        header("Location: ".$link_modulo."?path=prev_estacion.php$params");
    }
    else echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

/** Editar Formulario Mtto. **/
}else{

    $idformtto = $_POST['idformtto'];
    $consulta =  "UPDATE formulario_p002 SET
                    titulo ='".$titulo."',
                    p01    ='".$p01."',
                    p02    ='".$p02."',
                    p03    ='".$p03."',
                    p04    ='".$p04."',
                    p05    ='".$p05."',
                    p06    ='".$p06."',
                    p07    ='".$p07."',
                    p08       ='".$p08."',
                    p09       ='".$p09."',
                    p010       ='".$ps10."',
                    p011       ='".$ps11."',
                    p012       ='".$sereno."',
                    p013       ='".$observaciones."'
                  WHERE id = ".$idformtto."
                  ";
    $resultado=mysqli_query($conexion, $consulta);
    if($resultado) {
        header("Location: ".$link_modulo."?path=prev_estacion.php$params");
    }
    else echo "<b>Ocurrio un error, revise bien la informaci�n insertada!</b><br>Notrifiue de este error al administrador del Sistema: ".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
}
if(!isset($_POST['idformtto'])){

$query= mysqli_query($conexion, "SELECT MAX(id) FROM formulario_p002");
$row = mysqli_fetch_row($query);
$idm = $idm = trim($row[0]);;

$Hoy = date("Y-m-d H:i:s");
$srr = mysqli_query($conexion, "INSERT INTO p002_formulario VALUES ('$idm','$ideventos','$responsable','$pss10','$pss11','$serenos','$observacion','$fechamantenimiento','$Hoy')");
 }else

  $sql =mysqli_query($conexion, "UPDATE p002_formulario SET responsable = '$responsable', fechamantenimiento = '$fechamantenimiento' WHERE id = '$idformtto'");
  
  
}    else echo "<b>Ocurrio un error, revise bien la informaci�n insertada!:: responsable y fecha de mantenimiento:campos oblogatorios::::</b>".mysqli_error()."<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";
?>


