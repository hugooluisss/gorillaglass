<?php /* Smarty version Smarty-3.1.11, created on 2017-01-23 11:56:14
         compiled from "templates/plantillas/modulos/front-end/userAdmin/currentOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:786501328587f8aa285edd0-71067383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549ebf34062d6a0522cd61a626ac9e56be3fd4cc' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/userAdmin/currentOrder.tpl',
      1 => 1485186429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786501328587f8aa285edd0-71067383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587f8aa285fb22_46936429',
  'variables' => 
  array (
    'clienteObj' => 0,
    'idPedido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f8aa285fb22_46936429')) {function content_587f8aa285fb22_46936429($_smarty_tpl) {?><div class="page-header">
	<h1><?php echo $_smarty_tpl->tpl_vars['clienteObj']->value->getNombre();?>
</h1>
	<h3>Current Order</h3>
</div>

<div class="table-responsive">
</div>

<input id="idPedido" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idPedido']->value;?>
" />

<div class="row">
	<div class="col-sm-3 col-sm-offset-6 text-center">
		<a href="repositorio/Shippinginfo.pdf" target="_blank">Learn about our shipping options and costs here.</a>
	</div>
	<div class="col-sm-3">
		<a href="placeOrder" class="btn btn-blue">Place Order</a>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 col-sm-offset-9 text-center">
		<br />
		<p>
			<b>Any questions?</b><br />
			sales@getgorilla.com<br />
			or call us at 831-469-3665
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<a href="home">Back to catalog</a>
	</div>
</div><?php }} ?>