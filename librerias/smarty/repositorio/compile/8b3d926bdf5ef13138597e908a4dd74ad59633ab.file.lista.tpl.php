<?php /* Smarty version Smarty-3.1.11, created on 2016-10-04 11:23:32
         compiled from "templates/plantillas/modulos/clientes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207290014957f3d78485ea12-18835440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3d926bdf5ef13138597e908a4dd74ad59633ab' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/lista.tpl',
      1 => 1473704157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207290014957f3d78485ea12-18835440',
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
  'unifunc' => 'content_57f3d7848ba7b5_24090721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f3d7848ba7b5_24090721')) {function content_57f3d7848ba7b5_24090721($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblClientes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>RFC</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rfc'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" cliente="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>