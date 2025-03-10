
<h3>Path Traversal - require </h3>
<?php

if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    require "../static/".$filename;
}

?>