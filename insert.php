<?php
$pdo = new PDO('mysql:host=localhost;dbname=bsit201_portugal_chatroom','root','');

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$query = 'INSERT INTO accounts(email,password,name) VALUES(:email,:password,:name)';

$stmt = $pdo->prepare($query);

$stmt->bindValue ('email',$email);
$stmt->bindValue ('password',$password);
$stmt->bindValue ('name',$name);
$stmt->execute();
?>