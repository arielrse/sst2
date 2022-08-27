<?php
$conexion=mysqli_connect("localhost","root","mysql", "sst");
//$conexion=mysqli_connect("localhost","encensne_exsmecon","EfCMtZPGj55U", "encensne_sstdb");

if (! $conexion){

echo "<h2 align='center'>ERROR: Imposible establecer conexion con el servidor</h2>";

exit;

}
//$base=mysqli_select_db("sst");
?>
