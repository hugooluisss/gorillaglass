<?php /* Smarty version Smarty-3.1.11, created on 2016-09-12 13:01:11
         compiled from "templates/plantillas/modulos/clientes/modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190294093657d6ed679a3b19-87725103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4996589961cea26aaf11463db996b7382af21ba9' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/modificar.tpl',
      1 => 1473703154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190294093657d6ed679a3b19-87725103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57d6ed679c6027_56103603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6ed679c6027_56103603')) {function content_57d6ed679c6027_56103603($_smarty_tpl) {?><form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=="clienteDatos"){?><h1>Bienvenido</h1><?php }?>
		<div class="box-body">
			<div class="form-group">
				<label for="selTipo" class="col-lg-2">Tipo</label>
				<div class="col-lg-3">
					<select class="form-control" id="selTipo" name="selTipo">
						<option value="F" <?php if ($_smarty_tpl->tpl_vars['cliente']->value->getTipo()=='F'){?>selected<?php }?>>Persona
						<option value="E" <?php if ($_smarty_tpl->tpl_vars['cliente']->value->getTipo()=='M'){?>selected<?php }?>>Empresa
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="txtRazonSocial" class="col-lg-2">Razón social</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtRazonSocial" name="txtRazonSocial" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRazonSocial();?>
">
				</div>
			</div>		
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre completo</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtDireccion" class="col-lg-2">Dirección</label>
				<div class="col-lg-3">
					<textarea class="form-control" id="txtDireccion" name="txtDireccion"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="txtLocalidad" class="col-lg-2">Localidad</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtLocalidad" name="txtLocalidad" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getLocalidad();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtTelefono" class="col-lg-2">Teléfono</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtTelefono" name="txtTelefono" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtCelular" class="col-lg-2">Celular</label>
				<div class="col-lg-2">
					<input class="form-control" id="txtCelular" name="txtCelular" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCelular();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtEmail" class="col-lg-2">Correo electrónico</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtEmail" name="txtEmail" type="email" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtRFC" class="col-lg-2">RFC</label>
				<div class="col-lg-3">
					<input class="form-control" id="txtRFC" name="txtRFC" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRFC();?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="txtObservaciones" class="col-lg-2">Observaciones</label>
				<div class="col-lg-3">
					<textarea class="form-control" id="txtObservaciones" name="txtObservaciones"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getObservaciones();?>
</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
"/>
		</div>
	</div>
</form><?php }} ?>