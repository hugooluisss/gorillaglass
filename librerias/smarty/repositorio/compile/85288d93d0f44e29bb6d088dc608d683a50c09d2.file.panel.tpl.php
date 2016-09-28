<?php /* Smarty version Smarty-3.1.11, created on 2016-09-27 13:14:00
         compiled from "templates/plantillas/modulos/size/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132542941157eab6e872c1b1-78065428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85288d93d0f44e29bb6d088dc608d683a50c09d2' => 
    array (
      0 => 'templates/plantillas/modulos/size/panel.tpl',
      1 => 1474910532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132542941157eab6e872c1b1-78065428',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57eab6e877d8c4_85019639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eab6e877d8c4_85019639')) {function content_57eab6e877d8c4_85019639($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de tamaños</h1>
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
						<label for="txtClave" class="col-lg-2">Clave</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtClave" name="txtClave">
						</div>
					</div>		
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
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