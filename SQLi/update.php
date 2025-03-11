
<h3>SQL Injection - Update</h3>

<form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Submit">

</form>

<?php

include "../connect.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    $query = "update accounts set password = '".$_POST['password']."' where username = '".$_POST['username']."'";
    if($conn->query($query) === TRUE){
        echo "Record updated successfully";
    }else{
        echo "Error: ".$query."<br>".$conn->error;
    }
}

?>