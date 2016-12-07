<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.empresaAcronimo} ::.</title>
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}front-end/style.less" />
		
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="menu-principal fixed">
			<div class="barraNegra">&nbsp;</div>
			
			<div class="block left">
				<img src="{$PAGE.iconos}logo.png" class="logo"/>
				<img src="{$PAGE.iconos}nombre.png" />
			</div>
			
			<div class="block right">
				<form class="navbar-form" role="search">
					<div class="form-group">
						<input type="text" class="form-control search" placeholder="Search">
					</div>
					<img src="{$PAGE.iconos}iconCar.png">
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
			{if $PAGE.vista neq ''}
				{include file=$PAGE.vista}
			{/if}
		</div>
		
		
		{foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
	    
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	</body>
</html>