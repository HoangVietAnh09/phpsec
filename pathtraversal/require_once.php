
<h3>Path Traversal - require_once </h3>
<?php

if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    require_once '../static/'.$filename;
}

?>