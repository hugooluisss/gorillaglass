<?php /* Smarty version Smarty-3.1.11, created on 2016-12-27 23:30:17
         compiled from "templates/plantillas/modulos/front-end/elemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4177557195852190a2be5d9-49390077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8323ec9f5155d45623555ecfec5dc704a27f29b6' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/elemento.tpl',
      1 => 1482902932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4177557195852190a2be5d9-49390077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5852190a2bf840_49281447',
  'variables' => 
  array (
    'item' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852190a2bf840_49281447')) {function content_5852190a2bf840_49281447($_smarty_tpl) {?><div class="row producto">
	<div class="col-xs-12 col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php if (count($_smarty_tpl->tpl_vars['item']->value['img'])==0){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/items.jpg"/>
				<?php }else{ ?>
					<img src="repositorio/productos/producto_<?php echo $_smarty_tpl->tpl_vars['item']->value['idProducto'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'][0];?>
"/>
				<?php }?>
			</div>
			<div class="panel-footer">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['item']->value['clave'];?>
</b>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>

				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>