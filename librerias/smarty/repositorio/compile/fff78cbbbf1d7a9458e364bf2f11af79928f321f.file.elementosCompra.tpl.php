<?php /* Smarty version Smarty-3.1.11, created on 2017-01-17 09:01:32
         compiled from "templates/plantillas/modulos/front-end/elementosCompra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159484450586fec47570c73-28170188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff78cbbbf1d7a9458e364bf2f11af79928f321f' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/elementosCompra.tpl',
      1 => 1484233872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159484450586fec47570c73-28170188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_586fec475ef119_84190940',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586fec475ef119_84190940')) {function content_586fec475ef119_84190940($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<li><a class="dropdown-item" href="#" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></li>
<?php } ?><?php }} ?>