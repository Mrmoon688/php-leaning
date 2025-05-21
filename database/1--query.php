<?php
$pdo = new PDO("mysql:host=localhost; dbname=php_project", "root", "");
$sql = "SELECT * FROM category";

$result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $data) {
    echo "<pre>";
    print_r($data);
    echo $data["name"];
}
