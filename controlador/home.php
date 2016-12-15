<?php
global $objModulo;
switch($objModulo->getId()){
	case 'home':
		$db = TBase::conectaDB();
		$padre = $_GET['id'] == ''?'0':$_GET['id'];
		$rs = $db->Execute("select * from producto where idPadre = ".$padre." and not idProducto = 0");
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
		
		#obtener la ruta del padre
		$datos = array();
		do{
			$rs = $db->Execute("select idProducto, nombre, clave, idPadre from producto where idProducto = ".$padre);
			$padre = $rs->fields['idPadre'];
			array_push($datos, array(
				"url" => "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/",
				"clave" => $rs->fields['clave'],
				"nombre" => $rs->fields['nombre']
			));
		}while($padre <> 0);
		
		$rs = $db->Execute("select idProducto, nombre, clave, idPadre from producto where idProducto = ".$padre);
		array_push($datos, array(
				"url" => "home/".$rs->fields['idProducto']."-".getURI($rs->fields['nombre'])."/",
				"clave" => $rs->fields['clave'] == ''?'Home':$rs->fields['clave'],
				"nombre" => $rs->fields['nombre'] == ''?'Home':$rs->fields['nombre']
		));
		$smarty->assign("breadcrumb", array_reverse($datos));
		
		if (count($hijos) == 0){
			$padre = $_GET['id'] == ''?'0':$_GET['id'];
			$rs = $db->Execute("select * from producto where idProducto = ".$padre);
			
			$smarty->assign("item", $rs->fields);
		}
	break;
}
?>