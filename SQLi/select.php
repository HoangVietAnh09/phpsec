
<h3>SQL Injection - Select</h3>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="get">
    <input type="text" name="username" placeholder="Username">
    <input type="submit" value="Select">
</form>
<?php


if(isset($_GET['username'])){
    include "../connect.php";

    $query = "select * from accounts where username = '".$_GET['username']."'";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: ".$row["id"]."<br>";
            echo "Username: ".$row["username"]."<br>";
            echo "Password: ".$row["password"]."<br>";
            echo "<hr>";
        }
    }
}


?>