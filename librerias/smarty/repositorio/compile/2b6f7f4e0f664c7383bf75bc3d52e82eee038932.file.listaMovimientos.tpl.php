<?php /* Smarty version Smarty-3.1.11, created on 2016-10-05 20:45:11
         compiled from "templates/plantillas/modulos/pedidos/listaMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39335715257f54de2d35de0-32024499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6f7f4e0f664c7383bf75bc3d52e82eee038932' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaMovimientos.tpl',
      1 => 1475718306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39335715257f54de2d35de0-32024499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57f54de2daf349_90682754',
  'variables' => 
  array (
    'pedido' => 0,
    'lista' => 0,
    'row' => 0,
    'subtotal' => 0,
    'etiquetaDescuento' => 0,
    'descuento' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f54de2daf349_90682754')) {function content_57f54de2daf349_90682754($_smarty_tpl) {?><table id="tblMovimientos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Clave</th>
			<th>Descripción</th>
			<th>Cant</th>
			<th>Precio</th>
			<?php if ($_smarty_tpl->tpl_vars['pedido']->value->estado->getId()==1){?>
			<th>&nbsp;</th>
			<?php }?>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['pedido']->value->estado->getId()==1){?>
			<td class="text-right">
				<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
"><i class="fa fa-times"></i></button>
			</td>
			<?php }?>
		</tr>
		<?php } ?>
	</tbody>
</table>

<div class="row">
	<div class="col-sm-offset-8 col-sm-4">
		<div class="alert alert-info text-right">
			<div class="row">
				<div class="col-md-6">
					<strong>Subtotal</strong>
				</div>
				<div class="col-md-6">
					$ <?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>

				</div>
			</div>
		</div>
		<div class="alert alert-success text-right">
			<div class="row">
				<div class="col-md-6">
					<strong>Descuento (<?php echo $_smarty_tpl->tpl_vars['etiquetaDescuento']->value;?>
%)</strong>
				</div>
				<div class="col-md-6">
					$ <?php echo $_smarty_tpl->tpl_vars['descuento']->value;?>

				</div>
			</div>
		</div>
		<div class="alert alert-warning text-right">
			<div class="row">
				<div class="col-md-6">
					<strong>Total</strong>
				</div>
				<div class="col-md-6">
					$ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>