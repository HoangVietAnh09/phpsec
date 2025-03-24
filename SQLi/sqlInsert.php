<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'phpsec';


$conn = mysqli_connect($server, $user, $pass, $database);
$res = mysqli_query($conn, "insert into {$_GET['table']} values (null,'abc', 'def')");

?>

