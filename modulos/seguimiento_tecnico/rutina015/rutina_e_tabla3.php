<?php
$table_e3_arr = json_decode($table_e3, true);
?>
<input type="hidden" name="idrutina" id="idrutina" value="<?=$idrutina?>" />

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_save_t2"><i class="bx bx-save me-0"></i></button>
                <div id="fibra-t2">

                    <table class="table table-bordered" id="tabla_raiz">
                        <tr class='align-middle'>
                            <td></td>
                            <td width="15%">
                                <div class="text-center">
                                    Detalle de puertos ETH ópticos
                                </div>
                                <div class="text-center mt-1">
                                    <button type="button" class="btn btn-sm btn-outline-info mb-1" id="btn_add_equipos"><i class="bx bx-plus me-0"></i></button>
                                </div>
                            </td>
                            <td>
                                <table class="table table-bordered" id="tabla_equipos">
                                    <tr class='align-middle'>
                                        <td>
                                            <div><input type='text' class='form-control form-control-sm' id='' value='ASR 920'></div>
                                            <div class="text-center mt-1">
                                                <button type="button" class="btn btn-sm btn-outline-success mb-1" id="btn_add_puertos"><i class="bx bx-plus me-0"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <table class="table table-bordered" id="tabla_puertos">
                                                <tr class='align-middle'>
                                                    <th width="12%">Slot/Prto</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                </table>
                            </td>
                        </tr>

                        <!--<tr class='align-middle'>
                            <td></td>
                            <td width="15%">Puertos opticos en bandeja ODF</td>
                            <td>
                                <table class="table table-bordered" id="table_equipos">
                                    <tr class='align-middle'>
                                        <td>ASR 920</td>
                                        <td>
                                            <table class="table table-bordered" id="table_puertos">
                                                <tr class='align-middle'>
                                                    <th width="12%">Slot/Prto</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>26</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>27</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>28</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class='align-middle'>
                                        <td>NCS 540</td>
                                        <td>
                                            <table class="table table-bordered" id="table_puertos">
                                                <tr class='align-middle'>
                                                    <th width="12%">Slot/Prto</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>26</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>27</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                                <tr class='align-middle'>
                                                    <td>28</td>
                                                    <td>UPLINK ASR 920</td>
                                                    <td>ACTIVO</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>-->

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var btn_add_equipos = document.getElementById('btn_add_equipos');
    var tabla_equipos   = document.getElementById('tabla_equipos');

    btn_add_equipos.addEventListener("click", agregarFilaEquiposT3);
    //btn_save_t2.addEventListener("click", guardarFilasT2);

    var table_e3 = '<?php echo $table_e3; ?>';


    var dataT3 = [];
    var cantT3 = 1;

    if ( table_e3 ){
        dataT3 = JSON.parse(table_e2);
        cantT3 = dataT3.length+1;
    }

    function get_uuid() {
        let uuid =  self.crypto.randomUUID();
        console.log('uuid: ' + uuid);
        return uuid;
    }

    function agregarFilaPuertos(id_table_puertos) {
        console.log(id_table_puertos);

        var fila =
        "<tr class='align-middle'>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+get_uuid()+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+get_uuid()+"'></td>" +
        "   <td><input type='text' class='form-control form-control-sm' id='"+get_uuid()+"'></td>" +
        "</tr>";
        $("#"+id_table_puertos).append(fila);
    }

    function agregarFilaEquiposT3() {

        var id_row_eq = 'row_' + get_uuid();
        var id_nom = 'nom_' + get_uuid();
        var id_table_puertos = 'row_tab_prto_' + get_uuid();

        dataT3.push({
            "id_row_eq": id_row_eq,
            "id_nom": id_nom,
            "puertos": []
        });

        console.log('---> ' + JSON.stringify(dataT3) );

        var fila =
            "<tr class='align-middle' id='"+id_row_eq+"'>" +
            "    <td>" +
            "        <div><input type='text' class='form-control form-control-sm' id='"+id_nom+"'></div>" +
            "        <div class='text-center mt-1'>" +
            "            <button type='button' class='btn btn-sm btn-outline-success mb-1' id='btn_add_puertos' onclick='agregarFilaPuertos(`"+id_table_puertos+"`)'><i class='bx bx-plus me-0'></i></button>" +
            "        </div>" +
            "    </td>" +
            "    <td>" +
            "        <table class='table table-bordered' id='"+id_table_puertos+"'>" +
            "            <tr class='align-middle'>" +
            "                <th width='12%'>Slot/Prto</th>" +
            "                <th>Descripción</th>" +
            "                <th width='20%'>Estado</th>" +
            "            </tr>" +

            "        </table>" +
            "    </td>" +
            "</tr>";


        $("#tabla_equipos").append(fila);
        cantT2++;
    }

    function eliminarFilaT2(row) {
        $("#row"+row).remove();
        var i=0;
        var pos=0;
        for (obj of dataT2){
            if (obj.id === row){
                pos = i;
            }
            i++;
        }
        dataT2.splice(pos, 1);
    }

    function guardarFilasT2() {
        alert("guardando...");

        for (obj of dataT2){
            obj.nro         = $("#nro"+obj.id).val();
            obj.modelo      = $("#modelo"+obj.id).val();
            obj.estadoTx    = $("#estadoTx"+obj.id).val();
            obj.cantPtos    = $("#cantPtos"+obj.id).val();
            obj.txFrom      = $("#txFrom"+obj.id).val();
            obj.rxTo        = $("#rxTo"+obj.id).val();
            obj.descripcion = $("#descripcion"+obj.id).val();
        }

        console.log('...mostrando...')
        /*for (obj of dataT2){
            console.log('Origen: ' + obj.origen + ' - ' + 'Destino: ' + obj.destino)
        }*/

        var idrutina = $("#idrutina").val();
        var jsonStrT2 = JSON.stringify(dataT2);

        var frmDataT2 = new FormData;
        frmDataT2.append('idrutina', idrutina);
        frmDataT2.append('jsonStrT2', jsonStrT2);

        $.ajax({
            url: 'update_r15_tabla2.php',
            type: 'POST',
            data: frmDataT2,
            processData: false,
            contentType: false,
            cache: false,
            success: function (resp) {
                alert(resp);
            }
        });

    }

</script>