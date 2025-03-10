<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'phpsec';

$conn = new mysqli($server, $user, $pass, $database);

if($conn){
    echo 'Ket noi thanh cong';
    echo '<pre>';
}
?>