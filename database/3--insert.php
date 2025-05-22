<?php
$pdo = new PDO('mysql:host=localhost; dbname=php_project', 'root', '');
$sql = "insert into users(age,name,location) values(24,'New User','shan')";

$result = $pdo->prepare($sql);
$result->execute();

echo "Success";

?>