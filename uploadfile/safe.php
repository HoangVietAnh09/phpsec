<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Safe</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF'];?> method="post" enctype="multipart/form-data">
        <div>
            <label for="upload">Select image to upload</label>
            <input type="file" name="upload">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>

<?php
function checkSignature($file_name){
    $file = fopen($file_name, "r");
    $signature = fread($file, 4);
    fclose($file);

    $hex = bin2hex($signature);
    echo $hex."<br>";
    $while_list_signature = array("89504e47", "ffd8ffe0", "ffd8ffe1", "47494638");
    if(in_array($hex, $while_list_signature))
        return true;
    return false;

}


if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){
        $file_name = $_FILES['upload']['name'];
        echo $file_name."<br>";
        $file_size = $_FILES['upload']['size'];
        echo $file_size."<br>";
        $file_tmp = $_FILES['upload']['tmp_name'];
        echo $file_tmp."<br>";
        $target_dir = "../uploads/$file_name";

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $while_list = array('png', 'jpg', 'jpeg', 'gif');
        $while_list_mime_type = array("image/png", "image/jpg", "image/jpeg", "image/gif");

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo, $file_tmp);
        echo $mime_type."<br>";
        finfo_close($finfo);


        if(in_array($file_ext, $while_list) && in_array($mime_type, $while_list_mime_type) && checkSignature($file_tmp)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);
            }else{
                echo "File is too large";
            }
        }else{
            echo "Hack detected";
        }
    }else{
        echo "Invalid file";
    }
}
?>