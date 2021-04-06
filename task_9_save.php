<?php

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=10tasks", "root", "root");
echo $pdo == true ? '' : 'lost db connection';
$sql = "INSERT INTO text_form (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
