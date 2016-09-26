<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaColores':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from color");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'ccolores':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TColor();
				
				$obj->setId($_POST['id']);
				$obj->setClave($_POST['clave']);
				$obj->setNombre($_POST['nombre']);
				$obj->setCodigo($_POST['codigo']);
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TColor($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'validaClave':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select idColor from color where clave = '".$_POST['txtClave']."' and not idColor = '".$_POST['id']."'");
				
				echo $rs->EOF?"true":"false";
			break;
		}
	break;
}
?>