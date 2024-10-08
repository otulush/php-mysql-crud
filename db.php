<?php
session_start();

$host = getenv('MYSQL_CONTAINER');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');
$database = getenv('MYSQL_DATABASE');

$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($conn));

?>
