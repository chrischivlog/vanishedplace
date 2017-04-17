<?php
	session_start();
?>

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
			?><table style="width:100%"> 
				<tr>
    				<th>ID</th>
    				<th>MSG</th> 
    				<th>Time</th>
    				<th>Name</th>
    				<!-- <th>Date</th> -->    				    				
    		  	</tr><?php 
			
			foreach ($pdo->query($sql) as $row) {
				?><tr><?php	
					?><td><?php		echo $row ["id_msg"];?></td><?php	
					?><td><?php		echo $row ["msg"];?></td><?php	
					?><td><?php		echo $row ["min_msg"];?></td><?php	
					?><td><?php		echo $row ["name"];?></td><?php	
					/*
					?><td><?php		echo $row ["usr_cre_msg"];?></td><?php	
					?><td><?php		echo $row ["cre_msg"]; ?></td><?php
					*/
				?></tr><?php							

			}
			
			?></table><?php
			
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


