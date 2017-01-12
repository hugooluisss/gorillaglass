<?php /* Smarty version Smarty-3.1.11, created on 2017-01-12 09:12:45
         compiled from "templates/plantillas/modulos/front-end/carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281916842586d524e2a0497-78349095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9c3e919308fcdc12d97b686dd03820a15286ba' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/carrito.tpl',
      1 => 1484233872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281916842586d524e2a0497-78349095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_586d524e2a4ae2_26514954',
  'variables' => 
  array (
    'item' => 0,
    'PAGE' => 0,
    'idPedido' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d524e2a4ae2_26514954')) {function content_586d524e2a4ae2_26514954($_smarty_tpl) {?><div id="modal-car">
	<div class="container">
		<div class="col-md-6 modal-car-body">
			<div class="row">
				<div class="col-md-10">
					<h2>Current Order</h2>
				</div>
				<div class="col-md-2 text-right">
					<a href="#" id="lnkCerrar">
						<i class="fa fa-times-circle-o fa-3x" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 table-responsive">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a class="btn btn-delete btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Remove selected items</a>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-5 modal-car-body">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php if (count($_smarty_tpl->tpl_vars['item']->value['img'])==0){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/items.jpg"/>
					<?php }else{ ?>
						<img src="repositorio/productos/producto_<?php echo $_smarty_tpl->tpl_vars['item']->value['idProducto'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'][0];?>
"/>
					<?php }?>
				</div>
			</div>
			<br />
			<br />
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-5">
						COLOR
					</div>
					<div class="col-md-7" id="color">
						<div class="btn-group order">
							<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
							<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
							<div class="dropdown-menu">
							</div>
						</div>
					</div>
					<br /><br />
					<div class="col-md-5">
						VARATIONS
					</div>
					<div class="col-md-7" id="variacion">
						<div class="btn-group order">
							<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
							<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
							<div class="dropdown-menu">
								<li><a class="dropdown-item" href="#"></a></li>
							</div>
						</div>
					</div>
					<br /><br />
					<div class="col-md-5">
						SIZE
					</div>
					<div class="col-md-7" id="size">
						<div class="btn-group order">
							<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
							<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
							<div class="dropdown-menu">
								<li><a class="dropdown-item" href="#"></a></li>
							</div>
						</div>
					</div>
					<br /><br />
					<div class="col-md-5">
						SURFACE TREATMENT
					</div>
					<div class="col-md-7" id="surface">
						<div class="btn-group order">
							<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
							<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
							<div class="dropdown-menu">
								<li><a class="dropdown-item" href="#"></a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-md-5 text-right">QUANTITY</div>
				<div class="col-md-3">
					<input type="number" value="0" id="txtCantidad" name="txtCantidad" class="form-control" />
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<button class="btn btn-addProducto">ADD</button>
				</div>
			</div>
			<br /><br />
			<input type="hidden" id="idPedido" name="idPedido" value="<?php echo $_smarty_tpl->tpl_vars['idPedido']->value;?>
" />
			<input type="hidden" id="cliente" name="cliente" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
" />
		</div>
	</div>
</div><?php }} ?>