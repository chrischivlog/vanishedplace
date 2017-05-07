<?php
session_start ();
header ( "location: message_board.php" );
include 'db_conn.php';
?>

<?php

if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
	echo "Du bist angemeldet";
} else if ((! isset ( $_POST ['name'] )) and (isset ( $_POST ['password'] ))) {
	echo "Du bist nicht Angemeldet. Bitte Anmelden auf: ";
	?>
<a href="index.php" class="button">Login</a>
<?php
}

if ((isset ( $_POST ['name'] )) and (isset ( $_POST ['password'] ))) {
	
	$name = $_POST ['name'];
	#$passwordencrypted = '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703';
	$passwordencrypted = hash('sha256', $_POST ["password"]);
	
	/*
	$loginvalid = false;
	$sql = "SELECT user_id, name, passwordenc FROM users where name='" . $name. "' and users.passwordenc = '" . $passwordencrypted . "' and verified = 1 ";
	$stmt = $pdo->prepare ( $sql );
	$stmt->bindParam ( ':name', $_POST ['name'], PDO::PARAM_STR );
	$stmt->bindParam ( ':passwordencrypted', $passwordencrypted, PDO::PARAM_STR );
	$stmt->execute ();
	
	foreach ( $pdo->query ( $sql ) as $row ) {
		$_SESSION ["validsession"] = "angemeldet";
		$_SESSION ["session_error_msg"] = "";
		$_SESSION ["user_id"] = $row ["user_id"];
	}
	*/
	#'; insert into users (name) values ('heinz2');
	

	$sql = "SELECT user_id, name, passwordenc FROM users where name= :name and users.passwordenc = :passwordencrypted and verified = 1 ";
	$stmt = $pdo->prepare ( $sql );
	$stmt->bindParam ( ':name', $name, PDO::PARAM_STR );
	$stmt->bindParam ( ':passwordencrypted', $passwordencrypted, PDO::PARAM_STR );
	$stmt->execute ();
	$row = 	$stmt->fetch();
	if ($row['name'].$row['passwordenc'] == $name.$passwordencrypted) {
		$_SESSION ["validsession"] = "angemeldet";
		$_SESSION ["session_error_msg"] = "";
		$_SESSION ["user_id"] = $row ["user_id"];
	} else {
		$_SESSION ["validsession"] = "falsch";
		$_SESSION ["session_error_msg"] = 'Zugriff verweigert! Passwort oder Login Falsch!';
	}

	
	
	

}

?>
		
