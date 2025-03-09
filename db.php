<?php
session_start();
if(isset($_SESSION['username'])){
    echo'<h1> Wellcome ' .$_SESSION['username'] . '</h1> </br> <hr> <a href="logout.php"> homepage </a>'; 
}else{
    echo'<h1> Log Out </h1> <br> <a href="logout.php"> - Logout </a> ';
}

?>