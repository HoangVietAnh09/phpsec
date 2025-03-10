
<h3>Path Traversal - fopen </h3>
<?php

if(isset($_GET['filename'])){
    $filename = '../static/'.$_GET['filename'];
    if (file_exists($filename)) {
        $handle = fopen($filename, "r"); 
        while (($line = fgets($handle)) !== false) { 
            echo $line . "<br>";
        }
        fclose($handle); 
    } else {
        echo "File không tồn tại!";
    }
}





?>