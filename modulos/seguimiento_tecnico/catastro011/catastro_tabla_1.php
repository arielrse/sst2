<?php

$resTablas  = mysqli_query($conexion, "SELECT * FROM catastro011 c WHERE c.idcatastro = ".$idcatastro);
$dataTablas = mysqli_fetch_array($resTablas);

$data = $dataTablas['data'];
$tabla_1 = $dataTablas['tabla_1'];
$tabla_2 = $dataTablas['tabla_2'];
$tabla_3 = $dataTablas['tabla_3'];

$tabla_1_arr = json_decode($tabla_1, true);
$tabla_2_arr = json_decode($tabla_2, true);
$tabla_3_arr = json_decode($tabla_3, true);

?>

<div class="card">
    <div class="card-body">

        <?php if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) ) { ?>
        <div class="col mb-2">
            <button id="btn-save-equipos" type="button" class="btn btn-outline-info"><i class="bx bx-save me-0"></i></button>
            <button id="btn-add-row" type="button" class="btn btn-outline-info"><i class="bx bx-plus me-0"></i></button>
        </div>
        <?php } ?>

        <table id="tabla_equipos" class="table table-sm table-bordered mb-3">
            <tr>
                <td width="10%" align="center">Tipo de equipo</td>
                <td width="10%" align="center">Modelo</td>
                <td width="10%" align="center">Marca</td>
                <td width="5%" align="center">Estado</td>
                <td width="10%" align="center">Puertos Uplink</td>
                <td width="10%" align="center">Patch Cord</td>
                <td width="18%" align="center" colspan="2">Destino Uplink</td>
                <td width="10%" align="center">Tipo de Puerto</td>
                <td width="5%" align="center">Temp. Ambiente</td>
                <td width="2%" align="center"></td>
            </tr>

            <?php
            $rowHtml = '';
            if ($tabla_1_arr)
                foreach ($tabla_1_arr as $objVal) {
                    $rowid = $objVal['rowid'];

                    $btn_eliminar = "";
                    if ( ($estado=='PEN' && !isClient() && !isNationalClient()) || ( isExpert() && $estado=='REV') && (!isClient() && !isNationalClient()) )
                        $btn_eliminar = "<a href='javascript:;' id='btnEliminar' onclick='eliminarEquipo(`$rowid`)'><i class='bx bx-x'></i></a>";

                    $rowHtml .=
                        "<tr id='$rowid'>" .
                        "<td><input type='text' class='form-control form-control-sm' id='equipo$rowid' value='".$objVal['equipo']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='modelo$rowid' value='".$objVal['modelo']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='marca$rowid' value='".$objVal['marca']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='estado$rowid' value='".$objVal['estado']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='puertos$rowid' value='".$objVal['puertos']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='patch$rowid' value='".$objVal['patch']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='destino1$rowid' value='".$objVal['destino1']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='destino2$rowid' value='".$objVal['destino2']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='tipo$rowid' value='".$objVal['tipo']."'></td>" .
                        "<td><input type='text' class='form-control form-control-sm' id='temp$rowid' value='".$objVal['temp']."'></td>" .
                        "<td>".$btn_eliminar."</td>" .
                        "</tr>";
                }
            echo $rowHtml;
            ?>

        </table>

        <div class="row mt-3 mb-3">
            <div class="col-12">
                <label for="inputAddress" class="form-label"><h6>Observaciones:</h6></label>
                <textarea class="form-control" id="observaciones1" name="observaciones1" rows="2"><?php echo $observaciones1 ?></textarea>
            </div>
        </div>

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
            '<tr id="' + id + '">' +
            '<td><input type="text" class="form-control form-control-sm" id="equipo' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="modelo' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="marca' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="estado' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="puertos' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="patch' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="destino1' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="destino2' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="tipo' + id + '"></td>' +
            '<td><input type="text" class="form-control form-control-sm" id="temp' + id + '"></td>' +
            '<td><a href="javascript:;" id="btnEliminar" onclick="eliminarEquipo(`' + rowid + '`)"><i class="bx bx-x"></i></a></td>' +
            '</tr>';

        dataEquipos.push({
            "rowid": rowid,
            "equipo": "",
            "modelo": "",
            "marca": "",
            "estado": "",
            "puertos": "",
            "patch": "",
            "destino1": "",
            "destino2": "",
            "tipo": "",
            "temp": ""
        });

        $("#tabla_equipos").append(fila);
        console.log(JSON.stringify(dataEquipos));

    }

    function guardarEquipos() {

        console.log("Save: " + JSON.stringify(dataEquipos));

        for (obj of dataEquipos){
            obj.equipo = $("#equipo" + obj.rowid).val();
            obj.modelo = $("#modelo" + obj.rowid).val();
            obj.marca = $("#marca" + obj.rowid).val();
            obj.estado = $("#estado" + obj.rowid).val();
            obj.puertos = $("#puertos" + obj.rowid).val();
            obj.patch = $("#patch" + obj.rowid).val();
            obj.destino1 = $("#destino1" + obj.rowid).val();
            obj.destino2 = $("#destino2" + obj.rowid).val();
            obj.tipo = $("#tipo" + obj.rowid).val();
            obj.temp = $("#temp" + obj.rowid).val();
        }
        var idcatastro = $("#idcatastro").val();
        var dataJsonStr = JSON.stringify(dataEquipos);

        console.log("idcatastro: " + idcatastro);
        console.log("dataJsonStr: " + dataJsonStr);

        var frmData = new FormData;
        frmData.append('idcatastro', idcatastro);
        frmData.append('dataJsonStr', dataJsonStr);
        frmData.append('nombreTabla', 'tabla_1');

        $.ajax({
            url: 'update_c11_tablas.php',
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

        const botonF = document.getElementById('botonF');
        botonF.click();
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