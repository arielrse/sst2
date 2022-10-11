<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO SISTEMA DE CLIMATIZACIÓN</h6>
        <h6 class="mb-0 text-uppercase">SISTEMA DE CLIMATIZACIÓN (AAC)</h6>
        <hr/>

        <?php require("catastro_head9-10.php"); ?>
        <?php require("catastro009/catastro_d.php"); ?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro009.js" type="text/javascript"></script>