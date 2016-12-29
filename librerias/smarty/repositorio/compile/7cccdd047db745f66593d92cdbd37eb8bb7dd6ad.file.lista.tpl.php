<?php /* Smarty version Smarty-3.1.11, created on 2016-12-27 22:49:18
         compiled from "templates/plantillas/modulos/productos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254703259586343b96bc729-57621559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cccdd047db745f66593d92cdbd37eb8bb7dd6ad' => 
    array (
      0 => 'templates/plantillas/modulos/productos/lista.tpl',
      1 => 1482900555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254703259586343b96bc729-57621559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_586343b97744c9_30295827',
  'variables' => 
  array (
    'productos' => 0,
    'nivel' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586343b97744c9_30295827')) {function content_586343b97744c9_30295827($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
<div class="row">
	<div class="col-md-7">
		<div class="col-md-<?php echo 12-$_smarty_tpl->tpl_vars['nivel']->value;?>
 col-md-offset-<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
">
			<button class="btn btn-default btn-xs" action="hijos" title="Hijos" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' hijos="<?php if ($_smarty_tpl->tpl_vars['row']->value['hijos']){?>si<?php }?>"><i class="fa fa-plus"></i></button>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

		</div>
	</div>
	<div class="col-md-1 text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</div>
	<div class="col-md-1 text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['venta'];?>
</div>
	<div class="col-md-3">
		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
" title="Copiar" class="copiar"/> 
		<button type="button" class="btn btn-success btn-xs" action="agregar" title="Nuevo" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-plus"></i></button>
			<button type="button" class="btn btn-default btn-xs" action="imagen" title="Imagen" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
"><i class="fa fa-picture-o"></i></button>
			<button type="button" class="btn btn-default btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
			<button type="button" class="btn btn-info btn-xs" action="masivo" title="Insertar masivamente" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-flag"></i></button>
			<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-minus"></i></button>
			<button type="button" class="btn btn-default btn-xs" action="pegar" title="Pegar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-paste"></i></button>
			<button type="button" class="btn btn-default btn-xs" action="html" title="Vista en HTML" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-code"></i></button>
	</div>
</div>

<div id="dvLista<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
"></div>
<?php } ?><?php }} ?>