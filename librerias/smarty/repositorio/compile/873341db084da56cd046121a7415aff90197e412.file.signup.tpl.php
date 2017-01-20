<?php /* Smarty version Smarty-3.1.11, created on 2017-01-19 16:13:06
         compiled from "templates/plantillas/modulos/front-end/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4440623985880e12059fe22-48727991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873341db084da56cd046121a7415aff90197e412' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/signup.tpl',
      1 => 1484863954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4440623985880e12059fe22-48727991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5880e1205a07d1_70731414',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5880e1205a07d1_70731414')) {function content_5880e1205a07d1_70731414($_smarty_tpl) {?><div class="col-md-6 col-md-offset-3 text-center">
	<h1>Already registered?</h1>
	<br />
	<a href="inicio" class="btn btn-default">Log in here</a>
	<h1>Or register your wholesale account:</h1>
	<br />
	<p>
		Interested in carrying our jewelry in your store?
	</p>
	<p>
		Please ll out the following application form. Once approved
		you will be able to check out our wholesale pricelist and use
		our wholesale shopping cart .
	</p>
	
	<br />
	<div class="alert alert-danger" style="display: none">
		<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> <strong>Please wait</strong> we are evaluating your registration.
	</div>
	<form id="frmAdd" onsubmit="javascript: return false;">
		<div class="form-group row">
			<label for="txtNombre" class="col-sm-4 col-form-label col-form-label-lg">Your Name*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtNombre" name="txtNombre" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtEmail" class="col-sm-4 col-form-label col-form-label-lg">Email*</label>
			<div class="col-sm-6">
				<input type="email" class="form-control form-control-lg" id="txtEmail" name="txtEmail" value="">
				<span class="help-block">Your email will also be your username.</span>
			</div>
		</div>
		<div class="form-group row">
			<label for="txtTienda" class="col-sm-4 col-form-label col-form-label-lg">Business Name*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtTienda" name="txtTienda" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtDireccion" class="col-sm-4 col-form-label col-form-label-lg">Business Address*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtDireccion" name="txtDireccion" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtRFC" class="col-sm-4 col-form-label col-form-label-lg">TaxID/VAT Import Number</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtRFC" name="txtRFC" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtTelefono" class="col-sm-4 col-form-label col-form-label-lg">Phone</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtTelefono" name="txtTelefono" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtSitioWeb" class="col-sm-4 col-form-label col-form-label-lg">Website / Social Media*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtSitioWeb" name="txtSitioWeb" value="">
			</div>
		</div>
		<hr />
		<div class="form-group row">
			<label for="txtPass" class="col-sm-4 col-form-label col-form-label-lg">Password*</label>
			<div class="col-sm-6">
				<input type="password" class="form-control form-control-lg" id="txtPass" name="txtPass" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtPassConfirm" class="col-sm-4 col-form-label col-form-label-lg">Confirm Password*</label>
			<div class="col-sm-6">
				<input type="password" class="form-control form-control-lg" id="txtPassConfirm" name="txtPassConfirm" value="">
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 text-center">
				<input type="hidden" id="id" value=""/>
				<input type="submit" class="btn btn-default" value="Submit" />
			</div>
		</div>
	</form>
	<br />
	<p>
		You will receive conrmation to the email you provided once our account is approved!
	</p>
	<a href="contact" class="big-text">Contact us here with any questions!</a>
	<br />
	<br />
</div><?php }} ?>