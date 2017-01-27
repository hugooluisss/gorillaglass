<div class="page-header">
	<h1>Edit Profile</h1>
</div>

<div class="row">
	<div class="col-xs-12">
		<form id="frmAdd" onsubmit="javascript: return false;">
			<div class="form-group row">
				<label for="txtEmail" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
				<div class="col-sm-6">
					<input type="email" class="form-control form-control-lg" id="txtEmail" name="txtEmail" value="{$cliente->getEmail()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtNombre" class="col-sm-2 col-form-label col-form-label-lg">Your Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtNombre" name="txtNombre" value="{$cliente->getNombre()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtTienda" class="col-sm-2 col-form-label col-form-label-lg">Business Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtTienda" name="txtTienda" value="{$cliente->getRazonSocial()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtDireccion" class="col-sm-2 col-form-label col-form-label-lg">Business Address</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtDireccion" name="txtDireccion" value="{$cliente->getDireccion()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtRFC" class="col-sm-2 col-form-label col-form-label-lg">TaxID/VAT Import Number</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtRFC" name="txtRFC" value="{$cliente->getRFC()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtTelefono" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtTelefono" name="txtTelefono" value="{$cliente->getTelefono()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtSitioWeb" class="col-sm-2 col-form-label col-form-label-lg">Website/Social Media</label>
				<div class="col-sm-6">
					<input type="text" class="form-control form-control-lg" id="txtSitioWeb" name="txtSitioWeb" value="{$cliente->getSitioWeb()}">
				</div>
			</div>
			<hr />
			<div class="form-group row">
				<label for="txtPass" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control form-control-lg" id="txtPass" name="txtPass" value="{$cliente->getPass()}">
				</div>
			</div>
			<div class="form-group row">
				<label for="txtConfirm" class="col-sm-2 col-form-label col-form-label-lg">Confirm</label>
				<div class="col-sm-6">
					<input type="password" class="form-control form-control-lg" id="txtConfirm" name="txtConfirm" value="{$cliente->getPass()}">
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-8 text-right">
					<input type="hidden" id="id" value="{$cliente->getId()}"/>
					<input type="submit" class="btn" value="Save" />
				</div>
			</div>
		</form>
	</div>
</div>