
<?php
require("../../funciones/motor.php");

    date_default_timezone_set('America/La_Paz');

	$idevento = $_POST['idevento'];

    $result = mysqli_query($conexion, "delete from evento where idevento = $idevento");

    mysqli_close($conexion);

    echo $result ? 1 : -1;

?>