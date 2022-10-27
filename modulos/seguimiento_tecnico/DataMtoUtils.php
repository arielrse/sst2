<?php

function getJsonData_rutinaArr($conexion, $idrutinax, $cform){
    $res3 = mysqli_query($conexion, "SELECT r.id, r.cabecera, ru.idformulario
                                        FROM rutina$cform r
                                        LEFT JOIN rutina ru ON r.idrutina = ru.idrutina
                                        WHERE r.id = ".$idrutinax);
    $data3 = mysqli_fetch_array($res3);

    return [$data3['idformulario'], $data3['cabecera']];
}

function getTitulosRutinas($conexion, $idformulario){
    $res  = mysqli_query($conexion, "SELECT f.titulo0, f.titulo1, f.titulo2, f.titulo3 FROM formulario f WHERE f.idformulario = ".$idformulario);
    $data = mysqli_fetch_array($res );
    $titulosArr = [ $data['titulo0'], $data['titulo1'], $data['titulo2'], $data['titulo3'] ];
    return $titulosArr;
}

function getNombreArchivoReporte($jsonData, $titulo0){
    $obj   = json_decode($jsonData);
    $fecha = $obj->c_fechaRealizacion;
    $propertyId = $obj->propertyId;

    return $fecha . " " . $titulo0 . " " . $propertyId;
}

?>
