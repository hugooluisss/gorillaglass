<?php /* Smarty version Smarty-3.1.11, created on 2017-03-01 09:24:49
         compiled from "templates/plantillas/modulos/front-end/menuPrincipal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404781656587f8a2ddd1597-55379527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd5beb1cdbb042f72a43ee6b3c60a5e87465634b' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/menuPrincipal.tpl',
      1 => 1485536818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1404781656587f8a2ddd1597-55379527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_587f8a2dddd855_40870249',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f8a2dddd855_40870249')) {function content_587f8a2dddd855_40870249($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PAGE']->value['sesion']['perfil']=="cliente"){?>
	<ul class="list-group" id="menuPrincipal">
		<li class="list-group-item"><a href="profile">Profile</a></li>
		<li class="list-group-item"><a href="currentOrder">Current Order</a></li>
		<li class="list-group-item"><a href="orderHistory">Order History</a></li>
		<!--<li class="list-group-item"><a href="customPriceList">Custom Price List</a></li>-->
		<li class="list-group-item"><a href="priceList">Price List</a></li>
		<li class="list-group-item"><a href="logout">Logout</a></li>
	</ul>		
<?php }else{ ?>
	<ul class="list-group" id="menuPrincipal">
		<li class="list-group-item">Are you a vendor?<br /><a href="signup">Sign up for a wholesale account!</a></li>
		<li class="list-group-item"><a href="inicio">Log in</a></li>
	</ul>
<?php }?><?php }} ?>