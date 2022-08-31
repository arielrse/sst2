<?php
$web = $_SESSION["web"];
//$idevento = $_GET['event'];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - GRUPO ELECTRÓGENO </h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina011/rutina_fg.php"); ?>



        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina011.js" type="text/javascript"></script>