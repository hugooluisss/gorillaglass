<?php /* Smarty version Smarty-3.1.11, created on 2016-12-14 22:02:11
         compiled from "templates/plantillas/layout/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049699628584f7ba0b4e4a3-81677027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ca9aa948c6307384dd4e1670c7dc45b622d415' => 
    array (
      0 => 'templates/plantillas/layout/home.tpl',
      1 => 1481774529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049699628584f7ba0b4e4a3-81677027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_584f7ba0cd00b9_16621546',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584f7ba0cd00b9_16621546')) {function content_584f7ba0cd00b9_16621546($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>.:: <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['empresaAcronimo'];?>
 ::.</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['url'];?>
index.php" target="_top">
		<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
front-end/style.less" />
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/ionicons.min.css">
	</head>
	<body>
		<nav class="menu-principal fixed">
			<div class="barraNegra">&nbsp;</div>
			
			<div class="block left">
				<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="logo"/>
				<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
nombre.png" class="hidden-xs" />
			</div>
			
			<div class="block right">
				<form class="navbar-form" role="search">
					<div class="form-group text-right">
						<input type="text" class="form-control search" placeholder="Search">
					</div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
iconCar.png" />
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
				<div class="col-md-8 col-sm-6 col-xs-12">
					<h3 class="page-title">PLUGS</h3>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 pull-right text-right">
					SORT BY
					<div class="btn-group order">
						<button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NEWEST</button>
						<button type="button" class="btn btn-secundary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
						<div class="dropdown-menu">
							<li><a class="dropdown-item" href="#">NEWEST</a></li>
							<li><a class="dropdown-item" href="#">MOST POPLUAR</a></li>
							<li><a class="dropdown-item" href="#">GAUGE SIZE (SM TO LG)</a></li>
							<li><a class="dropdown-item" href="#">GAUGE SIZE (LG TO SM)</a></li>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="container">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		</div>
		
		<div id="redesSociales" class="container text-center">
			<a href="#">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="#">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-instagram fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="#">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-twitter fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="#">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-youtube-play fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="#">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-envelope-o fa-stack-1x"></i>
				</span>
			</a>
		</div>
		<div id="otherLinks" class="container text-center">
			<a href="#">BUY WHOLESALE</a>
			<a href="#">BUY RETAIL</a>
			<a href="#">CONTACT US</a>
		</div>
		
		<div id="copyright" class="container text-center">
			<?php echo date("Y");?>
 GORILLA GLASS
		</div>
		<div id="footer">
			<div class="container text-center">
				<a href="#">Where to buy?</a>
			</div>
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
		
		<!-- jQuery 2.1.4 -->
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.css" />
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-select/css/bootstrap-select.min.css" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/bootstrap-select/js/i18n/defaults-es_CL.min.js"></script>
	    
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	</body>
</html><?php }} ?>