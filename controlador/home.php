<?php
global $objModulo;
switch($objModulo->getId()){
	case 'home':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from producto where idPadre = 0;");
		$datos = array();
		while(!$rs->EOF){
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