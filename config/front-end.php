<?php
#Home
$conf['home'] = array(
	'controlador' => 'home.php',
	'vista' => 'front-end/home.tpl',
	'descripcion' => 'El home',
	'seguridad' => false,
	'js' => array('carrito.class.js', 'pedido.class.js'),
	'jsTemplate' => array('home.js'),
	'capa' => LAYOUT_HOME);
	
$conf['itemsElemento'] = array(
	'controlador' => 'home.php',
	'vista' => 'front-end/elementosCompra.tpl',
	'descripcion' => 'Las opciones de compra',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['productosPedido'] = array(
	'controlador' => 'carrito.php',
	'vista' => 'front-end/productosCarrito.tpl',
	'descripcion' => 'Productos agregados a la compra',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);	
?>