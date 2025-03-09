<?php

session_start();

if(isset($_POST['submit'])){
    $username =     $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS );
    $password = $_POST['password'];

    if($username == 'vanh' && $password='1'){
        $_SESSION['username'] = $username;
        header('Location: /phpsec/db.php');
    }else{
        echo "Hack";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
    
    <div class="username">
        <label for="username">username: </label><input type="text" name="username"  required></input>
    </div>
   
    <div  class="password">
        <labelb for="password">password: </label><input type="text" name="password" required></input>
    </div>
    
    <input type="submit" value="Login" name="submit">
</form>