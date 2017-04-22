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
			if ( isset($_GET['id']) ) {
		
				$loginvalid = false;
		
				$sql = "SELECT user_id, name, password FROM users where mail_id = '".$_GET['id']."'";
			
				foreach ($pdo->query($sql) as $row) {
					$loginvalid = true;
				}
			
				if ($loginvalid) {
					echo "Sie sind freigeschalten!"; 
					
					$sql = "update users set verified = 1 where mail_id = '".$_GET['id']."'";
					$stmt = $pdo->prepare($sql);        
            		$stmt->execute();  
			
					?>
						</br><a href="index.php">Anmelden</a>	
					<?php
				}
				else {
					echo 'Zugriff verweigert!'; 
				}

			}   			
		?>

	
<?php
	include 'footer.php';
?>