<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - DESMALEZADO Y APLICACIÓN DE HERBICIDA</h6>
        <hr/>

        <?php /*require("rutina013/rutina_head_013.php"); */?>
        <?php require("rutina_head_017.php"); ?>
        <?php require("rutina017/rutina_d_a.php"); ?>

        <?php require("rutina_footer.php"); ?>

    </div>
</div>

<script src="../../paquetes/rutina/rutina017.js" type="text/javascript"></script>