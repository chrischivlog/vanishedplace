<?php
	session_start();
?>

<?php
	include 'header.php';
?>

<html>
	<head>
	<h1>Fort Knox</h1>
	</head>
	<body>
	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
			echo "Hier ist das Geheimnis";
		} else {
			echo "Du bist nicht Angemeldet";
		}	
			
	?>	
	</body>
</html>