<?php

$resTablas  = mysqli_query($conexion, "SELECT r.cabecera, r.id, r.tabla_1, r.tabla_2, r.tabla_3, r.tabla_4, r.tabla_5 
                                             FROM rutina016 r WHERE r.idrutina = ".$idrutina);
$dataTablas = mysqli_fetch_array($resTablas);

$tabla_1 = $dataTablas['tabla_1'];
$tabla_2 = $dataTablas['tabla_2'];
$tabla_3 = $dataTablas['tabla_3'];
$tabla_4 = $dataTablas['tabla_4'];
$tabla_5 = $dataTablas['tabla_5'];

$tabla_1_arr = json_decode($tabla_1, true);
$tabla_2_arr = json_decode($tabla_2, true);
$tabla_3_arr = json_decode($tabla_3, true);
$tabla_4_arr = json_decode($tabla_4, true);
$tabla_5_arr = json_decode($tabla_5, true);


?>

<div class="card">
    <div class="card-body">
        <?php /*echo json_encode($equipos_ant) */?>
        <?php /*print_r($tabla_1) */?>

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-equipos" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-row" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <table id="tabla_equipos" class="table table-bordered mb-3">
            <tr>
                <th>Id</th>
                <th>Equipo</th>
                <th>Existe</th>
                <th>Estado</th>
                <th>Energia</th>
                <th>Cant de Puertos</th>
                <th>Descripción Etiqueta Puerto UPLINK</th>
                <th></th>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_1_arr)
                foreach ($tabla_1_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() || isAdmin() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarEquipo(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td width='7%'><input type='text' class='form-control form-control-sm' id='id$rowid' value='".$objVal['id']."'></td>" .
                        "<td width='15%'><input type='text' class='form-control form-control-sm' id='equipo$rowid' value='".$objVal['equipo']."'></td>" .
                        "<td width='8%'><input type='text' class='form-control form-control-sm' id='existe$rowid' value='".$objVal['existe']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='estado$rowid' value='".$objVal['estado']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='energia$rowid' value='".$objVal['energia']."'></td>" .
                        "<td width='10%'><input type='text' class='form-control form-control-sm' id='prtos$rowid' value='".$objVal['prtos']."'></td>" .
                        "<td width='40%'><input type='text' class='form-control form-control-sm' id='desc$rowid' value='".$objVal['desc']."'></td>" .
                        "<td width='40%'>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>
    </div>
</div>

<script type="text/javascript">

    var btn_add_row = document.getElementById('btn-add-row');
    var btn_save_equipos = document.getElementById('btn-save-equipos');

    btn_add_row.addEventListener("click", agregarEquipo);
    btn_save_equipos.addEventListener("click", guardarEquipos);

    var dataEquipos = [];
    var tabla_1 = '<?php echo $tabla_1; ?>';

    console.log('Tabla 1: ' + tabla_1);

    if ( tabla_1 ){
        dataEquipos = JSON.parse(tabla_1);
    }

    function agregarEquipo() {

        var id = get_uuid();
        var rowid = id;
        var fila =
            '<tr id="' + rowid + '">' +
            '<td width="7%"><input type="text" class="form-control form-control-sm" id="id' + id + '"></td>' +
            '<td width="15%"><input type="text" class="form-control form-control-sm" id="equipo' + id + '"></td>' +
            '<td width="8%"><input type="text" class="form-control form-control-sm" id="existe' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="estado' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="energia' + id + '"></td>' +
            '<td width="10%"><input type="text" class="form-control form-control-sm" id="prtos' + id + '"></td>' +
            '<td width="40%"><input type="text" class="form-control form-control-sm" id="desc' + id + '"></td>' +
            '<td width="40%"><a href="javascript:;" id="btnEliminar" onclick="eliminarEquipo(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataEquipos.push({
            "rowid": rowid,
            "id": "",
            "equipo": "",
            "existe": "",
            "estado": "",
            "energia": "",
            "prtos": "",
            "desc": ""
        });

        $("#tabla_equipos").append(fila);
        console.log(JSON.stringify(dataEquipos));

    }

    function guardarEquipos() {

        console.log("Save: " + JSON.stringify(dataEquipos));

        for (obj of dataEquipos){
            obj.id      = $("#id" + obj.rowid).val();
            obj.equipo  = $("#equipo" + obj.rowid).val();
            obj.existe  = $("#existe" + obj.rowid).val();
            obj.estado  = $("#estado" + obj.rowid).val();
            obj.energia = $("#energia" + obj.rowid).val();
            obj.prtos   = $("#prtos" + obj.rowid).val();
            obj.desc    = $("#desc" + obj.rowid).val();
        }
        var idrutina = $("#idrutina").val();
        var dataJsonStr = JSON.stringify(dataEquipos);

        console.log("idrutina: " + idrutina);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idrutina', idrutina);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_1');

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

    function eliminarEquipo(rowid) {
        console.log('id: ' + rowid);

        $("#"+rowid).remove();

        const index = dataEquipos.findIndex(object => {
            return object.rowid === rowid;
        });
        console.log('index: ' + index);
        dataEquipos.splice(index, 1);
        console.log(JSON.stringify(dataEquipos));
    }

    function get_uuid() {
        var dt = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (dt + Math.random()*16)%16 | 0;
            dt = Math.floor(dt/16);
            return (c=='x' ? r :(r&0x3|0x8)).toString(16);
        });
        //console.log('uuid: ' + uuid);
        return uuid;
    }
</script>