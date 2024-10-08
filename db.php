<?php
session_start();

$host = getenv('MYSQL_CONTAINER');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');
$database = 'php_mysql_crud';

$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($conn));

?>
