
<h3>SQL Injection - Delete</h3>

<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="get">
    <input type="text" name="username" placeholder="username">
    <input type="submit" value="Delete">
</form>
<?php

if (isset($_GET['username'])) {
    include "../connect.php";
    $query = "delete from accounts where username = '" . $_GET['username'] . "'";
    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>