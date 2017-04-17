<?php
	session_start();
?>

<?php
	include 'db_conn.php';
	include 'header.php';
?>

	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
				
			$sql = "INSERT INTO messages(msg, usr_cre_msg, min_msg) VALUES (:msg, :usr_cre_msg, :min_msg)";                             
			$stmt = $pdo->prepare($sql);
            $stmt->bindParam(':msg', $_POST['message'], PDO::PARAM_STR); 
            $stmt->bindParam(':usr_cre_msg', $_SESSION ["user_id"], PDO::PARAM_STR);
            $stmt->bindParam(':min_msg', $_POST ["time"], PDO::PARAM_STR);            
            $stmt->execute();  
			echo $_POST['message'];
			
			
			
		} else {
			echo "Du bist nicht Angemeldet";
			?> 
				<a href="index.php">Login</a>
			<?php
		}	
			
	?>	

<?php
	include 'footer.php';
?>



