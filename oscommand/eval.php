<html>
    <head>
    </head>
    <body>
     
    <h4> PHP Eval </h4>
     
    <form action=<?php echo $_SERVER['PHP_SELF']?> method='post'>
        <input type='text' id='input' name='input' />
        <input type='submit' />
    <?php
    if (isset($_POST['input'])) {
        print '<fieldset><legend>Result</legend>';
        eval('print '.$_POST['input'].';');
        print '</fieldset>';
    }
    ?>
    </form>
    </body>
    </html>

