<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina014/rutina_d.php"); ?>

        <?php require("rutina014/rutina_e.php"); ?>

        <?php require("rutina014/rutina_d1.php"); ?>

        <?php require("rutina014/rutina_d2.php"); ?>

        <?php require("rutina014/rutina_d3.php"); ?>

        <?php require("rutina_footer.php"); ?>

    </div>
</div>

<script src="../../paquetes/rutina/rutina014.js" type="text/javascript"></script>