<?php /* Smarty version Smarty-3.1.11, created on 2016-12-07 13:56:56
         compiled from "templates/plantillas/layout/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134632205584703618a6d04-86959427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ca9aa948c6307384dd4e1670c7dc45b622d415' => 
    array (
      0 => 'templates/plantillas/layout/home.tpl',
      1 => 1481140615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134632205584703618a6d04-86959427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5847036191dea9_64975626',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847036191dea9_64975626')) {function content_5847036191dea9_64975626($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['empresaAcronimo'];?>
 ::.</title>
		<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
front-end/style.less" />
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="menu-principal fixed">
			<div class="barraNegra">&nbsp;</div>
			
			<div class="block left">
				<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="logo"/>
				<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
nombre.png" />
			</div>
			
			<div class="block right">
				<form class="navbar-form" role="search">
					<div class="form-group">
						<input type="text" class="form-control search" placeholder="Search">
					</div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
iconCar.png">
				</form>
			</div>
		</nav>
		<div class="bar icons">
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item1.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item2.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item1.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item2.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item1.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item2.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item1.png" /></a>
			<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/tipos/item2.png" /></a>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<h3 class="page-title">PLUGS</h3>
				</div>
				<div class="col-md-4 col-sm-6">
					<label for="selSortBy" class="col-xs-4">SORT BY</label>
					<div class="col-xs-8">
						<select id="selSortBy" name="selSortBy" class="finder">
							<option value="NEWEST">NEWEST</option>
							<option value="MOST POPLUAR">MOST POPLUAR</option>
							<option value="smtolg">GAUGE SIZE (SM TO LG)</option>
							<option value="lgtosm">GAUGE SIZE (LG TO SM)</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		</div>
		
		
		<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?m=<?php echo rand();?>
"></script>
		<?php } ?>
	    
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	</body>
</html><?php }} ?>