<?php
session_start ();
?>

<?php
if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
	header ( "location: message_board.php" );
}

?>	

<?php
include 'header.php';
?>
<form action="check2.php" method="post">
	<div>
		Name<br><input type="text" name="name" value="" />
	</div>
	<div>
		Passwort<br><input type="password" name="password" value="" />
	</div>
	<input type="submit" value="Anmelden" class="button" />

</form>
<a href="register.php" class="button">Registrieren</a>

<?php
include 'footer.php';
?>



