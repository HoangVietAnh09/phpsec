<?php
$file = "C:\\Users\\Admin\\Desktop\\race.py";
if(file_exists($file)){
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content.'<br>';
}else{
    $handle = fopen($file, 'w');
    $content = 'Hello '.PHP_EOL.'Vanh';
    fwrite($handle, $content);
    fclose($handle);
}