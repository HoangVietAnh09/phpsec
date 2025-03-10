
<h3>Path Traversal - file_get_contents </h3>
<?php

if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    // $content = file_get_contents("../static/".$filename);
    $content = file_get_contents("php://filter/convert.base64-encode/resource=home.php");

    echo $content;
}

?>