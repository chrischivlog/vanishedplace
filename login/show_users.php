<?php
session_start ();
?>

<?php
include 'db_conn.php';
include 'header.php';
?>

<?php
if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
	
	$sql = "SELECT count(name) anzahl FROM users";
	foreach ( $pdo->query ( $sql ) as $row ) {
		echo "Vanishedplace user count: " . $row ['anzahl'];
	}
	
	$sql = "SELECT count(*) anzahl " . "FROM messages m, users u " . "WHERE u.user_id = m.usr_cre_msg " . "AND cre_msg > DATE_SUB(NOW(), INTERVAL 2 HOUR) " . "ORDER by m.id_msg DESC";
	?></br><?php
	foreach ( $pdo->query ( $sql ) as $row ) {
		echo "Vanishedplace active messages: " . $row ['anzahl'];
	}
	
	$sql = "SELECT min(m.id_msg)-1 anzahl " . "FROM messages m, users u " . "WHERE u.user_id = m.usr_cre_msg " . "AND cre_msg > DATE_SUB(NOW(), INTERVAL 2 HOUR) " . "ORDER by m.id_msg DESC";
	?></br><?php
	foreach ( $pdo->query ( $sql ) as $row ) {
		echo "Vanishedplace vanished messages: " . $row ['anzahl'];
	}
	
	
	
} else {
	echo "Du bist nicht Angemeldet! ";
	?>
<div>
	</br> <a href="index.php" class="button">zum Login</a>
</div>
<?php
}

?>

<?php
include 'footer.php';
?>