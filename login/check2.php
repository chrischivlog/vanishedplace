

<?php
	session_start();
	include 'db_conn.php';
?>




<html>
	<head>
	<h1>Check2</h1>
	</head>
	<body>
		<?php
		
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
		?>
		
<?php
	include 'header.php';
?>
		
	</body>
	<br>
	<a href="fortknox.php">Zugriff auf geheime Daten</a>
	
</html>