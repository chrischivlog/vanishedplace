

<?php
	session_start();
	include 'db_conn.php';
?>



<?php
	include 'header.php';
?>

<html>
	<head>
	<h1>Message Write</h1>
	</head>
	<body>
	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
				
			$sql = "INSERT INTO messages(msg) VALUES (:msg)";                             
			$stmt = $pdo->prepare($sql);
            $stmt->bindParam(':msg', $_POST['message'], PDO::PARAM_STR); 
            $stmt->execute();  
			echo $_POST['message'];
			
			
			
		} else {
			echo "Du bist nicht Angemeldet";
			?> 
				<a href="index.php">Login</a>
			<?php
		}	
			
	?>	
	</body>
</html>




