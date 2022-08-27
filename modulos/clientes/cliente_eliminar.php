<?
$id_cliente=base64_decode($_GET['id_cliente']);
mysqli_query($conexion, "DELETE FROM clientes WHERE id='".$id_cliente."'");
header("Location: clientes.php?path=ver_clientes_anaisis.php");
?>