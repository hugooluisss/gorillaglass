<?php
#Home
$conf['home'] = array(
	'controlador' => 'home.php',
	'vista' => 'front-end/home.tpl',
	'descripcion' => 'El home',
	'seguridad' => false,
	#'js' => array('producto.class.js'),
	'jsTemplate' => array('home.js'),
	'capa' => LAYOUT_HOME);
?>