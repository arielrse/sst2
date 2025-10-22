<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - TDP</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>

        <?php require("rutina018/rutina_fg.php"); ?>

        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina018.js" type="text/javascript"></script>