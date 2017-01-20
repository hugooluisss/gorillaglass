<?php /* Smarty version Smarty-3.1.11, created on 2017-01-19 22:27:48
         compiled from "templates/plantillas/layout/json.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168967368588191c4b72410-83855107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e1aebeeb787353159b0daa9fa2fd6425b01ab9' => 
    array (
      0 => 'templates/plantillas/layout/json.tpl',
      1 => 1468678817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168967368588191c4b72410-83855107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_588191c4bd28b3_05855927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588191c4bd28b3_05855927')) {function content_588191c4bd28b3_05855927($_smarty_tpl) {?><?php echo json_encode($_smarty_tpl->tpl_vars['json']->value);?>
<?php }} ?>