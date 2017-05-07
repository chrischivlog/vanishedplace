<?php
session_start ();
header ( "location: message_board.php" );
include 'db_conn.php';
?>


	<?php
	
	$message = preg_replace('/[^a-zA-Z0-9äÄöÖüÜß.,]/', ' ', $_POST ['message']);
	
	$time = 1;
	if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
		
		$sql = "INSERT INTO messages(msg, usr_cre_msg, min_msg) VALUES (:msg, :usr_cre_msg, :min_msg)";
		$stmt = $pdo->prepare ( $sql );
		$stmt->bindParam ( ':msg', $message, PDO::PARAM_STR );
		$stmt->bindParam ( ':usr_cre_msg', $_SESSION ["user_id"], PDO::PARAM_STR );
		$stmt->bindParam ( ':min_msg', $time, PDO::PARAM_STR );
		// $stmt->bindParam ( ':min_msg', $_POST ["time"], PDO::PARAM_STR );
		$stmt->execute ();
	}
	?>	





