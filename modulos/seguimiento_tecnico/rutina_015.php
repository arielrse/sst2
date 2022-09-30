<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE TRANSMISIÓN (MW, FO, SAT)</h6>
        <hr/>

        <?php require("rutina_head_015.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">

                <?php require("rutina015/rutina_d.php"); ?>

                <?php require("rutina015/rutina_e.php"); ?>

                <?php require("rutina015/rutina_f.php"); ?>

            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina015.js" type="text/javascript"></script>