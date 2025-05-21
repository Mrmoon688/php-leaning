<?php
$pdo = new PDO('mysql:dbname=php_project;host=localhost', 'root', '');  //pdo obj နဲ့  database ချိတ်ဆက်တယ်

$user_id = $_GET['user_id']; // $_GET နဲ့ query ကို လှမ်းယူတယ်။
$sql = "select * from users where id=?";

$result = $pdo->prepare($sql);
$result->execute([$user_id]);
$data = $result->fetch(PDO::FETCH_ASSOC);

// print_r($data);

if ($data) {
    print_r($data);
} else {
    echo "User not found";
}
