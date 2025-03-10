
<h3>Path Traversal - Safe </h3>
<?php


if(isset($_GET['filename'])){
    /*Cach 1:

    $dir = realpath("../static").DIRECTORY_SEPARATOR;
    $filename = realpath($dir.$_GET['filename']);

    //PHP version < 8.
    if(strpos($filename, $dir) !== 0) die("Hack");

    //PHP version > 8
    if(str_starts_with($filename, $dir)) die("Hack");

    $content = file_get_contents($filename);
    echo $content;*/
    

    $pattern = '/^[a-zA-Z0-9_-]+$/i';
    $filename = $_GET['filename'];
    if(preg_match($pattern, $filename)){
        $content = file_get_contents('../static/'.$filename);
        echo $content;
        // echo '<br>';
        // echo "<pre>";
        // print_r(stream_get_wrappers());
        // echo "<pre>";
    }else{
        die('Hack');
    }

}

?>