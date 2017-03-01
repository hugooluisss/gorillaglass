<?php /* Smarty version Smarty-3.1.11, created on 2017-03-01 09:25:52
         compiled from "templates/plantillas/modulos/front-end/carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281916842586d524e2a0497-78349095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9c3e919308fcdc12d97b686dd03820a15286ba' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/carrito.tpl',
      1 => 1485786904,
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
    'images' => 0,
    'PAGE' => 0,
    'itemId' => 0,
    'etiquetas' => 0,
    'row' => 0,
    'idPedido' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d524e2a4ae2_26514954')) {function content_586d524e2a4ae2_26514954($_smarty_tpl) {?><div id="modal-car">
	<div class="container">
		<div class="col-md-6 modal-car-body">
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10">
					<h2>Current Order</h2>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 text-right">
					<a href="#lnkCerrar" id="lnkCerrar" class="circle" onclick="javascript: return false;">
						<i class="fa fa-times-circle-o fa-3x hidden-xs" aria-hidden="true"></i>
						<i class="fa fa-times-circle-o fa-2x visible-xs" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 table-responsive">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<br />
					<a href="#lnkCerrar" id="lnkCerrar" onclick="javascript: return false;">< Back to products</a>
				</div>
				<div class="col-md-6">
					Done adding products?<br />
					<a href="currentOrder">Go to your profile page to place the order</a>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-5 modal-car-body">
			<div class="row">
				<div class="col-sm-6 col-md-12">
					<br />
					<center>
					<?php if (count($_smarty_tpl->tpl_vars['images']->value)==0){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/items.jpg" class="img-responsive"/>
					<?php }else{ ?>
						<img src="repositorio/productos/producto_<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['images']->value[0];?>
" class="img-responsive"/>
					<?php }?>
					</center>
				</div>
				<div class="col-sm-6 col-md-12">
					<br />
					<br />
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['etiquetas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["etiquetas"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["etiquetas"]['iteration']++;
?>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-xs-5 col-sm-5 col-md-5 text-right">
								<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

							</div>
							<div class="col-xs-7 col-sm-7 col-md-7" nivel="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['etiquetas']['iteration'];?>
" total="<?php echo count($_smarty_tpl->tpl_vars['etiquetas']->value);?>
">
								<div class="btn-group order">
									<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SELECT</button>
									<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
									<div class="dropdown-menu">
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="row">
						<br />
						<br />
						<div class="col-xs-5 col-sm-5 col-md-5 text-right">PIECES</div>
						<div class="col-xs-7 col-sm-7 col-md-3">
							<input type="number" value="0" id="txtCantidad" name="txtCantidad" class="form-control" />
						</div>
					</div>
					<div class="row">
						<br />
						<div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 text-center">
							<button class="btn btn-addProducto">ADD</button>
						</div>
					</div>
					<div class="row">
						<br />
						<div class="col-xs-12">
							<span class="text-danger">All items are single pieces.You must order two pieces to receive a matching pair</span>
						</div>
					</div>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-xs-12 text-center">
					<a href="#lnkCerrar" id="lnkCerrar" class="visible-xs" onclick="javascript: return false;">< Back to products</a>
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