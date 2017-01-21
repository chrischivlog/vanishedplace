<?php 
	if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) {
		?>
			<a href="logout.php">Logout machen</a>
		<?php 
	}	
?>