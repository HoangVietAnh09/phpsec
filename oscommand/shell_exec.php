<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
    <div class='ping'>
        <label for="ip">ip: </label><input type="text" name="ip"  required></input>
    </div>
</form>

<?php
if(isset($_POST['ip'])){
    $ip = $_POST['ip'];
    $output = shell_exec("ping ".$ip); 
    echo "<pre>$output</pre>";
}

?>