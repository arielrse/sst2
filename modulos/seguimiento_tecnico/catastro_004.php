<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO SISTEMAS DE ENERGÍA</h6>
        <h6 class="mb-0 text-uppercase">TABLERO DE TRANSFERENCIA (ATS) - BYPASS</h6>
        <hr/>

        <?php require("catastro_head004.php"); ?>
        <?php require("catastro004/catastro_d.php"); ?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro004.js" type="text/javascript"></script>