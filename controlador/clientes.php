<?php
global $objModulo;
switch($objModulo->getId()){
	case 'clientes':
		$smarty->assign("cliente", new TCliente);
	break;
	case 'listaClientes':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cliente");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TCliente();
				
				if ($_POST['cliente'] <> ''){
					$rs = $db->Execute("select idCliente from cliente where email = '".$_POST['email']."'");
					
					if (!$rs->EOF){ #si es que encontró el email
						if ($rs->fields["idCliente"] <> $_POST['id']){
							$obj->setId($rs->fields['idCliente']);
							echo json_encode(array("band" => false, "mensaje" => "El correo electrónico ya se encuentra registrado con el cliente ".$obj->getNombre()));
							exit(1);
						}
					}
				}

				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setRFC($_POST['rfc']);
				$obj->setEmail($_POST['email']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setRazonSocial($_POST['razonSocial']);
				$obj->setLocalidad($_POST['localidad']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCelular($_POST['celular']);
				$obj->setObservaciones($_POST['observaciones']);
				$obj->setTipo($_POST['tipo']);
				
				if ($obj->guardar()){
					$rs = $db->Execute("select * from cliente where idCliente = ".$obj->getId());
					echo json_encode(array("band" => true, "cliente" => $obj->getid(), "data" => json_encode($rs->fields)));
				}else
					echo json_encode(array("band" => false, "cliente" => $obj->getid()));
				
			break;
			case 'del':
				$obj = new TCliente($_POST['cliente']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'autocomplete':
				$db = TBase::conectaDB();
				$rs = $db->Execute("select * from cliente where nombre like '%".$_GET['term']."%'");
				
				$datos = array();
				while(!$rs->EOF){
					$el = array();
					$el['id'] = $rs->fields['idCliente'];
					$el['label'] = $rs->fields['nombre'];
					$el['identificador'] = $rs->fields['idCliente'];
					foreach($rs->fields as $key => $val)
						$el[$key] = $val;
						
					array_push($datos, $el);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
			case 'getData':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from cliente where idCliente = ".$_GET['id']);
				echo json_encode($rs->fields);
			break;
		}
	break;
}
?>