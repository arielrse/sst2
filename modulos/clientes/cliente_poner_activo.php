<?php
$id = base64_decode($_GET["id"]);
$consulta="UPDATE clientes SET activo='1' WHERE id='$id'";
	if(mysqli_query($conexion, $consulta))
	{
		?>
	<script type="text/javascript">
	history.back(1)
	</script>
	<?
	}
	else echo"OCURRIO UN ERROR - intente nuevamente";
?>

