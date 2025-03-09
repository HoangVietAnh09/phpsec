<?php
if(isset($_POST['submit'])){
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $name;
    echo "<br>";
    echo $age;

}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label><input type="text" name="name"  required></input>
    </div>
    <div>
        <labelb for="age">age: </label><input type="number" name="age" required></input>
    </div>
    <div>
    <input type="submit" value="submit" name="submit">
    </div> 
</form>