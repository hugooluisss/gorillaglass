<?php /* Smarty version Smarty-3.1.11, created on 2016-09-23 22:54:14
         compiled from "templates/plantillas/modulos/productos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205137009457d5715843a362-94104829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cccdd047db745f66593d92cdbd37eb8bb7dd6ad' => 
    array (
      0 => 'templates/plantillas/modulos/productos/lista.tpl',
      1 => 1474689250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205137009457d5715843a362-94104829',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'level' => 1,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57d5715843b1f5_42547365',
  'variables' => 
  array (
    'data' => 0,
    'entry' => 0,
    'level' => 0,
    'productos' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d5715843b1f5_42547365')) {function content_57d5715843b1f5_42547365($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
		<tr class="treegrid-<?php echo $_smarty_tpl->tpl_vars['entry']->value['contador'];?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value!=''){?>treegrid-parent-<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<?php }?>">
			<td><span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['entry']->value['clave'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['nombre'];?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['entry']->value['precio'];?>
</td>
			<td class="text-right"><b><?php echo $_smarty_tpl->tpl_vars['entry']->value['total'];?>
</b></td>
			<td>
				<button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='<?php echo $_smarty_tpl->tpl_vars['entry']->value['json'];?>
'><i class="fa fa-plus"></i></button>
				<button type="button" class="btn btn-default" action="imagen" title="Imagen" identificador="<?php echo $_smarty_tpl->tpl_vars['entry']->value['idProducto'];?>
"><i class="fa fa-picture-o"></i></button>
				<button type="button" class="btn btn-default" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['entry']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
				<?php if (count($_smarty_tpl->tpl_vars['entry']->value['hijos'])==0){?>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" datos='<?php echo $_smarty_tpl->tpl_vars['entry']->value['json'];?>
'><i class="fa fa-minus"></i></button>
				<?php }?>
			</td>
		</tr>
		
		<?php if (is_array($_smarty_tpl->tpl_vars['entry']->value['hijos'])){?>
			<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['entry']->value['hijos'],'level'=>$_smarty_tpl->tpl_vars['entry']->value['contador']));?>

		<?php }?>
	<?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<table class="tree2 table-bordered table-striped table-condensed table" id="productos">
	<tr class="treegrid-1">
		<th>Productos</th>
		<th>Precio</th>
		<th>Venta</th>
		<th><button type="button" class="btn btn-success" action="agregar" title="Nuevo" datos='<?php echo $_smarty_tpl->tpl_vars['entry']->value['json'];?>
'><i class="fa fa-plus"></i></button></th>
	</tr>
	<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['productos']->value['hijos'],'level'=>$_smarty_tpl->tpl_vars['productos']->value['contador']));?>

</table><?php }} ?>