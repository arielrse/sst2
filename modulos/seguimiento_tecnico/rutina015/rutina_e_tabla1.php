<?php
$table_e1_arr = json_decode($table_e1, true);
?>
<input type="hidden" name="idrutina" id="idrutina" value="<?=$idrutina?>" />

<div class="card">
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
            <div class="col">

                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_t1"><i class="bx bx-save me-0"></i></button>
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_ori_dest"><i class="bx bx-plus me-0"></i></button>
                <div id="fibra-ori-des">
                    <table class="table table-bordered mb-3" id="lista_fibra">
                        <tr>
                            <th>N.</th>
                            <th>NE_Origen</th>
                            <th>NE_Destino</th>
                            <th>Modelo equipo FO</th>
                            <th>Puerto ETH en equipo de FO</th>
                            <th>Posición en bandeja ODF</th>
                            <th></th>
                        </tr>

                        <?php
                        $rowHtml = '';
                        if ($table_e1_arr)
                            foreach ($table_e1_arr as $objVal) {
                                $idrow = $objVal['id'];
                                $rowHtml .= "
                                <tr id='row$idrow'>
                                    <td width='6%'><input type='text' class='form-control form-control-sm' id='nro$idrow' value='".$objVal['nro']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='origen$idrow' value='".$objVal['origen']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='destino$idrow' value='".$objVal['destino']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='modelo$idrow' value='".$objVal['modelo']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='puertoEth$idrow' value='".$objVal['puertoEth']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='posicionOdf$idrow' value='".$objVal['posicionOdf']."'></td>
                                    <td><a href='javascript:;' id='btnEliminar' onclick='eliminar($idrow)'><i class='bx bx-x'></i></a></td>
                                </tr>";
                            }
                        echo $rowHtml;
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var btn_add_ori_dest = document.getElementById('btn_add_ori_dest');
    var btn_save_t1         = document.getElementById('btn_save_t1');
    var lista_fibra      = document.getElementById('lista_fibra');

    btn_add_ori_dest.addEventListener("click", agregar);
    btn_save_t1.addEventListener("click", guardarFilas);

    var table_e1 = '<?php echo $table_e1; ?>';

    //console.log('stringify: ' + JSON.stringify(table_e1));
    //console.log('parse:' + JSON.parse(table_e1));

    var data = [];
    var cant = 1;

    if ( table_e1 ){
        data = JSON.parse(table_e1);
        cant = data.length+1;
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

    function agregar() {

        //var id = new Date().getTime();
        var id = get_uuid();

        data.push({
           "id": id,
           "nro": "",
           "origen": "",
           "destino": "",
           "modelo": "",
           "puertoEth": "",
           "posicionOdf": ""
        });
        var id_row = 'row'+id;
        var fila =
            "<tr id='"+id_row+"'>" +
            "<td width='6%'><input type='text' class='form-control form-control-sm' id='nro"+id+"' value='"+cant+"'></td>" +
            "<td><input type='text' class='form-control form-control-sm' id='origen"+id+"' value=''></td>" +
            "<td><input type='text' class='form-control form-control-sm' id='destino"+id+"' value=''></td>" +
            "<td><input type='text' class='form-control form-control-sm' id='modelo"+id+"' value=''></td>" +
            "<td><input type='text' class='form-control form-control-sm' id='puertoEth"+id+"' value=''></td>" +
            "<td><input type='text' class='form-control form-control-sm' id='posicionOdf"+id+"' value=''></td>" +
            "<td><a href='javascript:;' id='btnEliminar' onclick='eliminar(`"+id+"`)'><i class='bx bx-x'></i></a></td>" +
            "</tr>";
        $("#lista_fibra").append(fila);
        cant++;
    }

    function eliminar(row) {
        //console.log('eliminar: ' + "#row"+row);
        $("#row"+row).remove();
        var i=0;
        var pos=0;
        for (obj of data){
            if (obj.id === row){
                pos = i;
            }
            i++;
        }
        data.splice(pos, 1);
    }

    function guardarFilas() {
        alert("guardando...");

        for (obj of data){
            obj.nro         = $("#nro"+obj.id).val();
            obj.origen      = $("#origen"+obj.id).val();
            obj.destino     = $("#destino"+obj.id).val();
            obj.modelo      = $("#modelo"+obj.id).val();
            obj.puertoEth   = $("#puertoEth"+obj.id).val();
            obj.posicionOdf = $("#posicionOdf"+obj.id).val();
        }

        //console.log('...mostrando...')
        /*for (obj of data){
            console.log('Origen: ' + obj.origen + ' - ' + 'Destino: ' + obj.destino)
        }*/

        var idrutina = $("#idrutina").val();
        var jsonStr = JSON.stringify(data);

        var frmData = new FormData;
        frmData.append('idrutina', idrutina);
        frmData.append('jsonStr', jsonStr);

        $.ajax({
            url: 'update_r15_tabla.php',
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

</script>