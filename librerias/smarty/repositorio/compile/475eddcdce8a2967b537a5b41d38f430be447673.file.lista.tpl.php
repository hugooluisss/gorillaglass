<?php /* Smarty version Smarty-3.1.11, created on 2016-09-20 22:58:34
         compiled from "templates/plantillas/modulos/pedidos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206060491757dae1a56f9994-85697167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475eddcdce8a2967b537a5b41d38f430be447673' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/lista.tpl',
      1 => 1474430311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206060491757dae1a56f9994-85697167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57dae1a5726a62_93014201',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dae1a5726a62_93014201')) {function content_57dae1a5726a62_93014201($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPedidos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Monto</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" venta="<?php echo $_smarty_tpl->tpl_vars['row']->value['idVenta'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>