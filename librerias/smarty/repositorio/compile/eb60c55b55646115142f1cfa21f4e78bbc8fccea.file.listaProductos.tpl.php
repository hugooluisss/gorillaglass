<?php /* Smarty version Smarty-3.1.11, created on 2016-09-15 14:04:16
         compiled from "templates/plantillas/modulos/pedidos/listaProductos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97073934557daf0b050a144-34026575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb60c55b55646115142f1cfa21f4e78bbc8fccea' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaProductos.tpl',
      1 => 1473964640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97073934557daf0b050a144-34026575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57daf0b05d1133_98082231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57daf0b05d1133_98082231')) {function content_57daf0b05d1133_98082231($_smarty_tpl) {?><table id="tblProductos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
			<td class="text-right">
				<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar" producto='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
					<i class="fa fa-hand-pointer-o"></i>
				</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>