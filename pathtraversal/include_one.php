
<h3>Path Traversal - include_once </h3>
<?php

if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    include_once '../static/'.$filename;
}

?>