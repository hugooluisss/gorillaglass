<?php /* Smarty version Smarty-3.1.11, created on 2016-09-20 23:16:39
         compiled from "templates/plantillas/modulos/pedidos/listaMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96941852657e2099441e909-18773744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6f7f4e0f664c7383bf75bc3d52e82eee038932' => 
    array (
      0 => 'templates/plantillas/modulos/pedidos/listaMovimientos.tpl',
      1 => 1474431393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96941852657e2099441e909-18773744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57e20994503bd6_02771818',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e20994503bd6_02771818')) {function content_57e20994503bd6_02771818($_smarty_tpl) {?><table id="tblMovimientos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Clave</th>
			<th>Descripción</th>
			<th>Cant</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
			<td class="text-right">
				<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" movimiento="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMovimiento'];?>
"><i class="fa fa-times"></i></button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<div class="row">
	<div class="col-sm-offset-8 col-sm-4">
		<div class="alert alert-warning text-right">
			<strong>Total</strong> $ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

		</div>
	</div>
</div><?php }} ?>