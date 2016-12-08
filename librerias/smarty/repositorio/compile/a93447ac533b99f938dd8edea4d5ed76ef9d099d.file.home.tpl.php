<?php /* Smarty version Smarty-3.1.11, created on 2016-12-07 23:03:57
         compiled from "templates/plantillas/modulos/front-end/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2077486163584863e6381c28-02438639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93447ac533b99f938dd8edea4d5ed76ef9d099d' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/home.tpl',
      1 => 1481173436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2077486163584863e6381c28-02438639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_584863e63825f0_77012523',
  'variables' => 
  array (
    'nodosPadre' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584863e63825f0_77012523')) {function content_584863e63825f0_77012523($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodosPadre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<a href="home/<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
">
		<div class="col-md-3 col-xs-12 col-sm-6" item=<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
>
			<div class="panel panel-default">
				<div class="panel-body">
					<!--<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/items.jpg"/>-->
					<?php if (count($_smarty_tpl->tpl_vars['row']->value['img'])==0){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/items.jpg"/>
					<?php }else{ ?>
						<img src="repositorio/productos/producto_<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'][0];?>
"/>
					<?php }?>
				</div>
				<div class="panel-footer">
					<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</b>
				</div>
			</div>
		</div>
	</a>
<?php } ?><?php }} ?>