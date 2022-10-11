<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">FORMULARIO DE CATASTRO SISTEMA FOTOVOLTAICO</h6>
        <h6 class="mb-0 text-uppercase">SISTEMA FOTOVOLTAICO (SFV)</h6>
        <hr/>

        <?php require("catastro_head9-10.php"); ?>
        <?php require("catastro010/catastro_d.php"); ?>

    </div>
</div>

<script src="../../paquetes/catastro/catastro010.js" type="text/javascript"></script>