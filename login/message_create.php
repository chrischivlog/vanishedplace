<?php
session_start ();
?>

<?php
include 'header.php';
?>

	<?php
	if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
		
		?>

<form action="message_write.php" method="post">
	<div>
		<textarea cols="50" rows="10" name="message" maxlength="480"
			placeholder="Ihre Nachricht hier... Hinweis: Es werden nur Groß- Kleinbuchstaben, Punkt, Komma und Zahlen übertragen"></textarea>
	</div>
	<!-- <div>
	Zeit<input type="text" name="timennnn" value="" pattern="[a-zA-Z0-9]" />
	</div> -->
	<input type="submit" value="senden" class="button" />
</form>

<?php
	} else {
		echo "Du bist nicht Angemeldet";
		?>
<a href="index.php" class="button">Login</a>
<?php
	}
	
	?>	

<?php
include 'footer.php';
?>



