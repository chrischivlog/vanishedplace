<html>
	<body>
		<?php if ($_SERVER['SERVER_NAME'] != "vaplac.gnubis.de")
		{ 
			?> <img src="./pics/vanishedplace-header.png" alt="Footer" > <?php
		} else { 
			?> <img src="./pics/vanishedplace-header_r.png" alt="Footer" > <?php
		}
		?>
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