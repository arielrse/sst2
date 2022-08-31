<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];

?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - INFRAESTRUCTURA DEL SITIO</h6>
        <hr/>

        <?php require("rutina013/rutina_head_013.php"); ?>

        <?php require("rutina013/rutina_efg.php"); ?>

        <?php require("rutina013/rutina_h.php"); ?>

    </div>
</div>

<script src="../../paquetes/rutina/rutina013.js" type="text/javascript"></script>