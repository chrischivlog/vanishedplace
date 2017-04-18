

<?php
				
	if ((isset( $_SESSION["validsession_reg"])) and ($_SESSION["validsession_reg"] == "angemeldet")) { 
		echo "Es wurde eine Mail versendet.";
	} else {
		echo "Du hast hierfür keine Berechtigung! "; 
	}
	
	
	if ($_SERVER['SERVER_NAME'] == "vaplac.gnubis.de"){
		echo "Mailversand";
		$mail_link_srv = 'http://vaplac.gnubis.de';
 		$mail_link = $mail_link_srv . '/check_regmail.php?id=' . $mail_id; 
 		$to      = 'chrischimc@gmail.com';
		$subject = 'registrierung auf Vaplac';
		$message = 'Hallo, vielen dank das sie sich auf unser seite Angemldet haben. Bitte bestättigen sie ihre Email adreese mit dem in der E-Mail angegebenen Link. ' . $mail_link;
		$headers = 	'From: noreply@vaplac.gnubis.de' . "\r\n" .
					'Reply-To: noreply@vaplac.gnubis.de' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	} else {
		$mail_link_srv = '.';
 		$mail_link = $mail_link_srv . '/check_regmail.php?id=' . $mail_id;
 		echo "hier ist der <a href = ./check_regmail.php?id=".$mail_id.">Link</a>";  
	}
	
	
?>


