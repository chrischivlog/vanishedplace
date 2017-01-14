<?php
	$pdo = new PDO('mysql:host=localhost;dbname=php', 'php_user', 'bla');
?>

<html>
	<head>
	<h1>Check2</h1>
	</head>
	<body>
		<?php
		
			$loginvalid = false;
			
			$sql = "SELECT user_id, name, password FROM users where name='".$_POST['name']."' and users.password = '".$_POST['password']."'";
			#echo "<br>".$sql."<br>";
			
			foreach ($pdo->query($sql) as $row) {
				$loginvalid = true;
			}
			
			if ($loginvalid) {
				echo "Sie sind angemeldet!"; 
				session_start();
				$_SESSION["validsession"] = "angemeldet";
			}
			else {
				echo 'Zugriff verweigert!'; 
			}
   			
		?>
	</body>
	<br>
	<a href="fortknox.php">Zugriff auf geheime Daten</a>
	
</html>