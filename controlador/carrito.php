<?php
global $objModulo;
switch($objModulo->getId()){
	case 'productosPedido':
		if ($_POST['idPedido']){
			$db = TBase::conectaDB();
			$rs = $db->Execute("select * from movpedido where idPedido = ".$_POST['idPedido']);
			
			$datos = array();
			while(!$rs->EOF){
				$rs->fields['json'] = json_encode($rs->fields);
				
				array_push($datos, $rs->fields);
				$rs->moveNext();
			}
		}else
			$datos = array();
		
		$smarty->assign("lista", $datos);
	break;
	case 'cestados':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TEstado();
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setColor($_POST['color']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TEstado($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
};
?>