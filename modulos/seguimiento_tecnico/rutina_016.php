<?php
$web = $_SESSION["web"];
$codigoForm = $_GET['cform'];
?>
<input type="hidden" name="codigoForm" id="codigoForm" value="<?=$codigoForm?>" />

<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">RUTINA DE MANTENIMIENTO PREVENTIVO - ASR / OLT / METRO</h6>
        <hr/>

        <?php //require("rutina_head_nodo.php"); ?>
        <?php require("rutina_head.php"); ?>

        <div class="row">
            <div class="col-xl-12 mx-auto">

                <?php require("rutina016/rutina_d.php"); ?>
                <?php require("rutina016/rutina_e.php"); ?>


            </div>
        </div>
        <!--end row-->


        <?php require("rutina_footer.php"); ?>


    </div>
</div>

<script src="../../paquetes/rutina/rutina016.js" type="text/javascript"></script>