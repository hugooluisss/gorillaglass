<?php /* Smarty version Smarty-3.1.11, created on 2017-01-20 12:47:22
         compiled from "templates/plantillas/modulos/front-end/userAdmin/customPriceList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229630043587fa0ea14d3b0-13207640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49628b3ad6124495d2be5c33c39a3be70374116c' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/userAdmin/customPriceList.tpl',
      1 => 1484925144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229630043587fa0ea14d3b0-13207640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587fa0ea169d80_76862479',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587fa0ea169d80_76862479')) {function content_587fa0ea169d80_76862479($_smarty_tpl) {?><div class="page-header">
	<h3>Custom Price List</h3>
</div>

<div class="row">
	<div class="col-xs-12">
		<p> With this tool you can generato a complete price list of our products that shows your retail prices. This way you can go shopping with your customers and have them look at the retail prices you have set for our complete product line.</p>
		<br />
		<p>
			Whenever we add new products to our price list, or change the price of a product, we will send you an email notification reminding you to update your retail pricelist
		</p>
		<br />
	</div>
</div>
<div class="alert alert-danger" style="display: none">
	<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> <strong>Please wait</strong> we are evaluating your registration.
</div>
<div class="row">
	<div class="col-xs-12">
		What is your maekup rate? <input type="number" id="multiplicador" value="1" class="text-right"/> <span class="text-muted">All wholesale prices will be multiplied by this number</span>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 text-center">
		<br />
		<br />
		<br />
		<button class="btn btn-default generarListaPrecios">Generate price list !</button>
	</div>
</div><?php }} ?>