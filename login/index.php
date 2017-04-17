<?php
	session_start();
?>

<?php
	include 'header.php';
?>	
	<form action="check2.php" method="post">
  		<p> 
  			Name<input type="text" name="name" value="" /><br>
  			Passwort<input type="password" name="password" value="" /><br>
  		    <input type="submit" value="anmelden" />
  		</p> 
  	</form>
	<a href="register.php">Registrieren</a>	

<?php
	include 'footer.php';
?>