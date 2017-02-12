<?php
	
session_start();
		 
	
?>


<html>
	<head>
	<h1>mail</h1>
	</head>
	<body>
	
	<?php
	
		$empfaenger = "chrischivlog@gmail.com";
		$betreff = "Die Mail-Funktion";
		$from = "From: vainishedplace@place.de";
		$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";
 
		mail($empfaenger, $betreff, $text, $from);
	
	
		echo "Mail an : $empfaenger";
			
	?>
	
	</body>
</html>