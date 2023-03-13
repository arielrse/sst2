<?php
require("../../funciones/motor.php");

$query = "select * from rutina_imagen order by idrutina, id asc ";
$resultado = mysqli_query($conexion, $query);

$flag = 0;
$cont = 1;
foreach($resultado as $row) {

    $idImg = $row['id'];
    $idrutina = $row['idrutina'];
    $posicion = $row['posicion'];

    if ( $flag != $idrutina ){
        $flag = $idrutina;
        $cont = 1;
    }

    //echo $idrutina . "\t|" . $idImg . "\t|" . $posicion . "\t|F:" . $flag . "\t|" . $cont . "<br />";

    $res  = mysqli_query($conexion, "update rutina_imagen r set r.posicion = $cont where r.id = $idImg");

    $cont++;

}
echo "Terminado...";


?>