<?php
	session_start();
?>

<?php
	include 'db_conn.php';
	include 'header.php';
?>

<?php

	$sql = "SELECT user_id, name, password FROM users";
	foreach ($pdo->query($sql) as $row) {
 	  	echo $row['user_id']." ".$row['name']."<br /><br />";
	}
	
?>