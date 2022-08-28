<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform']; /** NO OLVIDAR **/

?>
<!-- NO OLVIDAR-->
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - AIRES ACONDICIONADOS GABINETES</h6>
        <hr/>

        <?php require("rutina_head.php"); ?>
        
        <?php require("rutina004/rutina_f.php"); ?>
        <?php require("rutina004/rutina_g1.php"); ?>
        <?php require("rutina004/rutina_g2.php"); ?>
        <?php require("rutina004/rutina_g3.php"); ?>
        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina004.js" type="text/javascript"></script>

