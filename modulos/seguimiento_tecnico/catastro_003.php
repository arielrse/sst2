<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</h6>
        <h6 class="mb-0 text-uppercase">GRUPO ELECTRÓGENO (GE)</h6>
        <hr/>

        <?php require("catastro_head.php"); ?>
        <?php require("catastro003/catastro_d.php"); ?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro003.js" type="text/javascript"></script>