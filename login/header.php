<html>
	<body>
		<a href="index.php"><img src="./pics/vanishedplace-header.png" alt="Header"></img></a>
		</br>
		<?php
			if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) {
		?>
			<a href="message_create.php">Verfassen</a>
			<a href="message_board.php">Board</a>
			<a href="logout.php">Logout machen</a>
		<?php 
			}
		?>
		
		</br>
		</br>		