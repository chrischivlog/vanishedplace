<?php
session_start ();
?>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
include 'db_conn.php';
include 'header.php';
?>

	<?php
	echo "HINWEIS: Nachrichten verwanishen (verschwinden) sich nach 2 Stunden ;-). ";
	$sql = "SELECT count(*) anzahl " . "FROM messages m, users u " . "WHERE u.user_id = m.usr_cre_msg " . "AND cre_msg > DATE_SUB(NOW(), INTERVAL 2 HOUR) " . "ORDER by m.id_msg DESC";
	foreach ( $pdo->query ( $sql ) as $row ) {
		echo "Vanishedplace active messages: " . $row ['anzahl'];
	}
	if ($row ['anzahl'] = 0) {
		echo "Vanishedplace no active messages.";
	}
	
	if ((isset ( $_SESSION ["validsession"] )) and ($_SESSION ["validsession"] == "angemeldet")) {
		
		// $sql = "SELECT * FROM messages order by id_msg DESC";
		$sql = "SELECT m.id_msg, m.msg, m.min_msg, m.min_msg, u.name " . "FROM messages m, users u " . "WHERE u.user_id = m.usr_cre_msg " . "AND cre_msg > DATE_SUB(NOW(), INTERVAL 2 HOUR) " . "ORDER by m.id_msg DESC";
		?>


<div class="wrapper">	
				<?php
		foreach ( $pdo->query ( $sql ) as $row ) {
			?>
					<div class="table">

		<div class="row header blue">
			<div class="cell">
        						<?php echo $row ["name"];?>
      						</div>

		</div>

		<div class="row">

			<div class="cell">
								<?php echo $row ["msg"];?>
      						</div>

		</div>

	</div>
  					
  					<?php
		}
		?>
				</div>
<?php
	} else {
		echo "Du bist nicht Angemeldet! " ?? [ 
				"session_error_msg" 
		];
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


