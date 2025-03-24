<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'phpsec';


$conn = mysqli_connect($server, $user, $pass, $database);
// $res = mysqli_query($conn, "SELECT {$_GET['option']}, password FROM accounts");
// $res = mysqli_query($conn, "SELECT password FROM {$_GET['table']}");
// $res = mysqli_query($conn, "SELECT password FROM accounts WHERE username = '{$_GET['username']}'");
// $res = mysqli_query($conn, "SELECT password FROM accounts GROUP BY {$_GET['title']}");
$row = mysqli_fetch_array($res);
echo "<center>";
// echo "<h1>".$row['username']."</h1>";
echo "<br>";
echo "<h1>".$row['password']."</h1>";
echo "</center>";

?>

