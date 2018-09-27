<div class="col-md-6 col-md-offset-3 text-center">
	<h1>Already registered?</h1>
	<br />
	<a href="inicio" class="btn btn-default">Log in here</a>
	<h1>Or register your wholesale account:</h1>
	<br />
	<p>
		Interested in carrying our jewelry in your store?
	</p>
	<p>
		Please fill out the following application form. Once approved
		you will be able to check out our wholesale pricelist and use
		our wholesale shopping cart.
	</p>

	<p>If you have any questions <a href="faq" target="_blank">check out our Frequently Asked Questions section here</a> or <a href="contact" target="_blank">contact us here with any questions!</a> </p>
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
		<!--
		<div class="form-group row">
			<label for="txtDireccion" class="col-sm-4 col-form-label col-form-label-lg">Business Address*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtDireccion" name="txtDireccion" value="">
			</div>
		</div>-->
		<div class="form-group row">
			<label for="txtStreet" class="col-sm-4 col-form-label col-form-label-lg">Street*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtStreet" name="txtStreet" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtCity" class="col-sm-4 col-form-label col-form-label-lg">City*</label>
			<div class="col-sm-6">
				<input type="text" class="form-control form-control-lg" id="txtCity" name="txtCity" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtState" class="col-sm-4 col-form-label col-form-label-lg">State</label>
			<div class="col-sm-3">
				<input type="text" class="form-control form-control-lg" id="txtState" name="txtState" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtCountry" class="col-sm-4 col-form-label col-form-label-lg">Country*</label>
			<div class="col-sm-3">
				<input type="text" class="form-control form-control-lg" id="txtCountry" name="txtCountry" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtZip" class="col-sm-4 col-form-label col-form-label-lg">Postal Code*</label>
			<div class="col-sm-4">
				<input type="text" class="form-control form-control-lg" id="txtZip" name="txtZip" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="txtRFC" class="col-sm-4 col-form-label col-form-label-lg">TaxID/VAT Import Number*</label>
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
		<div class="form-group row">
			<label for="selIsApp" class="col-sm-4 col-form-label col-form-label-lg">Check the following box if you are a member of the APP</label>
			<div class="col-sm-6 text-left">
				<input type="checkbox" id="selIsApp" name="selIsApp" value="1" />
				<span class="help-block">Once verified, you will automatically receive an APP member discount on future orders.</span>
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
	<br />
	<small class="text-mute" style="font-wight: normal">*required fields</small>
	<br /><br />
	<p>
		You will receive confirmation to the email you provided once your account is approved!
	</p>
	<a href="contact" class="big-text">Contact us here with any questions!</a>
	<br />
	<br />
</div>
