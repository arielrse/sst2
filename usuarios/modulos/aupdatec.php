<?php
require("../../funciones/motor.php");

$query = "select * from rutina_correctivo_img order by idrutinacorrectivo, id asc ";
$resultado = mysqli_query($conexion, $query);

$flag = 0;
$cont = 1;
foreach($resultado as $row) {

    $idImg = $row['id'];
    $idrutina = $row['idrutinacorrectivo'];
    $posicion = $row['posicion'];

    if ( $flag != $idrutina ){
        $flag = $idrutina;
        $cont = 1;
    }

    //echo $idrutina . "\t|" . $idImg . "\t|" . $posicion . "\t|F:" . $flag . "\t|" . $cont . "<br />";

    $res  = mysqli_query($conexion, "update rutina_correctivo_img r set r.posicion = $cont where r.id = $idImg");

    $cont++;

}
echo "Terminado...";


?>