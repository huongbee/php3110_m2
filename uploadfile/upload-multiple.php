<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

date_default_timezone_set("Asia/Ho_Chi_Minh");

if(isset($_POST['btnUpload'])){
    $file = $_FILES['image'];  
    echo "<pre>";  
    print_r($file);
    echo "</pre>";
    
    //kiem tra filezise <=1mb
    //chi cho phep upload hinh png, jpg, gif, jpeg
    //rename file
    //neu ma co 1 trong cac file upload ko thanh cong, rollback 


    //tmpname, nameFile
}

?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <button type="submit" name="btnUpload">Upload</button>
    </form>

</body>
</html>