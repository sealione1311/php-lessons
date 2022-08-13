<?php
require_once 'settings.php';
$connection = new mysqli($host, $user, $password, $data);

if($connection->connect_error) die('error connection');

$query_command = "SELECT * FROM `4`";
$result = $connection->query($query_command);

if(!$result) die('Error result');
$rows = $result->num_rows;

for ($i = 0; $i < $rows; ++$i) {
  $result->data_seek($i);
  echo 'Login: ' . $result->fetch_assoc()['login'];
};
$result->close();
$connection->close();
?>
