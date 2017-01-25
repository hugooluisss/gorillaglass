<?php
global $objModulo;

switch($objModulo->getId()){
	case 'profile':
		global $sesion;
		if ($sesion['perfil'] == "cliente")
			$smarty->assign("cliente", new TCliente($sesion['usuario']));
		else
		$smarty->assign("cliente", new TCliente());
	break;
	case 'currentOrder':
		global $sesion;
		$db = TBase::conectaDB();
		
		if($sesion['usuario'] <> ''){
			$rs = $db->Execute("select idPedido, idEstado from pedido where idCliente = ".$sesion['usuario']." order by idPedido desc limit 1");
		
			$smarty->assign("idPedido", ($rs->fields['idEstado'] == 1)?$rs->fields['idPedido']:"");
			$smarty->assign("cliente", $sesion['usuario']);
			
			if ($sesion['perfil'] == "cliente")
				$smarty->assign("clienteObj", new TCliente($sesion['usuario']));
		}
	break;
	case 'orderHistory':
		global $sesion;
		$db = TBase::conectaDB();
		
		$datos = array();
		if($sesion['perfil'] == 'cliente'){
			$rs = $db->Execute("select idPedido, fecha, sum(precio) as subtotal, c.*, c.nombre as estado from pedido a join movpedido b using(idPedido) join estadopedido c using(idEstado) where idCliente = ".$sesion['usuario']." group by idPedido order by fecha desc");
			
			while(!$rs->EOF){
				$precio = $rs->fields['subtotal'];
				if ($precio <= 500){
					$descuento = 0;
					$etiquetaDescuento = "0";
				}elseif ($precio <= 1000){
					$descuento = $precio * 0.05;
					$etiquetaDescuento = "5";
				}elseif ($precio <= 1500){
					$descuento = $precio * 0.1;
					$etiquetaDescuento = "10";
				}else{
					$descuento = $precio * 0.15;
					$etiquetaDescuento = "15";
				}
				
				$rs->fields['subtotal'] -= $descuento;
				array_push($datos, $rs->fields);
				$rs->moveNext();
			}
		}
		
		$smarty->assign("ordenes", $datos);
	break;
	case 'priceList':
		$db = TBase::conectaDB();
		$multiplicador = 1;
		$colores = array();
		$rs = $db->Execute("select * from color");
		
		while(!$rs->EOF){
			array_push($colores, $rs->fields['clave']);
			$rs->moveNext();
		}
		
		
		$rs = $db->Execute("select * from articulo group by clave");
		$datos = array();
		while(!$rs->EOF){
			$codigo = "";
			#$principal = explode("-", $rs->fields["clave"]);
			#$principal = $principal[0];
			foreach(explode("-", $rs->fields["clave"]) as $code){
				if (!in_array($code, $colores))
					$codigo .= ($codigo == ''?'':'-').$code;
			}
			
			$rs->fields['clave'] = $codigo;
			$rs->fields["precio"] *= $multiplicador;
			#$rs->fields["madre"] = $principal;
			
			$datos[$rs->fields['clave']] = $rs->fields;
			#array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cuserAdmin':
	case 'cuseradmin':
		switch($objModulo->getAction()){
			case 'multiplicador': default:
				$db = TBase::conectaDB();
				$multiplicador = $_POST['multiplicador'] == ''?1:$_POST['multiplicador'];
				$colores = array();
				$rs = $db->Execute("select * from color");
				
				while(!$rs->EOF){
					array_push($colores, $rs->fields['clave']);
					$rs->moveNext();
				}
				
				
				$rs = $db->Execute("select * from articulo group by clave");
				$datos = array();
				while(!$rs->EOF){
					$codigo = "";
					foreach(explode("-", $rs->fields["clave"]) as $code){
						if (!in_array($code, $colores))
							$codigo .= ($codigo == ''?'':'-').$code;
					}
					
					$rs->fields['clave'] = $codigo;
					$rs->fields["precio"] *= $multiplicador;
					$datos[$rs->fields['clave']] = $rs->fields;
					#array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				$rs = $db->Execute("select * from producto where idPadre = 0 and not idProducto = 0");
				$madres = array();
				while(!$rs->EOF){
					$madres[$rs->fields['clave']] = $rs->fields;
					$rs->moveNext();
				}
				
				require_once(getcwd()."/repositorio/pdf/productos.php");
				$pdf = new RProductos($madres);
				ksort($datos);
				
				$pdf->generar($datos);
				if($objModulo->getAction() == '')
					$pdf->Output2();
				else
					$smarty->assign("json", array("band" => true, "documento" => $pdf->output()));
			break;
		}
	break;
}
?>