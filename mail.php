<?php

$error = null;

	$mail = $_GET['email'];
	$ime = $_GET['ime'];
	$poruka = $_GET['poruka'];
	
	if ( $poruka != '' && ( $mail != '' || $ime != '') ){
			
			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mail)) {

			  echo 'Upisana e-mail adresa nije valjana!<br/><input type="button" value="Zatvori" onclick="javascript:CloseAlert();">';
			  die();

			}

			
			
			$m = mail("sonjasvaganovic@yahoo.com",
					  "Poruka sa web stranice",
					  $ime . " je napisao/la:\n\n" . $poruka,
					  "From: ". $mail . "\r\n
					  Reply-To: ". $mail . "\r\n"
					);
			if ( $m ){
				echo 'Va&scaron;a poruka je uspje&scaron;no poslana.<br/><input type="button" value="Zatvori" onclick="javascript:CloseAlert();">';
			}else{
				echo 'Va&scaron;a poruka nije poslana, molimo probajte kasnije.<br/><input type="button" value="Zatvori" onclick="javascript:CloseAlert();">';
			}
			
	}else{
		echo'Potrebno je upisati poruku, te e-mail adresu ili ime i prezime!<br/><input type="button" value="Zatvori" onclick="javascript:CloseAlert();">';
	}


?>