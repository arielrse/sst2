<?php
$table_e2_arr = json_decode($table_e2, true);
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

                        <?php
/*                        $rowHtml = '';
                        if ($table_e2_arr)
                            foreach ($table_e2_arr as $objVal) {
                                $idrow = $objVal['id'];
                                $rowHtml .= "
                                <tr id='row$idrow' class='align-middle'>
                                    <td width='6%'><input type='text' class='form-control form-control-sm' id='nro$idrow' value='".$objVal['nro']."'></td>
                                    <td><input type='text' class='form-control form-control-sm' id='modelo$idrow' value='".$objVal['modelo']."'></td>
                                    <td width='12%'><input type='text' class='form-control form-control-sm' id='estadoTx$idrow' value='".$objVal['estadoTx']."'></td>
                                    <td width='10%'><input type='text' class='form-control form-control-sm' id='cantPtos$idrow' value='".$objVal['cantPtos']."'></td>
                                    <td width='10%'>
                                        <div><small>H. Tx From:</small></div>
                                        <div><small>H. Rx To:</small></div>
                                    </td>
                                    <td>
                                        <input type='text' class='form-control form-control-sm' id='txFrom$idrow' value='".$objVal['txFrom']."'>
                                        <input type='text' class='form-control form-control-sm' id='rxTo$idrow' value='".$objVal['rxTo']."'>
                                    </td>
                                    <td><input type='text' class='form-control form-control-sm' id='descripcion$idrow' value='".$objVal['descripcion']."'></td>
                                    <td><a href='javascript:;' id='btnEliminar' onclick='eliminarFilaT2($idrow)'><i class='bx bx-x'></i></a></td>
                                </tr>
                                ";
                            }
                        echo $rowHtml;
                        */?>

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

    var table_e2 = '<?php echo $table_e2; ?>';


    var dataT2 = [];
    var cantT2 = 1;

    if ( table_e2 ){
        dataT2 = JSON.parse(table_e2);
        cantT2 = dataT2.length+1;
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

        var id = new Date().getTime();

        dataT2.push({
           "id": id,
           "nro": ""
        });

        var id_row = 'row'+id;

        var id_row_equipos   = 'row_eq_' + id;
        var id_table_puertos = 'row_tab_prto_' + id;
        var id_equipo_name = id_row_equipos + '_' +  (new Date().getTime());

        var fila =
            "<tr class='align-middle' id='"+id_row_equipos+"'>" +
            "    <td>" +
            "        <div><input type='text' class='form-control form-control-sm' id='"+get_uuid()+"'></div>" +
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