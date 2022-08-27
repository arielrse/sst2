<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina001/rutina_f.php"); ?>

        <?php require("rutina001/rutina_g.php"); ?>

        <?php require("rutina001/rutina_g20_2.php"); ?>

        <?php require("rutina001/rutina_g21-22.php"); ?>

        <?php require("rutina_footer.php"); ?>

    </div>
</div>

<script src="../../paquetes/rutina/rutina001.js" type="text/javascript"></script>