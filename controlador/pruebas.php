<?php
global $objModulo;
switch($objModulo->getId()){
	case 'cpruebas':
		switch($objModulo->getAction()){
			case 'correo':
				
				$email = new TMail;
				$cuerpo = utf8_decode("Hola mundo");
				$subject = utf8_decode("Prueba del sistema");
				$random_hash = md5(date('r', time())); 
				
				//$headers   = array();
				$headers = "MIME-Version: 1.0;\r\n";
				$headers .= "From: GorillaGlass <".$ini['mail']['user'].">;\r\n";
				$headers .= "Reply-To: <".$ini['mail']['user'].">;\r\n";
				$headers .= "Content-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
				
				$adjuntos = chunk_split(base64_encode(file_get_contents($archivo))); 
		
				$salto = "\r";
				
				$msg = "--PHP-mixed-".$random_hash.$salto;
				$msg .= 'Content-Type: multipart/alternative; boundary="PHP-alt-'.$random_hash.'"'.$salto; 
				$msg .= '--PHP-alt-'.$random_hash.$salto;
				$msg .= 'Content-Type: text/html; charset="iso-8859-1"'.$salto;
				$msg .= 'Content-Transfer-Encoding: 7bit'.$salto.$salto;
				$msg .= $cuerpo.$salto;
		
				$msg .= '--PHP-alt-'.$random_hash.'--'.$salto;
				$cuerpo = $cuerpo;
				$msg .= '--PHP-mixed-'.$random_hash.$salto;
				
				/*
				$msg .= 'Content-Type: application/x-pdf; name=""'.$salto;
				$msg .= 'Content-Transfer-Encoding: base64'.$salto;
				$msg .= 'Content-Disposition: attachment'.$salto;
		
				$msg .= $adjuntos;
				$msg .= '--PHP-mixed-'.$random_hash.'--'.$salto;
				*/
				echo 'asdf';
				$emailBand = imap_mail("hugooluisss@gmail.com", $subject, $msg, $headers);
				echo json_encode(array("band" => $emailBand));
			break;
		}
	break;
};
?>