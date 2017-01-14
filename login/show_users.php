<?php
$pdo = new PDO('mysql:host=localhost;dbname=php', 'php_user', 'bla');


$sql = "SELECT user_id, name, password FROM users";
foreach ($pdo->query($sql) as $row) {
   echo $row['user_id']." ".$row['name']."<br />";
   echo "Password: ".$row['password']."<br /><br />";
}
?>