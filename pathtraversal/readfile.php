
<h3>Path Traversal - readfile </h3>
<?php

if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    readfile($filename);
}

?>