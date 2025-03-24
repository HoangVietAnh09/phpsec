<?php
session_start();
class PHPObjectInjection{
    public $inject;
    function __construct(){
    }
    function __wakeup(){
        if(isset($this->inject)){
            eval($this->inject);
        }
    }
}
echo "Hello Admin<br>";
$_SESSION = unserialize(base64_decode(file_get_contents('../session.txt')));
foreach ($_SESSION as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>