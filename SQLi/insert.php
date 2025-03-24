
<h3>SQL Injection - Insert</h3>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Submit">
</form>


<?php

include "../connect.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    $query = "insert into accounts (username, password) values ('".$_POST['username']."', '".$_POST['password']."')";
    if($conn->query($query) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: ".$query."<br>".$conn->error;
    }
}


?>