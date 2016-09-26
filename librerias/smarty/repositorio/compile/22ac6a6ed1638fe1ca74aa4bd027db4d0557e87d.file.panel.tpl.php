<?php /* Smarty version Smarty-3.1.11, created on 2016-09-23 23:28:50
         compiled from "templates/plantillas/modulos/productos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172728358157d56879d85342-72536336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22ac6a6ed1638fe1ca74aa4bd027db4d0557e87d' => 
    array (
      0 => 'templates/plantillas/modulos/productos/panel.tpl',
      1 => 1474691300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172728358157d56879d85342-72536336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57d56879dcaa62_38671614',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d56879dcaa62_38671614')) {function content_57d56879dcaa62_38671614($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de Productos</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div id="dvLista"></div>
	</div>
</div>

<div class="modal fade" id="winProductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Productos</h1>
			</div>
			<div class="modal-body">
				<form action="#" onsubmit="javascript: return false;" id="frmProducto">
					<div class="row">
						<label class="col-xs-4" for="txtClave">Clave</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="txtClave" name="txtClave">
						</div>
					</div>
					<div class="row">
						<label class="col-xs-4" for="txtNombre">Nombre</label>
						<div class="col-xs-8">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="row">
						<label class="col-xs-4" for="txtNombre">Descripción</label>
						<div class="col-xs-8">
							<textarea class="form-control" id="txtDescripcion"  name="txtDescripcion" rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<label class="col-xs-4" for="txtPrecio">Precio</label>
						<div class="col-xs-3">
							<input type="text" class="form-control" id="txtPrecio" name="txtPrecio">
						</div>
					</div>
					<input type="submit" value="Guardar" class="btn btn-success"/>
					<input type="hidden" id="id" name="id" value="" />
					<input type="hidden" id="padre" name="padre" value="" />
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="winUploadImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Imágenes</h1>
			</div>
			<div class="modal-body">
				<form method="post" action="?mod=cpedidos&action=uploadfile2" enctype="multipart/form-data">
					<input type="file" name="upl" multiple />
					<input type="hidden" name="producto" id="producto" />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>