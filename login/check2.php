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
			
				$sql = "SELECT user_id, name, password FROM users where name='".$_POST['name']."' and users.password = '".$_POST['password']."' and verified = 1 ";
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
		?>
		
<?php
	include 'footer.php';
?>