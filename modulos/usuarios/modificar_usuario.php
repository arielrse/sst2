<?
$id=$_GET['id'];

$resultado=mysqli_query($conexion, "SELECT id,nombre,ap_pat,ap_mat,DATE_FORMAT(fecha_nacimiento,'%d/%m/%Y') AS fecha_nacimiento,cuenta,direccion,mail,mail2,skype,msn,telf,cel,telf_oficina,interno,cargo,nro_ing,activo,iddepartamento,nivel,contrasena FROM usuarios WHERE id='".$id."'");
$datod=mysqli_fetch_array($resultado);
?>

<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">

                        <form name="amper" method="post" action="<?=$link_modulo_r?>" onSubmit=" return VerifyOne ();">
                            <input type="hidden" name="path" value="modificar_usuario_r.php" />
                            <input type="hidden" name="id" value="<?=$id?>" />
                            <h6 class="text-center">MODIFICAR DATOS DE USUARIO</h6>
                            <table width="500" align="center" class="table">
                                <tr>
                                    <th width="31%">&nbsp;&nbsp;Modificado por:</th>
                                    <td width="69%" class="resaltar" ><?=$nombrec?></td>
                                </tr>
                                <tr>
                                <th width="31%"><span class="title4">*</span>Nombre:</th>
                                <td width="69%"><input name="nombre" type="text" class="form-control form-control-sm" id="nombre" size="30" maxlength="30" value="<?=$datod['nombre']?>"></td>
                                </tr>
                                <tr>
                                <th width="31%"><span class="title4">*</span>Apellido Paterno:</th>
                                <td width="69%"><input name="ap_pat" type="text" class="form-control form-control-sm" id="ap_pat" size="15" maxlength="15" value="<?=$datod['ap_pat']?>"></td>
                                </tr>
                                <tr>
                                <th width="31%" >&nbsp;&nbsp;Apellido Materno:</th>
                                <td><input name="ap_mat" type="text" class="form-control form-control-sm" id="ap_mat" size="15" maxlength="15" value="<?=$datod['ap_mat']?>"></td>
                                </tr>
                                <tr>
                                <th width="31%" ><span class="title4">*</span>Cuenta: </th>
                                <td><input name="cuenta" type="text" class="form-control form-control-sm" id="cuenta" size="20" maxlength="20" value="<?=$datod['cuenta']?>">
                                </td>
                                </tr>
                                <tr>
                                <th width="31%" >&nbsp;&nbsp;Contrase&ntilde;a:</th>
                                    <td class="marco">
                                        <span class="cafe">Dejar en Blanco para Mantener Contraseña Anterior</span><br />
                                        <input name="contrasena" type="text" class="form-control form-control-sm" id="contrasena" size="15" maxlength="15" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Cargo:</th>
                                    <td><input name="cargo" type="text" class="form-control form-control-sm" id="cargo" size="50" maxlength="50" value="<?=$datod['cargo']?>"></td>
                                </tr>
                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Email:</th>
                                    <td><input name="mail" type="text" class="form-control form-control-sm" id="mail" size="45" maxlength="50" value="<?=$datod['mail']?>"></td>
                                </tr>
                                <tr>
                                    <th width="31%" >Celular:</th>
                                    <td><input name="cel" type="text" class="form-control form-control-sm" id="cel" value="<?=$datod['cel']?>" size="30" maxlength="50" /></td>
                                </tr>
                                <tr>
                                <th width="31%" ><span class="title4">*</span>Nivel de Usuario:</th>
                                <td><select name="nivel" class="form-control form-control-sm" id="nivel">
                                <?
                                    $resultado=mysqli_query($conexion, "SELECT sub_grupo,descripcion FROM parametrica WHERE grupo='nivel_usuario'");
                                    while($dato=mysqli_fetch_array($resultado)){
                                        echo '<option value="'.$dato['sub_grupo'].'" ';
                                        if($datod['nivel']==$dato['sub_grupo']) echo 'selected';
                                            echo'>'.$dato['descripcion'].'</option>';
                                    }
                                ?>
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Departamento:</th>
                                    <td>
                                        <select name="iddepartamento" class="form-control form-control-sm" id="iddepartamento">
                                        <?
                                        $resultado=mysqli_query($conexion, "SELECT iddepartamento, nombre, codigo FROM departamento");
                                        while($dato=mysqli_fetch_array($resultado)){
                                            echo '<option value="'.$dato['iddepartamento'].'" ';
                                            if($datod['iddepartamento']==$dato['iddepartamento']) echo 'selected';
                                                echo'>'.$dato['nombre'].'</option>';
                                        }
                                        ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="31%" ><span class="title4">*</span>Estado del usuario:</th>
                                    <td class="marco"><span class="cafe">El Usuario Inactivo no tendra acceso al Sistema</span><br /><label>Usuario Activo <input name="activo" type="radio" value="1"  <? if($datod['activo']=='1'){ echo 'checked="checked"'; }?>>
                                    </label>
                                    <label>Usuario Inactivo <input name="activo" type="radio" value="0" <? if($datod['activo']=='0'){ echo 'checked="checked"'; }?>></label></td>
                                </tr>


                                <tr>
                                    <td colspan="2" class="paginado"><span class="title4">(*) Campos requeridos</span>
                                        <br />
                                        <center>
                                        <input name="adicionar_cliente" type="submit" value="Modificar" class="btn btn-primary px-5" />
                                            <input onClick="location.href='<?=$link_modulo?>?path=ver_usuarios.php'" type="button" value="Cancelar" class="btn btn-secondary px-5">
                                        </center>
                                    </td>
                                </tr>
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
		checkField( document.amper.contrasena, isName, true ) &&
		checkField( document.amper.cargo, isName, false ) &&
		checkField( document.amper.mail, isEmail, false )
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
alert("Fecha inv�lida");
oTxt.value = "";
oTxt.focus();
}
}
}
</SCRIPT>
