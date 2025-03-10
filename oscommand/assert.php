
<form action=<?php echo $_SERVER['PHP_SELF']?> method='post'>
        <input type='text' id='input' name='input' />
        <input type='submit' />
</form>
<?php
//php version 5.

if(isset($_POST['input'])){
    $pl = $_POST['input'];
    $assertion = '1 == '.$pl;
    
    echo "<br>".$assertion."<br>";
    assert($assertion);
}



//1 && system("whoami");