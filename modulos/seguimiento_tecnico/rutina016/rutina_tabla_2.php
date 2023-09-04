<?php

?>

<div class="card">
    <div class="card-body">

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-fuentes" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-fuente" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <table id="tabla_fuentes" class="table table-bordered mb-3">
            <tr>
                <th>Id</th>
                <th>Equipo</th>
                <th>Fuente A (v)</th>
                <th>Origen 1</th>
                <th>Fuente B (v)</th>
                <th>Origen 2</th>
                <th>Observaciones</th>
                <th></th>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_2_arr)
                foreach ($tabla_2_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarFuente(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td width='7%'><input type='text' class='form-control form-control-sm' id='id$rowid' value='".$objVal['id']."'></td>" .
                        "<td width='15%'><input type='text' class='form-control form-control-sm' id='equipo$rowid' value='".$objVal['equipo']."'></td>" .
                        "<td width='8%'><input type='text' class='form-control form-control-sm' id='fuenteA$rowid' value='".$objVal['fuenteA']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='origen1$rowid' value='".$objVal['origen1']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='fuenteB$rowid' value='".$objVal['fuenteB']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='origen2$rowid' value='".$objVal['origen2']."'></td>" .
                        "<td width='40%'><input type='text' class='form-control form-control-sm' id='obs$rowid' value='".$objVal['obs']."'></td>" .
                        "<td width='40%'>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>
    </div>
</div>

<script type="text/javascript">

    var btn_add_fuente = document.getElementById('btn-add-fuente');
    var btn_save_fuentes = document.getElementById('btn-save-fuentes');

    btn_add_fuente.addEventListener("click", agregarFuente);
    btn_save_fuentes.addEventListener("click", guardarFuentes);

    var dataFuentes = [];
    var tabla_2 = '<?php echo $tabla_2; ?>';

    console.log('Tabla 2: ' + tabla_2);

    if ( tabla_2 ){
        dataFuentes = JSON.parse(tabla_2);
    }

    function agregarFuente() {

        var id = get_uuid();
        var rowid = id;
        var fila =
            '<tr id="' + rowid + '">' +
            '<td width="7%"><input type="text" class="form-control form-control-sm" id="id' + id + '"></td>' +
            '<td width="15%"><input type="text" class="form-control form-control-sm" id="equipo' + id + '"></td>' +
            '<td width="8%"><input type="text" class="form-control form-control-sm" id="fuenteA' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="origen1' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="fuenteB' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="origen2' + id + '"></td>' +
            '<td width="40%"><input type="text" class="form-control form-control-sm" id="obs' + id + '"></td>' +
            '<td width="40%"><a href="javascript:;" id="btnEliminar" onclick="eliminarFuente(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataFuentes.push({
            "rowid": rowid,
            "id": "",
            "equipo": "",
            "fuenteA": "",
            "origen1": "",
            "fuenteB": "",
            "origen2": "",
            "obs": ""
        });

        $("#tabla_fuentes").append(fila);
        console.log(JSON.stringify(dataFuentes));

    }

    function guardarFuentes() {

        for (obj of dataFuentes){
            obj.id      = $("#id" + obj.rowid).val();
            obj.equipo  = $("#equipo" + obj.rowid).val();
            obj.fuenteA  = $("#fuenteA" + obj.rowid).val();
            obj.origen1  = $("#origen1" + obj.rowid).val();
            obj.fuenteB = $("#fuenteB" + obj.rowid).val();
            obj.origen2   = $("#origen2" + obj.rowid).val();
            obj.obs    = $("#obs" + obj.rowid).val();
        }
        var idrutina = $("#idrutina").val();
        var dataJsonStr = JSON.stringify(dataFuentes);

        console.log("idrutina: " + idrutina);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idrutina', idrutina);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_2');

        $.ajax({
            url: 'update_r16_tablas.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });
    }

    function eliminarFuente(rowid) {
        console.log('id: ' + rowid);

        $("#"+rowid).remove();

        const index = dataFuentes.findIndex(object => {
            return object.rowid === rowid;
        });
        console.log('index: ' + index);
        dataFuentes.splice(index, 1);
        console.log(JSON.stringify(dataFuentes));
    }

</script>