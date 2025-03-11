<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 3</title>
    <script>
        window.alert = function(){
            confirm("Next level");
            window.location.href="4.php?name=test";
        }
    </script>
</head>
<body>
    <h1 align=center>Level 3</h1>

    <?php 
    ini_set("display_errors", 0);
    $str = $_GET["name"];

    ?>

    <div align=center>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="get">
            <label for="name">Enter your name:</label><br><br>
            <?php echo "<input type=\"text\" name=\"name\" value='".htmlspecialchars($str, ENT_NOQUOTES)."'>"?>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>

    <?php echo "<h2 align=center>Hello ".htmlspecialchars($str)."</h2>"; ?>
    
</body>
</html>