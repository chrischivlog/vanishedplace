

<?php
				
	if ((isset( $_SESSION["validsession_reg"])) and ($_SESSION["validsession_reg"] == "angemeldet")) { 
		echo "Es wurde eine Mail versendet.";
	} else {
		echo "Du hast hierfür keine Berechtigung! "; 
	}
	
	if ($_SERVER['SERVER_NAME'] == "vaplac.gnubis.de"){
		echo "Mailversand";
	} else {
		echo "hier ist der <a href = ./check_regmail.php?id=".$mail_id.">Link</a>";   
	}
	
	
?>


<?php

#	echo "mailer";
#	
#	
#	$to      = 'moneisz@gnubis.de';
#	$subject = 'the subject';
#	$message = 'hello';
#	$headers = 'From: webmaster@example.com' . "\r\n" .
#			'Reply-To: webmaster@example.com' . "\r\n" .
#			'X-Mailer: PHP/' . phpversion();
#	
#	mail($to, $subject, $message, $headers);
	
?>