

<?php
	session_start();
?>



<?php
	include 'header.php';
?>

<html>
	<head>
	<h1>Message Create</h1>
	</head>
	<body>
	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
			
			?>
			
			<form action="message_write.php" method="post">
				<textarea cols="50" rows="10" name="message">Ihre Nachricht hier...</textarea>
				Zeit<input type="text" name="time" value="" />
				<input type="submit" value="senden" />
			</form>						
			
			<?php	
		} else {
			echo "Du bist nicht Angemeldet";
			?> 
				<a href="index.php">Login</a>
			<?php
		}	
			
	?>	
	</body>
</html>




