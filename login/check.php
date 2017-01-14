<html>
	<head>
	<h1>Check</h1>
	</head>
	<body>
		<?php
		
			if ($_POST['name'] == "xxx" and $_POST['password'] == "sesam") {
				echo "Sie sind angemeldet!"; 
			}
			else {
				echo 'Zugriff verweigert!'; 
			}
		echo $_POST['name'];
		echo"<br>";
		echo $_POST['password'];		
		?>
	</body>
</html>