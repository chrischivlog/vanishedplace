<?php
	session_start();
?>

<?php
	include 'header.php';
?>

		<form action="check_register.php" method="post">
  			<p> 
  				Name<input type="text" name="name" value="" /><br>
  			  	Email<input type="text" name="mail" value="" /><br>	
  				Passwort<input type="password" name="password" value="" /><br>
  				<input type="submit" value="anmelden" />
  			</p> 

<?php
	include 'footer.php';
?>