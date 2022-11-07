<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO EQUIPOS DATOS/IP</h6>
        <h6 class="mb-0 text-uppercase">EQUIPOS NETWORKING CAPA 2/3</h6>
        <hr/>

        <?php require("catastro_head011.php"); ?>
        <?php require("catastro011/catastro_content.php"); ?>
        <?php /*require("catastro010/catastro_d.php"); */?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro011.js" type="text/javascript"></script>