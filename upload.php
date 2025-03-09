<?php 


if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $allowed_ext = array('png');
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);

                $massage = '<p style="color:green;">file uploaded successfully</p>';
            }else{
                $massage = '<p style="color:red;">File is too large</p>';
            }
    

        }else{
            $massage = '<p style="color:red;">Please choose a file</p>';
        }


    }else {
        $massage = '<p style=" Invalid file</p>';
    }
    echo $massage;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <di>
        <label for="upload">Eng: Select image to upload</label>
        <input type="file" name="upload">
         <input type="submit" value="submit" name='submit'>

    </di>
    </form>
</body>
</html>