<?php /* Smarty version Smarty-3.1.11, created on 2017-01-18 13:35:21
         compiled from "templates/plantillas/modulos/front-end/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1972514485587fc2e88aa0a6-66682280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae31597f89d0d850d7ffcc745c709b1a43ff9cd' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/contacto.tpl',
      1 => 1484768120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972514485587fc2e88aa0a6-66682280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587fc2e88c6da4_39577383',
  'variables' => 
  array (
    'nodosPrimerNivel' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587fc2e88c6da4_39577383')) {function content_587fc2e88c6da4_39577383($_smarty_tpl) {?><div class="container reatilLocator">
	<div class="row">
		<!-- BEGIN COLUMN -->
		<div class="col-xs-12">
			<h2 class="product_name">Contact</h2>
			<p>Contact us to place your wholesale orders, send us your questions, requests for custom pieces and any other inquiries to our email: <a href="mailto:sales@getgorilla.com">sales@getgorilla.com</a>  </p>
			<p><a href="mailto:sales@getgorilla.com">Click here to use your default email client.  </a></p>
			<p>Or give us a call to (831) 469-3665  from Monday to Friday 8am - 4.30pm CST </p>
			<p>Follow us on social media: </p>
			<p><a href="https://www.facebook.com/GorillaGlass/" target="_blank">facebook.com/gorillaglass</a> <br>
			<a href="http://instagram.com/gorillaglass/" target="_blank">instagram.com/gorillaglass</a> <br>
			<a href="http://gorillaglass.tumblr.com/" target="_blank">gorillaglass.tumblr.com</a> <br>
			<a href="https://twitter.com/GorillaGlass1" target="_blank">twitter.com/gorillaglass1</a> </p>
			<p>Gorilla Glass Inc.  <br>
			848 N Rainbow Blvd #3492 <br>
			Las Vegas, NV 89107</p>
			
			<div id="footer_icons" class="col-xs-12">
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodosPrimerNivel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<div class="footer_link"><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></div>
				<?php } ?>
            </div>
		
		</div>
		<!-- END COLUMN -->
	</div><!-- /row -->
</div><?php }} ?>