<?php /* Smarty version Smarty-3.1.11, created on 2017-01-18 11:00:48
         compiled from "templates/plantillas/modulos/front-end/userAdmin/ordersHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283937964587f9440806345-54188363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8aa64d0b614a5cfab706be2cbaebef01fc63b9' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/userAdmin/ordersHistory.tpl',
      1 => 1484758847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1283937964587f9440806345-54188363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587f9440862ca1_22391094',
  'variables' => 
  array (
    'ordenes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f9440862ca1_22391094')) {function content_587f9440862ca1_22391094($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/gorillasglass/librerias/smarty/plugins/modifier.date_format.php';
?><div class="page-header">
	<h1>Order History</h1>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="tblOrdenes" class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">DATE PLACED</th>
							<th class="text-center">SUBTOTAL (USD)</th>
							<th class="text-center">STATUS</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fecha']);?>
</td>
								<td class="text-right">$ <?php echo $_smarty_tpl->tpl_vars['row']->value['subtotal'];?>
</td>
								<td class="text-center">
									<span class="colorEstado" style="background: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>

									</span>
								</td>
								<td style="text-align: center">
									<button class="btn btn-gris viewOrder" pedido="<?php echo $_smarty_tpl->tpl_vars['row']->value['idPedido'];?>
">VIEW ORDER</button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>