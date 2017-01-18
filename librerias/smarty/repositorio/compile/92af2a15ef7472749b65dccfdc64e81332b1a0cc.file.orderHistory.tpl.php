<?php /* Smarty version Smarty-3.1.11, created on 2017-01-18 10:12:58
         compiled from "templates/plantillas/modulos/front-end/userAdmin/orderHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476769341587f940a0275e0-32680528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92af2a15ef7472749b65dccfdc64e81332b1a0cc' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/userAdmin/orderHistory.tpl',
      1 => 1484755963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476769341587f940a0275e0-32680528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587f940a07c837_05608532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f940a07c837_05608532')) {function content_587f940a07c837_05608532($_smarty_tpl) {?><div class="page-header">
	<h1>Order History</h1>
</div>

<div class="row">
	<div class="col-xs-12">
		<form id="frmAdd" onsubmit="javascript: return false;">
			<div class="form-group row">
				<label for="txtEmail" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
				<div class="col-sm-6">
					<input type="email" class="form-control form-control-lg" id="txtEmail" name="txtEmail" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtNombre" class="col-sm-2 col-form-label col-form-label-lg">Your Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtNombre" name="txtNombre" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtTienda" class="col-sm-2 col-form-label col-form-label-lg">Store Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtTienda" name="txtTienda" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRazonSocial();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtDireccion" class="col-sm-2 col-form-label col-form-label-lg">Store Address</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtDireccion" name="txtDireccion" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtRFC" class="col-sm-2 col-form-label col-form-label-lg">TaxID/VAT Import Number</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtRFC" name="txtRFC" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRFC();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtTelefono" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtTelefono" name="txtTelefono" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtSitioWeb" class="col-sm-2 col-form-label col-form-label-lg">Website</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtSitioWeb" name="txtSitioWeb" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getSitioweb();?>
">
				</div>
			</div>
			<hr />
			<div class="form-group row">
				<label for="txtPass" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control form-control-lg" id="txtPass" name="txtPass" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getPass();?>
">
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-8 text-right">
					<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
"/>
					<input type="submit" class="btn" value="Save" />
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>