<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</h6>
        <h6 class="mb-0 text-uppercase">SISTEMA ININTERRUMPIBLE DE ENERGÍA (UPS)</h6>
        <hr/>

        <?php require("catastro_head006.php"); ?>
        <?php require("catastro006/catastro_d.php"); ?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro006.js" type="text/javascript"></script>