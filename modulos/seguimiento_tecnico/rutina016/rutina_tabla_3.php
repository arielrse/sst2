<?php

?>

<div class="card">
    <div class="card-body">

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-puertos1" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-puerto1" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <h6>Puertos Equipo 1</h6>
        <table id="tabla_puertos1" class="table table-bordered mb-3">
            <tr>
                <th width="7%">Id</th>
                <th width="10%">Puerto</th>
                <th width="25%">Descripcion</th>
                <th width="30%">Posicion</th>
                <th width="25%">Observaciones</th>
                <th width="3%"></th>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_3_arr)
                foreach ($tabla_3_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarPuerto1(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td><input type='text' class='form-control form-control-sm' id='id$rowid' value='".$objVal['id']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='puerto$rowid' value='".$objVal['puerto']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='descri$rowid' value='".$objVal['descri']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='posicion$rowid' value='".$objVal['posicion']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='obs$rowid' value='".$objVal['obs']."'></td>" .
                        "<td>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>
    </div>
</div>

<script type="text/javascript">

    var btn_add_puerto1 = document.getElementById('btn-add-puerto1');
    var btn_save_puertos1 = document.getElementById('btn-save-puertos1');

    btn_add_puerto1.addEventListener("click", agregarPuerto1);
    btn_save_puertos1.addEventListener("click", guardarPuertos1);

    var dataPuertos1 = [];
    var tabla_3 = '<?php echo $tabla_3; ?>';

    console.log('Tabla 3: ' + tabla_3);

    if ( tabla_3 ){
        dataPuertos1 = JSON.parse(tabla_3);
    }

    function agregarPuerto1() {

        var id = get_uuid();
        var rowid = id;
        var fila =
            '<tr id="' + rowid + '">' +
            '<td><input type="text" class="form-control form-control-sm" id="id' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="puerto' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="descri' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="posicion' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="obs' + id + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminar" onclick="eliminarPuerto1(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataPuertos1.push({
            "rowid": rowid,
            "id": "",
            "puerto": "",
            "descri": "",
            "posicion": "",
            "obs": ""
        });

        $("#tabla_puertos1").append(fila);
        console.log(JSON.stringify(dataPuertos1));

    }

    function guardarPuertos1() {

        for (obj of dataPuertos1){
            obj.id      = $("#id" + obj.rowid).val();
            obj.puerto  = $("#puerto" + obj.rowid).val();
            obj.descri  = $("#descri" + obj.rowid).val();
            obj.posicion  = $("#posicion" + obj.rowid).val();
            obj.obs    = $("#obs" + obj.rowid).val();
        }
        var idrutina = $("#idrutina").val();
        var dataJsonStr = JSON.stringify(dataPuertos1);

        console.log("idrutina: " + idrutina);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idrutina', idrutina);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_3');

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

    function eliminarPuerto1(rowid) {
        console.log('id: ' + rowid);

        $("#"+rowid).remove();

        const index = dataPuertos1.findIndex(object => {
            return object.rowid === rowid;
        });
        console.log('index: ' + index);
        dataPuertos1.splice(index, 1);
        console.log(JSON.stringify(dataPuertos1));
    }

</script>