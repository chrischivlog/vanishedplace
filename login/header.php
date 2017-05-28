<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
<body>
	<header  class="content">
		
		<?php
		if ($_SERVER ['SERVER_NAME'] != "vaplac.gnubis.de") {
			?> <a href="index.php"><img src="./pics/vanishedplace-header.png"
				alt="header"></a> <?php
		} else {
			?> <a href="index.php"><img src="./pics/vanishedplace-header_r.png"
				alt="header"></a> <?php
		}
		?>
	
	
	
	
	</header>

	<nav class="content">
		<?php
		if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
			?>
			<a href="message_create.php" class="button">Verfassen</a> <a
			href="message_board.php" class="button">Board</a> <a
			href="show_users.php" class="button">Stats</a> <a href="logout.php"
			class="button_red">Logout</a>
			<?php
		}
		?>
	</nav>


	<main class="content">