<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=10tasks", "root", "root");
echo $pdo == true ? '' : 'lost db connection';

$sql = "SELECT * FROM text_form WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = 'Такой текст уже существует.';
    $_SESSION['message'] = $message;
    header("Location: /task_10.php");
    exit;
};


$sql = "INSERT INTO text_form (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
header('Location: /task_10.php');