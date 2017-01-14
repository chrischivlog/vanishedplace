<?php
	session_start();
?>

<html>
	<head>
	<h1>Fort Knox</h1>
	</head>
	<body>
	<?php
		echo $_SESSION["validsession"];
		#geheimer Text	
	?>	
	</body>
</html>