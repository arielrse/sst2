<?php

$data = file_get_contents("modulos/seguimiento_tecnico/data/rutinas/rutina001.json");

print json_encode($data);
print("<br />");
$arr = json_decode($data, true);
print_r($arr);
$str = json_encode($data, true);
print("<br />");
print($str);
?>