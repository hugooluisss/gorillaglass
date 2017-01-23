<?php
global $objModulo;
#hay que obtener todos los items que dependen del nodo padre
$db = TBase::conectaDB();
$rs = $db->Execute("select * from producto where idPadre = 0 and not idProducto = 0");
$datos = array();
while(!$rs->EOF){
	$rs->fields['url'] = "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/";
	array_push($datos, $rs->fields);
	
	$rs->moveNext();
}

$smarty->assign("nodosPrimerNivel", $datos);

switch($objModulo->getId()){
	case 'home':
		$db = TBase::conectaDB();
		global $sesion;
		
		if($sesion['usuario'] <> ''){
			$rs = $db->Execute("select idPedido, idEstado from pedido where idCliente = ".$sesion['usuario']." order by idPedido desc limit 1");
			$smarty->assign("idPedido", ($rs->fields['idEstado'] == 1)?$rs->fields['idPedido']:"");
			$smarty->assign("cliente", $sesion['usuario']);
		}
		
		$padre = $_GET['id'] == ''?'0':$_GET['id'];
		$producto = new TProducto($padre);
		$smarty->assign("nombreItem", $producto->getNombre());
		$smarty->assign("itemId", $producto->getId());
		
		if ($producto->getId() <> 0 )
			$producto->addVisita();
		
		$productoPadre = new TProducto($producto->getPadre());
		if ($productoPadre->getPadre() == 0){
			$json = json_decode(file_get_contents("repositorio/etiquetas/etiquetas.json"));
			$clave = $productoPadre->getClave();
			if ($clave <> '')
				$smarty->assign("etiquetas", $json->$clave);
		}

		$directorio  = scandir("repositorio/productos/producto_".$producto->getId()."/");			
		$images = array();
		foreach($directorio as $file){
			if (!in_array($file, array("..", ".")))
				array_push($images, $file);
		}
		$smarty->assign("images", $images);
		
		if($producto->getVista() <> '')
			$smarty->assign("vista", $producto->getVista());
		else{
			switch($_COOKIE['ordenProductos']){
				case 'MOST POPULAR':
					$orden = "order by visitas desc";
				break;
				case 'NEWEST': default:
					$orden = "order by idProducto desc";
					#setcookie("ordenProductos", "NEWEST");
					$_COOKIE['ordenProductos'] = "NEWEST";
				break;
			}
			
			$smarty->assign("ordenProductos", $_COOKIE['ordenProductos']);
			
			$rs = $db->Execute("select * from producto where idPadre = ".$padre." and not idProducto = 0 ".$orden);
			$datos = array();
			while(!$rs->EOF){
				$rs->fields['url'] = "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/";
				
				$directorio  = scandir("repositorio/productos/producto_".$rs->fields['idProducto']."/");
				
				$rs->fields['img'] = array();
				foreach($directorio as $file){
					if (!in_array($file, array("..", ".")))
						array_push($rs->fields['img'], $file);
				}
					
				$rs->fields['json'] = json_encode($rs->fields);
				array_push($datos, $rs->fields);
				$rs->moveNext();
			}
			
			$smarty->assign("hijos", $datos);
		}
		#obtener la ruta del padre
		$datos = array();
		while($padre <> 0){
			$rs = $db->Execute("select idProducto, nombre, clave, idPadre from producto where idProducto = ".$padre);
			$padre = $rs->fields['idPadre'];
			array_push($datos, array(
				"url" => "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/",
				"clave" => $rs->fields['clave'],
				"nombre" => $rs->fields['nombre']
			));
		}
		
		/*
		$rs = $db->Execute("select idProducto, nombre, clave, idPadre from producto where idProducto = ".$padre);
		array_push($datos, array(
			"url" => "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/",
			"clave" => $rs->fields['clave'] == ''?'Home':$rs->fields['clave'],
			"nombre" => $rs->fields['nombre'] == ''?'Home':$rs->fields['nombre']
		));
		*/
		$smarty->assign("breadcrumb", array_reverse($datos));
		
		if (count($hijos) == 0){
			$padre = $_GET['id'] == ''?'0':$_GET['id'];
			$rs = $db->Execute("select * from producto where idProducto = ".$padre);
			
			$smarty->assign("item", $rs->fields);
		}
	break;
	case 'itemsElemento':
		$item = $_POST['item'];
		$db = TBase::conectaDB();
		$index = $_POST['index'];
		
		if ($index == $_POST['total'])
			$rs = $db->Execute("select a.*, b.precio, b.nombre as nombreAdd from producto a join articulo b using(idProducto) where idPadre = ".$item." and not idProducto = 0 order by a.clave");
		else
			$rs = $db->Execute("select * from producto where idPadre = ".$item." and not idProducto = 0 order by clave");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields["nombre2"] = substr($rs->fields['nombre'], 0, 10);
			$rs->fields["index"] = $index+1;
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'placeOrder':
		$db = TBase::conectaDB();
		global $sesion;
		global $ini;
		require_once(getcwd()."/repositorio/pdf/pedido.php");
		$rs = $db->Execute("select idPedido, idEstado from pedido where idCliente = ".$sesion['usuario']." order by idPedido desc limit 1");
		
		$pedido = new TPedido($rs->fields['idPedido']);
		$pedido->estado->setId(2);
		$pedido->setFecha(date("Y-m-d"));
		$pedido->guardar();
		
		$pdf = new RPedido(($rs->fields['idEstado'] == 1)?$rs->fields['idPedido']:"");
		$pdf->generar();
		$archivo = $pdf->output();
		//$obj->setId($_POST['id']);
		
		$obj = new TCliente($sesion['usuario']);
		$datos = array();
		$datos['cliente.nombre'] = $obj->getNombre();
		$datos['sitio.url'] = $ini["sistema"]["urlmail"];
		$datos['sitio.nombre'] = $ini["sistema"]["nombreEmpresa"];
		$datos['sitio.emailcontacto'] = $ini["mail"]["user"];
		$datos['cliente.email'] = $obj->getEmail();
		$datos['cliente.pass'] = $obj->getPass();
		
		$email = new TMail;
		$cuerpo = utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/setOrden.html"), $datos));
		$subject = "Your order";
		$random_hash = md5(date('r', time())); 
		
		//$headers   = array();
		$headers = "MIME-Version: 1.0;\r\n";
		$headers .= "From: GorillaGlass <".$ini['mail']['user'].">;\r\n";
		$headers .= "Reply-To: <".$ini['mail']['user'].">;\r\n";
		$headers .= "Content-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
		
		$adjuntos = chunk_split(base64_encode(file_get_contents($archivo))); 

		$salto = "\r";
		
		$msg = "--PHP-mixed-".$random_hash.$salto;
		$msg .= 'Content-Type: multipart/alternative; boundary="PHP-alt-'.$random_hash.'"'.$salto; 
		$msg .= '--PHP-alt-'.$random_hash.$salto;
		$msg .= 'Content-Type: text/html; charset="iso-8859-1"'.$salto;
		$msg .= 'Content-Transfer-Encoding: 7bit'.$salto.$salto;
		$msg .= $cuerpo;

		$msg .= '--PHP-alt-'.$random_hash.'--'.$salto;

		$msg .= '--PHP-mixed-'.$random_hash.$salto;

		$msg .= 'Content-Type: application/x-pdf; name="order.pdf"'.$salto;
		$msg .= 'Content-Transfer-Encoding: base64'.$salto;
		$msg .= 'Content-Disposition: attachment'.$salto;

		$msg .= $adjuntos;
		$msg .= '--PHP-mixed-'.$random_hash.'--'.$salto;

		$emailBand = imap_mail($obj->getEmail(), $subject, $msg, $headers);
		#$emailBand = imap_mail("hugooluisss@gmail.com", $subject, $msg, $headers);
	break;
	case 'chome':
		switch($objModulo->getAction()){
			case 'setOrden':
				#setcookie("ordenProductos", $_POST['orden'], time() + 3600);
				$_COOKIE['ordenProductos'] = $_POST['orden'];
			break;
		}
	break;
}
?>