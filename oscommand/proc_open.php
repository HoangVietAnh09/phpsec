<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
    <div class='ping'>
        <label for="ip">ip: </label><input type="text" name="ip"  required></input>
    </div>
</form>

<?php
$desciptorspec = [
    0 => ['pipe','r'],
    1 => ['pipe', 'w']
];

if(isset($_POST['ip'])){
    $ip = $_POST['ip'];
    $process = proc_open('ping '.$ip, $desciptorspec, $pipes);

    if(is_resource($process)){
        fwrite($pipes[0], $ip);
        fclose($pipes[0]);
        $output = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        proc_close($process);
        echo "<pre>$output</pre>";
    }
}

?>