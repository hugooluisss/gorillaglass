<?php
global $objModulo;
switch($objModulo->getId()){
	case 'clientes':
		$smarty->assign("cliente", new TCliente);
	break;
	case 'listaClientes': case 'clientesPedido':
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
			case 'confirmacion':
				$obj = new TCliente();
				$obj->setId(base64_decode($_GET['cliente']));
				
				$obj->setEstado("A");
				$obj->guardar();
				
				$email = new TMail;
				global $ini;
				$email->setTema("Bienvenido");
				$email->setDestino($obj->getEmail(), utf8_decode($obj->getNombre()));
				
				$datos = array();
				$datos['cliente.nombre'] = $obj->getNombre();
				$datos['sitio.url'] = $ini["sistema"]["urlmail"];
				$datos['sitio.nombre'] = $ini["sistema"]["nombreEmpresa"];
				$datos['cliente.urlconfirmacion'] = "?mod=cclientes&action=confirmacion&cliente=".base64_encode($obj->getId());
				$datos['sitio.emailcontacto'] = $ini["mail"]["user"];
				
				$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/confirmacionCuenta.html"), $datos)));
				
				$emailBand = $email->send();
				
				header('Location: inicio');
			break;
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TCliente();
				
				//if ($_POST['id'] <> ''){
					$rs = $db->Execute("select idCliente from cliente where email = '".$_POST['email']."'");
					
					if (!$rs->EOF){ #si es que encontró el email
						if ($rs->fields["idCliente"] <> $_POST['id']){
							$obj->setId($rs->fields['idCliente']);
							echo json_encode(array("band" => false, "mensaje" => "El correo electrónico ya se encuentra registrado con el cliente ".$obj->getNombre(), "message" => "Email account is already registered with another user"));
							exit(1);
						}
					}
				//}

				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$emailBand = $obj->getNombre() == '';
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
				$obj->setSitioWeb($_POST['sitioWeb']);
				$obj->setEstado($_POST['estado']);
				$obj->setPass($_POST['pass']);
				
				$emailBand = true;
				if ($obj->guardar()){
					if ($emailBand){
						$email = new TMail;
						global $ini;
						$email->setTema("Bienvenido");
						$email->setDestino($obj->getEmail(), utf8_decode($obj->getNombre()));
						
						$datos = array();
						$datos['cliente.nombre'] = $obj->getNombre();
						$datos['sitio.url'] = $ini["sistema"]["urlmail"];
						$datos['sitio.nombre'] = $ini["sistema"]["nombreEmpresa"];
						$datos['cliente.urlconfirmacion'] = "?mod=cclientes&action=confirmacion&cliente=".base64_encode($obj->getId());
						$datos['sitio.emailcontacto'] = $ini["mail"]["user"];
						$datos['cliente.email'] = $obj->getEmail();
						$datos['cliente.pass'] = $obj->getPass();
						
						$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/bienvenida.html"), $datos)));
						
						$emailBand = $email->send();
					}
					
					$rs = $db->Execute("select * from cliente where idCliente = ".$obj->getId());
					echo json_encode(array("band" => true, "cliente" => $obj->getid(), "data" => json_encode($rs->fields), "sendEmail" => $emailBand));
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