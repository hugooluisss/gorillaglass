<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>.:: {$PAGE.empresaAcronimo} ::.</title>
		<base href="{$PAGE.url}index.php" target="_top">
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}front-end/style.less?m={rand()}" />
		
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
		
		{if $PAGE.vista neq ''}
			{include file=$PAGE.vista}
		{/if}
		
		<div id="redesSociales" class="container text-center">
			<a href="https://www.facebook.com/GorillaGlass/">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="http://instagram.com/gorillaglass/">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-instagram fa-stack-1x"></i>
				</span>
			</a>
			
			<a href="https://twitter.com/GorillaGlass1">
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
			{date("Y")} GORILLA GLASS &#8482;
		</div>
		<div id="footer">
			<div class="container text-center">
				{if $PAGE.sesion.perfil eq "cliente"}
					{if $vista eq ''}
						Our products
					{else}
						<a href="#" class="addProducto" identificador="{$itemId}" totalEtiquetas="{$etiquetas|@count}"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Add this product to your shopping cart!</a>
					{/if}
				{else}
					<a href="inicio">Where to buy?</a>
				{/if}
			</div>
		</div>
		
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
    	
    	<link rel="stylesheet" href="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.css">
		<script src="{$PAGE.ruta}plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="{$PAGE.ruta}plugins/datatables/lenguaje/ES-mx.js"></script>
    	
    	{foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
	</body>
</html>