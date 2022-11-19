<?php
require("../../funciones/funciones.php");

$idextrawork = $_POST["idextrawork"];
$informe_ant = $_POST["informe_ant"];
$idcentro = $_POST["idcentro"];
$idsitio = $_POST["idsitio"];
$fecha = $_POST["fecha"];
$titulo = $_POST["titulo"];
//$informe = $_POST["informe"];

$ruta_carpeta = "../../docs/extrawork/";
$docu = $_FILES['informe']['name'];
$extension = pathinfo($docu, PATHINFO_EXTENSION);

$uid = uniqid();
$nombre_archivo = "DOC_".$uid."_".$idextrawork."_". $docu;
$ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;
$result_upload = move_uploaded_file($_FILES['informe']['tmp_name'], $ruta_guardar_archivo);

if ($informe_ant != '')
    unlink($ruta_carpeta.$informe_ant);

$consulta="UPDATE rutina_extrawork SET 
idcentro='".$idcentro."',
idsitio='".$idsitio."',
fecha='".$fecha."',
titulo='".$titulo."',
informe='".$nombre_archivo."'
where id = " . $idextrawork;

$resultado=mysqli_query($conexion, $consulta);

if($resultado && $result_upload) {
    header("Location: ".$link_modulo."?path=extraworks.php");
}
else
    echo "<b>Ocurrio un error, revise bien la informacion insertada!</b><br>Notifique de este error al administrador del Sistema: ".mysqli_error($conexion);
    echo "<br>File: ".$result_upload.
        "<br><a href='javascript:history.back(1);'>[RETORNAR]</a>";

?>

