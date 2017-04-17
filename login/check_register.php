<?php
	session_start();
?>

<?php
	include 'db_conn.php';
?>

<?php
	include 'header.php';
?>


	<?php
		$isCheckOK_Mail = false;
		$isCheckOK_Name = false;
		$isCheckOK_Password = false;

		#prüfen ob email enthalten
		if ( (isset($_POST['mail'])) and (strlen($_POST['mail'])>0) ) {
			$isCheckOK_Mail = true;
		} else {
			$isCheckOK_Mail = false;
			echo"Bitte email angeben.";
		}		
		
		
		#prüfen of name enthalten
		if ( (isset($_POST['name'])) and (strlen($_POST['name'])>0) ) {
			$isCheckOK_Name = true;
		} else {
			$isCheckOK_Name = false;
			echo"Bitte name angeben.";
		}		
		
		
		#prüfen of passwort enthalten
		if ( (isset($_POST['password'])) and (strlen($_POST['password'])>0) ) {
			$isCheckOK_Password = true;
		} else {
			$isCheckOK_Password = false;
			echo"Bitte passwort angeben.";
		}		
		
		
		#mail id generieren
		
		#zufalls zahl holen zwischen 1000000 un 2000000
		$mail_id_number = rand ( 1000000 , 2000000 );
		
		# mail id zusammenbauen mit namen  und mailadresse
		$mail_id_premd5 = $mail_id_number . $_POST['name'] . $_POST ["mail"];
		
		# md5 hash als mail id ablgen
		$mail_id = md5($mail_id_premd5);
		
				
	
		#eintrag in datenbank machen
		if ( $isCheckOK_Mail and $isCheckOK_Name and $isCheckOK_Password ) {
			echo"Eintrag wir erstellt, ";
			
			$sql = "INSERT INTO users(name, password, email, verified, mail_id) VALUES (:name, :password, :email, 0, :mail_id )";                             
			$stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR); 
            $stmt->bindParam(':password', $_POST ["password"], PDO::PARAM_STR);
            $stmt->bindParam(':email', $_POST ["mail"], PDO::PARAM_STR); 
            $stmt->bindParam(':mail_id', $mail_id, PDO::PARAM_STR);            
            $stmt->execute();  
			
		}		
		
		#email verschicken an obige email
		if ( $isCheckOK_Mail and $isCheckOK_Name and $isCheckOK_Password ) {
			$_SESSION["validsession_reg"] = "angemeldet";
			require './mailer/mailer.php';
		}			

	?>
	
<?php
	include 'footer.php';
?>