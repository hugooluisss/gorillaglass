<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.empresaAcronimo} ::.</title>
		<base href="{$PAGE.url}index.php" target="_top">
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}front-end/style.less" />
		
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/ionicons.min.css">
	</head>
	<body>
		<nav class="menu-principal fixed">
			<div class="barraNegra">&nbsp;</div>
			
			<div class="block left">
				<img src="{$PAGE.iconos}logo.png" class="logo"/>
				<img src="{$PAGE.iconos}nombre.png" class="hidden-xs" />
			</div>
			
			<div class="block right">
				<form class="navbar-form" role="search">
					<div class="form-group text-right">
						<input type="text" class="form-control search" placeholder="Search">
					</div>
					<img src="{$PAGE.iconos}iconCar.png" />
				</form>
			</div>
		</nav>
		<div class="bar icons">
			<a href="#"><img src="{$PAGE.iconos}/tipos/item1.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item2.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item1.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item2.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item1.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item2.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item1.png" /></a>
			<a href="#"><img src="{$PAGE.iconos}/tipos/item2.png" /></a>
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
			{if $PAGE.vista neq ''}
				{include file=$PAGE.vista}
			{/if}
		</div>
		
		<div id="footer">
			<div class="container text-center">
				<a href="#">Where to buy?</a>
			</div>
		</div>
    
		{foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
		
		<!-- jQuery 2.1.4 -->
		<script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.css" />
		<!-- Bootstrap 3.3.5 -->
		<script src="{$PAGE.ruta}bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/bootstrap-select/css/bootstrap-select.min.css" />
		<script src="{$PAGE.ruta}plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
		<script src="{$PAGE.ruta}plugins/bootstrap-select/js/i18n/defaults-es_CL.min.js"></script>
	    
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	</body>
</html>