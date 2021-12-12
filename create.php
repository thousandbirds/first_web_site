<?php

require_once 'config/connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$description = $_POST['description'];
$question = $_POST['question'];

mysqli_query($connect, query:"INSERT INTO `practice form` (`id`, `name`, `surname`, `mail`, `number`, `description`, `question`) VALUES (NULL, '$name', '$surname', '$mail', '$number', '$description', '$question')");

header('Location: ../index.php')
?>