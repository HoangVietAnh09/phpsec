
<h3>Path Traversal - include </h3>
<?php


if(isset($_GET['filename'])){
    $filename = $_GET['filename'];
    include "../static/$filename";
}

?>