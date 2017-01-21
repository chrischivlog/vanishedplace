<?php 
	if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) {
		?>
			<a href="logout.php">Logout machen</a>
		<?php 
	}
					
?>
			<a href="message_create.php">Verfassen</a>
			<a href="message_board.php">Board</a>	