<?php
	session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
	include 'db_conn.php';
	include 'header.php';
?>

	<?php
		#echo $_SESSION["validsession"];
		#geheimer Text	
		if ((isset( $_SESSION["validsession"])) and ($_SESSION["validsession"] == "angemeldet")) { 
				
			#$sql = "SELECT * FROM messages order by id_msg DESC";
			$sql = "SELECT m.id_msg, m.msg, m.min_msg, m.min_msg, u.name  FROM messages m, users u WHERE u.user_id = m.usr_cre_msg order by m.id_msg DESC"; 
			?>

			
				<div class="wrapper">	
				<?php
				foreach ($pdo->query($sql) as $row) {
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
			echo "Du bist nicht Angemeldet";
			?> 
				<a href="index.php">Login</a>
			<?php
		}	
			
	?>	

<?php
	include 'footer.php';
?>


