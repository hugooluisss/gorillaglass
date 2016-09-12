<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaProductos':
		$datos = array("nombre" => "Productos", "datos" => json_encode(array("idProducto" => 0)), "hijos" => recursionNodos(0), "idProducto" => 0);
		$smarty->assign("productos", $datos);
	break;
	case 'cproductos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TProducto;
				
				$obj->setId($_POST['id']);
				$obj->setClave($_POST['clave']);
				$obj->setNombre($_POST['nombre']);
				$obj->setPrecio($_POST['precio']);
				$obj->setPadre($_POST['padre']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TProducto($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}

function recursionNodos($padre){
	$db = TBase::conectaDB();
	
	$rs = $db->Execute("select * from producto where idPadre = ".$padre." and not idPadre = idProducto");
	
	if ($rs->EOF)
		return null;
	else{
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			$rs->fields['hijos'] = recursionNodos($rs->fields['idProducto']);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		return $datos;
	}

}
?>