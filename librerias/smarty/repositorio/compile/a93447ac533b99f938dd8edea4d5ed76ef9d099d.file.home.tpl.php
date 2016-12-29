<?php /* Smarty version Smarty-3.1.11, created on 2016-12-27 23:20:45
         compiled from "templates/plantillas/modulos/front-end/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298453899584f7ba0d0a419-95858283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93447ac533b99f938dd8edea4d5ed76ef9d099d' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/home.tpl',
      1 => 1482902444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298453899584f7ba0d0a419-95858283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_584f7ba0d77654_97551504',
  'variables' => 
  array (
    'breadcrumb' => 0,
    'row' => 0,
    'vista' => 0,
    'hijos' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584f7ba0d77654_97551504')) {function content_584f7ba0d77654_97551504($_smarty_tpl) {?>
<ol class="breadcrumb hidden-xs">
	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</a></li>
	<?php } ?>
</ol>

<ol class="breadcrumb visible-xs">
	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</a></li>
	<?php } ?>
</ol>

<?php if ($_smarty_tpl->tpl_vars['vista']->value==''){?>
	<?php if (count($_smarty_tpl->tpl_vars['hijos']->value)>0){?>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hijos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
">
				<div class="col-md-3 col-xs-12 col-sm-6" item="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
">
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
		<?php } ?>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/elemento.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['vista']->value;?>

<?php }?><?php }} ?>