<?php /* Smarty version Smarty-3.1.11, created on 2016-08-31 23:43:29
         compiled from "templates/plantillas/modulos/colores/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204967050057c7b148af1824-38491623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0145eada3884db3564a6f6eed42a027c0e5f75c' => 
    array (
      0 => 'templates/plantillas/modulos/colores/panel.tpl',
      1 => 1472705007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204967050057c7b148af1824-38491623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c7b148b19867_38624723',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7b148b19867_38624723')) {function content_57c7b148b19867_38624723($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de colores</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCodigo" class="col-lg-2">Código Hex</label>
						<div class="col-lg-2">
							<input class="form-control" id="txtCodigo" name="txtCodigo" type="text">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>