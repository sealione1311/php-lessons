<?php
require_once 'settings.php';
$connection = new PDO('mysql:host=localhost;dbname=lesson_site', $user, $password);
$query_command = "INSERT INTO `4`(`id_user`, `login`, `password`, `email`) VALUES (2,'user','pass232','user@mail.ru')";
$connection->exec($query_command);
?>
