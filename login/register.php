<?php
	
session_start();
		 
	
?>


<html>
	<head>
	<h1>Registrierung</h1>
	</head>
	<body>
	
		<form action="check_register.php" method="post">
  			<p> 
  				Name<input type="text" name="name" value="" /><br>
  			  	Email<input type="text" name="mail" value="" /><br>	
  				Passwort<input type="password" name="password" value="" /><br>
  				<input type="submit" value="anmelden" />
  			</p> 
  		</form>
	</body>
</html>