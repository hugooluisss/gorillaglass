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
		
		$smarty->assign("nodosPadre", $datos);
	break;
}
?>