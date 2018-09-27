<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaProductosPrincipales':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from carousel");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['existe'] = file_exists("repositorio/principales/".$rs->fields['idItem'].".jpg");
			
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cproductosprincipales':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				if ($_POST['id'] == '')
					$db->query("insert into carousel (url, posicion) values ('".$_POST['url']."', ".$_POST['posicion'].")");
				else
					$db->query("update carousel set url = '".$_POST['url']."', posicion = ".$_POST['posicion']." where idItem = ".$_POST['id']);
					
				echo json_encode(array("band" => true, "id" => $_POST['id'] == ''?$db->Insert_ID():$_POST['id']));
			break;
			case 'del':
				$db = TBase::conectaDB();
				$db->query("delete from carousel where idItem = ".$_POST['id']);
				
				echo json_encode(array("band" => true));
			break;
			case 'upload':
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0 && $_GET['id'] <> ''){
					$carpeta = "repositorio/principales/";
					if (!file_exists($carpeta))
						mkdir($carpeta, 0755);
									
					if(move_uploaded_file($_FILES['upl']['tmp_name'], $carpeta.$_GET['id'].".jpg")){
						chmod($carpeta.$_GET['id'].".jpg", 0755);
						echo '{"status":"success"}';
						exit;
					}
				}
				
				echo '{"status":"error"}';
			break;
		}
	break;
}