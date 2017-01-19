<?php /* Smarty version Smarty-3.1.11, created on 2017-01-19 13:43:07
         compiled from "templates/plantillas/modulos/colores/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467503104588116cbe5af58-76979379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469b0e20fbaad85a5448614c9adddcf1e85f0ab1' => 
    array (
      0 => 'templates/plantillas/modulos/colores/lista.tpl',
      1 => 1475071577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467503104588116cbe5af58-76979379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_588116cc03ce33_22782728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588116cc03ce33_22782728')) {function content_588116cc03ce33_22782728($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Clave</th>
					<th>Nombre</th>
					<th>Código</th>
					<th>Ícono</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td style="border-left: 2px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['idColor'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['codigo'];?>
</td>
						<td class="text-center">
							<a href="repositorio/colores/color_<?php echo $_smarty_tpl->tpl_vars['row']->value['idColor'];?>
.jpg" target="_blank">
								<img src="repositorio/colores/color_<?php echo $_smarty_tpl->tpl_vars['row']->value['idColor'];?>
.jpg" onerror="javascript: this.src='<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
sinicono.jpg';" style="width: 20px;" />
							</a>
						</td>
						<td class="text-right">
							<button type="button" class="btn btn-default" action="imagen" title="Imagen" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idColor'];?>
"><i class="fa fa-picture-o"></i></button>
							<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idColor'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>