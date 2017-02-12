

<?php
	session_start();
	include 'db_conn.php';
?>




<html>
	<head>
	<h1>Check Register2</h1>
	</head>
	<body>
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
		
	
		#eintrag in datenbank machen
		if ( $isCheckOK_Mail and $isCheckOK_Name and $isCheckOK_Password ) {
			echo"Eintrag wir erstellt, ";
			
			$sql = "INSERT INTO USERS(name, password, email, verified) VALUES (:name, :password, :email, 0)";                             
			$stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR); 
            $stmt->bindParam(':password', $_POST ["password"], PDO::PARAM_STR);
            $stmt->bindParam(':email', $_POST ["mail"], PDO::PARAM_STR);            
            $stmt->execute();  
			
		}		
		
		
		#email verschicken an obige email
		if ( $isCheckOK_Mail and $isCheckOK_Name and $isCheckOK_Password ) {
			echo"Email wird gesendet";
		}			
		



/*
		
			if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
				echo "Du bist angemeldet";
			} else if ( (!isset($_POST['name'])) and (isset($_POST['password'])) ) {
				echo "Du bist nicht Angemeldet. Bitte Anmelden auf: "; 
				?> 
					<a href="index.php">Login</a>
				<?php
			}
			
			if ( (isset($_POST['name'])) and (isset($_POST['password'])) ) {
		
				
				$loginvalid = false;
			
				$sql = "SELECT user_id, name, password FROM users where name='".$_POST['name']."' and users.password = '".$_POST['password']."'";
				#echo "<br>".$sql."<br>";
			
				foreach ($pdo->query($sql) as $row) {
					$loginvalid = true;
					$_SESSION ["user_id"] = $row ["user_id"];
				}
			
				if ($loginvalid) {
					echo "Sie sind angemeldet!"; 
					
					$_SESSION["validsession"] = "angemeldet";
					
					header("location: fortknox.php"); 

				}
				else {
					echo 'Zugriff verweigert!'; 
				}

			}   			

*/

		?>
		
<?php
	include 'header.php';
?>
		
	</body>
	<br>
	<a href="fortknox.php">Zugriff auf geheime Daten</a>
	
</html>