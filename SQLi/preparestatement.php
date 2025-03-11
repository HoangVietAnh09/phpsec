
<h3>SQL Injection - preparestatement</h3>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="get">
    <input type="text" name="username" placeholder="Username">
    <input type="submit" value="Select">
</form>

<?php

if(isset($_GET['username'])){
    include "../connect.php";
    $username = $_GET['username'];
    $stmt = $conn->prepare("select * from accounts where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: ".$row["id"]."<br>";
            echo "Username: ".$row["username"]."<br>";
            echo "Password: ".$row["password"]."<br>";
            echo "<hr>";
        }
    }
    $stmt->close();
}

?>