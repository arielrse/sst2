<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA AUTOMÁTICO DE TRANSFERENCIA</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina009/rutina_fg.php"); ?>

        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina009.js" type="text/javascript"></script>