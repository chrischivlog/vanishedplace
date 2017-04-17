<?php
	session_start();
?>

<?php
	include 'header.php';
?>

	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
			echo "Herzlich Willkommen auf vanishedplace";
		} else {
			echo "Du bist nicht Angemeldet";
		}	
			
	?>	
	

<?php
	include 'footer.php';
?>