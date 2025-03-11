<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" enctype="multipart/form-data">
        <div>
            <label for="upload">Select image to upload</label>
            <input type="file" name="upload">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "../uploads/$file_name";
        
        move_uploaded_file($file_tmp, $target_dir);
    }else{
        echo "Invalid file";
    }
}

?>