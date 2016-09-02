<?php
define('SISTEMA', 'Gorilla Glass');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');
define('LAYOUT_JSON', 'layout/json.tpl');

#Login y su controlador
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);

$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Datos de usuario desde el panel*/
$conf['usuarioDatosPersonales'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/datosPersonales.tpl',
	'descripcion' => 'Cambiar datos personales',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('datosUsuario.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['panelPrincipal'] = array(
	#'controlador' => 'index.php',
	'vista' => 'inicio.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);

#Colores
$conf['colores'] = array(
	'controlador' => 'colores.php',
	'vista' => 'colores/panel.tpl',
	'descripcion' => 'Administración de colores',
	'seguridad' => true,
	'js' => array('color.class.js'),
	'jsTemplate' => array('colores.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaColores'] = array(
	'controlador' => 'colores.php',
	'vista' => 'colores/lista.tpl',
	'descripcion' => 'Lista de colores',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ccolores'] = array(
	'controlador' => 'colores.php',
	'descripcion' => 'Controlador de colores',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
#Texturas
$conf['texturas'] = array(
	'controlador' => 'texturas.php',
	'vista' => 'texturas/panel.tpl',
	'descripcion' => 'Administración de texturas',
	'seguridad' => true,
	'js' => array('textura.class.js'),
	'jsTemplate' => array('texturas.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaTexturas'] = array(
	'controlador' => 'texturas.php',
	'vista' => 'texturas/lista.tpl',
	'descripcion' => 'Lista de texturas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ctexturas'] = array(
	'controlador' => 'texturas.php',
	'descripcion' => 'Controlador de texturas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
#Tamaños
$conf['size'] = array(
	'controlador' => 'size.php',
	'vista' => 'size/panel.tpl',
	'descripcion' => 'Administración de size',
	'seguridad' => true,
	'js' => array('size.class.js'),
	'jsTemplate' => array('size.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaSize'] = array(
	'controlador' => 'size.php',
	'vista' => 'size/lista.tpl',
	'descripcion' => 'Lista de size',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['csize'] = array(
	'controlador' => 'size.php',
	'descripcion' => 'Controlador de size',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

?>