<?php /* Smarty version Smarty-3.1.11, created on 2017-01-07 19:31:40
         compiled from "templates/plantillas/modulos/front-end/productosCarrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12543081525871167c4fa552-39314734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7269562b3bbde396199f7e15486b908afab25b9' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/productosCarrito.tpl',
      1 => 1483839095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12543081525871167c4fa552-39314734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5871167c527334_46662464',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5871167c527334_46662464')) {function content_5871167c527334_46662464($_smarty_tpl) {?><table id="tblCarrito" class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Product Total</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
		<tr>
			<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
"/></td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio']/$_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
			<tr>
				<td class="text-center" colspan="6">Sin productos</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>