<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="nuevo_grupo_r.php" />

                            <h6 class="text-center">NUEVO GRUPO DE MANTENIMIENTO</h6>

                            <table align="center" class="table">

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>CM/SCM:</th>
                                    <td>
                                        <select name="idcentro" class="single-select" id="idcentro">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                                $resultado=mysqli_query($conexion, "SELECT idcentro, nombre FROM centro where iddepartamento = '$iddepartamento'");
                                                while($dato=mysqli_fetch_array($resultado))
                                                    echo '<option value="'.$dato['idcentro'].'">'.$dato['nombre'].'</option>';
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Persona 1:</th>
                                    <td>
                                        <select id="iduser1" name="iduser1" class="single-select">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                                $resultado = mysqli_query($conexion, "SELECT id,
                                                                                            concat(nombre, ' ', ap_pat, ' ', ap_mat) AS nombre  
                                                                                            FROM usuarios where iddepartamento = '$iddepartamento'");
                                                while($dato=mysqli_fetch_array($resultado))
                                                    echo '<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>';
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Persona 2:</th>
                                    <td>
                                        <select name="iduser2" class="single-select" id="iduser2">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <?php
                                            $resultado = mysqli_query($conexion, "SELECT id,
                                                                                            concat(nombre, ' ', ap_pat, ' ', ap_mat) AS nombre  
                                                                                            FROM usuarios where iddepartamento = '$iddepartamento'");
                                            while($dato=mysqli_fetch_array($resultado))
                                                echo '<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>';
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <!--<tr>
                                    <th width="31%"><span class="title4">*</span>Numero de Grupo</th>
                                    <td>
                                        <select name="nombreGrupo" class="single-select" id="nombreGrupo">
                                            <option value="0" selected class="title7"> Seleccionar... </option>
                                            <option class="title7" value="GRUPO-1">GRUPO-1</option>
                                            <option class="title7" value="GRUPO-2">GRUPO-2</option>
                                        </select>
                                    </td>
                                </tr>-->

                                <tr>
                                    <th width="31%"><span class="title4">*</span>Nombre de Grupo:</th>
                                    <td width="69%"><input name="nombreGrupo" type="text" class="form-control form-control-sm" id="nombreGrupo" size="30" ></td>
                                </tr>


                            <tr><td colspan="2" class="paginado"><span class="rojo">(*) Campos requeridos</span><BR /><center>
                            <input name="adicionar_cliente" type="submit" value="Adicionar" class="btn btn-primary px-5" />
                            <input onClick="location.href='<?=$link_modulo?>?path=ver_grupos.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                            </center></td></tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<SCRIPT src="../../js/validador.js" type=text/javascript></SCRIPT>
<SCRIPT type=text/javascript>
function VerifyOne () {
    if( checkField( document.amper.nombre, isName, false ) &&
		checkField( document.amper.ap_pat, isName, false ) &&
		checkField( document.amper.ap_mat, isName, true ) &&
		checkField( document.amper.cuenta, isName, false ) &&
		checkField( document.amper.contrasena, isName, false ) &&
		checkField( document.amper.cargo, isName, false ) &&
		checkField( document.amper.mail, isEmail, false ) &&
		validarSelect(document.amper.nivel,'Seleccione el Nivel de Usuario') &&	
		validarSelect(document.amper.iddepartamento,'Seleccione el departamento') &&
		checkField( document.amper.cel, isPhoneNumber, true )
		)
		{		
			if(confirm("Las datos Son validos!\n Continuar el Registro con estos Datos?"))
			{return true;}
			else {return false;}															
		}		  
else {	
return false;
     }
}

function valDia(oTxt){
var bOk = false;
var nDia = parseInt(oTxt.value.substr(0, 2), 10);
bOk = bOk || ((nDia >= 1) && (nDia <= finMes(oTxt)));
return bOk;
}
function valMes(oTxt){
var bOk = false;
var nMes = parseInt(oTxt.value.substr(3, 2), 10);
bOk = bOk || ((nMes >= 1) && (nMes <= 12));
return bOk;
}
function valAno(oTxt){
var bOk = true;
var nAno = oTxt.value.substr(6);
bOk = bOk && ((nAno.length == 4));
if (bOk){
for (var i = 0; i < nAno.length; i++){
bOk = bOk && esDigito(nAno.charAt(i));
}
}
return bOk;
}

function valFecha(oTxt){
var bOk = true;
if (oTxt.value != ""){
bOk = bOk && (valAno(oTxt));
bOk = bOk && (valMes(oTxt));
bOk = bOk && (valDia(oTxt));
bOk = bOk && (valSep(oTxt));
if (!bOk){
alert("Fecha invalida");
oTxt.value = "";
oTxt.focus();
}
}
}
</SCRIPT>
<link href="../../paquetes/tooltip/tooltip.css" rel="stylesheet" type="text/css">
<script language=javascript type="text/javascript" src="../../paquetes/tooltip/tooltip.js"></script>