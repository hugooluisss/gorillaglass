<?php /* Smarty version Smarty-3.1.11, created on 2016-10-05 20:55:06
         compiled from "templates/plantillas/modulos/pedidos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51387905457ea8543651887-35858502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475eddcdce8a2967b537a5b41d38f430be447673' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/lista.tpl',
      1 => 1475718903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51387905457ea8543651887-35858502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57ea85436bbea1_06178161',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea85436bbea1_06178161')) {function content_57ea85436bbea1_06178161($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblPedidos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Estado</th>
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
						<td style="border-left: solid 1px <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
" class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-file-pdf-o"></i></button>
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