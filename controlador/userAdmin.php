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
			$rs = $db->Execute("select idPedido from pedido where idEstado = 1 and idCliente = ".$sesion['usuario']." order by idPedido desc limit 1");
		
			$smarty->assign("idPedido", $rs->fields['idPedido']);
			$smarty->assign("cliente", $sesion['usuario']);
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
}
?>